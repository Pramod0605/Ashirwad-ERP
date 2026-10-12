<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
if (isset($_SESSION['off_mode'])) {
    $paymentMode = $_SESSION['off_mode'];
} else {
    $paymentMode = null;
}

if (isset($_SESSION['off_amount'])) {
    $paymentAmnt = $_SESSION['off_amount'];
} else {
    $paymentAmnt = 0;
}
?>
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
                        <h3 class="box-title titlefix">Upload Payment Receipt </h3>
                        <div class="box-tools pull-right">
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <?php if ($setting->offline_bank_payment_instruction) {?>
                    <div class="box-body pb0">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="font15" for="payment_date_error"><?php echo $this->lang->line('instructions'); ?></label>
                                <div class="unorder-list">
                                    <?php echo $setting->offline_bank_payment_instruction; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>

                    <form id="form1" action="<?php echo site_url('user/offlinepayment') ?>"  name="offlinepayment" method="post" accept-charset="utf-8" enctype="multipart/form-data">
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
                                            <!--<input id="bank_from" name="bank_from" placeholder="" type="text" class="form-control"  value="< ?php echo set_value('bank_from'); ?>" />
											-->
											<select id="bank_from" name="bank_from" class="form-control" >
											<option value="GPay">GPay</option>
											<option value="PhonePay">PhonePay</option>
											<option value="UPI" <?php if ($paymentMode == 'UPI') { echo 'selected'; } ?>>UPI</option>
											<option value="QR Code">QR Code</option>
											<option value="PayTM">PayTM</option>
											<option value="Net Banking" <?php if ($paymentMode == 'Netbanking') { echo 'selected'; } ?> >Net Banking</option>
											</select>                                           
										   <span class="text-danger"><?php echo form_error('bank_from'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="bank_account_transferred">Payment Through (Ex : Bank Name Like ICIC, HDFC / Google Pay / Phone Pe, etc.)</label><small class="req"> *</small>
                                            <input id="bank_account_transferred" name="bank_account_transferred" placeholder="" type="text" class="form-control"  value="<?php echo set_value('bank_account_transferred'); ?>" />
                                            <span class="text-danger"><?php echo form_error('bank_account_transferred'); ?></span>
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                           <div class="form-group">
                                            <label for="reference">Reference ( Ex : UTR No , Transaction No ) </label>
                                            <input id="reference" name="reference" placeholder="" type="text" class="form-control"  value="<?php echo set_value('reference'); ?>" />
                                            <span class="text-danger"><?php echo form_error('reference'); ?></span>
                                        </div>
                                    </div>
                                </div>
                             <div class="row">
                                 <div class="col-md-6">
                                      <div class="form-group">
                                            <label for="amount"><?php echo $this->lang->line('amount_paid'); ?> (<?php echo $currency_symbol; ?>) </label><small class="req"> *</small>
                                            <input id="amount" name="amount" placeholder="" type="number" class="form-control"  value="<?= $paymentAmnt; ?>" <?php if (!empty($paymentAmnt)) { echo 'readonly'; } ?> />
                                            <span class="text-danger"><?php echo form_error('amount'); ?></span>
                                        </div>
                                 </div>
                                   <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Upload Reciept / Payment Screen shot</label>
                                           <input id="attachment" name="attachment" type="file" class="filestyle form-control"  />
                                            <span class="text-danger"><?php echo form_error('attachment'); ?></span>
                                        </div>
                                 </div>
                             </div>
							  <div class="row">
                                 <div class="col-md-6">
                                      <div class="form-group">
                                            <label for="student_name">Student Name</label> 
                                            <input id="student_name" name="student_name" placeholder="" type="text" class="form-control"  value="<?= $student?> " />
                                            <span class="text-danger"><?php echo form_error('student_name'); ?></span>
                                        </div>
                                 </div>
                                   <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="mobile_no">Mobile No.</label>
                                          <input id="alt_mobile_no" name="alt_mobile_no" placeholder="" type="number" class="form-control"    />
                                            <span class="text-danger"><?php echo form_error('mobile_no'); ?></span>
                                        </div>
                                 </div>
                             </div>
                            </div><!-- /.box-body -->
                    <div class="box-footer">
                   <button type="submit" class="btn btn-primary  pull-right"> <?php echo $this->lang->line('save'); ?></button>
                   </div>
               </form>
                </div>
				
				<p>
				<b>Instructions for Uploading Your Payment Receipt</b></br>
				<p>Parents are required to upload their payment receipts following the steps below to ensure the smooth processing of their payment information. Please make sure all details are correctly entered to avoid any delays.</p></br>
	<ol>
		<li>	Date of Receipt of Payment
o	Enter the date when the payment was made. Format: DD/MM/YYYY.
</li>
<li>	Mode of Payment <br>
 	Select the mode of payment used. Options include:
	<ul>
	<li>	Paytm
		</li><li>
		Phone Pe
		</li><li>
		Gpay
		</li><li>
		Netbanking
		</li> 
	</ul>
</li>
<li>
 	Payment Through<br>
 	Specify the method of payment. Examples include:
	<ul><li>	Bank Name (e.g., ICICI, HDFC)
	</li><li>
 	Google Pay
	</li><li>
 	Phone Pe
	</li></ul>
</li>
<li>
 	Reference<br>
 	Enter the reference number for the transaction. This could be:
	<ul>
	<li>	UTR No
	</li><li>Transaction No</li>
	</ul>
</li><li>
 	Amount Paid (₹)<br>
		<ul><li>Enter the exact amount paid in Indian Rupees (₹).</li></ul>
			 
	</li><li>		
	 Upload Receipt / Payment Screenshot<br>
			<ul><li>	Upload a clear image or screenshot of the receipt or payment confirmation screen.
			</li><li>
			  Accepted file formats: JPEG, PNG, PDF.
			  </li>
		</ul>
</li><li>
 	Mobile No.<br>
	<ul><li>
		Provide a mobile number where we can contact you for any further information or verification.
		</li></ul>
</li>
</ol>
<b>Example Form Layout:</b></br>
<ol>
<li>
	Date of Receipt of Payment: <br>
<ul><li>	Enter Date (e.g., 01/08/2024)</li></ul>
</li><li>
	Mode of Payment:
<ul><li>	Select from dropdown (e.g., Paytm)</li></ul>
</li><li>
 	Payment Through:
<ul><li>		Enter Payment Method (e.g., HDFC Bank)</li></ul>
</li><li>
	Reference:
<ul><li>	Enter Reference Number (e.g., UTR123456789)</li></ul>
</li><li>
	Amount Paid (₹):
<ul><li>	Enter Amount (e.g., 5000)</li></ul>
</li><li>
 	Upload Receipt / Payment Screenshot:
<ul><li>		Upload Button</li></ul>
</li><li>
	Mobile No.:
<ul><li>		Enter Mobile Number (e.g., 9876543210)</li></ul>
</li></ol>
<b>By following these steps and providing accurate information, you help us to process your payment efficiently.
 <br>Thank you for your cooperation!
</b>

				</p>
				
            </div><!--/.col (left) col-8 end-->
            <!-- right column -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->