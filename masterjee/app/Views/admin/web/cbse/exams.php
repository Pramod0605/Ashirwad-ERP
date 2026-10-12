

    <div class="balance-area mg-top-90"></div>
        
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-3 text-center">
                <a href="javascript:void(0);" class="btn btn-sm w-100 exam" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Exam</a>
            </div>
            <div class="col-3 text-center">
                <a href="javascript:void(0);" class="btn btn-sm w-100 terms" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Terms</a>
            </div>
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/web/assessment" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Assessment</a>
            </div>
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/web/grades" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Grades</a>
            </div>
    </div>
    <div class="row py-2" style="margin:0.1rem">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/ex_observation" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Observation</a>
            </div>
            
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/ex_schedule" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Schedule</a>
            </div>
    </div>
        
        <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
            <table class="table">
                <tbody>
                    <?php 
                    $i = 0;
                    foreach ($cbseExams as $exam) { 
                    $i += 1;
                    ?>
                    <tr style="border-bottom:hidden;">
                        <td colspan="3" style="width:50%; text-align:lett"><span class="badge" style="background-color: #6c757d;"><?= $exam->ename; ?></span></td>
                        <td colspan="3" style="width:50%; text-align:right"><span class="badge" style="background-color: #6c757d;"><?= $exam->tname; ?></span></td>
                    </tr>
                    <tr style="border-top:hidden;border-bottom:hidden;">
                        <td colspan="6" style="width:100%"><?= $exam->ced; ?></td>
                    </tr>
                    <tr style="border-top:hidden">
                        <td style="width:16.66%"><a href="javascript:void(0);" class="add_stu" data-exam_id="<?= $exam->ceid ?>"><i class="fa fa-tag" aria-hidden="true"></i></a></td>
                        <td style="width:16.66%"><a href="<?= base_url(); ?>admin/web/add_exam_subject/<?= $exam->ceid; ?>"><i class="fa fa-book" aria-hidden="true"></i></a></td>
                        <td style="width:16.66%"><a href="javascript:void(0);" class="add_scr" data-sbexam_id="<?= $exam->ceid ?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i></a></td>
                        <td style="width:16.66%"><a href="javascript:void(0);" class="add_attendance" data-stexam_id="<?= $exam->ceid ?>"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></a></td>
                        <td style="width:16.66%"><a href="javascript:void(0);" class="generate_rank" data-rexam_id="<?= $exam->ceid ?>"><i class="fa fa-list-alt" aria-hidden="true"></i></a></td>
                        <td style="width:16.66%"><i class="fa fa-trash" aria-hidden="true"></i></td>
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
    <form role="form" action="add_exam"  id="add_exam" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="add_exam_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    
                    <div class="col-12 px-1 py-2">
                        <select name="term" class="form-control" name="class_id" id="class_id">
                            <option value="">Select Class</option>
                            <?php foreach ($allClsInfo as $cls) { ?>
                            <option value="<?= $cls->id ?>"><?= $cls->class?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <select name="section_id" id="section_id" class="form-control" style="width: 100%" required ></select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <select name="term" class="form-control" value="">
                            <option value="">Select Term</option>
                            <?php foreach ($cbseTerms as $term) { ?>
                            <option value="<?= $term->id; ?>"><?= $term->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <select name="assessment" class="form-control" value="">
                            <option value="">Select Assessment</option>
                            <?php foreach ($cbseAsses as $assess) { ?>
                            <option value="<?= $assess->id; ?>"><?= $assess->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <select name="grade" class="form-control" value="">
                            <option value="">Select Grade</option>
                            <?php foreach ($cbseGrades as $grade) { ?>
                            <option value="<?= $grade->id; ?>"><?= $grade->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="exam_name" class="form-control" value="" placeholder="Exam name">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <textarea name="description" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" name="publish" id="publish" class="custom-control-input custom-control-input-info custom-control-input-outline" value="1">
                            <label for="leave_action_approve" class="custom-control-label">Publish</label>
                        </div>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_exam" id="btn_save_exam" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL EXAM-->  

<!--MODAL TERM-->
    <form role="form" action="add_term"  id="add_term" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="add_term_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="term_name" class="form-control" value="" placeholder="Term name">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="term_code" class="form-control" value="" placeholder="Term code">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <textarea name="term_description" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_term" id="btn_save_term" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL TERM-->  

<!--MODAL ASSES-->
    <form role="form" action="add_student"  id="add_student" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="add_student_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    <span id="examData"></span>
                    <div class="col-12 px-1 py-2 table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                                <th style="width:30%"><input class="checkAll" type="checkbox" onclick='selects()'>All</th>
                                <th style="width:70%">Student</th>
                            </tr>
                        </thead>
                        <tbody id="studentTableBody">
                            <!-- Student rows will be injected here -->
                        </tbody>
                        </table>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_assign_stu" id="btn_assign_stu" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL ASSES-->  

<!--MODAL ASSES-->
    <form role="form" action="add_score"  id="add_score" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="add_score_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    <div class="col-12 px-1 py-2 table-responsive" id="examScData">
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL ASSES-->  

<!--MODAL ASSES-->
    <form role="form" action="add_attendance"  id="add_attendance" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="add_attendance_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    <div class="col-12 px-1 py-2 table-responsive" id="examStuAtnData">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_stu_atnd" id="btn_stu_atnd" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL ASSES-->  


<script type="text/javascript">
    $('#actionTop').on('click','.exam',function(){
        $('#add_exam_modal').modal('show');
    });
</script>
<script type="text/javascript">
    $('#actionTop').on('click','.terms',function(){
        $('#add_term_modal').modal('show');
    });
</script>

<script type="text/javascript">
    $('#camp').on('click', '.add_stu', function() {
        var exam_id = $(this).data('exam_id');
        var html = '<input type="hidden" class="form-control" value="' + exam_id + '" id="examId" name="examId">';

        $('#examData').html(html);
        
        // AJAX call to fetch students based on the selected exam_id
        $.ajax({
            url: '<?= base_url(); ?>admin/web/get_students_by_exam', // Adjust the URL to your actual endpoint
            type: 'POST',
            data: { exam_id: exam_id },
            success: function(response) {
                // Assuming response contains an array of student data
                var students = JSON.parse(response); // Adjust parsing as necessary
                var tbody = '';

                $.each(students, function(index, student) {
                    tbody += '<tr>';
                    tbody += '<td><input type="checkbox" name="stuIds[]" value="' + student.ssid + '"></td>';
                    tbody += '<td>' + student.admission_no + ' ' + student.firstname + ' ' + student.lastname + '</td>';
                    tbody += '</tr>';
                });

                // Update the table body with the fetched students
                $('#studentTableBody').html(tbody);
            },
            error: function(xhr, status, error) {
                console.error('Error fetching students:', error);
            }
        });

        $('#add_student_modal').modal('show');
    });
</script>

<script type="text/javascript">
    $('#camp').on('click','.add_scr',function(){
        var exam_id = $(this).data('sbexam_id');
        show_es();
        function show_es(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url(); ?>admin/web/all_exam_subjects_info/' + exam_id,
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '<table class="table">';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr><td>'+data[i].name+'</td>'+
                                '<td>'+data[i].date+'</td>'+
                                '<td><a href="<?= base_url(); ?>admin/web/add_score/'+exam_id+'/'+data[i].subject_id+'"><i class="fa fa-newspaper-o" aria-hidden="true"></i></a></td></tr>';
                    }
                    html += '<table>';
                    html += '<input type="hidden" class="form-control" value="'+exam_id+'" id="scexamId" name="scexamId">';
                    $('#examScData').html(html);
                }
 
            });
        }
        
        $('#add_score_modal').modal('show');
    });
</script>


<script type="text/javascript">
    $('#camp').on('click','.add_attendance',function(){
        var exam_id = $(this).data('stexam_id');
        show_est();
        function show_est(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url(); ?>admin/web/all_exam_students_info/' + exam_id,
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '<input type="number" class="form-control" name="etdays" placeholder="Total Attendance Days">';
                        html += '<table class="table"><tr><th>Student</th><th>Total Present</th></tr>';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr><input type="hidden" class="form-control" value="'+data[i].esid+'" name="esid[]"><td>'+data[i].firstname+' - '+data[i].firstname+' - '+data[i].father_name+'</td>'+
                                '<td><input type="number" class="form-control" name="esatnd[]"></tr>';
                    }
                    html += '<table>';
                    html += '<input type="hidden" class="form-control" value="'+exam_id+'" id="stexamId" name="stexamId">';
                    
                    $('#examStuAtnData').html(html);
                }
 
            });
        }
        
        $('#add_attendance_modal').modal('show');
    });
