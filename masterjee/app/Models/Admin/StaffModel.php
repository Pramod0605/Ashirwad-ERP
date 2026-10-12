<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }
    
    public function class_info($cls){
        
        $builder    = $this->db->table('classes');
        $query      = $builder->select('*')
                    ->where('classes.id', $cls)
                    ->get();
		$result = $query->getRow();
        return $result;
	}
	
	public function all_class_info(){
        $builder    = $this->db->table('classes');
        $query      = $builder->select('*')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_teachers_class_info($stfId, $sesId){
        $builder    = $this->db->table('subject_timetable');
        $query      = $builder->select('*')
                    ->join('classes', 'classes.id = subject_timetable.class_id ', 'left')
                    ->where('subject_timetable.staff_id', $stfId)
                    ->where('subject_timetable.session_id', $sesId)
                    ->groupBy('subject_timetable.class_id')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_coordinator_class_info($stfId){
        $builder    = $this->db->table('cyc_class_coordinator');
        $query      = $builder->select('*')
                    ->join('classes', 'classes.id = cyc_class_coordinator.class_id ', 'left')
                    ->where('cyc_class_coordinator.staff_id', $stfId)
                    ->groupBy('cyc_class_coordinator.class_id')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_class_section_info($cls){
        
        $builder    = $this->db->table('sections');
        $query      = $builder->select('*')
                    ->join('class_sections', 'class_sections.section_id = sections.id ', 'left')
                    ->where('class_sections.class_id', $cls)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_teachers_class_section_info($id, $session_id, $user_id){
        $builder    = $this->db->table('subject_timetable');
        $query      = $builder->select('*')
                    ->join('sections', 'sections.id = subject_timetable.section_id', 'left')
                    ->where('subject_timetable.staff_id', $user_id)
                    ->where('subject_timetable.session_id', $session_id)
                    ->where('subject_timetable.class_id', $id)
                    ->groupBy('subject_timetable.section_id')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function section_info($ses){
        
        $builder    = $this->db->table('sections');
        $query      = $builder->select('*')
                    ->where('sections.id', $ses)
                    ->get();
		$result = $query->getRow();
        return $result;
	}
	
	public function all_section_info(){
        
        $builder    = $this->db->table('sections');
        $query      = $builder->select('*')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
    
    public function all_subordinate_staff_info($id){
        
        $builder    = $this->db->table('staff');
        $query      = $builder->select('*')
                    ->select('staff.id as empid')
                    ->join('staff_designation', 'staff_designation.id = staff.designation', 'left')
                    ->where('staff.direct_manager', $id)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function staff_all_payslip_info($id){
        $builder    = $this->db->table('staff_payslip');
        $query      = $builder->select('*')
                    ->where('staff_payslip.staff_id', $id)
                    ->where('staff_payslip.net_salary > 0')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function staff_payslip_info($id){
        $builder    = $this->db->table('staff_payslip');
        $query      = $builder->select('*')
                    ->select('staff.id as empid')
                    ->select('staff_payslip.id as psid')
                    ->join('staff', 'staff.id = staff_payslip.staff_id', 'left')
                    ->join('staff_designation', 'staff_designation.id = staff.designation', 'left')
                    ->where('staff_payslip.id', $id)
                    ->get();
		$result = $query->getRow();
        return $result;
	}
	
	public function payslip_allowance_info($id){
        $builder    = $this->db->table('payslip_allowance');
        $query      = $builder->select('*')
                    ->where('payslip_allowance.payslip_id', $id)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function payslip_allowance_positive_info($id){
        $builder    = $this->db->table('payslip_allowance');
        $query      = $builder->select('*')
                    ->where('payslip_allowance.payslip_id', $id)
                    ->where('payslip_allowance.cal_type', 'positive')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function payslip_allowance_negative_info($id){
        $builder    = $this->db->table('payslip_allowance');
        $query      = $builder->select('*')
                    ->where('payslip_allowance.payslip_id', $id)
                    ->where('payslip_allowance.cal_type', 'negative')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_student_info($cls, $sec, $ses, $sg = null){
        $builder    = $this->db->table('student_session');
        $query      = $builder->select('*')
                    ->select('student_session.id as ssid')
                    ->join('students', 'students.id = student_session.student_id', 'left')
                    ->where('student_session.class_id', $cls)
                    ->where('student_session.section_id', $sec)
                    ->where('student_session.session_id', $ses)
                    ->when($sg, static function ($query, $sg) {
                        $query->where('student_session.subject_group_id', $sg);
                    })
                    ->orderBy('students.roll_no', 'ASC')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_student_info_css($cls, $sec, $ses, $sg){
        
        $builder    = $this->db->table('student_session');
        $query      = $builder->select('*')
                    ->select('student_session.id as ssid')
                    ->join('students', 'students.id = student_session.student_id', 'left')
                    ->where('student_session.class_id', $cls)
                    ->where('student_session.section_id', $sec)
                    ->where('student_session.subject_group_id', $sg)
                    ->where('student_session.session_id', $ses)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_students_info(){
        
        $builder    = $this->db->table('student_session');
        $query      = $builder->select('*')
                    ->select('student_session.id as ssid')
                    ->join('students', 'students.id = student_session.student_id', 'left')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_staff_info(){
        
        $builder    = $this->db->table('staff');
        $query      = $builder->select('*')
                    ->where('staff.is_active', '1')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_student_admission_info($cls, $sec, $ses, $fdate, $tdate){
        
        $builder    = $this->db->table('student_session');
        $query      = $builder->select('*')
                    ->select('student_session.id as ssid')
                    ->join('students', 'students.id = student_session.student_id', 'left')
                    ->where('student_session.class_id', $cls)
                    ->where('student_session.section_id', $sec)
                    ->where('student_session.session_id', $ses)
                    ->where('students.admission_date <=', $fdate)
                    ->where('students.admission_date  >=', $tdate)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function student_sibling_info($pid){
        
        $builder    = $this->db->table('student_session');
        $query      = $builder->select('*')
                    ->select('student_session.id as ssid')
                    ->select('classes.class as class_name')
                    ->join('students', 'students.id = student_session.student_id', 'left')
                    ->join('classes', 'classes.id = student_session.class_id', 'left')
                    ->where('students.parent_id', $pid)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function student_hostel_info($id){
        
        $builder    = $this->db->table('students');
        $query      = $builder->select('*')
                    ->join('hostel_rooms', 'hostel_rooms.id = students.hostel_room_id', 'left')
                    ->join('hostel', 'hostel.id = hostel_rooms.hostel_id', 'left')
                    ->join('room_types', 'room_types.id = hostel_rooms.room_type_id', 'left')
                    ->join('cyc_hostel_room_bed', 'cyc_hostel_room_bed.id = students.room_bed_id', 'left')
                    ->where('students.id', $id)
                    ->get();
		$result = $query->getRow();
        return $result;
	}
	
	public function all_hostel_students_info($id){
        
        $builder    = $this->db->table('students');
        $query      = $builder->select('*')
                    ->select('student_session.id as ssid')
                    ->join('student_session', 'student_session.student_id = students.id', 'left')
                    ->join('hostel_rooms', 'hostel_rooms.id = students.hostel_room_id', 'left')
                    ->join('hostel', 'hostel.id = hostel_rooms.hostel_id', 'left')
                    ->where('hostel.id', $id)
                    ->where('students.is_active', 'yes')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function student_route_info($id){
        
        $builder    = $this->db->table('student_session');
        $query      = $builder->select('*')
                    ->join('vehicle_routes', 'vehicle_routes.id = student_session.vehroute_id', 'left')
                    ->join('route_pickup_point', 'route_pickup_point.id = student_session.route_pickup_point_id', 'left')
                    ->join('transport_route', 'transport_route.id = vehicle_routes.route_id', 'left')
                    ->join('vehicles', 'vehicles.id = vehicle_routes.vehicle_id', 'left')
                    ->join('pickup_point', 'pickup_point.id = route_pickup_point.pickup_point_id', 'left')
                    ->where('student_session.id', $id)
                    ->get();
		$result = $query->getRow();
        return $result;
	}
	
	public function all_student_info_by_roll($cls, $sec, $ses){
        
        $builder    = $this->db->table('student_session');
        $query      = $builder->select('*')
                    ->select('student_session.id as ssid')
                    ->join('students', 'students.id = student_session.student_id', 'left')
                    ->where('student_session.class_id', $cls)
                    ->where('student_session.section_id', $sec)
                    ->where('student_session.session_id', $ses)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function student_session_info($sid){
        
        $builder    = $this->db->table('student_session');
        $query      = $builder->select('*')
                    ->select('student_session.id as ssid')
                    ->join('students', 'students.id = student_session.student_id', 'left')
                    ->where('student_session.student_id', $sid)
                    ->get();
		$result = $query->getRow();
        return $result;
	}
	
	public function student_admission_info($sid){
        
        $builder    = $this->db->table('students');
        $query      = $builder->select('*')
                    ->where('students.id', $sid)
                    ->get();
		$result = $query->getRow();
        return $result;
	}
	
	public function teachers_timetable_info($cls, $sec, $ses, $sid){
        
        $builder    = $this->db->table('subject_timetable');
        $query      = $builder->select('*')
                    ->select('subject_timetable.id as tt_id')
                    ->join('subject_group_subjects', 'subject_group_subjects.id = subject_timetable.subject_group_subject_id ', 'left')
                    ->join('subjects', 'subjects.id = subject_group_subjects.subject_id ', 'left')
                    ->join('classes', 'classes.id = subject_timetable.class_id ', 'left')
                    ->join('sections', 'sections.id = subject_timetable.section_id ', 'left')
                    ->where('subject_timetable.class_id', $cls)
                    ->where('subject_timetable.section_id', $sec)
                    ->where('subject_timetable.session_id', $ses)
                    ->where('subject_timetable.staff_id', $sid)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function teachers_timetable_info_grouped($cls, $sec, $ses, $sid){
        
        $builder    = $this->db->table('subject_timetable');
        $query      = $builder->select('*')
                    ->select('subject_timetable.id as tt_id')
                    ->join('subject_group_subjects', 'subject_group_subjects.id = subject_timetable.subject_group_subject_id ', 'left')
                    ->join('subjects', 'subjects.id = subject_group_subjects.subject_id ', 'left')
                    ->join('classes', 'classes.id = subject_timetable.class_id ', 'left')
                    ->join('sections', 'sections.id = subject_timetable.section_id ', 'left')
                    ->where('subject_timetable.session_id', $ses)
                    ->where('subject_timetable.staff_id', $sid)
                    ->groupBy('subject_timetable.day')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function teachers_timetable_info_times_grouped($sid, $ses, $day){
        $builder    = $this->db->table('subject_timetable');
        $query      = $builder->select('*')
                        ->select('subject_timetable.id as tt_id')
                        ->join('subject_group_subjects', 'subject_group_subjects.id = subject_timetable.subject_group_subject_id ', 'left')
                        ->join('subjects', 'subjects.id = subject_group_subjects.subject_id ', 'left')
                        ->join('classes', 'classes.id = subject_timetable.class_id ', 'left')
                        ->join('sections', 'sections.id = subject_timetable.section_id ', 'left')
                        ->where('subject_timetable.staff_id', $sid)
                        ->where('subject_timetable.session_id', $ses)
                        ->where('subject_timetable.day', $day)
                        ->groupBy('subject_timetable.start_time')
                        ->get();
        $timetable  = $query->getResult();
        return $timetable;
	}
	
	public function teachers_timetable_info_times_ungrouped($sid, $ses, $day, $stime, $etime) {
        $builder = $this->db->table('subject_timetable');
        $query = $builder->select('*')
                     ->select('subject_timetable.id as tt_id')
                     ->join('subject_group_subjects', 'subject_group_subjects.id = subject_timetable.subject_group_subject_id', 'left')
                     ->join('subjects', 'subjects.id = subject_group_subjects.subject_id', 'left')
                     ->join('classes', 'classes.id = subject_timetable.class_id', 'left')
                     ->join('sections', 'sections.id = subject_timetable.section_id', 'left')
                     ->where('subject_timetable.staff_id', $sid)
                     ->where('subject_timetable.session_id', $ses)
                     ->where('subject_timetable.day', $day)
                     ->where('subject_timetable.start_time', $stime)
                     ->where('subject_timetable.end_time', $etime)
                     ->groupBy(['subject_timetable.class_id', 'subject_timetable.section_id', 'subject_timetable.subject_group_id']) // Group by class_id and section_id
                     ->get();

        $timetable = $query->getResult();
        return $timetable;
    }

	
	public function teachers_timetable_info_grouped_class($ses, $sid){
        
        $builder    = $this->db->table('subject_timetable');
        $query      = $builder->select('*')
                    ->select('subject_timetable.id as tt_id')
                    ->join('subject_group_subjects', 'subject_group_subjects.id = subject_timetable.subject_group_subject_id ', 'left')
                    ->join('subjects', 'subjects.id = subject_group_subjects.subject_id ', 'left')
                    ->join('classes', 'classes.id = subject_timetable.class_id ', 'left')
                    ->join('sections', 'sections.id = subject_timetable.section_id ', 'left')
                    ->where('subject_timetable.session_id', $ses)
                    ->where('subject_timetable.staff_id', $sid)
                    ->groupBy('subject_timetable.class_id') 
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function teachers_timetable_info_grouped_section($ses, $sid, $cls){
        
        $builder    = $this->db->table('subject_timetable');
        $query      = $builder->select('*')
                    ->select('subject_timetable.id as tt_id')
                    ->join('subject_group_subjects', 'subject_group_subjects.id = subject_timetable.subject_group_subject_id ', 'left')
                    ->join('subjects', 'subjects.id = subject_group_subjects.subject_id ', 'left')
                    ->join('classes', 'classes.id = subject_timetable.class_id ', 'left')
                    ->join('sections', 'sections.id = subject_timetable.section_id ', 'left')
                    ->where('subject_timetable.session_id', $ses)
                    ->where('subject_timetable.staff_id', $sid)
                    ->where('subject_timetable.class_id', $cls)
                    ->groupBy('subject_timetable.section_id') 
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function teachers_timetable_info_grouped_subject($ses, $sid, $cls, $sec){
        
        $builder    = $this->db->table('subject_timetable');
        $query      = $builder->select('*')
                    ->select('subject_timetable.id as tt_id')
                    ->join('subject_group_subjects', 'subject_group_subjects.id = subject_timetable.subject_group_subject_id ', 'left')
                    ->join('subjects', 'subjects.id = subject_group_subjects.subject_id ', 'left')
                    ->join('classes', 'classes.id = subject_timetable.class_id ', 'left')
                    ->join('sections', 'sections.id = subject_timetable.section_id ', 'left')
                    ->where('subject_timetable.session_id', $ses)
                    ->where('subject_timetable.staff_id', $sid)
                    ->where('subject_timetable.class_id', $cls)
                    ->where('subject_timetable.section_id', $sec)
                    ->groupBy('subject_timetable.subject_group_subject_id') 
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function subjects_lesson_info($ses, $sub, $clssec){
        
        $builder    = $this->db->table('lesson');
        $query      = $builder->select('*')
                    ->where('lesson.session_id', $ses)
                    ->where('lesson.subject_group_subject_id ', $sub)
                    ->where('lesson.subject_group_class_sections_id ', $clssec)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function lesson_topic_info($ses, $les){
        
        $builder    = $this->db->table('topic');
        $query      = $builder->select('*')
                    ->where('topic.session_id', $ses)
                    ->where('topic.lesson_id ', $les)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function todays_timetable_info($cls, $sec, $ses, $sid){
        
        $builder    = $this->db->table('subject_timetable');
        $query      = $builder->select('*')
                    ->select('subject_timetable.id as tt_id')
                    ->join('subject_group_subjects', 'subject_group_subjects.id = subject_timetable.subject_group_subject_id ', 'left')
                    ->join('subjects', 'subjects.id = subject_group_subjects.subject_id ', 'left')
                    ->join('classes', 'classes.id = subject_timetable.class_id ', 'left')
                    ->join('sections', 'sections.id = subject_timetable.section_id ', 'left')
                    ->where('subject_timetable.class_id', $cls)
                    ->where('subject_timetable.section_id', $sec)
                    ->where('subject_timetable.session_id', $ses)
                    ->where('subject_timetable.staff_id', $sid)
                    ->where('subject_timetable.day', date("l"))
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function teachers_todays_timetable_info($cls, $sec, $ses, $sid){
        
        $builder    = $this->db->table('subject_timetable');
        $query      = $builder->select('*')
                    ->select('subject_timetable.id as tt_id')
                    ->join('subject_group_subjects', 'subject_group_subjects.id = subject_timetable.subject_group_subject_id ', 'left')
                    ->join('subjects', 'subjects.id = subject_group_subjects.subject_id ', 'left')
                    ->join('classes', 'classes.id = subject_timetable.class_id ', 'left')
                    ->join('sections', 'sections.id = subject_timetable.section_id ', 'left')
                    ->where('subject_timetable.staff_id', $sid)
                    ->where('subject_timetable.day', date("l"))
                    ->orderBy('subject_timetable.time_from', 'ASC')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_exam_group_batch(){
        
        $builder    = $this->db->table('exam_group_class_batch_exams');
        $query      = $builder->select('*')
                    ->where('exam_group_class_batch_exams.is_active', '1')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_subjects(){
        
        $builder    = $this->db->table('subjects');
        $query      = $builder->select('*')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_uploaded_contents(){
        
        $builder    = $this->db->table('upload_contents');
        $query      = $builder->select('*')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
//=============================== BEHAVIOUR ==================================//	
	public function student_behaviour_point(){
        
        $builder    = $this->db->table('student_behaviour');
        $query      = $builder->select('*')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
    
    public function student_incidents_info($sesid, $stuid){
        
        $builder    = $this->db->table('student_incidents');
        $query      = $builder->select('*')
                    ->select('student_incidents.created_at as idate')
                    ->select('student_incidents.id as iid')
                    ->join('student_behaviour', 'student_behaviour.id = student_incidents.incident_id ', 'left')
                    ->join('staff', 'staff.id = student_incidents.assign_by', 'left')
                    ->where('student_incidents.session_id', $sesid)
                    ->where('student_incidents.student_id', $stuid)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function student_incident_comments_info($id){
        
        $builder    = $this->db->table('student_incident_comments');
        $query      = $builder->select('*')
                    ->where('student_incident_comments.student_incident_id', $id)
                    ->where('student_incident_comments.student_id > 0')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function staff_incident_comments_info($id){
        
        $builder    = $this->db->table('student_incident_comments');
        $query      = $builder->select('*')
                    ->join('staff', 'staff.id = student_incident_comments.staff_id', 'left')
                    ->where('student_incident_comments.student_incident_id', $id)
                    ->where('student_incident_comments.staff_id > 0')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
//=============================== BEHAVIOUR ==================================//

	public function all_cbse_template_info(){
        
        $builder    = $this->db->table('cbse_template');
        $query      = $builder->select('*')
                    ->orderBy('cbse_template.id', 'ASC')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_cbse_terms_info(){
        
        $builder    = $this->db->table('cbse_terms');
        $query      = $builder->select('*')
                    ->orderBy('cbse_terms.id', 'ASC')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_cbse_assessment_info(){
        
        $builder    = $this->db->table('cbse_exam_assessment_types');
        $query      = $builder->select('*')
                    ->orderBy('cbse_exam_assessment_types.id', 'ASC')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_cbse_assessment_info_by_aid($id){
        
        $builder    = $this->db->table('cbse_exam_assessment_types');
        $query      = $builder->select('*')
                    ->where('cbse_exam_assessment_types.cbse_exam_assessment_id', $id)
                    ->orderBy('cbse_exam_assessment_types.id', 'ASC')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_cbse_assessment_info_by_sid($ssid){
        
        $builder    = $this->db->table('cbse_student_subject_marks');
        $query      = $builder->select('*')
                    ->select('cbse_exam_students.id as esid')
                    ->select('cbse_exam_timetable.id as ttid')
                    ->select('cbse_exam_assessment_types.name as aname')
                    ->selectSum('cbse_student_subject_marks.marks')
                    ->selectSum('cbse_exam_assessment_types.maximum_marks')
                    ->join('cbse_exam_students', 'cbse_exam_students.id  = cbse_student_subject_marks.cbse_exam_student_id ', 'left')
                    ->join('cbse_exam_timetable', 'cbse_exam_timetable.id  = cbse_student_subject_marks.cbse_exam_timetable_id', 'left')
                    ->join('cbse_exam_assessment_types', 'cbse_exam_assessment_types.id  = cbse_student_subject_marks.cbse_exam_assessment_type_id', 'left')
                    ->where('cbse_exam_students.student_session_id', $ssid)
                    ->groupBy('cbse_exam_assessment_types.name')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_cbse_subject_info_by_sid($ssid){
        
        $builder    = $this->db->table('cbse_student_subject_marks');
        $query      = $builder->select('*')
                    ->select('cbse_exam_students.id as esid')
                    ->select('cbse_exam_timetable.id as ttid')
                    ->select('subjects.name as subName')
                    ->select('subjects.code as subCode')
                    ->selectSum('cbse_student_subject_marks.marks')
                    ->selectSum('cbse_exam_assessment_types.maximum_marks')
                    ->join('cbse_exam_students', 'cbse_exam_students.id  = cbse_student_subject_marks.cbse_exam_student_id ', 'left')
                    ->join('cbse_exam_timetable', 'cbse_exam_timetable.id  = cbse_student_subject_marks.cbse_exam_timetable_id', 'left')
                    ->join('subjects', 'subjects.id  = cbse_exam_timetable.subject_id', 'left')
                    ->join('cbse_exam_assessment_types', 'cbse_exam_assessment_types.id  = cbse_student_subject_marks.cbse_exam_assessment_type_id', 'left')
                    ->where('cbse_exam_students.student_session_id', $ssid)
                    ->groupBy('cbse_exam_timetable.subject_id')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_cbse_term_exams_info($tid){
        
        $builder    = $this->db->table('cbse_exams');
        $query      = $builder->select('*')
                    ->where('cbse_exams.cbse_term_id', $tid)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_cbse_term_students_exams_info($tid, $ssid){
        
        $builder    = $this->db->table('cbse_exam_students');
        $query      = $builder->select('*')
                    ->select('cbse_exam_students.id as ceid')
                    ->join('cbse_exams', 'cbse_exams.id  = cbse_exam_students.cbse_exam_id ', 'left')
                    ->where('cbse_exams.cbse_term_id', $tid)
                    ->where('cbse_exam_students.student_session_id', $ssid)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_cbse_term_students_exam_subjects_info($ssid){
        
        $builder    = $this->db->table('cbse_exam_students');
        $query      = $builder->select('*')
                    ->select('cbse_exam_students.id as esid')
                    ->select('cbse_exam_timetable.id as ttid')
                    ->select('subjects.name as subName')
                    ->join('cbse_exams', 'cbse_exams.id  = cbse_exam_students.cbse_exam_id ', 'left')
                    ->join('cbse_exam_timetable', 'cbse_exam_timetable.cbse_exam_id  = cbse_exam_students.cbse_exam_id', 'left')
                    ->join('subjects', 'subjects.id  = cbse_exam_timetable.subject_id', 'left')
                    ->groupBy('cbse_exam_timetable.subject_id')
                    ->where('cbse_exam_students.student_session_id', $ssid)
                    ->orderBy('cbse_exams.cbse_term_id', 'ASC')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_exam_students_info($id){
        
        $builder    = $this->db->table('cbse_exam_students');
        $query      = $builder->select('*')
                    ->select('cbse_exam_students.id as esid')
                    ->join('student_session', 'student_session.id = cbse_exam_students.student_session_id', 'left')
                    ->join('students', 'students.id = student_session.student_id', 'left')
                    ->where('cbse_exam_students.cbse_exam_id', $id)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
        
	public function all_cbse_term_students_exam_subjects_infog($ssid, $subid){
        
        $builder    = $this->db->table('cbse_student_subject_marks');
        $query      = $builder->select('*')
                    ->select('cbse_exam_students.id as esid')
                    ->select('cbse_exam_timetable.id as ttid')
                    ->selectSum('cbse_student_subject_marks.marks')
                    ->selectSum('cbse_exam_assessment_types.maximum_marks')
                    ->join('cbse_exam_students', 'cbse_exam_students.id  = cbse_student_subject_marks.cbse_exam_student_id ', 'left')
                    ->join('cbse_exam_timetable', 'cbse_exam_timetable.id  = cbse_student_subject_marks.cbse_exam_timetable_id', 'left')
                    ->join('cbse_exam_assessment_types', 'cbse_exam_assessment_types.id  = cbse_student_subject_marks.cbse_exam_assessment_type_id', 'left')
                    ->where('cbse_exam_students.student_session_id', $ssid)
                    ->where('cbse_exam_timetable.subject_id', $subid)
                    ->groupBy('cbse_student_subject_marks.cbse_exam_timetable_id')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_cbse_term_exam_subjects_info($eid){
        
        $builder    = $this->db->table('cbse_exam_timetable');
        $query      = $builder->select('*')
                    ->select('cbse_exam_timetable.id as ttid')
                    ->join('subjects', 'subjects.id  = cbse_exam_timetable.subject_id ', 'left')
                    ->where('cbse_exam_timetable.cbse_exam_id', $eid)
                    ->orderBy('cbse_exam_timetable.subject_id', 'ASC')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_cbse_term_exam_subject_assessments_info($ttid){
        
        $builder    = $this->db->table('cbse_exam_timetable_assessment_types');
        $query      = $builder->select('*')
                    ->select('cbse_exam_timetable_assessment_types.id as atid')
                    ->select('cbse_exam_assessment_types.id as aid')
                    ->join('cbse_exam_assessment_types', 'cbse_exam_assessment_types.id  = cbse_exam_timetable_assessment_types.cbse_exam_assessment_type_id  ', 'left')
                    ->where('cbse_exam_timetable_assessment_types.cbse_exam_timetable_id', $ttid)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_cbse_term_observation_info($tid){
        
        $builder    = $this->db->table('cbse_observation_terms');
        $query      = $builder->select('*')
                    ->select('cbse_observation_terms.id as cotid')
                    ->join('cbse_exam_observations', 'cbse_exam_observations.id  = cbse_observation_terms.cbse_exam_observation_id', 'left')
                    ->where('cbse_observation_terms.cbse_term_id', $tid)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_cbse_term_observation_parameters_info($oid){
        
        $builder    = $this->db->table('cbse_observation_subparameter');
        $query      = $builder->select('*')
                    ->select('cbse_observation_subparameter.id as cospid')
                    ->join('cbse_observation_parameters', 'cbse_observation_parameters.id  = cbse_observation_subparameter.cbse_observation_parameter_id', 'left')
                    ->where('cbse_observation_subparameter.cbse_exam_observation_id', $oid)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_cbse_term_observation_result_info($ssid, $cotid){
        
        $builder    = $this->db->table('cbse_observation_term_student_subparameter');
        $query      = $builder->select('*')
                    ->join('cbse_observation_terms', 'cbse_observation_terms.id  = cbse_observation_term_student_subparameter.cbse_ovservation_term_id', 'left')
                    ->join('cbse_observation_parameters', 'cbse_observation_parameters.id  = cbse_observation_term_student_subparameter.cbse_observation_subparameter_id', 'left')
                    ->where('cbse_observation_terms.cbse_term_id', $tid)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_upcoming_ptm($sid){
        
        $builder    = $this->db->table('cyc_ptm');
        $query      = $builder->select('*')
                    ->where('cyc_ptm.to_date >=', date("Y-m-d"))
                    ->where('cyc_ptm.host_by', $sid)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function ptm_info($id){
        $builder    = $this->db->table('cyc_ptm');
        $query      = $builder->select('*')
                    ->where('cyc_ptm.ptm_id', $id)
                    ->get();
		$result = $query->getRow();
        return $result;
	}
	
	public function pts_info($id){
        $builder    = $this->db->table('cy_ptm_time_slot');
        $query      = $builder->select('*')
                    ->where('cy_ptm_time_slot.pts_id', $id)
                    ->get();
		$result = $query->getRow();
        return $result;
	}
	
	public function ptm_slot_info($id){
        $builder    = $this->db->table('cy_ptm_time_slot');
        $query      = $builder->select('*')
                    ->where('cy_ptm_time_slot.ptm_id', $id)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function ptm_schedule_info($id){
        $builder    = $this->db->table('cyc_ptm_schedule');
        $query      = $builder->select('*')
                    ->join('students', 'students.id = cyc_ptm_schedule.student_id', 'left')
                    ->where('cyc_ptm_schedule.ptm_id', $id)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function staff_leave_info($id){
        $builder    = $this->db->table('staff_leave_details');
        $query      = $builder->select('*')
                    ->select('leave_types.id as ltid')
                    ->join('leave_types', 'leave_types.id = staff_leave_details.leave_type_id', 'left')
                    ->where('staff_leave_details.staff_id', $id)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function staff_leave_request_info($id){
        $builder    = $this->db->table('staff_leave_request');
        $query      = $builder->select('*')
                    ->select('leave_types.id as ltid')
                    ->join('leave_types', 'leave_types.id = staff_leave_request.leave_type_id', 'left')
                    ->where('staff_leave_request.staff_id', $id)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_camp_type_info(){
        $builder    = $this->db->table('cyc_campaign_type');
        $query      = $builder->select('*')
                    ->where('cyc_campaign_type.ct_status', '1')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_camp_promoters_info(){
        $builder    = $this->db->table('cyc_leads_promoters');
        $query      = $builder->select('*')
                    ->where('cyc_leads_promoters.promoter_status', '1')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_users_camp_info($id){
        $builder    = $this->db->table('cyc_campaign');
        $query      = $builder->select('*')
                    ->where('cyc_campaign.c_manager', $id)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_usersin_camp_info(){
        $builder    = $this->db->table('cyc_leads_counsellor');
        $query      = $builder->select('*')
                    ->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads_counsellor.c_id', 'left')
                    ->where('cyc_leads_counsellor.staff_id', session('userid'))
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_camp_counsellor_info($cid){
        $builder    = $this->db->table('cyc_leads_counsellor');
        $query      = $builder->select('*')
                    ->join('staff', 'staff.id = cyc_leads_counsellor.staff_id', 'left')
                    ->where('cyc_leads_counsellor.c_id', $cid)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_source_info(){
        $builder    = $this->db->table('source');
        $query      = $builder->select('*')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_followup_status_info(){
        $builder    = $this->db->table('cyc_leads_followup_status');
        $query      = $builder->select('*')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_followup_content_info(){
        $builder    = $this->db->table('cyc_leads_followup_content');
        $query      = $builder->select('*')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_open_leads_info(){
        $builder    = $this->db->table('cyc_leads');
        $query      = $builder->select('*')
                    ->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads.c_id', 'left')
                    ->where('cyc_leads.is_closed !=', '1')
                    ->where('cyc_leads.individual_status is null')
                    ->limit('1')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_camp_open_leads_info($id, $level = null){
        $builder    = $this->db->table('cyc_leads');
        $query      = $builder->select('*')
                    ->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads.c_id', 'left')
                    ->where('cyc_leads.l_status', 'Open')
                    ->where('cyc_leads.c_id', $id)
                    ->when($level, static function ($query, $level) {
                        $query->where('cyc_leads.level >=', $level);
                    })
                    ->limit('1')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_camp_leads_info($id){
        $builder    = $this->db->table('cyc_leads');
        $query      = $builder->select('*')
                    ->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads.c_id', 'left')
                    ->where('cyc_leads.is_closed !=', '1')
                    ->where('cyc_leads.c_id', $id)
                    ->where('cyc_leads.current_agent', session('userid'))
                    ->limit('1')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	
	public function all_taken_leads_info($fDate = null, $tDate = null){
        $builder    = $this->db->table('cyc_leads');
        $query      = $builder->select('*')
                    ->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads.c_id', 'left')
                    ->where('cyc_leads.is_closed !=', '1')
                    ->where('cyc_leads.current_agent', session('userid'))
                    ->when($fDate, static function ($query, $fDate) {
                        $query->where('cyc_leads.l_date >=', $fDate);
                    })
                    ->when($tDate, static function ($query, $tDate) {
                        $query->where('cyc_leads.l_date <=', $tDate);
                    })
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_open_individual_leads_info(){
        $builder    = $this->db->table('cyc_leads');
        $query      = $builder->select('*')
                    ->where('cyc_leads.l_status', 'Open')
                    ->where('cyc_leads.individual_status', session('userid'))
                    ->limit('1')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function leads_info($id){
        $builder    = $this->db->table('cyc_leads');
        $query      = $builder->select('*')
                    ->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads.c_id', 'left')
                    ->where('cyc_leads.l_id', $id)
                    ->get();
		$result = $query->getRow();
        return $result;
	}
	
	public function all_camp_manager_info(){
        $builder    = $this->db->table('cyc_campaign');
        $query      = $builder->select('*')
                    ->join('staff', 'staff.id = cyc_campaign.c_manager', 'left')
                    ->groupBy('cyc_campaign.c_manager')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_followup($id, $fdate = null, $tdate = null, $call_status = null){
        $builder    = $this->db->table('cyc_leads_followup');
        $query      = $builder->select('*')
                    ->join('cyc_leads', 'cyc_leads.l_id = cyc_leads_followup.l_id', 'left')
                    ->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads.c_id', 'left')
                    ->where('cyc_leads.current_agent', $id)
                    ->where('cyc_leads_followup.followup_status', '0')
                    ->when($fdate, static function ($query, $fdate) {
                        $query->where('cyc_leads_followup.next_followup_date >=', $fdate);
                    })
                    ->when($tdate, static function ($query, $tdate) {
                        $query->where('cyc_leads_followup.next_followup_date <=', $tdate);
                    })
                    ->when($call_status, static function ($query, $call_status) {
                        $query->where('cyc_leads_followup.call_status', $call_status);
                    })
                    ->groupBy('cyc_leads_followup.l_id')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_lead_followup($uid, $lid){
        $builder    = $this->db->table('cyc_leads_followup');
        $query      = $builder->select('*')
                    ->join('cyc_leads', 'cyc_leads.l_id = cyc_leads_followup.l_id', 'left')
                    ->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads.c_id', 'left')
                    ->where('cyc_leads.current_agent', $uid)
                    ->where('cyc_leads_followup.l_id', $lid)
                    ->where('cyc_leads_followup.followup_status', '0')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_missed_followup($id, $fdate = null, $tdate = null, $call_status = null){
        $builder    = $this->db->table('cyc_leads_followup');
        $query      = $builder->select('*')
                    ->join('cyc_leads', 'cyc_leads.l_id = cyc_leads_followup.l_id', 'left')
                    ->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads.c_id', 'left')
                    ->where('cyc_leads.current_agent', $id)
                    ->where('cyc_leads_followup.followup_status', '0')
                    ->where('cyc_leads_followup.next_followup_date <=', date("Y-m-d"))
                    ->when($fdate, static function ($query, $fdate) {
                        $query->where('cyc_leads_followup.next_followup_date >=', $fdate);
                    })
                    ->when($tdate, static function ($query, $tdate) {
                        $query->where('cyc_leads_followup.next_followup_date <=', $tdate);
                    })
                    ->when($call_status, static function ($query, $call_status) {
                        $query->where('cyc_leads_followup.call_status', $call_status);
                    })
                    ->groupBy('cyc_leads_followup.l_id')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_walkin_leads_info($id, $fdate = null, $tdate = null, $mnumber = null){
        $builder    = $this->db->table('cyc_leads_followup');
        $query      = $builder->select('*')
                    ->join('cyc_leads', 'cyc_leads.l_id = cyc_leads_followup.l_id', 'left')
                    ->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads.c_id', 'left')
                    ->where('cyc_leads.current_agent', $id)
                    ->where('cyc_leads.l_status', 'Walk-in')
                    ->where('cyc_leads_followup.followup_status', '0')
                    ->when($fdate, static function ($query, $fdate) {
                        $query->where('cyc_leads_followup.next_followup_date >=', $fdate);
                    })
                    ->when($tdate, static function ($query, $tdate) {
                        $query->where('cyc_leads_followup.next_followup_date <=', $tdate);
                    })
                    ->when($mnumber, static function ($query, $mnumber) {
                        $query->where('cyc_leads.l_phone_number', $mnumber);
                    })
                    ->groupBy('cyc_leads_followup.l_id')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_pending_followup($id){
        $builder    = $this->db->table('cyc_leads_followup');
        $query      = $builder->select('*')
                    ->join('cyc_leads', 'cyc_leads.l_id = cyc_leads_followup.l_id', 'left')
                    ->where('cyc_leads.current_agent', $id)
                    ->where('cyc_leads_followup.followup_status', '0')
                    ->orderBy('cyc_leads_followup.next_followup_date', 'ASC')
                    ->orderBy('cyc_leads_followup.next_followup_time', 'ASC')
                    ->limit('1')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_todays_followup($id){
        $builder    = $this->db->table('cyc_leads_followup');
        $query      = $builder->select('*')
                    ->join('cyc_leads', 'cyc_leads.l_id = cyc_leads_followup.l_id', 'left')
                    ->where('cyc_leads.current_agent', $id)
                    ->where('cyc_leads_followup.next_followup_date', date("Y-m-d"))
                    ->where('cyc_leads.is_closed !=', '1')
                    ->limit('1')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_coming_followup($id){
        $builder    = $this->db->table('cyc_leads_followup');
        $query      = $builder->select('*')
                    ->join('cyc_leads', 'cyc_leads.l_id = cyc_leads_followup.l_id', 'left')
                    ->where('cyc_leads.current_agent', $id)
                    ->where('cyc_leads_followup.next_followup_date >', date("Y-m-d"))
                    ->where('cyc_leads.is_closed !=', '1')
                    ->limit('1')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_leads_followup($id){
        $builder    = $this->db->table('cyc_leads_followup');
        $query      = $builder->select('*')
                    ->join('cyc_leads', 'cyc_leads.l_id = cyc_leads_followup.l_id', 'left')
                    ->where('cyc_leads_followup.l_id', $id)
                    ->orderBy('cyc_leads_followup.next_followup_date', 'DESC')
                    ->orderBy('cyc_leads_followup.next_followup_time', 'DESC')
                    ->get();
		$result = $query->getResult();
        return $result;
	}


//=============================== CBSE =======================================//

    public function all_cbse_terms(){
        $builder    = $this->db->table('cbse_terms');
        $query      = $builder->select('*')
                    ->get();
		$result     = $query->getResult();
        return $result;
	}
	
	public function all_cbse_exam_assessments(){
        $builder    = $this->db->table('cbse_exam_assessments');
        $query      = $builder->select('*')
                    ->get();
		$result     = $query->getResult();
        return $result;
	}
	
	public function cbse_exam_assessments($id){
        $builder    = $this->db->table('cbse_exam_assessments');
        $query      = $builder->select('*')
                    ->where('cbse_exam_assessments.id', $id)
                    ->get();
		$result     = $query->getRow();
        return $result;
	}
	
	public function all_cbse_exam_assessments_type($id){
        $builder    = $this->db->table('cbse_exam_assessment_types');
        $query      = $builder->select('*')
                    ->where('cbse_exam_assessment_types.cbse_exam_assessment_id', $id)
                    ->get();
		$result     = $query->getResult();
        return $result;
	}
	
	public function all_cbse_exam_grades(){
        $builder    = $this->db->table('cbse_exam_grades');
        $query      = $builder->select('*')
                    ->get();
		$result     = $query->getResult();
        return $result;
	}
	
	public function cbse_exam_grades($id){
        $builder    = $this->db->table('cbse_exam_grades');
        $query      = $builder->select('*')
                    ->where('cbse_exam_grades.id', $id)
                    ->get();
		$result     = $query->getRow();
        return $result;
	}
	
	public function all_cbse_exam_grade_range($id){
        $builder    = $this->db->table('cbse_exam_grades_range');
        $query      = $builder->select('*')
                    ->where('cbse_exam_grades_range.cbse_exam_grade_id', $id)
                    ->get();
		$result     = $query->getResult();
        return $result;
	}
	
	public function all_cbse_exams($cidd, $sid, $ssid){
        $builder    = $this->db->table('cbse_exams');
        $query      = $builder->select('*')
                    ->select('cbse_exams.id as ceid')
                    ->select('cbse_exams.description as ced')
                    ->select('cbse_exams.name as ename')
                    ->select('cbse_exam_class_sections.id as cecsid')
                    ->select('class_sections.id as csid')
                    ->select('classes.id as cid')
                    ->select('sections.id as sid')
                    ->select('cbse_terms.id as tid')
                    ->select('cbse_terms.name as tname')
                    ->select('cbse_exam_assessments.id as aid')
                    ->select('cbse_exam_assessments.name as aname')
                    ->select('cbse_exam_grades.id as gid')
                    ->select('cbse_exam_grades.name as gname')
                    ->join('cbse_exam_class_sections', 'cbse_exam_class_sections.cbse_exam_id = cbse_exams.id', 'left')
                    ->join('class_sections', 'class_sections.id = cbse_exam_class_sections.class_section_id', 'left')
                    ->join('classes', 'classes.id = class_sections.class_id', 'left')
                    ->join('sections', 'sections.id = class_sections.section_id', 'left')
                    ->join('cbse_terms', 'cbse_terms.id = cbse_exams.cbse_term_id', 'left')
                    ->join('cbse_exam_assessments', 'cbse_exam_assessments.id = cbse_exams.cbse_exam_assessment_id', 'left')
                    ->join('cbse_exam_grades', 'cbse_exam_grades.id = cbse_exams.cbse_exam_grade_id', 'left')
                    ->groupBy('cbse_exams.id')
                    
                    //->where('classes.id', $cidd)
                    //->where('sections.id', $sid)
                    //->where('cbse_exams.session_id', $ssid)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_cbse_exam_observations(){
        $builder    = $this->db->table('cbse_exam_observations');
        $query      = $builder->select('*')
                    ->get();
		$result     = $query->getResult();
        return $result;
	}
	
	public function cbse_exam_observations($id){
        $builder    = $this->db->table('cbse_exam_observations');
        $query      = $builder->select('*')
                    ->where('cbse_exam_observations.id', $id)
                    ->get();
		$result     = $query->getRow();
        return $result;
	}
	
	public function all_cbse_exam_observations_parameters(){
        $builder    = $this->db->table('cbse_observation_parameters');
        $query      = $builder->select('*')
                    ->get();
		$result     = $query->getResult();
        return $result;
	}
	
	public function all_cbse_exam_observations_parameters_value($id){
        $builder    = $this->db->table('cbse_observation_subparameter');
        $query      = $builder->select('*')
                    ->select('cbse_observation_subparameter.id as pvid')
                    ->select('cbse_observation_subparameter.cbse_observation_parameter_id as pvcopid')
                    ->select('cbse_observation_parameters.name as pname')
                    ->join('cbse_observation_parameters', 'cbse_observation_parameters.id = cbse_observation_subparameter.cbse_observation_parameter_id', 'left')
                    ->where('cbse_observation_subparameter.cbse_exam_observation_id', $id)
                    ->get();
		$result     = $query->getResult();
        return $result;
	}
// ================================ COURSES ==================================//
    public function all_online_courses_category_info(){
        $builder    = $this->db->table('course_category');
        $query      = $builder->select('*')
                    ->get();
		$result     = $query->getResult();
        return $result;
	}
	
    public function all_online_courses_info($cid, $sid){
        $builder    = $this->db->table('online_courses');
        $query      = $builder->select('*')
                    ->select('online_courses.id as ocid')
                    ->select('classes.class as classname')
                    ->join('course_category', 'course_category.id = online_courses.category_id', 'left')
                    ->join('staff', 'staff.id = online_courses.teacher_id', 'left')
                    ->join('online_course_class_sections', 'online_course_class_sections.course_id = online_courses.id', 'left')
                    ->join('class_sections', 'class_sections.id = online_course_class_sections.class_section_id', 'left')
                    ->join('classes', 'classes.id = class_sections.class_id', 'left')
                    //->where('class_sections.class_id', $cid)
                    //->where('class_sections.section_id', $sid)
                    ->groupBy('online_courses.id')
                    ->get();
		$result     = $query->getResult();
        return $result;
	}
	
        public function all_teacher_online_courses_info($tid){
               
                $builder    = $this->db->table('online_courses');
                $query      = $builder->select('*')
                            ->select('online_courses.id as ocid')
                           ->select('classes.class as classname')
                            ->join('course_category', 'course_category.id = online_courses.category_id', 'left')
                            ->join('staff', 'staff.id = online_courses.teacher_id', 'left')
                            ->join('online_course_class_sections', 'online_course_class_sections.course_id = online_courses.id', 'left')
                            ->join('class_sections', 'class_sections.id = online_course_class_sections.class_section_id', 'left')
                            ->join('classes', 'classes.id = class_sections.class_id', 'left')
                            //->where('class_sections.teacher_id', $tid)
                            ->groupBy('online_courses.id')
                            ->get();
                        $result     = $query->getResult();
                return $result;
                }

	public function all_teacher_online_courses_info1($tid){
        $builder    = $this->db->table('online_courses');
        $query      = $builder->select('*')
                    ->select('online_courses.id as ocid')
                    ->join('course_category', 'course_category.id = online_courses.category_id', 'left')
                    ->join('staff', 'staff.id = online_courses.teacher_id', 'left')
                    ->join('online_course_class_sections', 'online_course_class_sections.course_id = online_courses.id', 'left')
                    ->join('class_sections', 'class_sections.id = online_course_class_sections.class_section_id', 'left')
                    //->where('class_sections.teacher_id', $tid)
                    ->groupBy('online_courses.id')
                    ->get();
		$result     = $query->getResult();
        return $result;
	}
	
	public function online_courses_info($id){
        $builder    = $this->db->table('online_courses');
        $query      = $builder->select('*')
                    ->select('online_courses.id as ocid')
                    ->select('classes.class as classname')
                    ->join('course_category', 'course_category.id = online_courses.category_id', 'left')
                    ->join('staff', 'staff.id = online_courses.teacher_id', 'left')
                    ->join('online_course_class_sections', 'online_course_class_sections.course_id = online_courses.id', 'left')
                    ->join('class_sections', 'class_sections.id = online_course_class_sections.class_section_id', 'left')
                    ->join('classes', 'classes.id = class_sections.class_id', 'left')
                    ->where('online_courses.id', $id)
                    ->get();
		$result     = $query->getRow();
        return $result;
	}
	
	public function all_courses_class_section_info($id){
        $builder    = $this->db->table('online_course_class_sections');
        $query      = $builder->select('*')
                    ->select('classes.class as classname')
                    ->join('class_sections', 'class_sections.id = online_course_class_sections.class_section_id', 'left')
                    ->join('classes', 'classes.id = class_sections.class_id', 'left')
                    ->join('sections', 'sections.id = class_sections.section_id', 'left')
                    ->where('online_course_class_sections.course_id', $id)
                    ->get();
		$result     = $query->getResult();
        return $result;
	}
	
	public function all_courses_section_info($id){
        $builder    = $this->db->table('online_course_section');
        $query      = $builder->select('*')
                    ->where('online_course_section.online_course_id', $id)
                    ->get();
		$result     = $query->getResult();
        return $result;
	}
	
	public function online_course_lesson($id){
        $builder    = $this->db->table('online_course_lesson');
        $query      = $builder->select('*')
                    ->where('online_course_lesson.course_section_id', $id)
                    ->get();
		$result     = $query->getResult();
        return $result;
	}
	
	public function all_online_courses_rating_info(){
        $builder    = $this->db->table('course_rating');
        $query      = $builder->select('*')
                    ->select('online_courses.id as ocid')
                    ->select('classes.class as classname')
                    ->join('online_courses', 'online_courses.id = course_rating.course_id', 'left')
                    ->join('course_category', 'course_category.id = online_courses.category_id', 'left')
                    ->join('staff', 'staff.id = online_courses.teacher_id', 'left')
                    ->join('online_course_class_sections', 'online_course_class_sections.course_id = online_courses.id', 'left')
                    ->join('class_sections', 'class_sections.id = online_course_class_sections.class_section_id', 'left')
                    ->join('classes', 'classes.id = class_sections.class_id', 'left')
                    ->join('students', 'students.id = course_rating.student_id', 'left')
                    ->get();
		$result     = $query->getResult();
        return $result;
	}
	
	public function all_online_courses_purchase_info(){
        $builder    = $this->db->table('online_course_payment');
        $query      = $builder->select('*')
                    ->select('online_courses.id as ocid')
                    ->select('classes.class as classname')
                    ->select('students.id as studentid')
                    ->join('online_courses', 'online_courses.id = online_course_payment.online_courses_id', 'left')
                    ->join('course_category', 'course_category.id = online_courses.category_id', 'left')
                    ->join('staff', 'staff.id = online_courses.teacher_id', 'left')
                    ->join('online_course_class_sections', 'online_course_class_sections.course_id = online_courses.id', 'left')
                    ->join('class_sections', 'class_sections.id = online_course_class_sections.class_section_id', 'left')
                    ->join('classes', 'classes.id = class_sections.class_id', 'left')
                    ->join('students', 'students.id = online_course_payment.student_id', 'left')
                    ->get();
		$result     = $query->getResult();
        return $result;
	}
//============================== GMEET =======================================//

    public function all_gmeet_classes_info($cid, $sid){
        $builder    = $this->db->table('gmeet');
        $query      = $builder->select('*')
                    ->select('gmeet.id as gid')
                    ->select('classes.class as classname')
                    ->join('gmeet_sections', 'gmeet_sections.gmeet_id = gmeet.id', 'left')
                    ->join('class_sections', 'class_sections.id = gmeet_sections.cls_section_id', 'left')
                    ->join('classes', 'classes.id = class_sections.class_id', 'left')
                    ->join('sections', 'sections.id = class_sections.section_id', 'left')
                    ->join('staff', 'staff.id = gmeet.staff_id', 'left')
                    ->where('class_sections.class_id', $cid)
                    ->where('class_sections.section_id', $sid)
                    ->get(); 
		$result     = $query->getResult();
        return $result;
	}
	
//============================== LPLAN =======================================//
    public function teachers_all_subjects($csid, $secid, $sesid){
        $builder    = $this->db->table('subject_timetable');
        $query      = $builder->select('*')
                    ->select('subject_group_subjects.id as sgsid')
                    ->select('subject_group_class_sections.id as sgcsid')
                    ->select('subject_groups.name as sgname')
                    ->select('subjects.name as sname')
                    ->join('subject_group_subjects', 'subject_group_subjects.id = subject_timetable.subject_group_subject_id', 'left')
                    ->join('subject_group_class_sections', 'subject_group_class_sections.subject_group_id = subject_group_subjects.subject_group_id', 'left')
                    ->join('subjects', 'subjects.id  = subject_group_subjects.subject_id ', 'left')
                    ->join('subject_groups', 'subject_groups.id  = subject_timetable.subject_group_id ', 'left')
                    ->where('subject_timetable.class_id', $csid)
                    ->where('subject_timetable.section_id', $secid)
                    ->where('subject_timetable.session_id', $sesid)
                    ->where('subject_timetable.staff_id', session('userid'))
                    ->groupBy('subject_timetable.subject_group_subject_id')
                    ->get(); 
		$result     = $query->getResult();
        return $result;
	}
	
    public function class_section_subject_group_subjects($csid, $sesid){
        $builder    = $this->db->table('subject_group_subjects');
        $query      = $builder->select('*')
                    ->select('subject_group_subjects.id as sgsid')
                    ->select('subject_group_class_sections.id as sgcsid')
                    ->join('subject_group_class_sections', 'subject_group_class_sections.subject_group_id = subject_group_subjects.subject_group_id', 'left')
                    ->join('subjects', 'subjects.id  = subject_group_subjects.subject_id ', 'left')
                    ->where('subject_group_class_sections.class_section_id', $csid)
                    ->where('subject_group_subjects.session_id', $sesid)
                    ->get(); 
		$result     = $query->getResult();
        return $result;
	}
	
	public function all_lesson_by_subject($id1, $id2){
        $builder    = $this->db->table('lesson');
        $query      = $builder->select('*')
                    ->where('lesson.subject_group_subject_id', $id1)
                    ->where('lesson.subject_group_class_sections_id', $id2)
                    ->get(); 
		$result     = $query->getResult();
        return $result;
	}
	
	public function all_topic_by_lesson($id){
        $builder    = $this->db->table('topic');
        $query      = $builder->select('*')
                    ->where('topic.session_id', site_info()['active_session'])
                    ->where('topic.lesson_id', $id)
                    ->get(); 
		$result     = $query->getResult();
        return $result;
	}
	
	public function teachers_subjects_lesson_plan($tid, $sgsid, $sgcsid){
        $builder    = $this->db->table('subject_syllabus');
        $query      = $builder->select('*')
                    ->select('topic.name as tname')
                    ->select('lesson.name as lname')
                    ->join('topic', 'topic.id = subject_syllabus.topic_id', 'left')
                    ->join('lesson', 'lesson.id = topic.lesson_id', 'left')
                    ->where('subject_syllabus.created_for', $tid)
                    ->where('lesson.subject_group_subject_id', $sgsid)
                    ->where('lesson.subject_group_class_sections_id', $sgcsid)
                    ->get(); 
		$result     = $query->getResult();
        return $result;
	}
//================================= COMM =====================================//

    public function all_notifications($id){
        $builder    = $this->db->table('send_notification');
        $query      = $builder->select('*')
                    ->where('send_notification.created_id', $id)
                    ->orwhere('send_notification.visible_staff', 'yes')
                    ->get(); 
		$result     = $query->getResult();
        return $result; 
	}
	
	public function all_sms_email(){
        $builder    = $this->db->table('messages');
        $query      = $builder->select('*')
                    ->get(); 
		$result     = $query->getResult();
        return $result;
	}
//=============================== HOMEWORK ===================================//
    public function all_coming_homework($clsid, $secid, $sesid){
        $builder    = $this->db->table('homework');
        $query      = $builder->select('*')
                    ->select('homework.id as hwid')
                    ->select('subjects.name as sname')
                    ->join('subject_group_subjects', 'subject_group_subjects.id = homework.subject_group_subject_id ', 'left')
                    ->join('subjects', 'subjects.id = subject_group_subjects.subject_id ', 'left')
                    ->where('homework.class_id', $clsid)
                    ->where('homework.section_id', $secid)
                    ->where('homework.session_id', $sesid)
                    ->where('homework.homework_date >=', date("Y-m-d"))
                    ->get(); 
		$result     = $query->getResult();
        return $result; 
	}
	
	public function homework_info($hwid){
        $builder    = $this->db->table('homework');
        $query      = $builder->select('*')
                    ->select('homework.id as hwid')
                    ->select('subjects.name as sname')
                    ->join('subject_group_subjects', 'subject_group_subjects.id = homework.subject_group_subject_id ', 'left')
                    ->join('subjects', 'subjects.id = subject_group_subjects.subject_id ', 'left')
                    ->where('homework.id', $hwid)
                    ->get(); 
		$result     = $query->getRow();
        return $result; 
	}
	
	public function all_closed_homework($clsid, $secid, $sesid){
        $builder    = $this->db->table('homework');
        $query      = $builder->select('*')
                    ->select('homework.id as hwid')
                    ->select('subjects.name as sname')
                    ->join('subject_group_subjects', 'subject_group_subjects.id = homework.subject_group_subject_id ', 'left')
                    ->join('subjects', 'subjects.id = subject_group_subjects.subject_id ', 'left')
                    ->where('homework.class_id', $clsid)
                    ->where('homework.section_id', $secid)
                    ->where('homework.session_id', $sesid)
                    ->where('homework.homework_date <', date("Y-m-d"))
                    ->get(); 
		$result     = $query->getResult();
        return $result; 
	}
	
	public function submitted_homework($hwid){
        $builder    = $this->db->table('submit_assignment');
        $query      = $builder->select('*')
                    ->join('students', 'students.id = submit_assignment.student_id', 'left')
                    ->where('submit_assignment.homework_id', $hwid)
                    ->get(); 
		$result     = $query->getResult();
        return $result; 
	}
	
	public function all_daily_assignment($stid, $date){
        $builder    = $this->db->table('daily_assignment');
        $query      = $builder->select('*')
                    ->select('daily_assignment.id as aid')
                    ->join('subject_group_subjects', 'subject_group_subjects.id = daily_assignment.subject_group_subject_id ', 'left')
                    ->join('subjects', 'subjects.id = subject_group_subjects.subject_id ', 'left')
                    ->join('student_session', 'student_session.id = daily_assignment.student_session_id ', 'left')
                    ->join('students', 'students.id = student_session.student_id ', 'left')
                    ->where('students.id', $stid)
                    ->where('daily_assignment.date', $date)
                    ->get(); 
		$result     = $query->getResult();
        return $result; 
	}
//=============================== FRONTDESK ===================================//
    public function all_visitor_reports($fdate, $tdate){
        $builder    = $this->db->table('visitors_book');
        $query      = $builder->select('*')
                    ->select('visitors_book.id as vid')
                    ->join('staff', 'staff.id = visitors_book.staff_id ', 'left')
                    ->join('student_session', 'student_session.id = visitors_book.student_session_id ', 'left')
                    ->join('students', 'students.id = student_session.student_id ', 'left')
                    ->orderBy('visitors_book.date', 'DESC')
                    ->when($fdate, static function ($query, $fdate) {
                        $query->where('visitors_book.date >=', $fdate);
                    })
                    ->when($tdate, static function ($query, $tdate) {
                        $query->where('visitors_book.date <=', $tdate);
                    })
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_approval_pending_visitor_reports($id){
        $builder    = $this->db->table('visitors_book');
        $query      = $builder->select('*')
                    ->select('visitors_book.id as vid')
                    ->join('staff', 'staff.id = visitors_book.staff_id ', 'left')
                    ->join('student_session', 'student_session.id = visitors_book.student_session_id ', 'left')
                    ->join('students', 'students.id = student_session.student_id ', 'left')
                    ->orderBy('visitors_book.date', 'DESC')
                    ->where('visitors_book.staff_id', $id)
                    ->where('visitors_book.meeting_approval', '0')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function visitor_info($id){
        $builder    = $this->db->table('visitors_book');
        $query      = $builder->select('*')
                    ->select('visitors_book.id as vid')
                    ->join('staff', 'staff.id = visitors_book.staff_id ', 'left')
                    ->join('student_session', 'student_session.id = visitors_book.student_session_id ', 'left')
                    ->join('students', 'students.id = student_session.student_id ', 'left')
                    ->where('visitors_book.id', $id)
                    ->get();
		$result = $query->getRow();
        return $result;
	}
	
	public function all_visitor_purpose(){
        $builder    = $this->db->table('visitors_purpose');
        $query      = $builder->select('*')
                    ->get(); 
		$result     = $query->getResult();
        return $result; 
	}
	
	public function all_source(){
        $builder    = $this->db->table('source');
        $query      = $builder->select('*')
                    ->get(); 
		$result     = $query->getResult();
        return $result; 
	}
	
	public function all_reference(){
        $builder    = $this->db->table('reference');
        $query      = $builder->select('*')
                    ->get(); 
		$result     = $query->getResult();
        return $result; 
	}
	
	public function all_inquiry_reports($fdate, $tdate){
        $builder    = $this->db->table('enquiry');
        $query      = $builder->select('*')
                    ->select('enquiry.id as iid')
                    ->join('staff', 'staff.id = enquiry.assigned ', 'left')
                    ->join('classes', 'classes.id = enquiry.class_id ', 'left')
                    ->orderBy('enquiry.date', 'DESC')
                    ->when($fdate, static function ($query, $fdate) {
                        $query->where('enquiry.date >=', $fdate);
                    })
                    ->when($tdate, static function ($query, $tdate) {
                        $query->where('enquiry.date <=', $tdate);
                    })
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function inquiry_info($id){
        $builder    = $this->db->table('enquiry');
        $query      = $builder->select('*')
                    ->select('enquiry.id as iid')
                    ->select('classes.class as cname')
                    ->join('staff', 'staff.id = enquiry.assigned ', 'left')
                    ->join('classes', 'classes.id = enquiry.class_id ', 'left')
                    ->orderBy('enquiry.date', 'DESC')
                    ->where('enquiry.id', $id)
                    ->get();
		$result = $query->getRow();
        return $result;
	}
	
	public function inquiry_followup_info($id){
        $builder    = $this->db->table('follow_up');
        $query      = $builder->select('*')
                    ->where('follow_up.enquiry_id', $id)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
//================================= HOSTEL ===================================//
    
    public function all_hostels(){
        $builder    = $this->db->table('hostel');
        $query      = $builder->select('*')
                    ->select('hostel.id as hid')
                    ->join('staff', 'staff.employee_id = hostel.hostel_incharge', 'left')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function hostel_info($id){
        $builder    = $this->db->table('hostel');
        $query      = $builder->select('*')
                    ->select('hostel.id as hid')
                    ->join('staff', 'staff.employee_id = hostel.hostel_incharge', 'left')
                    ->where('hostel.id', $id)
                    ->get();
		$result = $query->getRow();
        return $result;
	}
	
	public function all_room_types(){
        $builder    = $this->db->table('room_types');
        $query      = $builder->select('*')
                    ->get(); 
		$result     = $query->getResult();
        return $result; 
	}
	
	public function all_hostel_rooms(){
        $builder    = $this->db->table('hostel_rooms');
        $query      = $builder->select('*')
                    ->select('hostel_rooms.id as hrid')
                    ->join('hostel', 'hostel.id = hostel_rooms.hostel_id', 'left')
                    ->join('staff', 'staff.employee_id = hostel.hostel_incharge ', 'left')
                    ->join('room_types', 'room_types.id = hostel_rooms.room_type_id', 'left')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
//================================= LIBRARY ==================================//
    public function all_books(){
        $builder    = $this->db->table('books');
        $query      = $builder->select('*')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function book_info($id){
        $builder    = $this->db->table('books');
        $query      = $builder->select('*')
                    ->where('books.id', $id)
                    ->get();
		$result = $query->getRow();
        return $result;
	}
	
	public function all_libarary_members(){
        $builder    = $this->db->table('libarary_members');
        $query      = $builder->select('*')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function members_info($id){
        $builder    = $this->db->table('libarary_members');
        $query      = $builder->select('*')
                    ->where('libarary_members.id', $id)
                    ->get();
		$result = $query->getRow();
        return $result;
	}
	
	public function book_issued_info($id){
        $builder    = $this->db->table('book_issues');
        $query      = $builder->select('*')
                    ->select('book_issues.id as biid')
                    ->join('books', 'books.id = book_issues.book_id', 'left')
                    ->where('book_issues.member_id', $id) 
                    ->get();
		$result = $query->getResult();
        return $result;
	}
//================================== DUES ====================================//
    public function getTransStudentFees($student_session_id, $session_id)
    {
        $db = \Config\Database::connect();

        // First query to fetch fees master and fee group information
        $builder = $db->table('student_fees_master');
        $builder->select('student_fees_master.*, fee_groups.name')
                ->join('fee_session_groups', 'student_fees_master.fee_session_group_id = fee_session_groups.id')
                ->join('fee_groups', 'fee_groups.id = fee_session_groups.fee_groups_id')
                ->where('student_fees_master.student_session_id', $student_session_id)
                ->orderBy('student_fees_master.id');

        $query = $builder->get();
        $result_value = $query->getResult();

        // Capture class_id and section_id from the request
        $class_id = null;
        $section_id = null;

        // Fetch transport fees data
        $builder = $db->table('student_transport_fees');
        $builder->select('student_fees_deposite.*, 0 as previous_balance_amount, route_pickup_point.fees as amount, students.firstname, students.middlename, students.lastname, student_session.class_id, classes.class, sections.section, student_session.section_id, student_session.student_id, "Transport Fees" as fee_group, "Transport Fees" as name, "Transport Fees" as fee_type, "" as fee_code, 0 as is_system, student_transport_fees.student_session_id, students.admission_no, student_session.id as student_session_id, 0 as is_system, "" as fee_session_group_id')
                ->join('student_fees_deposite', 'student_transport_fees.id = student_fees_deposite.student_transport_fee_id', 'left')
                ->join('transport_feemaster', 'student_transport_fees.transport_feemaster_id = transport_feemaster.id')
                ->join('student_session', 'student_session.id = student_transport_fees.student_session_id', 'inner')
                ->join('route_pickup_point', 'route_pickup_point.id = student_transport_fees.route_pickup_point_id')
                ->join('classes', 'classes.id = student_session.class_id')
                ->join('sections', 'sections.id = student_session.section_id')
                ->join('students', 'students.id = student_session.student_id')
                ->where('student_session.session_id', $session_id)
                ->where('student_session.id', $student_session_id)
                ->orderBy('student_fees_deposite.id', 'desc');

        if ($class_id != null) {
            $builder->where('student_session.class_id', $class_id);
        }

        if ($section_id != null) {
            $builder->where('student_session.section_id', $section_id);
        }

        $query1 = $builder->get();
        $result_value1 = $query1->getResult();

        // Merge results if needed
        if (empty($result_value)) {
            $result_value2 = $result_value1;
        } elseif (empty($result_value1)) {
            $result_value2 = $result_value;
        } else {
            $result_value2 = array_merge($result_value, $result_value1);
        }

        // Process the result values
        if (!empty($result_value2)) {
            foreach ($result_value2 as $result_key => $result_value) {
                $result_value->fees = [];
                $fee_session_group_id = $result_value->fee_session_group_id;
                $student_fees_master_id = $result_value->id;

                if (empty($result_value->fee_session_group_id)) {
                    $result_value->fees[0] = (object)[
                        'amount_detail' => $result_value->amount_detail,
                        'amount' => $result_value->amount
                    ];
                } else {
                    $result_value->fees = $this->getDueFeeByFeeSessionGroup($fee_session_group_id, $student_fees_master_id);
                }

                if ($result_value->is_system != 0) {
                    $result_value->fees[0]->amount = $result_value->amount;
                }
            }
        }

        return $result_value2;
    }

    public function getDueFeeByFeeSessionGroup($fee_session_groups_id, $student_fees_master_id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('student_fees_master');

        $builder->select('student_fees_master.*, fee_groups_feetype.id as fee_groups_feetype_id, fee_groups_feetype.amount, fee_groups_feetype.due_date, fee_groups_feetype.fine_amount, fee_groups_feetype.fee_groups_id, fee_groups.name, fee_groups_feetype.feetype_id, feetype.code, feetype.type, IFNULL(student_fees_deposite.id, 0) as student_fees_deposite_id, IFNULL(student_fees_deposite.amount_detail, 0) as amount_detail')
                ->join('fee_session_groups', 'fee_session_groups.id = student_fees_master.fee_session_group_id')
                ->join('fee_groups_feetype', 'fee_groups_feetype.fee_session_group_id = fee_session_groups.id')
                ->join('fee_groups', 'fee_groups.id = fee_groups_feetype.fee_groups_id')
                ->join('feetype', 'feetype.id = fee_groups_feetype.feetype_id')
                ->join('student_fees_deposite', 'student_fees_deposite.student_fees_master_id = student_fees_master.id AND student_fees_deposite.fee_groups_feetype_id = fee_groups_feetype.id', 'left')
                ->where('student_fees_master.fee_session_group_id', $fee_session_groups_id)
                ->where('student_fees_master.id', $student_fees_master_id)
                ->orderBy('fee_groups_feetype.due_date', 'ASC');

        $query = $builder->get();
        return $query->getResult();
    }
    
    public function checkreferenceno($ref){
        $builder    = $this->db->table('online_admissions');
        $query      = $builder->select('*')
                    ->where('online_admissions.reference_no', $ref)
                    ->get();
		$result     = $query->getRow();
        if (!empty($result)) {
            return 1;
        } else {
            return 0;
        }
	}
}