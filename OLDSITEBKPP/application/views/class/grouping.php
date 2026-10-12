<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-mortar-board"></i> <?php echo $this->lang->line('academics'); ?>     </h1>
    </section>
    
    <section class="content">
        <?php if ($this->rbac->hasPrivilege('class', 'can_add')) { ?>  
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Grouping</h3>
            </div>
            <form id="form1" action="<?php echo site_url('classes/saveGrouping'); ?>" method="post" accept-charset="utf-8">
                <div class="box-body">
                    <div class="col-6 col-sm-3 col-md-3">
                        <label>Class</label>
                        <select class="form-control" name="class_id" id="class_id">
                            <option value="">Select....</option>
                            <?php foreach ($classlist as $clas) { ?>
                            <option value="<?= $clas['id']; ?>"><?= $clas['class']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="col-6 col-sm-3 col-md-3">
                        <label>Section</label>
                        <select class="form-control" name="section_id" id="section_id">
                            <option value="">Select....</option>
                        </select>
                    </div>
                    
                    <div class="col-6 col-sm-3 col-md-3">
                        <label>Subject Group</label>
                        <select class="form-control" name="subject_group_id" id="subject_group_id">
                            <option value="">Select....</option>
                        </select>
                    </div>
                    
                    <div class="col-6 col-sm-3 col-md-3">
                        <label>Subject</label>
                        <select class="form-control" name="subject_id" id="subject_id">
                            <option value="">Select....</option>
                        </select>
                    </div>
                    
                    
                     <div class="col-12">
                        <label style="padding:10px; margin:10px; text-align:center !important">Group with</label>
                    </div>
                    
                    
                    
<div id="dynamic-fields">
    <div class="entry">
        <div class="col-6 col-sm-3 col-md-3">
            <label>Class</label>
            <select class="form-control class_id" name="g_class_id[]">
                <option value="">Select....</option>
                <?php foreach ($classlist as $clas) { ?>
                <option value="<?= $clas['id']; ?>"><?= $clas['class']; ?></option>
                <?php } ?>
            </select>
        </div>
        
        <div class="col-6 col-sm-3 col-md-3">
            <label>Section</label>
            <select class="form-control section_id" name="g_section_id[]">
                <option value="">Select....</option>
            </select>
        </div>
        
        <div class="col-6 col-sm-3 col-md-3">
            <label>Subject Group</label>
            <select class="form-control subject_group_id" name="g_subject_group_id[]">
                <option value="">Select....</option>
            </select>
        </div>
        
        <div class="col-6 col-sm-3 col-md-3">
            <label>Subject</label>
            <select class="form-control subject_id" name="g_subject_id[]">
                <option value="">Select....</option>
            </select>
        </div>
    </div>
</div>

<div class="col-12">
    <button type="button" id="add-more" class="btn btn-primary" style="padding:10px; margin:10px;">Add More</button>
</div>


                    
                    
                    
                    <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right"><?php echo $this->lang->line('save'); ?></button>
                            </div>
                            
                </div>
            </form>
        </div>
        <?php } ?>
        
        
        
        
        
        
        <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Group List</h3>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive mailbox-messages overflow-visible">
                            <div class="download_label">Group List</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Subject Group</th>
                                        <th>Subject</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $groupList = $this->class_model->getGroupList(); 
                                    foreach ($groupList as $group) {
                                        $groupClassList = $this->class_model->getGroupDetailsList($group['group_id']); 
                                        echo '<tr>';
                                        echo '<td colspan="6" style="text-align:left !important">' . htmlspecialchars($group['group_id']) . '</td>';
                                        echo '</tr>';
                                        foreach ($groupClassList as $groupClass) {
                                            echo '<tr>';
                                            echo '<td></td>';
                                            echo '<td>' . htmlspecialchars($groupClass['class']) . '</td>';
                                            echo '<td>' . htmlspecialchars($groupClass['section']) . '</td>';
                                            echo '<td>' . htmlspecialchars($groupClass['grp_name']) . '</td>';
                                            echo '<td>' . htmlspecialchars($groupClass['sub_name']) . '</td>';
                                            echo '<td>
                                                    <button class="btn btn-danger btn-xs" onclick="deleteGroup(' . htmlspecialchars($group['cg_id']) . ')">Delete</button>
                                                </td>';
                                            echo '</tr>';
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
            </div>
        
        
        
        
        
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#class_id').change(function() {
        var classId = $(this).val();
        
        if (classId) {
            $.ajax({
                url: '<?php echo base_url("sections/getByClass"); ?>', // Adjust the URL according to your controller
                type: 'GET',
                data: { class_id: classId },
                dataType: 'json',
                success: function(data) {
                    $('#section_id').empty(); // Clear the current options
                    $('#section_id').append('<option value="">Select....</option>'); // Add default option

                    $.each(data, function(index, section) {
                        $('#section_id').append('<option value="' + section.section_id + '" data-secid="' + section.id + '">' + section.section + '</option>');
                    });
                },
                error: function() {
                    alert('Error fetching sections');
                }
            });
        } else {
            $('#section_id').empty().append('<option value="">Select....</option>'); // Clear options if no class is selected
        }
    });
    
    $('#section_id').change(function() {
        var selectedOption  = $(this).find('option:selected');
        var sectionSecId    = selectedOption.data('secid');
        
        if (sectionSecId) {
            $.ajax({
                url: '<?php echo base_url("classes/getSubjectGroupBySection"); ?>', // Adjust the URL according to your controller
                type: 'GET',
                data: { section_id: sectionSecId },
                dataType: 'json',
                success: function(data) {
                    $('#subject_group_id').empty(); // Clear the current options
                    $('#subject_group_id').append('<option value="">Select....</option>'); // Add default option

                    $.each(data, function(index, subjectGroup) {
                        $('#subject_group_id').append('<option value="' + subjectGroup.subject_group_id + '" data-sgid="' + subjectGroup.sgcs_id + '">' + subjectGroup.name + '</option>');
                    });
                },
                error: function() {
                    alert('Error fetching sections');
                }
            });
        } else {
            $('#subject_group_id').empty().append('<option value="">Select....</option>'); // Clear options if no class is selected
        }
    });
    
    $('#subject_group_id').change(function() {
        var subjectGroupId = $(this).val();
        
        if (subjectGroupId) {
            $.ajax({
                url: '<?php echo base_url("classes/getSubjectBysubjectGroupId"); ?>', // Adjust the URL according to your controller
                type: 'GET',
                data: { subject_group_id: subjectGroupId },
                dataType: 'json',
                success: function(data) {
                    $('#subject_id').empty(); // Clear the current options
                    $('#subject_id').append('<option value="">Select....</option>'); // Add default option

                    $.each(data, function(index, subjects) {
                        $('#subject_id').append('<option value="' + subjects.subject_id + '" ">' + subjects.name + '</option>');
                    });
                },
                error: function() {
                    alert('Error fetching sections');
                }
            });
        } else {
            $('#subject_id').empty().append('<option value="">Select....</option>'); // Clear options if no class is selected
        }
    });

    $('#dynamic-fields').on('change', '.class_id', function() {
        var classId = $(this).val();
        var sectionDropdown = $(this).closest('.entry').find('.section_id');
        
        if (classId) {
            $.ajax({
                url: '<?php echo base_url("sections/getByClass"); ?>',
                type: 'GET',
                data: { class_id: classId },
                dataType: 'json',
                success: function(data) {
                    sectionDropdown.empty().append('<option value="">Select....</option>');
                    $.each(data, function(index, section) {
                        sectionDropdown.append('<option value="' + section.section_id + '" data-secid="' + section.id + '">' + section.section + '</option>');
                    });
                },
                error: function() {
                    alert('Error fetching sections');
                }
            });
        } else {
            sectionDropdown.empty().append('<option value="">Select....</option>');
        }
    });

    $('#dynamic-fields').on('change', '.section_id', function() {
        var sectionSecId = $(this).find('option:selected').data('secid');
        var subjectGroupDropdown = $(this).closest('.entry').find('.subject_group_id');
        
        if (sectionSecId) {
            $.ajax({
                url: '<?php echo base_url("classes/getSubjectGroupBySection"); ?>',
                type: 'GET',
                data: { section_id: sectionSecId },
                dataType: 'json',
                success: function(data) {
                    subjectGroupDropdown.empty().append('<option value="">Select....</option>');
                    $.each(data, function(index, subjectGroup) {
                        subjectGroupDropdown.append('<option value="' + subjectGroup.subject_group_id + '" data-sgid="' + subjectGroup.sgcs_id + '">' + subjectGroup.name + '</option>');
                    });
                },
                error: function() {
                    alert('Error fetching subject groups');
                }
            });
        } else {
            subjectGroupDropdown.empty().append('<option value="">Select....</option>');
        }
    });

    $('#dynamic-fields').on('change', '.subject_group_id', function() {
        var subjectGroupId = $(this).val();
        var subjectDropdown = $(this).closest('.entry').find('.subject_id');
        
        if (subjectGroupId) {
            $.ajax({
                url: '<?php echo base_url("classes/getSubjectBysubjectGroupId"); ?>',
                type: 'GET',
                data: { subject_group_id: subjectGroupId },
                dataType: 'json',
                success: function(data) {
                    subjectDropdown.empty().append('<option value="">Select....</option>');
                    $.each(data, function(index, subjects) {
                        subjectDropdown.append('<option value="' + subjects.subject_id + '">' + subjects.name + '</option>');
                    });
                },
                error: function() {
                    alert('Error fetching subjects');
                }
            });
        } else {
            subjectDropdown.empty().append('<option value="">Select....</option>');
        }
    });

    $('#add-more').click(function() {
        var newEntry = $('.entry:first').clone(); // Clone the first entry
        newEntry.find('select').val(''); // Reset all selects in the new entry
        newEntry.find('option').remove(); // Clear existing options in the new entry
        
        newEntry.find('.class_id').empty().append('<option value="">Select....</option>'); // Keep the class options
        <?php foreach ($classlist as $clas) { ?>
        newEntry.find('.class_id').append('<option value="<?= $clas['id']; ?>"><?= $clas['class']; ?></option>'); // Add class options
        <?php } ?>

        $('#dynamic-fields').append(newEntry); // Append the new entry to the container
    });
});

