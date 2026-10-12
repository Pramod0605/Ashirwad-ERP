<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

        <div class="row pt-4 mg-top-90">
        </div>
        
        <form name="myForm" id="myForm" action="" class="form-horizontal" method="post" accept-charset="utf-8">    
        
        
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <input type="hidden" name="type" class="form-control" value="download">
                    <select class="form-control" name="student_id[]">
                        <option value="">Students</option>
                        <?php foreach ($all_student_info as $student) { ?>
                            <option value="<?= $student->ssid; ?>"><?= $student->admission_no.' - '.$student->firstname.' '.$student->lastname; ?></option>
                        <?php } ?>
                    </select>
                    <hr>
                    <select class="form-control" name="template_id">
                        <option value="">Template</option>
                        <?php foreach ($all_cbse_template_info as $template) { ?>
                            <option value="<?= $template->id; ?>"><?= $template->name; ?></option>
                        <?php } ?>
                    </select>
                    <hr>
                    <select class="form-control" name="type">
                        <option value="download">Download</option>
                        <option value="email">Email/Whatsapp</option>
                    </select>
                    
                </div>
            </div>
        </div>
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header">
                    <button type="submit" id="submit" class="btn-large btn-primary w-100" value="1" style="width:100%">Submit</button>
                </div>
            </div>
        </div>
        
        </form>
        
        <hr>
                    <span id="link"></span>

<script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
    event.preventDefault();
    var formval = $('#myForm')[0];
    var data = new FormData(formval);
        
    $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: "<?php echo base_url(); ?>admin/staff/printmarksheet",
        data: data,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function (data) {
            $('#link').html('<a href="'+data.fileUrl+'" class="btn-large btn-primary w-100" value="1" style="width:100%">Download</a>');
        }
    });
});
});

</script> 
