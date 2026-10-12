 <div class="footer-area" id="footer">
        <div class="container">
            <div class="footer-bottom text-center">
                <ul>
                    <li>
                        <a href="<?= base_url(); ?>">
                            <img src="<?= base_url(); ?>public/style/img/icon/23.png" alt="img">
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>admin/staff/apply_leave">
                            <img src="<?= base_url(); ?>public/style/img/icon/24.png" alt="img">
                        </a>
                    </li>
                    <li>
                        <a class="ba-add-balance-btn adLeave" href="javascript:void(0);" data-toggle="modal" data-target="#adLeave">
                            <img src="<?= base_url(); ?>public/style/img/icon/27.png" alt="img">
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>admin/staff/staff_payslip">
                            <img src="<?= base_url(); ?>public/style/img/icon/25.png" alt="img">
                        </a>
                    </li>
                    <li>
                        <a class="menu-bar" href="javascript:void(0);">
                            <img src="<?= base_url(); ?>public/style/img/icon/26.png" alt="img">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php
    $db         = db_connect();
    $builder    = $db->table('staff_leave_details');
    $lType      = $builder->select('*')
                    ->select('leave_types.id as ltid')
                    ->join('leave_types', 'leave_types.id = staff_leave_details.leave_type_id', 'left')
                    ->where('staff_leave_details.staff_id', session('userid'))
                    ->get();
	$allLevType = $lType->getResult();
	
	$builder    = $db->table('staff');
    $sStaff     = $builder->select('*')
                ->select('staff.id as empid')
                ->join('staff_designation', 'staff_designation.id = staff.designation', 'left')
                ->where('staff.direct_manager', session('userid'))
                ->get();
	$subStaff   = $sStaff->getResult();
		
	?>
    <!--MODAL UPDATE-->
         <form role="form" action="apply_leave"  id="apply_leave" method="post" enctype="multipart/form-data">
            <div class="modal fade" id="adLeave" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top:25% !important">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <br />
                    <div id="show_data_value"  class="col-sm-12"></div>
                    <div class="col-12 px-4 py-4">
                        <p>Applying for</p>
                        <select class="form-control" name="leave_staff_id" required>
                            <option value="<?= session('userid'); ?>">Self</option>
                            <?php foreach ($subStaff as $subStf) { ?>
                            <option value="<?= $subStf->empid; ?>"><?= $subStf->employee_id.' - '.$subStf->name; ?></option>
                            <?php } ?>
                        </select>
                        <p>Leave Type</p>
                        <select class="form-control" name="leave_type_id" required>
                            <option value="">Select Leave Type...</option>
                            <?php foreach ($allLevType as $levType) { ?>
                            <option value="<?= $levType->leave_type_id; ?>"><?= $levType->type; ?></option>
                            <?php } ?>
                        </select>
                        <p>From Date</p>
                        <input type="date" class="form-control" name="from_date">
                        <p>To Date</p>
                        <input type="date" class="form-control" name="to_date">
                        <p>Reason</p>
                        <textarea class="form-control" name="reason" placeholder="Reason..."></textarea>
                    </div> 
                    <div class="col-12" style="margin-bottom:10px; padding: 10px;">
                        <div class="custom-control custom-radio">
                            <button type="button" type="submit" name="btn_apply_leave" id="btn_apply_leave" class="btn btn-primary w-100 action" style="background-color: #189C07;">Submit</button>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            </form>
<!--END MODAL UPDATE-->
<script type="text/javascript">
        $('#footer').on('click','.adLeave',function(){
        $('#adLeave').modal('show');
        });
</script>
<script type="text/javascript">
 $(document).ready(function(){
$("#btn_apply_leave").click(function(){
            event.preventDefault();
            var formval = $('#apply_leave')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/staff/save_leave",
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
   


</div>
<script src="<?= base_url(); ?>public/style/js/vendor.js"></script>
<script src="<?= base_url(); ?>public/style/js/main.js"></script>

</body>
</html>