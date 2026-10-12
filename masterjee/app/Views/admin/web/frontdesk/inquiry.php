<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
     <br>    
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-12 text-center">
                <a href="<?= base_url(); ?>admin/web/add_inquiry" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Inquiry</a>
            </div>
    </div>
    <form name="myForm" id="myForm" action="<?= base_url('admin/web/inquiry'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4">
            <div class="col-6 text-center">
                <input type="date" class="form-control" name="fdate" value="<?= $fdate; ?>" placeholder="From">
            </div>
            <div class="col-6 text-center">
                <input type="date" class="form-control" name="tdate" value="<?= $tdate; ?>" placeholder="From">
            </div>
            <br>
            <div class="col-12 text-center">
                <br>
                <button type="submit" id="submit" class="btn btn-primary w-100" style="width:100%; height: 37px;">Submit</button>
            </div>
        </div>
    </form>
     
    <div class="row pt-4 tbl-responsive" id="rating">
    <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Source</th>
                        <th>Referral</th>
                        <th>Date</th>
                        <th>Follow-up</th>
                        <th>Next Follow-up</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $db         = db_connect();
                    foreach ($inquiries as $inq) { 
                    $inqFinfo   = $db->query("SELECT * FROM follow_up WHERE enquiry_id = '".$inq->iid."' ORDER BY id DESC LIMIT 1 ")->getRow();
                    
                    if (!empty($inqFinfo)) {
                        $lfuDate = $inqFinfo->date;
                        $nfuDate = $inqFinfo->next_date;
                    } else {
                        $lfuDate = '';
                        $nfuDate = $inq->follow_up_date;
                    }
                    
                    ?>
                    <tr>
                        <td><a href="<?= base_url(); ?>admin/web/inquiry_followup/<?= $inq->iid; ?>"><?= $inq->name; ?></a></td>
                        <td><a href="<?= base_url(); ?>admin/web/inquiry_followup/<?= $inq->iid; ?>"><?= $inq->contact; ?></a></td>
                        <td><a href="<?= base_url(); ?>admin/web/inquiry_followup/<?= $inq->iid; ?>"><?= $inq->reference; ?></a></td>
                        <td><a href="<?= base_url(); ?>admin/web/inquiry_followup/<?= $inq->iid; ?>"><?= $inq->employee_id.' '.$inq->name; ?></a></td>
                        <td><a href="<?= base_url(); ?>admin/web/inquiry_followup/<?= $inq->iid; ?>"><?= $inq->date; ?></a></td>
                        <td><a href="<?= base_url(); ?>admin/web/inquiry_followup/<?= $inq->iid; ?>"><?= $lfuDate; ?></a></td>
                        <td><a href="<?= base_url(); ?>admin/web/inquiry_followup/<?= $inq->iid; ?>"><?= $nfuDate; ?></a></td>
                        <td><a href="<?= base_url(); ?>admin/web/inquiry_followup/<?= $inq->iid; ?>"><?= $inq->status; ?></a></td>
                        <td><a href="<?= base_url(); ?>admin/web/add_inquiry/<?= $inq->iid; ?>"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
    </table>
    </div>

<script>
    DataTable.ext.errMode = 'none';
    $('table.display').DataTable({searching: false, paging: false, info: false, ordering: false, responsive: true});
</script> 