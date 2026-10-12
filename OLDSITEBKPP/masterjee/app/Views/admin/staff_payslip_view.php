<div class="row pt-4 mg-top-90"></div>

<?php
$currency_symbol = '₹';
?>
<style type="text/css">
    @media print {
        .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
            float: left;
        }
        .col-sm-12 {
            width: 100%;
        }
        .col-sm-11 {
            width: 91.66666667%;
        }
        .col-sm-10 {
            width: 83.33333333%;
        }
        .col-sm-9 {
            width: 75%;
        }
        .col-sm-8 {
            width: 66.66666667%;
        }
        .col-sm-7 {
            width: 58.33333333%;
        }
        .col-sm-6 {
            width: 50%;
        }
        .col-sm-5 {
            width: 41.66666667%;
        }
        .col-sm-4 {
            width: 33.33333333%;
        }
        .col-sm-3 {
            width: 25%;
        }
        .col-sm-2 {
            width: 16.66666667%;
        }
        .col-sm-1 {
            width: 8.33333333%;
        }
        .col-sm-pull-12 {
            right: 100%;
        }
        .col-sm-pull-11 {
            right: 91.66666667%;
        }
        .col-sm-pull-10 {
            right: 83.33333333%;
        }
        .col-sm-pull-9 {
            right: 75%;
        }
        .col-sm-pull-8 {
            right: 66.66666667%;
        }
        .col-sm-pull-7 {
            right: 58.33333333%;
        }
        .col-sm-pull-6 {
            right: 50%;
        }
        .col-sm-pull-5 {
            right: 41.66666667%;
        }
        .col-sm-pull-4 {
            right: 33.33333333%;
        }
        .col-sm-pull-3 {
            right: 25%;
        }
        .col-sm-pull-2 {
            right: 16.66666667%;
        }
        .col-sm-pull-1 {
            right: 8.33333333%;
        }
        .col-sm-pull-0 {
            right: auto;
        }
        .col-sm-push-12 {
            left: 100%;
        }
        .col-sm-push-11 {
            left: 91.66666667%;
        }
        .col-sm-push-10 {
            left: 83.33333333%;
        }
        .col-sm-push-9 {
            left: 75%;
        }
        .col-sm-push-8 {
            left: 66.66666667%;
        }
        .col-sm-push-7 {
            left: 58.33333333%;
        }
        .col-sm-push-6 {
            left: 50%;
        }
        .col-sm-push-5 {
            left: 41.66666667%;
        }
        .col-sm-push-4 {
            left: 33.33333333%;
        }
        .col-sm-push-3 {
            left: 25%;
        }
        .col-sm-push-2 {
            left: 16.66666667%;
        }
        .col-sm-push-1 {
            left: 8.33333333%;
        }
        .col-sm-push-0 {
            left: auto;
        }
        .col-sm-offset-12 {
            margin-left: 100%;
        }
        .col-sm-offset-11 {
            margin-left: 91.66666667%;
        }
        .col-sm-offset-10 {
            margin-left: 83.33333333%;
        }
        .col-sm-offset-9 {
            margin-left: 75%;
        }
        .col-sm-offset-8 {
            margin-left: 66.66666667%;
        }
        .col-sm-offset-7 {
            margin-left: 58.33333333%;
        }
        .col-sm-offset-6 {
            margin-left: 50%;
        }
        .col-sm-offset-5 {
            margin-left: 41.66666667%;
        }
        .col-sm-offset-4 {
            margin-left: 33.33333333%;
        }
        .col-sm-offset-3 {
            margin-left: 25%;
        }
        .col-sm-offset-2 {
            margin-left: 16.66666667%;
        }
        .col-sm-offset-1 {
            margin-left: 8.33333333%;
        }
        .col-sm-offset-0 {
            margin-left: 0%;
        }
        .visible-xs {
            display: none !important;
        }
        .hidden-xs {
            display: block !important;
        }
        table.hidden-xs {
            display: table;
        }
        tr.hidden-xs {
            display: table-row !important;
        }
        th.hidden-xs,
        td.hidden-xs {
            display: table-cell !important;
        }
        .hidden-xs.hidden-print {
            display: none !important;
        }
        .hidden-sm {
            display: none !important;
        }
        .visible-sm {
            display: block !important;
        }
        table.visible-sm {
            display: table;
        }
        tr.visible-sm {
            display: table-row !important;
        }
        th.visible-sm,
        td.visible-sm {
            display: table-cell !important;
        }
    }
