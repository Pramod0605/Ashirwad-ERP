<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
?>
<div class="content-wrapper">
    <section class="content-header">
         
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> <?php echo $this->lang->line('select_criteria'); ?></h3>
                    </div>
                    <div class="box-body">
                       
                        <?php if ($this->session->flashdata('msg')) {?> <div class="alert alert-success">  <?php echo $this->session->flashdata('msg'); $this->session->unset_userdata('msg'); ?> </div> <?php }?>
                        <div class="row">
                              <form role="form" action="<?php echo site_url('admin/leads/brief_reports') ?>" method="post" class="class_search_form">
                            <div class="col-md-12">
                                <div class="row">
                                        <?php echo $this->customlib->getCSRF(); ?>
                                        
                                         <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Promoter</label> <small class="req"></small>
                                                <select autofocus="" id="cpid" name="cpid" class="form-control" >
                                                    <option value=""><?php echo $this->lang->line('select'); ?></option>
                                                    <?php
$count = 0;
foreach ($all_promoters as $prmtr) {
    ?>
                                                        <option value="<?php echo $prmtr->cp_id ?>" <?php if (set_value('cpid') == $prmtr->cp_id) {
        echo "selected=selected";
    }
    ?>><?php echo $prmtr->promoter_name.' - '.$prmtr->promoter_institute.' - '.$prmtr->promoter_contact_no ?></option>
                                                        <?php
$count++;
}
?>
                                                </select>
                                                  <span class="text-danger" id="error_class_id"></span>
                                            </div>
                                        </div> 
                                        
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Type</label> <small class="req"></small>
                                                <select autofocus="" id="ctid" name="ctid" class="form-control" >
                                                    <option value=""><?php echo $this->lang->line('select'); ?></option>
                                                    <?php
$count = 0;
foreach ($all_campaign_type as $ctype) {
    ?>
                                                        <option value="<?php echo $ctype->ct_id ?>" <?php if (set_value('ctid') == $ctype->ct_id) {
        echo "selected=selected";
    }
    ?>><?php echo $ctype->ct_title ?></option>
                                                        <?php
$count++;
}
?>
                                                </select>
                                                  <span class="text-danger" id="error_class_id"></span>
                                            </div>
                                        </div> 
                                        
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Campaign</label> <small class="req"></small>
                                                <select autofocus="" id="cid" name="cid" class="form-control" >
                                                    <option value=""><?php echo $this->lang->line('select'); ?></option>
                                                    <?php
$count = 0;
foreach ($campaign_info as $camp) {
    ?>
                                                        <option value="<?php echo $camp->c_id ?>" <?php if (set_value('cid') == $camp->c_id) {
        echo "selected=selected";
    }
    ?>><?php echo $camp->c_title ?></option>
                                                        <?php
$count++;
}
?>
                                                </select>
                                                  <span class="text-danger" id="error_class_id"></span>
                                            </div>
                                        </div> 
                                        
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Interval</label>
                                                <select class="form-control" name="linterval">
                                                    <option value="Daily" <?php if (!empty($linterval) && $linterval == 'Daily') { echo 'selected'; } ?> >Daily</option>
                                                    <option value="Weekly" <?php if (!empty($linterval) && $linterval == 'Weekly') { echo 'selected'; } ?> >Weekly</option>
                                                    <option value="Monthly" <?php if (!empty($linterval) && $linterval == 'Monthly') { echo 'selected'; } ?> >Monthly</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <button type="submit" name="submit" value="1" class="btn btn-primary btn-sm pull-right checkbox-toggle"><i class="fa fa-search"></i> <?php echo $this->lang->line('search'); ?></button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                       </form>
                        </div><!--./row-->
                    </div>
                
                    <div class="nav-tabs-custom border0 navnoshadow">
                      <div class="box-header ptbnull"></div>
                        <div class="tab-content">
                            <div class="tab-pane active table-responsive no-padding overflow-visible-lg" id="tab_1">
                                <table class="table table-striped table-bordered table-hover student-list" data-export-title="<?php echo $this->lang->line('student_list'); ?>">
                                    <thead>
                                        <tr>
                                            <th>Total Leads</th>
                                            <th><?= $all_leads; ?></th>
                                        </tr>
                                        <tr>
                                            <th>New Leads</th>
                                            <th><?= $new_leads; ?></th>
                                        </tr>
                                        <tr>
                                            <th>All Followup</th>
                                            <th><?= $a_followup; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Completed Followup</th>
                                            <th><?= $c_followup; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Missed Followup</th>
                                            <th><?= $m_followup; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Lead Converted</th>
                                            <th><?= $c_leads; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Invalid Leads</th>
                                            <th><?= $i_leads; ?></th>
                                        </tr>
                                        
                                        <tr>
                                            <th>Calls Initiated</th>
                                            <th><?= $ci; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Calls Time (Avg)</th>
                                            <th><?= $ct; ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            
                                                            </div>
                                                            </div>
                                                          </div><!--./box box-primary -->
                                                           
                                                        </div>
                                                        </div>
                                                        </section>
                                                        </div>
