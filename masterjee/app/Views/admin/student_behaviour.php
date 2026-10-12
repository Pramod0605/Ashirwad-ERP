        <div class="row pt-4 mg-top-90"></div>
        
        <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/student_behaviour_incidents" class="btn btn-sm w-100 category" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Incident Report</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/student_behaviour_ranks" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Behaviour Rank</a>
            </div>
        </div>
        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_student_behaviour'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        
        
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <select class="form-control" name="student_id">
                        <option value="">Student</option>
                        <?php foreach ($all_student_info as $stu) { ?>
                            <option value="<?= $stu->student_id; ?>"><?= $stu->admission_no.' - '.$stu->firstname.' '.$stu->lastname; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                </div>
            </div>
        </div>
        <hr>
        
        <?php 
        
        foreach ($behaviour_point as $bp) { 
                  
        ?>
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    
                    <span class="float-left text-sm"><strong><?= $bp->title; ?></strong></span>
                    <span class="float-right text-sm" style="float: right;"><strong>Point : <?= $bp->point; ?></strong>&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" name="b_value[]"  value="<?= $bp->id; ?>">
                    </span>
                    <hr>
                    <span class="float-left text-sm"><?= $bp->description; ?></span>
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
        url: "<?php echo base_url(); ?>admin/staff/save_student_behaviour",
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