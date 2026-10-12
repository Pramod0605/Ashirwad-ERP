        <div class="row mg-top-90"></div>
        
        <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/notice_board" class="btn btn-sm w-100 category" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Notice</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/communication_logs" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Logs</a>
            </div>
        </div>
        <br>
        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/send_message'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <style>
            .or {
                border-top: 1px solid #E5E5E5;
                position: relative;
                padding: 35px 0 0;
                margin-top: 25px;
            }
            .or span {
                height: 35px;
                width: 35px;
                border-radius: 50%;
                position: absolute;
                line-height: 35px;
                top: -17.5px;
                left: 50%;
                margin-left: -17.5px;
                display: inline-block;
            }
        </style>
        
        
        <div class="row">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <select class="form-control" name="class_id" id="class_id">
                        <option value="">Class</option>
                        <?php foreach ($teachers_class as $tc) {  ?>
                            <option value="<?= $tc->class_id; ?>"><?= $tc->class; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <select class="form-control" name="section_id" id="section_id">
                        <option value="">Section</option>
                    </select>
                    <div class="or"><span>or</span></div>
                    <select class="form-control" name="student_id">
                        <option value="">Student</option>
                        <?php foreach ($all_student_info as $stu) { ?>
                            <option value="<?= $stu->student_id; ?>"><?= $stu->admission_no.' - '.$stu->firstname.' '.$stu->lastname; ?></option>
                        <?php } ?>
                    </select>
                    
                    
                </div>
            </div>
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    
                       <textarea id="editor" class="form-control" name="message" rows="5"></textarea>
                        <br>
                        <input type="text" name="temp_id" class="form-control" placeholder="Template id">
                        <br>
                        <br>
                        <input type="checkbox" name="sms" value="sms">&nbsp;<label>&nbsp;SMS&nbsp;&nbsp;</label>
                        <input type="checkbox" name="whatsapp" value="whatsapp">&nbsp;<label>&nbsp;WhatsApp&nbsp;&nbsp;</label>
                        <input type="checkbox" name="email"  id="noticeCheckbox" value="email">&nbsp;<label>&nbsp;Email&nbsp;&nbsp;</label>
                        <br>
                       <div id="hiddenDiv" style="display:none;">
                           <br>
                           <input type="file" name="file" class="form-control" placeholder="File">
                       </div>
                </div>
            </div>
        </div>
        
      
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header">
                    <button type="submit" id="submit" class="btn-large btn-primary w-100" style="width:100%">Submit</button>
                </div>
            </div>
        </div>
      
                    
        </form>


      <div class="alert alert-primary alert-dismissible fade" role="alert" id="success_alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <span id="success_message"></span>
      </div>

      <div class="alert alert-danger alert-dismissible fade" role="alert" id="error_alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <span id="error_message"></span>
      </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var noticeCheckbox = document.getElementById('noticeCheckbox');
        var hiddenDiv = document.getElementById('hiddenDiv');
        
        noticeCheckbox.addEventListener('change', function() {
            hiddenDiv.style.display = this.checked ? 'block' : 'none';
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

<script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
    event.preventDefault();
    var formval = $('#myForm')[0];
    var data = new FormData(formval);
    $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: "<?php echo base_url(); ?>admin/staff/send_message",
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
                window.setTimeout(function() {location.reload();}, 3000);
            } else {
                $('#error_message').html(response.message);
                $('#error_alert').addClass('show');
                window.setTimeout(function() {location.reload();}, 3000);
            }
        }
    });
});
});
</script>