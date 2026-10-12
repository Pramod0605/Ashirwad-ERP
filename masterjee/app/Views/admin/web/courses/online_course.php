

    <div class="balance-area mg-top-90"></div>
        
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-4 text-center">
                <a href="javascript:void(0);" class="btn btn-sm w-100 category" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Category</a>
            </div>
            <div class="col-4 text-center">
                <a href="javascript:void(0);" class="btn btn-sm w-100 course" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Courses</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/web/online_course_reports" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Reports</a>
            </div>
    </div>
        
        <div class="row pt-4" id="cours" style="padding-left:25px; padding-right:25px">
            <table class="table">
                <tbody>
                    <?php 
                    $i = 0;
                    foreach ($allCourses as $course) { 
                    $i += 1;
                    ?>
                    <tr style="border-bottom:hidden;">
                        <td colspan="6" style="width:100%"><img src="<?= site_info()['siteUrl'].'uploads/course/course_thumbnail/'.$course->course_thumbnail; ?>" style="width:100%;"></td>
                    </tr>
                    <tr style="border-top:hidden;border-bottom:hidden;">
                        <td colspan="3" style="width:50%; text-align:left"><span class="badge" style="background-color: #6c757d;"><?= $course->title; ?></span></td>
                        <td colspan="3" style="width:50%; text-align:right"><span class="badge" style="background-color: #6c757d;"><?= $course->employee_id.' '.$course->name; ?></span></td>
                    </tr>
                    <tr style="border-top:hidden;border-bottom:hidden;">
                        <td colspan="6" style="width:100%"><?= $course->description; ?></td>
                    </tr>
                    <tr style="border-top:hidden;border-bottom:hidden;">
                        <td colspan="6" style="width:100%"><?= $course->classname; ?></td>
                    </tr>
                    <tr style="border-top:hidden">
                        <td colspan="2" style="width:25%; text-align:center"><a href="javascript:void(0);" class="add_outcomes" data-course_id_a="<?= $course->ocid; ?>"><i class="fa fa-outdent" aria-hidden="true"></i></a></td>
                        <td colspan="1" style="width:25%; text-align:center"><a href="javascript:void(0);" class="add_sections" data-course_id_b="<?= $course->ocid; ?>"><i class="fa fa-book" aria-hidden="true"></i></a></td>
                        <td colspan="1" style="width:25%; text-align:center"><a href="javascript:void(0);" class="add_lesson" data-course_id_c="<?= $course->ocid; ?>"><i class="fa fa-database" aria-hidden="true"></i></a></td>
                        <td colspan="2" style="width:25%; text-align:center"><a href="<?= base_url(); ?>admin/web/view_online_course/<?= $course->ocid; ?>" class="view_course" data-course_id_d="<?= $course->ocid; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
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
    <form role="form" action="add_category"  id="add_category" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="add_category_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="category_name" class="form-control" value="" placeholder="Exam name">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_category" id="btn_save_category" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL EXAM-->  

<!--MODAL TERM-->
    <form role="form" action="add_course"  id="add_course" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="add_course_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="title" class="form-control" value="" placeholder="Title">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <textarea name="description" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <input type="number" name="price" class="form-control" value="" placeholder="Price">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="discount" class="form-control" value="" placeholder="Discount %">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" name="free_course" id="free_course" class="custom-control-input custom-control-input-info custom-control-input-outline" value="1">
                            <label for="free_course" class="custom-control-label">Free Course</label>
                        </div>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <select name="category_id" class="form-control">
                            <option value="">Select Category</option>
                            <?php foreach ($courseCategory as $cat) { ?>
                            <option value="<?= $cat->id; ?>"><?= $cat->category_name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <select name="front_side_visibility" class="form-control" value="">
                            <option value="yes">Front Site Visibility - Yes</option>
                            <option value="no">Front Site Visibility - No</option>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="video_id" class="form-control" value="" placeholder="YouTube Video Url">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <input type="file" name="course_thumbnail" class="form-control" value="" placeholder="Course Thumbnail">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_course" id="btn_save_course" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL TERM-->  

<!--MODAL EXAM-->
    <form role="form" action="add_outcomes"  id="add_outcomes" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="add_outcomes_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    <input type="hidden" name="course_id_a" id="course_id_a" class="form-control" value="">
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="outcomes[]" class="form-control" value="" placeholder="Outcomes">
                    </div>
                    <span id="moreoutcomes"></span>
                    <a href="javascript:void(0);" id="addMore"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add More</a>
                    
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_outcome" id="btn_save_outcome" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL EXAM-->  

<!--MODAL EXAM-->
    <form role="form" action="add_sections"  id="add_sections" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="add_sections_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    <input type="hidden" name="course_id_b" id="course_id_b" class="form-control" value="">
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="sections[]" class="form-control" value="" placeholder="Sections">
                    </div>
                    <span id="moresections"></span>
                    <a href="javascript:void(0);" id="addMoreSec"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add More</a>
                    
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_sections" id="btn_save_sections" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL EXAM-->  

<!--MODAL EXAM-->
    <form role="form" action="add_lesson"  id="add_lesson" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="add_lesson_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    <input type="hidden" name="course_id_c" id="course_id_c" class="form-control" value="">
                    <div class="col-12 px-1 py-2">
                        <label>Section</label>
                        <select name="section_id" id="section_id" class="form-control">
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        
                        <input type="text" name="lesson_title" class="form-control" value="" placeholder="Lesson Title">
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <select name="lesson_type" id="lesson_type" class="form-control">
                            <option value="">Select lesson type</option>
                            <option value="video">Video</option>
                            <option value="pdf">PDF</option>
                            <option value="text">Text</option>
                            <option value="document">Document</option>
                        </select>
                    </div>
                    
                    <div class="col-12 px-1 py-2" id="link_hidden" style="display:none">
                        <input type="text" name="lesson_url" class="form-control" value="" placeholder="YouTube Url">
                        <br>
                        <br>
                        <input type="time" name="lesson_duration" class="form-control" value="" placeholder="Duration">
                    </div>
                    <div class="col-12 px-1 py-2" id="attach_hidden" style="display:none">
                        <input type="file" name="lesson_attachment" class="form-control" value="" placeholder="Attach File">
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <textarea name="lesson_summary" class="form-control" placeholder="Summary"></textarea>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Preview Thumbnail</label>
                        <input type="file" name="lesson_thumbnail" class="form-control" value="" placeholder="Lesson Thumbnail">
                    </div> 
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_lesson" id="btn_save_lesson" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL EXAM-->  

<script>
$(function() {
    $("#addMore").click(function(e) {
        e.preventDefault();
        $("#moreoutcomes").append("<div class='col-12 px-1 py-2'><input type='text' name='outcomes[]' class='form-control' value='' placeholder='Outcomes'></div>");
    });
});
</script>
<script>
$(function() {
    $("#addMoreSec").click(function(e) {
        e.preventDefault();
        $("#moresections").append("<div class='col-12 px-1 py-2'><input type='text' name='sections[]' class='form-control' value='' placeholder='Sections'></div>");
    });
});
</script>
<script type="text/javascript">
    $('#actionTop').on('click','.category',function(){
        $('#add_category_modal').modal('show');
    });
</script>
<script type="text/javascript">
    $('#actionTop').on('click','.course',function(){
        $('#add_course_modal').modal('show');
    });
</script>
<script type="text/javascript">
    $('#cours').on('click','.add_outcomes',function(){
        var course_id = $(this).data('course_id_a');
        document.getElementById('course_id_a').value = course_id;
        $('#add_outcomes_modal').modal('show');
    });
</script>
<script type="text/javascript">
    $('#cours').on('click','.add_sections',function(){
        var course_id = $(this).data('course_id_b');
        document.getElementById('course_id_b').value = course_id;
        $('#add_sections_modal').modal('show');
    });
</script>
<script type="text/javascript">
    $('#cours').on('click','.add_lesson',function(){
        var course_id = $(this).data('course_id_c');
        document.getElementById('course_id_c').value = course_id;
        show_sec();
        function show_sec(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url(); ?>admin/web/get_course_section_info/' + course_id,
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].id+'"><td>'+data[i].section_title+'</td>';
                    }
                    $('#section_id').html(html);
                }
 
            });
        }
        $('#add_lesson_modal').modal('show');
    });
    $('#lesson_type').change(function(){
        lesson_type = document.getElementById('lesson_type').value;
        //document.getElementById('fr').value = content;
    });
