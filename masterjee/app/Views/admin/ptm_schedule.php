<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<style>
th, td {
  border: 1px solid #dfdfdf;
  height: 40px;
  padding:10px;
}
</style>
        <div class="row pt-4 mg-top-90">
        </div>
        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_ptm_schedule'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        
        
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <select class="form-control" name="ptm_id" id="ptm_id">
                        <option value="">Select PTM....</option>
                        <?php foreach ($all_upcoming_ptm as $ptm) { ?>
                            <option value="<?= $ptm->ptm_id; ?>"><?= $ptm->ptm_title.' '.$ptm->from_date.' - '.$ptm->to_date; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <br>
                    <select class="form-control" name="pts_id" id="pts_id">
                        <option value="">Select Slot....</option>
                    </select>
                    <br>
                    <br>
                    <input type="number" id="roll_no_from" class="form-control" value="<?php if (!empty($rollnofrom)) { echo $rollnofrom; } ?>" placeholder="Roll No From ">
                    <br>
                    <br>
                    <input type="number" id="roll_no_to" class="form-control" value="<?php if (!empty($rollnoto)) { echo $rollnoto; } ?>" placeholder="Roll No To ">
                    
                </div>
            </div>
        </div>
        <hr>
        
                    <div class="row pt-4 mg-top-90">
                        <div class="card" style="background: unset !important; border:unset !important;">
                        <div class="card-header bg-cyan">
                        <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                            <thead>
                                <tr>
                                    <th style="width:50%; text-align:left !important"><input type="checkbox" class="checkBoxClass" onchange="checkAll(this)" name="chk[]" data-value="0"></th>
                                    <th style="width:50%; text-align:left !important">Student</th>
                                </tr>
                            </thead>
                            <tbody id="show_data">
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
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
<script>
    function checkAll(ele) {
     var checkboxes = document.getElementsByTagName('input');
     if (ele.checked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             console.log(i)
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
             }
         }
     }
 }
</script>

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
      $("#ptm_id").change(function(){
      var ptm_id = document.getElementById('ptm_id').value;
        show_slot();
        function show_slot(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url(); ?>admin/staff/ptm_time_slot/' + ptm_id,
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].pts_id+'">'+data[i].time_from+' - '+data[i].time_to+'</option>';
                    }
                    $('#pts_id').html(html);
                }
            });
        }
     });
    });
</script>

<script type="text/javascript">
    $("#roll_no_to").change(function(){
        var roll_no_from = document.getElementById('roll_no_from').value;
        var roll_no_to   = document.getElementById('roll_no_to').value;
        show_students();
        function show_students(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url(); ?>admin/staff/class_students_info',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        
                        if (data[i].roll_no >= roll_no_from && data[i].roll_no <= roll_no_to) {
                        html += '<tr>'+
                                 '<td><input type="checkbox" class="checkBoxClass" name="student_id[]" value="'+data[i].student_id+'" "></td>'+
                                 '<td>'+data[i].admission_no+' - '+data[i].firstname+' '+data[i].lastname+'</td>'+
                                 '</tr>';
                        }
                    }
                    $('#show_data').html(html);
                }
            });
        }
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
        url: "<?php echo base_url(); ?>admin/staff/save_ptm_schedule",
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