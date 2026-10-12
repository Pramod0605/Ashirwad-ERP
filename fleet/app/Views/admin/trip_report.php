<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script type="text/javascript"
   src="https://maps.google.com/maps/api/js?key=&sensor=false&v=3.21.5a&libraries=drawing&signed_in=true&libraries=places,drawing"></script>

        <div class="row pt-4" style="margin-top: 50px;">
        </div>
        
        <form name="myForm" id="myForm" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <input type="date" class="form-control" name="fromdate" id="fromdate" value="<?= $fdate; ?>">
                    <br>
                    <br>
                    <input type="date" class="form-control" name="todate" id="todate" value="<?= $tdate; ?>">
                    <br>
                    <br>
                    <select class="form-control" name="t_vechicle" id="t_vechicle">
                        <option value="">Select Vehicle...</option>
                        <?php foreach ($all_vehicles_info as $vehicle) { ?>
                            <option value="<?= $vehicle->id ?>" <?php if (!empty($vehicle_id)) { echo 'selected'; } ?>><?= $vehicle->vehicle_no.' - '.$vehicle->driver_name; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <br>
                    <button type="submit" id="submit" class="btn-large btn-primary w-100" style="width:100%">Submit</button>
                </div>
            </div>
        </div>
        <input type="hidden" name="base" id="base" class="form-control" value="<?= base_url(); ?>">
        </form>
         <hr>
        
        <?php  if (!empty($flag) && !empty($vehicle_id)) { ?>
            <script type="text/javascript" src="https://www.google.com/jsapi"></script>
		    <script src="<?php echo base_url(); ?>public/style/map.js"></script>
		    <script src="<?php echo base_url(); ?>public/style/custom.js"></script>
		    <script src="<?php echo base_url(); ?>public/style/distance_calculator.js"></script>
            
			<div class="col-lg-12 col-md-12" id="map_canvas" style="width: 100%; height: 475px"></div>
        <?php } ?>
<script>
   $('table').dataTable({searching: false, paging: false, info: false, ordering: false,});
</script>