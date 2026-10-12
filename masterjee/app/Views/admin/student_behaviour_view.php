<div class="balance-area mg-top-90"></div>
        
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/student_behaviour" class="btn btn-sm w-100 category" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Behaviour</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/student_behaviour_incidents" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Incident Report</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/student_behaviour_ranks" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Behaviour Rank</a>
            </div>
    </div>
    
    <?php 
        
        foreach ($incidentInfo as $ii) { 
            $stuInCInfo = $StaffModel->student_incident_comments_info($ii->iid);     
            $stfInCInfo = $StaffModel->staff_incident_comments_info($ii->iid);     
        ?>
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    
                    <span class="float-left text-sm"><strong><?= $ii->title; ?></strong></span>
                    <span class="float-right text-sm" style="float: right;"><strong>Point : <?= $ii->point; ?></strong></span>
                    <hr>
                    <span class="float-left text-sm" style="font-size:11px !important"><span class="badge" style="background-color: #313131;"><?= date("Y-m-d", strtotime($ii->idate)).' | '.$ii->employee_id.' - '.$ii->name; ?></span></span><br>
                    <span class="float-left text-sm"><p style="padding-right: 15%; text-align:justify"><?= $ii->description; ?></p></span>
                    <br>
                    <?php foreach ($stuInCInfo as $stuici) { ?>
                        <span class="float-right text-sm" style="float: right;font-size:11px !important"><span class="badge" style="background-color: #7e7979;"><?= date("Y-m-d", strtotime($stuici->created_date)) .' | '.$studentInfo->admission_no.' - '.$studentInfo->firstname; ?></span></span><br>
                        <span class="float-right text-sm" style="text-align:justify"><p style="padding-left: 15%;"><?= $stuici->comment; ?></p></span>
                    <?php } ?>
                     <br>
                    <?php foreach ($stfInCInfo as $stfici) { ?>
                        <span class="float-left text-sm" style="float: left;font-size:11px !important"><span class="badge" style="background-color: #313131;"><?= date("Y-m-d", strtotime($stfici->created_date)) .' | '.$stfici->employee_id.' - '.$stfici->name; ?></span></span><br>
                        <span class="float-left text-sm" style="text-align:justify"><p style="padding-right: 15%;"><?= $stfici->comment; ?></p></span>
                    <?php } ?>
                    <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_incident_comment'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
                        <input type="hidden" name="incident_id" class="form-control" value="<?= $ii->iid; ?>">
                        <textarea name="comment" class="form-control" placeholder="write comment here"></textarea>
                        <br>
                        <button type="submit" id="submit" class="btn-large btn-primary w-100" style="width:100%">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        
        <?php } ?>

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
        url: "<?php echo base_url(); ?>admin/staff/save_incident_comment",
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
                window.setTimeout(function() {location.reload();}, 1000);
            } else {
                $('#error_message').html(response.message);
                $('#error_alert').addClass('show');
                window.setTimeout(function() {location.reload();}, 1000);
            }
        }
    });
});
});
</script>