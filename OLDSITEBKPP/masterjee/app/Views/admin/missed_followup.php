<div class="balance-area mg-top-90"></div>

    <div class="row" style="margin:0.1rem">
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/leads" class="btn btn-sm w-100 exam" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>All</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/campaigns" class="btn btn-sm w-100 exam" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>Campaign</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/taken_leads" class="btn btn-sm w-100 terms" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>Leads</a>
            </div>
    </div>
    <div class="row" style="margin:0.1rem; padding-top:10px">
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/followups" class="btn btn-sm w-100" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>Followups</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/walkin_leads" class="btn btn-sm w-100" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>Walk-in</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/missed" class="btn btn-sm w-100" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>Missed</a>
            </div>
    </div>
    
    <form name="myForm" id="myForm" action="<?= base_url('admin/staff/missed_followup'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4">
            <div class="col-6 text-center">
                <input type="date" class="form-control" name="fdate" value="<?= $fdate; ?>" placeholder="From">
            </div>
            <div class="col-6 text-center">
                <input type="date" class="form-control" name="tdate" value="<?= $tdate; ?>" placeholder="To">
            </div>
            <div class="col-6 text-center py-2">
                <select class="form-control" name="cs">
                    <option value="">Select Call Status</option>
                    <?php foreach ($followStatus as $fs) { ?>
                    <option value="<?= $fs->title; ?>" <?php if ($cs == $fs->title) { echo 'selected'; } ?>><?= $fs->title; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-6 text-center py-2">
                <button type="submit" id="submit" class="btn btn-primary w-100" style="width:100%; height: 37px;">Submit</button>
            </div>
        </div>
    </form>
        
       <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
            <table class="table">
                <tbody>
                   <?php 
                     $db        = db_connect();
                     $cdate     = date("Y-m-d");
                     foreach ($allFollowup as $followUp) { 
                     $date1     = new DateTime($followUp->next_followup_date);
                     $date2     = new DateTime($cdate);
                     $interval  = $date1->diff($date2);
                     $daysDifference = $interval->days;
                     
                     if ($daysDifference > 0) {
                         $riCon = '<i class="fa fa-circle text-danger" aria-hidden="true"></i>';
                     } else {
                         $riCon = '<i class="fa fa-circle text-primary" aria-hidden="true"></i>';
                     }
                     
                     if ($followUp->followup_priority == 'Low') {
                         $rBox = '<i class="fa fa-square text-danger" aria-hidden="true"></i></i>';
                     } elseif ($followUp->followup_priority == 'Medium') {
                         $rBox = '<i class="fa fa-square text-warning" aria-hidden="true"></i>';
                     } elseif ($followUp->followup_priority == 'High') {
                         $rBox = '<i class="fa fa-square text-success" aria-hidden="true"></i>';
                     } else {
                         $rBox = '';
                     }
                     ?>
                     <tr style="border-bottom:hidden;">
                        <td colspan="1" style="width:10%; padding-top: 7.5%; text-align:right; border-bottom-color: gainsboro;"><a href="<?= base_url() ?>admin/staff/take_lead/<?= $followUp->l_id ?>"><span style="background-color: #c3dae9; padding: 20px; display: flex; width:50px; height:50px; border-radius: 50%; font-weight: bold; justify-content: center; align-items: center;"><strong><?= substr($followUp->l_name, 0, 1); ?></span></strong></a></td>
                        <td colspan="1" style="width:50%; text-align:lett"><a href="<?= base_url() ?>admin/staff/take_lead/<?= $followUp->l_id ?>"><?= '<strong>'.$followUp->l_name.'</strong><br>'.$followUp->c_title.'<br>'.$riCon.' '.$daysDifference.' days ago<br>'.$followUp->followup_remark; ?></a></td>
                        <td colspan="1" style="width:40%; text-align:right; border-bottom-color: gainsboro;"><?= $followUp->next_followup_date.'<br>'.$followUp->next_followup_time.'<br>'.$followUp->followup_priority.' '.$rBox.'<br>'.$followUp->call_status; ?></td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>

            
        </div>
        
<script>
   $('table').dataTable({searching: false, paging: false, info: false, ordering: false,});
</script>