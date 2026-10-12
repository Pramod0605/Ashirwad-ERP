<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>

    <div class="row pt-4" id="rating">
    <table id="example" class="display" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Parent Username</th>
                        <th>Parent Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $db = db_connect();
                    foreach ($students as $stu) {
                        $pInfo = $db->query("SELECT * FROM `users` WHERE id  = '".$stu->parent_id."' AND role = 'parent' ")->getRow();
                    ?>
                    <tr>
                        <td><?= $stu->admission_no.'<br>'.$stu->firstname; ?></td>
                        <td><?= $pInfo->username; ?></td>
                        <td><?= $pInfo->password; ?></td>
                    </tr>
                    <?php }  ?>
                </tbody>
    </table>  
    </div>


<script>
    DataTable.ext.errMode = 'none';
    $('table.display').DataTable({searching: false, paging: false, info: false, ordering: false});
</script> 