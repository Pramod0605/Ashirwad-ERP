<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

<div class="balance-area mg-top-90"></div>

    <br>    
    <div class="row" style="margin:0.1rem">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/library" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Library</a>
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
<?php if (empty($id)) { ?>    
    <form role="form" action="<?= base_url(); ?>admin/web/save_library_book"  id="add_assess" method="post" enctype="multipart/form-data">
        <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
                    
                    
                    <div class="col-12 px-1 py-2">
                        <label>Book Title</label>
                        <input type="text" name="book_title" class="form-control" value="" placeholder="Book title">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Book Number</label>
                        <input type="text" name="book_no" class="form-control" value="" placeholder="Book no">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>ISBN Number</label>
                        <input type="text" name="isbn_no" class="form-control" value="" placeholder="ISBN no">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Publisher</label>
                        <input type="text" name="publish" class="form-control" value="" placeholder="Publisher">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Author</label>
                        <input type="text" name="author" class="form-control" value="" placeholder="Author">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control" value="" placeholder="Subject">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Class</label>
                        <select class="form-control" name="claases" id="claases" required style="width: 100%">
                            <option value="">Select....</option>
                            <?php foreach ($allClsInfo as $cls) { ?>
                            <option value="<?= $cls->class ?>"><?= $cls->class?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <label>Rack Number</label>
                        <input type="text" name="rack_no" class="form-control" value="" placeholder="Rack Number">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Qty</label>
                        <input type="number" name="qty" class="form-control" value="" placeholder="Qty">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Book Price</label>
                        <input type="number" name="perunitcost" class="form-control" value="" placeholder="Book Price">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Post Date</label>
                        <input type="date" name="postdate" class="form-control" value="" placeholder="Post Date">
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <label>Category</label>
                        <input type="text" name="category" class="form-control" value="" placeholder="Category">
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <label>Description</label>
                        <textarea name="description" class="form-control" placeholder="Description"></textarea>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_book" id="btn_save_book" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
        </div>
    </form>
<?php } else { ?>
    
    <form role="form" action="<?= base_url(); ?>admin/web/save_library_book"  id="add_assess" method="post" enctype="multipart/form-data">
        <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
                    
                    <input type="hidden" name="bid" class="form-control" value="<?= $id; ?>" placeholder="Book Id">
                    
                    <div class="col-12 px-1 py-2">
                        <label>Book Title</label>
                        <input type="text" name="book_title" class="form-control" value="<?= $binfo->book_title; ?>" placeholder="Book title">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Book Number</label>
                        <input type="text" name="book_no" class="form-control" value="<?= $binfo->book_no; ?>" placeholder="Book no">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>ISBN Number</label>
                        <input type="text" name="isbn_no" class="form-control" value="<?= $binfo->isbn_no; ?>" placeholder="ISBN no">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Publisher</label>
                        <input type="text" name="publish" class="form-control" value="<?= $binfo->publish; ?>" placeholder="Publisher">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Author</label>
                        <input type="text" name="author" class="form-control" value="<?= $binfo->author; ?>" placeholder="Author">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control" value="<?= $binfo->subject; ?>" placeholder="Subject">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Class</label>
                        <select class="form-control" name="claases" id="claases" required style="width: 100%">
                            <option value="">Select....</option>
                            <?php foreach ($allClsInfo as $cls) { ?>
                            <option value="<?= $cls->class ?>" <?php if ($binfo->claases == $cls->class) { echo 'selected'; } ?>><?= $cls->class?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <label>Rack Number</label>
                        <input type="text" name="rack_no" class="form-control" value="<?= $binfo->rack_no; ?>" placeholder="Rack Number">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Qty</label>
                        <input type="number" name="qty" class="form-control" value="<?= $binfo->qty; ?>" placeholder="Qty">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Book Price</label>
                        <input type="number" name="perunitcost" class="form-control" value="<?= $binfo->perunitcost; ?>" placeholder="Book Price">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Post Date</label>
                        <input type="date" name="postdate" class="form-control" value="<?= $binfo->postdate; ?>" placeholder="Post Date">
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <label>Category</label>
                        <input type="text" name="category" class="form-control" value="<?= $binfo->category; ?>" placeholder="Category">
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <label>Description</label>
                        <textarea name="description" class="form-control" placeholder="Description"><?= $binfo->description; ?></textarea>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_book" id="btn_save_book" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
        </div>
    </form>

<?php } ?>

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
$("#btn_save_book").click(function(){
            event.preventDefault();
            var formval = $('#add_assess')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_library_book",
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