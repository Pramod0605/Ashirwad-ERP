<div class="balance-area mg-top-90"></div>

    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/grades" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><br>Grades</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/exam" class="btn btn-sm w-100 exam" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><br>Exam</a>
            </div>
    </div>
<?php if (empty($id)) { ?>
    <form role="form" action="<?= base_url(); ?>admin/web/save_assessment"  id="add_assess" method="post" enctype="multipart/form-data">
        <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
                    
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="grade_name" class="form-control" value="" placeholder="Grade Name">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <textarea name="grade_description" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <div id="type" style="padding-left:0px; padding-right:0px">
                        <div class="col-12 px-1 py-2">
                            <input type="text" name="range_name[]" class="form-control" value="" placeholder="Range Name">
                        </div>
                        <div class="col-12 px-1 py-2">
                            <input type="number" name="range_mini[]" class="form-control" value="" placeholder="Minimum Percentage">
                        </div>
                        <div class="col-12 px-1 py-2">
                            <input type="number" name="range_max[]" class="form-control" value="" placeholder="Max Percentage">
                        </div>
                        <div class="col-12 px-1 py-2">
                            <input type="text" name="range_description[]" class="form-control" value="" placeholder="Description">
                        </div>
                    </div>
                    
                    <div class="col-3 text-center px-1 py-2">
                        <a href="javascript:void(0);" id="addMore" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#fff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add More</a>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_assess" id="btn_save_assess" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
        </div>
    </form>
<?php } else { ?>
    
    <form role="form" action="<?= base_url(); ?>admin/web/save_assessment"  id="add_assess" method="post" enctype="multipart/form-data">
        <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
                    
                    <input type="hidden" name="grade_id" class="form-control" value="<?= $id; ?>" placeholder="Grade Id">
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="grade_name" class="form-control" value="<?= $gradeInfo->name; ?>" placeholder="Grade Name">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <textarea name="grade_description" class="form-control" placeholder="Description"><?= $gradeInfo->description; ?></textarea>
                    </div>
                    <div id="type" style="padding-left:0px; padding-right:0px">
                    <?php  
                        $ranges  = $StaffModel->all_cbse_exam_grade_range($id);
                        foreach ($ranges as $range) { 
                    ?>
                        <div class="col-12 px-1 py-2">
                            <input type="hidden" name="range_id[]" class="form-control" value="<?= $range->id; ?>" placeholder="Range Id">
                            <input type="text" name="range_name[]" class="form-control" value="<?= $range->name; ?>" placeholder="Range Name">
                        </div>
                        <div class="col-12 px-1 py-2">
                            <input type="number" name="range_mini[]" class="form-control" value="<?= $range->minimum_percentage; ?>" placeholder="Minimum Percentage">
                        </div>
                        <div class="col-12 px-1 py-2">
                            <input type="number" name="range_max[]" class="form-control" value="<?= $range->maximum_percentage; ?>" placeholder="Max Percentage">
                        </div>
                        <div class="col-12 px-1 py-2">
                            <input type="text" name="range_description[]" class="form-control" value="<?= $range->description; ?>" placeholder="Description">
                        </div>
                    <?php } ?>
                    </div>
                    
                    <div class="col-3 text-center px-1 py-2">
                        <a href="javascript:void(0);" id="addMore" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#fff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add More</a>
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
$(function() {
    var currentItem = 1;
    $("#addMore").click(function(e) {
        currentItem++;
        e.preventDefault();
        $("#type").append('<div class="col-12 px-1 py-2"><input type="text" name="range_name[]" class="form-control" value="" placeholder="Range Name"></div>');
        $("#type").append('<div class="col-12 px-1 py-2"><input type="number" name="range_mini[]" class="form-control" value="" placeholder="Minimum Percentage"></div>');
        $("#type").append('<div class="col-12 px-1 py-2"><input type="number" name="range_max[]" class="form-control" value="" placeholder="Max Percentage"></div>');
        $("#type").append('<div class="col-12 px-1 py-2"><input type="text" name="range_description[]" class="form-control" value="" placeholder="Description"></div>');
    });
});
</script>
<script type="text/javascript">
 $(document).ready(function(){
$("#btn_save_assess").click(function(){
            event.preventDefault();
            var formval = $('#add_assess')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_grade",
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