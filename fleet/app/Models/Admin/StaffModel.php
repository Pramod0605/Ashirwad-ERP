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
    
	public function all_student_info($cls, $sec, $ses){
        
        $builder    = $this->db->table('student_session');
        $query      = $builder->select('*')
                    ->join('students', 'students.id = student_session.student_id', 'left')
                    ->where('student_session.class_id', $cls)
                    ->where('student_session.section_id', $sec)
                    ->where('student_session.session_id', $ses)
                    ->get();
		$result = $query->getResult();
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
                    // ->where('subject_timetable.class_id', $cls)
                    // ->where('subject_timetable.section_id', $sec)
                    ->where('subject_timetable.session_id', $ses)
                    ->where('subject_timetable.staff_id', $sid)
                    ->groupBy('subject_timetable.day')
                    ->get();
		$result = $query->getResult();
        return $result;
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
	
	public function student_behaviour_point(){
        
        $builder    = $this->db->table('student_behaviour');
        $query      = $builder->select('*')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
//============================== TRANSPORT ===================================//
    public function all_student_attendance_info($vid, $date){
        $builder    = $this->db->table('student_attendences_transport');
        $query      = $builder->select('*')
                    ->join('students', 'students.id = student_attendences_transport.student_id ', 'left')
                    ->where('student_attendences_transport.vehicle_id', $vid)
                    ->where('student_attendences_transport.date', $date)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
    
    public function all_vehicles_info(){
        
        $builder    = $this->db->table('vehicles');
        $query      = $builder->select('*')
                    ->orderBy('vehicles.vehicle_no', 'ASC')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_drivers_info(){
        
        $builder    = $this->db->table('vehicles');
        $query      = $builder->select('*')
                    ->groupBy('vehicles.driver_contact', 'ASC')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_drivers_vehicles_info($driver){
        
        $builder    = $this->db->table('vehicles');
        $query      = $builder->select('*')
                    ->where('vehicles.driver_contact', $driver)
                    ->orderBy('vehicles.vehicle_no', 'ASC')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_drivers_swapped_vehicles_info($driver){
        
        $builder    = $this->db->table('vehicles');
        $query      = $builder->select('*')
                    ->where('vehicles.swap_with', $driver)
                    ->where('vehicles.driver_contact !=', $driver)
                    ->where('vehicles.swap_status', '1')
                    ->orderBy('vehicles.vehicle_no', 'ASC')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
    public function all_vehicle_route_info($vid){
        
        $builder    = $this->db->table('vehicle_routes');
        $query      = $builder->select('*')
                    ->join('transport_route', 'transport_route.id = vehicle_routes.route_id ', 'left')
                    ->where('vehicle_routes.vehicle_id', $vid)
                    ->orderBy('vehicle_routes.route_id', 'ASC')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_vehicle_route_info_after($vid, $rid){
        
        $builder    = $this->db->table('vehicle_routes');
        $query      = $builder->select('*')
                    ->join('transport_route', 'transport_route.id = vehicle_routes.route_id ', 'left')
                    ->where('vehicle_routes.vehicle_id', $vid)
                    ->where('vehicle_routes.route_id >', $rid)
                    ->orderBy('vehicle_routes.route_id', 'ASC')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_student_info_route($route, $ses){
        
        $builder    = $this->db->table('student_session');
        $query      = $builder->select('*')
                    ->join('students', 'students.id = student_session.student_id', 'left')
                    ->where('student_session.vehroute_id', $route)
                    ->where('student_session.session_id', $ses)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_open_vehicle_ticket_info($uid){
        
        $builder    = $this->db->table('cy_vehicle_ticket');
        $query      = $builder->select('*')
                    ->join('vehicles', 'vehicles.id = cy_vehicle_ticket.vehicle_id', 'left')
                    ->where('cy_vehicle_ticket.ticket_by', $uid)
                    ->where('cy_vehicle_ticket.ticket_status !=', 'Closed')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_closed_vehicle_ticket_info($uid){
        
        $builder    = $this->db->table('cy_vehicle_ticket');
        $query      = $builder->select('*')
                    ->join('vehicles', 'vehicles.id = cy_vehicle_ticket.vehicle_id', 'left')
                    ->where('cy_vehicle_ticket.ticket_by', $uid)
                    ->where('cy_vehicle_ticket.ticket_status', 'Closed')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
    
    public function drivers_open_vehicle_ticket_info($uid){
        
        $builder    = $this->db->table('cy_vehicle_ticket');
        $query      = $builder->select('*')
                    ->join('vehicles', 'vehicles.id = cy_vehicle_ticket.vehicle_id', 'left')
                    ->where('cy_vehicle_ticket.driver_id', $uid)
                    ->where('cy_vehicle_ticket.ticket_status !=', 'Closed')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function drivers_closed_vehicle_ticket_info($uid){
        
        $builder    = $this->db->table('cy_vehicle_ticket');
        $query      = $builder->select('*')
                    ->join('vehicles', 'vehicles.id = cy_vehicle_ticket.vehicle_id', 'left')
                    ->where('cy_vehicle_ticket.driver_id', $uid)
                    ->where('cy_vehicle_ticket.ticket_status', 'Closed')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function refilled_fuel_info($fdate, $tdate){
        
        $builder    = $this->db->table('cyc_fuel_refill');
        $query      = $builder->select('*')
                    ->join('vehicles', 'vehicles.id = cyc_fuel_refill.vehicle_id', 'left')
                    ->where('cyc_fuel_refill.date >=', $fdate)
                    ->where('cyc_fuel_refill.date <=', $tdate)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function vehicled_refilled_fuel_info($vid, $fdate, $tdate){
        
        $builder    = $this->db->table('cyc_fuel_refill');
        $query      = $builder->select('*')
                    ->join('vehicles', 'vehicles.id = cyc_fuel_refill.vehicle_id', 'left')
                    ->where('cyc_fuel_refill.vehicle_id', $vid)
                    ->where('cyc_fuel_refill.date >=', $fdate)
                    ->where('cyc_fuel_refill.date <=', $tdate)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_vendors_info(){
        
        $builder    = $this->db->table('cyc_vehicle_services');
        $query      = $builder->select('*')
                    ->groupBy('cyc_vehicle_services.vendor')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_vehicle_services_info($vid, $fdate, $tdate){
        
        $builder    = $this->db->table('cyc_vehicle_services');
        $query      = $builder->select('*')
                    ->where('cyc_vehicle_services.vehicle_id', $vid)
                    ->where('cyc_vehicle_services.date >=', $fdate)
                    ->where('cyc_vehicle_services.date <=', $tdate)
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_vehicle_swapping_info($fdate, $tdate, $vid = null){
        
        $builder    = $this->db->table('vehicles');
        $query      = $builder->select('*')
                    ->where('vehicles.swap_till >=', $fdate)
                    ->where('vehicles.swap_till <=', $tdate)
                    ->when($vid, static function ($query, $vid) {
                        $query->where('vehicles.id', $vid);
                    })
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_vehicle_speed_info($fdate, $tdate, $vid = null){
        
        $builder    = $this->db->table('positions');
        $query      = $builder->select('*')
                    ->join('vehicles', 'vehicles.id = positions.v_id', 'left')
                    ->where('date(positions.time) >=', $fdate)
                    ->where('date(positions.time) <=', $tdate)
                    ->where('positions.speed >', 60)
                    ->when($vid, static function ($query, $vid) {
                        $query->where('positions.v_id >=', $vid);
                    })
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_geofences_info(){
        
        $builder    = $this->db->table('geofences');
        $query      = $builder->select('*')
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
	public function all_vehicle_geofencing_event_info($fdate, $tdate, $vid = null){
        
        $builder    = $this->db->table('geofence_events');
        $query      = $builder->select('*')
                    ->join('vehicles', 'vehicles.id = geofence_events.ge_v_id', 'left')
                    ->where('date(geofence_events.ge_timestamp) >=', $fdate)
                    ->where('date(geofence_events.ge_timestamp) <=', $tdate)
                    ->when($vid, static function ($query, $vid) {
                        $query->where('geofence_events.ge_v_id', $vid);
                    })
                    ->get();
		$result = $query->getResult();
        return $result;
	}
	
    
}