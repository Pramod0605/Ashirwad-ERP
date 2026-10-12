<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

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
                <a href="<?= base_url(); ?>admin/web/add_staff_member" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Staff</a>
            </div>
    </div>
    
                <?php 
                    $db         = db_connect();
                    
                    if ($minfo->member_type == 'teacher') {
                        $maInfo = user_info($minfo->member_id);
                        $mName  = $maInfo->name.' '.$maInfo->surname;
                        $mUid   = $maInfo->employee_id;
                        $mNo    = $maInfo->contact_no;
                    } else {
                        $maInfo = $StaffModel->student_admission_info($minfo->member_id);
                        $mName  = $maInfo->firstname.' '.$maInfo->lastname;
                        $mUid   = $maInfo->admission_no;
                        $mNo    = $maInfo->mobileno;
                    }
                    
                    $issued     = $db->query("SELECT COUNT(id) AS ib FROM book_issues WHERE member_id  = '".$minfo->id."' AND is_returned = '0' ")->getRow();
                    
                    if (!empty($issued)) {
                        $issuedBook = $issued->ib;
                    } else {
                        $issuedBook = 0;
                    }
                    
                ?>
  
        <div class="row pt-4" style="padding-left:25px; padding-right:25px">
            <table class="table" class="display cell-border" style="width:100%; text-align:left !important">
                <tbody>
                    <tr>
                        <td style="width:48%; text-align:left">Member ID</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= $minfo->id; ?></td>
                    </tr>
                    <tr>
                        <td style="width:48%; text-align:left">Library Card No.</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= $minfo->library_card_no; ?></td>
                    </tr>
                    <tr>
                        <td style="width:48%; text-align:left">Admission No / Employee ID</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= $mUid; ?></td>
                    </tr>
                    
                    <tr>
                        <td style="width:48%; text-align:left">Member Type</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= ucfirst($minfo->member_type); ?></td>
                    </tr>
                    <tr>
                        <td style="width:48%; text-align:left">Mobile Number</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= $mNo; ?></td>
                    </tr>
                    <tr>
                        <td style="width:48%; text-align:left">Session Year</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= site_info()['active_session']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <form role="form" action="<?= base_url(); ?>admin/web/save_issued_book"  id="issueBook" method="post" enctype="multipart/form-data">
        <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
                    
                    
                    
                    <div class="col-12 px-1 py-2">
                        <label>Book</label>
                        <select class="form-control" name="book_id" id="book_id" required style="width: 100%">
                            <option value="">Select....</option>
                            <?php foreach ($books as $book) { ?>
                            <option value="<?= $book->id ?>"><?= $book->book_title ?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <span id="avlBukQty" style="color:red"></span>
                        <br>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <label>Due Return Date</label>
                        <input type="date" name="duereturn_date" class="form-control" value="">
                        <input type="hidden" name="mid" class="form-control" value="<?= $mid; ?>">
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_issue" id="btn_save_issue" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Issue</button>
                    </div>
        </div>
    </form>
    
    <div class="row pt-4" id="history" style="padding-left:25px; padding-right:25px">
        <table class="table" class="display cell-border" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Number</th>
                        <th>Issue Date</th>
                        <th>Due Date</th> 
                        <th>Return Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($issues as $isd) {  ?>
                    <tr>
                        <td><?= $isd->book_title; ?></td>
                        <td><?= $isd->book_no; ?></td>
                        <td><?= $isd->issue_date; ?></td>
                        <td><?= $isd->duereturn_date; ?></td>
                        <td><?= $isd->return_date; ?></td>
                    </tr>
                    <?php if ($isd->is_returned == 0) { ?>
                    <tr>
                        <td colspan="5">
                            <a href="<?= base_url(); ?>admin/web/return_issue_book/<?= $isd->biid; ?>" class="btn-sm btn-primary" style="width:100%; display: inline-block; text-align:center"><i class="fa fa-reply" aria-hidden="true"></i>Return Book</a>
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
    
 <script type="text/javascript">
$(document).ready(function(){
    $("#book_id").change(function(){
      var book_id = document.getElementById('book_id').value;
        show_section();
        function show_section(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url(); ?>admin/web/get_available_book_qty/' + book_id,
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = 'Available Quantity : '+data;
                    $('#avlBukQty').html(html);
                }
 
            });
        }
    });
    
    $("#btn_save_issue").click(function(){
            event.preventDefault();
            var formval = $('#issueBook')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_issued_book",
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
   $('table').dataTable({searching: true, paging: true, info: false, ordering: true,});
</script>     