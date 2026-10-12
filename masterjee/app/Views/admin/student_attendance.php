        <div class="row pt-4 mg-top-90"></div>
        
        <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/approve_leave" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-check-circle" aria-hidden="true"></i><br>Approve Leave</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/attendance_report" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-list" aria-hidden="true"></i><br>Attendance Report</a>
            </div>
        </div>
        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_student_attendance'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <?php 
        
        $date = date("Y-m-d");
        $db = db_connect();
        foreach ($all_student_info as $stu) {  
        
        $aInfo = $db->query("SELECT * FROM student_attendences WHERE student_session_id  = '".$stu->ssid."' AND date = '".$date."' ")->getRow()
                  
        ?>
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <input type="hidden" name="student_id[]" class="form-control" value="<?= $stu->ssid; ?>"><?= $stu->roll_no.' - '.$stu->firstname.' '.$stu->lastname; ?><hr>
                    
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
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header">
                    <input type="date" id="adate" name="adate" class="form-control w-100" style="width:100%" value="<?= date('Y-m-d'); ?>">
                </div>
            </div>
        </div>
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header">
                    <button type="submit" id="submit" class="btn-large btn-primary w-100" style="width:100%">Submit</button>
                </div>
            </div>
        </div>
      
                    
        </form>


      <div class="alert alert-primary alert-dismissible fade" role="alert" id="success_alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <span id="success_message"></span>
      </div>

      <div class="alert alert-danger alert-dismissible fade" role="alert" id="error_alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <span id="error_message"></span>
      </div>

<script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
    event.preventDefault();
    var formval = $('#myForm')[0];
    var data = new FormData(formval);
    $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: "<?php echo base_url(); ?>admin/staff/save_student_attendance",
        dataType: 'json',
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function(response) {
            if (response.status == 'success') {
                $('#success_message').html(response.message);
                $('#success_alert').addClass('show');
                window.setTimeout(function() {location.reload();}, 3000);
            } else {
                $('#error_message').html(response.message);
                $('#error_alert').addClass('show');
                window.setTimeout(function() {location.reload();}, 3000);
            }
        }
    });
});
});
</script>