<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
?>
<div class="content-wrapper" style="min-height: 946px;">
    <section class="content-header">
        <h1><i class="fa fa-sitemap"></i> <?php //echo $this->lang->line('human_resource'); ?></h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> <?php echo $this->lang->line('select_criteria'); ?></h3>
                    </div>
                    <form id='form1' action="<?php echo site_url('admin/payroll/increment') ?>"  method="post" accept-charset="utf-8">
                        <div class="box-body">
                            <div class="row">

                                <?php
if ($this->session->flashdata('msg')) {
    echo $this->session->flashdata('msg');
    $this->session->unset_userdata('msg');
}
?>
                                <?php echo $this->customlib->getCSRF(); ?>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">
                                            <?php echo $this->lang->line("role"); ?>
                                        </label>
                                        <select autofocus="" onchange="getEmployeeName(this.value)" id="role" name="role" class="form-control" >
                                            <option value=""><?php echo $this->lang->line('select'); ?></option>
                                            <?php
foreach ($classlist as $key => $class) {

    if (isset($_POST["role"])) {
        $role_selected = $_POST["role"];
    } else {
        $role_selected = '';
    }
    ?>
                                                <option value="<?php echo $class["type"] ?>"
                                                <?php
if ($class["type"] == $role_selected) {
        echo "selected";
    }
    ?> ><?php print_r($class["type"])?></option>
                                                        <?php
}
?>
                                        </select>
                                        <span class="text-danger"><?php echo form_error('role'); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('month') ?></label>

                                        <select autofocus="" id="class_id" name="month" class="form-control" >
                                            <option value="select"><?php echo $this->lang->line('select'); ?></option>
                                            <?php
if (isset($month)) {
    $month_selected = date("F", strtotime($month));
} else {
    $month_selected = date("F", strtotime("-1 month"));
}
foreach ($monthlist as $m_key => $month_value) {
    ?>
                                                <option value="<?php echo $m_key ?>" <?php
if ($month_selected == $m_key) {
        echo "selected =selected";
    }
    ?>><?php echo $month_value; ?></option>
                                                        <?php
$count++;
}
?>

                                        </select>
                                        <span class="text-danger"><?php echo form_error('month'); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('year'); ?></label>

                                        <select autofocus="" id="class_id" name="year" class="form-control" >
                                            <option value="select"><?php echo $this->lang->line('select'); ?></option>
                                            <option <?php
if ($year == date("Y", strtotime("-1 year"))) {
    echo "selected";
}
?>  value="<?php echo date("Y", strtotime("-1 year")) ?>"><?php echo date("Y", strtotime("-1 year")) ?></option>
                                            <option <?php
if ($year == date("Y")) {
    echo "selected";
}
?>  value="<?php echo date("Y") ?>"><?php echo date("Y") ?></option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Action</label>
                                        <select class="form-control" name="action_type">
                                            <option value="0" <?php if ($action_type == 0) { echo 'selected'; } ?>>Add New</option>
                                            <option value="1" <?php if ($action_type == 1) { echo 'selected'; } ?>>All Submitted</option>
                                            <option value="2" <?php if ($action_type == 2) { echo 'selected'; } ?>>Approved</option>
                                            <option value="3" <?php if ($action_type == 3) { echo 'selected'; } ?>>Rejected</option>
                                            <option value="4" <?php if ($action_type == 4) { echo 'selected'; } ?>>Pending</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" name="search" value="search" class="btn btn-primary btn-sm pull-right checkbox-toggle"><i class="fa fa-search"></i> <?php echo $this->lang->line('search'); ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
