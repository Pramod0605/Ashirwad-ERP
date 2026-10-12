<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

        <div class="row pt-4" style="margin-top: 50px;">
        </div>
         <hr>
        
        <table id="example" class="display stripe compact " style="width:100%; text-align:left !important; padding:5px">
            <thead>
                <tr>
                    <th style="width:33.3% text-align:center">Name</th>
                    <th style="width:33.3% text-align:center">View</th>
                    <th style="width:33.3% text-align:center">Delete</th>
                </tr>
            </thead>
            <tbody id="action">
                <?php 
                    $db                 = db_connect();
                    foreach($all_geofences_info as $gi) {  ?>
                <tr>
                    <td style="width:50% text-align:right"><?= $gi->geo_name; ?></td>
                    <td style="width:25% text-align:right">
                        <a class="icon geofenceviewpopup" data-id='<?= $gi->geo_id ?>' href="javascript:void(0);">
                            <i class="fa fa-eye"></i>
                        </a> 
                    </td>
                    <td style="width:25% text-align:right">
                        <a class="icon" href="<?php echo base_url(); ?>admin/staff/delete_geofencing/<?= $gi->geo_id ?>">
                            <i class="fa fa-trash text-danger"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
<script>
   $('table').dataTable({searching: false, paging: false, info: false, ordering: false,});
</script>
<div id="geofencepopupmodel" class="modal fade">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-body">

      
   </head>
   
   <body >
      <div id="googleMap" style="width:100%; height:400px;"></div>
   </body>
   
         </div>
         <div class="modal-footer">
            
         </div>
      </div>
   </div>
</div>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=&sensor=false&v=3.21.5a&libraries=drawing&signed_in=true&libraries=places,drawing"></script>
<script src="<?= base_url(); ?>public/style/distance_calculator.js"></script>
<script src="<?= base_url(); ?>public/style/custom.js"></script>
<script src="<?= base_url(); ?>public/style/geofence.js"></script>