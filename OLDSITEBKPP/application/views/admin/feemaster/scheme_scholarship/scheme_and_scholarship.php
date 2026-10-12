<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
                
                
                <div class="row">
                <div class="col-sm-12">
                <div class="box box-primary">   
                
                <div class="row" id="addfg">
                    <div class="col-md-12">
                        <a href="javascript:void(0);" class="btn btn-info btn-sm item_add_1"  >Add Scheme / Scholarship</a>
                        &nbsp;&nbsp;
                        <a href="javascript:void(0);" class="btn btn-info btn-sm item_add_2"  >Applicable Scheme / Scholarship</a>
                        &nbsp;&nbsp;
                        <a href="javascript:void(0);" class="btn btn-info btn-sm item_add_3"  >Feetype & Scheme / Scholarship</a>
                    </div>
                </div>   
                    
                    
                    
                    
                    
                    <div class="box-body table-responsive">
                    <div class="download_label"><?php echo $this->lang->line('fees_master_list') . " : " . $this->setting_model->getCurrentSessionName(); ?></div>
                    <div class="mailbox-messages">
                    <div class="">  
                    <table class="table table-striped table-bordered table-hover example" style="width:100%">
                        <thead>
                        <tr>
                            <td style="width:10%">#</td>
                            <th style="width:40%">Scheme & Scholarship</th>
                            <th style="width:25%">Class</th>
                            <th style="width:25%">Fee Type</th>
                        </tr>
                        </thead>
                        <tbody id="show_data">
                        <?php
                            $i = '0' ;
                            if (!empty($scholarships)): foreach ($scholarships as $ss): 
                            $i++;
                            
                            $scholarship_value      = $this->feemaster_model->all_scheme_and_scholarship_value_info($ss->ss_id);
                            $scholarship_feetype    = $this->feemaster_model->all_scheme_and_scholarship_feetype_info($ss->ss_id);
                        ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><a href="javascript:void(0);" class="item_update_1" data-fgid_1="<?php echo $ss->ss_id ?>" ><?php echo $ss->ss_name ?></a></td>
                            <td>
                                <table class="table table-striped table-bordered table-hover">
                                    <?php foreach ($scholarship_value as $sv) { 
                                        if ($sv->applicable_class == NULL) { 
                                    ?>
                                    <tr>
                                        <td>All Classess - <?= $sv->fee_concession_type.'/'.$sv->fee_concession; ?></td>
                                        <td><a href="<?= base_url(); ?>admin/feemaster/delete_scheme_and_scholarship_value/<?= $sv->ssv_id; ?>" class="text-danger"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <?php } else { ?>
                                    <tr>
                                        <td><?= $sv->class.' - '.$sv->fee_concession_type.'/'.$sv->fee_concession; ?><a href="<?= base_url(); ?>admin/feemaster/delete_scheme_and_scholarship_value/<?= $sv->ssv_id; ?>"></td>
                                        <td><a href="<?= base_url(); ?>admin/feemaster/delete_scheme_and_scholarship_value/<?= $sv->ssv_id; ?>" class="text-danger"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <?php } ?>
                                    <?php } ?>
                                </table>
                            </td>
                            <td>
                                <table class="table table-striped table-bordered table-hover">
                                    <?php foreach ($scholarship_feetype as $sft) { 
                                    ?>
                                    <tr>
                                        <td><?= $sft->type; ?></td>
                                        <td><a href="<?= base_url(); ?>admin/feemaster/delete_scheme_and_scholarship_feetype/<?= $sft->ssvft_id; ?>" class="text-danger"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <?php } ?>
                                </table>
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
                                <label for="textareaMaxLength" class="col-md-12" style="text-align:left">NAME</label>
                                <input type="text" name="ss_name" id="ss_name" class="form-control" style="width: 100%" required >
                                <br />
                                <label for="textareaMaxLength" class="col-md-12" style="text-align:left">TYPE</label>
                                <select name="ss_type" id="ss_type" class="form-control" style="width: 100%" required >
                                    <option value="SCHEME">SCHEME</option>
                                    <option value="SCHOLARSHIP">SCHOLARSHIP</option>
                                </select>
                                <br />
                                
                                <label for="textareaMaxLength" class="col-md-12" style="text-align:left">APPLICABLE ON</label>
                                <select name="ss_applicable_on" id="ss_applicable_on" class="form-control" style="width: 100%" required >
                                    <option value="3">ALL STUDENT</option>
                                    <option value="2">OLD STUDENT</option>
                                    <option value="1">NEW STUDENT</option>
                                </select>
                                <br />
                                
                                <label for="textareaMaxLength" style="margin-left:5px !important; font-face:bold; font-size:16px; color:red">STATUS</label>
                                <select name="ss_status" id="ss_status" class="form-control" style="width: 100%" required >
                                    <option value="1">ACTIVE</option>
                                    <option value="0">DEACTIVE</option>
                                </select>
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
    <form role="form" action="FGADD_2"  id="FGADD_2" method="post" enctype="multipart/form-data">
            <div class="modal fade" id="Modal_FGADD_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  <div class="modal-header">
                   
                  </div>
                  <br />
                  <div class="col-sm-12"  id="add_new_1"  class="modal-footer" style="text-align:left !important">
                                <label for="textareaMaxLength" class="col-md-12" style="text-align:left">SCHEME / SCHOLARSHIP</label>
                                <select name="ss_id"  class="js-example-basic-multiple form-control">
                                    <option value="">Select Scheme / Scholarship....</option>
                                    <?php foreach ($scholarships as $ss) { ?>
                                    <option value="<?php echo $ss->ss_id ?>"><?php echo $ss->ss_name ?></option>
                                    <?php } ?>
                                </select>
                                <br />
                                
                                <label for="textareaMaxLength" class="col-md-12" style="text-align:left">TYPE</label>
                                <select name="fee_concession_type" id="fee_concession_type" class="form-control" style="width: 100%" required >
                                    <option value="percentage">PERCENTAGE</option>
                                    <option value="fix">FIX</option>
                                    <!--<option value="month">MONTH(s)</option>-->
                                </select>
                                <br />
                                <label for="textareaMaxLength" class="col-md-12" style="text-align:left">VALUE</label>
                                <input type="number" name="fee_concession" id="fee_concession" class="form-control" style="width: 100%" required >
                                <br />
                                <label for="textareaMaxLength" style="margin-left:5px !important; font-face:bold; font-size:16px; color:red">Applicable Class</label>
                                <br>
                                <input type="checkbox" style="margin-left:200px !important" class="" id="all_class" name="all_class" value="1">
                                <label for="all_class" style="margin-left:5px !important">All Class </label><br>
                                
                                <?php
                                foreach ($classes as $cl) { ?>
                                <input type="checkbox" style="margin-left:200px !important" class="" id="class_id<?php echo $cl['id'] ?>" name="class_id[]" value="<?php echo $cl['id'] ?>">
                                <label for="class_id<?php echo $cl['id'] ?>" style="margin-left:5px !important"><?php echo $cl['class'] ?> </label><br>
                                <?php } ?>
                                <br />
                  </div>        
                  
                        <div class="modal-footer">
                        <br />
                            <button type="button" type="submit" name="btn_save_fg_2" id="btn_save_fg_2" class="btn btn-primary"  style="width: 100%; ">SAVE</button>
                        </div>
                    
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL UPDATE-->
        <!--MODAL UPDATE-->
    <form role="form" action="FGADD_3"  id="FGADD_3" method="post" enctype="multipart/form-data">
            <div class="modal fade" id="Modal_FGADD_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  <div class="modal-header">
                   
                  </div>
                  <br />
                  <div class="col-sm-12"  id="add_new_1"  class="modal-footer" style="text-align:left !important">
                                <label for="textareaMaxLength" class="col-md-12" style="text-align:left">SCHEME / SCHOLARSHIP</label>
                                <select name="ss_id"  class="js-example-basic-multiple form-control">
                                    <option value="">Select Scheme / Scholarship....</option>
                                    <?php foreach ($scholarships as $ss) { ?>
                                    <option value="<?php echo $ss->ss_id ?>"><?php echo $ss->ss_name ?></option>
                                    <?php } ?>
                                </select>
                                <br />
                               
                                <?php
                                foreach ($feeTypes as $ft) { ?>
                                <input type="checkbox" style="margin-left:200px !important" class="" id="fee_type<?php echo $ft->fgftid ?>" name="fee_type[]" value="<?php echo $ft->fgftid ?>">
                                <label for="fee_type<?php echo $ft->fgftid ?>" style="margin-left:5px !important"><?php echo $ft->type ?> </label><br>
                                <?php }  ?>
                  </div>        
                  
                       <div class="modal-footer">
                        <br />
                    <button type="button" type="submit" name="btn_save_fg_3" id="btn_save_fg_3" class="btn btn-primary"  style="width: 100%; ">SAVE</button>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL UPDATE-->
        <!--MODAL UPDATE-->
         <form role="form" action="fillFGUpdate"  id="fillFGUpdate" method="post" enctype="multipart/form-data">
            <div class="modal fade" id="Modal_FG_Update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  <div class="modal-header">
                    
                  </div>
                  <br />
                   <div class="col-sm-12" id="show_data_fgupd"  class="modal-footer"></div>
                  <div class="modal-footer">
                     
                       <br />
                    <button type="button" type="submit" name="btn_update_fg" id="btn_update_fg" class="btn btn-primary" style="width: 100%; ">UPDATE</button>
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
$('#addfg').on('click','.item_add_2',function(){
          $('#Modal_FGADD_2').modal('show');
});
    });