</script>

<script type="text/javascript">
 $(document).ready(function(){
$("#btn_save_category").click(function(){
            event.preventDefault();
            var formval = $('#add_category')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_online_course_category",
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
$("#btn_save_course").click(function(){
            event.preventDefault();
            var formval = $('#add_course')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_online_course",
            dataType: 'json',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(data) {
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
      });
    });
</script>

<script type="text/javascript">
 $(document).ready(function(){
$("#btn_save_outcome").click(function(){
            event.preventDefault();
            var formval = $('#add_outcomes')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_course_outcomes",
            dataType: 'json',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(data) {
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
      });
    });
</script>

<script type="text/javascript">
 $(document).ready(function(){
$("#btn_save_sections").click(function(){
            event.preventDefault();
            var formval = $('#add_sections')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_course_sections",
            dataType: 'json',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(data) {
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
      });
    });
</script>

<script type="text/javascript">
 $(document).ready(function(){
$("#btn_save_lesson").click(function(){
            event.preventDefault();
            var formval = $('#add_lesson')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_course_lesson",
            dataType: 'json',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(data) {
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
      });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#lesson_type").change(function(){
        var lesson_type = document.getElementById('lesson_type').value;
        
        if (lesson_type == 'video') {
            document.getElementById("link_hidden").style.display = "block";
            document.getElementById("attach_hidden").style.display = "none";    
        }
        else {
            document.getElementById("link_hidden").style.display = "none";
            document.getElementById("attach_hidden").style.display = "block";    
        }
     });
    });
</script>  
        