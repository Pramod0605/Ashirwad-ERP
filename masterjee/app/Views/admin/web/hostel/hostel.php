<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
    <br>    
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="javascript:void(0);" class="btn btn-sm w-100 add_hostel" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Hostel</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/hostel_rooms" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Hostel Rooms</a>
            </div>
    </div>
    
    <div class="row pt-4 tbl-responsive" id="rating">
    <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Incharge</th>
                        <th>Type</th>
                        <th>Address</th>
                        <th>Intake</th>
                        <th>Meal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $db         = db_connect();
                    foreach ($hostels as $hostel) {  ?>
                    <tr>
                        <td><?= $hostel->hostel_name; ?></td>
                        <td><?= $hostel->employee_id.' '.$hostel->name; ?></td>
                        <td><?= $hostel->type; ?></td>
                        <td><?= $hostel->address; ?></td>
                        <td><?= $hostel->intake; ?></td>
                        <td><?= $hostel->meal_type; ?></td>
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

<!--MODAL HOSTEL-->
    <form role="form" action="add_hostel"  id="add_hostel" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="add_hostel_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="name" class="form-control" value="" placeholder="Hostel name">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <select name="type" class="form-control" value="">
                            <option value="">Type..</option>
                            <option value="Girls">Girls</option>
                            <option value="Boys">Boys</option>
                            <option value="Combine">Combine</option>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="address" class="form-control" value="" placeholder="Hostel Address">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <input type="number" name="intake" class="form-control" value="" placeholder="Hostel Intake">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <select name="hostel_incharge" class="form-control" style="width: 100%">
                            <option value="">Incharge..</option>
                            <?php foreach ($staff as $stf) { ?>
                            <option value="<?= $stf->employee_id; ?>"><?= $stf->employee_id.' - '.$stf->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <textarea name="description" class="form-control" placeholder="Description"></textarea>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <label for="exampleInputEmail1">Meal Type</label>
                        <div class="checkbox">
                            <label><input type="checkbox" name="meal[]" value="Breakfast">&nbsp;Breakfast</label>&nbsp;
                            <label><input type="checkbox" name="meal[]" value="Lunch" autocomplete="off">&nbsp;Lunch</label>&nbsp;
                            <label><input type="checkbox" name="meal[]" value="Snacks">&nbsp;Snacks</label>&nbsp;
                            <label><input type="checkbox" name="meal[]" value="Dinner">&nbsp;Dinner</label>&nbsp;
                        </div>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_hostel" id="btn_save_hostel" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL HOSTEL-->  

<script type="text/javascript">
    $('#actionTop').on('click','.add_hostel',function(){
        $('#add_hostel_modal').modal('show');
    });
</script>
<script type="text/javascript">
 $(document).ready(function(){
$("#btn_save_hostel").click(function(){
            event.preventDefault();
            var formval = $('#add_hostel')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_hostel",
            dataType: 'json',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(response) {
            if (response.status == 'success') {
                $('#success_message').html(response.message);
                $('#success_alert').addClass('show');
                window.setTimeout(function() {location.reload();}, 2000);
            } else {
                $('#error_message').html(response.message);
                $('#error_alert').addClass('show');
                window.setTimeout(function() {location.reload();}, 2000);
            }
        }
        });
      });
    });
</script>
<script>
    DataTable.ext.errMode = 'none';
    $('table.display').DataTable({searching: false, paging: false, info: false, ordering: false, responsive: true});
</script> 