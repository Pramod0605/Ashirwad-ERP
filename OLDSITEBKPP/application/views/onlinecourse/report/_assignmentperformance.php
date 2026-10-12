<?php $this->load->view('layout/course_css.php'); ?>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
        <!-- left column -->
            <div class="col-md-12">
                <div class="box removeboxmius">
                    <div class="box-header ptbnull"></div>
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> Assignment Report</h3>
                    </div>
            <div class="box-body">
                <div class="row">
                    <div class="download_label"><?php echo $this->lang->line('course_complete_report'); ?> </div>
                        <table class="table table-striped table-bordered table-hover all-list" cellspacing="0" data-export-title="<?php echo $this->lang->line('course_complete_report'); ?>">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Brief</th>
                                    <th>Assignments</th>.
                                    <th>Score</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tbody id="datalist">
                                    <?php
                                    $i = 0;
                                    foreach ($cassignments as $ca) { 
                                    $i++;
                                        if ($user_type == 'student') {
                                            $sa         = $this->db->query("SELECT * FROM `course_progress` WHERE student_id = '".$userid."' AND course_id = '".$courseid."' AND assignment_id = '".$ca->ca_id."' AND assignment_file IS NOT NULL ")->row();
                                        } else {
                                            $sa         = $this->db->query("SELECT * FROM `course_progress` WHERE guest_id = '".$userid."' AND course_id = '".$courseid."' AND assignment_id = '".$ca->ca_id."' AND assignment_file IS NOT NULL ")->row();
                                        }
                                        
                                        if (!empty($sa)) {
                                            if ($sa->assignment_score === NULL) {
                                                $oscore     = NULL;
                                                $sstatus    = '<a href="'.$sa->assignment_file.'" class="btn btn-sm btn-primary" target="_blank">Check</a>';
                                            } else {
                                                $oscore     = $sa->assignment_score;
                                                $sstatus    = '<strong>Obtain Score : '.$sa->assignment_score.'<br> Teacher Remark :'.$sa->teacher_remark.'</strong>';
                                            }
                                        } else {
                                            $oscore         = NULL;
                                            $sstatus        = '<span class="badge badge-dark">Pending</span>';
                                        }
                                    ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $ca->assignment_instruction; ?></td>
                                        <td><a href="<?= $ca->assignment_attachment; ?>" class="btn btn-sm btn-primary" target="_blank">View</a></td>
                                        <td><?= $ca->assignment_score; ?></td>
                                        <td><?= $sstatus; ?></td>
                                        <td>
                                            <?php if (!empty($sa)) { ?>
                                                <a href="javascript:void(0);" class="btn btn-sm evaluate btn-primary" data-id="<?= $sa->id; ?>" data-oscore="<?= $oscore; ?>">Evaluate</a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                        </table>            
                    
                    </div>
                </div>  
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>

<!-- Modal for Evaluation -->
<div class="modal fade" id="evaluateModal" tabindex="-1" role="dialog" aria-labelledby="evaluateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="evaluateModalLabel">Evaluate Assignment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="evaluateForm">
                    <input type="hidden" name="assignment_id" id="assignment_id">
                    <input type="hidden" name="user_id" id="user_id" value="<?= $userid; ?>">
                    <div class="form-group">
                        <label for="score">Score</label>
                        <input type="number" class="form-control" name="score" id="score" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="score">Remark</label>
                        <textarea class="form-control" name="remark" id="remark" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveEvaluation">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('.evaluate').on('click', function() {
        var assignmentId = $(this).data('id');
        var oscore = $(this).data('oscore');
        
        $('#assignment_id').val(assignmentId);
        $('#score').val('');
        $('#remark').val('');
        $('#score').prop('disabled', false);

        if (oscore) {
            $('#score').prop('disabled', true);
            $('#remark').prop('disabled', true); 
            $('#evaluateModal .modal-body').append('<div class="alert alert-warning">Evaluation is already done with a score of ' + oscore + '.</div>');
        } else {
            $('#evaluateModal .alert').remove();
            $('#remark').prop('disabled', false);
        }
        
        $('#evaluateModal').modal('show');
    });

    $('#saveEvaluation').on('click', function() {
        if ($('#score').is(':disabled')) {
            alert('Evaluation is already done. You cannot submit again.');
            return;
        }
        var formData = $('#evaluateForm').serialize();
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>onlinecourse/coursereport/evaluate_assignment',
            data: formData,
            success: function(response) {
                $('#evaluateModal').modal('hide');
                location.reload();
            },
            error: function() {
                alert('Error saving the evaluation. Please try again.');
            }
        });
    });
});
</script>

