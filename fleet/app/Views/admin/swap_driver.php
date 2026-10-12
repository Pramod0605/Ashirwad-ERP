    <div class="mg-top-90">
    </div>
    
    <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_swapping'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <select class="form-control" name="vehicle_id" required>
                        <option value="">Select Vehicle...</option>
                        <?php foreach ($all_vehicles_info as $vehicle) { ?>
                            <option value="<?= $vehicle->id ?>"><?= $vehicle->vehicle_no.' - '.$vehicle->driver_name; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <br>
                    <select class="form-control" name="swap_with" required>
                        <option value="">Select Driver...</option>
                        <?php foreach ($all_drivers_info as $driver) { ?>
                            <option value="<?= $driver->driver_contact ?>"><?= $driver->vehicle_no.' - '.$driver->driver_name; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <br>
                    <input type="date" name="swap_till" class="form-control" value="" placeholder="Swap Till">
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
            url: "<?php echo base_url(); ?>admin/staff/save_swapping",
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