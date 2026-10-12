<?php

$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
?>
<style type="text/css">
    .collect_grp_fees{
      font-size: 15px;
    font-weight: 600;
    padding-bottom: 15px;
    }

    .fees-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .fees-list>.item {
        border-radius: 3px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        padding: 10px 0;
        background: #fff;
    }
    .fees-list>.item:before, .fees-list>.item:after {
        content: " ";
        display: table;
    }
    .fees-list>.item:after {
        clear: both;
    }
    .fees-list .product-img {
        float: left;
    }
    .fees-list .product-img img {
        width: 50px;
        height: 50px;
    }
    .fees-list .product-info {
        margin-left: 0px;
    }
    .fees-list .product-title {
        font-weight: 600;
        font-size: 15px;
        display: inline;
    }
    .fees-list .product-title span{

        font-size: 15px;
        display: inline;
        font-weight: 100 !important;
    }
    .fees-list .product-description {
        display: block;
        color: #999;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    .fees-list-in-box>.item {
        -webkit-box-shadow: none;
        box-shadow: none;
        border-radius: 0;
        border-bottom: 1px solid #f4f4f4;
    }
    .fees-list-in-box>.item:last-of-type {
        border-bottom-width: 0;
    }

.fees-footer {
    border-top-color: #f4f4f4;
}
.fees-footer {
    padding: 15px 0px 0px 0px;
    text-align: right;
    border-top: 1px solid #e5e5e5;
}

</style>

<ul class="fees-list fees-list-in-box">
    <?php
