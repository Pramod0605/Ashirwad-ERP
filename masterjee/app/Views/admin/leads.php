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
    
    
    <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
            <table class="table">
                <tbody>
                    <?php  
                    $db     = db_connect();
                    $lcInfo = $db->query("SELECT c_id as cid FROM `cyc_campaign_time` WHERE staff_id  = '".session('userid')."' ORDER BY ct_id DESC LIMIT 1 ")->getRow();
                    
                    if (!empty($lcInfo->cid)) {
                        $camData = array(
			                'activeCamp'    => $lcInfo->cid,
			            );
			            session()->set($camData);
                    }
                    
                    foreach ($usersCamp as $ucamp) { 
                        $cleads = $db->query("SELECT COUNT(l_id) AS tl FROM `cyc_leads` WHERE c_id  = '".$ucamp->c_id."'  ")->getRow();
                        if (session('activeCamp') == $ucamp->c_id) {
                    ?>
                    <tr>
                        <td colspan="2" style="width:66.66%; text-align:lett"><a href="<?= base_url(); ?>admin/staff/campaigns"><i class="fa fa-bullhorn" aria-hidden="true"></i> <?= $ucamp->c_title; ?></a></td>
                        <td style="width:33.33%; text-align:right"><a href="<?= base_url(); ?>admin/staff/campaigns"><i class="fa fa-users" aria-hidden="true"></i> <?= $cleads->tl; ?></a></td>
                    </tr>
                    <?php } 
                    }
                    if (!session('activeCamp')) { ?>
                    <tr>
                        <td colspan="3" style="width:100%; text-align:left"><i class="fa fa-bullhorn" aria-hidden="true"></i> No active campaign, please active from campaigns option</td>
                    </tr>
                    <?php } 
                    $campOpLeads  = $StaffModel->all_camp_open_leads_info(session('activeCamp')); 
                    foreach ($campOpLeads as $campOpLead) { 
                        
                        $cLeadSts = $db->query("SELECT l_id AS ls FROM `cyc_leads` WHERE c_id  = '".session('activeCamp')."' AND current_agent = '".session('userid')."' AND l_follow_up_data IS NULL ")->getRow();
                    if (empty($cLeadSts->ls)) {
                    ?>
                    
                    <tr style="">
                        <td rowspan="2" style="width:10%; text-align:right; border-bottom-color: gainsboro;"><span style="background-color: #c3dae9; padding: 20px; display: block; width:50px; height:50px; border-radius: 50%; font-weight: bold;"><strong><?= substr($campOpLead->l_name, 0, 1); ?></span></strong></td>
                        <td colspan="1" style="width:50%; text-align:lett"><strong><?= $campOpLead->l_name; ?></strong></td>
                        <td rowspan="2" style="width:40%; text-align:right; border-bottom-color: gainsboro;"><a href="<?= base_url(); ?>admin/staff/take_lead/<?= $campOpLead->l_id; ?>" class="btn btn-sm w-100" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>Take Lead</a></td>
                    </tr>
                    <tr>
                        <td colspan="1" style="width:66.66%; text-align:lett"><?= $campOpLead->l_father_name; ?></td>
                    </tr>
                    <?php } } 
                     $cdate     = date("Y-m-d");
                     $followUps = $StaffModel->all_missed_followup(session('userid'));
                     foreach ($followUps as $followUp) { 
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
                     <tr style="">
                        <td colspan="1" style="width:10%; padding-top: 7.5%; text-align:right; border-bottom-color: gainsboro;"><a href="<?= base_url() ?>admin/staff/take_lead/<?= $followUp->l_id ?>"><span style="background-color: #c3dae9; padding: 20px; display: flex; width:50px; height:50px; border-radius: 50%; font-weight: bold; justify-content: center; align-items: center;"><strong><?= substr($followUp->l_name, 0, 1); ?></span></strong></a></td>
                        <td colspan="1" style="width:50%; text-align:lett"><a href="<?= base_url() ?>admin/staff/take_lead/<?= $followUp->l_id ?>"><?= '<strong>'.$followUp->l_name.'</strong><br>'.$followUp->c_title.'<br>'.$riCon.' '.$daysDifference.' days ago<br>'.$followUp->followup_remark; ?></a></td>
                        <td colspan="1" style="width:40%; text-align:right; border-bottom-color: gainsboro;"><?= $followUp->next_followup_date.'<br>'.$followUp->next_followup_time.'<br>'.$followUp->followup_priority.' '.$rBox.'<br>'.$followUp->call_status; ?><br>
                        <a href="<?= base_url(); ?>admin/staff/add_lead/<?= $followUp->l_id ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>

            
        </div>
        
    
    

<!--<script type="text/javascript">
$(document).ready(function(){
    fetch_leads();
    function fetch_leads(){
        $.ajax({
            type  : 'POST',
            url   : '<?php echo base_url(); ?>admin/staff/getAllOpenLeads/',
            async : true,
            dataType : 'json',
            success : function(data){
            var html = data;
            $('#leads').html(html);
            }
        });
    }
    setInterval(fetch_leads, 10000);
});
</script>-->