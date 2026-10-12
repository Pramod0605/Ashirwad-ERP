<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-user-plus"></i> <?php echo $this->lang->line('student_information'); ?> <small><?php echo $this->lang->line('student1'); ?></small></h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <?php $this->load->view('admin/multibranch/finance/_report'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> <?php echo $this->lang->line('select_criteria'); ?></h3>
                    </div>
                    <div class="box-body">
                         <form role="form" action="<?php echo current_url(); ?>" method="post" class="class_search_form">
                        <?php if ($this->session->flashdata('msg')) {?> <div class="alert alert-success">  <?php echo $this->session->flashdata('msg') ?> </div> <?php }?>
                              <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('date_from'); ?> <small class="req"> *</small></label>
                                   <input id="date_from" name="date_from" placeholder="" type="text" class="form-control date" value="<?php echo set_value('date_from') ?>" autocomplete="off">
                                        <span class="text-danger"><?php echo form_error('date_from'); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('date_to'); ?> <small class="req"> *</small></label>
                                        <input id="date_to" name="date_to" placeholder="" type="text" class="form-control date" value="<?php echo set_value('date_to') ?>" autocomplete="off">
                                        <span class="text-danger"><?php echo form_error('date_to'); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('branch'); ?> <small class="req"> *</small></label>
                                        <select name="branch_id" class="form-control">
                                            <option value="">Select....</option>
                                            <?php foreach ($branches as $branch_key => $branch_value) { ?>
                                            <option value="<?= $branch_value->id; ?>" <?php if ($branch_id == $branch_value->id) { echo 'selected'; } ?>><?= $branch_value->branch_name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Report Type <small class="req"> *</small></label>
                                        <select name="report_type" class="form-control">
                                            <option value="1" <?php if ($report_type == 1) { echo 'selected'; } ?>>Brief</option>
                                            <option value="2" <?php if ($report_type == 2) { echo 'selected'; } ?>>Details</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                    </div>
                         <div class="box-footer">
                            <div class="resp">
                                
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm pull-right"><i class="fa fa-search"></i> <?php echo $this->lang->line('search') ?></button>  
                             </div>


                             
                     
                   <?php
                        if (!empty($flag) && $report_type == 1) { ?>
                        <div class="nav-tabs-custom border0 navnoshadow">
                            <div class="" id="transfee">
                                <div class="box-header ptbnull">
                                    <h3 class="box-title titlefix"><i class="fa fa-users"></i> <?php echo $this->lang->line('daily_collection_report'); ?></h3>
                                </div>                              
                                <div class="box-body">
                                   <?php 
                                   if(!empty($flag)){
                        ?>
                            <div class="table-responsive">
                                <div class="download_label"><?php echo $this->lang->line('daily_collection_report'); ?></div>
                                 <table class="table table-striped table-bordered table-hover example">
                                    <thead>
                                        <tr>
                                            <th><?php echo $this->lang->line('date') ?> </th>
                                            <th class="text text-center"><?php echo $this->lang->line('total_transactions') ?></th>
                                            <th class="text text-right"><?php echo $this->lang->line('amount') ?> <span><?php echo "(" . $currency_symbol . ")"; ?></span></th>
                                        </tr>
                                    </thead>
                                <tbody>
                                <?php
                                    $begin = new DateTime($datefrom);
                                    $end = new DateTime($dateto);
                                    $interval = DateInterval::createFromDateString('1 day');
                                    $end->add($interval);
                                    $period = new DatePeriod($begin, $interval, $end);
                                    $total_amount = 0;
                                    if (!empty($period)) { foreach ($period as $mcd) {
                                        $date   = $mcd->format("Y-m-d");
                                        $datetf = $date. ' 00:00:00';
                                        $datete = $date. ' 24:00:00';
                                        if ($branch_id > 0) {
                                            $branchdb   = $this->load->database('branch_' . $branch_id, true);
                                            $colamnts   = $branchdb->query("SELECT SUM(paid_amount) AS pa, COUNT(id) AS tt FROM `online_course_payment` WHERE date >= '".$datetf."' AND date <= '".$datete."' ")->row();
                                            $colamnt    = $colamnts->pa;
                                            $coltrns    = $colamnts->tt;
                                        } else {
                                            $branches       = $this->multibranch_model->get();
                                            $bcolamnt       = 0;
                                            $bcoltrns       = 0;
                                            foreach ($branches as $branch_value) {
                                                $branchdb   = $this->load->database('branch_' . $branch_value->id, true);
                                                $colamnts   = $branchdb->query("SELECT SUM(paid_amount) AS pa, COUNT(id) AS tt FROM `online_course_payment` WHERE date >= '".$datetf."' AND date <= '".$datete."' ")->row();
                                                $bcolamnt   += $colamnts->pa;
                                                $bcoltrns   += $colamnts->tt;
                                            }
                                            $mainbranchca   = $this->db->query("SELECT SUM(paid_amount) AS pa, COUNT(id) AS tt FROM `online_course_payment` WHERE date >= '".$datetf."' AND date <= '".$datete."' ")->row();
                                            $colamnt        = $bcolamnt + $mainbranchca->pa;
                                            $coltrns        = $bcoltrns + $mainbranchca->tt;
                                        }
                                    $total_amount +=  $colamnt;   
                                    ?>
                                    <tr>
                                        <td><?php echo $date; ?></td>
                                        <td class="text text-center"><?= $coltrns; ?></td>
                                        <td class="text text-right"><?php echo $currency_symbol.amountFormat($colamnt); ?></td>
                                    </tr>
                                <?php } } ?>
                                  
                                </tbody>
                                    <tr>
                                        <td class="text text-left"><strong>Toal</strong></td>
                                        <td></td>
                                        <td class="text text-right"><strong><?php echo $currency_symbol.amountFormat($total_amount);?></strong></td>
                                    </tr>

                                </table>
                            </div>
                          <?php 
                                   }else{
                                     ?>
                                        <div class="alert alert-info">
                                            <?php echo $this->lang->line('no_record_found'); ?>
                                        </div>
                                        <?php
                                   }


                                    ?>
                     
                                </div>                            
                            </div>                 
                        </div>
                        <?php
                    }
                    ?>
                    
                    
                    
                    
                    
                    
                    
                    <?php
                        if (!empty($flag) && $report_type == 2) { ?>
                        <div class="nav-tabs-custom border0 navnoshadow">
                            <div class="" id="transfee">
                                <div class="box-header ptbnull">
                                    <h3 class="box-title titlefix"><i class="fa fa-users"></i> <?php echo $this->lang->line('daily_collection_report'); ?></h3>
                                </div>                              
                                <div class="box-body">
                                   <?php 
                                   if(!empty($flag)){
                        ?>
                            <div class="table-responsive">
                                <div class="download_label"><?php echo $this->lang->line('daily_collection_report'); ?></div>
                                 <table class="table table-striped table-bordered table-hover example">
                                    <thead>
                                        <tr>
                                            <th><?php echo $this->lang->line('date') ?></th>
                                            <th>Branch</th>
                                            <th>Type</th>
                                            <th>Ref.</th>
                                            <th class="text text-right"><?php echo $this->lang->line('amount') ?> <span><?php echo "(" . $currency_symbol . ")"; ?></span></th>
                                        </tr>
                                    </thead>
                                <tbody>
                                <?php
                                    $datetf         = $datefrom. ' 00:00:00';
                                    $datete         = $dateto. ' 24:00:00';
                                    $total_amount   = 0;
                                    
                                    if (!empty($branch_id)) {
                                        $branchinfo = $this->db->query("SELECT * FROM `multi_branch` WHERE id = '".$branch_id."'  ")->row();
                                        $branchdb   = $this->load->database('branch_' . $branch_id, true);
                                        $results    = $branchdb->query("SELECT * FROM `online_course_payment` WHERE date >= '".$datetf."' AND date <= '".$datete."' ")->result();
                                    
                                    foreach ($results as $result) {
                                        $total_amount +=  $result->paid_amount;
                                        if ($result->student_id > 0) {
                                            $type   = 'Student';
                                            $uinfo  = $this->db->query("SELECT * FROM `students` WHERE id = '".$result->student_id."'  ")->row();
                                            $uname  = $uinfo->firstname.' '.$uinfo->lastname;
                                        } else {
                                            $type   = 'Guest';
                                            $uinfo  = $this->db->query("SELECT * FROM `guest` WHERE id = '".$result->guest_id."'  ")->row();
                                            $uname  = $uinfo->guest_name;
                                        }
                                    ?>
                                    <tr>
                                        <td><?php echo $result->date; ?></td>
                                        <td><?= $branchinfo->branch_name; ?></td>
                                        <td><?= $type; ?></td>
                                        <td><?= $uname; ?></td>
                                        <td class="text text-right"><?php echo $currency_symbol.amountFormat($result->paid_amount); ?></td>
                                    </tr>
                                <?php } } else {
                                        $branches   = $this->multibranch_model->get();
                                        foreach ($branches as $branch_value) {
                                            
                                            $branchinfo = $this->db->query("SELECT * FROM `multi_branch` WHERE id = '".$branch_value->id."'  ")->row();
                                            $branchdb   = $this->load->database('branch_' . $branch_value->id, true);
                                            $results    = $branchdb->query("SELECT * FROM `online_course_payment` WHERE date >= '".$datetf."' AND date <= '".$datete."' ")->result();
                                        foreach ($results as $result) {  
                                            $total_amount +=  $result->paid_amount;
                                            if ($result->student_id > 0) {
                                                $type   = 'Student';
                                                $uinfo  = $this->db->query("SELECT * FROM `students` WHERE id = '".$result->student_id."'  ")->row();
                                                $uname  = $uinfo->firstname.' '.$uinfo->lastname;
                                            } else {
                                                $type   = 'Guest';
                                                $uinfo  = $this->db->query("SELECT * FROM `guest` WHERE id = '".$result->guest_id."'  ")->row();
                                                $uname  = $uinfo->guest_name;
                                            }
                                ?>
                                    <tr>
                                        <td><?php echo $result->date; ?></td>
                                        <td><?= $branchinfo->branch_name; ?></td>
                                        <td><?= $type; ?></td>
                                        <td><?= $uname; ?></td>
                                        <td class="text text-right"><?php echo $currency_symbol.amountFormat($result->paid_amount); ?></td>
                                    </tr>
                                <?php } 
                                    $results    = $this->db->query("SELECT * FROM `online_course_payment` WHERE date >= '".$datetf."' AND date <= '".$datete."' ")->result();
                                    foreach ($results as $result) {  
                                        $total_amount +=  $result->paid_amount;
                                        if ($result->student_id > 0) {
                                            $type   = 'Student';
                                            $uinfo  = $this->db->query("SELECT * FROM `students` WHERE id = '".$result->student_id."'  ")->row();
                                            $uname  = $uinfo->firstname.' '.$uinfo->lastname;
                                        } else {
                                            $type   = 'Guest';
                                            $uinfo  = $this->db->query("SELECT * FROM `guest` WHERE id = '".$result->guest_id."'  ")->row();
                                            $uname  = $uinfo->guest_name;
                                        }
                                
                                ?>
                                    <tr>
                                        <td><?php echo $result->date; ?></td>
                                        <td><?= 'Home Branch'; ?></td>
                                        <td><?= $type; ?></td>
                                        <td><?= $uname; ?></td>
                                        <td class="text text-right"><?php echo $currency_symbol.amountFormat($result->paid_amount); ?></td>
                                    </tr>
                               <?php } } } ?>
                                </tbody>
                                    <tr>
                                        <td class="text text-left"><strong>Toal</strong></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text text-right"><strong><?php echo $currency_symbol.amountFormat($total_amount);?></strong></td>
                                    </tr>
                                
                                </table>
                            </div>
                          <?php 
                                   }else{
                                     ?>
                                        <div class="alert alert-info">
                                            <?php echo $this->lang->line('no_record_found'); ?>
                                        </div>
                                        <?php
                                   }


                                    ?>
                     
                                </div>                            
                            </div>                 
                        </div>
                        <?php
                    }
                    ?>
                             </div>

             
                                                          </div><!--./box box-primary -->
       
                                                        </div>
                                                        </div>
                                                        </section>
                                                        </div>



<div id="collectionModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xl">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> <?php echo $this->lang->line('daily_collection_report'); ?> </h4>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>




<script type="text/javascript">

$(document).ready(function(){
  $('#collectionModal').modal({backdrop:'static', keyboard:false, show: false});
});

      $(document).on('click', '.fee_collection', function () {
        var $this = $(this);
        var date=$this.data('date');    
     
        $.ajax({
            type: 'POST',
            url: baseurl + "admin/multibranch/finance/feeCollectionStudentDeposit",
            data: {'date':date,'fees_id':$this.data('depositeId')},
            dataType: 'JSON',
            beforeSend: function () {
                $this.button('loading');
            },
            success: function (data) {
                $('#collectionModal .modal-body').html(data.page);
                $('#collectionModal').modal('show');
                $this.button('reset');
            },
            error: function (xhr) { // if error occured
                alert("<?php echo $this->lang->line('error_occurred_please_try_again'); ?>");
                $this.button('reset');
            },
            complete: function () {
                $this.button('reset');
            }
        });
    });
</script>