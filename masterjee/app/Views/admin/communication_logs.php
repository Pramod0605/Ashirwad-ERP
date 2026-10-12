<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
        
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/communication" class="btn btn-sm w-100 category" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Communication</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/notice_board" class="btn btn-sm w-100 category" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Notice</a>
            </div>
    </div>
    <div class="row pt-4" id="rating">
    <table id="example" class="display" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i = 0;
                    foreach ($all_sms_email as $se) { 
                    $i += 1;
                    ?>
                    <tr>
                        <td><?= $se->created_at; ?></td>
                        <td><?= $se->title; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><?= $se->message; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
    </table>

            
        </div>

<script>
    DataTable.ext.errMode = 'none';
    $('table.display').DataTable({searching: false, paging: false, info: false, ordering: false});
</script> 