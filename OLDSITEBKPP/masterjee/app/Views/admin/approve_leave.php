        <div class="row pt-4 mg-top-90">
        </div> 
        
        <div id="action">
        
        <?php 
        $date = date("Y-m-d");
        $mdate = date("Y-m-01");
        $db = db_connect();
        foreach ($all_student_info as $stu) { 
        $allLeave = $db->query("SELECT * FROM student_applyleave WHERE from_date  >= '".$mdate."' AND student_session_id = '".$stu->ssid."'  ")->getResult();
        
            if (empty($stu->image)) {
                if ($stu->gender == 'Female') {
                    $sImage = 'default_female.jpg';
                } else {
                    $sImage = 'default_male.jpg';
                }
            } else {
                $sImage = $stu->image;
            }
        
        foreach ($allLeave as $leave) {
        
        if ($leave->status == 1) {
            $status = 'Approved';
            $bColor = '#20c997';
        } elseif ($leave->status == 2) {
            $status = 'Denied';
            $bColor = '#dc3545';
        } elseif ($leave->status == 0) {
            $status = 'Pending';
            $bColor = '#ffc107';
        }
        ?>
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    
                    <span class="float-left text-sm"><strong><?= $stu->admission_no.' - '.$stu->firstname.' '.$stu->lastname; ?></strong></span>
                    <hr>
                    <span class="float-left text-sm"><strong><?= $leave->from_date ?> - <?= $leave->to_date ?></strong></span>
                    <span class="float-right text-sm text-right" style="float: right;">
                        <a href="javascript:void(0);" data-application_id="<?= $leave->id ?>" class="btn btn-primary-outline action" style="border: 1px solid; border-color: <?= $bColor; ?>"><?= $status ?></a>
                    </span>
                    <hr>
                    <span class="float-left text-sm"><?= $leave->reason; ?></span>
                </div>
            </div>
        </div>
        
        <?php } ?>
        <?php }
        
        $allLeave = '';
        foreach ($all_staff_info as $staff) { 
        $allLeave = $db->query("SELECT * FROM staff_leave_request WHERE leave_from  >= '".$mdate."' AND staff_id = '".$staff->empid."'  ")->getResult();
        
            if (empty($staff->image)) {
                if ($staff->gender == 'Female') {
                    $sImage = 'default_female.jpg';
                } else {
                    $sImage = 'default_male.jpg';
                }
            } else {
                $sImage = $staff->image;
            }
        
        foreach ($allLeave as $leave) {
        
        if ($leave->status == 'approved') {
            $status = 'Approved';
            $bColor = '#20c997';
        } elseif ($leave->status == 'disapproved') {
            $status = 'Denied';
            $bColor = '#dc3545';
        } else {
            $status = 'Pending';
            $bColor = '#ffc107';
        }
        ?>
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    
                    <span class="float-left text-sm"><strong><?= $staff->employee_id.' - '.$staff->name.' / '.$staff->designation; ?></strong></span>
                    <hr>
                    <span class="float-left text-sm"><strong><?= $leave->leave_from ?> - <?= $leave->leave_to ?></strong></span>
                    <span class="float-right text-sm text-right" style="float: right;">
                        <a href="javascript:void(0);" data-staff_application_id="<?= $leave->id ?>" class="btn btn-primary-outline staff_action" style="border: 1px solid; border-color: <?= $bColor; ?>"><?= $status ?></a>
                    </span>
                    <hr>
                    <span class="float-left text-sm"><?= $leave->employee_remark; ?></span>
                </div>
            </div>
        </div>
        
        <?php } ?>
        <?php } ?>
        
    </div> 
               

      <div class="alert alert-primary alert-dismissible fade" role="alert" id="success_alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <span id="success_message"></span>
      </div>

      <div class="alert alert-danger alert-dismissible fade" role="alert" id="error_alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <span id="error_message"></span>
      </div>

<!--MODAL UPDATE-->
         <form role="form" action="leave_action"  id="leave_action" method="post" enctype="multipart/form-data">
            <div class="modal fade" id="Modal_Leave_Action" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top:25% !important">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <br />
                    <div id="show_data_value"  class="col-sm-12"></div>
                    <div class="col-12 px-4 py-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" name="leave_action" id="leave_action_approve" class="custom-control-input custom-control-input-info custom-control-input-outline" value="1">
                            <label for="leave_action_approve" class="custom-control-label">Approve</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" name="leave_action" id="leave_action_deny" class="custom-control-input custom-control-input-danger custom-control-input-outline" value="2">
                            <label for="leave_action_deny" class="custom-control-label">Deny</label>
                        </div>
                    </div> 
                    <div class="col-12" style="margin-bottom:10px; padding: 10px;">
                        <div class="custom-control custom-radio">
                            <button type="button" type="submit" name="btn_approve" id="btn_approve" class="btn btn-primary w-100 action">Submit</button>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            </form>
<!--END MODAL UPDATE-->

<!--MODAL UPDATE-->
         <form role="form" action="staff_leave_action"  id="staff_leave_action" method="post" enctype="multipart/form-data">
            <div class="modal fade" id="Staff_Modal_Leave_Action" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top:25% !important">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <br />
                    <div id="show_staff_data_value"  class="col-sm-12"></div>
                    <div class="col-12 px-4 py-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" name="staff_leave_action" id="staff_leave_action_approve" class="custom-control-input custom-control-input-info custom-control-input-outline" value="approved">
                            <label for="staff_leave_action_approve" class="custom-control-label">Approve</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" name="staff_leave_action" id="staff_leave_action_deny" class="custom-control-input custom-control-input-danger custom-control-input-outline" value="disapproved">
                            <label for="staff_leave_action_deny" class="custom-control-label">Deny</label>
                        </div>
                    </div> 
                    <div class="col-12" style="margin-bottom:10px; padding: 10px;">
                        <div class="custom-control custom-radio">
                            <button type="button" type="submit" name="btn_staff_approve" id="btn_staff_approve" class="btn btn-primary w-100 action">Submit</button>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            </form>
<!--END MODAL UPDATE-->

<script type="text/javascript">
        $('#action').on('click','.action',function(){
        var leaveAppId = $(this).data('application_id');
        var html = '<input type="hidden" class="form-control" value="'+leaveAppId+'" id="leaveId" name="leaveId">';
                $('#show_data_value').html(html);
        $('#Modal_Leave_Action').modal('show');  
        document.getElementById('leaveId').value= leaveAppId;
        });
</script>

<script type="text/javascript">
        $('#action').on('click','.staff_action',function(){
        var staffLeaveAppId = $(this).data('staff_application_id');
        var html = '<input type="hidden" class="form-control" value="'+staffLeaveAppId+'" id="staffLeaveId" name="staffLeaveId">';
                $('#show_staff_data_value').html(html);
        $('#Staff_Modal_Leave_Action').modal('show');  
        document.getElementById('staffLeaveId').value= staffLeaveAppId;
        });
</script>

<script type="text/javascript">
$(document).ready(function(){
    $("#btn_approve").click(function(){
            event.preventDefault();
            var formval = $('#leave_action')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/staff/update_leave",
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
    $("#btn_staff_approve").click(function(){
            event.preventDefault();
            var formval = $('#staff_leave_action')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/staff/update_staff_leave",
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