$row_counter    = 1;
$total_amount   = 0;
$ps_balancee    = 0;
$ps_count       = 0;
foreach ($feearray as $fee_key => $fee_value) {

    $amount_prev_paid   = 0;
    $fees_fine_amount   = 0;
    $fine_amount_paid   = 0;
    $fine_amount_status = false;

    if ($fee_value->fee_category == "fees") {
        $amount_to_be_pay = $fee_value->amount;

        if ($fee_value->is_system) {
            $amount_to_be_pay   = $fee_value->student_fees_master_amount;
        }

        if (is_string(($fee_value->amount_detail)) && is_array(json_decode(($fee_value->amount_detail), true))) {

            $amount_data = json_decode($fee_value->amount_detail);

            foreach ($amount_data as $amount_data_key => $amount_data_value) {
                $fine_amount_paid += $amount_data_value->amount_fine;
                $amount_prev_paid = $amount_prev_paid + ($amount_data_value->amount + $amount_data_value->amount_discount);
            }

            if ($fee_value->is_system) {
                $amount_to_be_pay = $fee_value->student_fees_master_amount - $amount_prev_paid;
            } else {
                $amount_to_be_pay = $fee_value->amount - $amount_prev_paid;
            }
        }

        if (($fee_value->due_date != "0000-00-00" && $fee_value->due_date != null) && (strtotime($fee_value->due_date) < strtotime(date('Y-m-d'))) && $amount_to_be_pay > 0) {
            $fees_fine_amount   = $fee_value->fine_amount - $fine_amount_paid;
            $total_amount       = $total_amount + $fees_fine_amount;
            $fine_amount_status = true;
        }

        $total_amount = $total_amount + $amount_to_be_pay;
        if ($amount_to_be_pay > 0) {
            
            if ($fee_value->is_system) {
                $ps_balancee        = 1;
                $ps_count          += 1;
            } else {
                $ps_balancee        = 0;
                $ps_count          += 0;
            }
        ?>

            <li class="item">
                <input class="checkbox fee-checkbox" type="checkbox" data-fcat="fees" data-stfi="0" data-sfmi="<?php echo $fee_value->id; ?>" data-fgfi="<?php echo $fee_value->fee_groups_feetype_id; ?>" data-amount="<?php echo $amount_to_be_pay; ?>" data-is_ps="<?php echo $ps_balancee; ?>" name="row_counter[]" type="hidden" value="<?php echo $row_counter; ?>">
                <input name="student_fees_master_id_<?php echo $row_counter; ?>" type="hidden" value="<?php echo $fee_value->id; ?>">
                <input name="fee_groups_feetype_id_<?php echo $row_counter; ?>" type="hidden" value="<?php echo $fee_value->fee_groups_feetype_id; ?>">
                 <input name="fee_groups_feetype_fine_amount_<?php echo $row_counter; ?>" type="hidden" value="<?php echo $fees_fine_amount; ?>">
                <input name="fee_amount_<?php echo $row_counter; ?>" type="hidden" value="<?php echo $amount_to_be_pay; ?>">
                   <input name="fee_category_<?php echo $row_counter; ?>" type="hidden" value="<?php echo $fee_value->fee_category; ?>">
                <input name="trans_fee_id_<?php echo $row_counter; ?>" type="hidden" value="0">

                <div class="product-info">
                    <a href="#"  onclick="return false;" class="product-title">        
                        
                       
                        <?php
                            if ($fee_value->is_system) {
                                echo $this->lang->line($fee_value->name) . " (" . $this->lang->line($fee_value->type) . ")";
                            } else {
                                echo $fee_value->name . " (" . $fee_value->type . ")";
                            }
                        ?>
                        <span class="pull-right"><?php echo $currency_symbol . amountFormat((float) $amount_to_be_pay, 2, '.', ''); ?></span></a>
                         <span class="product-description">                         
                        
                        <?php
                            if ($fee_value->is_system) {
                                echo $this->lang->line($fee_value->code);
                            } else {
                                echo $fee_value->code;
                            }                    
                        ?>
        
                        </span>
                        <?php
if ($fine_amount_status) {
                ?>
                       <a href="#"  onclick="return false;" class="product-title text text-danger"><?php echo $this->lang->line('fine'); ?>
                        <span class="pull-right">
                            <?php echo $currency_symbol . amountFormat((float) $fees_fine_amount, 2, '.', ''); ?>
                        </span>
                    </a>
    <?php
}
            ?>
                </div>
            </li>

            <?php
}
    } elseif ($fee_value->fee_category == "transport") {
        $amount_to_be_pay = $fee_value->fees;
        if (is_string(($fee_value->amount_detail)) && is_array(json_decode(($fee_value->amount_detail), true))) {
            $amount_data = json_decode($fee_value->amount_detail);
            foreach ($amount_data as $amount_data_key => $amount_data_value) {
                $fine_amount_paid += $amount_data_value->amount_fine;
                $amount_prev_paid = $amount_prev_paid + ($amount_data_value->amount + $amount_data_value->amount_discount);
            }

            $amount_to_be_pay = $fee_value->fees - $amount_prev_paid;
        }

        if (($fee_value->due_date != "0000-00-00" && $fee_value->due_date != null) && (strtotime($fee_value->due_date) < strtotime(date('Y-m-d'))) && $amount_to_be_pay > 0) {

            $transport_fine_amount = is_null($fee_value->fine_percentage) ? $fee_value->fine_amount : percentageAmount($fee_value->fees, $fee_value->fine_percentage);

            $fees_fine_amount   = $transport_fine_amount - $fine_amount_paid;
            $total_amount       = $total_amount + $fees_fine_amount;
            $fine_amount_status = true;
        }

        $total_amount = $total_amount + $amount_to_be_pay;
        if ($amount_to_be_pay > 0) {
            ?>

            <li class="item">
                <input class="checkbox fee-checkbox" type="checkbox" data-fcat="transport" data-stfi="<?php echo $fee_value->id; ?>" data-sfmi="0" data-fgfi="0" data-amount="<?php echo $amount_to_be_pay; ?>" data-is_ps="<?php echo $ps_balancee; ?>" name="row_counter[]"  value="<?php echo $row_counter; ?>">
                <input name="student_fees_master_id_<?php echo $row_counter; ?>" type="hidden" value="0">
                <input name="fee_groups_feetype_id_<?php echo $row_counter; ?>" type="hidden" value="0">
                <input name="fee_groups_feetype_fine_amount_<?php echo $row_counter; ?>" type="hidden" value="0">
                <input name="fee_amount_<?php echo $row_counter; ?>" type="hidden" value="<?php echo $amount_to_be_pay; ?>">
                <input name="fee_category_<?php echo $row_counter; ?>" type="hidden" value="<?php echo $fee_value->fee_category; ?>">
                <input name="trans_fee_id_<?php echo $row_counter; ?>" type="hidden" value="<?php echo $fee_value->id; ?>">
                <div class="product-info">
                      <a href="#"  onclick="return false;" class="product-title"><?php echo $this->lang->line("transport_fees"); ?>
                        <span class="pull-right"><?php echo $currency_symbol . amountFormat((float) $amount_to_be_pay, 2, '.', ''); ?></span></a>
                         <span class="product-description">
                        <?php echo $fee_value->month; ?>
                        </span>
                        <?php
if ($fine_amount_status) {
                ?>
                       <a href="#"  onclick="return false;" class="product-title text text-danger"><?php echo $this->lang->line('fine'); ?>
                        <span class="pull-right">
                            <?php echo $currency_symbol . amountFormat((float) $fees_fine_amount, 2, '.', ''); ?>
                        </span>
                    </a>
    <?php
}
            ?>
                </div>
            </li>
            <?php
}

    }

    $row_counter++;
}
?>
</ul>
<?php if ($total_amount > 0) {?>
<div class="row collect_grp_fees">
    <div class="col-md-8">
        <span class="pull-right">
            <?php echo $this->lang->line('total_pay'); ?>
        </span>
    </div>
    <div class="col-md-4">
        <span class="pull-right" id="total_pay">
            <?php echo $currency_symbol . amountFormat((float) $total_amount, 2, '.', ''); ?>
        </span>
    </div>
</div>
<div class="row fees-footer">
    <div class="col-md-12">
        <input type="hidden" id="isActv" value="">
        <input type="hidden" id="isAmnt" value="">
        <input type="hidden" id="isRows" value="">
        <input type="hidden" id="isFcat" value="">
        <input type="hidden" id="isStfi" value="">
        <input type="hidden" id="isSfmi" value="">
        <input type="hidden" id="isFgfi" value="">
        
        <input type="hidden" id="student_id" value="<?php echo $student['id']; ?>">
        <input type="hidden" id="submit_mode" value="offline_payment">
            
        <a href="javascript:void(0);" id="payment_collect_nb" class="btn btn-primary pull-left payment_collect_nb"><i class="fa fa-university"></i> Netbanking Payment</a>
        <a href="javascript:void(0);" id="payment_collect_upi" class="btn btn-primary pull-left payment_collect_upi" style="margin-left: 5px;"><i class="fa fa-inr"></i> UPI Payment</a>
        <button type="submit" id="payBtn" class="btn btn-primary pull-right payment_collect" data-loading-text="<i class='fa fa-spinner fa-spin '></i><?php echo $this->lang->line('processing') ?>"><i class="fa fa-money"></i> <?php echo $this->lang->line('pay'); ?> online</button>
    </div>
</div>
<?php } else {
    ?>
<div class="alert alert-info">
    <?php echo $this->lang->line('no_fees_found'); ?>
</div>
    <?php
}