$('#form1').submit(function(e) {
    e.preventDefault();
    
    var groupedData = {
        classes: [],
        sections: [],
        subject_groups: [],
        subjects: [],
        class_sections: [] 
    };

    var mainClassId = $('#class_id').val();
    var mainSectionId = $('#section_id').val();
    var mainSubjectGroupId = $('#subject_group_id').val();
    var mainSubjectId = $('#subject_id').val();
    var mainSectionSecId = $('#section_id option:selected').data('secid');
    
    groupedData.classes.push(mainClassId);
    groupedData.sections.push(mainSectionId);
    groupedData.class_sections.push(mainSectionSecId);
    groupedData.subject_groups.push(mainSubjectGroupId);
    groupedData.subjects.push(mainSubjectId);
    
    $('#dynamic-fields .entry').each(function() {
        var classId = $(this).find('.class_id').val();
        var sectionId = $(this).find('.section_id').val();
        var subjectGroupId = $(this).find('.subject_group_id').val();
        var subjectId = $(this).find('.subject_id').val();
        var sectionSecId = $(this).find('.section_id option:selected').data('secid');
        
        groupedData.classes.push(classId);
        groupedData.sections.push(sectionId);
        groupedData.subject_groups.push(subjectGroupId);
        groupedData.subjects.push(subjectId);
        groupedData.class_sections.push(sectionSecId);
        
    });
    if (groupedData.classes.length || groupedData.class_sections.length || groupedData.subject_groups.length || groupedData.subjects.length) {
    $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: { data: JSON.stringify(groupedData) },
        dataType: 'json',
        success: function(response) {
            alert('Data saved successfully!');
        },
        error: function() {
            alert('Error saving data.');
        }
    });
    }
});

function deleteGroup(id) {
    if (confirm('Are you sure you want to delete this group?')) {
        window.location.href = '<?= base_url(); ?>/classes/deleteGroup/' + id; 
    }
}

</script>