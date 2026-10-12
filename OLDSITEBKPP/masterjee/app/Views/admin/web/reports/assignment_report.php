<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
    <form name="myForm" id="myForm" action="<?= base_url('admin/web/assignment_reports'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4">
            <div class="col-6 text-center">
                <input type="date" class="form-control" name="fdate" value="<?= $fdate; ?>" placeholder="From">
            </div>
            <div class="col-6 text-center">
                <input type="date" class="form-control" name="tdate" value="<?= $tdate; ?>" placeholder="From">
            </div>
            <br>
            <div class="col-12 text-center">
                <br>
                <button type="submit" id="submit" class="btn btn-primary w-100" style="width:100%; height: 37px;">Submit</button>
            </div>
        </div>
    </form>
    
<?php if (!empty($flag)) { ?>    
    <div class="row pt-4" id="rating">
    <table id="example" class="display" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Total Assignments</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $db = db_connect();
                    foreach ($students as $stu) {
                        $asInfo = $db->query("SELECT COUNT(id) AS ac FROM `daily_assignment` WHERE student_session_id  = '".$stu->ssid."' AND date >= '".$fdate."' AND date <= '".$tdate."'  ")->getRow();
                    ?>
                    <tr>
                        <td><?= $stu->admission_no.' '.$stu->firstname; ?></td>
                        <td><?= $asInfo->ac; ?></td>
                    </tr>
                    <?php }  ?>
                </tbody>
    </table>  
    </div>
<?php } ?>

<script>
    DataTable.ext.errMode = 'none';
    $('table.display').DataTable({searching: false, paging: false, info: false, ordering: false});
</script> 