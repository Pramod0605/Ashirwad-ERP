<?php
$status          = 'documents';
$admin_session   = $this->session->userdata('admin');
$currency_symbol = $admin_session['currency_symbol'];

$alead = $this->db->query("SELECT COUNT(l_id) AS al FROM `cyc_leads` WHERE c_id = '".$c_id."'  ")->row();
$olead = $this->db->query("SELECT COUNT(l_id) AS ol FROM `cyc_leads` WHERE c_id = '".$c_id."' AND l_status = 'Open'  ")->row();
$tlead = $this->db->query("SELECT COUNT(l_id) AS tl FROM `cyc_leads` WHERE c_id = '".$c_id."' AND l_status = 'Taken'  ")->row();
$clead = $this->db->query("SELECT COUNT(l_id) AS cl FROM `cyc_leads` WHERE c_id = '".$c_id."' AND l_status = 'Closed'  ")->row();
$flead = $this->db->query("SELECT COUNT(f_id) AS fl FROM `cyc_leads_followup` WHERE c_id = '".$c_id."'  ")->row();
?>

<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="box box-primary" <?php
                                                if ($campInfo->c_status == "Inactive") {
                                                    echo "style='background-color:#f0dddd;'";
                                                }
                                                ?>>
                    <div class="box box-widget widget-user-2 mb0">
                        <div class="widget-user-header bg-gray-light overflow-hidden">
                            <h3 class="widget-user-username"><?php echo $campInfo->c_title; ?></h3>
                            <h5 class="widget-user-desc mb5"><?php echo 'Manager'; ?> <span class="text-aqua float-right"><?php echo $campInfo->employee_id.' - '.$campInfo->name.' '.$campInfo->surname; ?></span></h5>
                            <h5 class="widget-user-desc"><?php echo 'Date'; ?> <span class="text-aqua float-right"><?php echo $campInfo->c_date; ?></h5>
                        </div>
                    </div>

                    <div class="box-body box-profile pt0">
                        <ul class="list-group list-group-unbordered">
                            
                            <li class="list-group-item listnoback border0">
                                <b>Leads</b> <a class="pull-right text-aqua"><?php echo $alead->al; ?></a>
                            </li>
                            <li class="list-group-item listnoback">
                                <b>Closed</b> <a class="pull-right text-aqua"><?php echo $clead->cl; ?></a>
                            </li>
                            <li class="list-group-item listnoback">
                                <b>Taken</b> <a class="pull-right text-aqua"><?php echo $tlead->tl; ?></a>
                            </li>
                            <li class="list-group-item listnoback">
                                <b>Open</b> <a class="pull-right text-aqua"><?php echo $olead->ol; ?></a>
                            </li>
                            <li class="list-group-item listnoback">
                                <b>Follow-up</b> <a class="pull-right text-aqua"><?php echo $flead->fl; ?></a>
                            </li>
                            <li class="list-group-item listnoback">
                                <b>Type</b> <a class="pull-right text-aqua"><?php echo $campInfo->ct_title; ?></a>
                            </li>
                            
                            <?php if (!empty($campInfo->cp_id)) { ?>
                            <li class="list-group-item listnoback">
                                <b>Promoter</b><br>
                                <table class="table">
                                    <tr>
                                        <th>Promoter</th>
                                        <th><?= $campInfo->promoter_name; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Institute</th>
                                        <th><?= $campInfo->promoter_institute; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Designation</th>
                                        <th><?= $campInfo->promoter_designation; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Contact No.</th>
                                        <th><?= $campInfo->promoter_contact_no.'<br>'.$campInfo->promoter_alternate_contact_no; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <th><?= $campInfo->promoter_address; ?></th>
                                    </tr>
                                </table>
                            </li>
                            <?php } ?>
                            
                            <li class="list-group-item listnoback">
                                <input type="hidden" name="c_id" id="c_id" value="<?= $c_id; ?>" class="form-control">
                                <a href="javascript:void(0);" class="btn btn-primary w-100 import">Import Leads</a>
                            </li>
                           

                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="nav-tabs-custom theme-shadow">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#counsellor" data-toggle="tab" aria-expanded="true">Counsellor</a></li>
                        <li class=""><a href="#leads" data-toggle="tab" aria-expanded="true">Leads</a></li>
                        <li class=""><a href="#follow-up" data-toggle="tab" aria-expanded="true">Follow-up</a></li>
                        <li class="flot-right"><a href="#" id="add-lead"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Lead</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="counsellor">
                            <div class="tshadow mb25 bozero">
                                <div class="table-responsive around10 pt0">
                                    <table class="table3 table-hover table-striped tmb0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Details</th>
                                                <th>Level</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $cic = 0;
                                            foreach ($counsellorInfo as $cnsi) {
                                            $cic ++;
                                            ?>
                                            <tr>
                                                <td><?= $cic; ?></td>
                                                <td><?= $cnsi->employee_id.' - '.$cnsi->name.' '.$cnsi->surname; ?></td>
                                                <td><?= $cnsi->level; ?></td>
                                                <td><a href="<?= base_url(); ?>/admin/leads/remove_counsellor/<?= $cnsi->lc_id.'/'.$c_id; ?>"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                        </div>
                        
                        <div class="tab-pane" id="leads">
                            <div class="tshadow mb25 bozero">
                                <div class="table-responsive around10 pt0">
                                    <table class="table3 table-hover table-striped tmb0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Relate to</th>
                                                <th>Class / Course</th>
                                                <th>Address</th>
                                                <th>Contact no.</th>
                                                <th>Taken by</th>
                                                <th>Current Handler</th>
                                                <th>Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($leadsInfo as $leads) { 
                                                $tbyInfo = $this->staff_model->get($leads->taken_by);
                                                $hbyInfo = $this->staff_model->get($leads->current_agent);
                                            ?>
                                            <tr>
                                                <td><a href="<?= base_url(); ?>/admin/leads/view_lead/<?= $leads->l_id; ?>" target="_blank"><?= $leads->l_id; ?></a></td>
                                                <td><?= $leads->l_name.'<br>'.$leads->l_father_name; ?></td>
                                                <td><?= $leads->l_class; ?></td>
                                                <td><?= $leads->l_address; ?></td>
                                                <td><?= $leads->l_phone_number; ?></td>
                                                <td><?= $tbyInfo['employee_id'].' - '.$tbyInfo['name'].' '.$tbyInfo['surname']; ?></td>
                                                <td><?= $hbyInfo['employee_id'].' - '.$hbyInfo['name'].' '.$hbyInfo['surname']; ?></td>
                                                <td><?= $leads->l_status; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                        </div>
                        
                        <div class="tab-pane" id="follow-up">
                            <div class="tshadow mb25 bozero">
                                <div class="table-responsive around10 pt0">
                                    <table class="table3 table-hover table-striped tmb0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Lead</th>
                                                <th>By</th>
                                                <th>Date</th>
                                                <th>Remark</th>
                                                <th>Next Followup</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($followUpInfo as $followup) { 
                                                $fbyInfo = $this->staff_model->get($followup->followup_by);
                                            ?>
                                            <tr>
                                                <td><?= $followup->f_id ; ?></td>
                                                <td><?= $followup->l_id ; ?></td>
                                                <td><?= $fbyInfo->employee_id.' - '.$fbyInfo->name.' '.$fbyInfo->surname; ?></td>
                                                <td><?= $followup->followup_date.' '.$followup->followup_time; ?></td>
                                                <td><?= $followup->followup_remark; ?></td>
                                                <td><?= $followup->next_followup_date.' '.$followup->next_followup_time; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- student incident comments -->
<div class="modal fade" id="importmodel" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-media-content">
            <div class="modal-header modal-media-header d-flex justify-content-between">
                <div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="box-title">Import Leads</h4>
                </div>
            </div>
            <div class="">
                <div class="modal-body pt0 pb0 relative bg-e6">
                    <form id="formadd" method="post" class="ptt10 mb10 place-italic" enctype="multipart/form-data">
                        <input type="hidden" name="cid" id="cid">
                        <div class="clearfix">
                            <div class="d-flex justify-content-between gap-1">
                                
                                <a href="<?= base_url(); ?>uploads/leads/cyc_leads.csv" class="btn btn-primary w-100 import" download>Sample Data</a>
                                <input type="checkbox" name="is_sms" class="" style="opacity: 100;">&nbsp;Send SMS ?
                                <input type="file" name="file" class="form-control" style="opacity: 100;">
                                <button type="submit" class="btn btn-send pr10 overflow-inherit max-height-40" id="submit" data-loading-text="<i class='fa fa-spinner fa-spin '></i> <?php echo $this->lang->line('please_wait'); ?>"><?php echo $this->lang->line('send') ?></button>
                            </div>
                        </div>
                    </form>
                    <div class="scroll-area-inside">
                        <ul class="user-progress">
                            <div id="messagedetails"></div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- New Modal for Add Lead -->
<div class="modal fade" id="addLeadModal" role="dialog" aria-labelledby="addLeadModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="box-title" id="addLeadModalLabel">Add Lead</h4>
            </div>
            <div class="modal-body">
                <form id="addLeadForm" method="post" action="<?= base_url('admin/leads/save_campaign_lead'); ?>" enctype="multipart/form-data">
                    <input type="hidden" name="c_id" id="c_id" class="form-control" value="<?= $campInfo->c_id; ?>">
                    <div class="form-group">
                        <label for="l_name">Lead Name</label>
                        <input type="text" name="l_name" class="form-control" value="" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="l_gender">Gender</label>
                        <select class="form-control" name="l_gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="l_dob">D.O.B</label>
                        <input type="date" name="l_dob" class="form-control" value="" >
                    </div>
                    <div class="form-group">
                        <label for="l_caste">Caste</label>
                        <input type="text" name="l_caste" class="form-control" value="" >
                    </div>
                    <div class="form-group">
                        <label for="l_sub_caste">Sub Caste</label>
                        <input type="text" name="l_sub_caste" class="form-control" value="" >
                    </div>
                    <div class="form-group">
                        <label for="l_aadhar_no">Aadhar No.</label>
                        <input type="number" name="l_aadhar_no" class="form-control" value="" >
                    </div>
                    <div class="form-group">
                        <label for="l_blood_group">Blood Group</label>
                        <input type="text" name="l_blood_group" class="form-control" value="" >
                    </div>
                    <div class="form-group">
                        <label for="l_religion">Religion</label>
                        <input type="text" name="l_religion" class="form-control" value="" >
                    </div>
                    <div class="form-group">
                        <label for="l_mother_tongue">Mother Tongue</label>
                        <input type="text" name="l_mother_tongue" class="form-control" value="" >
                    </div>
                    
                    <div class="form-group">
                        <label for="l_father_name">Father Name</label>
                        <input type="text" name="l_father_name" class="form-control" value="" placeholder="Father Name">
                    </div>
                    <div class="form-group">
                        <label for="l_father_phone">Father Phone</label>
                        <input type="number" name="l_father_phone" class="form-control" value="" placeholder="Father Phone">
                    </div>
                    <div class="form-group">
                        <label for="l_father_qualification">Father Occupation</label>
                        <input type="text" name="l_father_qualification" class="form-control" value="" placeholder="Father Occupation">
                    </div>
                    <div class="form-group">
                        <label for="l_mother_name">Mother Name</label>
                        <input type="text" name="l_mother_name" class="form-control" value="" placeholder="Mother Name">
                    </div>
                    <div class="form-group">
                        <label for="l_mother_phone">Mother Phone</label>
                        <input type="number" name="l_mother_phone" class="form-control" value="" placeholder="Mother Phone">
                    </div>
                    <div class="form-group">
                        <label for="l_mother_qualification">Mother Occupation</label>
                        <input type="text" name="l_mother_qualification" class="form-control" value="" placeholder="Mother Occupation">
                    </div>
                    <div class="form-group">
                        <label for="l_guradian_name">Guardian Name</label>
                        <input type="text" name="l_guradian_name" class="form-control" value="" placeholder="Guardian Name">
                    </div>
                    <div class="form-group">
                        <label for="l_guardian_phone">Guardian Phone</label>
                        <input type="text" name="l_guardian_phone" class="form-control" value="" placeholder="Guardian Phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="l_class">Class</label>
                        <input type="text" name="l_class" class="form-control" value="" placeholder="Class">
                    </div>
                    <div class="form-group">
                        <label for="l_enrolled_course">Course</label>
                        <input type="text" name="l_enrolled_course" class="form-control" value="" placeholder="Course">
                    </div>
                    <div class="form-group">
                        <label for="l_elective_subjects">Subjects</label>
                        <input type="text" name="l_elective_subjects" class="form-control" value="" placeholder="Subjects">
                    </div>
                    <div class="form-group">
                        <label for="l_address">Address</label>
                        <input type="text" name="l_address" class="form-control" value="" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="l_location">Location</label>
                        <input type="text" name="l_location" class="form-control" value="" placeholder="Location">
                    </div>
                    <div class="form-group">
                        <label for="l_phone_number">Primary Phone Number</label>
                        <input type="number" name="l_phone_number" class="form-control" value="" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="l_alternative_phone">Alternative Phone Number</label>
                        <input type="number" name="l_alternative_phone" class="form-control" value="" placeholder="Alternative Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="l_emergency_contact_no">Emergency Phone Number</label>
                        <input type="number" name="l_emergency_contact_no" class="form-control" value="" placeholder="Emergency Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="l_email">Primary Email</label>
                        <input type="text" name="l_email" class="form-control" value="" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="l_source">Source</label>
                        <input type="text" name="l_source" class="form-control" value="" placeholder="Source">
                    </div>
                    <div class="form-group">
                        <label for="l_resources">Resource</label>
                        <select class="form-control" name="l_resources" required>
                        <option value="">Select Resource</option>
                        <?php foreach ($all_sources as $si) { ?>
                        <option value="<?= $si->source; ?>"><?= $si->source; ?></option>
                        <?php } ?>
                    </select>
                    </div>
                    
                    
                    <br>
                    <button type="button" id="geoloc" style="border-radius: 10px; background:#189C07 !important" class="btn btn-sm btn-primary" onclick="getLocation()"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Register Current Location</button>
                    <input type="hidden" name="lat" id="lat" class="form-control" value="">
                    <input type="hidden" name="lng" id="lng" class="form-control" value="">
                    <br>
                    <br>
                    
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary w-100">Add Lead</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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

<script>
    $('#add-lead').click(function() {
        $('#addLeadModal').modal({
            backdrop: 'static',
            keyboard: false,
            show: true
        });
    });

    $('.import').click(function() {
        var c_id = document.getElementById("c_id").value;  
        document.getElementById('cid').value = c_id;
        $('#importmodel').modal({
            backdrop: 'static',
            keyboard: false,
            show: true
        });
    })

    $("#formadd").on('submit', (function(e) {
        e.preventDefault();

        var cid = $('#cid').val();

        var $this = $(this).find("button[type=submit]:focus");
        $.ajax({
            url: "<?php echo site_url("admin/leads/import_leads"); ?>",
            type: "POST",
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $this.button('loading');
            },
            success: function(res) {
                if (res.status == "fail") {
                    var message = "";
                    $.each(res.error, function(index, value) {
                        message += value;
                    });
                    errorMsg(message);
                } else {
                    successMsg(res.message);
                    location.reload();
                    $('#formadd')[0].reset();
                    getmessage(cid);
                    location.reload();
                }
            },
            error: function(xhr) { // if error occured
                alert("<?php echo $this->lang->line('error_occurred_please_try_again'); ?>");
                $this.button('reset');
            },
            complete: function() {
                $this.button('reset');
            }

        });
    }));
    
    $("#addLeadForm").on('submit', (function(e) {
        e.preventDefault();

        var $this = $(this).find("button[type=submit]:focus");
        $.ajax({
            url: "<?php echo site_url("admin/leads/save_campaign_lead"); ?>",
            type: "POST",
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $this.button('loading');
            },
            success: function(res) {
                if (res.status == "error") {
                    var message = "";
                    errorMsg(message);
                } else {
                    successMsg(res.message);
                    $('#addLeadForm')[0].reset();
                    location.reload();
                }
            },
            error: function(xhr) {
                alert("<?php echo $this->lang->line('error_occurred_please_try_again'); ?>");
                $this.button('reset');
            },
            complete: function() {
                $this.button('reset');
            }

        });
    }));
</script>