<?php
if (isset($resultlist)) {
    ?>
                        <div class="box-header ptbnull"></div>
                        <div class="box-header ptbnull">
                            <h3 class="box-title titlefix"><i class="fa fa-users"></i> <?php echo $this->lang->line('staff_list'); ?>
                                </i></h3>
                            <div class="box-tools pull-right">
                            </div>
                        </div>
                        <form role="form" id="increment_form" action="<?php echo site_url('admin/payroll/add_increment') ?>">
<input type="hidden" name="selected_month" value="<?= $month; ?>" class="form-control">
<input type="hidden" name="selected_year" value="<?= $year; ?>" class="form-control">
<input type="hidden" name="inc_status" value="<?= $inc_status; ?>" class="form-control">

                        <div class="box-body table-responsive">
                            <div class="download_label"><?php echo $this->lang->line('staff_list'); ?></div>
                            <table class="table table-striped table-bordered table-hover example">
                                
                                <?php if ($action_type == 0) { ?>
                                <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('staff_id'); ?></th>
                                        <th><?php echo $this->lang->line('name'); ?></th>
                                        <?php if ($sch_setting->staff_designation) {?>
                                        <th><?php echo $this->lang->line('designation'); ?></th>
                                        <?php }if ($sch_setting->staff_phone) {?>
                                        <th><?php echo $this->lang->line('phone'); ?></th>
                                        <?php }?>
                                        <th>Current Salary</th>
                                        <th>Increment/Appraisal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$count = 1;
    foreach ($resultlist as $staff) {
        $status = $staff["status"];
        ?>
                                        <tr>
                                            <td><input type="hidden" name="emId[]" value="<?php echo $staff['id']; ?>"><?php echo $staff['employee_id']; ?></td>
                                            <td><?php echo $staff['name'] . " " . $staff['surname']; ?></td>
                                            <?php if ($sch_setting->staff_designation) {?>
                                            <td><?php echo $staff['designation']; ?></td>
                                            <?php }if ($sch_setting->staff_phone) {?>
                                            <td><?php echo $staff['contact_no']; ?></td>
                                            <?php }?>
                                            <td><input type="hidden" class="form-control" name="basic[]" value="<?php echo $staff['basic_salary']; ?>"><?php echo $staff['basic_salary']; ?></td>
                                            <td><input type="number" class="form-control" name="inc_amount[]"></td>
                                        </tr>
        <?php
}
    $count++;
    ?>
                                </tbody>
                                
                                <?php } ?>
                                
                                
                                <?php if ($action_type == 1 || $action_type == 2 || $action_type == 3) { ?>
                                <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('staff_id'); ?></th>
                                        <th><?php echo $this->lang->line('name'); ?></th>
                                        <?php if ($sch_setting->staff_designation) {?>
                                        <th><?php echo $this->lang->line('designation'); ?></th>
                                        <?php }if ($sch_setting->staff_phone) {?>
                                        <th><?php echo $this->lang->line('phone'); ?></th>
                                        <?php }?>
                                        <th>Current Salary</th>
                                        <th style="text-align:center">
                                            Increment/Appraisal<br>
                                            <table class="table table-striped example">
                                                <tr>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$count = 1;
    foreach ($resultlist as $staff) {
        $status = $staff["status"];
        
        $incinfos = $this->payroll_model->salary_increment_report($staff['id'], $month, $year, $inc_status);
        
        if (!empty($incinfos)) {
        
        ?>
                                        <tr>
                                            <td><input type="hidden" name="emId[]" value="<?php echo $staff['id']; ?>"><?php echo $staff['employee_id']; ?></td>
                                            <td><?php echo $staff['name'] . " " . $staff['surname']; ?></td>
                                            <?php if ($sch_setting->staff_designation) {?>
                                            <td><?php echo $staff['designation']; ?></td>
                                            <?php }if ($sch_setting->staff_phone) {?>
                                            <td><?php echo $staff['contact_no']; ?></td>
                                            <?php }?>
                                            <td><input type="hidden" class="form-control" name="basic[]" value="<?php echo $staff['basic_salary']; ?>"><?php echo $staff['basic_salary']; ?></td>
                                            <td>
                                                <table class="table table-striped example">
                                                    <?php foreach ($incinfos as $incinfo) { ?>
                                                    <tr>
                                                        <td><?= $incinfo->increment; ?></td>
                                                        <td><?= ucfirst($incinfo->status); ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                </table>
                                            </td>
                                        </tr>
        <?php
} }
    $count++;
    ?>
                                </tbody>
                                
                                <?php } ?>
                                
                                
                                <?php if ($action_type == 4) { ?>
                                <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('staff_id'); ?></th>
                                        <th><?php echo $this->lang->line('name'); ?></th>
                                        <?php if ($sch_setting->staff_designation) {?>
                                        <th><?php echo $this->lang->line('designation'); ?></th>
                                        <?php }if ($sch_setting->staff_phone) {?>
                                        <th><?php echo $this->lang->line('phone'); ?></th>
                                        <?php }?>
                                        <th>Current Salary</th>
                                        <th style="text-align:center">
                                            Increment/Appraisal<br>
                                            <table class="table table-striped example">
                                                <tr>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$count = 1;
    foreach ($resultlist as $staff) {
        $status = $staff["status"];
        
        $incinfos = $this->payroll_model->salary_increment_report($staff['id'], $month, $year, $inc_status);
        
        if (!empty($incinfos)) {
        
        ?>
                                        <tr>
                                            <td><input type="hidden" name="emId[]" value="<?php echo $staff['id']; ?>"><?php echo $staff['employee_id']; ?></td>
                                            <td><?php echo $staff['name'] . " " . $staff['surname']; ?></td>
                                            <?php if ($sch_setting->staff_designation) {?>
                                            <td><?php echo $staff['designation']; ?></td>
                                            <?php }if ($sch_setting->staff_phone) {?>
                                            <td><?php echo $staff['contact_no']; ?></td>
                                            <?php }?>
                                            <td><input type="hidden" class="form-control" name="basic[]" value="<?php echo $staff['basic_salary']; ?>"><?php echo $staff['basic_salary']; ?></td>
                                            <td>
                                                <table class="table table-striped example">
                                                    <?php foreach ($incinfos as $incinfo) { ?>
                                                    <tr>
                                                        <td><input type="hidden" class="form-control" name="<?php echo $staff['id']; ?>inc_id[]" value="<?php echo $incinfo->pi_id; ?>">
                                                            <input type="number" class="form-control" name="<?php echo $staff['id']; ?>inc_amount[]" value="<?= $incinfo->increment; ?>">
                                                        </td>
                                                        <td><?= ucfirst($incinfo->status); ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                </table>
                                            </td>
                                        </tr>
        <?php
} }
    $count++;
    ?>
                                </tbody>
                                
                                <?php } ?>
                                
                            </table>
                            
                            
                        <?php if ($action_type == 0 || $action_type == 4) { ?>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <button type="button" class="btn btn-primary save_increment pull-right w-100" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> <?php echo $this->lang->line('processing'); ?>"> <?php echo $this->lang->line('save'); ?></button>
                        </div>
                        <?php }  ?>
                        </div>
                        </form>
                    </div>
    <?php
}
?>
            </div>
        </div>
    </section>
</div>


<script type="text/javascript">
    
    $(document).on('click', '.save_increment', function (e) {
        var $this = $(this);
        $this.button('loading');
        $.ajax({
            url: '<?php echo site_url("admin/payroll/add_increment") ?>',
            type: 'post',
            data: $('#increment_form').serialize(),
            dataType: 'json',
            success: function (data) {
                if (data.status == "fail") {
                    var message = "";
                    $.each(data.error, function (index, value) {
                        message += value;
                    });
                    errorMsg(message);
                } else {
                    successMsg(data.message);
                    window.location.reload(true);
                }

                $this.button('reset');
            }
        });
    });
</script>