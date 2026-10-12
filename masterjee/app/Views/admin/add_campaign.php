<script src="https://cdn.tiny.cloud/1/bqeswt7khurrtgyg4kcadonsec1iq5r48tcew3g7x0y8sbx7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea#editor',
    });
</script>
        <div class="row pt-4 mg-top-90">
        </div>
        
    <div class="row" style="margin:0.1rem">
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/leads" class="btn btn-sm w-100 exam" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>All</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/campaigns" class="btn btn-sm w-100 exam" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>Campaign</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/taken_leads" class="btn btn-sm w-100 terms" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>Leads</a>
            </div>
    </div>
    <div class="row" style="margin:0.1rem; padding-top:10px">
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/followups" class="btn btn-sm w-100" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>Followups</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/walkin_leads" class="btn btn-sm w-100" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>Walk-in</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/missed" class="btn btn-sm w-100" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>Missed</a>
            </div>
    </div>
        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_user_campaign'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        
<script>
    $(document).ready(function() {
        togglePromoterDiv();
        $('#ct_id').change(function() {
            togglePromoterDiv();
        });
        
        function togglePromoterDiv() {
            var selectedOption = $('#ct_id option:selected');
            var campaignType = selectedOption.data('title');
            if (campaignType === 'Promoters') {
                $('#promoter').show();
            } else {
                 $('#promoter').val('').hide();
            }
        }
    });
</script>        
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <br>
                    <br>
                    <select name="ct_id" id="ct_id" class="form-control">
                        <option value="">Select Camp Type</option>
                        <?php foreach ($campType as $ct) { ?>
                        <option data-title="<?= $ct->ct_title; ?>" value="<?= $ct->ct_id; ?>"><?= $ct->ct_title; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <div id="promoter">
                    <select name="cp_id" id="cp_id" class="form-control">
                        <option value="">Select Promoter</option>
                        <?php foreach ($promoters as $prm) { ?>
                        <option value="<?= $prm->cp_id; ?>"><?= $prm->promoter_name; ?></option>
                        <?php } ?>
                    </select>
                    </div>
                    <br>
                    <input type="text" name="c_title" class="form-control" value="" placeholder="Title">
                    <br>
                    <textarea name="c_description" class="form-control" value="" placeholder="Description"></textarea>
                    <br>
                    <br>
                    <button type="submit" id="submit" class="btn-large btn-primary w-100" style="width:100%">Save</button>
                    <br>
                    <br>
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
$("#submit").click(function(){
    event.preventDefault();
    var formval = $('#myForm')[0];
    var data = new FormData(formval);
    $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: "<?php echo base_url(); ?>admin/staff/save_user_campaign",
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