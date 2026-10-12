<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
        
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/assigments_list" class="btn btn-sm w-100 category" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Assignments</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/homework" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Homework</a>
            </div>
    </div>
    <br>
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/homework_list" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Upcoming </a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/homework_list_closed" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Closed</a>
            </div>
    </div>
    <div class="row pt-4" id="rating">
    <table id="example" class="display" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Subject</th>
                        <th>SubmitDate</th>
                        <th>EvaluationDate</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i = 0;
                    foreach ($uchomeworks as $uh) { 
                    $i += 1;
                    ?>
                    <tr>
                        <td><?= $uh->homework_date; ?></td>
                        <td><?= $uh->sname; ?></td>
                        <td><?= $uh->submit_date; ?></td>
                        <td><?= $uh->evaluation_date; ?></td>
                        <td><a href="<?= base_url(); ?>admin/staff/submitted_homework/<?= $uh->hwid; ?>" class="btn btn-sm">View</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
    </table>

            
        </div>

<script>
    DataTable.ext.errMode = 'none';
    $('table.display').DataTable({searching: false, paging: false, info: false, ordering: false});
</script> 