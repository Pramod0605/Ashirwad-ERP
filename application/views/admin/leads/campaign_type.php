<!-- Content Wrapper. Contains page content -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<div class="content-wrapper">
    
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <?php
            if ($this->rbac->hasPrivilege('leads', 'can_add')) {
                ?>
                <div class="col-md-4">
                    <!-- Horizontal Form -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Campaign Type</h3>
                        </div><!-- /.box-header -->
                        <form id="form1" action="<?php echo base_url() ?>admin/leads/campaign_type"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8">
                            <div class="box-body">
                                <?php if ($this->session->flashdata('msg')) { ?>
                                    <?php echo $this->session->flashdata('msg'); $this->session->unset_userdata('msg'); ?>
                                <?php } ?>
                                <?php
                                if (isset($error_message)) {
                                    echo "<div class='alert alert-danger'>" . $error_message . "</div>";
                                }
                                ?>
                                <?php echo $this->customlib->getCSRF(); ?>
                                <input type="hidden" class="form-control" value="<?= $ct_id; ?>" name="ct_id">
                                <div class="form-group">
                                    <label for="ct_title"><?php echo $this->lang->line('name'); ?></label> <small class="req">*</small>
                                    <input autofocus="" id="ct_title" name="ct_title" placeholder="" type="text" class="form-control"  value="<?php if (!empty($ct_id)) { echo $campTypeInfo->ct_title; } ?>" />
                                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="ct_description"><?php echo $this->lang->line('description'); ?></label>
                                    <textarea class="form-control" id="ct_description" name="ct_description" placeholder="" rows="3" placeholder=""><?php if (!empty($ct_id)) { echo $campTypeInfo->ct_description; } ?></textarea>
                                    <span class="text-danger"></span>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="c_status">Status</label>
                                    <select class="form-control" name="ct_status">
                                        <option value="1" <?php if (!empty($ct_id) && $campTypeInfo->ct_status == '1') { echo 'selected'; } ?>>Active</option>
                                        <option value="0" <?php if (!empty($ct_id) && $campTypeInfo->ct_status == '0') { echo 'selected'; } ?>>Inactive</option>
                                    </select>
                                </div>
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" name="submit" value="1" class="btn btn-info pull-right"><?php echo $this->lang->line('save'); ?></button>
                            </div>
                        </form>
                    </div>
                </div><!--/.col (right) -->
                <!-- left column -->
            <?php } ?>
            <div class="col-md-<?php
            if ($this->rbac->hasPrivilege('leads', 'can_add')) {
                echo "8";
            } else {
                echo "12";
            }
            ?>">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">All Campaign Type</h3>
                        <div class="box-tools pull-right">
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="download_label"><?php echo $this->lang->line('fees_group_list'); ?></div>
                        <div class="mailbox-messages table-responsive overflow-visible">
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('name'); ?> </th>
                                        <th><?php echo $this->lang->line('description'); ?> </th>
                                        <th>Status</th>
                                        <th class="text-right noExport"><?php echo $this->lang->line('action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($campaign_type_info as $campaigntype) {
                                        if ($campaigntype->ct_status == '1') {
                                            $ctStatus =  '<span class="badge badge-success">Active</span>';
                                        } else {
                                            $ctStatus =  '<span class="badge badge-danger">Inactive</span>';
                                        }
                                        
                                        ?>
                                        <tr>
                                            <td class="mailbox-name">
                                                <?php echo $campaigntype->ct_title ?>                                     
                                            </td>
											<td class="mailbox-name">
                                                <?php echo $campaigntype->ct_description; ?>                               
                                            </td>
                                            <td class="mailbox-name">
                                                <?php echo $ctStatus; ?>                               
                                            </td>
                                            <td class="mailbox-date pull-right">
                                                <a href="<?php echo base_url(); ?>admin/leads/campaign_type/<?php echo $campaigntype->ct_id ?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="<?php echo $this->lang->line('edit'); ?>">
                                                        <i class="fa fa-pencil"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table><!-- /.table -->
                        </div><!-- /.mail-box-messages -->
                    </div><!-- /.box-body -->
                </div>
            </div><!--/.col (left) -->
            <!-- right column -->
        </div>
        <div class="row">
            <!-- left column -->
            <!-- right column -->
            <div class="col-md-12">
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<script>
    $(document).ready(function () {
        $('.detail_popover').popover({
            placement: 'right',
            trigger: 'hover',
            container: 'body',
            html: true,
            content: function () {
                return $(this).closest('td').find('.fee_detail_popover').html();
            }
        });
    });
</script>
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>