<link rel="stylesheet" href="<?= base_url() ?>backend/finance/css/mystyle.css">
<link rel="stylesheet" href="<?= base_url() ?>backend/finance/plugins/jquery-ui/jquery-ui.css">
<script src="<?= base_url() ?>backend/finance/js/myjs.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#LedgerGroupId').trigger('change');
	$("#LedgerGroupId").select2({width:'100%'});
});

	function getLedgerNumber() {
		var id = $("#LedgerGroupId option:selected").val()
		$.ajax({
	    	type:"POST",
	        url: "<?=base_url(); ?>" + "finance/ledgers/getNextCode",
	    	data: { id }
	    }).done(function(msg){
	    	$('#l_code').val(msg);
	    });
	}
</script>

<style type="text/css">
.select2-container--default .select2-results__option {
	font-weight: bold;
	color: #333;
}
</style>

<div class="content-wrapper">
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <!-- <div class="card-header with-border">
              <h3 class="card-title"><?= lang('ledgers_views_add_title'); ?></h3>
            </div> -->
            <!-- /.card-header -->
            <div class="card-body">
            	<?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>

				<div class="ledgers add form">
					<?php
						echo form_open(); ?>
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label><?= lang('ledgers_views_add_label_parent_group'); ?></label>
									<?= form_dropdown('group_id', $parents, set_value('group_id'), array('id' => 'LedgerGroupId', 'class'=>'form-control', 'onchange'=>"getLedgerNumber()")); ?>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label><?= lang('ledgers_views_add_label_ledger_code'); ?></label>
									<input type="text" name="code" id="l_code" value="<?= set_value('code');?>" class="form-control">
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label><?= lang('ledgers_views_add_label_ledger_name'); ?></label>
									<input type="text" name="name" value="<?= set_value('name');?>" class="form-control">
								</div>
							</div>
						
						
							<div class="col-md-12">
				                <label for="feetype_id" class="col-md-12 control-label">Fee Head</label> 
				                    <select class="form-control" name="feetype_id[]" multiple>
				                        <option value="">Select...</option>
				                        <?php foreach ($feeTypes as $feetype) { ?>
				                        <option value="<?= $feetype->id; ?>"><?= $feetype->type; ?></option>
				                        <?php } ?>
				                    </select>
				                    <div class="input-group-append">
	                        	        <span class="input-group-text">
                                            <i class="fa fa-info-circle" data-toggle="tooltip" title="Note : Select only if specific ledger is bank or cash receipt account for specific fees head"></i>
                                        </span>
	                                </div>
				            </div>
				            
				            <div class="form-group">
                                <div class="input-group">
                  	                <label><input type="checkbox" name="is_link_to_transport_fee" class="form-control" <?= set_value('is_link_to_transport_fee') ? 'checked' : '' ?> style="appearance:auto !important"> Is it link to Transport Fee Collection ?</label>
                                    <div class="input-group-append" style="margin-left: 10px;">
                      	                <span class="input-group-text">
                                            <i class="fa fa-info-circle" data-toggle="tooltip" title=" Check it if this is a bank account and you will receive payment in this account"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
				        
				        </div>
				        

						<div class="form-group">
							<label><?= lang('ledgers_views_add_label_op_blnc'); ?></label>
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-4">
											<?= form_dropdown('op_balance_dc', array('D' => lang('entries_views_addrow_label_dc_drcr_D'), 'C' => lang('entries_views_addrow_label_dc_drcr_C')), set_value('op_balance_dc'), array('class'=>'form-control')); ?>
										</div>
										<div class="col-md-8">
											<div class="form-group">
							          <div class="input-group">
													<input type="number" value="<?= set_value('op_balance'); ?>" name="op_balance" class="form-control">
		                        <div class="input-group-append">
			                      	<span class="input-group-text">
			                          <i class="fa fa-info-circle" data-toggle="tooltip" title="<?php echo lang('ledgers_views_add_op_blnc_tooltip');?>"></i>
			                        </span>
			                      </div>
		                    </div>
		                    <!-- /.input group -->
			                </div>
			                <!-- /.form group -->
										</div>
									</div>
								</div>
							</div>
						</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<div class="input-group">
									<label><input  type="checkbox" name="type" class="form-control" <?= set_value('type') ? 'checked' : '' ?> style="appearance:auto !important"> <?= lang('ledgers_views_add_label_bank_cash_account'); ?></label>
									<div class="input-group-append"  style="margin-left: 10px;">
                  	<span class="input-group-text">
                      <i class="fa fa-info-circle" data-toggle="tooltip" title="<?php echo lang('ledgers_views_add_bank_cash_account_tooltip');?>"></i>
                    </span>
                  </div>
								</div>
								<!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group">
                  <div class="input-group">
                  	<label><input type="checkbox" name="reconciliation" class="form-control" <?= set_value('reconciliation') ? 'checked' : '' ?> style="appearance:auto !important"> <?= lang('entries_views_add_label_reconciliation'); ?></label>
                      <div class="input-group-append" style="margin-left: 10px;">
                      	<span class="input-group-text">
                          <i class="fa fa-info-circle" data-toggle="tooltip" title="<?php echo lang('ledgers_views_add_reconciliation_tooltip');?>"></i>
                        </span>
                      </div>
                  </div>
                  <!-- /.input group -->
              </div>
              <!-- /.form group -->
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label><?= lang('ledgers_views_add_label_notes'); ?></label>
								<textarea name="notes" rows="3" class="form-control"><?= set_value('notes') ?></textarea>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="card-footer">
            	<div class="form-group">
					<input type="submit" name="submit" value="<?= lang('submit'); ?>" class="btn btn-primary  float-right">
					<a href="<?=base_url(); ?>accounts" class="btn btn-danger float-right" style="margin-right: 5px;"><?= lang('ledgers_views_add_label_cancel_btn'); ?></a>
				</div>
		    </div>
		    <?= form_close(); ?>
        </div>
    </div>
    <!-- /.row -->
    </div>
</section>
</div>
<!-- /.content -->