<div class="row pt-4 mg-top-90"></div>
        <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/exam" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Exam</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/assessment" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Assessment</a>
            </div>
        </div>
        <form name="myForm" id="myForm" action="<?= base_url('admin/web/save_exam_score'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <input type="hidden" name="cbse_exam_timetable_id" class="form-control" value="<?= $exmTtInfo->tid; ?>">
        <hr>
        
        
        <div class="row" style="padding-left: 10px; padding-right: 10px;">
            <?php 
        
            $date = date("Y-m-d");
            $db = db_connect();
            foreach ($allStudents as $stu) { 
                  
            ?>
            <input type="hidden" name="student_id[]" class="form-control" value="<?= $stu->student_id; ?>">
            <input type="hidden" name="exam_student_id[]" class="form-control" value="<?= $stu->esid; ?>">
            <div class="col-6 text-center">
                <input type="text" name="student[]" class="form-control" value="<?= $stu->admission_no.' - '.$stu->firstname.' '.$stu->lastname; ?>" readonly>
            </div>
            <div class="col-6 text-center">
                <input type="text" name="notes[]" class="form-control" value="" placeholder="Notes">
            </div>
            <?php foreach ($exmTaInfo as $at) {
            
            $sScoreInfo                = $db->query("SELECT * FROM cbse_student_subject_marks WHERE  cbse_exam_timetable_assessment_type_id = '".$at->atid."' AND cbse_exam_timetable_id = '".$exmTtInfo->tid."' AND cbse_exam_student_id = '".$stu->esid."' AND cbse_exam_assessment_type_id = '".$at->aid."' ")->getRow();
            
            ?>
            <div class="col-12 text-center">
                <label>&nbsp;</label>
                <input type="hidden" name="tatid<?= $stu->esid; ?>" class="form-control" value="<?= $at->atid; ?>">
                <input type="hidden" name="eatid<?= $stu->esid; ?>" class="form-control" value="<?= $at->aid; ?>">
                <input type="number" class="form-control" name="eascore<?= $stu->esid; ?>" placeholder="<?= $at->name.' - Max score : '.$at->maximum_marks; ?>" value="<?php if (!empty($sScoreInfo->marks)) { echo $sScoreInfo->marks; } ?>">
            </div>
            <?php } echo '<hr><hr>'; } ?>
            
            <div class="col-12 text-center py-2">
                <button type="submit" id="submit" class="btn btn-primary w-100" style="width:100%; height: 37px;">Submit</button>
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
        url: "<?php echo base_url(); ?>admin/web/save_exam_score",
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