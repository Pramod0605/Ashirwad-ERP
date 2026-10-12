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
                <a href="<?= base_url(); ?>admin/web/library" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Library</a>
            </div>
    </div>
    <br>
    <div class="row" style="margin:0.1rem">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/add_student_member" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Student</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/add_staff_member" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Staff</a>
            </div>
    </div>
    
    <div class="row pt-4 tbl-responsive" id="rating" style="padding-left:25px; padding-right:25px">
    <table class="table">
                <tbody>
                    <?php 
                    $db         = db_connect();
                    foreach ($members as $member) { 
                        
                    if ($member->member_type == 'teacher') {
                        $mInfo  = user_info($member->member_id);
                        $mName  = $mInfo->name.' '.$mInfo->surname;
                        $mUid   = $mInfo->employee_id;
                        $mNo    = $mInfo->contact_no;
                    } else {
                        $mInfo  = $StaffModel->student_admission_info($member->member_id);
                        $mName  = $mInfo->firstname.' '.$mInfo->lastname;
                        $mUid   = $mInfo->admission_no;
                        $mNo    = $mInfo->mobileno;
                    }
                    
                    $issued     = $db->query("SELECT COUNT(id) AS ib FROM book_issues WHERE member_id  = '".$member->id."' AND is_returned = '0' ")->getRow();
                    
                    if (!empty($issued)) {
                        $issuedBook = $issued->ib;
                    } else {
                        $issuedBook = 0;
                    }
                    
                    ?>
                    <tr style="border-bottom:hidden;">
                        <td colspan="3" style="width:50%; text-align:lett"><span class="badge" style="background-color: #6c757d;"><?= $member->id; ?></span></td>
                        <td colspan="3" style="width:50%; text-align:right"><span class="badge" style="background-color: #6c757d;"><?= $member->library_card_no; ?></span></td>
                    </tr>
                    <tr style="border-bottom:hidden;">
                        <td colspan="3" style="width:50%; text-align:lett"><span><?= $mUid; ?></span></td>
                        <td colspan="3" style="width:50%; text-align:right"><span><?= $mName; ?></span></td>
                    </tr>
                    <tr style="border-bottom:hidden;">
                        <td colspan="3" style="width:50%; text-align:lett"><span class="badge" style="background-color: #6c757d;"><?= ucfirst($member->member_type); ?></span></td>
                        <td colspan="3" style="width:50%; text-align:right"><span><?= $mNo; ?></span></td>
                    </tr>
                    <tr style="border-top:hidden">
                        <td colspan="3" style="width:50%; text-align:lett"><span>Issued Book : <?= $issuedBook; ?></span></td>
                        <td colspan="3" style="width:50%">
                            <a href="<?= base_url(); ?>admin/web/issue_book/<?= $member->id; ?>" class="btn-sm btn-primary" style="width:100%; display: inline-block; text-align:center"><i class="fa fa-plus-circle" aria-hidden="true"></i>Issue Book</a>
                        </td>
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
    DataTable.ext.errMode = 'none';
    $('table.display').DataTable({searching: true, paging: true, info: false, ordering: true, responsive: true});
</script> 