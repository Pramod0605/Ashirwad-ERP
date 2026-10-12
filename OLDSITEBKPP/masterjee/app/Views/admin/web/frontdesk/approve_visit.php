<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
     <br>    
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/add_visitor" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Visitor</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/visitors" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Visitors</a>
            </div>
    </div>
     
    <div class="row pt-4 tbl-responsive" id="rating">
    <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Purpose</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Persons</th>
                        <th>Date</th>
                        <th>Time-in</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($visitors as $v) { 
                    
                    if ($v->meeting_with == 'staff') {
                        $name = $v->employee_id.' '.$v->name;
                    } else {
                        $name = $v->admission_no.' '.$v->firstname;
                    }
                    
                    ?>
                    <tr>
                        <td><?= $v->purpose; ?></td>
                        <td><?= $name; ?></td>
                        <td><?= $v->contact; ?></td>
                        <td><?= $v->no_of_people; ?></td>
                        <td><?= $v->date; ?></td>
                        <td><?= $v->in_time; ?></td>
                        <td><a href="<?= base_url(); ?>admin/web/approve_visit/<?= $v->vid; ?>"><i class="fa fa-check-circle" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
    </table>
    </div>

<script>
    DataTable.ext.errMode = 'none';
    $('table.display').DataTable({searching: false, paging: false, info: false, ordering: false, responsive: true});
</script> 