</style>

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Payslip</title>
    </head>
    <div id="html-2-pdfwrapper">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="">
                    <table width="100%">
                        <tr>
                            <td align="center"><h3 style="margin: 10px 0 20px;">Payslip For The Period Of <?php echo $payslip->month.' '.$payslip->year ?></h3></td>
                        </tr>
                    </table>
                    <table width="100%" class="paytable2">
                        <tr>
                            <th>Payslip #<?php echo $payslip->id ?></th> <td></td>
                            <th style="text-align:right"></th> <th style="text-align:right">Payment Date: <?php echo $payslip->payment_date; ?></th>
                        </tr>
                    </table>
                    <hr/>
                    <table width="100%" class="paytable2" >
                        <tr>
                            <th width="25%"><?php echo 'Staff id' ?></th>
                            <td width="25%"><?php echo $payslip->employee_id ?></td>
                            <th width="25%"><?php 'Name'; ?></th>
                            <td width="25%"><?php echo $payslip->name . " " . $payslip->surname ?></td>
                        </tr>
                        <tr>
                            <th colspan="2" width="50%"><?php echo 'Designation'; ?></th>
                            <td colspan="2" width="50%"><?php echo $payslip->designation ?></td>
                        </tr>
                    </table>
                    <br/>
                    <table class="earntable table table-striped table-responsive" >
                        <tr>
                            <th width="19%"><?php echo 'Earning'; ?></th>
                            <th width="16%" class="pttright reborder"><?php echo 'Amount'; ?> (<?php echo $currency_symbol; ?>)</th>
                            <th width="20%" class="pttleft"><?php echo 'Deduction'; ?></th>
                            <th width="16%" style="text-align:right"><?php echo 'Amount'; ?> (<?php echo $currency_symbol; ?>)</th>
                        </tr>
                        <?php
$allowance_all = $StaffModel->payslip_allowance_info($payslip->psid);
$allowance_pos = $StaffModel->payslip_allowance_positive_info($payslip->psid);
$allowance_neg = $StaffModel->payslip_allowance_negative_info($payslip->psid);

$j = 0;
foreach ($allowance_all as $key => $value) {
    ?>
                            <tr><?php if (array_key_exists($j, $allowance_pos)) {?>
                                   <td><?php echo $allowance_pos[$j]->allowance_type; ?></td>
                                    <td class="pttright reborder"><?php echo number_format($allowance_pos[$j]->amount, 2); ?></td>
                                <?php } else {echo "<td></td><td></td>";}?>
                                <?php if (array_key_exists($j, $allowance_neg)) {?>
                                    <td class="pttleft"><?php echo $allowance_neg[$j]->allowance_type; ?></td>
                                    <td class="text-right"><?php echo number_format($allowance_neg[$j]->amount, 2); ?>
                                    </td>
                                <?php } else {echo "<td></td><td></td>";}?>
                            </tr>
                            <?php
$j++;
}
?>
                        <tr>
                            <th><?php echo 'Total'; ?></th>
                            <th class="pttright reborder"><?php echo number_format($payslip->total_allowance, 2); ?></th>
                            <th class="pttleft"><?php echo 'Total'; ?></th>
                            <th style="text-align:right"><?php echo number_format($payslip->total_deduction, 2); ?></th>
                        </tr>
                    </table>
                    
                    <table class="totaltable table table-striped table-responsive">
                        <tr>
                            <th width="60%"><?php echo 'Payment Mode'; ?></th>
                            <td style="text-align:right"><?php echo $payslip->payment_mode; ?></td>
                        </tr>
                        <tr>
                            <th width="60%">Transaction/Cheque No.</th>
                            <td style="text-align:right"><?php echo $payslip->transaction_id; ?></td>
                        </tr>
                        <tr>
                            <th width="60%"><?php echo 'Basic Salary'; ?> (<?php echo $currency_symbol; ?>)</th>
                            <td style="text-align:right"><?php $basic = $payslip->basic;
echo number_format($basic, 2);?></td>
                        </tr>
                        <tr>
                            <th width="60%"><?php echo 'Gross Salary'; ?> (<?php echo $currency_symbol; ?>)</th>
                            <td style="text-align:right"><?php $gross_salary = $payslip->basic + $payslip->total_allowance - $payslip->total_deduction;
echo number_format($gross_salary, 2);?></td>
                        </tr>
                        <?php if (!empty($payslip->tax)) {?>
                            <tr>
                                <th width="60%"><?php 'Tax'; ?> (<?php echo $currency_symbol; ?>)</th>
                                <td style="text-align:right"><?php echo number_format($payslip->tax, 2); ?></td>
                            </tr>
                        <?php }
?>
                        <tr>
                            <th width="60%"><?php echo 'Net Salary'; ?> (<?php echo $currency_symbol; ?>)</th>
                            <td style="text-align:right"><?php echo number_format($payslip->net_salary, 2); ?>
                        </td>
                        </tr>
                    </table>
                </div>
            </div>
            <!--/.col (left) -->
        </div>
    </div>
</html>