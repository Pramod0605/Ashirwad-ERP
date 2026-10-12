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
            
            <div class="col-6 text-center" style="padding-top:10px">
                <a href="<?= base_url(); ?>admin/staff/add_campaign" class="btn btn-sm w-100" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Campaign</a>
            </div>
            
            <div class="col-6 text-center" style="padding-top:10px">
                <a href="<?= base_url(); ?>admin/staff/add_lead" class="btn btn-sm w-100" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Lead</a>
            </div>
    </div>
    
    
    <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
            <table class="table">
                <tbody>
                    <?php  
                    $db     = db_connect();
                    foreach ($usersCamp as $ucamp) { 
                        $cleads = $db->query("SELECT COUNT(l_id) AS tl FROM `cyc_leads` WHERE c_id  = '".$ucamp->c_id."'  ")->getRow();
                        if (session('activeCamp') == $ucamp->c_id) {
                    ?>
                    <tr>
                        <td colspan="2" style="width:66.66%; text-align:lett"><a href="<?= base_url(); ?>admin/staff/camp_leads"><i class="fa fa-bullhorn" aria-hidden="true"></i> <?= $ucamp->c_title; ?></a></td>
                        <td style="width:33.33%; text-align:right"><a href="<?= base_url(); ?>admin/staff/camp_leads"><i class="fa fa-users" aria-hidden="true"></i> <?= $cleads->tl; ?></a></td>
                    </tr>
                    <?php } else { ?>
                    <tr>
                        <td colspan="2" style="width:66.66%; text-align:lett"><a href="<?= base_url(); ?>admin/staff/start_campaign/<?= $ucamp->c_id; ?>"><i class="fa fa-bullhorn" aria-hidden="true"></i> <?= $ucamp->c_title; ?></a></td>
                        <td style="width:33.33%; text-align:right"><a href="<?= base_url(); ?>admin/staff/start_campaign/<?= $ucamp->c_id; ?>"><i class="fa fa-users" aria-hidden="true"></i> <?= $cleads->tl; ?></a></td>
                    </tr>    
                    <?php }  } ?>
                </tbody>
            </table>

            
        </div>