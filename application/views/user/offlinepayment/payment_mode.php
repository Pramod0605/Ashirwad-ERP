<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();

?>
<style>
td, th {
    padding: 10px;
	width:150px;
	
}
table{
	width: -webkit-fill-available;
}
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-ioxhost"></i> <?php //echo $this->lang->line('front_office'); ?></h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"> Step-by-Step Instructions for Fee Payment</h3>
                        <div class="box-tools pull-right">
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    
					<div class="box-body pb0">
                        <div class="row">
                            <div class="col-md-12">
                                 <div class="unorder-list">
								 <b>Step 1: Choose Your Payment Method</b> <br>
								 <table>
									<tr>
										<td style="width:40%;" ><img src="<?= base_url()?>uploads/offline_payments/QR_code.jpeg"	style="width:50% !important;height=50% !important;"><br>	
										</td>
										<td><b>Option 1: QR Code </b><br>
										Open your preferred payment app (Google Pay, PhonePe, PayTM). <br>
									Tap on the "Scan QR Code" option. <br>
									Scan the provided QR code to make the payment. <br> <br></td>
									</tr>
									<tr>
									<td><b>UPI ID : DATTATREYA456@SBI</b></td>
									<td><b>Option 2: UPI</b><br>
									Open your preferred UPI app (Google Pay, PhonePe, PayTM). <br>
									Enter the UPI ID provided. <br>
									
									Enter the amount to be paid and proceed with the payment. <br> <br>
									</td>
									</tr>
									<tr>
										<!--<td style="width:50px;" ><img src="< ?= base_url()?>uploads/offline_payments/netbanking.jpeg"	style="width:50% !important;height=50% !important;"><br>-->	
										<td>
											<b><p>Manager,</p>
											<p>Appa Public School,</p>
											<p>CBSE, Kalaburagi</p>
											<p>State Bank of India</p>
											<p>A/c No : 39265769124</p>
											<p>IFSC Code: SBIN0021116</p></b>
										</td>
									<td><b>Option 3: Net Banking</b><br>
									Log in to your bank's net banking portal. <br>
									Navigate to the 'Payments' or 'Transfer' section. <br>
									Enter the beneficiary details (account number, IFSC code) as provided. <br>
									Enter the amount to be paid and confirm the transaction. <br> <br>
									</td>
									</tr>
									
								 </table>
                                <p>  <br>
								  
									 
									 
									<b>Step 2: Upload the Payment Receipt </b><br>
									After completing the payment, ensure you save the payment receipt or take a screenshot of the successful transaction. <br>
									Navigate to the payment portal's next page where you need to upload the receipt. <br>
									Click on the "Upload Receipt" button. <br> <br>
								 
									 
									<b>Step 3: Upload the Details and Save </b><br>
									In the upload section, click on the "Choose File" button to browse your device for the saved payment receipt. <br>
									Select the file and click "Open" to attach it. <br>
									Enter any additional details required such as the transaction ID, date, and amount. <br>
									Review the information entered for accuracy. <br>
									Click on the "Save" button to submit your payment details. <br> <br>
									 
									 
									<b>Step 4: Verification and Approval</b> <br>
									The school team will review the uploaded payment receipt and details. <br>
									Once verified, the school team will approve the payment. <br>
									You will receive a confirmation notification once the payment is approved. <br>
									Your payment process is now complete! If you encounter any issues or need further assistance, please contact the support team. <br>
									 
									</p>
                                </div>
                            </div>
                        </div>
                    </div> 
					<a href="<?php echo site_url('user/offlinepayment') ?>"><button type="button" class="btn btn-primary  pull-right"> Upload Receipt</button></a>
					
					
					 
                    <form id="form1" action="<?php echo site_url('user/offlinepayment') ?>"  name="offlinepayment" method="post" accept-charset="utf-8" enctype="multipart/form-data" style="display:none;" >
                        <div class="box-body">
                                <?php if ($this->session->flashdata('msg')) {
    ?>
                                    <?php
									echo $this->session->flashdata('msg');
										$this->session->unset_userdata('msg');
										?>
                                <?php }?>
                                <?php echo $this->customlib->getCSRF(); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                             <div class="form-group">
                                            <label for="payment_date_error"><?php echo $this->lang->line('date_of_payment'); ?></label><small class="req"> *</small>
                                            <input id="payment_date" name="payment_date" placeholder="" type="text" class="form-control date"  value="<?php echo set_value('payment_date'); ?>" />
                                            <span class="text-danger"><?php echo form_error('payment_date'); ?></span>
                                        </div>
                                    </div>

                                      <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="bank_from"><?php echo $this->lang->line('payment_mode'); ?></label><small class="req"> *</small>
                                            <input id="bank_from" name="bank_from" placeholder="" type="text" class="form-control"  value="<?php echo set_value('bank_from'); ?>" />
                                            <span class="text-danger"><?php echo form_error('bank_from'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="bank_account_transferred"><?php echo $this->lang->line('payment_from'); ?></label><small class="req"> *</small>
                                            <input id="bank_account_transferred" name="bank_account_transferred" placeholder="" type="text" class="form-control"  value="<?php echo set_value('bank_account_transferred'); ?>" />
                                            <span class="text-danger"><?php echo form_error('bank_account_transferred'); ?></span>
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                           <div class="form-group">
                                            <label for="reference"><?php echo $this->lang->line('reference'); ?>   </label>
                                            <input id="reference" name="reference" placeholder="" type="text" class="form-control"  value="<?php echo set_value('reference'); ?>" />
                                            <span class="text-danger"><?php echo form_error('reference'); ?></span>
                                        </div>
                                    </div>
                                </div>
                             <div class="row">
                                 <div class="col-md-6">
                                      <div class="form-group">
                                            <label for="amount"><?php echo $this->lang->line('amount_paid'); ?> (<?php echo $currency_symbol; ?>) </label><small class="req"> *</small>
                                            <input id="amount" name="amount" placeholder="" type="number" class="form-control"  value="<?php echo set_value('amount'); ?>" />
                                            <span class="text-danger"><?php echo form_error('amount'); ?></span>
                                        </div>
                                 </div>
                                   <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo $this->lang->line('proof_of_payment'); ?></label>
                                           <input id="attachment" name="attachment" type="file" class="filestyle form-control"  />
                                            <span class="text-danger"><?php echo form_error('attachment'); ?></span>
                                        </div>
                                 </div>
                             </div>
                            </div><!-- /.box-body -->
                    <div class="box-footer">
                   <button type="submit" class="btn btn-primary  pull-right"> <?php echo $this->lang->line('save'); ?></button>
                   </div>
               </form>
                </div>
            </div><!--/.col (left) col-8 end-->
            <!-- right column -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->