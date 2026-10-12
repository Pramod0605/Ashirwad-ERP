<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

        <div class="row pt-4" style="margin-top: 50px;">
        </div>
        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/geofencing_report'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <input type="date" class="form-control" name="fdate" value="<?= $fdate; ?>">
                    <br>
                    <br>
                    <input type="date" class="form-control" name="tdate" value="<?= $tdate; ?>">
                    <br>
                    <br>
                    <select class="form-control" name="vehicle_id">
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
        </form>
         <hr>
        <?php  if (!empty($flag) && empty($vehicle_id)) { ?>
        
        <table id="example" class="display stripe compact " style="width:100%; text-align:left !important; padding:5px">
            <thead>
                <tr>
                    <th style="width:50% text-align:center">Vehicle</th>
                    <th style="width:50% text-align:center">Geo Crossed</th>
                </tr>
            </thead>
            <tbody id="action">
                <?php 
                    $db                 = db_connect();
                    foreach($all_vehicles_info as $vi) { 
                        
                    $data = $db->query("SELECT COUNT(ge_id) AS gf FROM geofence_events WHERE ge_v_id = '".$vi->id."' AND date(ge_timestamp) >= '".$fdate."' AND date(ge_timestamp) <= '".$tdate."' AND ge_event != 'inside'  ")->getRow();
                    
                ?>
                <tr>
                    <td style="width:50% text-align:right"><?= $vi->vehicle_no; ?></td>
                    <td style="width:50% text-align:right"><?= $data->gf; ?> Event(s)</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
        <?php } ?>
        
        <?php  if (!empty($flag) && !empty($vehicle_id)) { ?>
        
        <table id="example" class="display stripe compact " style="width:100%; text-align:left !important; padding:5px">
            <thead>
                <tr>
                    <th style="width:50% text-align:center">Date</th>
                    <th style="width:50% text-align:center">Event</th>
                </tr>
            </thead>
            <tbody id="action">
                <?php 
                    $db                 = db_connect();
                    foreach($geofencing_event_info as $gfi) { 
                        
                        if ($gfi->ge_event != 'inside') {
                ?>
                <tr>
                    <td style="width:50% text-align:right"><?= $gfi->ge_timestamp; ?></td>
                    <td style="width:50% text-align:right"><?= $gfi->ge_event; ?></td>
                </tr>
                <?php } ?>
                <?php } ?>
            </tbody>
        </table>
        
        <?php } ?>
<script>
   $('table').dataTable({searching: false, paging: false, info: false, ordering: false,});
</script>