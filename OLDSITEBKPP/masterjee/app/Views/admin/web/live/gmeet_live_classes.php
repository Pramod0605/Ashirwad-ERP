

    <div class="balance-area mg-top-90"></div>
        
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="javascript:void(0);" class="btn btn-sm w-100 add_class" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Gmeet Class</a>
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
            <table class="table">
                <tbody>
                    <?php 
                    $i = 0;
                    foreach ($gmeetClasses as $gclass) { 
                    $i += 1;
                    
                    if ($gclass->status == 0 || empty($gclass->status)) {
                        $bgColor = '#6c757d';
                    } elseif ($gclass->status == 1) {
                        $bgColor = '#dc3545';
                    } elseif ($gclass->status == 2) {
                        $bgColor = '#189C07';
                    }
                    
                    ?>
                    <tr style="border-top:hidden;border-bottom:hidden;">
                        <td colspan="3" style="width:50%; text-align:left"><span class="badge" style="background-color: <?= $bgColor; ?>;"><?= $gclass->title; ?></span></td>
                        <td colspan="3" style="width:50%; text-align:right"><span class="badge" style="background-color: <?= $bgColor; ?>;"><?= $gclass->classname.' '.$gclass->section; ?></span></td>
                    </tr>
                    <tr style="border-top:hidden;border-bottom:hidden;">
                        <td colspan="6" style="width:100%"><?= $gclass->description; ?></td>
                    </tr>
                    <tr style="border-top:hidden;border-bottom:hidden;">
                        <td colspan="3" style="width:50%; text-align:left"><span><?= date("Y-m-d", strtotime($gclass->date)); ?></span></td>
                        <td colspan="3" style="width:50%; text-align:right"><span><?= $gclass->employee_id.' '.$gclass->name; ?></span></td>
                    </tr>
                    <tr style="border-top:hidden">
                        <td colspan="3" style="width:50%; text-align:center"><a href="javascript:void(0);" class="update_status" data-gid="<?= $gclass->gid; ?>"><i class="fa fa-outdent" aria-hidden="true"></i></a></td>
                        <td colspan="3" style="width:50%; text-align:center"><a href="<?= $gclass->url; ?>"><i class="fa fa-sign-out" aria-hidden="true"></i></a></td>
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
    
<!--MODAL EXAM-->
    <form role="form" action="add_class"  id="add_class" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="add_class_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="title" class="form-control" value="" placeholder="Title">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <input type="date" name="date" class="form-control" value="" placeholder="Date">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <input type="number" name="duration" class="form-control" value="" placeholder="Duration">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="url" class="form-control" value="" placeholder="Gmeet Url">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <textarea name="description" class="form-control" value="" placeholder="Description"></textarea>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_gclass" id="btn_save_gclass" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL EXAM--> 

<!--MODAL EXAM-->
    <form role="form" action="update_status"  id="update_status" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="update_status_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    <input type="hidden" name="gclass_id" id="gclass_id" class="form-control" value="">
                    <div class="col-12 px-1 py-2">
                        <select class="form-control" name="status">
                            <option value="0">Awaited</option>
                            <option value="1">Cancelled</option>
                            <option value="2">Finished</option>
                        </select>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_update_status" id="btn_update_status" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL EXAM-->  

<script type="text/javascript">
    $('#actionTop').on('click','.add_class',function(){
        $('#add_class_modal').modal('show');
    });
</script>
<script type="text/javascript">
    $('#cours').on('click','.update_status',function(){
        var gid = $(this).data('gid');
        document.getElementById('gclass_id').value = gid;
        $('#update_status_modal').modal('show');
    });
</script>
<script type="text/javascript">
 $(document).ready(function(){
$("#btn_save_gclass").click(function(){
            event.preventDefault();
            var formval = $('#add_class')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_gmeet_live_classes",
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
<script type="text/javascript">
 $(document).ready(function(){
$("#btn_update_status").click(function(){
            event.preventDefault();
            var formval = $('#update_status')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/update_gmeet_class_status",
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