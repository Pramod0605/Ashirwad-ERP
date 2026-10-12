<script src="https://cdn.tiny.cloud/1/bqeswt7khurrtgyg4kcadonsec1iq5r48tcew3g7x0y8sbx7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#editor',
    });
</script>
        <div class="row pt-4 mg-top-90"></div>
        <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/assigments_list" class="btn btn-sm w-100 category" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Assignments</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/homework_list" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Homework</a>
            </div>
        </div>
        <br>
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_homework'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        
        
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <select class="form-control" name="subject_id">
                        <option value="">Subject</option>
                        <?php foreach ($subjects as $sub) { ?>
                            <option value="<?= $sub->subject_id; ?>" data-subject_group_id="<?= $sub->subject_group_id; ?>" data-subject_group_subject_id="<?= $sub->subject_group_subject_id; ?>" data-subject_id="<?= $sub->subject_id; ?>"><?= $sub->name; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <br>
                    <label>Homework Date</label>
                    <input type="date" name="homework_date" class="form-control" value="" placeholder="Homework Date">
                    <br>
                    <br>
                    <label>Submission Date</label>
                    <input type="date" name="submission_date" class="form-control" value="" placeholder="Submission Date">
                    <br>
                    <br>
                    
                    <input type="number" name="max_marks" class="form-control" value="" placeholder="Max Marks">
                    <br>
                    <br>
                    
                    <input type="file" name="attach_file" class="form-control" value="" placeholder="Attach Document">
                    <br>
                    <br>
                    
                    <textarea id="editor" class="form-control" name="description"></textarea>
                    
                </div>
            </div>
        </div>
        <hr>
        
        
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

<script type="text/javascript">
$(document).ready(function(){
    $("#submit").click(function(event){
        event.preventDefault();
        
        var formval                 = $('#myForm')[0];
        var data                    = new FormData(formval);
        
        var subjectSelect           = $('select[name="subject_id"]');
        var selectedOption          = subjectSelect.find(':selected');
        
        var subjectGroupId          = selectedOption.data('subject_group_id');
        var subjectGroupSubjectId   = selectedOption.data('subject_group_subject_id');
        var subjectId               = selectedOption.data('subject_id');
        
        data.append('subject_group_id', subjectGroupId);
        data.append('subject_group_subject_id', subjectGroupSubjectId);
        data.append('subject_id', subjectId);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/staff/save_homework",
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
