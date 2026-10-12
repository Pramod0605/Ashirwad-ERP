<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
      
    <div class="row pt-4" id="rating" >
    <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Month</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i = 0;
                    foreach ($all_payslip as $payslip) { 
                    $i += 1;
                    ?>
                    <tr>
                        <td><?= $payslip->month.' '.$payslip->year; ?></td>
                        <td><?= $payslip->net_salary; ?></td>
                        <td><?= $payslip->status; ?></td>
                        <td><a href="<?= base_url(); ?>admin/staff/staff_payslip_view/<?= $payslip->id; ?>"><i class="fa fa-eye"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
    </table>

            
        </div>

<script>
   $('table').dataTable({searching: true, paging: true, info: false, ordering: true,});
</script> 