</script>


<script type="text/javascript">
    $('#camp').on('click','.generate_rank',function(){
        var exam_id = $(this).data('rexam_id');
        generate_rank();
        function generate_rank(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url(); ?>admin/web/generate_rank/' + exam_id,
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

<script type="text/javascript">
 $(document).ready(function(){
$("#btn_save_exam").click(function(){
            event.preventDefault();
            var formval = $('#add_exam')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_exam",
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
$("#btn_save_term").click(function(){
            event.preventDefault();
            var formval = $('#add_term')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_term",
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
    function selects(){  
        var ele=document.getElementsByName('stuIds[]');  
        for(var i=0; i<ele.length; i++){  
            if(ele[i].type=='checkbox')  
            ele[i].checked=true;  
        }  
    }         
</script>  
        
<script type="text/javascript">
 $(document).ready(function(){
$("#btn_assign_stu").click(function(){
            event.preventDefault();
            var formval = $('#add_student')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/assign_student",
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
$("#btn_stu_atnd").click(function(){
            event.preventDefault();
            var formval = $('#add_attendance')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/add_exam_attendance",
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
      $("#class_id").change(function(){
      var class_id = document.getElementById('class_id').value;
        show_product();
        function show_product(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url(); ?>admin/dashboard/getClassSection/' + class_id,
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].section_id+'">'+data[i].section+'</option>';
                    }
                    $('#section_id').html(html);
                }
 
            });
        }
     });
    });
</script>