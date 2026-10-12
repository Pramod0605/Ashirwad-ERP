<!-- Content Wrapper. Contains page content -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<div class="content-wrapper">

<script>
    $(document).ready(function() {
        togglePromoterDiv();
        $('#ct_id').change(function() {
            togglePromoterDiv();
        });
        
        function togglePromoterDiv() {
            var selectedOption = $('#ct_id option:selected');
            var campaignType = selectedOption.data('title');
            if (campaignType === 'Promoters') {
                $('#promoter').show();
            } else {
                $('#promoter').hide();
                $('#cp_id').val('');
            }
        }
    });
</script>

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
                            <h3 class="box-title">Add Campaign</h3>
                        </div><!-- /.box-header -->
                        <form id="form1" action="<?php echo base_url() ?>admin/leads/campaign"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8">
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
                                <input type="hidden" class="form-control" value="<?= $c_id; ?>" name="c_id">
                                
                                <div class="form-group">
                                    <label for="ct_id">Campaign Type</label>
                                    <select class="form-control js-example-basic-multiple" name="ct_id" id="ct_id" required>
                                        <option value="">Select....</option>
                                        <?php foreach ($campaign_type_info as $cti) { ?>
                                        <option value="<?= $cti->ct_id; ?>" data-title="<?= $cti->ct_title; ?>" <?php if (!empty($c_id) && $campInfo->ct_id  == $cti->ct_id) { echo 'selected'; } ?>><?= $cti->ct_title; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                
                                <div class="form-group" style="display:none;" id="promoter">
                                    <label for="cp_id">Promoter</label>
                                    <select class="form-control js-example-basic-multiple" name="cp_id" id="cp_id" required>
                                        <option value="">Select....</option>
                                        <?php foreach ($all_promoters as $promoters) { ?>
                                        <option value="<?= $promoters->cp_id; ?>" <?php if (!empty($c_id) && $campInfo->cp_id  == $promoters->cp_id) { echo 'selected'; } ?>><?= $promoters->promoter_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                
                                <div class="form-group" style="display:none;" id="promoter">
                                    <label for="cp_id">Promoter</label>
                                    <select class="form-control js-example-basic-multiple" name="cp_id" id="cp_id" required>
                                        <option value="">Select....</option>
                                        <?php foreach ($all_promoters as $promoters) { ?>
                                        <option value="<?= $promoters->cp_id; ?>" <?php if (!empty($c_id) && $campInfo->cp_id  == $promoters->cp_id) { echo 'selected'; } ?>><?= $promoters->promoter_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="c_title"><?php echo $this->lang->line('name'); ?></label> <small class="req">*</small>
                                    <input autofocus="" id="c_title" name="c_title" placeholder="" type="text" class="form-control"  value="<?php if (!empty($c_id)) { echo $campInfo->c_title; } ?>" />
                                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="c_manager">Campaign Manager</label>
                                    <select class="form-control" name="c_manager">
                                        <option value="">Select....</option>
                                        <?php foreach ($stafflist as $staff) { ?>
                                        <option value="<?= $staff['id']; ?>" <?php if (!empty($c_id) && $campInfo->c_manager == $staff['id']) { echo 'selected'; } ?>><?= $staff['name'].' '.$staff['surname']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="c_manager">Counsellor Level 1</label>
                                    <select class="form-control js-example-basic-multiple" name="c_counsellor[]" multiple>
                                        <option value="">Select....</option>
                                        <?php foreach ($stafflist as $staff) { 
                                        
                                        $lsinfo = $this->db->query("SELECT lc_id as lcid FROM cyc_leads_counsellor WHERE c_id = '".$c_id."' AND staff_id = '".$staff['id']."' AND level = '1' ")->row();
                                        ?>
                                        <option value="<?= $staff['id']; ?>" <?php if (!empty($c_id) && !empty($lsinfo->lcid)) { echo 'selected'; } ?>><?= $staff['name'].' '.$staff['surname']; ?></option>
                                        
                                        <?php } ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="c_manager">Counsellor Level 2</label>
                                    <select class="form-control js-example-basic-multiple" name="c_counsellor_l2[]" multiple>
                                        <option value="">Select....</option>
                                        <?php foreach ($stafflist as $staff) { 
                                        
                                        $lsinfo = $this->db->query("SELECT lc_id as lcid FROM cyc_leads_counsellor WHERE c_id = '".$c_id."' AND staff_id = '".$staff['id']."' AND level = '2' ")->row();
                                        ?>
                                        <option value="<?= $staff['id']; ?>" <?php if (!empty($c_id) && !empty($lsinfo->lcid)) { echo 'selected'; } ?>><?= $staff['name'].' '.$staff['surname']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="c_description"><?php echo $this->lang->line('description'); ?></label>
                                    <textarea class="form-control" id="c_description" name="c_description" placeholder="" rows="3" placeholder=""><?php if (!empty($c_id)) { echo $campInfo->c_description; } ?></textarea>
                                    <span class="text-danger"></span>
                                </div>
                                
                                <div class="form-group">
                                    <label for="c_description">Default Share Message</label>
                                    <textarea class="form-control" id="default_share_message" name="default_share_message" placeholder="" rows="3" placeholder=""><?php if (!empty($c_id)) { echo $campInfo->default_share_message; } ?></textarea>
                                    <span class="text-danger"></span>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="c_status">Status</label>
                                    <select class="form-control" name="c_status">
                                        <option value="Active" <?php if (!empty($c_id) && $campInfo->c_status == 'Active') { echo 'selected'; } ?>>Active</option>
                                        <option value="Inactive">Inactive</option>
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
                        <h3 class="box-title titlefix">All Campaign</h3>
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
                                        <th><?php echo $this->lang->line('type'); ?> </th>
                                        <th><?php echo $this->lang->line('description'); ?> </th>
                                        <th>Share Message</th>
                                        <th>Manager</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th class="text-right noExport"><?php echo $this->lang->line('action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($campaign_info as $campaign) {
                                        ?>
                                        <tr>
                                            <td class="mailbox-name">
                                                <?php echo $campaign->c_title ?>                                     
                                            </td>
                                            <td class="mailbox-name">
                                                <?php echo $campaign->ct_title ?>                                     
                                            </td>
											<td class="mailbox-name">
                                                <?php echo $campaign->c_description; ?>                               
                                            </td>
                                            <td class="mailbox-name">
                                                <?php echo $campaign->default_share_message; ?>                               
                                            </td>
                                            <td class="mailbox-name">
                                                <?php echo $campaign->employee_id.' - '.$campaign->name.' '.$campaign->surname; ?>                           
                                            </td>
                                            <td class="mailbox-name">
                                                <?php echo $campaign->c_date; ?>                               
                                            </td>
                                            <td class="mailbox-name">
                                                <?php echo $campaign->c_status; ?>                               
                                            </td>
                                            <td class="mailbox-date pull-right">
                                                <a href="<?php echo base_url(); ?>admin/leads/campaign/<?php echo $campaign->c_id ?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="<?php echo $this->lang->line('edit'); ?>">
                                                        <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="<?php echo base_url(); ?>admin/leads/view_campaign/<?php echo $campaign->c_id ?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="<?php echo $this->lang->line('view'); ?>">
                                                        <i class="fa fa-eye"></i>
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