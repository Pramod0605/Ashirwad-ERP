<script src="https://cdn.tiny.cloud/1/bqeswt7khurrtgyg4kcadonsec1iq5r48tcew3g7x0y8sbx7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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

<?php if (empty($lid)) { ?>        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_user_lead'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        
        
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    
                    <label>Campaign</label>
                    <br>
                    <select class="form-control" name="c_id" required>
                        <option value="">Select Campaign</option>
                        <?php foreach ($usersCamp as $uc) { ?>
                        <option value="<?= $uc->c_id; ?>"><?= $uc->c_title; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    
                    <li class="list-group-item listnoback">
                        <a href="javascript:void(0);" id="import" class="btn btn-primary w-100 import">Import Leads</a>
                    </li>
                    <br>
                    <br>
                    <br>
                    <br>
                    
                    <input type="text" name="l_name" class="form-control" value="" placeholder="Name">
                    <br>
                    <select class="form-control" name="l_gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <br>
                    <input type="date" name="l_dob" class="form-control" value="">
                     <br>
                    <input type="text" name="l_caste" class="form-control" value="" placeholder="Caste">
                     <br>
                    <input type="text" name="l_sub_caste" class="form-control" value="" placeholder="Sub Caste">
                     <br>
                    <input type="text" name="l_aadhar_no" class="form-control" value="" placeholder="Aadhar No">
                     <br>
                    <input type="text" name="l_blood_group" class="form-control" value="" placeholder="Blood Group">
                     <br>
                    <input type="text" name="l_religion" class="form-control" value="" placeholder="Religion">
                    <br>
                    <input type="text" name="l_mother_tongue" class="form-control" value="" placeholder="Mother Tongue">
                    <br>
                    <input type="text" name="l_father_name" class="form-control" value="" placeholder="Father Name">
                    <br>
                    <input type="text" name="l_father_phone" class="form-control" value="" placeholder="Father Phone">
                    <br>
                    <input type="text" name="l_father_qualification" class="form-control" value="" placeholder="Father Occupation">
                    <br>
                    <input type="text" name="l_mother_name" class="form-control" value="" placeholder="Mother Name">
                    <br>
                    <input type="text" name="l_mother_phone" class="form-control" value="" placeholder="Mother Phone">
                    <br>
                    <input type="text" name="l_mother_qualification" class="form-control" value="" placeholder="Mother Qualification">
                    <br>
                    <input type="text" name="l_guradian_name" class="form-control" value="" placeholder="Guardian Name">
                    <br>
                    <input type="text" name="l_guardian_phone" class="form-control" value="" placeholder="Guardian Phone">
                    <br>
                    <input type="text" name="l_class" class="form-control" value="" placeholder="Class">
                    <br>
                    <input type="text" name="l_enrolled_course" class="form-control" value="" placeholder="Course">
                    <br>
                    <input type="text" name="l_elective_subjects" class="form-control" value="" placeholder="Subjects">
                    <br>
                    <input type="text" name="l_address" class="form-control" value="" placeholder="Address">
                    <br>
                    <input type="text" name="l_location" class="form-control" value="" placeholder="Location">
                    <br>
                    <input type="number" name="l_phone_number" class="form-control" value="" placeholder="Phone Number">
                    <br>
                    <input type="number" name="l_alternative_phone" class="form-control" value="" placeholder="Alternative Phone Number">
                    <br>
                    <input type="number" name="l_emergency_contact_no" class="form-control" value="" placeholder="Emergency Phone Number">
                    <br>
                    <input type="text" name="l_email" class="form-control" value="" placeholder="Email">
                    <br>
                    <input type="text" name="l_source" class="form-control" value="" placeholder="Source">
                    <br>
                    <label>Resource</label>
                    <br>
                    <select class="form-control" name="l_resources" required>
                        <option value="">Select Resource</option>
                        <?php foreach ($sourceInfo as $si) { ?>
                        <option value="<?= $si->source; ?>"><?= $si->source; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <button type="button" id="geoloc" style="border-radius: 10px; background:#189C07 !important" class="btn btn-sm btn-primary" onclick="getLocation()"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Register Current Location</button>
                    <input type="hidden" name="lat" id="lat" class="form-control" value="">
                    <input type="hidden" name="lng" id="lng" class="form-control" value="">
                    <br>
                    <br>
                    <br>
                    
                </div>
            </div>
        </div>
        <hr>
        
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header">
                    <button type="submit" id="submit" class="btn-large btn-primary w-100" style="width:100%">Save</button>
                </div>
            </div>
        </div>
      
                    
        </form>

<?php } else { ?>


        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_user_lead'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        
        
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    
                    
                    <input type="hidden" name="l_id" class="form-control" value="<?= $lid; ?>" placeholder="Name">
                    <input type="text" name="l_name" class="form-control" value="<?= $lInfo->l_name; ?>" placeholder="Name">
                    <br>
                    <select class="form-control" name="l_gender" required>
                        <option value="Male" <?php if ($lInfo->l_gender == 'Male') { echo 'selected'; } ?>>Male</option>
                        <option value="Female" <?php if ($lInfo->l_gender == 'Female') { echo 'selected'; } ?>>Female</option>
                    </select>
                    <br>
                    <input type="date" name="l_dob" class="form-control" value="<?= $lInfo->l_dob; ?>">
                     <br>
                    <input type="text" name="l_caste" class="form-control" value="<?= $lInfo->l_caste; ?>" placeholder="Caste">
                     <br>
                    <input type="text" name="l_sub_caste" class="form-control" value="<?= $lInfo->l_sub_caste; ?>" placeholder="Sub Caste">
                     <br>
                    <input type="text" name="l_aadhar_no" class="form-control" value="<?= $lInfo->l_aadhar_no; ?>" placeholder="Aadhar No">
                     <br>
                    <input type="text" name="l_blood_group" class="form-control" value="<?= $lInfo->l_blood_group; ?>" placeholder="Blood Group">
                     <br>
                    <input type="text" name="l_religion" class="form-control" value="<?= $lInfo->l_religion; ?>" placeholder="Religion">
                    <br>
                    <input type="text" name="l_mother_tongue" class="form-control" value="<?= $lInfo->l_mother_tongue; ?>" placeholder="Mother Tongue">
                    <br>
                    <input type="text" name="l_father_name" class="form-control" value="<?= $lInfo->l_father_name; ?>" placeholder="Father Name">
                    <br>
                    <input type="text" name="l_father_phone" class="form-control" value="<?= $lInfo->l_father_phone; ?>" placeholder="Father Phone">
                    <br>
                    <input type="text" name="l_father_qualification" class="form-control" value="<?= $lInfo->l_father_qualification; ?>" placeholder="Father Occupation">
                    <br>
                    <input type="text" name="l_mother_name" class="form-control" value="<?= $lInfo->l_mother_name; ?>" placeholder="Mother Name">
                    <br>
                    <input type="text" name="l_mother_phone" class="form-control" value="<?= $lInfo->l_mother_phone; ?>" placeholder="Mother Phone">
                    <br>
                    <input type="text" name="l_mother_qualification" class="form-control" value="<?= $lInfo->l_mother_qualification; ?>" placeholder="Mother Qualification">
                    <br>
                    <input type="text" name="l_guradian_name" class="form-control" value="<?= $lInfo->l_guradian_name; ?>" placeholder="Guardian Name">
                    <br>
                    <input type="text" name="l_guardian_phone" class="form-control" value="<?= $lInfo->l_guardian_phone; ?>" placeholder="Guardian Phone">
                    <br>
                    <input type="text" name="l_class" class="form-control" value="<?= $lInfo->l_class; ?>" placeholder="Class">
                    <br>
                     <input type="text" name="l_enrolled_course" class="form-control" value="<?= $lInfo->l_enrolled_course; ?>" placeholder="Course">
                    <br>
                    <input type="text" name="l_elective_subjects" class="form-control" value="<?= $lInfo->l_elective_subjects; ?>" placeholder="Subjects">
                    <br>
                    <input type="text" name="l_address" class="form-control" value="<?= $lInfo->l_address; ?>" placeholder="Address">
                    <br>
                    <input type="text" name="l_location" class="form-control" value="<?= $lInfo->l_location; ?>" placeholder="Location">
                    <br>
                    <input type="number" name="l_phone_number" class="form-control" value="<?= $lInfo->l_phone_number; ?>" placeholder="Phone Number">
                    <br>
                    <input type="number" name="l_alternative_phone" class="form-control" value="<?= $lInfo->l_alternative_phone; ?>" placeholder="Alternative Phone Number">
                    <br>
                    <input type="number" name="l_emergency_contact_no" class="form-control" value="<?= $lInfo->l_emergency_contact_no; ?>" placeholder="Emergency Phone Number">
                    <br>
                    <input type="text" name="l_email" class="form-control" value="<?= $lInfo->l_email; ?>" placeholder="Email">
                    <br>
                    <input type="text" name="l_source" class="form-control" value="<?= $lInfo->l_source; ?>" placeholder="Source">
                    <br>
                    <label>Resource</label>
                    <br>
                    <select class="form-control" name="l_resources" required>
                        <option value="">Select Resource</option>
                        <?php foreach ($sourceInfo as $si) { ?>
                        <option value="<?= $si->source; ?>" <?php if ($si->source == $lInfo->l_resources) { echo 'selected' ; } ?>><?= $si->source; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <button type="button" id="geoloc" style="border-radius: 10px; background:#189C07 !important" class="btn btn-sm btn-primary" onclick="getLocation()"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Register Current Location</button>
                    <input type="hidden" name="lat" id="lat" class="form-control" value="<?= $lInfo->lead_lat; ?>">
                    <input type="hidden" name="lng" id="lng" class="form-control" value="<?= $lInfo->lead_lng; ?>">
                    <br>
                    <br>
                    <br>
                    
                </div>
            </div>
        </div>
        <hr>
        
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header">
                    <button type="submit" id="submit" class="btn-large btn-primary w-100" style="width:100%">Save</button>
                </div>
            </div>
        </div>
      
                    
        </form>
        

<?php } ?>

<!-- Import Modal -->
<div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="importModalLabel">Import Leads</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="importForm" action="<?= base_url('admin/staff/import_leads'); ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="modal_c_id" id="modal_c_id">
          <div class="mb-3">
            <label for="importFile" class="form-label">Upload CSV File</label>
            <input type="file" class="form-control" name="importFile" id="importFile" accept=".csv" required>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Import</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

      <div class="alert alert-primary alert-dismissible fade" role="alert" id="success_alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <span id="success_message"></span>
      </div>

      <div class="alert alert-danger alert-dismissible fade" role="alert" id="error_alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <span id="error_message"></span>
      </div>
<script>
  $(document).ready(function () {
    $("#import").click(function () {
      var c_id = $("select[name='c_id']").val();
      if (!c_id) {
        $('#error_message').html('Please select a Campaign first.');
        $('#error_alert').addClass('show');
        return;
      }
      $("#modal_c_id").val(c_id);
      $("#importModal").modal('show');
    });
    $("#importForm").submit(function (e) {
      e.preventDefault();
      var formData = new FormData(this);
      $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
          alert(response.message);
          $("#importModal").modal('hide');
          location.reload();
        },
        error: function () {
            $('#error_message').html('File upload failed. Please try again.');
            $('#error_alert').addClass('show');
        }
      });
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
        url: "<?php echo base_url(); ?>admin/staff/save_user_lead",
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
<script>
const x = document.getElementById("lat");
const y = document.getElementById("lng");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  document.getElementById('lat').value = position.coords.latitude;
  document.getElementById('lng').value = position.coords.longitude;
}
</script>