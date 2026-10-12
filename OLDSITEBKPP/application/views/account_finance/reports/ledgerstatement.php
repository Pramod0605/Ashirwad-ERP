    <link rel="stylesheet" href="<?= base_url() ?>backend/finance/css/mystyle.css">
    <link rel="stylesheet" href="<?= base_url() ?>backend/finance/plugins/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="<?= base_url() ?>backend/finance/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>backend/finance/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	<script src="<?= base_url() ?>backend/finance/js/myjs.js"></script>
	<script src="<?= base_url() ?>backend/finance/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>backend/finance/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url() ?>backend/finance/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?= base_url() ?>backend/finance/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="<?= base_url() ?>backend/finance/plugins/datatables-buttons/js/buttons.flash.min.js"></script>
	<script src="<?= base_url() ?>backend/finance/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="<?= base_url() ?>backend/finance/plugins/datatables-buttons/js/buttons.print.min.js"></script> 
	

<?php   
        $input                 = $this->setting_model->getCurrentSessionName();
        list($a, $b)  = explode('-', $input);
        $Current_year = $a;
        if (strlen($b) == 2) {
            $Next_year = substr($a, 0, 2) . $b;
        } else {
            $Next_year = $b;
        }
        $year_str_month     = $Current_year . '-04-01';
        $year_end_month     = date("Y-m-t", strtotime($Next_year . '-03-31'));
        


?>

