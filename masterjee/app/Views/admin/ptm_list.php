<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <div class="row pt-4 mg-top-90">
        </div> 
        
        <div id="action">
        
        <?php 
        $date = date("Y-m-d");
        $db = db_connect();
        $i = 0;
        foreach ($all_upcoming_ptm as $ptm) { 
            $scheduleInfo = $StaffModel->ptm_schedule_info($ptm->ptm_id);
            if (!empty($scheduleInfo)) {
            
        $i++;
        ?>
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    
                    <span class="float-left text-sm"><strong><?= $ptm->ptm_title; ?></strong></span>
                    <hr>
                    <span class="float-left text-sm"><strong><?= $ptm->from_date ?></strong></span>
                    <hr>
                    <span class="float-left text-sm"><?= $ptm->remark; ?></span>
                </div>
            </div>
        </div>
        
        <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
            <thead>
                <tr>
                    <th style="width:50%">Student</th>
                    <th style="width:50%">Slot</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($scheduleInfo as $sInfo) { ?>
                <tr>
                    <td><?= $sInfo->admission_no.' - '.$sInfo->firstname.' '.$sInfo->lastname; ?></td>
                    <td><?= $sInfo->time_from.' TO '.$sInfo->time_to; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
        <?php } ?>
        <?php } ?>
        
    </div>  
    
    <?php if (empty($i)) { ?>
    <div class="balance-area mg-top-90"></div>
        <div class="container rounded">
            <a href="javascript:void(0)" class="change_cs" data-toggle="modal" data-target="#change_cs">
            <img src="<?= base_url(); ?>public/style/img/icon/nodata.png" alt="img" class="rounded">
            </a>
        </div>
    
    <?php } ?>
<script>
   $('table').dataTable({searching: false, paging: false, info: false, ordering: false,});
</script>               