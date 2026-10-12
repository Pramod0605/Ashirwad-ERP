<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    <div class="balance-area mg-top-90"></div>
        <div class="container rounded">
            <a href="javascript:void(0)" class="change_cs" data-toggle="modal" data-target="#change_cs">
            <img src="<?= base_url(); ?>public/style/img/dash-top.jpg" alt="img" class="rounded">
            </a>
        </div>
    
        
        <!--<a class="active btn btn-primary"  data-toggle="modal" data-target="#change_cs" href="javascript:void(0);" style="width:100%;">Choose Class & Section</a>-->
        
        <?php if (session('isSectionIn') == true || session('isAdmin') == true || session('isTechr') == true) { ?>
        
        <div class="row pt-4">
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/staff/student_attendance" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/attendance-2.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Attendance</p>
                </a>
            </div>
        
            
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/staff/student_dues" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/dues.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Dues</p>
                </a>
            </div>
            
         
            
             <div class="col-3 text-center">
                 <a href="<?= base_url(); ?>admin/staff/class_timetable" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/calendar.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Timetable</p>
                </a>
            </div>
            
            
            
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/staff/approve_leave" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/leave-2.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Leave</p>
                </a>
            </div>
            
        
        </div>
         
        <div class="row pt-3">    
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/staff/assessment" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/assessment.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Assessment</p>
                </a>
            </div>
            
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/web/lesson_plan" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/attendance.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Lesson Plan</p>
                </a>
            </div>
            
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/staff/homework" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/homework.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Homework</p>
                </a>
            </div>
            
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/staff/content" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/content.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Content</p>
                </a>
            </div>
            
        </div>
        <div class="row pt-3">    
        
        <?php if (session('isSectionIn') == true || session('isAdmin') == true) { ?>
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/staff/student_behaviour" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/timetable.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Student Behavior</p>
                </a>
            </div>
            <div class="col-3 text-center">
                <a href="#qr-auth" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/qr.png" style="width:50px; height:50px;"></p>
                <p class="text-center">QR Attendance</p>
                </a>
            </div>
            <div class="col-3 text-center">
                <a href="#face_attendance?staff_id=<?= session('userid') ?>&class_id=<?= session('class_id') ?>&section_id=<?= session('section_id') ?>&session_id=<?= site_info()['active_session'] ?>" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/face-recognition-sm.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Face Attendance</p>
                </a>
            </div>
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/staff/face_auth/staff_id=<?= session('userid') ?>&class_id=<?= session('class_id') ?>&section_id=<?= session('section_id') ?>&session_id=<?= site_info()['active_session'] ?>" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/face-recognition.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Face Auth</p>
                </a>
            </div>
        <?php } ?>    
        </div>
        
        <div class="row pt-3">    
        
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/staff/students_progress" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/board-icon.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Student Progress</p>
                </a>
            </div>
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/staff/ptm" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/school-icon.png" style="width:50px; height:50px;"></p>
                <p class="text-center">PTM</p>
                </a>
            </div>
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/staff/communication" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/content.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Communication</p>
                </a>
            </div>
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/web/exam" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/attendance.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Exam</p>
                </a>
            </div>
            
        </div>
    <?php } ?>
    
        <div class="row pt-3">    
        
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/web/online_course" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/content.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Online Courses</p>
                </a>
            </div>
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/web/live_classes" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/homework.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Live Classes</p>
                </a>
            </div>
            
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/web/hostel" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/school-icon.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Hostel</p>
                </a>
            </div>
            
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/web/reports" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/add-leads.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Reports</p>
                </a>
            </div>
            
        </div>
        
        <div class="row pt-3">    
        <?php if (session('isRcptn') == true || session('isAdmin') == true) { ?>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/library" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/add-campaign.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Library</p>
                </a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/frontdesk" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/board-icon.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Frontdesk</p>
                </a>
            </div>
        <?php } ?>
        
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/staff/leads" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/add-leads.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Leads</p>
                </a>
            </div>
            
        </div>
        
        
        <div class="row pt-4">
            <div class="card card-primary" style="padding-left:0px !important; padding-right:0px !important; margin-left:0px !important; margin-right:0px !important">
                <div class="card-header">
                    <span class="float-left text-sm"><?= date("d M Y"); ?></span>
                    <span class="float-right text-sm text-right" style="float: right;">Timetable</span>
                    <br>
                    <a href="#" class="btn btn-secondary btn-lg disabled w-100" role="button" aria-disabled="true" style="text-align: left; padding:0; font-size:14px;border-radius: 0.2rem">&ensp;Time&ensp; &ensp; &ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Class</a>
                </div>
            </div>
        </div>
        
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div id="content">
                        <ul class="timeline">
                            <?php foreach ($todays_timetable_info as $tt) { ?>
                            <li class="event" data-date="<?= $tt->time_from ?>" >
                                <p><?= $tt->time_from.' To '.$tt->time_to.'<br>'.$tt->name.'<hr>'.$tt->class.' '.$tt->section ?></p>
                            </li>
                             <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<form role="form" action="cs_action"  id="cs_action" method="post" enctype="multipart/form-data">    
<div class="modal fade" id="change_cs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align:center">Choose Class & Section</h5>
      </div>
      <div class="modal-body">
            <select class="form-control" name="class_id" id="class_id" required>
                <option value="">Select....</option>
                <?php  foreach ($allClsInfo as $cls) { ?>
                <option value="<?= $cls->id ?>"><?= $cls->class?></option>
                <?php } ?>
            </select>
            <hr>
            <select name="section_id" id="section_id" class="form-control" style="width: 100%" required >
            </select>  
      </div>
      <div class="modal-footer">
        <button type="button" type="submit" name="btn_cs_action" id="btn_cs_action" class="btn btn-primary w-100 action">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>
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
<script type="text/javascript">
 $(document).ready(function(){
$("#btn_cs_action").click(function(){
            event.preventDefault();
            var formval = $('#cs_action')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/dashboard/updateClassSection",
            dataType: 'json',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(response) {
            window.setTimeout(function() {location.reload();}, 100);
            }
        });
      });
    });
</script>