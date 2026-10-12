<?php $currency_symbol = $this->customlib->getSchoolCurrencyFormat();?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $this->lang->line('student_list'); ?></h3>
                        <div class="box-tools pull-right">
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <div class="table-responsive">
                        <div class="mailbox-messages">
                             <?php if ($this->session->flashdata('msg')) {
    echo $this->session->flashdata('msg');
    $this->session->unset_userdata('msg');}?>
                            <table class="table table-striped table-bordered table-hover student-list" data-export-title="<?php echo $this->lang->line('student_list'); ?>">
                                <thead>
                                    <tr>
                                        <th style="width:5%"><?php echo $this->lang->line('reference_no'); ?></th>
                                        <th><?php echo $this->lang->line('student_name'); ?></th>
                                        <th class="white-space-nowrap"><?php echo $this->lang->line('class'); ?></th>
                                         <?php if ($sch_setting->father_name) {?>
                                            <th><?php echo $this->lang->line('father_name'); ?></th>
                                        <?php }?>
                                        <th><?php echo $this->lang->line('date_of_birth'); ?></th>
                                        <th><?php echo $this->lang->line('gender'); ?></th>
                                        <th><?php echo $this->lang->line('category'); ?></th>
                                          <?php if ($sch_setting->mobile_no) {?>
                                        <th style="width:10%"><?php echo $this->lang->line('student_mobile_number'); ?></th>
                                       <?php }?>
                                        <th><?php echo $this->lang->line('form_status'); ?></th>
                                        <?php if ($sch_setting->online_admission_payment == 'yes') {?>
                                            <th><?php echo $this->lang->line('payment_status'); ?></th>
                                            <?php }?>
                                        <th>Test Score</th>
                                        <th>Remark</th>
                                        <th><?php echo $this->lang->line('enrolled'); ?></th>
                                        <th><?php echo $this->lang->line('created_at'); ?></th>
                                        <th class="text-right noExport"><?php echo $this->lang->line('action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table><!-- /.table -->
                        </div><!-- /.mail-box-messages -->
                       </div><!--./table-responsive-->
                    </div><!-- /.box-body -->
                </div>
            </div><!--/.col (left) -->
            <!-- right column -->
        </div>
    </section><!-- /.content -->
    
<!-- Modal for entering student score -->
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
                    <input type="hidden" id="student_id" name="student_id">
                    <button type="submit" class="btn btn-primary"><?php echo $this->lang->line('save'); ?></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('close'); ?></button>
                </form>
            </div>
        </div>
    </div>
</div>


</div><!-- /.content-wrapper -->

<script>
    ( function ( $ ) {
    'use strict';
    $(document).ready(function () {
        initDatatable('student-list','admin/onlinestudent/getstudentlist',[],[],100);
    });
} ( jQuery ) )
</script>
<script>
function openScoreModal(studentId) {
    $('#student_id').val(studentId);
    $('#scoreModal').modal('show');
}
$(document).ready(function () {
    $('#scoreForm').on('submit', function (e) {
        e.preventDefault();
        var score = $('#score').val();
        var remark = $('#remark').val();
        var studentId = $('#student_id').val();

        $.ajax({
            url: '<?php echo base_url(); ?>admin/onlinestudent/saveStudentScore',
            type: 'POST',
            dataType: "JSON",
            //async: true;
            data: {
                student_id: studentId,
                score: score,
                remark:remark
            },
            success: function(response) {
                if (response.success) {
                    alert('Score saved successfully');
                    $('#scoreModal').modal('hide');
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
    function checkpaymentstatus(id){
       $.ajax({
            url: '<?php echo base_url(); ?>admin/onlinestudent/checkpaymentstatus',
            type: "POST",
            data: {id:id},
            success: function (data) {

               if(data!=""){
                    if(confirm(data)){
                      window.location.href="<?php echo base_url() . 'admin/onlinestudent/edit/' ?>"+id ;
                    }else{
                         return false ;
                    }
                }else{
                     window.location.href="<?php echo base_url() . 'admin/onlinestudent/edit/' ?>"+id ;
                }
            }
        });
    }
</script>