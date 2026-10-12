<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Studentfeemaster_model extends MY_Model
{

    protected $balance_group;
    protected $balance_type;

    public function __construct()
    {
        parent::__construct();
        $this->load->config('ci-blog');
        $this->balance_group   = $this->config->item('ci_balance_group');
        $this->balance_type    = $this->config->item('ci_balance_type');
        $this->current_session = $this->setting_model->getCurrentSession();
    }

    /**
     * @return Route_pickup_point_fee_resolver
     */
    private function routePickupFeeResolver()
    {
        if (!isset($this->route_pickup_point_fee_resolver)) {
            $this->load->library('route_pickup_point_fee_resolver');
            $this->route_pickup_point_fee_resolver = $this->route_pickup_point_fee_resolver;
        }

        return $this->route_pickup_point_fee_resolver;
    }

    /**
     * @param bool   $includeStudentSessionJoin
     * @param string $studentSessionAlias
     * @return string
     */
    private function getEffectiveRoutePickupJoinSql($includeStudentSessionJoin = true, $studentSessionAlias = 'ss')
    {
        return $this->routePickupFeeResolver()->getEffectiveRoutePickupJoinSql(
            'rpp_legacy',
            'rpp_session',
            $studentSessionAlias,
            $includeStudentSessionJoin
        );
    }

    /**
     * Transport fee amount from route pickup (backup DB may lack student_transport_fees.fee_amount).
     */
    private function getTransportMonthlyAmountExpression($alias = 'fees')
    {
        return $this->routePickupFeeResolver()->getTransportMonthlyAmountExpression($alias);
    }

    public function searchAssignFeeByClassSection($class_id = null, $section_id = null, $fee_session_group_id = null, $category = null, $gender = null, $rte = null)
    {
        $sql = "SELECT IFNULL(`student_fees_master`.`id`, '0') as `student_fees_master_id`,`classes`.`id` AS `class_id`,"
        . " `student_session`.`id` as `student_session_id`, `students`.`id`, "
        . "`classes`.`class`, `sections`.`id` AS `section_id`, `sections`.`section`, "
        . "`students`.`id`, `students`.`admission_no`, `students`.`roll_no`,"
        . " `students`.`admission_date`, `students`.`firstname`, `students`.`middlename`,`students`.`lastname`,"
        . " `students`.`image`, `students`.`mobileno`, `students`.`email`, `students`.`state`,"
        . " `students`.`city`, `students`.`pincode`, `students`.`religion`, `students`.`dob`, "
        . "`students`.`current_address`, `students`.`permanent_address`,"
        . " IFNULL(students.category_id, 0) as `category_id`,"
        . " IFNULL(categories.category, '') as `category`,"
        . " `students`.`adhar_no`, `students`.`samagra_id`,"
        . " `students`.`bank_account_no`, `students`.`bank_name`, `students`.`ifsc_code`,"
        . " `students`.`guardian_name`, `students`.`guardian_relation`, `students`.`guardian_phone`,"
        . " `students`.`guardian_address`, `students`.`is_active`, `students`.`created_at`,"
        . " `students`.`updated_at`, `students`.`father_name`, `students`.`rte`,"
        . " `students`.`gender` FROM `students` JOIN `student_session` "
        . "ON `student_session`.`student_id` = `students`.`id` JOIN `classes` "
        . "ON `student_session`.`class_id` = `classes`.`id` JOIN `sections` "
        . "ON `sections`.`id` = `student_session`.`section_id` LEFT JOIN `categories` "
        . "ON `students`.`category_id` = `categories`.`id` LEFT JOIN student_fees_master on"
        . " student_fees_master.student_session_id=student_session.id"
        . "  AND student_fees_master.fee_session_group_id=" . $this->db->escape($fee_session_group_id)
        . "WHERE `student_session`.`session_id` =  " . $this->current_session
            . " and `students`.`is_active` =  'yes'";

        if ($class_id != null) {
            $sql .= " AND `student_session`.`class_id` = " . $this->db->escape($class_id);
        }
        if ($section_id != null) {
            $sql .= " AND `student_session`.`section_id` =" . $this->db->escape($section_id);
        }
        if ($category != null) {
            $sql .= " AND `students`.`category_id` =" . $this->db->escape($category);
        }
        if ($gender != null) {
            $sql .= " AND `students`.`gender` =" . $this->db->escape($gender);
        }
        if ($rte != null) {
            $sql .= " AND `students`.`rte` =" . $this->db->escape($rte);
        }
        $sql .= " ORDER BY `students`.`id`";

        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function add($data)
    {       
        $this->db->where('student_session_id', $data['student_session_id']);
        $this->db->where('fee_session_group_id', $data['fee_session_group_id']);
        $q = $this->db->get('student_fees_master');

        if ($q->num_rows() > 0) {
            return $q->row()->id;
        } else {
            $this->db->insert('student_fees_master', $data);
            $id = $this->db->insert_id();            
            $message   = INSERT_RECORD_CONSTANT . " On student fees master id " . $id;
            $action    = "Insert";
            $record_id = $id;
            $this->log($message, $record_id, $action);            
        } 
    }

    public function assign_bulk_fees($fee_session_group,$student_session_id,$delete_fee_session_group)
    {
        if(!empty($fee_session_group)){
            $data_insert=array();
            foreach ($fee_session_group as $fee_session_key => $fee_session_value) {
                $array=array();
               $array['is_system']=0;
               $array['student_session_id']=$student_session_id;
               $array['fee_session_group_id']=$fee_session_value;
               $data_insert[]=$array;
            }
            $this->db->insert_batch('student_fees_master', $data_insert);
        }

        if(!empty($delete_fee_session_group)){
            $this->db->where('student_session_id', $student_session_id);
            $this->db->where_in('fee_session_group_id', $delete_fee_session_group);
            $this->db->delete('student_fees_master');
        }
    }
    
    public function addPreviousBal($student_data, $due_date)
    {
        $this->db->trans_start();
        $this->db->trans_strict(false);
        $fee_group_exists = $this->feegroup_model->checkGroupExistsByName($this->balance_group);
        $fee_type_exists  = $this->feetype_model->checkFeetypeByName($this->balance_type);
        $fee_group_id     = 0;
        $fee_type_id      = 0;
        if (!$fee_group_exists) {
            $this->db->insert('fee_groups', array('name' => $this->balance_group, 'is_system' => 1));
            $fee_group_id = $this->db->insert_id();
        } else {
            $fee_group_id = $fee_group_exists->id;
        }

        if (!$fee_type_exists) {
            $this->db->insert('feetype', array('type' => $this->balance_type, 'code' => $this->balance_type, 'is_system' => 1));
            $fee_type_id = $this->db->insert_id();
        } else {
            $fee_type_id = $fee_type_exists->id;
        }
        $to_be_insert = array(
            'session_id'           => $this->current_session,
            'fee_groups_id'        => $fee_group_id,
            'feetype_id'           => $fee_type_id,
            'fee_session_group_id' => 0,
            'due_date'             => $due_date,
        );
        $parentid = $this->feesessiongroup_model->group_exists($to_be_insert['fee_groups_id']);

        $to_be_insert['fee_session_group_id'] = $parentid;

        $session_group_exists = $this->feesessiongroup_model->checkExists($to_be_insert);
        if (!$session_group_exists) {
            $this->db->insert('fee_groups_feetype', $to_be_insert);
        } else {
            $this->db->where('id', $session_group_exists);
            $this->db->update('fee_groups_feetype', $to_be_insert);
        }
        $student_list = array();
        if (isset($student_data) && !empty($student_data)) {

            $total_rec = count($student_data);
            for ($i = 0; $i < $total_rec; $i++) {
                $student_list[]                           = $student_data[$i]['student_session_id'];
                $student_data[$i]['id']                   = 0;
                $student_data[$i]['fee_session_group_id'] = $parentid;
            }
            $check_insert_feemaster = $this->selectInArray($parentid, $student_list);
            if (!empty($check_insert_feemaster)) {
                $insert_new_student = array();
                foreach ($student_data as $student_key => $student_value) {
                    $student_data[$student_key]['id'] = $this->findValueExists($check_insert_feemaster, $student_value['student_session_id']);
                    if ($student_data[$student_key]['id'] == 0) {
                        $insert_new_student[] = $student_data[$student_key];
                        unset($student_data[$student_key]);
                    }
                }

                if (!empty($insert_new_student)) {
                    $this->db->insert_batch('student_fees_master', $insert_new_student);
                }
                $this->db->update_batch('student_fees_master', $student_data, 'id');
            } else {
                $this->db->insert_batch('student_fees_master', $student_data);
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function findValueExists($array, $find)
    {
        $id = 0;
        foreach ($array as $x => $x_value) {
            if ($x_value->student_session_id == $find) {
                return $x_value->id;
            }
        }
        return $id;
    }

    public function selectInArray($fee_session_groups, $student_session_array)
    {
        $this->db->where('fee_session_group_id', $fee_session_groups);
        $this->db->where_in('student_session_id', $student_session_array);
        $q      = $this->db->get('student_fees_master');
        $result = $q->result();
        return $result;
    }

    public function delete($fee_session_groups, $array)
    {
         
        $this->db->where('fee_session_group_id', $fee_session_groups);
        $this->db->where_in('student_session_id', $array);
        $this->db->delete('student_fees_master');
        
        
    }

    public function getBalanceMasterRecord($group_name, $student_session_array)
    {
        $sql = "select * from student_fees_master where student_session_id in $student_session_array and fee_session_group_id=(SELECT id FROM `fee_session_groups` where fee_groups_id=(SELECT id FROM `fee_groups` WHERE name=" . "'" . $group_name . "'" . ") and session_id=$this->current_session)";

        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function getStudentFeesByClassSectionStudent($class_id=NULL,$section_id=NULL,$student_id=NULL)
    {
        $where_condition=array();
        if( $class_id !=NULL){
            $where_condition[]=" and student_session.class_id=".$class_id;
        }
        if ($section_id != NULL) {
             $where_condition[]=" and student_session.section_id=".$section_id;
        }
        if ($student_id != NULL) {
            $where_condition[]=" and student_session.student_id=".$student_id;
        }
        
        $where_condition_string = implode(" ", $where_condition);       

        $sql = "SELECT student_fees_master.*,student_session.id as `student_session_id`,students.firstname,students.middlename,students.lastname,student_session.class_id,classes.class,sections.section,students.category_id,students.image,students.id as student_id,students.father_name,students.admission_no,students.mobileno,students.roll_no,students.rte, IFNULL(categories.category, '') as `category` FROM `student_fees_master` INNER JOIN student_session on student_session.id=student_fees_master.student_session_id INNER JOIN students on students.id=student_session.student_id INNER JOIN classes on classes.id =student_session.class_id left join  categories on students.category_id = categories.id INNER join sections on sections.id=student_session.section_id  WHERE student_session.session_id=" . $this->db->escape($this->current_session). $where_condition_string;
       
        $query        = $this->db->query($sql);
        $result       = $query->result();
        $student_fees = array();
        if (!empty($result)) {

            foreach ($result as $result_key => $result_value) {
                $fee_session_group_id   = $result_value->fee_session_group_id;
                $student_fees_master_id = $result_value->id;
                $result_value->fees     = $this->getDueFeeByFeeSessionGroup($fee_session_group_id, $student_fees_master_id);

                if ($result_value->is_system != 0) {
                    $result_value->fees[0]->amount = $result_value->amount;
                }

                if (!array_key_exists($result_value->student_session_id, $student_fees)) {
                    
                    $student_fees[$result_value->student_session_id] = array(
                           'student_session_id'=>$result_value->student_session_id,
                           'firstname'=>$result_value->firstname,
                           'student_id'=>$result_value->student_id,
                           'middlename'=>$result_value->middlename,
                           'lastname'=>$result_value->lastname,
                           'class_id'=>$result_value->class_id,
                           'class'=>$result_value->class,
                           'section'=>$result_value->section,
                           'father_name'=>$result_value->father_name,
                           'admission_no'=>$result_value->admission_no,
                           'mobileno'=>$result_value->mobileno,
                           'roll_no'=>$result_value->roll_no,
                           'category_id'=>$result_value->category_id,
                           'category'=>$result_value->category,
                           'rte'=>$result_value->rte,
                           'image'=>$result_value->image
                    ); //the magic
                    
                $student_fees[$result_value->student_session_id]['student_discount_fee']=$this->feediscount_model->getStudentFeesDiscount($result_value->student_session_id);
                
                }

                $student_fees[$result_value->student_session_id]['fees'][] = $result_value->fees;

            }
        }
     
        return $student_fees;

    }
    public function getByStudentPreviousSession($student_session_id)
    {
        
          $sql    = "SELECT `student_session`.*  FROM `student_session`  WHERE `id` = " . $student_session_id ;
     
        $query  = $this->db->query($sql);
        $result = $query->result();
       

        return $result;
    }
    public function getStudentFees($student_session_id)
    {
        
        $sql    = "SELECT `student_fees_master`.*,fee_groups.name FROM `student_fees_master` INNER JOIN fee_session_groups on student_fees_master.fee_session_group_id=fee_session_groups.id INNER JOIN fee_groups on fee_groups.id=fee_session_groups.fee_groups_id  WHERE `student_session_id` = " . $student_session_id . " ORDER BY `student_fees_master`.`id`";
        $query  = $this->db->query($sql);
        $result = $query->result();
        if (!empty($result)) {
            foreach ($result as $result_key => $result_value) {
                $fee_session_group_id   = $result_value->fee_session_group_id;
                $student_fees_master_id = $result_value->id;
                $result_value->fees     = $this->getDueFeeByFeeSessionGroup($fee_session_group_id, $student_fees_master_id);

                if ($result_value->is_system != 0) {
                    $result_value->fees[0]->amount = $result_value->amount;
                }
            }
        }

        return $result;
    }

     public function getTransStudentFees($student_session_id)
    {
        $sql    = "SELECT `student_fees_master`.*,fee_groups.name FROM `student_fees_master` INNER JOIN fee_session_groups on student_fees_master.fee_session_group_id=fee_session_groups.id INNER JOIN fee_groups on fee_groups.id=fee_session_groups.fee_groups_id  WHERE `student_session_id` = " . $student_session_id . " ORDER BY `student_fees_master`.`id`";
        $query  = $this->db->query($sql);
        $result_value = $query->result();
        
        $class_id="";
        if(isset($_POST['class_id']) && !empty($_POST['class_id'])){
        $class_id=$_POST['class_id'];
        }
         $section_id="";
        if(isset($_POST['section_id']) && !empty($_POST['section_id'])){
        $section_id=$_POST['section_id'];
        }
        //$module=$this->module_model->getPermissionByModulename('transport');
        //if($module['is_active']){
         $this->db->select('`student_fees_deposite`.*,0 as previous_balance_amount,' . $this->getTransportMonthlyAmountExpression('amount') . ',students.firstname,students.middlename,students.lastname,student_session.class_id,classes.class,sections.section,student_session.section_id,student_session.student_id,"Transport Fees" as fee_group,"Transport Fees" as name, "Transport Fees" as `fee_type`, "" as `fee_code`,0 as is_system,student_transport_fees.student_session_id,students.admission_no, `student_session`.`id` as `student_session_id`,0 as is_system, "" as fee_session_group_id')->from('student_transport_fees');
        
        $this->db->join('student_fees_deposite', 'student_transport_fees.id = `student_fees_deposite`.`student_transport_fee_id`','left');
        $this->db->join('transport_feemaster', '`student_transport_fees`.`transport_feemaster_id` = `transport_feemaster`.`id`');
        $this->db->join('student_session', 'student_session.id= `student_transport_fees`.`student_session_id`', 'INNER');
        $this->routePickupFeeResolver()->applyQueryBuilderJoins(false, 'student_session');
        
        $this->db->join('classes', 'classes.id= student_session.class_id');
        $this->db->join('sections', 'sections.id= student_session.section_id');
        $this->db->join('students', 'students.id=student_session.student_id');
        $this->db->where('student_session.session_id',$this->current_session);
        $this->db->where('student_session.id',$student_session_id);
        $this->db->order_by('student_fees_deposite.id','desc');

        if($class_id!=null){
            $this->db->where('student_session.class_id',$class_id);
        }

        if($section_id!=null){
            $this->db->where('student_session.section_id',$section_id);
        }
 
        $query1        = $this->db->get();
        $result_value1 = $query1->result();
       //}else{
        //$result_value1=array();
       //}
        if(empty($result_value)){
            $result_value2=$result_value1;
        }elseif(empty($result_value1)){
            $result_value2=$result_value;
        }else{
            $result_value2=array_merge($result_value,$result_value1);
        }
      
        if (!empty($result_value2)) {
            foreach ($result_value2 as $result_key => $result_value) {
$result_value->fees=array();
                $fee_session_group_id   = $result_value->fee_session_group_id;
                $student_fees_master_id = $result_value->id;
                if(empty($result_value->fee_session_group_id)){
$result_value->fees[0]     = (object)array('amount_detail'=>$result_value->amount_detail,'amount'=>$result_value->amount);
                }else{
$result_value->fees     = (object)$this->getDueFeeByFeeSessionGroup($fee_session_group_id, $student_fees_master_id);
                }
                

                if ($result_value->is_system != 0) {
                    // $result_value->fees[0]->amount = $result_value->amount;
					$result_value->fees->{"0"}->{'amount'} = $result_value->amount;
                }
            }
        }
        return $result_value2;
    }
 
    public function getStudentProcessingFees($student_session_id)
    {
        $sql    = "SELECT `student_fees_master`.*,fee_groups.name FROM `student_fees_master` INNER JOIN fee_session_groups on student_fees_master.fee_session_group_id=fee_session_groups.id INNER JOIN fee_groups on fee_groups.id=fee_session_groups.fee_groups_id  WHERE `student_session_id` = " . $student_session_id . " ORDER BY `student_fees_master`.`id`";
        $query  = $this->db->query($sql);
        $result = $query->result();
        if (!empty($result)) {
            foreach ($result as $result_key => $result_value) {

                $fee_session_group_id   = $result_value->fee_session_group_id;
                $student_fees_master_id = $result_value->id;
                $result_value->fees     = $this->getProcessingFeeByFeeSessionGroup($fee_session_group_id, $student_fees_master_id);
                if(!empty($result_value->fees)){
                     if ($result_value->is_system != 0) {
                    $result_value->fees[0]->amount = $result_value->amount;
                }
                }
               
            }
        }

        return $result;
    }
  public function getTransDueFeeByFeeSessionGroup($fee_session_groups_id, $student_fees_master_id)
    {
        $class_id="";
        if(isset($_POST['class_id']) && !empty($_POST['class_id'])){
        $class_id=$_POST['class_id'];
        }
         $section_id="";
        if(isset($_POST['section_id']) && !empty($_POST['section_id'])){
        $section_id=$_POST['section_id'];
        }
       
          $this->db->select('`student_fees_deposite`.*,0 as previous_balance_amount,' . $this->getTransportMonthlyAmountExpression('amount') . ',students.firstname,students.middlename,students.lastname,student_session.class_id,classes.class,sections.section,student_session.section_id,student_session.student_id,"Transport Fees" as fee_group,"Transport Fees" as name, "Transport Fees" as `fee_type`, "" as `fee_code`,0 as is_system,student_transport_fees.student_session_id,students.admission_no, `student_session`.`id` as `student_session_id`,0 as is_system')->from('student_transport_fees');
        
        $this->db->join('student_fees_deposite', 'student_transport_fees.id = `student_fees_deposite`.`student_transport_fee_id`','left');
        $this->db->join('transport_feemaster', '`student_transport_fees`.`transport_feemaster_id` = `transport_feemaster`.`id`');
        $this->db->join('student_session', 'student_session.id= `student_transport_fees`.`student_session_id`', 'INNER');
        $this->routePickupFeeResolver()->applyQueryBuilderJoins(false, 'student_session');
        
        $this->db->join('classes', 'classes.id= student_session.class_id');
        $this->db->join('sections', 'sections.id= student_session.section_id');
        $this->db->join('students', 'students.id=student_session.student_id');
       
        
        $this->db->where('student_session.session_id',$this->current_session);
        $this->db->order_by('student_fees_deposite.id','desc');

        if($class_id!=null){
            $this->db->where('student_session.class_id',$class_id);
        }

        if($section_id!=null){
            $this->db->where('student_session.section_id',$section_id);
        }
 
        $query1        = $this->db->get();
        $result_value1 = $query1->result();
       
        return $result_value1;
    }
    public function getDueFeeByFeeSessionGroup($fee_session_groups_id, $student_fees_master_id)
    {
        $deposit_join = $this->getCanonicalStudentFeesDepositeJoinSql();
        $sql = "SELECT student_fees_master.*,fee_groups_feetype.id as `fee_groups_feetype_id`,fee_groups_feetype.amount,fee_groups_feetype.due_date,fee_groups_feetype.fine_amount,fee_groups_feetype.fee_groups_id,fee_groups.name,fee_groups_feetype.feetype_id,feetype.code,feetype.type, IFNULL(student_fees_deposite.id,0) as `student_fees_deposite_id`, IFNULL(student_fees_deposite.amount_detail,0) as `amount_detail` FROM `student_fees_master` INNER JOIN fee_session_groups on fee_session_groups.id = student_fees_master.fee_session_group_id INNER JOIN fee_groups_feetype on  fee_groups_feetype.fee_session_group_id = fee_session_groups.id  INNER JOIN fee_groups on fee_groups.id=fee_groups_feetype.fee_groups_id INNER JOIN feetype on feetype.id=fee_groups_feetype.feetype_id " . $deposit_join . " WHERE student_fees_master.fee_session_group_id =" . $fee_session_groups_id . " and student_fees_master.id=" . $student_fees_master_id . " order by fee_groups_feetype.due_date ASC";

        $query = $this->db->query($sql);
        
         $result_value=$query->result();
          return $result_value;
    }

    public function getProcessingFeeByFeeSessionGroup($fee_session_groups_id, $student_fees_master_id)
    {
        $sql = "SELECT student_fees_master.*,fee_groups_feetype.id as `fee_groups_feetype_id`,fee_groups_feetype.amount,fee_groups_feetype.due_date,fee_groups_feetype.fine_amount,fee_groups_feetype.fee_groups_id,fee_groups.name,fee_groups_feetype.feetype_id,feetype.code,feetype.type, IFNULL(student_fees_processing.id,0) as `student_fees_deposite_id`, IFNULL(student_fees_processing.amount_detail,0) as `amount_detail`,gateway_ins.unique_id FROM `student_fees_master` INNER JOIN fee_session_groups on fee_session_groups.id = student_fees_master.fee_session_group_id INNER JOIN fee_groups_feetype on  fee_groups_feetype.fee_session_group_id = fee_session_groups.id  INNER JOIN fee_groups on fee_groups.id=fee_groups_feetype.fee_groups_id INNER JOIN feetype on feetype.id=fee_groups_feetype.feetype_id LEFT JOIN student_fees_processing on student_fees_processing.student_fees_master_id=student_fees_master.id and student_fees_processing.fee_groups_feetype_id=fee_groups_feetype.id inner join gateway_ins on gateway_ins.id=student_fees_processing.gateway_ins_id WHERE student_fees_master.fee_session_group_id =" . $fee_session_groups_id . " and student_fees_master.id=" . $student_fees_master_id . " order by fee_groups_feetype.due_date ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getDueFeesByStudent($student_session_id, $date)
    {
        $sql = "SELECT student_fees_master.*,fee_session_groups.fee_groups_id,fee_session_groups.session_id,fee_groups.name,fee_groups.is_system,fee_groups_feetype.amount as `fee_amount`,fee_groups_feetype.id as fee_groups_feetype_id,fee_groups_feetype.fine_type,fee_groups_feetype.due_date,fee_groups_feetype.fine_percentage,fee_groups_feetype.fine_amount,IFNULL(student_fees_deposite.id,0) as `student_fees_deposite_id`, IFNULL(student_fees_deposite.amount_detail,0) as `amount_detail`,students.is_active,classes.class,sections.section,feetype.type,feetype.code FROM `student_fees_master` INNER JOIN fee_session_groups on fee_session_groups.id=student_fees_master.fee_session_group_id INNER JOIN student_session on student_session.id=student_fees_master.student_session_id INNER JOIN students on students.id=student_session.student_id inner join classes on student_session.class_id=classes.id INNER JOIN sections on sections.id=student_session.section_id  INNER JOIN fee_groups_feetype on student_fees_master.fee_session_group_id=fee_groups_feetype.fee_session_group_id inner join fee_groups on fee_groups.id=fee_session_groups.fee_groups_id  INNER JOIN feetype on feetype.id= fee_groups_feetype.feetype_id LEFT JOIN student_fees_deposite on student_fees_deposite.student_fees_master_id=student_fees_master.id and student_fees_deposite.fee_groups_feetype_id=fee_groups_feetype.id WHERE student_fees_master.student_session_id='" . $student_session_id . "' AND student_session.session_id='" . $this->current_session . "' and  fee_session_groups.session_id='" . $this->current_session . "'  and fee_groups_feetype.due_date <  '".$date."' ORDER BY `student_fees_master`.`id` DESC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getDueTransportFeeByStudent($student_session_id, $route_pickup_point_id, $date)
    {
        if($student_session_id != NULL && $route_pickup_point_id != NULL){

        $sql = "SELECT student_transport_fees.*,transport_feemaster.month,transport_feemaster.due_date ,transport_feemaster.fine_amount, transport_feemaster.fine_type,transport_feemaster.fine_percentage,IFNULL(student_fees_deposite.id,0) as `student_fees_deposite_id`, IFNULL(student_fees_deposite.amount_detail,0) as `amount_detail`," . $this->getTransportMonthlyAmountExpression('fees') . " FROM `student_transport_fees` INNER JOIN transport_feemaster on transport_feemaster.id =student_transport_fees.transport_feemaster_id LEFT JOIN student_fees_deposite on student_fees_deposite.student_transport_fee_id=student_transport_fees.id " . $this->getEffectiveRoutePickupJoinSql(true, 'ss') . " where student_transport_fees.student_session_id=".$student_session_id." and student_transport_fees.route_pickup_point_id=".$route_pickup_point_id." and transport_feemaster.due_date < '".$date."' ORDER BY student_transport_fees.id asc";
        
        $query = $this->db->query($sql);

        return $query->result();

        }
        return false;
    }

    public function getTransportFeesByDueDate($start_date, $end_date)
    {
        $sql    = "SELECT student_transport_fees.*," . $this->getTransportMonthlyAmountExpression('fees') . ",transport_feemaster.month,transport_feemaster.due_date ,transport_feemaster.fine_amount, transport_feemaster.fine_type,transport_feemaster.fine_percentage,student_session.class_id,classes.class,sections.section,student_session.section_id,student_session.student_id, IFNULL(student_fees_deposite.id,0) as `student_fees_deposite_id`, IFNULL(student_fees_deposite.amount_detail,0) as `amount_detail`,students.id as `student_id`, students.roll_no,students.admission_date,students.firstname,students.middlename,  students.lastname,students.image,    students.mobileno, students.email ,students.state ,   students.city , students.pincode ,     students.religion,students.dob ,students.current_address,    students.permanent_address,students.category_id, IFNULL(categories.category, '') as `category`,   students.adhar_no,students.samagra_id,students.bank_account_no,students.bank_name, students.ifsc_code , students.guardian_name, students.guardian_relation,students.guardian_phone,students.guardian_email,`classes`.`class`,students.guardian_address,students.is_active,`students`.`father_name`,`students`.`app_key`,`students`.`parent_app_key`,`students`.`gender`  FROM `student_transport_fees` INNER JOIN transport_feemaster on transport_feemaster.id =student_transport_fees.transport_feemaster_id   LEFT JOIN student_fees_deposite on student_fees_deposite.student_transport_fee_id=student_transport_fees.id INNER JOIN student_session on student_session.id= student_transport_fees.student_session_id INNER JOIN classes on classes.id= student_session.class_id INNER JOIN sections on sections.id= student_session.section_id INNER JOIN students on students.id=student_session.student_id " . $this->getEffectiveRoutePickupJoinSql(false, 'student_session') . " LEFT JOIN `categories` ON `students`.`category_id` = `categories`.`id` WHERE transport_feemaster.due_date BETWEEN ". $this->db->escape($start_date) . " and " . $this->db->escape($end_date);
        $query  = $this->db->query($sql);
        $result = $query->result();

        return $result;
    } 

    public function getFeesByStudentFeeMasterAndFeetype($student_fees_master_id, $fee_groups_feetype_id)
    {
        $sql = "SELECT student_fees_master.id,student_fees_master.is_system,student_fees_master.student_session_id,student_fees_master.fee_session_group_id,student_fees_master.amount as `student_fees_master_amount`,fee_groups_feetype.id as `fee_groups_feetype_id`,students.id as student_id,students.firstname,students.middlename,students.admission_no,students.lastname,student_session.class_id,classes.class,sections.section,students.guardian_name,students.guardian_phone,students.father_name,student_session.section_id,student_session.student_id,fee_groups_feetype.amount,fee_groups_feetype.due_date,fee_groups_feetype.fine_amount,fee_groups_feetype.fine_type,fee_groups_feetype.fee_groups_id,fee_groups.name,fee_groups_feetype.feetype_id,feetype.code,feetype.type, IFNULL(student_fees_deposite.id,0) as `student_fees_deposite_id`, IFNULL(student_fees_deposite.amount_detail,0) as `amount_detail` FROM `student_fees_master` INNER JOIN fee_session_groups on fee_session_groups.id = student_fees_master.fee_session_group_id INNER JOIN fee_groups_feetype on  fee_groups_feetype.fee_session_group_id = fee_session_groups.id  INNER JOIN fee_groups on fee_groups.id=fee_groups_feetype.fee_groups_id INNER JOIN feetype on feetype.id=fee_groups_feetype.feetype_id LEFT JOIN student_fees_deposite on student_fees_deposite.student_fees_master_id=student_fees_master.id and student_fees_deposite.fee_groups_feetype_id=fee_groups_feetype.id INNER JOIN student_session on student_session.id= student_fees_master.student_session_id INNER JOIN classes on classes.id= student_session.class_id INNER JOIN sections on sections.id= student_session.section_id INNER JOIN students on students.id=student_session.student_id  WHERE  student_fees_master.id=" . $student_fees_master_id . " and fee_groups_feetype.id= " . $fee_groups_feetype_id;

        $query = $this->db->query($sql);
        return $query->row();
    }

    public function getDueFeeByFeeSessionGroupFeetype($fee_session_groups_id, $student_fees_master_id, $fee_groups_feetype_id)
    {
        $deposit_join = $this->getCanonicalStudentFeesDepositeJoinSql();
        $sql = "SELECT student_fees_master.id,student_fees_master.is_system,student_fees_master.student_session_id,student_fees_master.fee_session_group_id,student_fees_master.amount as `student_fees_master_amount`,fee_groups_feetype.id as `fee_groups_feetype_id`,students.id as student_id,students.firstname,students.middlename,students.admission_no,students.lastname,student_session.class_id,classes.class,sections.section,students.guardian_name,students.guardian_phone,students.father_name,student_session.section_id,student_session.student_id,fee_groups_feetype.amount,fee_groups_feetype.due_date,fee_groups_feetype.fine_amount,fee_groups_feetype.fee_groups_id,fee_groups.name,fee_groups_feetype.feetype_id,feetype.code,feetype.type, IFNULL(student_fees_deposite.id,0) as `student_fees_deposite_id`, IFNULL(student_fees_deposite.amount_detail,0) as `amount_detail` FROM `student_fees_master` INNER JOIN fee_session_groups on fee_session_groups.id = student_fees_master.fee_session_group_id INNER JOIN fee_groups_feetype on  fee_groups_feetype.fee_session_group_id = fee_session_groups.id  INNER JOIN fee_groups on fee_groups.id=fee_groups_feetype.fee_groups_id INNER JOIN feetype on feetype.id=fee_groups_feetype.feetype_id " . $deposit_join . " INNER JOIN student_session on student_session.id= student_fees_master.student_session_id INNER JOIN classes on classes.id= student_session.class_id INNER JOIN sections on sections.id= student_session.section_id INNER JOIN students on students.id=student_session.student_id  WHERE student_fees_master.fee_session_group_id =" . $fee_session_groups_id . " and student_fees_master.id=" . $student_fees_master_id . " and fee_groups_feetype.id= " . $fee_groups_feetype_id;

        $query = $this->db->query($sql);
        return $query->row();
    }

    public function getTransportFeeByID($trans_fee_id)
    {
        $sql = "SELECT student_transport_fees.*," . $this->getTransportMonthlyAmountExpression('fees') . ",transport_feemaster.month,transport_feemaster.due_date ,transport_feemaster.fine_amount, transport_feemaster.fine_type,transport_feemaster.fine_percentage,students.id as student_id,students.firstname,students.middlename,students.admission_no,students.lastname,student_session.class_id,classes.class,sections.section,students.guardian_name,students.guardian_phone,students.father_name,student_session.section_id,student_session.student_id, IFNULL(student_fees_deposite.id,0) as `student_fees_deposite_id`, IFNULL(student_fees_deposite.amount_detail,0) as `amount_detail` FROM `student_transport_fees` INNER JOIN transport_feemaster on transport_feemaster.id =student_transport_fees.transport_feemaster_id   LEFT JOIN student_fees_deposite on student_fees_deposite.student_transport_fee_id=student_transport_fees.id INNER JOIN student_session on student_session.id= student_transport_fees.student_session_id INNER JOIN classes on classes.id= student_session.class_id INNER JOIN sections on sections.id= student_session.section_id INNER JOIN students on students.id=student_session.student_id " . $this->getEffectiveRoutePickupJoinSql(false, 'student_session') . " WHERE student_transport_fees.id=" . $trans_fee_id;
        $query = $this->db->query($sql);
        return $query->row();
    }

    /**
     * Keep one deposit row per fee assignment when building collection reports.
     */
    private function dedupeFeeCollectionDepositRows($rows)
    {
        if (empty($rows)) {
            return $rows;
        }

        $canonical = array();
        foreach ($rows as $row) {
            if (!empty($row->student_transport_fee_id)) {
                $key = 'transport_' . $row->student_transport_fee_id;
            } else {
                $key = 'fees_' . $row->student_fees_master_id . '_' . $row->fee_groups_feetype_id;
            }

            if (!isset($canonical[$key]) || (int) $row->id < (int) $canonical[$key]->id) {
                $canonical[$key] = $row;
            }
        }

        return array_values($canonical);
    }

    /**
     * Join only the canonical deposit row (lowest id) per fee assignment.
     * Prevents cartesian explosion when duplicate deposit rows exist.
     */
    private function getCanonicalStudentFeesDepositeJoinSql()
    {
        return "LEFT JOIN student_fees_deposite on student_fees_deposite.id = (
            SELECT MIN(sfd.id) FROM student_fees_deposite sfd
            WHERE sfd.student_fees_master_id = student_fees_master.id
            AND sfd.fee_groups_feetype_id = fee_groups_feetype.id
        )";
    }

    /**
     * Find the canonical deposit row without leaking WHERE clauses to other queries.
     */
    private function getExistingFeesDepositeRow($data)
    {
        $this->db->reset_query();

        if (isset($data['fee_category']) && $data['fee_category'] == "fees") {
            if (empty($data['student_fees_master_id']) || empty($data['fee_groups_feetype_id'])) {
                $this->db->where('id', 0);
            } else {
                $this->db->where('student_fees_master_id', $data['student_fees_master_id']);
                $this->db->where('fee_groups_feetype_id', $data['fee_groups_feetype_id']);
            }
        } elseif (!empty($data['student_transport_fee_id']) && isset($data['fee_category']) && $data['fee_category'] == "transport") {
            $this->db->where('student_transport_fee_id', $data['student_transport_fee_id']);
        } else {
            $this->db->where('id', 0);
        }

        $this->db->order_by('id', 'ASC');
        $this->db->limit(1);

        return $this->db->get('student_fees_deposite');
    }

    /**
     * Resolve feetype id from a fee deposit payload.
     */
    private function resolveFeetypeIdFromDepositData($data)
    {
        $this->db->reset_query();
        $feeetype_id = 0;

        if (isset($data['fee_category']) && $data['fee_category'] == "transport") {
            $this->db->where('type', "Transport Fee");
            $feeetype_id_arr = $this->db->get('feetype')->row();
            return $feeetype_id_arr ? (int) $feeetype_id_arr->id : 0;
        }

        if (!empty($data['fee_groups_feetype_id'])) {
            $this->db->where('id', $data['fee_groups_feetype_id']);
            $feeetypearr = $this->db->get('fee_groups_feetype')->row();
            return $feeetypearr ? (int) $feeetypearr->feetype_id : 0;
        }

        return $feeetype_id;
    }

    /**
     * Build receipt prefix and next serial for session + code_category + fees code.
     * System fees (e.g. Previous Session Balance) keep the legacy counter behaviour.
     */
    private function getReceiptInvoiceDetails($feeetype_id)
    {
        $this->db->reset_query();
        $this->db->where('id', $feeetype_id);
        $feeetypecnt = $this->db->get('feetype')->row();

        if (!$feeetypecnt) {
            return array(
                'prefix_inv_no' => '',
                'inv_no'        => 1,
                'feeetype_id'   => 0,
                'is_system'     => 0,
            );
        }

        $this->db->reset_query();
        $this->db->where('id', $this->current_session);
        $sessions    = $this->db->get('sessions')->row();
        $cursessions = $sessions ? $sessions->session : '';

        $feecode          = $feeetypecnt->code;
        $feecode_category = $feeetypecnt->code_category;
        $prefix           = $cursessions . "/" . $feecode_category . "-" . $feecode;

        if (!empty($feeetypecnt->is_system)) {
            $inv_no = (int) $feeetypecnt->counter + 1;
        } else {
            $inv_no = $this->getNextReceiptSerialForPrefix($prefix);
        }

        return array(
            'prefix_inv_no' => $prefix,
            'inv_no'        => $inv_no,
            'feeetype_id'   => (int) $feeetype_id,
            'is_system'     => (int) $feeetypecnt->is_system,
        );
    }

    /**
     * Next running number for receipts sharing the same prefix (session/category/code).
     */
    private function getNextReceiptSerialForPrefix($prefix)
    {
        $this->db->reset_query();
        $json_prefix = str_replace('/', '\\/', $prefix);
        $this->db->select('amount_detail');
        $this->db->from('student_fees_deposite');
        $this->db->like('amount_detail', '"prefix_inv_no":"' . $json_prefix, 'both');
        $rows = $this->db->get()->result();

        $max = 0;
        foreach ($rows as $row) {
            $details = json_decode($row->amount_detail, true);
            if (!is_array($details)) {
                continue;
            }
            foreach ($details as $detail) {
                if (!empty($detail['prefix_inv_no']) && $detail['prefix_inv_no'] === $prefix) {
                    $max = max($max, (int) $detail['inv_no']);
                }
            }
        }

        return $max > 0 ? $max + 1 : 1;
    }

    private function applyReceiptInvoiceToAmountDetail(&$amount_detail, $feeetype_id)
    {
        $receipt = $this->getReceiptInvoiceDetails($feeetype_id);
        $amount_detail['prefix_inv_no'] = $receipt['prefix_inv_no'];
        $amount_detail['inv_no']        = $receipt['inv_no'];
        return $receipt;
    }

    private function updateFeetypeCounterAfterDeposit($feeetype_id, $inv_no)
    {
        if (empty($feeetype_id)) {
            return;
        }
        $this->db->reset_query();
        $this->db->where('id', $feeetype_id);
        $this->db->update('feetype', array('counter' => (int) $inv_no));
    }

    public function fee_deposit_bulk($bulk_data, $student_fees_discount_id = null)
    {
        $this->db->trans_start();
        $fees_return=array();
        foreach ($bulk_data as $fee_key => $fee_data) {

            if ($fee_data['fee_category'] == "fees") {
                $fee_data['student_transport_fee_id'] = null;
            } elseif ($fee_data['student_transport_fee_id'] > 0 && $fee_data['fee_category'] == "transport") {
                $fee_data['student_fees_master_id']  = null;
                $fee_data['fee_groups_feetype_id']   = null;
            }

            $fee_category = $fee_data['fee_category'];
            $feeetype_id  = $this->resolveFeetypeIdFromDepositData($fee_data);
            $q            = $this->getExistingFeesDepositeRow($fee_data);
            unset($fee_data['fee_category']);
            
            if ($q->num_rows() > 0) {
                $desc = $fee_data['amount_detail']['description'];
                $row  = $q->row();
                $a = json_decode($row->amount_detail, true);
                $receipt = $this->applyReceiptInvoiceToAmountDetail($fee_data['amount_detail'], $feeetype_id);
                $inv_no  = $receipt['inv_no'];
                $a[$inv_no] = $fee_data['amount_detail'];
                $fee_data['amount_detail'] = json_encode($a);
                // Re-scope update after receipt helper calls reset_query().
                $this->db->where('id', $row->id);
                $this->db->update('student_fees_deposite', $fee_data);
                $this->updateFeetypeCounterAfterDeposit($feeetype_id, $inv_no);

                $fees_return[]=array('invoice_id' => $row->id,
                                    'sub_invoice_id' => $inv_no,
                                    'fee_groups_feetype_id'=>$fee_data['fee_groups_feetype_id'],
                                    'student_transport_fee_id'=>$fee_data['student_transport_fee_id'],
                                    'fee_category'=>$fee_category 
                                );

            }else{
                $receipt = $this->applyReceiptInvoiceToAmountDetail($fee_data['amount_detail'], $feeetype_id);
                $inv_no  = $receipt['inv_no'];
                $desc    = $fee_data['amount_detail']['description'];
                $fee_data['amount_detail'] = json_encode(array($inv_no => $fee_data['amount_detail']));
                $this->db->insert('student_fees_deposite', $fee_data);
                $inserted_id = $this->db->insert_id();
                $this->updateFeetypeCounterAfterDeposit($feeetype_id, $inv_no);
				$message = INSERT_RECORD_CONSTANT . " On student fees deposite id " . $inserted_id;
				$action = "Insert";
				$record_id = $inserted_id;

                $fees_return[]=array('invoice_id' => $inserted_id,
                                        'sub_invoice_id' => $inv_no,
                                        'fee_groups_feetype_id'=>$fee_data['fee_groups_feetype_id'],
                                        'student_transport_fee_id'=>$fee_data['student_transport_fee_id'],
                                        'fee_category'=>$fee_category 
                                    );
            }
        }
        
        $this->db->trans_complete();
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return $fees_return;
        }

    }

    public function fee_deposit($data, $send_to, $student_fees_discount_id = null)
    {
        $feeetype_id = $this->resolveFeetypeIdFromDepositData($data);
        $q           = $this->getExistingFeesDepositeRow($data);
        $existing_row_count = $q->num_rows();
        $existing_row       = $existing_row_count > 0 ? $q->row() : null;

        unset($data['fee_category']);

        if ($existing_row_count > 0) {

            $desc = $data['amount_detail']['description'];
            $this->db->trans_start();
            $row = $existing_row;
            $a = json_decode($row->amount_detail, true);
            $receipt = $this->applyReceiptInvoiceToAmountDetail($data['amount_detail'], $feeetype_id);
            $inv_no  = $receipt['inv_no'];
            $a[$inv_no] = $data['amount_detail'];
            $data['amount_detail'] = json_encode($a);

            unset($data['fee_groups_feetype_id1']);

            // Re-apply row scope after helper calls reset_query().
            $this->db->where('id', $row->id);
            $this->db->update('student_fees_deposite', $data);

            if ($student_fees_discount_id != null) {
                $this->db->where('id', $student_fees_discount_id);
                $this->db->update('student_fees_discounts', array('status' => 'applied', 'description' => $desc, 'payment_id' => $row->id . "//" . $inv_no));

                $message   = UPDATE_RECORD_CONSTANT . " On  student fees discounts id " . $student_fees_discount_id;
                $action    = "Update";
                $record_id = $student_fees_discount_id;
                $this->log($message, $record_id, $action);
            }

            $this->updateFeetypeCounterAfterDeposit($feeetype_id, $inv_no);

            $this->db->trans_complete();
            if ($this->db->trans_status() === false) {
                $this->db->trans_rollback();
                return false;
            }

            $this->db->trans_commit();

            return json_encode(array('invoice_id' => $row->id, 'sub_invoice_id' => $inv_no));
        }

        $this->db->trans_start();
        $receipt = $this->applyReceiptInvoiceToAmountDetail($data['amount_detail'], $feeetype_id);
        $inv_no  = $receipt['inv_no'];
        $desc    = $data['amount_detail']['description'];
        $a[$inv_no] = $data['amount_detail'];
        $data['amount_detail'] = json_encode($a);
        unset($data['fee_groups_feetype_id1']);

        $this->db->insert('student_fees_deposite', $data);
        $inserted_id = $this->db->insert_id();

        if ($student_fees_discount_id != null) {
            $this->db->where('id', $student_fees_discount_id);
            $this->db->update('student_fees_discounts', array('status' => 'applied', 'description' => $desc, 'payment_id' => $inserted_id . "//" . $inv_no));
        }

        $this->updateFeetypeCounterAfterDeposit($feeetype_id, $inv_no);
        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        }

        $this->db->trans_commit();

        return json_encode(array('invoice_id' => $inserted_id, 'sub_invoice_id' => $inv_no));
    }

    public function get_feesreceived_by()
    {
        if ($this->session->has_userdata('admin')) {
            $getStaffRole     = $this->customlib->getStaffRole();
            $staffrole   =   json_decode($getStaffRole);       
            
            $superadmin_visible = $this->customlib->superadmin_visible(); 
            if ($superadmin_visible == 'disabled' && $staffrole->id != 7) {
                $this->db->where("staff_roles.role_id !=", 7);                 
            } 
        }
        
        $result = $this->db->select('CONCAT_WS(" ",staff.name,staff.surname) as name, staff.employee_id,staff.id')->from('staff')->join('staff_roles', 'staff.id=staff_roles.staff_id')->where('staff.is_active', '1')->get()->result_array();
        foreach ($result as $key => $value) {
            $data[$value['id']] = $value['name'] . " (" . $value['employee_id'] . ")";
        }
        return $data;
    }

    public function getFeeCollectionReport($start_date, $end_date, $feetype_id= null,$received_by = null, $group = null, $class_id = null, $section_id = null)
    {
        $this->db->select('`student_fees_deposite`.*,students.firstname,students.middlename,students.lastname,student_session.class_id,classes.class,sections.section,student_session.section_id,student_session.student_id,`fee_groups`.`name`, `feetype`.`type`, `feetype`.`code`,feetype.is_system,student_fees_master.student_session_id,students.admission_no')->from('student_fees_deposite');
        $this->db->join('fee_groups_feetype', 'fee_groups_feetype.id = student_fees_deposite.fee_groups_feetype_id');
        $this->db->join('fee_groups', 'fee_groups.id = fee_groups_feetype.fee_groups_id');
        $this->db->join('feetype', 'feetype.id = fee_groups_feetype.feetype_id');
        $this->db->join('student_fees_master', 'student_fees_master.id=student_fees_deposite.student_fees_master_id');
        $this->db->join('student_session', 'student_session.id= student_fees_master.student_session_id', 'left');
        $this->db->join('classes', 'classes.id= student_session.class_id');
        $this->db->join('sections', 'sections.id= student_session.section_id');
        $this->db->join('students', 'students.id=student_session.student_id');
        if($feetype_id!=null){
            $this->db->where('fee_groups_feetype.feetype_id',$feetype_id);
        }
        $this->db->where('fee_groups_feetype.session_id',$this->current_session);
        $this->db->where('student_session.session_id',$this->current_session);
        // $this->db->order_by('student_fees_deposite.id','desc');

        if($class_id!=null){
            $this->db->where('student_session.class_id',$class_id);
        }

        if($section_id!=null){
            $this->db->where('student_session.section_id',$section_id);
        }

        $query        = $this->db->get();
        $result_value = $query->result();    
        $module=$this->module_model->getPermissionByModulename('transport');
        if($module['is_active']){
          $this->db->select('`student_fees_deposite`.*,students.firstname,students.middlename,students.lastname,student_session.class_id,classes.class,sections.section,student_session.section_id,student_session.student_id,"Transport Fees" as name, "Transport Fees" as `type`, "" as `code`,0 as is_system,student_transport_fees.student_session_id,students.admission_no')->from('student_fees_deposite');
        
        $this->db->join('student_transport_fees', 'student_transport_fees.id = `student_fees_deposite`.`student_transport_fee_id`');
        $this->db->join('transport_feemaster', '`student_transport_fees`.`transport_feemaster_id` = `transport_feemaster`.`id`');
        $this->db->join('student_session', 'student_session.id= `student_transport_fees`.`student_session_id`', 'INNER');
        $this->db->join('classes', 'classes.id= student_session.class_id');
        $this->db->join('sections', 'sections.id= student_session.section_id');
        $this->db->join('students', 'students.id=student_session.student_id');
       
        
        $this->db->where('student_session.session_id',$this->current_session);
        // $this->db->order_by('student_fees_deposite.id','desc');

        if($class_id!=null){
            $this->db->where('student_session.class_id',$class_id);
        }

        if($section_id!=null){
            $this->db->where('student_session.section_id',$section_id);
        }

        $query1        = $this->db->get();
        $result_value1 = $query1->result();
    }else{
        $result_value1=array();
    }
        if($feetype_id!=null){ 
        if($feetype_id!='transport_fees'){
            $result_value1=array();
        }
      }
        if(empty($result_value)){
            $result_value2=$result_value1;
        }elseif(empty($result_value1)){
            $result_value2=$result_value;
        }else{
            $result_value2=array_merge($result_value,$result_value1);
        }

        $result_value2 = $this->dedupeFeeCollectionDepositRows($result_value2);
      
        $return_array = array();
        if (!empty($result_value2)) {
            $st_date = strtotime($start_date);
            $ed_date = strtotime($end_date);
            foreach ($result_value2 as $key => $value) {
                if ($received_by != null) {
                    $return = $this->findObjectByCollectId($value, $st_date, $ed_date, $received_by);
                } else {
                    $return = $this->findObjectById($value, $st_date, $ed_date);
                }

                if (!empty($return)) {
                    foreach ($return as $r_key => $r_value) {

                        $a['id']                     = $value->id;
                        $a['student_fees_master_id'] = $value->student_fees_master_id;
                        $a['fee_groups_feetype_id']  = $value->fee_groups_feetype_id;
                        $a['admission_no']           = $value->admission_no;
                        $a['firstname']              = $value->firstname;
                        $a['middlename']             = $value->middlename;
                        $a['lastname']               = $value->lastname;
                        $a['class_id']               = $value->class_id;
                        $a['class']                  = $value->class;
                        $a['section']                = $value->section;
                        $a['section_id']             = $value->section_id;
                        $a['student_id']             = $value->student_id;
                        $a['name']                   = $value->name;
                        $a['type']                   = $value->type;
                        $a['code']                   = $value->code;
                        $a['student_session_id']     = $value->student_session_id;
                        $a['is_system']              = $value->is_system;
                        $receipt_prefix             = isset($r_value->prefix_inv_no) ? $r_value->prefix_inv_no : '';
                        $receipt_number             = isset($r_value->inv_no) ? $r_value->inv_no : '';
                        $a['receipt_no']            = $receipt_prefix . $receipt_number;
                        $a['amount']                 = $r_value->amount;
                        $a['date']                   = $r_value->date;
                        $a['amount_discount']        = $r_value->amount_discount;
                        $a['amount_fine']            = $r_value->amount_fine;
                        $a['description']            = $r_value->description;
                        $a['payment_mode']           = $r_value->payment_mode;
                        $a['inv_no']                 = $r_value->inv_no;
                        $a['received_by']            = $r_value->received_by;
                        $a['ref_rec_no']             = $r_value->ref_rec_no;
                        $a['payment_ref_no']         = $r_value->payment_ref_no;
                        if (isset($r_value->received_by)) {

                            $a['received_by']     = $r_value->received_by;
                            $a['received_byname'] = $this->staff_model->get_StaffNameById($r_value->received_by);
                        } else {

                            $a['received_by']     = '';
                            $a['received_byname'] = array('name' => '', 'employee_id' => '', 'id' => '');
                        }                        
                        
                        $return_array[] = $a;                        
                    }
                }
            }

        }        
         
        return $return_array;
    }

    public function getFeeBetweenDate($start_date, $end_date)
    {
        $this->db->select('`student_fees_deposite`.*,students.firstname,students.middlename,students.lastname,student_session.class_id,classes.class,sections.section,student_session.section_id,student_session.student_id,`fee_groups`.`name`, `feetype`.`type`, `feetype`.`code`,student_fees_master.student_session_id')->from('student_fees_deposite');
        $this->db->join('fee_groups_feetype', 'fee_groups_feetype.id = student_fees_deposite.fee_groups_feetype_id');
        $this->db->join('fee_groups', 'fee_groups.id = fee_groups_feetype.fee_groups_id');
        $this->db->join('feetype', 'feetype.id = fee_groups_feetype.feetype_id');
        $this->db->join('student_fees_master', 'student_fees_master.id=student_fees_deposite.student_fees_master_id');
        $this->db->join('student_session', 'student_session.id= student_fees_master.student_session_id');
        $this->db->join('classes', 'classes.id= student_session.class_id');
        $this->db->join('sections', 'sections.id= student_session.section_id');
        $this->db->join('students', 'students.id=student_session.student_id');
        $this->db->order_by('student_fees_deposite.id');
        $query        = $this->db->get();
        $result_value = $query->result();
        $return_array = array();
        if (!empty($result_value)) {
            $st_date = strtotime($start_date);
            $ed_date = strtotime($end_date);
            foreach ($result_value as $key => $value) {
                $return = $this->findObjectById($value, $st_date, $ed_date);
                if (!empty($return)) {
                    foreach ($return as $r_key => $r_value) {
                        $a['id']                     = $value->id;
                        $a['student_fees_master_id'] = $value->student_fees_master_id;
                        $a['fee_groups_feetype_id']  = $value->fee_groups_feetype_id;
                        $a['firstname']              = $value->firstname;
                        $a['lastname']               = $value->lastname;
                        $a['class_id']               = $value->class_id;
                        $a['class']                  = $value->class;
                        $a['section']                = $value->section;
                        $a['section_id']             = $value->section_id;
                        $a['student_id']             = $value->student_id;
                        $a['name']                   = $value->name;
                        $a['type']                   = $value->type;
                        $a['code']                   = $value->code;
                        $a['student_session_id']     = $value->student_session_id;
                        $a['amount']                 = $r_value->amount;
                        $a['date']                   = $r_value->date;
                        $a['amount_discount']        = $r_value->amount_discount;
                        $a['amount_fine']            = $r_value->amount_fine;
                        $a['description']            = $r_value->description;
                        $a['payment_mode']           = $r_value->payment_mode;
                        $a['inv_no']                 = $r_value->inv_no;

                        $return_array[] = $a;
                    }
                }
            }
        }

        return $return_array;
    }

    public function getDepositAmountBetweenDate($start_date, $end_date)
    {
        $this->db->select('`student_fees_deposite`.*')->from('student_fees_deposite')->join('fee_groups_feetype','fee_groups_feetype.id=student_fees_deposite.fee_groups_feetype_id')->where('fee_groups_feetype.session_id',$this->current_session);
        $this->db->order_by('student_fees_deposite.id');
        $query        = $this->db->get();
        $result_value = $query->result();
        $return_array = array();
        if (!empty($result_value)) {
            $st_date = strtotime($start_date);
            $ed_date = strtotime($end_date);
            foreach ($result_value as $key => $value) {
                $return = $this->findObjectById($value, $st_date, $ed_date);

                if (!empty($return)) {
                    foreach ($return as $r_key => $r_value) {
                        $a                    = array();
                        $a['amount']          = $r_value->amount;
                        $a['date']            = $r_value->date;
                        $a['amount_discount'] = $r_value->amount_discount;
                        $a['amount_fine']     = $r_value->amount_fine;
                        $a['description']     = $r_value->description;
                        $a['payment_mode']    = $r_value->payment_mode;
                        $a['inv_no']          = $r_value->inv_no;
                        $return_array[]       = $a;
                    }
                }
            }
        }

        return $return_array;
    }

    public function findObjectAmount($array, $st_date, $ed_date)
    {
        $decoded = json_decode($array->amount_detail);
        if (empty($decoded) || !is_object($decoded)) {
            return array();
        }

        $filtered = array();
        foreach ($decoded as $row_value) {
            if (!isset($row_value->date)) {
                continue;
            }

            $entry_date = strtotime($row_value->date);
            if ($entry_date === false) {
                continue;
            }

            if ($entry_date >= $st_date && $entry_date <= $ed_date) {
                $filtered[] = $row_value;
            }
        }

        return $filtered;
    }

    public function findObjectById($array, $st_date, $ed_date)
    {
        $decoded = json_decode($array->amount_detail);
        if (empty($decoded) || !is_object($decoded)) {
            return array();
        }

        $filtered = array();
        foreach ($decoded as $row_value) {
            if (!isset($row_value->date)) {
                continue;
            }

            $entry_date = strtotime($row_value->date);
            if ($entry_date === false) {
                continue;
            }

            if ($entry_date >= $st_date && $entry_date <= $ed_date) {
                $filtered[] = $row_value;
            }
        }

        return $filtered;
    }

    public function findObjectByCollectId($array, $st_date, $ed_date, $receivedBy)
    {
        $decoded = json_decode($array->amount_detail);
        if (empty($decoded) || !is_object($decoded)) {
            return array();
        }

        $filtered = array();
        foreach ($decoded as $row_value) {
            if (!isset($row_value->date) || !isset($row_value->received_by)) {
                continue;
            }

            $entry_date = strtotime($row_value->date);
            if ($entry_date === false) {
                continue;
            }

            if ($entry_date >= $st_date && $entry_date <= $ed_date && (string)$row_value->received_by === (string)$receivedBy) {
                $filtered[] = $row_value;
            }
        }

        return $filtered;
    }


    public function getTransportFeeByInvoice($invoice_id, $sub_invoice_id)
    {
        $this->db->select('`student_fees_deposite`.*,students.id as std_id,students.firstname,students.middlename,students.lastname,students.admission_no,student_session.class_id,classes.class,sections.section,student_session.section_id,student_session.student_id,pickup_point.name as `pickup_name`,transport_route.route_title,transport_route_id,pickup_point_id,transport_feemaster.month')->from('student_fees_deposite');
        $this->db->join('student_transport_fees', 'student_transport_fees.id = student_fees_deposite.student_transport_fee_id');
        $this->db->join('transport_feemaster', 'transport_feemaster.id = student_transport_fees.transport_feemaster_id');
        $this->db->join('route_pickup_point rpp_legacy', 'rpp_legacy.id = student_transport_fees.route_pickup_point_id');
        $this->db->join('pickup_point', 'rpp_legacy.pickup_point_id = pickup_point.id');
        $this->db->join('transport_route', 'rpp_legacy.transport_route_id = transport_route.id');
        $this->db->join('student_session', 'student_session.id= student_transport_fees.student_session_id');
        $this->db->join('classes', 'classes.id= student_session.class_id');
        $this->db->join('sections', 'sections.id= student_session.section_id');
        $this->db->join('students', 'students.id=student_session.student_id');
        $this->db->where('student_fees_deposite.id', $invoice_id);
        $q = $this->db->get();

        if ($q->num_rows() > 0) {
            $result = $q->row();
            $res    = json_decode($result->amount_detail);
            $a      = (array) $res;

            foreach ($a as $key => $value) {
                if ($key == $sub_invoice_id) {

                    return $result;
                }
            }
        }

        return false;
    }



    public function getFeeByInvoice($invoice_id, $sub_invoice_id)
    {
        $type=$this->db->select('`student_fees_deposite`.*')->from('`student_fees_deposite`')->where('id',$invoice_id)->get()->row_array();
        if(empty($type['student_transport_fee_id'])){
             $this->db->select('`student_fees_deposite`.*,students.id as std_id,students.firstname,students.middlename,students.lastname,students.admission_no,student_session.class_id,classes.class,sections.section,student_session.section_id,student_session.student_id,`fee_groups`.`name`, `feetype`.`type`, `feetype`.`code`,feetype.is_system,student_fees_master.student_session_id')->from('student_fees_deposite');
        $this->db->join('fee_groups_feetype', 'fee_groups_feetype.id = student_fees_deposite.fee_groups_feetype_id');
        $this->db->join('fee_groups', 'fee_groups.id = fee_groups_feetype.fee_groups_id');
        $this->db->join('feetype', 'feetype.id = fee_groups_feetype.feetype_id');
        $this->db->join('student_fees_master', 'student_fees_master.id=student_fees_deposite.student_fees_master_id');
        $this->db->join('student_session', 'student_session.id= student_fees_master.student_session_id');
        $this->db->join('classes', 'classes.id= student_session.class_id');
        $this->db->join('sections', 'sections.id= student_session.section_id');
        $this->db->join('students', 'students.id=student_session.student_id');
        $this->db->where('student_fees_deposite.id', $invoice_id);
        $q = $this->db->get();
          if ($q->num_rows() > 0) {
            $result = $q->row();
            $res    = json_decode($result->amount_detail);
            $a      = (array) $res;

            foreach ($a as $key => $value) {
                if ($key == $sub_invoice_id) {

                    return $result;
                }
            }
        }
        }else{
$module=$this->module_model->getPermissionByModulename('transport');
        if($module['is_active']){
          $this->db->select('`student_fees_deposite`.*,students.firstname,students.middlename,students.lastname,student_session.class_id,classes.class,sections.section,student_session.section_id,student_session.student_id,"Transport Fees" as name, "Transport Fees" as `type`, transport_feemaster.month as `code`,0 as is_system,student_transport_fees.student_session_id,students.admission_no')->from('student_fees_deposite');
        
        $this->db->join('student_transport_fees', 'student_transport_fees.id = `student_fees_deposite`.`student_transport_fee_id`');
        $this->db->join('transport_feemaster', '`student_transport_fees`.`transport_feemaster_id` = `transport_feemaster`.`id`');
        $this->db->join('student_session', 'student_session.id= `student_transport_fees`.`student_session_id`', 'INNER');
        $this->db->join('classes', 'classes.id= student_session.class_id');
        $this->db->join('sections', 'sections.id= student_session.section_id');
        $this->db->join('students', 'students.id=student_session.student_id');
        $this->db->order_by('student_fees_deposite.id','desc');
        $this->db->where('student_fees_deposite.id', $invoice_id);
        $q        = $this->db->get();
         if ($q->num_rows() > 0) {
            $result = $q->row();
            $res    = json_decode($result->amount_detail);
            $a      = (array) $res;

            foreach ($a as $key => $value) {
                if ($key == $sub_invoice_id) {

                    return $result;
                }
            }
        }
    }
        }
      
       
        

      

        return false;
    }

    public function studentDeposit($data)
    {
        $sql = "SELECT fee_groups.is_system,student_fees_master.amount as `student_fees_master_amount`, fee_groups.name as `fee_group_name`,feetype.code as `fee_type_code`,fee_groups_feetype.amount,fee_groups_feetype.fine_percentage,fee_groups_feetype.fine_amount,fee_groups_feetype.due_date,IFNULL(student_fees_deposite.amount_detail,0) as `amount_detail` from student_fees_master
               INNER JOIN fee_session_groups on fee_session_groups.id=student_fees_master.fee_session_group_id
              INNER JOIN fee_groups_feetype on fee_groups_feetype.fee_groups_id=fee_session_groups.fee_groups_id
              INNER JOIN fee_groups on fee_groups_feetype.fee_groups_id=fee_groups.id
              INNER JOIN feetype on fee_groups_feetype.feetype_id=feetype.id
         LEFT JOIN student_fees_deposite on student_fees_deposite.student_fees_master_id=student_fees_master.id and student_fees_deposite.fee_groups_feetype_id=fee_groups_feetype.id WHERE student_fees_master.id =" . $data['student_fees_master_id'] . " and fee_groups_feetype.id =" . $data['fee_groups_feetype_id'];
        $query = $this->db->query($sql);

        return $query->row();
    }

    public function studentTransportDeposit($student_transport_fee_id)
    {
        $sql = "SELECT student_transport_fees.*,transport_feemaster.month,transport_feemaster.due_date ," . $this->getTransportMonthlyAmountExpression('fees') . ",transport_feemaster.fine_amount, transport_feemaster.fine_type,transport_feemaster.fine_percentage,IFNULL(student_fees_deposite.id,0) as `student_fees_deposite_id`, IFNULL(student_fees_deposite.amount_detail,0) as `amount_detail` FROM `student_transport_fees` INNER JOIN transport_feemaster on transport_feemaster.id =student_transport_fees.transport_feemaster_id  LEFT JOIN student_fees_deposite on student_fees_deposite.student_transport_fee_id=student_transport_fees.id " . $this->getEffectiveRoutePickupJoinSql(true, 'ss') . " where student_transport_fees.id=".$this->db->escape($student_transport_fee_id);    
        $query = $this->db->query($sql);
        return $query->row();
    }

    public function getStudentTransportFees($student_session_id, $route_pickup_point_id)
    {
        if($student_session_id != NULL && $route_pickup_point_id != NULL){

            $sql = "SELECT student_transport_fees.*,transport_feemaster.month,transport_feemaster.due_date ," . $this->getTransportMonthlyAmountExpression('fees') . ",transport_feemaster.fine_amount, transport_feemaster.fine_type,transport_feemaster.fine_percentage,IFNULL(student_fees_deposite.id,0) as `student_fees_deposite_id`, IFNULL(student_fees_deposite.amount_detail,0) as `amount_detail` FROM `student_transport_fees` INNER JOIN transport_feemaster on transport_feemaster.id =student_transport_fees.transport_feemaster_id LEFT JOIN student_fees_deposite on student_fees_deposite.student_transport_fee_id=student_transport_fees.id " . $this->getEffectiveRoutePickupJoinSql(true, 'ss') . " where student_transport_fees.student_session_id=".$student_session_id." and student_transport_fees.route_pickup_point_id=".$route_pickup_point_id." ORDER BY student_transport_fees.id asc";       
            $query = $this->db->query($sql);
            return $query->result();

        }
        return false;
    }

    public function getPreviousStudentFees($student_session_id)
    {
        $sql    = "SELECT `student_fees_master`.*,fee_groups.name FROM `student_fees_master` INNER JOIN fee_session_groups on student_fees_master.fee_session_group_id=fee_session_groups.id INNER JOIN fee_groups on fee_groups.id=fee_session_groups.fee_groups_id  WHERE `student_session_id` = " . $student_session_id . " ORDER BY `student_fees_master`.`id`";
        $query  = $this->db->query($sql);
        $result = $query->result();
        if (!empty($result)) {
            foreach ($result as $result_key => $result_value) {
                $fee_session_group_id   = $result_value->fee_session_group_id;
                $student_fees_master_id = $result_value->id;
                $result_value->fees     = $this->getDueFeeByFeeSessionGroup($fee_session_group_id, $student_fees_master_id);

                if ($result_value->is_system != 0) {
                    $result_value->fees[0]->amount = $result_value->amount;
                }
            }
        }

        return $result;
    }

    public function getSessionOutstandingBalance($student_session_id, $include_transport = true)
    {
        $student_session_id = (int) $student_session_id;
        if ($student_session_id <= 0) {
            return 0;
        }

        $totalfee = 0.0;
        $deposit  = 0.0;
        $discount = 0.0;

        // Standard fee components
        $student_total_fees = $this->getPreviousStudentFees($student_session_id);
        if (!empty($student_total_fees)) {
            foreach ($student_total_fees as $student_total_fees_value) {
                if (empty($student_total_fees_value->fees)) {
                    continue;
                }

                foreach ($student_total_fees_value->fees as $each_fee_value) {
                    $totalfee += (float) $each_fee_value->amount;
                    $amount_detail = json_decode($each_fee_value->amount_detail);
                    if (!is_object($amount_detail)) {
                        continue;
                    }

                    foreach ($amount_detail as $amount_detail_value) {
                        $deposit  += isset($amount_detail_value->amount) ? (float) $amount_detail_value->amount : 0;
                        $discount += isset($amount_detail_value->amount_discount) ? (float) $amount_detail_value->amount_discount : 0;
                    }
                }
            }
        }

        // Transport fee components
        if ($include_transport) {
            $this->db->select('student_transport_fees.id, ' . $this->getTransportMonthlyAmountExpression('amount') . ', student_fees_deposite.amount_detail')
                ->from('student_transport_fees');
            $this->routePickupFeeResolver()->applyQueryBuilderJoins(true, 'ss');
            $transport_fees = $this->db
                ->join('transport_feemaster', 'transport_feemaster.id = student_transport_fees.transport_feemaster_id')
                ->join('student_fees_deposite', 'student_fees_deposite.student_transport_fee_id = student_transport_fees.id', 'left')
                ->where('student_transport_fees.student_session_id', $student_session_id)
                ->order_by('student_transport_fees.id', 'asc')
                ->get()
                ->result();

            if (!empty($transport_fees)) {
                foreach ($transport_fees as $transport_row) {
                    $totalfee += isset($transport_row->amount) ? (float) $transport_row->amount : 0;

                    $amount_detail = json_decode($transport_row->amount_detail);
                    if (!is_object($amount_detail)) {
                        continue;
                    }

                    foreach ($amount_detail as $amount_detail_value) {
                        $deposit  += isset($amount_detail_value->amount) ? (float) $amount_detail_value->amount : 0;
                        $discount += isset($amount_detail_value->amount_discount) ? (float) $amount_detail_value->amount_discount : 0;
                    }
                }
            }
        }

        return round($totalfee - ($deposit + $discount), 2);
    }

    public function fee_deposit_collections($data)
    {
        if (empty($data)) {
            return array();
        }

        $this->db->trans_start();
        $collected_fees = array();

        foreach ($data as $d_key => $d_value) {
            $fee_category = $d_value['fee_category'];

            if ($fee_category == "transport") {
                $data[$d_key]['student_fees_master_id'] = null;
                $data[$d_key]['fee_groups_feetype_id']  = null;
            } elseif ($fee_category == "fees") {
                $data[$d_key]['student_transport_fee_id'] = null;
            }

            $feeetype_id = $this->resolveFeetypeIdFromDepositData($d_value);
            $q           = $this->getExistingFeesDepositeRow($d_value);
            unset($data[$d_key]['fee_category']);

            if ($q->num_rows() > 0) {
                $row = $q->row();
                $a = json_decode($row->amount_detail, true);
                if (!is_array($a)) {
                    $a = array();
                }
                $receipt = $this->applyReceiptInvoiceToAmountDetail($data[$d_key]['amount_detail'], $feeetype_id);
                $inv_no  = $receipt['inv_no'];
                $a[$inv_no] = $data[$d_key]['amount_detail'];
                $data[$d_key]['amount_detail'] = json_encode($a);
                // Re-scope update after receipt helper calls reset_query().
                $this->db->where('id', $row->id);
                $this->db->update('student_fees_deposite', $data[$d_key]);
                $this->updateFeetypeCounterAfterDeposit($feeetype_id, $inv_no);

                $collected_fees[] = array(
                    'invoice_id'               => $row->id,
                    'sub_invoice_id'           => $inv_no,
                    'fee_groups_feetype_id'    => $data[$d_key]['fee_groups_feetype_id'],
                    'student_transport_fee_id' => $data[$d_key]['student_transport_fee_id'],
                    'fee_category'             => $fee_category,
                );
            } else {
                $receipt = $this->applyReceiptInvoiceToAmountDetail($data[$d_key]['amount_detail'], $feeetype_id);
                $inv_no  = $receipt['inv_no'];
                $data[$d_key]['amount_detail'] = json_encode(array($inv_no => $data[$d_key]['amount_detail']));
                $this->db->insert('student_fees_deposite', $data[$d_key]);
                $inserted_id = $this->db->insert_id();
                $this->updateFeetypeCounterAfterDeposit($feeetype_id, $inv_no);

                $collected_fees[] = array(
                    'invoice_id'               => $inserted_id,
                    'sub_invoice_id'           => $inv_no,
                    'fee_groups_feetype_id'    => $data[$d_key]['fee_groups_feetype_id'],
                    'student_transport_fee_id' => $data[$d_key]['student_transport_fee_id'],
                    'fee_category'             => $fee_category,
                );
            }
        }

        $this->db->trans_complete();
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        }

        return $collected_fees;
    }

    public function findOnlineObjectById($array, $st_date, $ed_date)
    {
        $decoded = json_decode($array->amount_detail);
        if (empty($decoded) || !is_object($decoded)) {
            return array();
        }

        $offline_modes = array('Cheque', 'Cash', 'DD');
        $filtered      = array();

        foreach ($decoded as $row_value) {
            if (!isset($row_value->date)) {
                continue;
            }

            $entry_date = strtotime($row_value->date);
            if ($entry_date === false) {
                continue;
            }

            if ($entry_date >= $st_date && $entry_date <= $ed_date) {
                $payment_mode = isset($row_value->payment_mode) ? $row_value->payment_mode : '';
                if (!in_array($payment_mode, $offline_modes, true)) {
                    $filtered[] = $row_value;
                }
            }
        }

        return $filtered;
    }

    public function getOnlineFeeCollectionReport($start_date, $end_date)
    {
        $this->db->select('`student_fees_deposite`.*,students.firstname,students.middlename,students.lastname,student_session.class_id,classes.class,sections.section,student_session.section_id,student_session.student_id,`fee_groups`.`name`, `feetype`.`type`, `feetype`.`code`,feetype.is_system,student_fees_master.student_session_id,students.admission_no')->from('student_fees_deposite');
        $this->db->join('fee_groups_feetype', 'fee_groups_feetype.id = student_fees_deposite.fee_groups_feetype_id');
        $this->db->join('fee_groups', 'fee_groups.id = fee_groups_feetype.fee_groups_id');
        $this->db->join('feetype', 'feetype.id = fee_groups_feetype.feetype_id');
        $this->db->join('student_fees_master', 'student_fees_master.id=student_fees_deposite.student_fees_master_id');
        $this->db->join('student_session', 'student_session.id= student_fees_master.student_session_id');
        $this->db->join('classes', 'classes.id= student_session.class_id');
        $this->db->join('sections', 'sections.id= student_session.section_id');
        $this->db->join('students', 'students.id=student_session.student_id');
        $this->db->where('student_session.session_id', $this->current_session);
        $this->db->order_by('student_fees_deposite.id');

        $query        = $this->db->get();
        $result_value = $query->result();
      $module=$this->module_model->getPermissionByModulename('transport');
        if($module['is_active']){
         $this->db->select('`student_fees_deposite`.*,students.firstname,students.middlename,students.lastname,student_session.class_id,classes.class,sections.section,student_session.section_id,student_session.student_id,"Transport Fees" as name, "Transport Fees" as `type`, "" as `code`,0 as is_system,student_transport_fees.student_session_id,students.admission_no')->from('student_fees_deposite');
        
        $this->db->join('student_transport_fees', 'student_transport_fees.id = `student_fees_deposite`.`student_transport_fee_id`');
        $this->db->join('transport_feemaster', '`student_transport_fees`.`transport_feemaster_id` = `transport_feemaster`.`id`');
        $this->db->join('student_session', 'student_session.id= `student_transport_fees`.`student_session_id`', 'INNER');
        $this->db->join('classes', 'classes.id= student_session.class_id');
        $this->db->join('sections', 'sections.id= student_session.section_id');
        $this->db->join('students', 'students.id=student_session.student_id');
       
        
        $this->db->where('student_session.session_id',$this->current_session);
        $this->db->order_by('student_fees_deposite.id','desc');

        

        $query1        = $this->db->get();
        $result_value1 = $query1->result();
       }else{
        $result_value1 = array();
       }
        if(empty($result_value)){
            $result_value2=$result_value1;
        }elseif(empty($result_value1)){
            $result_value2=$result_value;
        }else{
            $result_value2=array_merge($result_value,$result_value1);
        }
        $return_array = array();
        if (!empty($result_value2)) {
            $st_date = strtotime($start_date);
            $ed_date = strtotime($end_date);
            foreach ($result_value2 as $key => $value) {
                $return = $this->findOnlineObjectById($value, $st_date, $ed_date);
                if (!empty($return)) {

                    foreach ($return as $r_key => $r_value) {
                        $a['id']                     = $value->id;
                        $a['student_fees_master_id'] = $value->student_fees_master_id;
                        $a['fee_groups_feetype_id']  = $value->fee_groups_feetype_id;
                        $a['firstname']              = $value->firstname;
                        $a['middlename']             = $value->middlename;
                        $a['lastname']               = $value->lastname;
                        $a['class_id']               = $value->class_id;
                        $a['class']                  = $value->class;
                        $a['section']                = $value->section;
                        $a['section_id']             = $value->section_id;
                        $a['student_id']             = $value->student_id;
                        $a['name']                   = $value->name;
                        $a['type']                   = $value->type;
                        $a['code']                   = $value->code;
                        $a['student_session_id']     = $value->student_session_id;
                        $a['admission_no']           = $value->admission_no;
                        $a['amount']                 = $r_value->amount;
                        $a['date']                   = $r_value->date;
                        $a['amount_discount']        = $r_value->amount_discount;
                        $a['amount_fine']            = $r_value->amount_fine;
                        $a['description']            = $r_value->description;
                        $a['payment_mode']           = $r_value->payment_mode;
                        $a['inv_no']                 = $r_value->inv_no;
                        $a['received_by']            = $r_value->received_by;
                        $a['is_system']              = $value->is_system;
                        $a['received_byname']        = $this->staff_model->get_StaffNameById($r_value->received_by);
                        $return_array[]              = $a;
                    }
                }
            }
        }

        return $return_array;
    }

    public function getFeesAwaiting($start_date, $end_date)
    {
        $sql    = "SELECT student_fees_master.*,fee_session_groups.fee_groups_id,fee_session_groups.session_id,fee_groups.name,fee_groups.is_system,fee_groups_feetype.amount as `fee_amount`,fee_groups_feetype.id as fee_groups_feetype_id,student_fees_deposite.amount_detail,students.firstname,students.middlename,students.is_active FROM `student_fees_master` INNER JOIN fee_session_groups on fee_session_groups.id=student_fees_master.fee_session_group_id INNER JOIN student_session on student_session.id=student_fees_master.student_session_id INNER JOIN students on students.id=student_session.student_id inner join fee_groups on fee_groups.id=fee_session_groups.fee_groups_id INNER JOIN fee_groups_feetype on fee_groups.id=fee_groups_feetype.fee_groups_id LEFT JOIN student_fees_deposite on student_fees_deposite.student_fees_master_id=student_fees_master.id and student_fees_deposite.fee_groups_feetype_id=fee_groups_feetype.id WHERE student_session.session_id='" . $this->current_session . "' and  fee_session_groups.session_id='" . $this->current_session . "' and fee_groups_feetype.due_date BETWEEN '" . $start_date . "' and '" . $end_date . "' and students.is_active='yes' order by fee_groups_feetype.due_date asc";
        $query  = $this->db->query($sql);
        $result = $query->result();

        return $result;
    }

    public function getCurrentSessionStudentFees()
    {
        $sql = "SELECT student_fees_master.*,fee_session_groups.fee_groups_id,fee_session_groups.session_id,fee_groups.name,fee_groups.is_system,fee_groups_feetype.amount as `fee_amount`,fee_groups_feetype.id as fee_groups_feetype_id,student_fees_deposite.id as `student_fees_deposite_id`,student_fees_deposite.amount_detail,students.admission_no , students.roll_no,students.admission_date,students.firstname,students.middlename,  students.lastname,students.father_name,students.image, students.mobileno, students.email ,students.state ,   students.city , students.pincode ,students.is_active,classes.class,sections.section FROM `student_fees_master` INNER JOIN fee_session_groups on fee_session_groups.id=student_fees_master.fee_session_group_id INNER JOIN student_session on student_session.id=student_fees_master.student_session_id INNER JOIN students on students.id=student_session.student_id inner join classes on student_session.class_id=classes.id INNER JOIN sections on sections.id=student_session.section_id inner join fee_groups on fee_groups.id=fee_session_groups.fee_groups_id INNER JOIN fee_groups_feetype on fee_groups.id=fee_groups_feetype.fee_groups_id LEFT JOIN student_fees_deposite on student_fees_deposite.student_fees_master_id=student_fees_master.id and student_fees_deposite.fee_groups_feetype_id=fee_groups_feetype.id WHERE student_session.session_id='" . $this->current_session . "' and  fee_session_groups.session_id='" . $this->current_session . "'";

        $query  = $this->db->query($sql);
        $result_value = $query->result();
        $module=$this->module_model->getPermissionByModulename('transport');
        if($module['is_active']){
          $this->db->select('`student_fees_deposite`.*,student_fees_deposite.id as `student_fees_deposite_id`,students.firstname,students.middlename,students.lastname,student_session.class_id,classes.class,sections.section,student_session.section_id,student_session.student_id,"Transport Fees" as name, "Transport Fees" as `type`, "" as `code`,0 as is_system,student_transport_fees.student_session_id,students.admission_no')->from('student_fees_deposite');
        
        $this->db->join('student_transport_fees', 'student_transport_fees.id = `student_fees_deposite`.`student_transport_fee_id`');
        $this->db->join('transport_feemaster', '`student_transport_fees`.`transport_feemaster_id` = `transport_feemaster`.`id`');
        $this->db->join('student_session', 'student_session.id= `student_transport_fees`.`student_session_id`', 'INNER');
        $this->db->join('classes', 'classes.id= student_session.class_id');
        $this->db->join('sections', 'sections.id= student_session.section_id');
        $this->db->join('students', 'students.id=student_session.student_id');
       
        
        $this->db->where('student_session.session_id',$this->current_session);
        $this->db->order_by('student_fees_deposite.id','desc');

        

        $query1        = $this->db->get();
        $result_value1 = $query1->result();
       }else{
        $result_value1 = array();
       }
        if(empty($result_value)){
            $result_value2=$result_value1;
        }elseif(empty($result_value1)){
            $result_value2=$result_value;
        }else{
            $result_value2=array_merge($result_value,$result_value1);
        }
        
        return $result_value2;
    }

    public function getFeesDepositeByIdArray($id_array = array())
    {
        $id_implode = $imp = "'" . implode("','", $id_array) . "'";
        $sql = "SELECT student_fees_master.*,fee_session_groups.fee_groups_id,fee_session_groups.session_id,fee_groups.name,fee_groups.is_system,fee_groups_feetype.amount as `fee_amount`,fee_groups_feetype.id as fee_groups_feetype_id,student_fees_deposite.id as `student_fees_deposite_id`,student_fees_deposite.amount_detail,students.admission_no , students.roll_no,students.admission_date,students.firstname,students.middlename,  students.lastname,students.father_name,students.image, students.mobileno, students.email ,students.state ,   students.city , students.pincode ,students.is_active,classes.class,sections.section FROM `student_fees_master` INNER JOIN fee_session_groups on fee_session_groups.id=student_fees_master.fee_session_group_id INNER JOIN student_session on student_session.id=student_fees_master.student_session_id INNER JOIN students on students.id=student_session.student_id inner join classes on student_session.class_id=classes.id INNER JOIN sections on sections.id=student_session.section_id inner join fee_groups on fee_groups.id=fee_session_groups.fee_groups_id INNER JOIN fee_groups_feetype on fee_groups.id=fee_groups_feetype.fee_groups_id  JOIN student_fees_deposite on student_fees_deposite.student_fees_master_id=student_fees_master.id and student_fees_deposite.fee_groups_feetype_id=fee_groups_feetype.id WHERE student_session.session_id='" . $this->current_session . "' and  fee_session_groups.session_id='" . $this->current_session . "' and student_fees_deposite.id in (" . $id_implode . ")";

        $query  = $this->db->query($sql);
        $result_value = $query->result();
        $module=$this->module_model->getPermissionByModulename('transport');
        if($module['is_active']){
          $this->db->select('`student_fees_deposite`.*,student_fees_deposite.id as `student_fees_deposite_id`,students.firstname,students.middlename,students.lastname,student_session.class_id,classes.class,sections.section,student_session.section_id,student_session.student_id,"Transport Fees" as name, "Transport Fees" as `type`, "" as `code`,0 as is_system,student_transport_fees.student_session_id,students.admission_no,students.father_name')->from('student_fees_deposite');
        
        $this->db->join('student_transport_fees', 'student_transport_fees.id = `student_fees_deposite`.`student_transport_fee_id`');
        $this->db->join('transport_feemaster', '`student_transport_fees`.`transport_feemaster_id` = `transport_feemaster`.`id`');
        $this->db->join('student_session', 'student_session.id= `student_transport_fees`.`student_session_id`', 'INNER');
        $this->db->join('classes', 'classes.id= student_session.class_id');
        $this->db->join('sections', 'sections.id= student_session.section_id');
        $this->db->join('students', 'students.id=student_session.student_id');
       
        
        $this->db->where('student_session.session_id',$this->current_session);
        $this->db->where_in('student_fees_deposite.id',$id_array);
        // $this->db->order_by('student_fees_deposite.id','desc');

        

        $query1        = $this->db->get();
        $result_value1 = $query1->result();
       }else{
        $result_value1 = array();
       }
        if(empty($result_value)){
            $result_value2=$result_value1;
        }elseif(empty($result_value1)){
            $result_value2=$result_value;
        }else{
            $result_value2=array_merge($result_value,$result_value1);
        }
        return $result_value2;
    }

    public function getStudentDueFeeTypesByDate($date, $class_id = null, $section_id = null, $dep_id = null)
    {
        $where_condition = array();
        if ($class_id != null) {
            $where_condition[] = "student_session.class_id=" . $class_id;
        }
        if ($section_id != null) {
            $where_condition[] = "student_session.section_id=" . $section_id;
        }
        if ($dep_id != null) {
            $where_condition[] = "student_session.department_id=" . $dep_id;
        }
        
        if (count($where_condition) > 0) {
            $where_condition_string = " AND " . implode(" AND ", $where_condition);
        } else {
            $where_condition_string = "";
        }

        $sql = "SELECT student_fees_master.*,fee_session_groups.fee_groups_id,fee_session_groups.session_id,fee_groups.name,fee_groups.is_system,fee_groups_feetype.amount as `fee_amount`,fee_groups_feetype.id as fee_groups_feetype_id,student_fees_deposite.amount_detail,students.admission_no , students.roll_no,students.admission_date,students.firstname,students.middlename,  students.lastname,students.father_name,students.image, students.mobileno, students.email ,students.state ,   students.city , students.pincode ,students.is_active,classes.class,classes.id as class_id,sections.section,sections.id as section_id,students.id as student_id FROM `student_fees_master` INNER JOIN fee_session_groups on fee_session_groups.id=student_fees_master.fee_session_group_id INNER JOIN student_session on student_session.id=student_fees_master.student_session_id INNER JOIN students on students.id=student_session.student_id inner join classes on student_session.class_id=classes.id INNER JOIN sections on sections.id=student_session.section_id inner join fee_groups on fee_groups.id=fee_session_groups.fee_groups_id INNER JOIN fee_groups_feetype on fee_groups.id=fee_groups_feetype.fee_groups_id LEFT JOIN student_fees_deposite on student_fees_deposite.student_fees_master_id=student_fees_master.id and student_fees_deposite.fee_groups_feetype_id=fee_groups_feetype.id WHERE student_session.session_id='" . $this->current_session . "' and  fee_session_groups.session_id='" . $this->current_session . "' and fee_groups_feetype.due_date <=" . $this->db->escape($date) . $where_condition_string;

        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function studentDepositByFeeGroupFeeTypeArray($student_session_id, $fee_type_array)
    {
        $fee_groups_feetype_ids = implode(', ', $fee_type_array);
        $sql = "SELECT fee_groups_feetype.*,student_fees_master.student_session_id,student_fees_master.amount as `previous_amount`,student_fees_master.is_system,student_fees_master.id as student_fees_master_id,feetype.code,feetype.type, IFNULL(student_fees_deposite.id,0) as `student_fees_deposite_id`,student_fees_deposite.amount_detail,fee_groups.name as `fee_group_name` FROM `fee_groups_feetype` INNER join student_fees_master on student_fees_master.fee_session_group_id=fee_groups_feetype.fee_session_group_id INNER JOIN feetype on feetype.id=fee_groups_feetype.feetype_id INNER JOIN fee_groups on fee_groups.id=fee_groups_feetype.fee_groups_id LEFT JOIN student_fees_deposite on student_fees_deposite.student_fees_master_id=student_fees_master.id and student_fees_deposite.fee_groups_feetype_id=fee_groups_feetype.id WHERE fee_groups_feetype.id in (" . $fee_groups_feetype_ids . ") and student_fees_master.student_session_id=" . $this->db->escape($student_session_id) . "  order by fee_groups_feetype.due_date asc";
        $query                  = $this->db->query($sql);
        return $query->result();
    }


    public function fees_reminder($date,$fee_groups_feetype,$student_session)
    {
         $sql ="SELECT fee_groups_feetype.*,student_fees_master.id as `student_fees_master_id`,student_fees_master.student_session_id,IFNULL(student_fees_deposite.id,0) as `student_fees_deposite_id`,student_fees_deposite.amount_detail,feetype.code,feetype.type FROM `fee_groups_feetype` INNER join student_fees_master on student_fees_master.fee_session_group_id=fee_groups_feetype.fee_session_group_id LEFT JOIN student_fees_deposite on student_fees_deposite.student_fees_master_id=student_fees_master.id and student_fees_deposite.fee_groups_feetype_id =fee_groups_feetype.id INNER JOIN feetype on feetype.id=fee_groups_feetype.feetype_id INNER JOIN fee_groups on fee_groups.id=fee_groups_feetype.fee_groups_id WHERE session_id=".$this->current_session." and due_date < '".$date."' and fee_groups_feetype.id not in ".$fee_groups_feetype." AND student_fees_master.student_session_id in ".$student_session." order by student_fees_master.student_session_id desc";
       
        $query  = $this->db->query($sql);
        return $query->result();
    }

}
