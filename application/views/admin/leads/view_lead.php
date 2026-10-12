<?php
$status          = 'documents';
$admin_session   = $this->session->userdata('admin');
$currency_symbol = $admin_session['currency_symbol'];

$flead = $this->db->query("SELECT COUNT(f_id) AS fl FROM `cyc_leads_followup` WHERE l_id = '".$l_id."'  ")->row();

$tbyInfo = $this->db->query("SELECT * FROM staff WHERE id = '".$leadInfo->taken_by."' ")->row();
$agnInfo = $this->db->query("SELECT * FROM staff WHERE id = '".$leadInfo->current_agent."' ")->row();
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
                            
                            <li class="list-group-item listnoback">
                                <b>Follow-up </b> <a class="pull-right text-aqua"><?php echo $flead->fl; ?></a>
                            </li>
                            <li class="list-group-item listnoback">
                                <b>Score </b> <a class="pull-right text-aqua"><?php echo $leadInfo->l_test_score; ?></a>
                            </li>
                            <li class="list-group-item listnoback">
                                <b>Score Remark</b><br><a class="text-aqua"><?php echo $leadInfo->l_test_score_remark; ?></a>
                            </li>
                            
                            <li class="list-group-item listnoback">
                                <b>Lead Info</b><br>
                                <table class="table">
                                    <tr>
                                        <th>Name</th>
                                        <th><?= $leadInfo->l_name; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <th><?= $leadInfo->l_gender; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Date of Birth</th>
                                        <th><?= $leadInfo->l_dob; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Religion</th>
                                        <th><?= $leadInfo->l_religion; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Caste</th>
                                        <th><?= $leadInfo->l_caste.' '.$leadInfo->l_sub_caste; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Mother Tongue</th>
                                        <th><?= $leadInfo->l_mother_tongue; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <th><?= $leadInfo->l_name; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Father Name</th>
                                        <th><?= $leadInfo->l_father_name; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Father Phone</th>
                                        <th><?= $leadInfo->l_father_phone; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Father Qualification</th>
                                        <th><?= $leadInfo->l_father_qualification; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Mother Name</th>
                                        <th><?= $leadInfo->l_mother_name; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Mother Phone</th>
                                        <th><?= $leadInfo->l_mother_phone; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Mother Qualification</th>
                                        <th><?= $leadInfo->l_mother_qualification; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Class</th>
                                        <th><?= $leadInfo->l_class.' / '.$leadInfo->l_enrolled_course; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Subjects</th>
                                        <th><?= $leadInfo->l_elective_subjects; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <th><?= $leadInfo->l_address; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Contact No.</th>
                                        <th><?= $leadInfo->l_phone_number; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Alternate No.</th>
                                        <th><?= $leadInfo->l_alternative_phone; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Emergency No.</th>
                                        <th><?= $leadInfo->l_emergency_contact_no; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Taken By</th>
                                        <th><?= $tbyInfo->employee_id.' - '.$tbyInfo->name.' '.$tbyInfo->surname; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Current Counsellor</th>
                                        <th><?= $agnInfo->employee_id.' - '.$agnInfo->name.' '.$agnInfo->surname; ?></th>
                                    </tr>
                                </table>
                            </li>
                            
                            
                            <li class="list-group-item listnoback">
                                <span class"float-left"><a href="<?= base_url(); ?>admin/leads/print_lead/<?= $leadInfo->l_id; ?>" class="btn btn-sm btn-primary" target="_blank">Print</a></span>
                                <span class"float-right" style="float: right;"><a  class="btn btn-default btn-xs mt-5 pull-right" data-toggle="tooltip" title="Score" onclick="openScoreModal('<?= $leadInfo->l_id; ?>')"><i class='fa fa-file-text'></i>Add Score</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="nav-tabs-custom theme-shadow">
                    <ul class="nav nav-tabs">
                        <li class=""><a href="#follow-up" data-toggle="tab" aria-expanded="true">Follow-up</a></li>
                    </ul>

                    <div class="tab-content">
                        
                        <div class="tab-pane active" id="follow-up">
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
                                                $fbyInfo = $this->db->query("SELECT * FROM staff WHERE id = '".$followup->followup_by."' ")->row();
                                                
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

<div id="scoreModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $this->lang->line('enter_score'); ?></h4>
            </div>
            <div class="modal-body">
                <form id="scoreForm" method="post">
                    <div class="form-group">
                        <label for="score">Score</label>
                        <input type="number" class="form-control" id="score" name="score" required>
                    </div>
                    <div class="form-group">
                        <label for="score">Remark</label>
                        <textarea class="form-control" id="remark" name="remark" required></textarea>
                    </div>
                    <input type="hidden" id="score_lead_id" name="score_lead_id">
                    <button type="submit" class="btn btn-primary"><?php echo $this->lang->line('save'); ?></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('close'); ?></button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
function openScoreModal(score_lead_id) {
    $('#score_lead_id').val(score_lead_id);
    $('#scoreModal').modal('show');
}
$(document).ready(function () {
    $('#scoreForm').on('submit', function (e) {
        e.preventDefault();
        var score = $('#score').val();
        var remark = $('#remark').val();
        var score_lead_id = $('#score_lead_id').val();

        $.ajax({
            url: '<?php echo base_url(); ?>admin/leads/saveStudentScore',
            type: 'POST',
            dataType: "JSON",
            //async: true;
            data: {
                score_lead_id: score_lead_id,
                score: score,
                remark:remark
            },
            success: function(response) {
                if (response.success) {
                    alert('Score saved successfully');
                    $('#scoreModal').modal('hide');
                    location.reload();
                } else {
                    alert('Something is wrong');
                }
            },
            error: function() {
                alert('Something is wrong');
            }
        });
    });
});
</script>
<script>
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
    
    $('#content').change(function(){
        content = document.getElementById('content').value;
        document.getElementById('fr').value = content;
    });
</script>
