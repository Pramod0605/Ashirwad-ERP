<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
    <br>    
    <div class="row" style="margin:0.1rem">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/add_library_book" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Book</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/library_members" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Members</a>
            </div>
    </div>
    <br>
    <div class="row" style="margin:0.1rem">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/add_student_member" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Student</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/library" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Library</a>
            </div>
    </div>
    
    <div class="row pt-4 tbl-responsive" id="rating" style="padding-left:25px; padding-right:25px">
    <table class="table">
                <tbody>
                    <?php 
                    $db         = db_connect();
                    foreach ($staffs as $staff) { 
                    $mInfo      = $db->query("SELECT * FROM libarary_members WHERE member_id  = '".$staff->id."' AND member_type = 'teacher' ")->getRow();
                    if (!empty($mInfo)) {
                        $mId    = 'Member Id : '.$mInfo->id;
                        $mCn    = 'Card Num. : '.$mInfo->library_card_no;
                    } else {
                        $mId    = '';
                        $mCn    = '';
                    }
                    ?>
                    <tr style="border-bottom:hidden;">
                        <td colspan="3" style="width:50%; text-align:lett"><span><?= $staff->employee_id; ?></span></td>
                        <td colspan="3" style="width:50%; text-align:right"><span><?= $staff->name.' '.$staff->surname; ?></span></td>
                    </tr>
                    <tr style="border-bottom:hidden;">
                        <td colspan="3" style="width:50%; text-align:lett"><span><?= $staff->email; ?></span></td>
                        <td colspan="3" style="width:50%; text-align:right"><span><?= $staff->contact_no; ?></span></td>
                    </tr>
                    <tr style="border-bottom:hidden;">
                        <td colspan="3" style="width:50%; text-align:lett"><span class="badge" style="background-color: #6c757d;"><?= $mId; ?></span></td>
                        <td colspan="3" style="width:50%; text-align:right"><span class="badge" style="background-color: #6c757d;"><?= $mCn; ?></span></td>
                    </tr>
                    <?php if (empty($mInfo)) { ?>
                    <tr style="border-top:hidden">
                        <td  colspan="6" style="width:100%">
                            <a href="javascript:void(0);" class="btn-sm btn-primary add_member" data-staff_id="<?= $staff->id ?>" style="width:100%; display: inline-block; text-align:center"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add</a>
                        </td>
                    </tr>
                    <?php } else { ?>
                    <tr style="border-top:hidden">
                        <td  colspan="6" style="width:100%">
                            <a href="javascript:void(0);" class="btn-sm btn-primary" data-staff_id="<?= $staff->id ?>" style="width:100%; display: inline-block; text-align:center"><i class="fa fa-check-circle" aria-hidden="true"></i>Added</a>
                        </td>
                    </tr>
                    <?php } ?>
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
    DataTable.ext.errMode = 'none';
    $('table.display').DataTable({searching: true, paging: true, info: false, ordering: true, responsive: true});
</script> 
<script type="text/javascript">
    $('#rating').on('click','.add_member',function(){
        var staff_id = $(this).data('staff_id');
        add_member();
        function add_member(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url(); ?>admin/web/add_members/' + staff_id + '/teacher',
                async : true,
                dataType : 'json',
                success : function(data){
                if (data.status == 'success') {
                    $('#success_message').html(data.message);
                    $('#success_alert').addClass('show');
                    window.setTimeout(function() {location.reload();}, 2000);
                } else {
                    $('#error_message').html(data.message);
                    $('#error_alert').addClass('show');
                    window.setTimeout(function() {location.reload();}, 2000);
                }
                }
 
            });
        }
    });
</script>