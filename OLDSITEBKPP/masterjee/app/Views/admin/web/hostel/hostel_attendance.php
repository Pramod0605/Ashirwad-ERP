        <div class="row pt-4 mg-top-90"></div>
        
        <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/hostel" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-check-circle" aria-hidden="true"></i><br>Hostel</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/hostel_attendance_report" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-list" aria-hidden="true"></i><br>Attendance Report</a>
            </div>
        </div>
        
    <form name="myForm" id="myForm" action="<?= base_url('admin/web/hostel_attendance'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4" style="margin:0.1rem">
            <div class="col-6 text-center">
                <input type="date" class="form-control" name="fdate" value="<?= $fdate; ?>" placeholder="From">
            </div>
            <div class="col-6 text-center">
                <select name="hid" class="form-control" style="width: 100%">
                            <option value="">Hostel..</option>
                            <?php foreach ($hostels as $hostel) { ?>
                            <option value="<?= $hostel->hid; ?>" <?php if ($hostel->hid == $hid) { echo 'selected'; } ?>><?= $hostel->hostel_name; ?></option>
                            <?php } ?>
                        </select>
            </div>
            <br>
            <div class="col-12 text-center">
                <br>
                <button type="submit" class="btn btn-primary w-100" style="width:100%; height: 37px;">Submit</button>
            </div>
        </div>
    </form>
 <?php if (!empty($flag)) { ?>
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_student_hostel_attendance'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <?php 
        
        $date = $fdate;
        $db = db_connect();
        foreach ($students as $stu) {  
        
        $aInfo = $db->query("SELECT * FROM student_attendences_hostel WHERE student_session_id  = '".$stu->ssid."' AND date = '".$date."' ")->getRow()
                  
        ?>
        <input type="hidden" name="date" class="form-control" value="<?= $fdate; ?>">
        <input type="hidden" name="hostel_id" class="form-control" value="<?= $hid; ?>">
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <input type="hidden" name="student_id[]" class="form-control" value="<?= $stu->ssid; ?>"><?= $stu->admission_no.' - '.$stu->firstname.' '.$stu->lastname; ?><hr>
                    
                        <div class="form-check" style="display: inline-block !important">
                            <input class="form-check-input" type="radio" name="status<?= $stu->ssid ?>" id="pstatus<?= $stu->ssid ?>" value="1" <?php if (!empty($aInfo->attendence_type_id) && $aInfo->attendence_type_id == 1) { echo 'checked'; } ?> checked>
                            <label class="form-check-label" for="pstatus<?= $stu->ssid ?>">&ensp;Present&ensp;</label>
                        </div>
                        <div class="form-check" style="display: inline-block !important">    
                            <input class="form-check-input" type="radio" name="status<?= $stu->ssid ?>" id="astatus<?= $stu->ssid ?>" value="4" <?php if (!empty($aInfo->attendence_type_id) && $aInfo->attendence_type_id == 4) { echo 'checked'; } ?>>
                            <label class="form-check-label" for="astatus<?= $stu->ssid ?>">&ensp;Absent&ensp;</label>
                        </div>
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
        url: "<?php echo base_url(); ?>admin/web/save_student_hostel_attendance",
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