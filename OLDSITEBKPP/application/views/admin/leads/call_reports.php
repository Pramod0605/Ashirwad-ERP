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
                              <form role="form" action="<?php echo site_url('admin/leads/call_reports') ?>" method="post" class="class_search_form">
                            <div class="col-md-12">
                                <div class="row">
                                        <?php echo $this->customlib->getCSRF(); ?>
                                        
                                         <div class="col-sm-4">
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
                                        
                                        <div class="col-sm-4">
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
                                        
                                        <div class="col-sm-4">
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
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Level</label>
                                                <select class="form-control" name="llevel">
                                                    <option value="">All</option>
                                                    <option value="1" <?php if (!empty($llevel) && $llevel == '1') { echo 'selected'; } ?> >Level 1</option>
                                                    <option value="2" <?php if (!empty($llevel) && $llevel == '2') { echo 'selected'; } ?> >Level 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="lstatus">
                                                    <option value="">All</option>
                                                    <option value="Open" <?php if (!empty($lstatus) && $lstatus == 'Open') { echo 'selected'; } ?> >Open</option>
                                                    <option value="Taken" <?php if (!empty($lstatus) && $lstatus == 'Taken') { echo 'selected'; } ?> >Taken</option>
                                                    <option value="Invalid" <?php if (!empty($lstatus) && $lstatus == 'Invalid') { echo 'selected'; } ?> >Invalid</option>
                                                    <option value="Walk-in" <?php if (!empty($lstatus) && $lstatus == 'Walk-in') { echo 'selected'; } ?> >Walk-in</option>
                                                    <option value="Converted" <?php if (!empty($lstatus) && $lstatus == 'Converted') { echo 'selected'; } ?> >Converted</option>
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
                                            <th>#</th>
                                            <th>Relate to</th>
                                            <th>Class / Course</th>
                                            <th>Address</th>
                                            <th>Contact no.</th>
                                            <th>Call by</th>
                                            <th>Call Time</th>
                                            <th>Call Duration</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($all_leads_info as $leads) { 
                                                $tbyInfo = $this->staff_model->get($leads->staff_id);
                                                $hbyInfo = $this->staff_model->get($leads->current_agent);
                                            ?>
                                            <tr>
                                                <td><?= $leads->l_id; ?></td>
                                                <td><?= $leads->l_name.'<br>'.$leads->l_father_name; ?></td>
                                                <td><?= $leads->l_class; ?></td>
                                                <td><?= $leads->l_address; ?></td>
                                                <td><?= $leads->tel; ?></td>
                                                <td><?= $tbyInfo['employee_id'].' - '.$tbyInfo['name'].' '.$tbyInfo['surname']; ?></td>
                                                <td><?= $leads->date.' '.$leads->time; ?></td>
                                                <td><?= $leads->duration; ?></td>
                                            </tr>
                                            <?php } ?>
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
