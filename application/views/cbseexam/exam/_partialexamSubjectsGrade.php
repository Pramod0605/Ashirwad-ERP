    <div class="row pb10">
        <div class="col-lg-2 col-md-3 col-sm-12">
            <p class="examinfo"><span><?php echo $this->lang->line('exam'); ?></span><?php echo $examDetail['name']; ?></p>
        </div>
        <div class="col-lg-10 col-md-9 col-sm-12">
            <p class="examinfo"><span><?php echo $this->lang->line('class_section'); ?></span><?php echo $examDetail['class_sections']; ?></p>
        </div>
    </div>
    <div class="divider2"></div>
    <form action="<?php echo site_url('cbseexam/exam/addexamsubjectGrade') ?>" id="examGradeForm" method="POST" class="ssaddSubject ptt10 autoscroll">
    <input type="hidden" name="exam_id" value="<?php echo $exam_id; ?>">
    <div class="">
        <table class="table table-bordered" id="item_table">
            <thead>
                <tr>
                    <th><?php echo $this->lang->line('subject'); ?><small class="req"> *</small></th>
                    <th><?php echo $this->lang->line('grade'); ?><small class="req"> *</small></th>
                </tr>
            </thead>
            <?php
            if (!empty($exam_subjects)) {
                $count = 1;
                foreach ($exam_subjects as $exam_subject_value) {
                    $exam_timetable_id = $exam_subject_value->id;
                    ?>
                    <input type="hidden" name="prev_row[<?php echo $count; ?>]" value="<?php echo $exam_timetable_id; ?>">
                    <tr>
                        <td>
                            <select class="form-control item_unit tddm200" name="subject_id[<?php echo $count; ?>]">
                                <option value=""><?php echo $this->lang->line('select') ?></option>
                                <?php
                                if (!empty($batch_subjects)) {
                                    foreach ($batch_subjects as $subject_value) {
                                ?>
                                        <option value="<?php echo $subject_value['id'] ?>" <?php echo set_select('subject_id[' . $count . ']', $subject_value['id'], ($exam_subject_value->subject_id == $subject_value['id']) ? true : false); ?>>
                                            <?php
                                            $sub_code = ($subject_value['code'] != "") ? " (" . $subject_value['code'] . ")" : "";
                                            echo $subject_value['name'] . $sub_code; ?>
                                        </option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Grade</th>
                                        <th>Min Percentage</th>
                                        <th>Max Percentage</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <?php 
                                $grades = array("A1", "A2", "B1", "B2", "C1", "C2", "D1", "D2", "E"); 
                                foreach ($grades as $index => $grade) { 
                                    $chkexstng = $this->db->query("SELECT * FROM `cbse_exam_timetable_grade` WHERE cbse_exam_timetable_id = '".$exam_timetable_id."' AND cbse_exam_id = '".$exam_id."' AND subject_id = '".$exam_subject_value->subject_id."' AND grade_value = '".$grade."'  ")->row();
                                
                                ?>
                                    <tr>
                                        <td>
                                            <input type="hidden" name="grade[<?php echo $count; ?>][<?php echo $index; ?>][exam_timetable_id]" value="<?php echo $exam_timetable_id; ?>">
                                            <input type="hidden" name="grade[<?php echo $count; ?>][<?php echo $index; ?>][exam_id]" value="<?php echo $exam_id; ?>">
                                            <input type="hidden" name="grade[<?php echo $count; ?>][<?php echo $index; ?>][subject_id]" value="<?php echo $exam_subject_value->subject_id; ?>">
                                            <input type="text" name="grade[<?php echo $count; ?>][<?php echo $index; ?>][grade_value]" class="form-control" value="<?php echo $grade; ?>" readonly>
                                        </td>
                                        <td><input type="number" name="grade[<?php echo $count; ?>][<?php echo $index; ?>][grade_min_per]" class="form-control" value="<?= $chkexstng->grade_min_per; ?>"></td>
                                        <td><input type="number" name="grade[<?php echo $count; ?>][<?php echo $index; ?>][grade_max_per]" class="form-control" value="<?= $chkexstng->grade_max_per; ?>"></td>
                                        <td><input type="text" name="grade[<?php echo $count; ?>][<?php echo $index; ?>][grade_desc]" class="form-control" value="<?= $chkexstng->grade_desc; ?>"></td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </td>
                    </tr>
                    <?php
                    $count++;
                }
            }
            ?>
        </table>
    </div>
    <div class="modal-footer clearboth mx-nt-lr-15 pb0">
        <?php
        if ($this->rbac->hasPrivilege('cbse_exam_subjects', 'can_edit')) {
        ?>
            <button type="submit" class="btn btn-primary pull-right" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Saving..."><?php echo $this->lang->line('save') ?></button>
        <?php
        }
        ?>
    </div>
</form>
<script>
$(document).ready(function () {
    $("#examGradeForm").on("submit", function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: "<?php echo site_url('cbseexam/exam/addexamsubjectGrade'); ?>",
            type: "POST",
            data: formData,
            dataType: "json",
            beforeSend: function () {
                $("#submitExamGrade").prop("disabled", true).html('<i class="fa fa-spinner fa-spin"></i> Saving...');
            },
            success: function (response) {
                if (response.status == "success") {
                    alert("Grades saved successfully!");
                    location.reload();
                } else {
                    alert("Error saving grades. Please try again.");
                }
            },
            error: function () {
                alert("An unexpected error occurred.");
            },
            complete: function () {
                $("#submitExamGrade").prop("disabled", false).html("Save");
            }
        });
    });
});
</script>