<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

<div class="balance-area mg-top-90"></div>

    <br>    
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-12 text-center">
                <a href="<?= base_url(); ?>admin/web/inquiry" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Inquiry</a>
            </div>
            
    </div>
<?php if (empty($id)) { ?>    
    <form role="form" action="<?= base_url(); ?>admin/web/save_visitor"  id="add_assess" method="post" enctype="multipart/form-data">
        <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
                    
                    
                    
                    <div class="col-12 px-1 py-2">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="" placeholder="Name">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Contact Number</label>
                        <input type="number" name="contact" class="form-control" value="" placeholder="Contact Number">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="" placeholder="Email">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Address</label>
                        <textarea name="address" class="form-control" placeholder="Address"></textarea>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Description</label>
                        <textarea name="description" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Note</label>
                        <textarea name="note" class="form-control" placeholder="Note"></textarea>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" value="" placeholder="Date">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Next Follow Up Date</label>
                        <input type="date" name="follow_up_date" class="form-control" value="" placeholder="Follow-up Date">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Assigned</label>
                        <select name="assigned" class="form-control" style="width: 100%">
                            <?php foreach ($staff as $stf) { ?>
                            <option value="<?= $stf->id; ?>"><?= $stf->employee_id.' - '.$stf->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Reference</label>
                        <select name="reference" class="form-control" style="width: 100%">
                            <?php foreach ($reference as $ref) { ?>
                            <option value="<?= $ref->reference; ?>"><?= $ref->reference; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Source</label>
                        <select name="source" class="form-control" style="width: 100%">
                            <?php foreach ($source as $src) { ?>
                            <option value="<?= $src->source; ?>"><?= $src->source; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Class</label>
                        <select class="form-control" name="class_id" id="class_id" required style="width: 100%">
                            <option value="">Select....</option>
                            <?php foreach ($allClsInfo as $cls) { ?>
                            <option value="<?= $cls->id ?>"><?= $cls->class?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <label>Number of Childs</label>
                        <input type="number" name="no_of_child" class="form-control" value="" placeholder="Number of Childs">
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <label>Referral</label>
                        <select name="referral_staff" class="form-control" style="width: 100%">
                            <?php foreach ($staff as $stf) { ?>
                            <option value="<?= $stf->employee_id; ?>"><?= $stf->employee_id.' - '.$stf->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_assess" id="btn_save_assess" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
        </div>
    </form>
<?php } else { ?>
    
    <form role="form" action="<?= base_url(); ?>admin/web/save_inquiry"  id="add_assess" method="post" enctype="multipart/form-data">
        <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
                    
                    <input type="hidden" name="iid" class="form-control" value="<?= $id; ?>" placeholder="Inquiry Id">
                    
                    <div class="col-12 px-1 py-2">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="<?= $iinfo->name; ?>" placeholder="Name">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Contact Number</label>
                        <input type="number" name="contact" class="form-control" value="<?= $iinfo->contact; ?>" placeholder="Contact Number">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?= $iinfo->email; ?>" placeholder="Email">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Address</label>
                        <textarea name="address" class="form-control" placeholder="Address"><?= $iinfo->address; ?></textarea>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Description</label>
                        <textarea name="description" class="form-control" placeholder="Description"><?= $iinfo->description; ?></textarea>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Note</label>
                        <textarea name="note" class="form-control" placeholder="Note"><?= $iinfo->note; ?></textarea>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" value="<?= $iinfo->date; ?>" placeholder="Date">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Next Follow Up Date</label>
                        <input type="date" name="follow_up_date" class="form-control" value="<?= $iinfo->follow_up_date; ?>" placeholder="Follow-up Date">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Assigned</label>
                        <select name="assigned" class="form-control" style="width: 100%">
                            <?php foreach ($staff as $stf) { ?>
                            <option value="<?= $stf->id; ?>" <?php if ($iinfo->assigned == $stf->id) { echo 'selected'; } ?>><?= $stf->employee_id.' - '.$stf->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Reference</label>
                        <select name="reference" class="form-control" style="width: 100%">
                            <?php foreach ($reference as $ref) { ?>
                            <option value="<?= $ref->reference; ?>" <?php if ($iinfo->reference == $ref->reference) { echo 'selected'; } ?>><?= $ref->reference; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Source</label>
                        <select name="source" class="form-control" style="width: 100%">
                            <?php foreach ($source as $src) { ?>
                            <option value="<?= $src->source; ?>" <?php if ($iinfo->source == $src->source) { echo 'selected'; } ?>><?= $src->source; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Class</label>
                        <select class="form-control" name="class_id" id="class_id" required style="width: 100%">
                            <option value="">Select....</option>
                            <?php foreach ($allClsInfo as $cls) { ?>
                            <option value="<?= $cls->id ?>" <?php if ($iinfo->class_id == $cls->id) { echo 'selected'; } ?>><?= $cls->class?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <label>Number of Childs</label>
                        <input type="number" name="no_of_child" class="form-control" value="<?= $iinfo->name; ?>" placeholder="Number of Childs">
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <label>Referral</label>
                        <select name="referral_staff" class="form-control" style="width: 100%">
                            <?php foreach ($staff as $stf) { ?>
                            <option value="<?= $stf->employee_id; ?>" <?php if ($iinfo->referral_staff == $stf->employee_id) { echo 'selected'; } ?>><?= $stf->employee_id.' - '.$stf->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_assess" id="btn_save_assess" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
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
// $(document).on("click",function(e){
//     e.preventDefault(); 
// });

$("button").click(function(e){e.preventDefault();})

 $(document).ready(function(){
var w = $(window).width();
$('#canvas').css('width', w);
 $('#video').css('width', w);
$("#btn_save_assess").click(function(){
            event.preventDefault();
            var formval = $('#add_assess')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_inquiry",
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