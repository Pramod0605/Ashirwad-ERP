<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
        
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/gmeet_live_classes" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Gmeet Class</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/gmeet_live_classes_report" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Gmeet Reports</a>
            </div>
    </div>
    <br>
    <div class="row" style="margin:0.1rem" >
            <div class="col-12 text-center">
                <a href="<?= base_url(); ?>admin/web/live_classes" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Live Classes</a>
            </div>
    </div>
    
    <div class="row pt-4" id="cours" style="padding-left:25px; padding-right:25px">
            <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Join</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i  = 0;
                    $db = db_connect();
                    foreach ($reports as $report) { 
                    
                    ?>
                    <tr>
                        <td><?= $report->title; ?></td>
                        <td><?= date("Y-m-d", strtotime($report->date)); ?></td>
                        <td><?= $report->total_viewers; ?></td>
                        <td><a href="javascript:void(0);" class="view_join" data-gcid=""><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
    </table>

            
        </div>

    <div class="alert alert-primary alert-dismissible fade" role="alert" id="success_alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <span id="success_message"></span>
    </div>

    <div class="alert alert-danger alert-dismissible fade" role="alert" id="error_alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <span id="error_message"></span>
    </div>    
<script>
   $('table').dataTable({searching: true, paging: true, info: false, ordering: true,});
</script>  