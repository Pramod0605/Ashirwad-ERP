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
                              <form role="form" action="<?php echo site_url('admin/leads/promoter_commission_report') ?>" method="post" class="class_search_form">
                            <div class="col-md-12">
                                <div class="row">
                                        <?php echo $this->customlib->getCSRF(); ?>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Promoter</label> <small class="req"> *</small>
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
                                                <label>From</label>
                                                <input type="date" class="form-control" value="<?= $fdate; ?>" name="fdate">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>To</label>
                                                <input type="date" class="form-control" value="<?= $tdate; ?>" name="tdate">
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
                                            <th>Reg. Ref. Number</th>
                                            <th>Admission No.</th>
                                            <th>Class / Course</th>
                                            <th>Address</th>
                                            <th>Contact no.</th>
                                            <th>Commission</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                       $totalcm = 0;
                                       foreach ($all_leads_info as $leads) {
                                           $totalcm += $leads->commission_given;
                                            ?>
                                            <tr>
                                                <td><?= $leads->l_id; ?></td>
                                                <td><?= $leads->l_name.'<br>'.$leads->l_father_name; ?></td>
                                                <td><?= $leads->reference_no; ?></td>
                                                <td><?= $leads->admission_no; ?></td>
                                                <td><?= $leads->l_class; ?></td>
                                                <td><?= $leads->l_address; ?></td>
                                                <td><?= $leads->l_phone_number; ?></td>
                                                <td><?= $leads->commission_given; ?></td>
                                            </tr>
                                            <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <th colspan="6">Total</th>
                                        <th><?= $totalcm; ?></th>
                                    </tfoot>
                                </table>
                            </div>
                            
                                                            </div>
                                                            </div>
                                                          </div><!--./box box-primary -->
                                                           
                                                        </div>
                                                        </div>
                                                        </section>
                                                        </div>
