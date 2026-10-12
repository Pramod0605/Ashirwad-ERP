<script src="https://cdn.tiny.cloud/1/ccrm9a53dmgaftkxw21z7kke0dfvgnuqe0v5co5xlftlqq33/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

        <div class="row" style="padding-top: 100px;"></div>
        
        <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/notice_board" class="btn btn-sm w-100 category" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Notice</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/communication" class="btn btn-sm w-100 category" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Communication</a>
            </div>
        </div>
        <br>
        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/send_notice'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
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
                    
                        <textarea id="summernote" class="form-control" name="message" rows="5"></textarea>
                        <br>
                        <input type="text" name="title" class="form-control" placeholder="Title">
                        <br>
                        <br>
                        <input type="date" name="notice_date" class="form-control" placeholder="Notice date">
                        <br>
                        <br>
                        <input type="date" name="publish_date" class="form-control" placeholder="Publish date">
                        <br>
                        <br>
                        <input type="file" name="file" class="form-control" placeholder="File">
                        <br>
                        <br>
                        <input type="checkbox" name="teacher" value="Yes">&nbsp;<label>&nbsp;Teacher&nbsp;&nbsp;</label>
                        <input type="checkbox" name="parent" value="Yes">&nbsp;<label>&nbsp;Parent&nbsp;&nbsp;</label>
                        <input type="checkbox" name="student" value="Yes">&nbsp;<label>&nbsp;Student&nbsp;&nbsp;</label>
                        <br>
                        <br>
                        <button type="submit" id="submit" class="btn-large btn-primary w-100" style="width:100%; background-color:#189C07">Submit</button>
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
      tinymce.init({
        selector: '#summernote'
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
        url: "<?php echo base_url(); ?>admin/staff/send_notice",
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