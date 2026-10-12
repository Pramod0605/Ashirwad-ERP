<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
                
                
                <div class="row">
                <div class="col-sm-12">
                <div class="box box-primary">
                    
                <form id='form1' action="<?php echo site_url('admin/feemaster/apply_scheme_scholarship') ?>"  method="post" accept-charset="utf-8">
                        <div class="box-body">
                            <div class="row">
                            
                            <div class="col-md-12" id="addfg">
                                <a href="javascript:void(0);" class="btn btn-info btn-sm item_add_1"  >Apply Scheme / Scholarship</a>
                            </div>    
                                

                                <?php
if ($this->session->flashdata('msg')) {
    echo $this->session->flashdata('msg');
    $this->session->unset_userdata('msg');
}
?>
                                <?php echo $this->customlib->getCSRF(); ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">
                                            Scheme / Scholarship
                                        </label>
                                        <select name="ss_id"  class="js-example-basic-multiple form-control">
                                            <option value="">Select Scheme / Scholarship....</option>
                                            <?php foreach ($scholarships as $ss) { ?>
                                            <option value="<?php echo $ss->ss_id ?>" <?php if (!empty($ss_id) && $ss_id == $ss->ss_id) { echo 'selected'; } ?>><?php echo $ss->ss_name ?></option>
                                            <?php } ?>
                                        </select>
                                        <span class="text-danger"><?php echo form_error('role'); ?></span>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <select class="form-control" name="applied_status">
                                            <option value="0" <?php if ($applied_status == 0) { echo 'selected'; } ?>>Pending</option>
                                            <option value="1" <?php if ($applied_status == 1) { echo 'selected'; } ?>>Approved</option>
                                            <option value="2" <?php if ($applied_status == 2) { echo 'selected'; } ?>>Rejected</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" name="search" value="search" class="btn btn-primary btn-sm pull-right checkbox-toggle"><i class="fa fa-search"></i> <?php echo $this->lang->line('search'); ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                   
                   
                    
                    
                    
                    
                    
                    <div class="box-body table-responsive">
                    <div class="download_label"><?php echo $this->lang->line('fees_master_list') . " : " . $this->setting_model->getCurrentSessionName(); ?></div>
                    <div class="mailbox-messages">
                    <div class="">  
                    <table class="table table-striped table-bordered table-hover example" style="width:100% !important">
                        <thead>
                        <tr>
                            <td>#</td>
                            <th>Student</th>
                            <th>Class</th>
                            <th>Applied Scheme</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="show_data">
                        <?php
                            $i = '0' ;
                            if (!empty($applied_students)): foreach ($applied_students as $stu): 
                            $i++;
                            
                            if ($stu->applied_status == 0) {
                                $ss_status = 'Pending';
                            } elseif ($stu->applied_status == 1) {
                                $ss_status = 'Approved';
                            } elseif ($stu->applied_status == 2) {
                                $ss_status = 'Rejected';
                            }
                        ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?php echo $stu->admission_no.' - '.$stu->firstname.' - '.$stu->lastname ?></td>
                            <td><?php echo $stu->class ?></td>
                            <td><?php echo $stu->ss_name ?></td>
                            <td><?php echo $ss_status ?></td>
                            <td>
                                <?php if ($stu->applied_status == 0) { ?>
                                    <a href="<?= base_url(); ?>admin/feemaster/approve_stu_ss/<?= $stu->sss_id; ?>" class="btn btn-sm btn-success">Approve</a>&nbsp;&nbsp;
                                    <a href="<?= base_url(); ?>admin/feemaster/reject_stu_ss/<?= $stu->sss_id; ?>" class="btn btn-sm btn-danger">Reject</a>
                                <?php } else { ?>
                                    <a href="<?= base_url(); ?>admin/feemaster/reject_stu_ss/<?= $stu->sss_id; ?>" class="btn btn-sm btn-danger">Reject</a>
                                <?php }  ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                    
                    </div>
                    </div>
                    </div>
                    
                    </div>
                    </div>
            </div>
        </section>
</div>
            
 <!--MODAL UPDATE-->
    <form role="form" action="FGADD_1"  id="FGADD_1" method="post" enctype="multipart/form-data">
            <div class="modal fade" id="Modal_FGADD_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  <div class="modal-header">
                    
                  </div>
                  <br />
                  <div class="col-sm-12"  id="add_new_1"  class="modal-footer" style="text-align:left !important">
                                <label for="textareaMaxLength" class="col-md-12" style="text-align:left">Scheme / Scholarship</label>
                                <select name="ss_id"  class="js-example-basic-multiple form-control">
                                    <option value="">Select Scheme / Scholarship....</option>
                                    <?php foreach ($scholarships as $ss) { ?>
                                    <option value="<?php echo $ss->ss_id ?>"><?php echo $ss->ss_name ?></option>
                                    <?php } ?>
                                </select>
                                <br />
                                
                                <label for="textareaMaxLength" class="col-md-12" style="text-align:left">Class</label>
                                <select name="class_id" id="class_id"  class="js-example-basic-multiple form-control">
                                    <option value="">Select Class....</option>
                                    <?php foreach ($classes as $cls) { ?>
                                    <option value="<?= $cls['id'] ?>"><?= $cls['class']; ?></option>
                                    <?php } ?>
                                </select>
                                <br />
                                <label for="textareaMaxLength" class="col-md-12" style="text-align:left">Section</label>
                                <select name="section_id" id="section_id"  class="js-example-basic-multiple form-control">
                                </select>
                                <br />
                                <label for="textareaMaxLength" class="col-md-12" style="text-align:left">Student</label>
                                <select name="student_id" id="student_id"  class="js-example-basic-multiple form-control">
                                </select>
                                <br />
                                <br />
                  </div> 
                     <div class="modal-footer">
                     
                       <br />
                            <button type="button" type="submit" name="btn_save_fg_1" id="btn_save_fg_1" class="btn btn-primary"  style="width: 100%; ">SAVE</button>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL UPDATE-->
<!--MODAL UPDATE-->
            <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top:25% !important">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <p style="text-align:center"><img src="<?= base_url('uploads/checkmark.gif'); ?>" width="50%"></p>
                  <br />
                </div> 
              </div>
            </div>
<!--END MODAL UPDATE-->
<script type="text/javascript">
  $(document).ready(function(){
$('#addfg').on('click','.item_add_1',function(){
          $('#Modal_FGADD_1').modal('show');
});
    });
</script>
<script type="text/javascript">
 $(document).ready(function(){
$("#btn_save_fg_1").click(function(){
            event.preventDefault();
            var formval = $('#FGADD_1')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/feemaster/save_applied_scheme_scholarship",
            dataType: 'json',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(response) {
             $('#success').modal('show');     
            setTimeout("location.reload()",1900)
            }
        });
      });
    });
</script>

<script>
$(document).ready(function(){
    $("#class_id").change(function(){
      var class_id = document.getElementById('class_id').value;
        show_product();
        function show_product(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url(); ?>admin/feemaster/getClassSection/' + class_id,
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].section_id+'">'+data[i].section+'</option>';
                    }
                    $('#section_id').html(html);
                }
 
            });
        }
    });
    
    $("#section_id").change(function(){
      var class_id = document.getElementById('class_id').value;
      var section_id = document.getElementById('section_id').value;
        show_product();
        function show_product(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url(); ?>admin/feemaster/getClassSectionStudent/' + class_id + '/' + section_id,
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].ssid+'">'+data[i].admission_no+' - '+data[i].firstname+'</option>';
                    }
                    $('#student_id').html(html);
                }
 
            });
        }
    });
});
</script>