</script>
<script type="text/javascript">
  $(document).ready(function(){
$('#addfg').on('click','.item_add_3',function(){
          $('#Modal_FGADD_3').modal('show');
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
            url: "<?php echo base_url(); ?>admin/feemaster/save_scheme_and_scholarship",
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
<script type="text/javascript">
 $(document).ready(function(){
$("#btn_save_fg_2").click(function(){
            event.preventDefault();
            var formval = $('#FGADD_2')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/feemaster/save_scheme_and_scholarship_value",
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
<script type="text/javascript">
 $(document).ready(function(){
$("#btn_save_fg_3").click(function(){
            event.preventDefault();
            var formval = $('#FGADD_3')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/feemaster/save_scheme_and_scholarship_value_feetype",
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
<script type="text/javascript">
      $(document).ready(function(){
          //get data for update
        $('#show_data').on('click','.item_update_1',function(){
            var fgid = $(this).data('fgid_1');
            show_data(); //call function show all product
            function show_data(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url(); ?>admin/feemaster/get_scheme_and_scholarship_info/' + fgid,
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                        html += '<label for="textareaMaxLength" class="col-md-12" style="text-align:left">NAME</label>'+
                        '<input type="text" name="ss_name" class="form-control"  value="'+data.ss_name+'" placeholder="" required><br />'+
                        '<label for="textareaMaxLength" class="col-md-12" style="text-align:left">TYPE</label>'+
                        '<select name="ss_type" ss_type="s_s_type" class="form-control"  value="'+data.ss_type+'" placeholder="" required><option value="SCHEME">SCHEME</option><option value="SCHOLARSHIP">SCHOLARSHIP</option></select><br />'+
                        '<label for="textareaMaxLength" class="col-md-12" style="text-align:left">STATUS</label>'+
                        '<select name="ss_status" id="ss_status" class="form-control"  value="'+data.ss_status+'" placeholder="" required><option value="1">ACTIVE</option><option value="0">DEACTIVE</option></select><br />'+
                        '<input type="hidden" name="ss_id" id="" class="form-control"  value="'+data.ss_id+'" placeholder="" required><br />'+
                        '<br />';
                    $('#show_data_fgupd').html(html);
                    
                }
 
            });
          }
          $('#Modal_FG_Update').modal('show');
        });
      });
</script>
<script type="text/javascript">
 $(document).ready(function(){
$("#btn_update_fg").click(function(){
            event.preventDefault();
            var formval = $('#fillFGUpdate')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/feemaster/update_scheme_and_scholarship",
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