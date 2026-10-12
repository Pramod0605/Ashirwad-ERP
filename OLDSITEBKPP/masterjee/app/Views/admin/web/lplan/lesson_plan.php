<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <div class="balance-area mg-top-90"></div>
    <br>    
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-4 text-center">
                <a href="javascript:void(0);" class="btn btn-sm w-100 add_lesson" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Lesson</a>
            </div>
            <div class="col-4 text-center">
                <a href="javascript:void(0);" class="btn btn-sm w-100 add_topic" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Topic</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/web/syllabus_status" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Syllabus</a>
            </div>
    </div>
    <br>
    <div class="row" style="margin:0.1rem">
            <!--<div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/manage_lesson_plan" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Timetable</a>
            </div>-->
            <div class="col-12 text-center">
                <a href="<?= base_url(); ?>admin/staff/class_timetable" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Timetable</a>
            </div>
    </div>
    
    <form name="myForm" id="myForm" action="<?= base_url('admin/web/lesson_plan'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4" style="margin:0.1rem">
            <div class="col-6 py-2">
                <select name="sgsid2" id="sgsid2" class="form-control">
                    <option value="">Select Subject</option>
                    <?php foreach ($all_subjects as $subject) { ?>
                    <option value="<?= $subject->sgsid; ?>"  data-sgcsid2="<?= $subject->sgcsid; ?>" <?php if ($sgsid2 == $subject->sgsid) { echo 'selected'; } ?>><?= $subject->sgname.' - '.$subject->sname; ?></option>
                    <?php } ?>
                </select>
                <input type="hidden" name="sgcsid2" id="sgcsid2" class="form-control" value="">
            </div>
            <div class="col-6 py-2">
                <button type="submit" id="submit" class="btn btn-primary w-100" style="width:100%; height: 37px;">Submit</button>
            </div>
        </div>
    </form>
    
    <?php if (!empty($flag)) { ?>  
    <div class="row pt-4" id="rating">
            <table id="example" class="display" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th style="width:25%">Lesson</th>
                        <th style="width:25%">Topic</th>
                        <th style="width:25%">SubTopic</th>
                        <th style="width:25%">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  foreach ($lplans as $lp) { ?>
                    <tr>
                        <td><?= $lp->lname; ?></td>
                        <td><?= $lp->tname; ?></td>
                        <td><?= $lp->sub_topic; ?></td>
                        <td><?= $lp->date.'<br>'.$lp->time_from.' - '.$lp->time_to; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
    <?php } ?>
    
    
    
    <div class="alert alert-primary alert-dismissible fade" role="alert" id="success_alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <span id="success_message"></span>
    </div>

    <div class="alert alert-danger alert-dismissible fade" role="alert" id="error_alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <span id="error_message"></span>
    </div>    

<!--MODAL EXAM-->
    <form role="form" action="add_lesson"  id="add_lesson" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="add_lesson_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    
                    <div class="col-12 px-1 py-2">
                        <select name="sgsid" id="sgsid" class="form-control">
                            <option value="">Select Subject</option>
                            <?php foreach ($all_subjects as $subject) { ?>
                                <option value="<?= $subject->sgsid; ?>"  data-sgcsid="<?= $subject->sgcsid; ?>"><?= $subject->sgname.' - '.$subject->sname; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <input type="hidden" name="sgcsid" id="sgcsid" class="form-control" value="">
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="lesson_name[]" class="form-control" value="" placeholder="Lesson Title">
                    </div>
                    <span id="morelesson"></span>
                    <a href="javascript:void(0);" id="addMoreLesson"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add More</a>
                    
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_lesson" id="btn_save_lesson" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL EXAM--> 

<!--MODAL EXAM-->
    <form role="form" action="add_topic"  id="add_topic" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="add_topic_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    
                    <div class="col-12 px-1 py-2">
                        <select name="sgsid_lid" id="sgsid_lid" class="form-control">
                            <option value="">Select Subject</option>
                            <?php foreach ($all_subjects as $subject) { ?>
                                <option value="<?= $subject->sgsid; ?>"  data-sgsid_lid="<?= $subject->sgcsid; ?>"><?= $subject->sgname.' - '.$subject->sname; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <input type="hidden" name="sgcsid_lid" id="sgcsid_lid" class="form-control" value="">
                    
                    <div class="col-12 px-1 py-2">
                        <select name="lesson_id" id="lesson_id" class="form-control">
                            <option value="">Select Lesson</option>
                        </select>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="topic_name[]" class="form-control" value="" placeholder="Topic Title">
                    </div>
                    <span id="moretopic"></span>
                    <a href="javascript:void(0);" id="addMoreTopic"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add More</a>
                    
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_topic" id="btn_save_topic" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL EXAM--> 

<script type="text/javascript">
    $('#actionTop').on('click','.add_lesson',function(){
        $('#add_lesson_modal').modal('show');
    });
    $('#actionTop').on('click','.add_topic',function(){
        $('#add_topic_modal').modal('show');
    });
$(function() {
    $("#addMoreLesson").click(function(e) {
        e.preventDefault();
        $("#morelesson").append("<div class='col-12 px-1 py-2'><input type='text' name='lesson_name[]' class='form-control' value='' placeholder='Lesson Title'></div>");
    });
    $("#addMoreTopic").click(function(e) {
        e.preventDefault();
        $("#moretopic").append("<div class='col-12 px-1 py-2'><input type='text' name='topic_name[]' class='form-control' value='' placeholder='Topic Title'></div>");
    });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
    var selectElement = document.getElementById("sgsid");
    selectElement.addEventListener("change", function() {
    var selectedOption = selectElement.options[selectElement.selectedIndex];
    var sgcsidValue = selectedOption.getAttribute("data-sgcsid");
    document.getElementById('sgcsid').value = sgcsidValue;
    });
    
    var selectElement2 = document.getElementById("sgsid2");
    selectElement2.addEventListener("change", function() {
    var selectedOption2 = selectElement2.options[selectElement2.selectedIndex];
    var sgcsid2Value = selectedOption2.getAttribute("data-sgcsid2");
    document.getElementById('sgcsid2').value = sgcsid2Value;
    });
    
    var selectElementLid = document.getElementById("sgsid_lid");
    selectElementLid.addEventListener("change", function() {
    var selectedOptionLid = selectElementLid.options[selectElementLid.selectedIndex];
    var sgcsidValueLid = selectedOptionLid.getAttribute("data-sgsid_lid");
    document.getElementById('sgcsid_lid').value = sgcsidValueLid;
    });

   $('#sgsid_lid').change(function(){
        var sgsid_lid   = document.getElementById('sgsid_lid').value;
        var sgcsid_lid  = document.getElementById('sgcsid_lid').value;
        show_les();
        function show_les(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url(); ?>admin/web/get_lesson_plan_lesson_info/' + sgsid_lid + '/' + sgcsid_lid,
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].id+'"><td>'+data[i].name+'</td>';
                    }
                    $('#lesson_id').html(html);
                }
 
            });
        }
    });

    $("#btn_save_lesson").click(function(){
            event.preventDefault();
            var formval = $('#add_lesson')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_lesson_plan_lesson",
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
      
    $("#btn_save_topic").click(function(){
            event.preventDefault();
            var formval = $('#add_topic')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_lesson_plan_topic",
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
    $('table.display').DataTable({searching: false, paging: false, info: false, ordering: false});
</script> 