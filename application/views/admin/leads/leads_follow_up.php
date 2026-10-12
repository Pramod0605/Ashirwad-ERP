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
                              <form role="form" action="<?php echo site_url('admin/leads/leads_follow_up') ?>" method="post" class="class_search_form">
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
                                                <label>Campaign</label> <small class="req"> </small>
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
                                                <label>Status</label> <small class="req"> </small>
                                                <select autofocus="" id="cs" name="cs" class="form-control" >
                                                    <option value=""><?php echo $this->lang->line('select'); ?></option>
                                                    <?php
$count = 0;
foreach ($followup_status as $fs) {
    ?>
                                                        <option value="<?php echo $fs->title ?>" <?php if (set_value('cs') == $fs->title) {
        echo "selected=selected";
    }
    ?>><?php echo $fs->title ?></option>
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
                                                <label>Counsellor</label> <small class="req"> </small>
                                                <select autofocus="" id="by" name="by" class="form-control" >
                                                    <option value=""><?php echo $this->lang->line('select'); ?></option>
                                                    <?php
$count = 0;
foreach ($stafflist as $sl) {
    ?>
                                                        <option value="<?php echo $sl['id'] ?>" <?php if (set_value('by') == $sl['id']) {
        echo "selected=selected";
    }
    ?>><?php echo $sl['name'].' '.$sl['surname'] ?></option>
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
                                                <label>Missed Followup Only</label>
                                                <select class="form-control" name="ismissed">
                                                    <option value="2" <?php if (!empty($ismissed) && $ismissed == '2') { echo 'selected'; } ?> >No</option>
                                                    <option value="1" <?php if (!empty($ismissed) && $ismissed == '1') { echo 'selected'; } ?> >Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>From</label>
                                                <input type="date" class="form-control" value="<?= $fdate; ?>" name="fdate">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>To</label>
                                                <input type="date" class="form-control" value="<?= $tdate; ?>" name="tdate">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
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
                        <div class="table-responsive">
                            <div class="mailbox-messages">
                            <div class="tab-pane active table-responsive no-padding overflow-visible-lg" id="tab_1">
                                <table id="example" class="table table-striped table-bordered table-hover student-list" data-export-title="<?php echo $this->lang->line('student_list'); ?>">
                                    <thead>
                                        <tr>
                                            <th>Lead</th>
                                            <th>By</th>
                                            <th>Date</th>
                                            <th>Remark</th>
                                            <th>Status</th>
                                            <th>Next Followup</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($all_followup_info as $followup) { 
                                                $fbyInfo = $this->staff_model->get($followup->followup_by);
                                                
                                                if (date("Y-m-d H:i:s") > $followup->next_followup_date.' '.$followup->next_followup_time && $followup->followup_status == 0) {
                                                    $cls = 'bg-danger';
                                                    $msd = 1;
                                                    $tag = ' - Missed';
                                                } else {
                                                    $cls = '';
                                                    $msd = 0;
                                                    $tag = '';
                                                }
                                                
                                                if ($ismissed != 1) {
                                            ?>
                                            <tr>
                                                <td class="<?= $cls; ?>"><?= $followup->l_id.' - '.$followup->l_phone_number; ?></td>
                                                <td class="<?= $cls; ?>"><?= $fbyInfo['employee_id'].' - '.$fbyInfo['name'].' '.$fbyInfo['surname']; ?></td>
                                                <td class="<?= $cls; ?>"><?= $followup->followup_date.' '.$followup->followup_time; ?></td>
                                                <td class="<?= $cls; ?>"><?= $followup->followup_remark; ?></td>
                                                <td class="<?= $cls; ?>"><?= $followup->call_status.$tag; ?></td>
                                                <td class="<?= $cls; ?>"><?= $followup->next_followup_date.' '.$followup->next_followup_time; ?></td>
                                            </tr>
                                            <?php } elseif ($ismissed == 1 && $msd == 1) { ?>
                                            
                                            <tr>
                                                <td class="<?= $cls; ?>"><?= $followup->l_id.' - '.$followup->l_phone_number; ?></td>
                                                <td class="<?= $cls; ?>"><?= $fbyInfo['employee_id'].' - '.$fbyInfo['name'].' '.$fbyInfo['surname']; ?></td>
                                                <td class="<?= $cls; ?>"><?= $followup->followup_date.' '.$followup->followup_time; ?></td>
                                                <td class="<?= $cls; ?>"><?= $followup->followup_remark; ?></td>
                                                <td class="<?= $cls; ?>"><?= $followup->call_status.$tag; ?></td>
                                                <td class="<?= $cls; ?>"><?= $followup->next_followup_date.' '.$followup->next_followup_time; ?></td>
                                            </tr>
                                            
                                            <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                                                            </div>
                                                            </div>
                                                          </div><!--./box box-primary -->
                                                           
                                                        </div>
                                                        </div>
                                                        </section>
                                                        </div>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
</script>

