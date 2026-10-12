<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <div class="balance-area mg-top-90"></div>
        <div class="container rounded">
            <a href="javascript:void(0)" class="change_dv" data-toggle="modal" data-target="#change_dv">
            <img src="<?= base_url(); ?>public/style/img/other/bg.png" alt="img" class="rounded">
            </a>
        </div>
    </div>
        
        
        <div class="row pt-4">
            
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/set_geofencing" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/breakdown.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Set Fencing</p>
                </a>
            </div>
            
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/view_geofencing" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/breakdown.png" style="width:50px; height:50px;"></p>
                <p class="text-center">View Fencing</p>
                </a>
            </div>
            
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/geofencing_report" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/breakdown.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Reports</p>
                </a>
            </div>
            
        </div>


    
<form role="form" action="v_action"  id="v_action" method="post" enctype="multipart/form-data">    
<div class="modal fade" id="change_dv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align:center">Choose Vehicle</h5>
      </div>
      <div class="modal-body">
            <select class="form-control" name="v_id" id="v_id" required>
                <option value="">Select....</option>
                <?php foreach ($all_vehicles_info as $vehicle) { ?>
                <option value="<?= $vehicle->id ?>"><?= $vehicle->vehicle_no.' - '.$vehicle->driver_name; ?></option>
                <?php } ?>
            </select>
      </div>
      <div class="modal-footer">
        <button type="button" type="submit" name="btn_v_action" id="btn_v_action" class="btn btn-primary w-100 action">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>
<script type="text/javascript">
 $(document).ready(function(){
$("#btn_v_action").click(function(){
            event.preventDefault();
            var formval = $('#v_action')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/dashboard/updateDriverVehicle",
            dataType: 'json',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(response) {
            window.setTimeout(function() {location.reload();}, 100);
            }
        });
      });
    });
</script>