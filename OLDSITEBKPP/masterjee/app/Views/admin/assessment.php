        <div class="row pt-4 mg-top-90">
        </div>
        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_student_assessment'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        
        
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <select class="form-control" name="batch_id">
                        <option value="">Exam type</option>
                        <?php foreach ($all_exam_group_batch as $batches) { ?>
                            <option value="<?= $batches->id; ?>"><?= $batches->exam; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <br>
                    <select class="form-control" name="subject_id">
                        <option value="">Subject</option>
                        <?php foreach ($all_subjects as $subjects) { ?>
                            <option value="<?= $subjects->id; ?>"><?= $subjects->name; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <hr>
        
        <?php 
        
        $date = date("Y-m-d");
        $db = db_connect();
        foreach ($all_student_info as $stu) { 
                  
        ?>
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <input type="hidden" name="student_id[]" class="form-control" value="<?= $stu->student_id; ?>"><?= $stu->admission_no.' - '.$stu->firstname.' '.$stu->lastname; ?><hr>
                    
                        <div class="form-check" style="display: inline-block !important">
                            <input class="form-check-input" type="radio" name="status<?= $stu->student_id ?>" id="pstatus<?= $stu->student_id ?>" value="present">
                            <label class="form-check-label" for="pstatus<?= $stu->student_id ?>">&ensp;Present&ensp;</label>
                        </div>
                        <hr>
                       <input type="number" name="score[]" class="form-control" value="" placeholder="Score">
                       <hr>
                       <input type="text" name="note[]" class="form-control" value="" placeholder="Note">
                </div>
            </div>
        </div>
        
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
        url: "<?php echo base_url(); ?>admin/staff/save_student_assessment",
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