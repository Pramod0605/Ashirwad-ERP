<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

        <div class="row pt-4" style="margin-top: 50px;">
        </div>
        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/swapping_report'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
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
        <?php  if (!empty($flag)) { ?>
        
        <table id="example" class="display stripe compact " style="width:100%; text-align:left !important; padding:5px">
            <thead>
                <tr>
                    <th style="width:50% text-align:center">Vehicle</th>
                    <th style="width:50% text-align:center">Details</th>
                </tr>
            </thead>
            <tbody id="action">
                <?php 
                    $db                 = db_connect();
                    foreach($all_vehicle_swapping_info as $vs) { ?>
                <tr>
                    <td style="width:50% text-align:right"><?= $vs->vehicle_no; ?></td>
                    <td style="width:50% text-align:right">
                            <?php 
                            $swaphis = json_decode($vs->swap_history);
                            $total = 0;
                            foreach ($swaphis as $key => $value) { 
                                
                                echo $value->DriverNm.' - '.$value->SwapTill.'<hr>';
                                
                            }
                            ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
        <?php } ?>
<script>
   $('table').dataTable({searching: false, paging: false, info: false, ordering: false,});
</script>