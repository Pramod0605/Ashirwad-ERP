<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
    <div class="row pt-4 table-responsive">
    <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Guradian</th>
                        <th>Hostel</th>
                        <th>Room</th>
                        <th>Cost</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i  = 0;
                    $db = db_connect();
                    foreach ($all_student_info as $stu) { 
                    $i += 1;
                    
                    $hInfo = $StaffModel->student_hostel_info($stu->student_id);
                    if (!empty($hInfo)) {
                    ?>
                    <tr>
                        <td><?= $stu->admission_no.' '.$stu->firstname; ?></td>
                        <td><?= $stu->guardian_phone; ?></td>
                        <td><?= $hInfo->hostel_name.'<br>'.$hInfo->type.'<br>'.$hInfo->address; ?></td>
                        <td><?= 'RNo. : '.$hInfo->room_no.' '.$hInfo->room_type.'<br>BNo. : '.$hInfo->bed_code; ?></td>
                        <td><?= $hInfo->cost_per_bed; ?></td>
                    </tr>
                    <?php } } ?>
                </tbody>
    </table>

            
        </div>

<script>
   $('table').dataTable({searching: true, paging: true, info: false, ordering: true, responsive:true});
</script> 