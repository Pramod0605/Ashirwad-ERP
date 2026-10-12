        <div class="row pt-4 mg-top-90">
        </div>
        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_student_period_attendance'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <?php 
        
        $date = date("Y-m-d");
        $db = db_connect();
        
        foreach ($merged_timetable_info as $mtt) {  
            $all_student_info = $StaffModel->all_student_info($mtt->class_id, $mtt->section_id, site_info()['active_session'], $mtt->subject_group_id);
            foreach ($all_student_info as $stu) {
                $aInfo = $db->query("SELECT * FROM student_subject_attendances WHERE student_session_id  = '".$stu->ssid."' AND date = '".$date."'  AND subject_timetable_id  = '".$ttid."' ")->getRow()
        ?>
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                        <input type="hidden" name="ttid" class="form-control" value="<?= $ttid; ?>">
                        <input type="hidden" name="student_id[]" class="form-control" value="<?= $stu->student_id; ?>">
                        <?= $stu->admission_no.' - '.$stu->firstname.' '.$stu->lastname; ?><hr>
                    
                        <div class="form-check" style="display: inline-block !important">
                            <input class="form-check-input" type="radio" name="status<?= $stu->student_id ?>" id="pstatus<?= $stu->student_id ?>" value="1" <?php if (!empty($aInfo->attendence_type_id) && $aInfo->attendence_type_id == 1) { echo 'checked'; } ?> checked>
                            <label class="form-check-label" for="pstatus<?= $stu->student_id ?>">&ensp;Present&ensp;</label>
                        </div>
                        <div class="form-check" style="display: inline-block !important">
                            <input class="form-check-input" type="radio" name="status<?= $stu->student_id ?>" id="lstatus<?= $stu->student_id ?>" value="3" <?php if (!empty($aInfo->attendence_type_id) && $aInfo->attendence_type_id == 3) { echo 'checked'; } ?>>
                            <label class="form-check-label" for="lstatus<?= $stu->student_id ?>">&ensp;Leave&ensp;</label>
                        </div>
                        <div class="form-check" style="display: inline-block !important">    
                            <input class="form-check-input" type="radio" name="status<?= $stu->student_id ?>" id="astatus<?= $stu->student_id ?>" value="4" <?php if (!empty($aInfo->attendence_type_id) && $aInfo->attendence_type_id == 4) { echo 'checked'; } ?>>
                            <label class="form-check-label" for="astatus<?= $stu->student_id ?>">&ensp;Absent&ensp;</label>
                        </div>
                        <div class="form-check" style="display: inline-block !important">    
                            <input class="form-check-input" type="radio" name="status<?= $stu->student_id ?>" id="hstatus<?= $stu->student_id ?>" value="6" <?php if (!empty($aInfo->attendence_type_id) && $aInfo->attendence_type_id == 6) { echo 'checked'; } ?>>
                            <label class="form-check-label" for="hstatus<?= $stu->student_id ?>">&ensp;Halfday&ensp;</label>
                        </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
        
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
        url: "<?php echo base_url(); ?>admin/staff/save_student_period_attendance",
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

