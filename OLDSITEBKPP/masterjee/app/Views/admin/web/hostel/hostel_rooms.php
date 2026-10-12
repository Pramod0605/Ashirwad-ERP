<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
    <br>    
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="javascript:void(0);" class="btn btn-sm w-100 add_room" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Room</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/hostel" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Hostel Rooms</a>
            </div>
    </div>
    
    <div class="row pt-4 tbl-responsive" id="rating">
    <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>RoomNumber</th>
                        <th>Hostel</th>
                        <th>Incharge</th>
                        <th>RoomType</th>
                        <th>Beds</th>
                        <th>Cost</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $db         = db_connect();
                    foreach ($rooms as $room) {  ?>
                    <tr>
                        <td><?= $room->room_no; ?></td>
                        <td><?= $room->hostel_name; ?></td>
                        <td><?= $room->employee_id.' '.$room->name; ?></td>
                        <td><?= $room->room_type; ?></td>
                        <td><?= $room->no_of_bed; ?></td>
                        <td><?= $room->cost_per_bed; ?></td>
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
    <form role="form" action="add_room"  id="add_room" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="add_room_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    
                    <div class="col-12 px-1 py-2">
                        <input type="numebr" name="room_no" class="form-control" value="" placeholder="Room number">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <select name="hostel_id" class="form-control" style="width: 100%">
                            <option value="">Hostel..</option>
                            <?php foreach ($hostels as $hostel) { ?>
                            <option value="<?= $hostel->hid; ?>"><?= $hostel->hostel_name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <select name="room_type_id" class="form-control" style="width: 100%">
                            <option value="">Room type..</option>
                            <?php foreach ($room_type as $roomtype) { ?>
                            <option value="<?= $roomtype->id; ?>"><?= $roomtype->room_type; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <input type="number" name="no_of_bed" class="form-control" value="" placeholder="Number of bed">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <input type="number" name="cost_per_bed" class="form-control" value="" placeholder="Cost per bed">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <select name="cost_term" class="form-control" style="width: 100%">
                            <option value="Monthly">Monthly</option>
                            <option value="Annually">Annually</option>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <textarea name="description" class="form-control" placeholder="Description"></textarea>
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
    $('#actionTop').on('click','.add_room',function(){
        $('#add_room_modal').modal('show');
    });
</script>
<script type="text/javascript">
 $(document).ready(function(){
$("#btn_save_hostel").click(function(){
            event.preventDefault();
            var formval = $('#add_room')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_hostel_room",
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