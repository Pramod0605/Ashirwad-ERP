

    <div class="balance-area mg-top-90"></div>
        
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/web/add_observation" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Observation</a>
            </div>
            <div class="col-3 text-center">
                <a href="javascript:void(0);" class="btn btn-sm w-100 parameters" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Parameters</a>
            </div>
            <div class="col-3 text-center">
                <a href="javascript:void(0);" class="btn btn-sm w-100 assign" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Assign</a>
            </div>
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/web/exam" class="btn btn-sm w-100 exam" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><br>Exam</a>
            </div>
    </div>
        
        <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
            <table class="table">
                <tbody>
                    <?php 
                    $i = 0;
                    foreach ($cbseObser as $cbseOb) { 
                    $i += 1;
                    $params  = $StaffModel->all_cbse_exam_observations_parameters_value($cbseOb->id);
                    ?>
                    <tr style="border-bottom:hidden;">
                        <td colspan="4" style="width:100%; text-align:lett"><span class="badge" style="background-color: #6c757d;"><?= $cbseOb->name; ?></span></td>
                    </tr>
                    <tr style="border-top:hidden;">
                        <td colspan="4" style="width:100%"><?= $cbseOb->description; ?></td>
                    </tr>
                    <?php foreach ($params as $param) { ?>
                    <tr style="">
                        <td colspan="2" style="width:50%"><?= $param->pname; ?></td>
                        <td colspan="2" style="width:50%"><?= $param->maximum_marks; ?></td>
                    </tr>
                    <?php } ?>
                    <tr style="border-top:hidden">
                        <td colspan="4" style="width:50%; text-align:center"><a href="<?= base_url(); ?>admin/web/add_observation/<?= $cbseOb->id; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            
        </div>

<!--MODAL PARAM-->
    <form role="form" action="add_parameter"  id="add_parameter" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="add_parameters_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    
                    <div class="col-12 px-1 py-2">
                        <input type="text" name="param_name" class="form-control" value="" placeholder="Param name">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_parameter" id="btn_save_parameter" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL PARAM-->  

<!--MODAL ASSIGN-->
    <form role="form" action="assign_observ"  id="assign_observ" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="assign_observ_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:25% !important">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <br />
                    
                    <div class="col-12 px-1 py-2">
                        <select name="obsrv_id" class="form-control">
                                <option value="">Select Observation</option>
                                <?php foreach ($cbseObser as $cbseO) { ?>
                                <option value="<?= $cbseO->id; ?>"><?= $cbseO->name; ?></option>
                                <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <select name="term_id" class="form-control">
                                <option value="">Select Term</option>
                                <?php foreach ($cbseTerms as $cbseT) { ?>
                                <option value="<?= $cbseT->id; ?>"><?= $cbseT->name; ?></option>
                                <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <textarea name="description" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_assign" id="btn_assign" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--END MODAL ASSIGN-->  

<script type="text/javascript">
    $('#actionTop').on('click','.parameters',function(){
        $('#add_parameters_modal').modal('show');
    });
</script>
<script type="text/javascript">
    $('#actionTop').on('click','.assign',function(){
        $('#assign_observ_modal').modal('show');
    });
</script>
<script type="text/javascript">
 $(document).ready(function(){
$("#btn_save_parameter").click(function(){
            event.preventDefault();
            var formval = $('#add_parameter')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/save_parameter",
            dataType: 'json',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(response) {
            window.setTimeout(function() {location.reload();}, 100);
            }
        });
      });
    });
</script>
<script type="text/javascript">
 $(document).ready(function(){
$("#btn_assign").click(function(){
            event.preventDefault();
            var formval = $('#assign_observ')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/web/assign_observation",
            dataType: 'json',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(response) {
            window.setTimeout(function() {location.reload();}, 100);
            }
        });
      });
    });
</script>