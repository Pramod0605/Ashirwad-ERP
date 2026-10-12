        <div class="row pt-4 mg-top-90">
        </div>
        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_student_attendance'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <?php 
        
        $date = date("Y-m-d");
        $db = db_connect();
        foreach ($all_routes_info as $route) {  ?>
        
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-primary text-center">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;<?= $route->route_title; ?>
                    <hr>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        
        <?php
        
        $all_students = $StaffModel->all_student_info_route($route->id, site_info()['active_session']);
        
        foreach ($all_students as $stu) {
                  
        ?>
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <input type="hidden" name="route_id[]" class="form-control" value="<?= $route->route_id; ?>">
                    <input type="hidden" name="student_id[]" class="form-control" value="<?= $stu->student_id; ?>"><?= $stu->admission_no.' - '.$stu->firstname.' '.$stu->lastname; ?><hr>
                    
                        <div class="form-check" style="display: inline-block !important">
                            <input class="form-check-input" type="radio" name="status<?= $stu->student_id ?>" id="pstatus<?= $stu->student_id ?>" value="1" <?php if (!empty($aInfo->attendence_type_id) && $aInfo->attendence_type_id == 1) { echo 'checked'; } ?>>
                            <label class="form-check-label" for="pstatus<?= $stu->student_id ?>">&ensp;Present&ensp;</label>
                        </div>
                        <div class="form-check" style="display: inline-block !important">    
                            <input class="form-check-input" type="radio" name="status<?= $stu->student_id ?>" id="astatus<?= $stu->student_id ?>" value="4" <?php if (!empty($aInfo->attendence_type_id) && $aInfo->attendence_type_id == 4) { echo 'checked'; } ?>>
                            <label class="form-check-label" for="astatus<?= $stu->student_id ?>">&ensp;Absent&ensp;</label>
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