<script type="text/javascript">
$(document).ready(function() {
	<?php if ($showEntries)  {  ?>
		$('#showEntries').slideDown();
	<?php } else { ?>
		$('#showEntries').slideUp();
	<?php } ?>

	/* Calculate date range in javascript */
	startDate = new Date(<?php echo strtotime($year_str_month) * 1000.05; ?>  + (new Date().getTimezoneOffset() * 60 * 1000));
	endDate = new Date(<?php echo strtotime($year_end_month) * 1000.05; ?>  + (new Date().getTimezoneOffset() * 60 * 1000));

	$("#ReportLedgerId").select2({width:'100%'});

	$(document.body).on("change","#ReportLedgerId",function(){
		if(this.value == 0){
			$('#ReportStartdate').prop('disabled', true);
			$('#ReportEnddate').prop('disabled', true);
		} else {
			$('#ReportStartdate').prop('disabled', false);
			$('#ReportEnddate').prop('disabled', false);
		}
	});

	$('#ReportLedgerId').trigger('change');

	/* Setup jQuery datepicker ui */
	$('#ReportStartdate').datepicker({
		minDate: startDate,
		maxDate: endDate,
		dateFormat: 'YYYY-MM-DD',
		numberOfMonths: 1,
		onClose: function(selectedDate) {
			if (selectedDate) {
				$("#ReportEnddate").datepicker("option", "minDate", selectedDate);
			} else {
				$("#ReportEnddate").datepicker("option", "minDate", startDate);
			}
		}
	});

	$('#ReportEnddate').datepicker({
		minDate: startDate,
		maxDate: endDate,
		dateFormat: 'YYYY-MM-DD',
		numberOfMonths: 1,
		onClose: function(selectedDate) {
			if (selectedDate) {
				$("#ReportStartdate").datepicker("option", "maxDate", selectedDate);
			} else {
				$("#ReportStartdate").datepicker("option", "maxDate", endDate);
			}
		}
	});
});
</script>
<!-- Main content -->
<div class="content-wrapper">
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-primary card-outline">
				<!-- <div class="card-header with-border">
					<h3 class="card-title"><?= $title; ?></h3>
				</div> -->
				<!-- /.card-header -->
				<div class="card-body">
					<div class="balancesheet form">
						<?php echo form_open(); ?>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label><?= lang('ledger_acc_name'); ?></label>
										<select class="form-control" id="ReportLedgerId" name="ledger_id">
											<?php foreach ($ledgers as $id => $ledger): ?>
												<option value="<?= $id; ?>" <?= ($id < 0) ? 'disabled' : "" ?> <?= (($this->input->post('ledger_id') == $id) or ($this->uri->segment(4) == $id)) ?'selected':''?>><?= $ledger; ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label><?= lang('start_date'); ?></label>
										<div class="input-group">
											<input id="ReportStartdate" type="text" name="startdate" class="form-control" value="<?=(isset($startdate) ? $startdate : '');?>">
											<div class="input-group-append">
												<span class="input-group-text">
													<i class="fa fa-info-circle" data-toggle="tooltip" title="<?= lang('start_date_span') ;?>">
													</i>
												</span>
											</div>
										</div>
										<!-- /.input group -->
									</div>
									<!-- /.form group -->
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label><?= lang('end_date') ;?></label>
										<div class="input-group">
											<input id="ReportEnddate" type="text" name="enddate" class="form-control" value="<?=(isset($enddate) ? $enddate : '');?>">
											<div class="input-group-append">
												<span class="input-group-text">
													<i class="fa fa-info-circle" data-toggle="tooltip" title="<?= lang('end_date_span') ;?>">
													</i>
												</span>
											</div>
										</div>
										<!-- /.input group -->
									</div>
									<!-- /.form group -->
								</div>
							</div>
							<div class="btn-group float-right">
								<?php
									if ($this->input->post('ledger_id')){
										$get = $this->input->post('ledger_id');

										if ($this->input->post('startdate')) {
											$get .= "?startdate=". $this->input->post('startdate');
										}

										if ($this->input->post('enddate')) {
											$get .= "&enddate=". $this->input->post('enddate');
										}
								?>
								<?php
									}
								?>
								<input type="submit" name="submit" id="search_submit" class="btn btn-primary" value="<?=lang('submit');?>">
								<input type="reset" name="reset" class="btn btn-danger" value="<?= lang('clear'); ?>">
							</div>
						<?php form_close();  ?>
					</div>
					<br>
					<div id="showEntries" style="display: none;">
						<div class="subtitle" id="subtitle">
							<?php echo $subtitle; ?>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-md-6">
								<table class="summary stripped table-condensed">
									<tr>
										<td class="td-fixwidth-summary"><?php echo lang('ledgers_views_add_label_bank_cash_account'); ?></td>
										<td id="ledger_type">
											<?php
											echo ($ledger_data['type'] == 1) ? 'Yes' : 'No';
											?>
										</td>
									</tr>
									<tr>
										<td class="td-fixwidth-summary"><?php echo lang('ledgers_views_add_label_notes'); ?></td>
										<td id="ledger_notes"><?php echo ($ledger_data['notes']); ?></td>
									</tr>
								</table>
							</div>
							<div class="col-md-6">
								<table class="summary stripped table-condensed">
									<tr>
										<td class="td-fixwidth-summary" id="opening_title"><?php echo $opening_title; ?></td>
										<td id="opening_balance"><?php echo $this->functionscore->toCurrency($op['dc'], $op['amount']); ?></td>
									</tr>
									<tr>
										<td class="td-fixwidth-summary" id="closing_title"><?php echo $closing_title; ?></td>
										<td id="closing_balance"><?php echo $this->functionscore->toCurrency($cl['dc'], $cl['amount']); ?></td>
									</tr>
								</table>
							</div>
						</div>
  						<div class="table-responsive" id="entry_table"></div>
  						<div align="center" id="pagination_link"></div>
						<!-- <table class="stripped" id="ledgerstatement_table" style="width: 100%;">
							<thead>
								<tr>
									<th><?php echo lang('date'); ?></th>
									<th><?php echo lang('number'); ?></th>
									<th><?php echo lang('ledger'); ?></th>
									<th><?php echo lang('type'); ?></th>
									<th><?php echo lang('tag'); ?></th>
									<th><?php echo lang('dr_amount'); ?><?php echo ' (' . $this->mAccountSettings->currency_symbol . ')'; ?></th>
									<th><?php echo lang('cr_amount'); ?><?php echo ' (' . $this->mAccountSettings->currency_symbol . ')'; ?></th>
									<th><?php echo lang('balance'); ?><?php echo ' (' . $this->mAccountSettings->currency_symbol . ')'; ?></th>
									<th><?php echo lang('actions'); ?></th>
								</tr>
							</thead>
							<?php
								/* Current opening balance */
								$entry_balance['amount'] = $current_op['amount'];
								$entry_balance['dc'] = $current_op['dc'];
								echo '<tr class="tr-highlight">';
								echo '<td colspan="7">';
								echo lang('curr_opening_balance');
								echo '</td>';
								echo '<td>' . $this->functionscore->toCurrency($op['dc'], $op['amount']) . '</td>';
								echo '<td></td>';
								echo '</tr>';
							?>
							<?php
								/* Show the entries table */
								foreach ($entries as $entry) {
									/* Calculate current entry balance */
									$entry_balance = $this->functionscore->calculate_withdc(
										$entry_balance['amount'], $entry_balance['dc'],
										$entry['amount'], $entry['dc']
									);

									$et = $this->db->where('id', $entry['cyc_entrytype_id'])->get('cyc_entrytypes')->row_array();
									$entryTypeName = $et['name'];
									$entryTypeLabel = $et['label'];

									/* Negative balance if its a cash or bank account and balance is Cr */
									if ($ledger_data['type'] == 1) {
										if ($entry_balance['dc'] == 'C' && $entry_balance['amount'] != '0.00') {
											echo '<tr class="error-text">';
										} else {
											echo '<tr>';
										}
									} else {
										echo '<tr>';
									}

									echo '<td>' . $this->functionscore->dateFromSql($entry['date']) . '</td>';
									echo '<td>' . ($this->functionscore->toEntryNumber($entry['number'], $entry['entrytype_id'])) . '</td>';
									echo '<td>' . ($this->functionscore->entryLedgers($entry['id'])) . '</td>';
									echo '<td>' . ($entryTypeName) . '</td>';
									echo '<td>' . $this->functionscore->showTag($entry['tag_id'])  . '</td>';

									if ($entry['dc'] == 'D') {
										echo '<td>' . $this->functionscore->toCurrency('D', $entry['amount']) . '</td>';
										echo '<td>-</td>';
									} else if ($entry['dc'] == 'C') {
										echo '<td>-</td>';
										echo '<td>' . $this->functionscore->toCurrency('C', $entry['amount']) . '</td>';
									} else {
										echo '<td>' . lang('error') . '</td><td>' . lang('error') . '</td>';
									}

									echo '<td>' . $this->functionscore->toCurrency($entry_balance['dc'], $entry_balance['amount']) . '</td>';

									echo '<td>';
								
								 	echo '<a href="'.base_url('entries/view/').($entryTypeLabel).'/'.$entry['id'].'" style="padding-right: 5px;" title="'.lang('view').'" data-toggle="tooltip"><i class="glyphicon glyphicon-log-in"></i></a>';

								 	echo '<a href="'.base_url('entries/edit/').($entryTypeLabel).'/'.$entry['id'].'" style="padding-right: 1px;" title="'.lang('edit').'" data-toggle="tooltip"><i class="glyphicon glyphicon-edit"></i></a>';
								 	
								 	echo '<a href="'.base_url('entries/delete/').($entryTypeLabel).'/'.$entry['id'].'" title="'.lang('delete').'" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i></a>';
									echo '</td>';
									echo '</tr>';
								}
							?>
							<?php
								/* Current closing balance */
								echo '<tr class="tr-highlight">';
								echo '<td colspan="7">';
								echo lang('curr_closing_balance');
								echo '</td>';
								echo '<td>' . $this->functionscore->toCurrency($cl['dc'], $cl['amount']) . '</td>';
								echo '<td></td>';
								echo '</tr>';
							?>
						</table> -->
						<div id="pagination"></div>
					</div>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->
</div>
<script type="text/javascript">
	$(document).ready(function() {
		function load_country_data(page, op_balance = null) {
			$.ajax({
				url:"<?php echo base_url('finance/reports/pagination/'); ?>"+page+"/"+op_balance,
				method:"POST",
				data: {
					ledger_id: $('#ReportLedgerId').val(),
					startdate: $('#ReportStartdate').val(),
					enddate: $('#ReportEnddate').val(),
				},
				dataType:"json",
				success:function(data) {
					$('#entry_table').html(data.entry_table.entry_table_html);
					$('#pagination_link').html(data.pagination_link);
				}
			});
		}

		$(document.body).on("change","#ReportLedgerId",function(){
			load_country_data(1);
		});

		load_country_data(1);

		$(document).on("click", ".pagination li a", function(event){
			event.preventDefault();
			var page = $(this).data("ci-pagination-page");
			var op_balance = $('#cl_td').data("op-balance");
			load_country_data(page, op_balance);
		});
	});
</script>