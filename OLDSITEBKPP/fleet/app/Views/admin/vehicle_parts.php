    <div class="mg-top-90">
    </div>
    
    <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_vehicle_parts'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
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
                    <p>Battery Number</p>
                    <input type="text" name="battery_number" class="form-control" value="<?php if (!empty($vPiInfo)) { echo $vPiInfo->battery_number; } ?>" placeholder="Battery Number">
                    <br>
                    <br>
                    <p>Battery Amp</p>
                    <input type="text" name="battery_amp" class="form-control" value="<?php if (!empty($vPiInfo)) { echo $vPiInfo->battery_amp; } ?>" placeholder="Battery Amp">
                    <br>
                    <br>
                    <p>Battery Warranty</p>
                    <input type="date" name="battery_warranty" class="form-control" value="<?php if (!empty($vPiInfo)) { echo $vPiInfo->battery_warranty; } ?>" placeholder="Battery Warranty Till">
                    <br>
                    <br>
                    <p>Tyre Number</p>
                    <input type="text" name="tyre_number" class="form-control" value="<?php if (!empty($vPiInfo)) { echo $vPiInfo->tyre_number; } ?>" placeholder="Tyre Number">
                    <br>
                    <br>
                    <p>Tyre Size</p>
                    <input type="text" name="tyre_size" class="form-control" value="<?php if (!empty($vPiInfo)) { echo $vPiInfo->tyre_size; } ?>" placeholder="Tyre Size">
                    <br>
                    <br>
                    <p>Tool Box</p>
                    <select class="form-control" name="tool_box">
                        <option value="Yes" <?php if (!empty($vPiInfo) && $vPiInfo->tool_box == 'Yes') { echo 'selected'; } ?>>Yes</option>
                        <option value="No" <?php if (!empty($vPiInfo) && $vPiInfo->tool_box == 'No') { echo 'selected'; } ?>>No</option>
                    </select>
                    <br>
                    <br>
                    <p>CCTV</p>
                    <select class="form-control" name="cctv">
                        <option value="Yes" <?php if (!empty($vPiInfo) && $vPiInfo->cctv == 'No') { echo 'selected'; } ?>>Yes</option>
                        <option value="No" <?php if (!empty($vPiInfo) && $vPiInfo->cctv == 'Yes') { echo 'selected'; } ?>>No</option>
                    </select>
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
            url: "<?php echo base_url(); ?>admin/staff/save_vehicle_parts",
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
        window.location.href = "<?= base_url() ?>admin/staff/vehicle_parts/"+id ;
    }
</script>