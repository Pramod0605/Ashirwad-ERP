    <div class="mg-top-90">
    </div>
    
    <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_vehicle_rto'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <select class="form-control" name="vehicle_id" required onchange="reportFilterFunction(this.value)">
                        <option value="">Select Vehicle...</option>
                        <?php foreach ($all_vehicles_info as $vehicle) { ?>
                            <option value="<?= $vehicle->id ?>" <?php if (!empty($vid)) { echo 'selected' ; } ?>><?= $vehicle->vehicle_no.' - '.$vehicle->driver_name; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <br>
                    <p>Permit Number</p>
                    <input type="text" name="permit_number" class="form-control" value="<?php if (!empty($vRiInfo)) { echo $vRiInfo->permit_number; } ?>" placeholder="Permit Number">
                    <br>
                    <br>
                    <p>Permit Upto</p>
                    <input type="date" name="permit_upto" class="form-control" value="<?php if (!empty($vRiInfo)) { echo $vRiInfo->permit_upto; } ?>" >
                    <br>
                    <br>
                    <p>Fitness Upto</p>
                    <input type="date" name="fitness_upto" class="form-control" value="<?php if (!empty($vRiInfo)) { echo $vRiInfo->fitness_upto; } ?>" >
                    <br>
                    <br>
                    <p>Road Tax Upto</p>
                    <input type="date" name="road_tax_upto" class="form-control" value="<?php if (!empty($vRiInfo)) { echo $vRiInfo->road_tax_upto; } ?>" >
                    <br>
                    <br>
                    <p>Insurance Company</p>
                    <input type="text" name="insurance_company" class="form-control" value="<?php if (!empty($vRiInfo)) { echo $vRiInfo->insurance_company; } ?>" placeholder="Insurance Company">
                    <br>
                    <br>
                    <p>Insurance Upto</p>
                    <input type="date" name="insurance_upto" class="form-control" value="<?php if (!empty($vRiInfo)) { echo $vRiInfo->insurance_upto; } ?>" >
                    <br>
                    <br>
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
            url: "<?php echo base_url(); ?>admin/staff/save_vehicle_rto",
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
<script>
    function reportFilterFunction(val) {
        var id  = val;
        window.location.href = "<?= base_url() ?>admin/staff/vehicle_rto/"+id ;
    }
</script>