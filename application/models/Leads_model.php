<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Leads_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->current_session      = $this->setting_model->getCurrentSession();
        $this->current_session_name = $this->setting_model->getCurrentSessionName();
        $this->start_month          = $this->setting_model->getStartMonth();
    }
    
    public function all_campaign_type_info($id = null) {
        $this->db->select('cyc_campaign_type.*', FALSE);
        $this->db->from('cyc_campaign_type');
            if (!empty($id)) {
                $this->db->where('cyc_campaign_type.ct_id', $id);	
                $query_result = $this->db->get();
                $result = $query_result->row();
            } else {
                $this->db->where('cyc_campaign_type.ct_status', '1');	
                $query_result = $this->db->get();
                $result = $query_result->result();
            }
        return $result;
    }
    
    public function all_promoters_info($id = null) {
        $this->db->select('cyc_leads_promoters.*', FALSE);
        $this->db->from('cyc_leads_promoters');
            if (!empty($id)) {
                $this->db->where('cyc_leads_promoters.cp_id', $id);	
                $query_result = $this->db->get();
                $result = $query_result->row();
            } else {
                $this->db->where('cyc_leads_promoters.promoter_status', '1');
                $query_result = $this->db->get();
                $result = $query_result->result();
            }
        return $result;
    }
    
    public function all_sources_info() {
        $this->db->select('source.*', FALSE);
        $this->db->from('source');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function all_campaign_info($id = null) {
        $this->db->select('cyc_campaign.*', FALSE);
        $this->db->select('cyc_campaign_type.*', FALSE);
        $this->db->select('staff.*', FALSE);
        $this->db->from('cyc_campaign');
        $this->db->join('staff', 'staff.id = cyc_campaign.c_manager', 'left');
        $this->db->join('cyc_campaign_type', 'cyc_campaign_type.ct_id = cyc_campaign.ct_id', 'left');
            $query_result = $this->db->get();
            $result = $query_result->result();
        return $result;
    }
    
    public function campaign_info($id = null) {
        $this->db->select('cyc_campaign.*', FALSE);
        $this->db->select('staff.*', FALSE);
        $this->db->select('cyc_campaign_type.*', FALSE);
        $this->db->select('cyc_leads_promoters.*', FALSE);
        $this->db->from('cyc_campaign');
        $this->db->join('staff', 'staff.id = cyc_campaign.c_manager', 'left');
        $this->db->join('cyc_campaign_type', 'cyc_campaign_type.ct_id = cyc_campaign.ct_id', 'left');
        $this->db->join('cyc_leads_promoters', 'cyc_leads_promoters.cp_id = cyc_campaign.cp_id', 'left');
            if (!empty($id)) {
                $this->db->where('cyc_campaign.c_id', $id);	
                $query_result = $this->db->get();
                $result = $query_result->row();
            } else {
                $query_result = $this->db->get();
                $result = $query_result->result();
            }
        return $result;
    }
    
    public function campaign_counsellor_info($id) {
        $this->db->select('cyc_leads_counsellor.*', FALSE);
        $this->db->select('staff.*', FALSE);
        $this->db->from('cyc_leads_counsellor');
        $this->db->join('staff', 'staff.id = cyc_leads_counsellor.staff_id', 'left');
        $this->db->where('cyc_leads_counsellor.c_id', $id);	
            $query_result = $this->db->get();
            $result = $query_result->result();
        return $result;
    }
    
    public function all_counsellors_info() {
        $this->db->select('cyc_leads_counsellor.*', FALSE);
        $this->db->select('staff.*', FALSE);
        $this->db->from('cyc_leads_counsellor');
        $this->db->join('staff', 'staff.id = cyc_leads_counsellor.staff_id', 'left');
        $this->db->group_by('cyc_leads_counsellor.staff_id');	
            $query_result = $this->db->get();
            $result = $query_result->result();
        return $result;
    }
    
    public function all_followup_status_info($id = null) {
        $this->db->select('cyc_leads_followup_status.*', FALSE);
        $this->db->from('cyc_leads_followup_status');
            $query_result = $this->db->get();
            $result = $query_result->result();
        return $result;
    }
    
    public function followup_status_info($id = null) {
        $this->db->select('cyc_leads_followup_status.*', FALSE);
        $this->db->from('cyc_leads_followup_status');
            if (!empty($id)) {
                $this->db->where('cyc_leads_followup_status.fws_id', $id);	
                $query_result = $this->db->get();
                $result = $query_result->row();
            } else {
                $query_result = $this->db->get();
                $result = $query_result->result();
            }
        return $result;
    }
    
    public function all_followup_content_info($id = null) {
        $this->db->select('cyc_leads_followup_content.*', FALSE);
        $this->db->from('cyc_leads_followup_content');
            $query_result = $this->db->get();
            $result = $query_result->result();
        return $result;
    }
    
    public function followup_content_info($id = null) {
        $this->db->select('cyc_leads_followup_content.*', FALSE);
        $this->db->from('cyc_leads_followup_content');
            if (!empty($id)) {
                $this->db->where('cyc_leads_followup_content.fwc_id', $id);	
                $query_result = $this->db->get();
                $result = $query_result->row();
            } else {
                $query_result = $this->db->get();
                $result = $query_result->result();
            }
        return $result;
    }
    
    public function all_leads_info($cpid = null, $ctid = null, $cid = null, $fdate = null, $tdate = null, $lstatus = null, $llevel = null, $tby = null, $hndlr = null) {
        $this->db->select('cyc_leads.*', FALSE);
        $this->db->select('cyc_campaign.*', FALSE);
        $this->db->select('cyc_campaign_type.*', FALSE);
        $this->db->select('cyc_leads_promoters.*', FALSE);
        $this->db->select('staff.*', FALSE);
        $this->db->select('online_admissions.*', FALSE);
        $this->db->select('students.*', FALSE);
        $this->db->from('cyc_leads');
        $this->db->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads.c_id', 'left');
        $this->db->join('cyc_campaign_type', 'cyc_campaign_type.ct_id = cyc_campaign.ct_id', 'left');
        $this->db->join('cyc_leads_promoters', 'cyc_leads_promoters.cp_id = cyc_campaign.cp_id', 'left');
        $this->db->join('staff', 'staff.id = cyc_campaign.c_manager', 'left');
        $this->db->join('online_admissions', 'online_admissions.id = cyc_leads.registration_id', 'left');
        $this->db->join('students', 'students.id = cyc_leads.student_id', 'left');
        if (!empty($cpid)) {
            $this->db->where('cyc_campaign.cp_id', $cpid);	
        }
        if (!empty($ctid)) {
            $this->db->where('cyc_campaign.ct_id', $ctid);	
        }
        if (!empty($cid)) {
            $this->db->where('cyc_leads.c_id', $cid);	
        }
        if (!empty($fdate)) {
            $this->db->where('cyc_leads.l_date >=', $fdate);	
        }
        if (!empty($tdate)) {
            $this->db->where('cyc_leads.l_date <=', $tdate);	
        }
        if (!empty($lstatus)) {
            $this->db->where('cyc_leads.l_status', $lstatus);	
        }
        if (!empty($llevel)) {
            $this->db->where('cyc_leads.level', $llevel);	
        }
        if (!empty($tby)) {
            $this->db->where('cyc_leads.taken_by', $tby);	
        }
        if (!empty($hndlr)) {
            $this->db->where('cyc_leads.current_agent', $hndlr);	
        }
            $query_result = $this->db->get();
            $result = $query_result->result();
        return $result;
    }
    
    public function all_leads_by_camp_info($id) {
        $this->db->select('cyc_leads.*', FALSE);
        $this->db->select('cyc_campaign.*', FALSE);
        $this->db->select('staff.*', FALSE);
        $this->db->select('students.*', FALSE);
        $this->db->from('cyc_leads');
        $this->db->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads.c_id', 'left');
        $this->db->join('staff', 'staff.id = cyc_campaign.c_manager', 'left');
        $this->db->join('students', 'students.id = cyc_leads.student_id', 'left');
        $this->db->where('cyc_leads.c_id', $id);	
            $query_result = $this->db->get();
            $result = $query_result->result();
        return $result;
    }
    
    public function all_leads_by_promoter_info($cpid = null, $fdate = null, $tdate = null, $lstatus = null) {
        $this->db->select('cyc_leads.*', FALSE);
        $this->db->select('cyc_campaign.*', FALSE);
        $this->db->select('cyc_campaign_type.*', FALSE);
        $this->db->select('cyc_leads_promoters.*', FALSE);
        $this->db->select('staff.*', FALSE);
        $this->db->select('online_admissions.*', FALSE);
        $this->db->select('students.*', FALSE);
        $this->db->from('cyc_leads');
        $this->db->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads.c_id', 'left');
        $this->db->join('cyc_campaign_type', 'cyc_campaign_type.ct_id = cyc_campaign.ct_id', 'left');
        $this->db->join('cyc_leads_promoters', 'cyc_leads_promoters.cp_id = cyc_campaign.cp_id', 'left');
        $this->db->join('staff', 'staff.id = cyc_campaign.c_manager', 'left');
        $this->db->join('online_admissions', 'online_admissions.id = cyc_leads.registration_id', 'left');
        $this->db->join('students', 'students.id = cyc_leads.student_id', 'left');
        if (!empty($cpid)) {
            $this->db->where('cyc_campaign.cp_id', $cpid);	
        }
        if (!empty($fdate)) {
            $this->db->where('cyc_leads.l_date >=', $fdate);	
        }
        if (!empty($tdate)) {
            $this->db->where('cyc_leads.l_date <=', $tdate);	
        }
        if (!empty($lstatus)) {
            $this->db->where('cyc_leads.l_status', 'Converted');	
        }
            $query_result = $this->db->get();
            $result = $query_result->result();
        return $result;
    }
    
    public function all_followup_info($cpid = null, $ctid = null, $cid = null, $lid = null, $fdate = null, $tdate = null, $cs = null, $by = null) {
        $this->db->select('cyc_leads_followup.*', FALSE);
        $this->db->select('cyc_leads.*', FALSE);
        $this->db->select('cyc_campaign.*', FALSE);
        $this->db->select('cyc_campaign_type.*', FALSE);
        $this->db->select('cyc_leads_promoters.*', FALSE);
        $this->db->select('staff.*', FALSE);
        $this->db->select('students.*', FALSE);
        $this->db->from('cyc_leads_followup');
        $this->db->join('cyc_leads', 'cyc_leads.l_id = cyc_leads_followup.l_id', 'left');
        $this->db->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads_followup.c_id', 'left');
        $this->db->join('cyc_campaign_type', 'cyc_campaign_type.ct_id = cyc_campaign.ct_id', 'left');
        $this->db->join('cyc_leads_promoters', 'cyc_leads_promoters.cp_id = cyc_campaign.cp_id', 'left');
        $this->db->join('staff', 'staff.id = cyc_campaign.c_manager', 'left');
        $this->db->join('students', 'students.id = cyc_leads.student_id', 'left');
        if (!empty($cpid)) {
            $this->db->where('cyc_campaign.cp_id', $cpid);	
        }
        if (!empty($ctid)) {
            $this->db->where('cyc_campaign.ct_id', $ctid);	
        }
        if (!empty($cid)) {
            $this->db->where('cyc_leads_followup.c_id', $cid);	
        }
        if (!empty($lid)) {
            $this->db->where('cyc_leads_followup.l_id', $lstatus);	
        }
        if (!empty($fdate)) {
            $this->db->where('cyc_leads_followup.followup_date >=', $fdate);	
        }
        if (!empty($tdate)) {
            $this->db->where('cyc_leads_followup.followup_date <=', $tdate);	
        }
        
        if (!empty($cs)) {
            $this->db->where('cyc_leads_followup.call_status', $cs);	
        }
        
        if (!empty($by)) {
            $this->db->where('cyc_leads_followup.followup_by', $by);	
        }
        
            $query_result = $this->db->get();
            $result = $query_result->result();
        return $result;
    }
    
    public function missed_followups($cpid = null, $ctid = null, $cid = null, $lid = null, $cs = null, $by = null) {
        $this->db->select('cyc_leads_followup.*', FALSE);
        $this->db->select('cyc_leads.*', FALSE);
        $this->db->select('cyc_campaign.*', FALSE);
        $this->db->select('cyc_campaign_type.*', FALSE);
        $this->db->select('cyc_leads_promoters.*', FALSE);
        $this->db->select('staff.*', FALSE);
        $this->db->select('students.*', FALSE);
        $this->db->from('cyc_leads_followup');
    
        $this->db->join('cyc_leads', 'cyc_leads.l_id = cyc_leads_followup.l_id', 'left');
        $this->db->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads_followup.c_id', 'left');
        $this->db->join('cyc_campaign_type', 'cyc_campaign_type.ct_id = cyc_campaign.ct_id', 'left');
        $this->db->join('cyc_leads_promoters', 'cyc_leads_promoters.cp_id = cyc_campaign.cp_id', 'left');
        $this->db->join('staff', 'staff.id = cyc_campaign.c_manager', 'left');
        $this->db->join('students', 'students.id = cyc_leads.student_id', 'left');

        if (!empty($cpid)) {
            $this->db->where('cyc_campaign.cp_id', $cpid);    
        }
        if (!empty($ctid)) {
            $this->db->where('cyc_campaign.ct_id', $ctid);    
        }
        if (!empty($cid)) {
            $this->db->where('cyc_leads_followup.c_id', $cid);    
        }
        if (!empty($lid)) {
            $this->db->where('cyc_leads_followup.l_id', $lid);    
        }
        if (!empty($cs)) {
            $this->db->where('cyc_leads_followup.call_status', $cs);    
        }
        if (!empty($by)) {
            $this->db->where('cyc_leads_followup.followup_by', $by);    
        }

        $this->db->where('cyc_leads_followup.next_followup_date <', date('Y-m-d'));
        $this->db->where('cyc_leads_followup.l_id NOT IN (
            SELECT DISTINCT l_id FROM cyc_leads_followup AS sub
            WHERE sub.followup_date >= sub.next_followup_date
        )', NULL, FALSE);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function calls_initiated_info($cpid = null, $ctid = null, $cid = null, $fdate = null, $tdate = null, $lstatus = null, $llevel = null) {
        $this->db->select('cyc_campaign_time.*', FALSE);
        $this->db->select('cyc_leads.*', FALSE);
        $this->db->select('cyc_campaign.*', FALSE);
        $this->db->select('cyc_campaign_type.*', FALSE);
        $this->db->select('cyc_leads_promoters.*', FALSE);
        $this->db->select('staff.*', FALSE);
        $this->db->select('students.*', FALSE);
        $this->db->from('cyc_campaign_time');
        $this->db->join('cyc_leads', 'cyc_leads.l_id = cyc_campaign_time.l_id', 'left');
        $this->db->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads.c_id', 'left');
        $this->db->join('cyc_campaign_type', 'cyc_campaign_type.ct_id = cyc_campaign.ct_id', 'left');
        $this->db->join('cyc_leads_promoters', 'cyc_leads_promoters.cp_id = cyc_campaign.cp_id', 'left');
        $this->db->join('staff', 'staff.id = cyc_campaign.c_manager', 'left');
        $this->db->join('students', 'students.id = cyc_leads.student_id', 'left');
        if (!empty($cpid)) {
            $this->db->where('cyc_campaign.cp_id', $cpid);	
        }
        if (!empty($ctid)) {
            $this->db->where('cyc_campaign.ct_id', $ctid);	
        }
        if (!empty($cid)) {
            $this->db->where('cyc_leads.c_id', $cid);	
        }
        if (!empty($fdate)) {
            $this->db->where('cyc_leads.l_date >=', $fdate);	
        }
        if (!empty($tdate)) {
            $this->db->where('cyc_leads.l_date <=', $tdate);	
        }
        if (!empty($lstatus)) {
            $this->db->where('cyc_leads.l_status', $lstatus);	
        }
        if (!empty($llevel)) {
            $this->db->where('cyc_leads.level', $llevel);	
        }
            $this->db->where('cyc_campaign_time.l_id IS NOT NULL');	
            $this->db->where('cyc_campaign_time.tel IS NOT NULL');	
            $query_result = $this->db->get();
            $result = $query_result->result();
        return $result;
    }
    
    public function all_followup_by_camp_info($id) {
        $this->db->select('cyc_leads_followup.*', FALSE);
        $this->db->select('cyc_leads.*', FALSE);
        $this->db->select('cyc_campaign.*', FALSE);
        $this->db->select('staff.*', FALSE);
        $this->db->select('students.*', FALSE);
        $this->db->from('cyc_leads_followup');
        $this->db->join('cyc_leads', 'cyc_leads.l_id = cyc_leads_followup.l_id', 'left');
        $this->db->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads_followup.c_id', 'left');
        $this->db->join('staff', 'staff.id = cyc_campaign.c_manager', 'left');
        $this->db->join('students', 'students.id = cyc_leads.student_id', 'left');
        $this->db->where('cyc_leads_followup.c_id', $id);	
            $query_result = $this->db->get();
            $result = $query_result->result();
        return $result;
    }
    
    public function all_followup_by_lead_info($id) {
        $this->db->select('cyc_leads_followup.*', FALSE);
        $this->db->select('cyc_leads.*', FALSE);
        $this->db->select('cyc_campaign.*', FALSE);
        $this->db->select('staff.*', FALSE);
        $this->db->select('students.*', FALSE);
        $this->db->from('cyc_leads_followup');
        $this->db->join('cyc_leads', 'cyc_leads.l_id = cyc_leads_followup.l_id', 'left');
        $this->db->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads_followup.c_id', 'left');
        $this->db->join('staff', 'staff.id = cyc_campaign.c_manager', 'left');
        $this->db->join('students', 'students.id = cyc_leads.student_id', 'left');
        $this->db->where('cyc_leads_followup.l_id', $id);
        $this->db->order_by('cyc_leads_followup.next_followup_date', 'DESC');
            $query_result = $this->db->get();
            $result = $query_result->result();
        return $result;
    }
    
    public function leads_info($id) {
        $this->db->select('cyc_leads.*', FALSE);
        $this->db->select('cyc_campaign.*', FALSE);
        $this->db->select('staff.*', FALSE);
        $this->db->select('students.*', FALSE);
        $this->db->from('cyc_leads');
        $this->db->join('cyc_campaign', 'cyc_campaign.c_id = cyc_leads.c_id', 'left');
        $this->db->join('staff', 'staff.id = cyc_campaign.c_manager', 'left');
        $this->db->join('students', 'students.id = cyc_leads.student_id', 'left');
        $this->db->where('cyc_leads.l_id', $id);	
            $query_result = $this->db->get();
            $result = $query_result->row();
        return $result;
    }
    
    public function todays_follow_up($ft, $tt) {
        $this->db->select('cyc_leads_followup.*', FALSE);
        $this->db->from('cyc_leads_followup');
        $this->db->where('cyc_leads_followup.next_followup_date', date("Y-m-d"));	
        $this->db->where('cyc_leads_followup.next_followup_time >=', $ft);	
        $this->db->where('cyc_leads_followup.next_followup_time <=', $tt);	
            $query_result = $this->db->get();
            $result = $query_result->result();
        return $result;
    }

}
