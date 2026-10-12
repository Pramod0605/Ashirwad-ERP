<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
    <div class="row pt-4 table-responsive" id="rating">
    <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Vehicle</th>
                        <th>Driver</th>
                        <th>Route</th>
                        <th>Pickup</th>
                        <th>Fare</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i  = 0;
                    $db = db_connect();
                    foreach ($all_student_info as $stu) { 
                    $i += 1;
                    
                    $rInfo = $StaffModel->student_route_info($stu->ssid);
                    if (!empty($rInfo)) {
                    ?>
                    <tr>
                        <td><?= $stu->admission_no.' '.$stu->firstname; ?></td>
                        <td><?= $rInfo->vehicle_no; ?></td>
                        <td><?= $rInfo->driver_name.'<br>'.$rInfo->driver_contact; ?></td>
                        <td><?= $rInfo->route_title; ?></td>
                        <td><?= $rInfo->name; ?></td>
                        <td><?= $rInfo->fees; ?></td>
                    </tr>
                    <?php } } ?>
                </tbody>
    </table>

            
        </div>

<script>
   $('table').dataTable({searching: true, paging: true, info: false, ordering: true, responsive:true});
</script> 