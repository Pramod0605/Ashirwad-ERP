        <div class="row pt-4 mg-top-90">
        </div>
        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_ptm'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        
        
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <input type="text" name="ptm_title" class="form-control" value="" placeholder="Title">
                    <br>
                    <br>
                    <input type="date" name="from_date" class="form-control" value="" placeholder="From Date">
                    <!--<br>-->
                    <!--<br>-->
                    <!--<input type="date" name="to_date" class="form-control" value="" placeholder="To Date">-->
                    <br>
                    <br>
                    <p>Time Slow</p>
                    <input type="time" name="from_time[]" class="form-control" value="" placeholder="Slot Time">
                    <br>
                    <input type="time" name="to_time[]" class="form-control" value="" placeholder="Slot Time">
                    <br>
                    <div id="newinput"></div>
                    <button id="rowAdder" type="button" class="btn btn-dark"><span class="bi bi-plus-square-dotted"></span>Add More Slot</button>
                    <br>
                    <br>
                    <textarea name="remark" class="form-control" value="" placeholder="Remark"></textarea>
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
        $("#rowAdder").click(function () {
            newRowAdd =
                '<p>Time Slow</p><input type="time" name="from_time[]" class="form-control" value="" placeholder="Slot Time"><br>' +
                '<input type="time" name="to_time[]" class="form-control" value="" placeholder="Slot Time"><br>';
 
            $('#newinput').append(newRowAdd);
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
        url: "<?php echo base_url(); ?>admin/staff/save_ptm",
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