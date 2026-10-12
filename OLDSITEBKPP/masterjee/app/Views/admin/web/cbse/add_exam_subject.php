<div class="balance-area mg-top-90"></div>

    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/exam" class="btn btn-sm w-100 exam" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><br>Exam</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/exam_schedule" class="btn btn-sm w-100 exam" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><br>Schedule</a>
            </div>
    </div>
  
    <form role="form" action="<?= base_url(); ?>admin/web/save_exam_subject"  id="add_assess" method="post" enctype="multipart/form-data">
        <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
                    
                    <input type="hidden" name="exam_id" class="form-control" value="" placeholder="<?= $id; ?>">
                    <div class="col-12 px-1 py-2">
                        <select name="subject_id" class="form-control">
                            <option value="">Select...</option>
                            <?php foreach ($subjects as $subject) { ?>
                            <option value="<?= $subject->id; ?>"><?= $subject->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div id="type" style="padding-left:0px; padding-right:0px">
                        <div class="col-12 px-1 py-2">
                            <input type="date" name="exam_date" class="form-control" value="" placeholder="Date" style="width:49%; display:unset">&nbsp;
                            <input type="time" name="exam_time" class="form-control" value="" placeholder="Time" style="width:49%; display:unset">
                        </div>
                        <div class="col-12 px-1 py-2">
                            <input type="number" name="duration" class="form-control" value="" placeholder="Duration" style="width:49%; display:unset">&nbsp;
                            <input type="number" name="room_number" class="form-control" value="" placeholder="Room" style="width:49%; display:unset">
                        </div>
                    </div>
                    
                    <?php 
                    $assessments = $StaffModel->all_cbse_assessment_info_by_aid($id);
                    foreach ($assessments as $assessment) { ?>
                        <div class="col-6 px-1 py-2">
                            <input class="" type="checkbox" name="assess_id[]" value="<?= $assessment->id; ?>" style="width:49%; display:unset">&nbsp;
                            <span style="width:49%; display:unset"><?= $assessment->name; ?></span>
                        </div>
                    
                    
                    
                    <?php } ?>
                    
                    
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_assess" id="btn_save_assess" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
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
$("#btn_save_assess").click(function(){
            event.preventDefault();
            var formval = $('#add_assess')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_exam_subject",
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
                window.setTimeout(function() {location.reload();}, 2000);
            } else {
                $('#error_message').html(response.message);
                $('#error_alert').addClass('show');
                window.setTimeout(function() {location.reload();}, 2000);
            }
        }
        });
      });
    });
</script>