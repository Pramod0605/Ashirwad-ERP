        <div class="row pt-4 mg-top-90"></div>
        
        <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/approve_leave" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-check-circle" aria-hidden="true"></i><br>Approve Leave</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/student_attendance" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Attendance</a>
            </div>
        </div>
        
    <form name="myForm" id="myForm" action="<?= base_url('admin/staff/attendance_report'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4">
            <div class="col-6 text-center">
                <input type="date" class="form-control" name="fdate" value="<?= $fdate; ?>" placeholder="From">
            </div>
            <div class="col-6 text-center">
                <button type="submit" id="submit" class="btn btn-primary w-100" style="width:100%; height: 37px;">Submit</button>
            </div>
        </div>
    </form>
        
      
        <?php 
        
        $date = $fdate;
        $db = db_connect();
        foreach ($all_student_info as $stu) {  
        
        $aInfo = $db->query("SELECT * FROM student_attendences WHERE student_session_id  = '".$stu->ssid."' AND date = '".$date."' ")->getRow()
                  
        ?>
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <input type="hidden" name="student_id[]" class="form-control" value="<?= $stu->ssid; ?>"><?= $stu->admission_no.' - '.$stu->firstname.' '.$stu->lastname; ?><hr>
                    
                        <div class="form-check" style="display: inline-block !important">
                            <input class="form-check-input" type="radio" name="status<?= $stu->ssid ?>" id="pstatus<?= $stu->ssid ?>" value="1" <?php if (!empty($aInfo->attendence_type_id) && $aInfo->attendence_type_id == 1) { echo 'checked'; } ?> checked>
                            <label class="form-check-label" for="pstatus<?= $stu->ssid ?>">&ensp;Present&ensp;</label>
                        </div>
                        <div class="form-check" style="display: inline-block !important">
                            <input class="form-check-input" type="radio" name="status<?= $stu->ssid ?>" id="lstatus<?= $stu->ssid ?>" value="3" <?php if (!empty($aInfo->attendence_type_id) && $aInfo->attendence_type_id == 3) { echo 'checked'; } ?>>
                            <label class="form-check-label" for="lstatus<?= $stu->ssid ?>">&ensp;Leave&ensp;</label>
                        </div>
                        <div class="form-check" style="display: inline-block !important">    
                            <input class="form-check-input" type="radio" name="status<?= $stu->ssid ?>" id="astatus<?= $stu->ssid ?>" value="4" <?php if (!empty($aInfo->attendence_type_id) && $aInfo->attendence_type_id == 4) { echo 'checked'; } ?>>
                            <label class="form-check-label" for="astatus<?= $stu->ssid ?>">&ensp;Absent&ensp;</label>
                        </div>
                        <div class="form-check" style="display: inline-block !important">    
                            <input class="form-check-input" type="radio" name="status<?= $stu->ssid ?>" id="hstatus<?= $stu->ssid ?>" value="6" <?php if (!empty($aInfo->attendence_type_id) && $aInfo->attendence_type_id == 6) { echo 'checked'; } ?>>
                            <label class="form-check-label" for="hstatus<?= $stu->ssid ?>">&ensp;Halfday&ensp;</label>
                        </div>
                </div>
            </div>
        </div>
        
        <?php } ?>