<?php

class Payroll extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('file');
        $this->load->helper('general');
        $this->config->load("mailsms");
        $this->config->load("payroll");
        $this->load->library('mailsmsconf');
        $this->load->library('media_storage');
        $this->config_attendance = $this->config->item('attendence');
        $this->staff_attendance  = $this->config->item('staffattendance');
        $this->payment_mode      = $this->config->item('payment_mode');
        $this->load->model("payroll_model");
        $this->load->model("staff_model");
        $this->load->model('staffattendancemodel');
        $this->payroll_status     = $this->config->item('payroll_status');
        $this->sch_setting_detail = $this->setting_model->getSetting();
    }

    public function index()
    {

        if (!$this->rbac->hasPrivilege('staff_payroll', 'can_view')) {
            access_denied();
        }

        $this->session->set_userdata('top_menu', 'HR');
        $this->session->set_userdata('sub_menu', 'admin/payroll');
        $data["staff_id"]            = "";
        $data["name"]                = "";
        $data["month"]               = date("F", strtotime("-1 month"));
        $data["year"]                = date("Y");
        $data["present"]             = 0;
        $data["absent"]              = 0;
        $data["late"]                = 0;
        $data["half_day"]            = 0;
        $data["holiday"]             = 0;
        $data["leave_count"]         = 0;
        $data["alloted_leave"]       = 0;
        $data["basic"]               = 0;
        $data["payment_mode"]        = $this->payment_mode;
        $user_type                   = $this->staff_model->getStaffRole();
        $data['classlist']           = $user_type;
        $data['monthlist']           = $this->customlib->getMonthDropdown();
        $data['sch_setting']         = $this->sch_setting_detail;
        $data['staffid_auto_insert'] = $this->sch_setting_detail->staffid_auto_insert;
        $submit                      = $this->input->post("search");
        $data['bank_accounts']       = $this->staff_model->all_bank_and_cash_account();
        $data['all_cl_account']       = $this->staff_model->all_cl_account();
        if (isset($submit) && $submit == "search") {

            $month    = $this->input->post("month");
            $year     = $this->input->post("year");
            $emp_name = $this->input->post("name");
            $role     = $this->input->post("role");
            $data['print_type']     = $this->input->post("print_type");

            $searchEmployee = $this->payroll_model->searchEmployee($month, $year, $emp_name, $role);

            $data["resultlist"] = $searchEmployee;
            $data["name"]       = $emp_name;
            $data["month"]      = $month;
            $data["year"]       = $year;
        }

        $data["payroll_status"] = $this->payroll_status;
        $this->load->view("layout/header", $data);
        $this->load->view("admin/payroll/stafflist", $data);
        $this->load->view("layout/footer", $data);
    }
    
    public function increment() {

        if (!$this->rbac->hasPrivilege('payroll_increment', 'can_view')) {
            access_denied();
        }

        $this->session->set_userdata('top_menu', 'HR');
        $this->session->set_userdata('sub_menu', 'admin/payroll/increment');
        $data["staff_id"]            = "";
        $data["name"]                = "";
        $data["month"]               = date("F", strtotime("-1 month"));
        $data["year"]                = date("Y");
        $data["amount"]             = 0;
        $data["basic"]               = 0;
        $data["payment_mode"]        = $this->payment_mode;
        $user_type                   = $this->staff_model->getStaffRole();
        $data['classlist']           = $user_type;
        $data['monthlist']           = $this->customlib->getMonthDropdown();
        $data['sch_setting']         = $this->sch_setting_detail;
        $data['staffid_auto_insert'] = $this->sch_setting_detail->staffid_auto_insert;
        $submit                      = $this->input->post("search");
        $data['bank_accounts']       = $this->staff_model->all_bank_and_cash_account();
        $data['all_cl_account']       = $this->staff_model->all_cl_account();
        if (isset($submit) && $submit == "search") {

            $month    = $this->input->post("month");
            $year     = $this->input->post("year");
            $emp_name = $this->input->post("name");
            $role     = $this->input->post("role");
            $data['action_type']     = $this->input->post("action_type");
            
            if ($data['action_type'] == 0 || $data['action_type'] == 1) {
                $data['inc_status'] = false;
            } elseif ($data['action_type'] == 2) {
                $data['inc_status'] = 'approved';
            } elseif ($data['action_type'] == 3) {
                $data['inc_status'] = 'rejected';
            } elseif ($data['action_type'] == 4) {
                $data['inc_status'] = 'pending';
            }

            $searchEmployee = $this->payroll_model->searchEmployee($month, $year, $emp_name, $role);

            $data["resultlist"] = $searchEmployee;
            $data["name"]       = $emp_name;
            $data["month"]      = $month;
            $data["year"]       = $year;
        }

        $data["payroll_status"] = $this->payroll_status;
        $this->load->view("layout/header", $data);
        $this->load->view("admin/payroll/incstafflist", $data);
        $this->load->view("layout/footer", $data);
    }
    
    public function increment_approve() {

        if (!$this->rbac->hasPrivilege('payroll_increment_approve', 'can_view')) {
            access_denied();
        }

        $this->session->set_userdata('top_menu', 'HR');
        $this->session->set_userdata('sub_menu', 'admin/payroll/increment_approve');
        $data["staff_id"]            = "";
        $data["name"]                = "";
        $data["month"]               = date("F", strtotime("-1 month"));
        $data["year"]                = date("Y");
        $data["amount"]              = 0;
        $data["basic"]               = 0;
        $data["payment_mode"]        = $this->payment_mode;
        $user_type                   = $this->staff_model->getStaffRole();
        $data['classlist']           = $user_type;
        $data['monthlist']           = $this->customlib->getMonthDropdown();
        $data['sch_setting']         = $this->sch_setting_detail;
        $data['staffid_auto_insert'] = $this->sch_setting_detail->staffid_auto_insert;
        $submit                      = $this->input->post("search");
        $data['bank_accounts']       = $this->staff_model->all_bank_and_cash_account();
        $data['all_cl_account']       = $this->staff_model->all_cl_account();
        if (isset($submit) && $submit == "search") {

            $month    = $this->input->post("month");
            $year     = $this->input->post("year");
            $emp_name = $this->input->post("name");
            $role     = $this->input->post("role");
            $data['action_type']     = $this->input->post("action_type");
            
            if ($data['action_type'] == 0 || $data['action_type'] == 1) {
                $data['inc_status'] = false;
            } elseif ($data['action_type'] == 2) {
                $data['inc_status'] = 'approved';
            } elseif ($data['action_type'] == 3) {
                $data['inc_status'] = 'rejected';
            } elseif ($data['action_type'] == 4) {
                $data['inc_status'] = 'pending';
            }

            $searchEmployee = $this->payroll_model->searchEmployee($month, $year, $emp_name, $role);

            $data["resultlist"] = $searchEmployee;
            $data["name"]       = $emp_name;
            $data["month"]      = $month;
            $data["year"]       = $year;
        }

        $data["payroll_status"] = $this->payroll_status;
        $this->load->view("layout/header", $data);
        $this->load->view("admin/payroll/incstafflist_approve", $data);
        $this->load->view("layout/footer", $data);
    }
    
    public function add_increment() {
        $month      = $this->input->post("selected_month");
        $year       = $this->input->post("selected_year");
        $employee   = $this->input->post("emId");
        $increment  = $this->input->post("inc_amount");
        $basic      = $this->input->post("basic");
        $inc_status = $this->input->post("inc_status");
        if ($inc_status != 'pending') {
        foreach ($employee as $key => $emp) {
            $incStatus = $this->db->query("SELECT * FROM `cyc_staff_payroll_increment` WHERE staff_id = '".$emp."' AND status = 'pending' ")->row();
            $data = array(
                'staff_id'      => $emp,
                'month'         => $month,
                'year'          => $year,
                'basic_salary'  => $basic[$key],
                'increment'     => $increment[$key],
                'date'          => date("Y-m-d"),
                'entry_by'      => $this->session->userdata('admin')['id'],
            );
            if (!empty($emp) && $increment[$key] > 0 && empty($incStatus->pi_id)) {
                $this->db->insert('cyc_staff_payroll_increment', $data);
            }
        }
        } else {
            foreach ($employee as $key => $emp) {
                $inc_ids    = $this->input->post($emp.'inc_id');
                $inc_amt    = $this->input->post($emp.'inc_amount');
                foreach ($inc_ids as $ikey => $incid) {
                    $data = array(
                        'increment'     => $inc_amt[$key],
                        'date'          => date("Y-m-d"),
                        'entry_by'      => $this->session->userdata('admin')['id'],
                    );
                    if (!empty($emp) && !empty($incid) && $inc_amt[$key] > 0) {
                        $this->db->where('pi_id', $incid);
                        $this->db->update('cyc_staff_payroll_increment', $data);
                    }
                }
            }    
        }
        $data['status']  = 'success';
        $data['message'] = 'Saved';
        echo json_encode($data);
    }
    
    public function approve_increment() {
        $month      = $this->input->post("selected_month");
        $year       = $this->input->post("selected_year");
        $employee   = $this->input->post("emId");
        $increment  = $this->input->post("inc_amount");
        $basic      = $this->input->post("basic");
        $inc_status = $this->input->post("inc_status");
        foreach ($employee as $key => $emp) {
            $inc_ids    = $this->input->post($emp.'inc_id');
            $inc_amt    = $this->input->post($emp.'inc_amount');
            foreach ($inc_ids as $ikey => $incid) {
                $inc_status = $this->input->post($incid.'inc_status');
                if (!empty($inc_status)) {
                    $data = array(
                        'action_by'     => $this->session->userdata('admin')['id'],
                        'action_date'   => date("Y-m-d"),
                        'status'        => $inc_status,
                    );
                    $this->db->where('pi_id', $incid); 
                    $this->db->update('cyc_staff_payroll_increment', $data);
                    if ($inc_status == 'approved') {
                        $incStatus  = $this->db->query("SELECT basic_salary as bs FROM `staff` WHERE id = '".$emp."' ")->row();
                        $c_salary   = $incStatus->bs;
                        $n_salary   = $c_salary + $inc_amt[$key];
                        $this->db->query("UPDATE `staff` SET basic_salary = '".$n_salary."' WHERE id = '".$emp."' ");
                        
                        $datat = array(
                            'staff_id'      => $emp,
                            'title'         => 'Appraisal',
                            'timeline_date' => date("Y-m-d"),
                            'description'   => 'Increment added : '.$inc_amt[$key],
                            'status'        => 'Approved',
                            'date'          => date("Y-m-d"),
                        );
                        $this->db->insert('staff_timeline', $datat);
                    }
                }
            }
        }
        $data['status']  = 'success';
        $data['message'] = 'Saved';
        echo json_encode($data);
    }

    public function create($month, $year, $id)
    {       
        
        $data["staff_id"]            = "";
        $data["basic"]               = "";
        $data["name"]                = "";
        $data["month"]               = "";
        $data["year"]                = "";
        $data["present"]             = 0;
        $data["absent"]              = 0;
        $data["late"]                = 0;
        $data["half_day"]            = 0;
        $data["holiday"]             = 0;
        $data["leave_count"]         = 0;
        $data["alloted_leave"]       = 0;
        $data['sch_setting']         = $this->sch_setting_detail;
        $data['staffid_auto_insert'] = $this->sch_setting_detail->staffid_auto_insert;
        $user_type                   = $this->staff_model->getStaffRole();
        $data['classlist']           = $user_type;

        $date = $year . "-" . $month;
        $data['date'] = $year . "-" . $month;

        $searchEmployee = $this->payroll_model->searchEmployeeById($id);

        $data['result'] = $searchEmployee;
        $data["month"]  = $month;
        $data["year"]   = $year;

        $alloted_leave = $this->staff_model->alloted_leave($id);

        $newdate = date('Y-m-d', strtotime($date . " +1 month"));
        $data['newdates'] = date('d-m-Y', strtotime($date));

        $data['monthAttendance'] = $this->monthAttendance($newdate, 3, $id);
        $data['monthLeaves']     = $this->monthLeaves($newdate, 3, $id);
        $data["attendanceType"]  = $this->staffattendancemodel->getStaffAttendanceType();
        $data["alloted_leave"]   = $alloted_leave[0]["alloted_leave"];

        $this->load->view("layout/header", $data);
        $this->load->view("admin/payroll/create", $data);
        $this->load->view("layout/footer", $data);
    }

    public function createBulk()
    {       
        $month      = $this->input->post("selected_month");
        $year       = $this->input->post("selected_year");
        $staff_ids  = $this->input->post("staff_id");


    

        
        $basic               = 0;
        $present             = 0;
        $absent              = 0;
        $late                = 0;
        $half_day            = 0;
        $holiday             = 0;
        $leave_count         = 0;
        $alloted_leave       = 0;
        $deductionSalary     = 0;
    foreach ($staff_ids as $staff_id) {
        $sch_setting         = $this->sch_setting_detail;
        $staffid_auto_insert = $this->sch_setting_detail->staffid_auto_insert;
        $user_type                   = $this->staff_model->getStaffRole();
        $classlist           = $user_type;

        $date = $year . "-" . $month;
        $date = $year . "-" . $month;
        $id = $staff_id;
        $searchEmployee = $this->payroll_model->searchEmployeeById($id);

        $result = $searchEmployee;
        $month  = $month;
        $year   = $year;

        $alloted_leave = $this->staff_model->alloted_leave($id);

        $newdate = date('Y-m-d', strtotime($date . " +1 month"));
        $newdates = date('d-m-Y', strtotime($date));

        $monthAttendance = $this->monthAttendance($newdate, 3, $id);
        $monthLeaves     = $this->monthLeaves($newdate, 3, $id);
        $attendanceType  = $this->staffattendancemodel->getStaffAttendanceType();
        $alloted_leave   = $alloted_leave[0]["alloted_leave"];

        $currentMonthLeaveHalf = 0;
        $currentMonthAbsent    = 0;
        foreach ($monthAttendance as $attendence_key => $attendence_value) {
    
        if ($attendence_key == $newdates) {
            $currentMonthLeaveHalf = ($attendence_value['half_day']/2) + $monthLeaves[date("m", strtotime($attendence_key))];
            $currentMonthAbsent    = $attendence_value['absent'];
        }

        }

        if ($alloted_leave < $currentMonthLeaveHalf) {
            $deductionDays      = $currentMonthLeaveHalf - $alloted_leave;
            $deductionSalary    = (($result["basic_salary"] / 30) * ($deductionDays));
        } else {
            $deductionSalary = 0;
        }
        
        if ($currentMonthAbsent > 0) {
            $deductionSalary    = $deductionSalary + ((($result["basic_salary"] / 30) * ($currentMonthAbsent)));
        }

        $advancePayrolls = $this->staff_model->staffAdvancePayrollInfo($result["id"]);
        $allowance = 0;
        $deduction = 0;
        foreach ($advancePayrolls as $advancePayroll) {
             if ($advancePayroll->payroll_type =='Allowance') {
                $allowance += $advancePayroll->payroll_amount;
             } else {
                $deduction += $advancePayroll->payroll_amount;
             }
        }

        $basic = $result["basic_salary"];

        $payble = ($basic + $allowance) - ($deduction - $deductionSalary);

        if (!$this->rbac->hasPrivilege('staff_payroll', 'can_add')) {
            access_denied();
        }

        $basic           = convertCurrencyFormatToBaseAmount($basic);
        $total_allowance = convertCurrencyFormatToBaseAmount($allowance);
        $total_deduction = convertCurrencyFormatToBaseAmount($deduction);
        $net_salary      = convertCurrencyFormatToBaseAmount($payble);
        $status          = 'generated';
        $staff_id        = $id;
        $month           = $month;
        $year            = $year;
        $leave_deduction = '';
        $this->form_validation->set_rules('net_salary', $this->lang->line('net_salary'), 'trim|required|xss_clean');
        

            $data = array('staff_id' => $staff_id,
                'basic'                  => $basic,
                'total_allowance'        => $total_allowance,
                'total_deduction'        => $total_deduction,
                'net_salary'             => $net_salary,
                'payment_date'           => date("Y-m-d"),
                'status'                 => $status,
                'month'                  => $month,
                'year'                   => $year,
                'tax'                    => '0',
                'leave_deduction'        => '0',
            );

            $checkForUpdate = $this->payroll_model->checkPayslip($month, $year, $staff_id);
 
            if ($checkForUpdate == true) {

                $insert_id        = $this->payroll_model->createPayslip($data);
                $payslipid        = $insert_id;
                $allowance_type   = $this->input->post("allowance_type");
                $deduction_type   = $this->input->post("deduction_type");
                $allowance_amount = $this->input->post("allowance_amount");
                $deduction_amount = $this->input->post("deduction_amount");
                if (!empty($advancePayrolls)) {

                    $i = 0;
                    foreach ($advancePayrolls as $advancePayroll) {
                        if ($advancePayroll->payroll_type =='Allowance') {
                        $all_data = array(
                            'payslip_id'     => $payslipid,
                            'allowance_type' => $advancePayroll->payroll_type,
                            'amount'         => convertCurrencyFormatToBaseAmount($advancePayroll->payroll_amount),
                            'staff_id'       => $staff_id,
                            'cal_type'       => "positive",
                        );

                        $insert_payslip_allowance = $this->payroll_model->add_allowance($all_data);

                        $i++;

                        }
                    }
                }

                if (!empty($advancePayrolls)) {
                    $j = 0;
                    foreach ($advancePayrolls as $advancePayroll) {
                        if ($advancePayroll->payroll_type !='Allowance') {
                            $all_data = array(
                                'payslip_id'     => $payslipid,
                                'allowance_type' => $advancePayroll->payroll_type,
                                'amount'         => convertCurrencyFormatToBaseAmount($advancePayroll->payroll_amount),
                                'staff_id'       => $staff_id,
                                'cal_type'       => "negative",
                            );
    
                            $insert_payslip_allowance = $this->payroll_model->add_allowance($all_data);
    
                            $j++;
    
                            }
                    }
                }

            }
            $data['status']  = 'success';
            $data['message'] = 'Saved';
            echo json_encode($array);

    }

        $this->load->view("layout/header", $data);
        $this->load->view("admin/payroll/create", $data);
        $this->load->view("layout/footer", $data);
    }

    public function edit($id)
    {

        $data["staff_id"]         = "";
        $data["basic"]            = "";
        $data["name"]             = "";
        $data["month"]            = "";
        $data["year"]             = "";
        $data["present"]          = 0;
        $data["absent"]           = 0;
        $data["late"]             = 0;
        $data["half_day"]         = 0;
        $data["holiday"]          = 0;
        $data["leave_count"]      = 0;
        $data["alloted_leave"]    = 0;
        $user_type                = $this->staff_model->getStaffRole();
        $employee_payroll         = $this->payroll_model->getPayslip($id);
        $data['employee_payroll'] = $employee_payroll;
        $data['classlist']        = $user_type;
        $data['sch_setting']      = $this->sch_setting_detail;
        $searchEmployee           = $this->payroll_model->searchEmployeeById($employee_payroll['staff_id']);
        $date                     = $employee_payroll['year'] . "-" . $employee_payroll['month'];
        $data['result']           = $searchEmployee;
        $data["month"]            = $employee_payroll['month'];
        $data["year"]             = $employee_payroll['year'];

        $data["earnings"]   = $this->payroll_model->getAllowance($id, 'positive');
        $data["deductions"] = $this->payroll_model->getAllowance($id, 'negative');

        $alloted_leave           = $this->staff_model->alloted_leave($employee_payroll['staff_id']);
        $newdate                 = date('Y-m-d', strtotime($date . " +1 month"));
        $data['monthAttendance'] = $this->monthAttendance($newdate, 3, $employee_payroll['staff_id']);
        $data['monthLeaves']     = $this->monthLeaves($newdate, 3, $employee_payroll['staff_id']);
        $data["attendanceType"]  = $this->staffattendancemodel->getStaffAttendanceType();
        $data["alloted_leave"]   = $alloted_leave[0]["alloted_leave"];
        $this->load->view("layout/header", $data);
        $this->load->view("admin/payroll/edit", $data);
        $this->load->view("layout/footer", $data);
    }

    public function editpayroll()
    {
        $id              = $this->input->post("id");
        $basic           = $this->input->post("basic");
        $total_allowance = $this->input->post("total_allowance");
        $total_deduction = $this->input->post("total_deduction");
        $net_salary      = $this->input->post("net_salary");
        $status          = $this->input->post("status");
        $staff_id        = $this->input->post("staff_id");
        $month           = $this->input->post("month");
        $name            = $this->input->post("name");
        $year            = $this->input->post("year");
        $tax             = $this->input->post("tax_percent");
        $leave_deduction = $this->input->post("leave_deduction");
        $this->form_validation->set_rules('net_salary', $this->lang->line('net_salary'), 'trim|required|xss_clean');
        if ($this->form_validation->run() == false) {

            $this->create($month, $year, $staff_id);
        } else {

            $data = array(
                'id'              => $id,
                'staff_id'        => $staff_id,
                'basic'           => convertCurrencyFormatToBaseAmount($basic),
                'total_allowance' => convertCurrencyFormatToBaseAmount($total_allowance),
                'total_deduction' => convertCurrencyFormatToBaseAmount($total_deduction),
                'net_salary'      => convertCurrencyFormatToBaseAmount($net_salary),
                'payment_date'    => date("Y-m-d"),
                'status'          => $status,
                'month'           => $month,
                'year'            => $year,
                'tax'             => convertCurrencyFormatToBaseAmount($tax),
                'leave_deduction' => '0',
                'generated_by'    => $this->customlib->getStaffID(),
            );

            $checkForUpdate = $this->payroll_model->checkPayslip($month, $year, $staff_id);
            if (!$checkForUpdate) {
                $insert_id         = $this->payroll_model->createPayslip($data);
                $payslipid         = $insert_id;
                $allowance_type    = $this->input->post("allowance_type");
                $deduction_type    = $this->input->post("deduction_type");
                $allowance_prev_id = $this->input->post("allowance_prev_id");
                $deduction_prev_id = $this->input->post("deduction_prev_id");
                $allowance_amount  = $this->input->post("allowance_amount");
                $deduction_amount  = $this->input->post("deduction_amount");

                if (!empty($allowance_type)) {

                    $i                        = 0;
                    $insert_payslip_allowance = array();
                    $update_payslip_allowance = array();
                    foreach ($allowance_type as $key => $all) {
                        if ($allowance_prev_id[$i] != 0) {
                            $update_payslip_allowance[] = array(
                                'id'             => $allowance_prev_id[$i],
                                'payslip_id'     => $payslipid,
                                'allowance_type' => $allowance_type[$i],
                                'amount'         => convertCurrencyFormatToBaseAmount($allowance_amount[$i]),
                                'staff_id'       => $staff_id,
                                'cal_type'       => "positive",
                            );
                        } else {
                            $insert_payslip_allowance[] = array(
                                'payslip_id'     => $payslipid,
                                'allowance_type' => $allowance_type[$i],
                                'amount'         => convertCurrencyFormatToBaseAmount($allowance_amount[$i]),
                                'staff_id'       => $staff_id,
                                'cal_type'       => "positive",
                            );
                        }

                        $i++;
                    }

                    $insert_payslip_allowance = $this->payroll_model->update_allowance($insert_payslip_allowance, $update_payslip_allowance, $allowance_prev_id, $payslipid, 'positive');
                } else {

                    $insert_payslip_allowance = $this->payroll_model->update_allowance([], [], [0], $payslipid, 'positive');
                }

                if (!empty($deduction_type)) {
                    $j                        = 0;
                    $insert_payslip_allowance = array();
                    $update_payslip_allowance = array();

                    foreach ($deduction_type as $key => $type) {
                        if ($deduction_prev_id[$j] != 0) {
                            $update_payslip_allowance[] = array(
                                'id'             => $deduction_prev_id[$j],
                                'payslip_id'     => $payslipid,
                                'allowance_type' => $deduction_type[$j],
                                'amount'         => convertCurrencyFormatToBaseAmount($deduction_amount[$j]),
                                'staff_id'       => $staff_id,
                                'cal_type'       => "negative",
                            );
                        } else {
                            $insert_payslip_allowance[] = array(
                                'payslip_id'     => $payslipid,
                                'allowance_type' => $deduction_type[$j],
                                'amount'         => convertCurrencyFormatToBaseAmount($deduction_amount[$j]),
                                'staff_id'       => $staff_id,
                                'cal_type'       => "negative",
                            );
                        }
                        $j++;
                    }

                    $insert_payslip_allowance = $this->payroll_model->update_allowance($insert_payslip_allowance, $update_payslip_allowance, $deduction_prev_id, $payslipid, 'negative');
                } else {
                    $insert_payslip_allowance = $this->payroll_model->update_allowance([], [], [0], $payslipid, 'negative');
                }

                redirect('admin/payroll');
            } else {

                $this->session->set_flashdata("msg", "<div class='alert alert-warning'>" . $this->lang->line('payslip_not_generated') . "</div>");

                redirect('admin/payroll');
            }
        }
    }

    public function monthAttendance($st_month, $no_of_months, $emp)
    {
        $record = array();
        for ($i = 1; $i <= $no_of_months; $i++) {

            $r     = array();
            $month = date('m', strtotime($st_month . " -$i month"));
            $year  = date('Y', strtotime($st_month . " -$i month"));

            foreach ($this->staff_attendance as $att_key => $att_value) {

                $s = $this->payroll_model->count_attendance_obj($month, $year, $emp, $att_value);

                $r[$att_key] = $s;
            }

            $record['01-' . $month . '-' . $year] = $r;
        }
        return $record;
    }

    public function monthLeaves($st_month, $no_of_months, $emp)
    {
        $record = array();
        for ($i = 1; $i <= $no_of_months; $i++) {

            $r           = array();
            $month       = date('m', strtotime($st_month . " -$i month"));
            $year        = date('Y', strtotime($st_month . " -$i month"));
            $leave_count = $this->staff_model->count_leave($month, $year, $emp);
            if (!empty($leave_count["tl"])) {
                $l = $leave_count["tl"];
            } else {
                $l = "0";
            }

            $record[$month] = $l;
        }

        return $record;
    }

    public function payslip()
    {
        if (!$this->rbac->hasPrivilege('staff_payroll', 'can_add')) {
            access_denied();
        }

        $basic           = convertCurrencyFormatToBaseAmount($this->input->post("basic"));
        $total_allowance = convertCurrencyFormatToBaseAmount($this->input->post("total_allowance"));
        $total_deduction = convertCurrencyFormatToBaseAmount($this->input->post("total_deduction"));
        $net_salary      = convertCurrencyFormatToBaseAmount($this->input->post("net_salary"));
        $status          = $this->input->post("status");
        $staff_id        = $this->input->post("staff_id");
        $month           = $this->input->post("month");
        $name            = $this->input->post("name");
        $year            = $this->input->post("year");
        $tax             = convertCurrencyFormatToBaseAmount($this->input->post("tax"));
        $leave_deduction = $this->input->post("leave_deduction");
        $this->form_validation->set_rules('net_salary', $this->lang->line('net_salary'), 'trim|required|xss_clean');
        if ($this->form_validation->run() == false) {

            $this->create($month, $year, $staff_id);
        } else {

            $data = array('staff_id' => $staff_id,
                'basic'                  => $basic,
                'total_allowance'        => $total_allowance,
                'total_deduction'        => $total_deduction,
                'net_salary'             => $net_salary,
                'payment_date'           => date("Y-m-d"),
                'status'                 => $status,
                'month'                  => $month,
                'year'                   => $year,
                'tax'                    => $tax,
                'leave_deduction'        => '0',
            );

            $checkForUpdate = $this->payroll_model->checkPayslip($month, $year, $staff_id);
 
            if ($checkForUpdate == true) {

                $insert_id        = $this->payroll_model->createPayslip($data);
                $payslipid        = $insert_id;
                $allowance_type   = $this->input->post("allowance_type");
                $deduction_type   = $this->input->post("deduction_type");
                $allowance_amount = $this->input->post("allowance_amount");
                $deduction_amount = $this->input->post("deduction_amount");
                if (!empty($allowance_type)) {

                    $i = 0;
                    foreach ($allowance_type as $key => $all) {

                        $all_data = array(
                            'payslip_id'     => $payslipid,
                            'allowance_type' => $allowance_type[$i],
                            'amount'         => convertCurrencyFormatToBaseAmount($allowance_amount[$i]),
                            'staff_id'       => $staff_id,
                            'cal_type'       => "positive",
                        );

                        $insert_payslip_allowance = $this->payroll_model->add_allowance($all_data);

                        $i++;
                    }
                }

                if (!empty($deduction_type)) {
                    $j = 0;
                    foreach ($deduction_type as $key => $type) {

                        $type_data = array('payslip_id' => $payslipid,
                            'allowance_type'                => $deduction_type[$j],
                            'amount'                        => convertCurrencyFormatToBaseAmount($deduction_amount[$j]),
                            'staff_id'                      => $staff_id,
                            'cal_type'                      => "negative",
                        );

                        $insert_payslip_allowance = $this->payroll_model->add_allowance($type_data);

                        $j++;
                    }
                }

                redirect('admin/payroll');
            } else {

                $this->session->set_flashdata("msg", $this->lang->line('payslip_already_generated'));
                redirect('admin/payroll');
            }
        }
    }

    public function search($month, $year, $role = '')
    {
        $user_type              = $this->staff_model->getStaffRole();
        $data['classlist']      = $user_type;
        $data['monthlist']      = $this->customlib->getMonthDropdown();
        $searchEmployee         = $this->payroll_model->searchEmployee($month, $year, $emp_name = '', $role);
        $data["resultlist"]     = $searchEmployee;
        $data["name"]           = $emp_name;
        $data["month"]          = $month;
        $data["year"]           = $year;
        $data['sch_setting']    = $this->sch_setting_detail;
        $data["payroll_status"] = $this->payroll_status;
        $data["resultlist"]     = $searchEmployee;
        $data["payment_mode"]   = $this->payment_mode;
        $this->load->view("layout/header", $data);
        $this->load->view("admin/payroll/stafflist", $data);
        $this->load->view("layout/footer", $data);
    }

    public function paymentRecord()
    {
        $month              = $this->input->get_post("month");
        $year               = $this->input->get_post("year");
        $id                 = $this->input->get_post("staffid");
        $searchEmployee     = $this->payroll_model->searchPayment($id, $month, $year);
        $data['result']     = $searchEmployee;
        $data['net_salary'] = amountFormat($searchEmployee['net_salary']);
          $data['monthlist']           = $this->customlib->getMonthDropdown();

        $data["month"]      = $data['monthlist'][$month];

           


        $data["year"]       = $year;
        echo json_encode($data);
    }

    public function paymentStatus($status)
    {
        $id          = $this->input->get('id');
        $updateStaus = $this->payroll_model->updatePaymentStatus($status, $id);
        redirect("admin/payroll");
    }

    public function paymentSuccess()
    {
        $bank_ac        = $this->input->post("cr_ledger");
        $dr_ledger        = $this->input->post("dr_ledger");
        $transaction_id = $this->input->post("transaction_id");
        
        if (!empty($bank_ac)) {
            $bankInfo = $this->staff_model->all_bank_and_cash_account($bank_ac);
            $bank_ac    = $bank_ac;
            $bank_name  = $bankInfo->name;
        } else {
            $bank_ac    = null;
            $bank_name  = null;
        }
        
        if (empty($transaction_id)) {
            $transaction_id = null;
        }
        
        $payment_mode = $this->input->post("payment_mode");
        $date         = $this->input->post("payment_date");
        $payment_date = date('Y-m-d', strtotime($date));
        $remark       = $this->input->post("remarks");
        $status       = 'paid';
        $payslipid    = $this->input->post("paymentid");
        $this->form_validation->set_rules('payment_mode', $this->lang->line('payment_mode'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('payment_date', $this->lang->line('payment_date'), 'trim|required|xss_clean');
        
        $psinfo = $this->db->query("SELECT * FROM staff_payslip WHERE id = '".$payslipid."' ")->row();
        
        if ($this->form_validation->run() == false) {

            $msg = array(
                'payment_mode' => form_error('payment_mode'),
                'payment_date' => form_error('payment_date'),
            );
            $array = array('status' => 'fail', 'error' => $msg, 'message' => '');
        } else {

            $data = array('payment_mode' => $payment_mode, 'payment_date' => $this->customlib->dateFormatToYYYYMMDD($date), 'remark' => $remark, 'status' => $status, 'bank_name' => $bank_name, 'linked_ledger_bank' => $bank_ac, 'transaction_id	' => $transaction_id);
            $this->payroll_model->paymentSuccess($data, $payslipid);
            
            addSalaryPayment($date, $psinfo->net_salary, $remark, $dr_ledger, $bank_ac);
            
            $array = array('status' => 'success', 'error' => '', 'message' => $this->lang->line('success_message'));
        }
        echo json_encode($array);
    }
    
    public function bulkPaymentSuccess()
    {
        $bank_ac        = $this->input->post("cr_ledger");
        $dr_ledger        = $this->input->post("dr_ledger");
        $transaction_id = $this->input->post("transaction_id");
        
        if (!empty($bank_ac)) {
            $bankInfo = $this->staff_model->all_bank_and_cash_account($bank_ac);
            $bank_ac    = $bank_ac;
            $bank_name  = $bankInfo->name;
        } else {
            $bank_ac    = null;
            $bank_name  = null;
        }
        
        if (empty($transaction_id)) {
            $transaction_id = null;
        }
        $payment_mode = $this->input->post("payment_mode");
        $date         = $this->input->post("payment_date");
        $payment_date = date('Y-m-d', strtotime($date));
        $remark       = $this->input->post("remarks");
        $status       = 'paid';
        $payslipid    = $this->input->post("paymentid");
        $make_finance_entries    = $this->input->post("make_finance_entries");
        
        $salaryChecked = $this->input->post("salaryChecked", TRUE);
        
        foreach ($salaryChecked as $key => $salaryChk) {
            
            $psinfo = $this->db->query("SELECT * FROM staff_payslip WHERE id = '".$salaryChk."' ")->row();
            
            $data = array('payment_mode' => $payment_mode, 'payment_date' => $this->customlib->dateFormatToYYYYMMDD($date), 'remark' => $remark, 'status' => $status, 'bank_name' => $bank_name, 'linked_ledger_bank' => $bank_ac, 'transaction_id	' => $transaction_id);
            $this->payroll_model->paymentSuccess($data, $salaryChk);

            if (!empty($make_finance_entries)) {
                addSalaryPayment($date, $psinfo->net_salary, $remark, $dr_ledger, $bank_ac);
            }

            $array = array('status' => 'success', 'error' => '', 'message' => $this->lang->line('success_message'));
        }
        
        echo json_encode($array);
    }

    public function payslipView()
    {
        $data["payment_mode"] = $this->payment_mode;
        $this->load->model("setting_model");
        $setting_result      = $this->setting_model->get();
        $data['settinglist'] = $setting_result[0];
        $id                  = $this->input->post("payslipid");
        $result              = $this->payroll_model->getPayslip($id);
        $data['sch_setting'] = $this->sch_setting_detail;

        $data['staffid_auto_insert'] = $this->sch_setting_detail->staffid_auto_insert;
        if (!empty($result)) {
            $allowance                  = $this->payroll_model->getAllowance($result["id"]);
            $data["allowance"]          = $allowance;
            $positive_allowance         = $this->payroll_model->getAllowance($result["id"], "positive");
            $data["positive_allowance"] = $positive_allowance;
            $negative_allowance         = $this->payroll_model->getAllowance($result["id"], "negative");
            $data["negative_allowance"] = $negative_allowance;
            $data["result"]             = $result;
            $this->load->view("admin/payroll/payslipview", $data);
        } else {
            echo "<div class='alert alert-info'>" . $this->lang->line('no_record_found') . "</div>";
        }
    }

    public function payslippdf()
    {
        $this->load->model("setting_model");
        $setting_result             = $this->setting_model->get();
        $data['settinglist']        = $setting_result[0];
        $id                         = 15;
        $result                     = $this->payroll_model->getPayslip($id);
        $allowance                  = $this->payroll_model->getAllowance($result["id"]);
        $data["allowance"]          = $allowance;
        $positive_allowance         = $this->payroll_model->getAllowance($result["id"], "positive");
        $data["positive_allowance"] = $positive_allowance;
        $negative_allowance         = $this->payroll_model->getAllowance($result["id"], "negative");
        $data["negative_allowance"] = $negative_allowance;
        $data["result"]             = $result;
        $this->load->view("admin/payroll/payslippdf", $data);
    }

    public function payrollreport()
    {
        if (!$this->rbac->hasPrivilege('payroll_report', 'can_view')) {
            access_denied();
        }
        $this->session->set_userdata('top_menu', 'Reports');
        $this->session->set_userdata('sub_menu', 'Reports/human_resource');
        $this->session->set_userdata('subsub_menu', 'Reports/attendance/attendance_report');
        $month                = $this->input->post("month");
        $year                 = $this->input->post("year");
        $role                 = $this->input->post("role");
        $data["month"]        = $month;
        $data["year"]         = $year;
        $data["role_select"]  = $role;
        $data['monthlist']    = $this->customlib->getMonthDropdown();
        $data['yearlist']     = $this->payroll_model->payrollYearCount();
        $staffRole            = $this->staff_model->getStaffRole();
        $data["role"]         = $staffRole;
        $data["payment_mode"] = $this->payment_mode;

        $this->form_validation->set_rules('year', $this->lang->line('year'), 'trim|required|xss_clean');
        if ($this->form_validation->run() == false) {

            $this->load->view("layout/header", $data);
            $this->load->view("admin/payroll/payrollreport", $data);
            $this->load->view("layout/footer", $data);
        } else {

            $result = $this->payroll_model->getpayrollReport($month, $year, $role);

            $data["result"] = $result;
            $this->load->view("layout/header", $data);
            $this->load->view("admin/payroll/payrollreport", $data);
            $this->load->view("layout/footer", $data);
        }
    }

    public function deletepayroll($payslipid, $month, $year, $role = '')
    {
        if (!$this->rbac->hasPrivilege('staff_payroll', 'can_delete')) {
            access_denied();
        }
        if (!empty($payslipid)) {
            $this->payroll_model->deletePayslip($payslipid);
        }

        redirect('admin/payroll/search/' . $month . "/" . $year . "/" . $role);
    }

    public function revertpayroll($payslipid, $month, $year, $role = '')
    {
        if (!$this->rbac->hasPrivilege('staff_payroll', 'can_delete')) {
            access_denied();
        }
        if (!empty($payslipid)) {
            $this->payroll_model->revertPayslipStatus($payslipid);
        }
        redirect('admin/payroll/search/' . $month . "/" . $year . "/" . $role);

    }

}
