<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

<div class="balance-area mg-top-90"></div>

    <br>    
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/approve_visit" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Approve Visitor</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/visitors" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Visitors</a>
            </div>
            
    </div>
<?php if (empty($id)) { ?>    
    <form role="form" action="<?= base_url(); ?>admin/web/save_visitor"  id="add_assess" method="post" enctype="multipart/form-data">
        <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
                    
                    <div class="col-12 px-1 py-2">
                        <label>Purpose</label>
                        <select name="purpose" class="form-control">
                            <?php foreach ($purpose as $prps) { ?>
                            <option value="<?= $prps->visitors_purpose; ?>"><?= $prps->visitors_purpose; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Meeting with</label>
                        <select name="meeting_with" id="meeting_with" class="form-control">
                            <option value="">Meeting with</option>
                            <option value="staff">Staff</option>
                            <option value="student">Student</option>
                        </select>
                    </div>
                    <span id="student" style="display:none">
                    <div class="col-12 px-1 py-2">
                        <label>Class</label>
                        <select class="form-control" name="class_id" id="class_id" required style="width: 100%">
                            <option value="">Select....</option>
                            <?php foreach ($allClsInfo as $cls) { ?>
                            <option value="<?= $cls->id ?>"><?= $cls->class?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <label>Section</label>
                        <select name="section_id" id="section_id" class="form-control" style="width: 100%" required >
                        </select>  
                        <br>
                        <label>Student</label>
                        <select name="student_id" id="student_id" class="form-control" style="width: 100%">
                        </select>
                    </div>
                    </span>
                    
                    <div id="staff" style="display:none">
                    <label>Staff</label>
                    <div class="col-12 px-1 py-2">
                        <select name="staff" class="form-control" style="width: 100%">
                            <?php foreach ($staff as $stf) { ?>
                            <option value="<?= $stf->id; ?>"><?= $stf->employee_id.' - '.$stf->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <label>Name</label>
                        <input type="text" name="visitor_name" class="form-control" value="" placeholder="Visitor Name">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Contact Number</label>
                        <input type="number" name="visitor_phone" class="form-control" value="" placeholder="Visitor Phone">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Id Proof</label>
                        <input type="text" name="id_card" class="form-control" value="" placeholder="ID Card">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Persons</label>
                        <input type="text" name="number_of_person" class="form-control" value="" placeholder="Number of Person">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" value="" placeholder="Date">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Time-in</label>
                        <input type="time" name="time_in" class="form-control" value="" placeholder="Time-in">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Time-out</label>
                        <input type="time" name="time_out" class="form-control" value="" placeholder="Time-out">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Attachment</label>
                        <input type="file" name="file" class="form-control" value="" placeholder="File">
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <label>Note</label>
                        <textarea name="note" class="form-control" placeholder="Note"></textarea>
                    </div>
                    
                                <div class="col-12 px-1 py-2">
                                    <div class="form-group">
                                        <div>
                                            <button id="start-camera" class="btn btn-sm w-100" style="background-color: #6c757d !important; color:#fff">Start Camera to take photo</button>
                                            <video id="video" width="320" height="240" autoplay></video>
                                            <button id="click-photo" class="btn btn-sm w-100" style="background-color: #6c757d !important; color:#fff">Click Photo</button>
                                            <canvas id="canvas" width="100%" height="auto"></canvas>
                                            <input class="form-control" type='hidden' name='image_data' id="image_data">
                                        </div>
                                    </div>                                    
                                </div>
                    
                    
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_assess" id="btn_save_assess" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
        </div>
    </form>
<?php } else { ?>
    
    <form role="form" action="<?= base_url(); ?>admin/web/save_visitor"  id="add_assess" method="post" enctype="multipart/form-data">
        <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
                    
                    <input type="hidden" name="vid" class="form-control" value="<?= $id; ?>" placeholder="Visit Id">
                    
                    <div class="col-12 px-1 py-2">
                        <select name="purpose" class="form-control">
                            <?php foreach ($purpose as $prps) { ?>
                            <option value="<?= $prps->visitors_purpose; ?>"><?= $prps->visitors_purpose; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <select name="meeting_with" id="meeting_with" class="form-control">
                            <option value="">Meeting with</option>
                            <option value="staff" <?php if ($vinfo->meeting_with == 'staff') { echo 'selected'; } ?>>Staff</option>
                            <option value="student" <?php if ($vinfo->meeting_with == 'student') { echo 'selected'; } ?>>Student</option>
                        </select>
                    </div>
                    <div id="student" style="display:none">
                    <div class="col-12 px-1 py-2">
                        <select class="form-control" name="class_id" id="class_id" required>
                            <option value="">Select....</option>
                            <?php foreach ($allClsInfo as $cls) { ?>
                            <option value="<?= $cls->id ?>"><?= $cls->class?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <select name="section_id" id="section_id" class="form-control" style="width: 100%" required >
                        </select>  
                        
                        <select name="student_id" id="student_id" class="form-control">
                        </select>
                    </div>
                    </div>
                    
                     <div id="staff" style="display:none">
                    <div class="col-12 px-1 py-2">
                        <select name="staff" class="form-control">
                            <?php foreach ($staff as $stf) { ?>
                            <option value="<?= $stf->id; ?>" <?php if ($vinfo->staff_id == $stf->id) { echo 'selected'; } ?>><?= $stf->employee_id.' - '.$stf->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <label>Visitor name</label>
                        <input type="text" name="visitor_name" class="form-control" value="<?= $vinfo->name; ?>" placeholder="Visitor Name">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Contact number</label>
                        <input type="number" name="visitor_phone" class="form-control" value="<?= $vinfo->contact; ?>" placeholder="Visitor Phone">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Id proof</label>
                        <input type="text" name="id_card" class="form-control" value="<?= $vinfo->id_proof; ?>" placeholder="ID Card">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Persons</label>
                        <input type="text" name="number_of_person" class="form-control" value="<?= $vinfo->no_of_people; ?>" placeholder="Number of Person">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" value="<?= $vinfo->date; ?>" placeholder="Date">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Time-in</label>
                        <input type="time" name="time_in" class="form-control" value="<?= $vinfo->in_time; ?>" placeholder="Time-in">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Time-out</label>
                        <input type="time" name="time_out" class="form-control" value="<?= $vinfo->out_time; ?>" placeholder="Time-out">
                    </div>
                    
                    <div class="col-12 px-1 py-2">
                        <label>Note</label>
                        <textarea name="note" class="form-control" placeholder="Note"><?= $vinfo->note; ?></textarea>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Approval</label>
                        <select name="meeting_approval" id="meeting_approval" class="form-control">
                            <option value="0">Pending</option>
                            <option value="1">Approved</option>
                            <option value="2">Rejected</option>
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
    
<script>
document.getElementById('meeting_with').addEventListener('change', function() {
    var selectedOption = this.value;
    var option1Div = document.getElementById('staff');
    var option2Div = document.getElementById('student');

    if (selectedOption === 'staff') {
      document.getElementById("staff").style.display="block"
      document.getElementById("student").style.display="none"
    } else if (selectedOption === 'student') {
      document.getElementById("staff").style.display="none"
      document.getElementById("student").style.display="block"
    }
});
  
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
    
    $("#section_id").change(function(){
      var class_id = document.getElementById('class_id').value;
      var section_id = document.getElementById('section_id').value;
        show_product();
        function show_product(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url(); ?>admin/dashboard/getClassSectionStudent/' + class_id + '/' + section_id,
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].ssid+'">'+data[i].admission_no+' - '+data[i].firstname+'</option>';
                    }
                    $('#student_id').html(html);
                }
 
            });
        }
    });
});
</script>

<script>
let camera_button = document.querySelector("#start-camera");
let video = document.querySelector("#video");
let click_button = document.querySelector("#click-photo");
let canvas = document.querySelector("#canvas");
camera_button.addEventListener('click', async function() {
   	let stream = await navigator.mediaDevices.getUserMedia({ video: {facingMode: 'environment'}, audio: false });
	video.srcObject = stream;
});
click_button.addEventListener('click', function() {
   	canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
   	let image_data_url = canvas.toDataURL('image/jpeg');
    document.getElementById("image_data").value = image_data_url;
});
</script>
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
            url: "<?php echo base_url(); ?>admin/web/save_visitor",
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