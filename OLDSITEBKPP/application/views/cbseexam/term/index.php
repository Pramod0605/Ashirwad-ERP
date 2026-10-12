<div class="content-wrapper"> 
    <!-- Main content -->
    <section class="content">
        <div class="row">           
            <div class="col-md-12">             
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><?php echo $this->lang->line('term_list'); ?></h3>  
                        <div class="box-tools pull-right">
                            <?php if ($this->rbac->hasPrivilege('cbse_exam_term', 'can_add')) { ?>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addTermModal" data-original-title="" title="" autocomplete="off"><i class="fa fa-plus"></i> Add Term</button> 
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addGroupModal" data-original-title="" title="" autocomplete="off"><i class="fa fa-plus"></i> Add Term Group</button> 
                            <?php } ?>              
                        </div>               
                    </div>
                    <div class="box-body">                        
                        <div class="table-responsive mailbox-messages overflow-visible-lg">
                            <?php if ($this->session->flashdata('msgdelete')) { ?>
                                <?php echo $this->session->flashdata('msgdelete') ?>
                            <?php } ?>
                            <table class="table table-striped table-bordered table-hover term-list" data-export-title="<?php echo $this->lang->line('term_list'); ?>">
                                <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('name'); ?></th>
                                        <th><?php echo $this->lang->line('code'); ?></th>                                        
                                        <th><?php echo $this->lang->line('description'); ?></th>
                                        <th class="text-right"><?php echo $this->lang->line('action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                             
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </section>
    
    
    <section class="content">
        <div class="row">           
            <div class="col-md-12">             
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Group List</h3>  
                        <div class="box-tools pull-right">
                            <?php if ($this->rbac->hasPrivilege('cbse_exam_term', 'can_add')) { ?>
                            
                            <?php } ?>              
                        </div>               
                    </div>
                    <div class="box-body">                        
                        <div class="table-responsive mailbox-messages overflow-visible-lg">
                            <?php if ($this->session->flashdata('msgdelete')) { ?>
                                <?php echo $this->session->flashdata('msgdelete') ?>
                            <?php } ?>
                            <table class="table table-striped table-bordered table-hover" data-export-title="Group List">
                                <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('name'); ?></th>
                                        <th><?php echo $this->lang->line('code'); ?></th>  
                                        <th><?php echo $this->lang->line('term'); ?></th>
                                        <th><?php echo $this->lang->line('description'); ?></th>
                                        <th class="text-right"><?php echo $this->lang->line('action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($exam_groups as $groups) { ?>
                                    <tr>
                                        <td><?= $groups->group_title; ?></td>
                                        <td><?= $groups->group_code; ?></td>
                                        <td><?= $groups->name; ?></td>
                                        <td><?= $groups->group_description; ?></td>
                                        <td>
                                            <button  class='btn btn-default btn-xs edit_group'  data-toggle='tooltip' data-recordid="<?= $groups->exam_group_id; ?>"  title='Edit'><i class='fa fa-pencil'></i></button>
                                            <a onclick='return confirm("Delete Confirm?")' href='<?= base_url(); ?>cbseexam/term/delete_group/<?= $groups->exam_group_id; ?>' class='btn btn-default btn-xs' title='Delete' data-toggle='tooltip'><i class='fa fa-trash'></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </section>
</div>

<div id="addTermModal" class="modal fade " role="dialog">
    <div class="modal-dialog modal-dialog2 modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close close_btn" data-dismiss="modal" >&times;</button>
                <h4 class="modal-title" id="modal-title"><?php echo $this->lang->line('add_term')?></h4>
            </div>
            <form role="form" id="add_form" method="post" enctype="multipart/form-data" action="">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" class="form-control" value="">
                    <div class="form-group">
                        <label><?php echo $this->lang->line('name'); ?></label><small class="req"> *</small>
                        <input type="text" id="name" name="name" class="form-control">                        
                    </div>                    
                        <div class="form-group">
                        <label><?php echo $this->lang->line('code'); ?></label><small class="req"> *</small>
                        <input type="text" id="term_code" name="term_code" class="form-control">                
                    </div>         
                    <div class="form-group mb0">
                        <label><?php echo $this->lang->line('description'); ?></label>
                        <textarea type="text" id="description" name="description" cols="115" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer clearboth">
                    <button type="submit" class="btn btn-primary pull-right" data-loading-text="<?php echo $this->lang->line('submitting') ?>" value=""><?php echo $this->lang->line('save'); ?></button>
                </div> 
            </form>
        </div>
    </div>
</div>

<div id="addGroupModal" class="modal fade " role="dialog">
    <div class="modal-dialog modal-dialog2 modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close close_btn" data-dismiss="modal" >&times;</button>
                <h4 class="modal-title" id="modal-title"><?php echo $this->lang->line('add_term')?></h4>
            </div>
            <form role="form" id="add_group_form" method="post" enctype="multipart/form-data" action="">
                <div class="modal-body">
                    <input type="hidden" name="exam_group_id" id="exam_group_id" class="form-control" value="">
                    <div class="form-group">
                        <label><?php echo $this->lang->line('term'); ?></label><small class="req"> *</small>
                        <select name="group_term" id="group_term" class="form-control w-100">
                            <?php foreach ($exam_terms as $terms) { ?>
                            <option value="<?= $terms->id; ?>"><?= $terms->name.' - '.$terms->term_code; ?></option>
                            <?php } ?>
                        </select>
                    </div> 
                    <div class="form-group">
                        <label><?php echo $this->lang->line('name'); ?></label><small class="req"> *</small>
                        <input type="text" id="group_title" name="group_title" class="form-control">                        
                    </div>                    
                        <div class="form-group">
                        <label><?php echo $this->lang->line('code'); ?></label><small class="req"> *</small>
                        <input type="text" id="group_code" name="group_code" class="form-control">                
                    </div>         
                    <div class="form-group mb0">
                        <label><?php echo $this->lang->line('description'); ?></label>
                        <textarea type="text" id="group_description" name="group_description" cols="115" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer clearboth">
                    <button type="submit" class="btn btn-primary pull-right" data-loading-text="<?php echo $this->lang->line('submitting') ?>" value=""><?php echo $this->lang->line('save'); ?></button>
                </div> 
            </form>
        </div>
    </div>
</div>

<script>
    ( function ( $ ) {
    'use strict';
    $(document).ready(function () {

        initDatatable('term-list','cbseexam/term/gettermlist',[],[],100);
        modal_click_disabled('addTermModal');
    });
} ( jQuery ) )
</script>
<script type="text/javascript">

    $('#addTermModal').on('hidden.bs.modal', function () {
          $('#modal-title',$('#addTermModal')).html('<?php echo $this->lang->line('add_term')?>');
          reset_form('#add_form');

    });
    
    $('#addGroupModal').on('hidden.bs.modal', function () {
          $('#modal-title',$('#addGroupModal')).html('Add Term Group');
          reset_form('#add_group_form');

    });

    $(document).on('click','.edit_term',function(){
        var $this = $(this);
        var recordid = $this.data('recordid');
        $('input[name=id]',$('#addTermModal')).val(recordid);
        $.ajax({
            type: 'POST',
            url: baseurl + "cbseexam/term/getdata",
            data: {'id': recordid},
            dataType: 'JSON',
            beforeSend: function () {
                $('#modal-title',$('#addTermModal')).html('<?php echo $this->lang->line('edit_term')?>');
                $this.button('loading');
            },
            success: function (data) {
                    $('#id').val(data.result.id);
                    $('#name').val(data.result.name);
                    $('#term_code').val(data.result.term_code);
                    $('#description').val(data.result.description);
                    $('#addTermModal').modal('show');
                    $this.button('reset');
            },
            error: function (xhr) { // if error occured
                alert("Error occured.please try again");
                $this.button('reset');
            },
            complete: function () {
                $this.button('reset');
            }
        });
    });
    
    
    $(document).on('click','.edit_group',function(){
        var $this = $(this);
        var recordid = $this.data('recordid');
        $('input[name=id]',$('#addGroupModal')).val(recordid);
        $.ajax({
            type: 'POST',
            url: baseurl + "cbseexam/term/getgroupdata",
            data: {'id': recordid},
            dataType: 'JSON',
            beforeSend: function () {
                $('#modal-title',$('#addGroupModal')).html('<?php echo $this->lang->line('edit_term')?>');
                $this.button('loading');
            },
            success: function (data) {
                    $('#exam_group_id').val(data.result.exam_group_id);
                    $('#group_term').val(data.result.group_term);
                    $('#group_title').val(data.result.group_title);
                    $('#group_code').val(data.result.group_code);
                    $('#group_description').val(data.result.group_description);
                    $('#addGroupModal').modal('show');
                    $this.button('reset');
            },
            error: function (xhr) { // if error occured
                alert("Error occured.please try again");
                $this.button('reset');
            },
            complete: function () {
                $this.button('reset');
            }
        });
    });

(function ($){
    "use strict";
    
    $("#add_form").on('submit', (function (e) {
        e.preventDefault();

        var $this = $(this).find("button[type=submit]:focus");

        $.ajax({
            url: base_url+"cbseexam/term/add",
            type: "POST",
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $this.button('loading');
            },
            success: function (res)
            {

                if (res.status == "fail") {
                    var message = "";
                    $.each(res.error, function (index, value) {
                        message += value;
                    });
                    errorMsg(message);

                } else {

                    successMsg(res.message);
                    $('#addTermModal').modal('hide');
                     table.ajax.reload( null, false );

                }
            },
            error: function (xhr) { // if error occured
                alert("<?php echo $this->lang->line('error_occurred_please_try_again'); ?>");
                $this.button('reset');
            },
            complete: function () {
                $this.button('reset');
            }
        });
    }));
    
    $("#add_group_form").on('submit', (function (e) {
        e.preventDefault();

        var $this = $(this).find("button[type=submit]:focus");

        $.ajax({
            url: base_url+"cbseexam/term/add_group",
            type: "POST",
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $this.button('loading');
            },
            success: function (res)
            {

                if (res.status == "fail") {
                    var message = "";
                    $.each(res.error, function (index, value) {
                        message += value;
                    });
                    errorMsg(message);

                } else {

                    successMsg(res.message);
                    $('#addGroupModal').modal('hide');
                     table.ajax.reload( null, false );

                }
            },
            error: function (xhr) { // if error occured
                alert("<?php echo $this->lang->line('error_occurred_please_try_again'); ?>");
                $this.button('reset');
            },
            complete: function () {
                $this.button('reset');
            }
        });
    }));
    
})(jQuery);
</script>