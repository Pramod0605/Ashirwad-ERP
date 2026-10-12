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
                            <h3 class="box-title">Add Promoter</h3>
                        </div><!-- /.box-header -->
                        <form id="form1" action="<?php echo base_url() ?>admin/leads/promoters"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8">
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
                                <input type="hidden" class="form-control" value="<?= $cp_id; ?>" name="cp_id">
                                <div class="form-group">
                                    <label for="promoter_name"><?php echo $this->lang->line('name'); ?></label> <small class="req">*</small>
                                    <input autofocus="" id="promoter_name" name="promoter_name" placeholder="" type="text" class="form-control"  value="<?php if (!empty($cp_id)) { echo $promoter->promoter_name; } ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="promoter_institute">Institute</label> <small class="req">*</small>
                                    <input autofocus="" id="promoter_institute" name="promoter_institute" placeholder="" type="text" class="form-control"  value="<?php if (!empty($cp_id)) { echo $promoter->promoter_institute; } ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="promoter_designation">Designation</label> <small class="req">*</small>
                                    <input autofocus="" id="promoter_designation" name="promoter_designation" placeholder="" type="text" class="form-control"  value="<?php if (!empty($cp_id)) { echo $promoter->promoter_designation; } ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="promoter_contact_no">Contact No.</label> <small class="req">*</small>
                                    <input autofocus="" id="promoter_contact_no" name="promoter_contact_no" placeholder="" type="text" class="form-control"  value="<?php if (!empty($cp_id)) { echo $promoter->promoter_contact_no; } ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="promoter_alternate_contact_no">Alternate Contact No.</label> <small class="req">*</small>
                                    <input autofocus="" id="promoter_alternate_contact_no" name="promoter_alternate_contact_no" placeholder="" type="text" class="form-control"  value="<?php if (!empty($cp_id)) { echo $promoter->promoter_alternate_contact_no; } ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="promoter_address">Address</label>
                                    <textarea class="form-control" id="promoter_address" name="promoter_address" placeholder="" rows="3" placeholder=""><?php if (!empty($cp_id)) { echo $promoter->promoter_address; } ?></textarea>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <label for="promoter_commission">Commission</label> <small class="req">*</small>
                                    <input autofocus="" id="promoter_commission" name="promoter_commission" placeholder="" type="number" class="form-control"  value="<?php if (!empty($cp_id)) { echo $promoter->promoter_commission; } ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="promoter_status">Status</label>
                                    <select class="form-control" name="promoter_status">
                                        <option value="1" <?php if (!empty($cp_id) && $promoter->promoter_status == '1') { echo 'selected'; } ?>>Active</option>
                                        <option value="0" <?php if (!empty($cp_id) && $promoter->promoter_status == '0') { echo 'selected'; } ?>>Inactive</option>
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
                        <h3 class="box-title titlefix">All Promoters</h3>
                        <div class="box-tools pull-right">
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="download_label"></div>
                        <div class="mailbox-messages table-responsive overflow-visible">
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Institute</th>
                                        <th>Designation</th>
                                        <th>Contact No.</th>
                                        <th>Address</th>
                                        <th>Commission</th>
                                        <th>Status</th>
                                        <th class="text-right noExport"><?php echo $this->lang->line('action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($all_promoters as $promoters) {
                                        if ($promoters->promoter_status == '1') {
                                            $cpStatus =  '<span class="badge badge-success">Active</span>';
                                        } else {
                                            $cpStatus =  '<span class="badge badge-danger">Inactive</span>';
                                        }
                                        
                                        ?>
                                        <tr>
                                            <td class="mailbox-name">
                                                <?php echo $promoters->promoter_name ?>                                     
                                            </td>
											<td class="mailbox-name">
                                                <?php echo $promoters->promoter_institute; ?>                               
                                            </td>
                                            <td class="mailbox-name">
                                                <?php echo $promoters->promoter_designation; ?>                               
                                            </td>
                                            <td class="mailbox-name">
                                                <?php echo $promoters->promoter_contact_no.'<br>'.$promoters->promoter_alternate_contact_no; ?>                               
                                            </td>
                                            <td class="mailbox-name">
                                                <?php echo $promoters->promoter_address; ?>                               
                                            </td>
                                            <td class="mailbox-name">
                                                <?php echo $promoters->promoter_commission; ?>                               
                                            </td>
                                            <td class="mailbox-name">
                                                <?php echo $cpStatus; ?>                               
                                            </td>
                                            <td class="mailbox-date pull-right">
                                                <a href="<?php echo base_url(); ?>admin/leads/promoters/<?php echo $promoters->cp_id ?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="<?php echo $this->lang->line('edit'); ?>">
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