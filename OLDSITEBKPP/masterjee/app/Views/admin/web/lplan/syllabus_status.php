<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <div class="balance-area mg-top-90"></div>
    <br>    
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-12 text-center">
                <a href="<?= base_url(); ?>admin/web/lesson_plan" class="btn btn-sm w-100 add_topic" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Lesson Plan</a>
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
    
    <form name="myForm" id="myForm" action="<?= base_url('admin/web/syllabus_status'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4" style="margin:0.1rem">
            <div class="col-6 py-2">
                <select name="sgsid" id="sgsid" class="form-control">
                    <option value="">Select Subject</option>
                    <?php foreach ($all_subjects as $subject) { ?>
                    <option value="<?= $subject->sgsid; ?>"  data-sgcsid="<?= $subject->sgcsid; ?>"><?= $subject->sgname.' - '.$subject->sname; ?></option>
                    <?php } ?>
                </select>
                <input type="hidden" name="sgcsid" id="sgcsid" class="form-control" value="">
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
                        <th>Lesson</th>
                        <th>
                            <table class="display" style="width:100%; text-align:left !important">
                                <tbody>
                                <tr>
                                    <th style="width:60%">Topic</th>
                                    <th style="width:20%">Complete Date</th>
                                    <th style="width:20%">Status</th>
                                </tr>
                                </tbody>
                            </table>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php  foreach ($lessons as $lesson) { 
                        $topics = $StaffModel->all_topic_by_lesson($lesson->id);
                        
                    ?>
                    <tr>
                        <td><?= $lesson->name; ?></td>
                        <td>
                            <table class="display" style="width:100%; text-align:left !important">
                                <tbody>
                                <?php foreach ($topics as $topic) { ?>
                                <tr>
                                    <td style="width:60%"><?= $topic->name; ?></td>
                                    <td style="width:20%"><?= $topic->complete_date; ?></td>
                                    <td style="width:20%"><a href="javascript:void(0);" class="update" data-tid="<?= $topic->id ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </td>
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
    <form role="form" action="update_topic_status"  id="update_topic_status" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="update_topic_status_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    <span id="topicData"></span>
                    
                    <div class="col-12 px-1 py-2">
                        <input type="date" name="date" class="form-control" value="" placeholder="Complete Date">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_topic_status" id="btn_save_topic_status" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL EXAM--> 

<script type="text/javascript">
    $('#example').on('click','.update',function(){
        var tid = $(this).data('tid');
        var html = '<input type="hidden" class="form-control" value="'+tid+'" id="topicId" name="topicId">';
        $('#topicData').html(html);
        
        $('#update_topic_status_modal').modal('show');
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
    $("#btn_save_topic_status").click(function(){
            event.preventDefault();
            var formval = $('#update_topic_status')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_update_topic_status",
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