?>
    

<script>
function updateTotalPay() {
    let totalAmount = 0;
    let totalps     = 0;
    let totalrw     = 0;
    $('.fee-checkbox:checked').each(function() {
        totalAmount += parseFloat($(this).data('amount'));
        totalps     += parseFloat($(this).data('is_ps'));
        totalrw     += 1;
        
        document.getElementById("isFcat").value = $(this).data('fcat');
        document.getElementById("isStfi").value = $(this).data('stfi');
        document.getElementById("isSfmi").value = $(this).data('sfmi');
        document.getElementById("isFgfi").value = $(this).data('fgfi');
        
    });
    $('#total_pay').text('<?php echo $currency_symbol; ?>' + totalAmount.toFixed(2));
    document.getElementById("isAmnt").value = totalAmount.toFixed(2);
    document.getElementById("isRows").value = totalrw;
    
    if (totalps != <?= $ps_count; ?>) {
        document.getElementById("payBtn").disabled = true;
        document.getElementById("isActv").value = "false";
    } else {
        document.getElementById("payBtn").disabled = false;
        document.getElementById("isActv").value = "true";
    }
    
    if (totalAmount <= 0) { 
        document.getElementById("payBtn").disabled = true;
    }
    
}
$(document).on('change', '.fee-checkbox', function() {
    updateTotalPay();
});
$(document).ready(function() {
    updateTotalPay();
});

$(document).on('click', '.payment_collect_nb', function () {
    let isActv = document.getElementById("isActv").value;
    let isAmnt = document.getElementById("isAmnt").value;
    let isRows = document.getElementById("isRows").value;
    let isFcat = document.getElementById("isFcat").value;
    let isStfi = document.getElementById("isStfi").value;
    let isSfmi = document.getElementById("isSfmi").value;
    let isFgfi = document.getElementById("isFgfi").value;
    
    let student_id  = document.getElementById("student_id").value;
    let submit_mode = document.getElementById("submit_mode").value;
    
    if (isActv == 'true' && isAmnt > 0 && isRows == 1) {
        $.ajax({
            type: "POST",
            url: base_url + "user/offlinepayment/set_offline_fee_session",
            data: {'amount': isAmnt, 'mode': 'Netbanking', 'isFcat': isFcat, 'isStfi': isStfi, 'isSfmi': isSfmi, 'isFgfi': isFgfi, 'student_id': student_id, 'submit_mode': submit_mode},
            success: function (data) {
                url = '<?= base_url(); ?>user/gateway/payment/pay';
                window.location.href = url;
            },
        });
    } else {
        if (isRows > 1) {
            alert('Please select single head to pay offline.');
        }
    }
});
$(document).on('click', '.payment_collect_upi', function () {
    let isActv = document.getElementById("isActv").value;
    let isAmnt = document.getElementById("isAmnt").value;
    let isRows = document.getElementById("isRows").value;
    let isFcat = document.getElementById("isFcat").value;
    let isStfi = document.getElementById("isStfi").value;
    let isSfmi = document.getElementById("isSfmi").value;
    let isFgfi = document.getElementById("isFgfi").value;
    
    let student_id  = document.getElementById("student_id").value;
    let submit_mode = document.getElementById("submit_mode").value;
    
    if (isActv == 'true' && isAmnt > 0 && isRows == 1) {
        $.ajax({
            type: "POST",
            url: base_url + "user/offlinepayment/set_offline_fee_session",
            data: {'amount': isAmnt, 'mode': 'UPI', 'isFcat': isFcat, 'isStfi': isStfi, 'isSfmi': isSfmi, 'isFgfi': isFgfi, 'student_id': student_id, 'submit_mode': submit_mode},
            success: function (data) {
                url = '<?= base_url(); ?>user/gateway/payment/pay';
                window.location.href = url;
            },
        });
    } else {
        if (isRows > 1) {
            alert('Please select single head to pay offline.');
        }
    }
});
</script>