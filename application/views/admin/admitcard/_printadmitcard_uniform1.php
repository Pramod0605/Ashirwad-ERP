<style type="text/css">
    @page {
        size: Letter;
        margin: 0;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: "Times New Roman", serif;
    }

    .sheet {
        width: 7.8in;
        height: 10.3in;
        margin: 0.35in auto;
        position: relative;
        box-sizing: border-box;
        page-break-after: always;
        page-break-inside: avoid;
    }

    .sheet:last-child {
        page-break-after: auto;
    }

    .sheet-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
    }

    .sheet-inner {
        position: relative;
        z-index: 2;
        width: 100%;
        height: 100%;
        border: 2px solid #000;
        padding: 0.35in 0.4in;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        gap: 0.2in;
        background: rgba(255, 255, 255, 0.94);
    }

    .admit-header {
        text-align: center;
        text-transform: uppercase;
    }

    .admit-header .heading {
        font-size: 14pt;
        font-weight: bold;
    }

    .admit-header .school-name {
        font-size: 18pt;
        font-weight: 700;
        margin-top: 4px;
    }

    .admit-header .exam-name {
        font-size: 13pt;
        font-weight: bold;
        margin-top: 8px;
        border-top: 1px solid #000;
        padding-top: 6px;
    }

    .logo-row {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 8px;
    }

    .logo-row img {
        max-width: 1.3in;
        max-height: 1.3in;
    }

    .student-info {
        display: flex;
        gap: 0.25in;
    }

    .student-details {
        flex: 1;
    }

    .student-photo {
        width: 1.6in;
        height: 2.1in;
        border: 1px solid #000;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fff;
    }

    .student-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .info-table,
    .schedule-table,
    .sign-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 11pt;
    }

    .info-table td {
        padding: 4px 0;
        vertical-align: top;
    }

    .info-table td.label {
        width: 32%;
        text-transform: uppercase;
    }

    .info-table td.value {
        font-weight: bold;
        text-transform: uppercase;
    }

    .schedule-table {
        table-layout: fixed;
        font-size: 10pt;
    }

    .schedule-table th,
    .schedule-table td {
        border: 1px solid #000;
        padding: 6px;
        text-align: center;
        text-transform: uppercase;
        height: 0.4in;
        white-space: nowrap;
    }

    .schedule-table td.subject-cell {
        text-align: left;
        white-space: normal;
    }

    .note-text {
        font-size: 10pt;
        text-transform: none;
    }

    .sign-table th {
        border: none;
        padding-top: 12px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .sign-table td {
        border: none;
        height: 0.7in;
        text-align: center;
    }

    .sign-image {
        max-width: 1.6in;
        max-height: 0.6in;
        display: inline-block;
    }
</style>
<?php
if (!empty($student_details)) {
    foreach ($student_details as $student_key => $student_value) {
?>
        <div class="sheet">
            <?php if ($admitcard->background_img != "") { ?>
                <img src="<?php echo $this->media_storage->getImageURL('uploads/admit_card/' . $admitcard->background_img); ?>" class="sheet-bg" alt="bg">
            <?php } ?>
            <div class="sheet-inner">
                <div class="logo-row">
                    <div>
                        <?php if ($admitcard->left_logo != "") { ?>
                            <img src="<?php echo $this->media_storage->getImageURL('uploads/admit_card/' . $admitcard->left_logo); ?>" alt="logo">
                        <?php } ?>
                    </div>
                    <div class="admit-header">
                        <?php if ($admitcard->heading != "") { ?>
                            <div class="heading"><?php echo $admitcard->heading; ?></div>
                        <?php } ?>
                        <?php if ($admitcard->school_name != "") { ?>
                            <div class="school-name"><?php echo $admitcard->school_name; ?></div>
                        <?php } ?>
                        <div class="exam-name">
                            <?php echo $admitcard->exam_name; ?><br>
                            ADMIT CARD
                        </div>
                    </div>
                    <div>
                        <?php if ($admitcard->right_logo != "") { ?>
                            <img src="<?php echo $this->media_storage->getImageURL('uploads/admit_card/' . $admitcard->right_logo); ?>" alt="logo">
                        <?php } ?>
                    </div>
                </div>

                <div class="student-info">
                    <div class="student-details">
                        <table class="info-table">
                            <?php if ($admitcard->is_roll_no) { ?>
                                <tr>
                                    <td class="label"><?php echo $this->lang->line('roll_number'); ?></td>
                                    <td class="value">
                                        <?php echo ($exam->use_exam_roll_no) ? $student_value->roll_no : $student_value->profile_roll_no; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            <?php if ($admitcard->is_admission_no) { ?>
                                <tr>
                                    <td class="label"><?php echo $this->lang->line('admission_no'); ?></td>
                                    <td class="value"><?php echo $student_value->admission_no; ?></td>
                                </tr>
                            <?php } ?>
                            <?php if ($admitcard->is_name) { ?>
                                <tr>
                                    <td class="label"><?php echo $this->lang->line('student_name'); ?></td>
                                    <td class="value"><?php echo $this->customlib->getFullName($student_value->firstname, $student_value->middlename, $student_value->lastname, $sch_setting->middlename, $sch_setting->lastname); ?></td>
                                </tr>
                            <?php } ?>
                            <?php if ($admitcard->is_father_name) { ?>
                                <tr>
                                    <td class="label"><?php echo $this->lang->line('father_name'); ?></td>
                                    <td class="value"><?php echo $student_value->father_name; ?></td>
                                </tr>
                            <?php } ?>
                            <?php if ($admitcard->is_mother_name) { ?>
                                <tr>
                                    <td class="label"><?php echo $this->lang->line('mother_name'); ?></td>
                                    <td class="value"><?php echo $student_value->mother_name; ?></td>
                                </tr>
                            <?php } ?>
                            <?php if ($admitcard->is_class || $admitcard->is_section) { ?>
                                <tr>
                                    <td class="label"><?php echo $this->lang->line('class'); ?></td>
                                    <td class="value">
                                        <?php
                                        if ($admitcard->is_class && $admitcard->is_section) {
                                            echo $student_value->class . " (" . $student_value->section . ")";
                                        } elseif ($admitcard->is_class) {
                                            echo $student_value->class;
                                        } else {
                                            echo $student_value->section;
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            <?php if ($admitcard->is_dob) { ?>
                                <tr>
                                    <td class="label"><?php echo $this->lang->line('d_o_b'); ?></td>
                                    <td class="value"><?php echo date($this->customlib->getSchoolDateFormat(), strtotime($student_value->dob)); ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <?php if ($admitcard->is_photo) {
                        $student_photo = '';
                        if (!empty($student_value->image)) {
                            $student_photo = $student_value->image;
                        } else {
                            $student_photo = (strtolower($student_value->gender) == 'female') ? 'uploads/student_images/default_female.jpg' : 'uploads/student_images/default_male.jpg';
                        }
                    ?>
                        <div class="student-photo">
                            <img src="<?php echo $this->media_storage->getImageURL($student_photo); ?>" alt="photo">
                        </div>
                    <?php } ?>
                </div>

                <div style="flex:1; display:flex; flex-direction:column; gap:0.1in;">
                    <table class="schedule-table">
                        <thead>
                            <tr>
                                <th style="width:8%;">SR.</th>
                                <th style="width:16%;"><?php echo $this->lang->line('date'); ?></th>
                                <th style="width:24%;"><?php echo $this->lang->line('time'); ?></th>
                                <th style="width:38%;"><?php echo $this->lang->line('subject'); ?></th>
                                <th style="width:14%; white-space: normal; line-height: 1.2; word-break: break-word;"><?php echo 'INVIGILATOR SIGN'; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $row = 0;
                            foreach ($exam_subjects as $subject_key => $subject_value) {
                                $row++;
                                $time_from  = $subject_value->time_from;
                                $duration   = $subject_value->duration;
                                $datetime   = new DateTime($time_from);
                                $interval   = new DateInterval('PT' . (int)$duration . 'M');
                                $datetime->add($interval);
                                $time_to    = $datetime->format('h:i A');
                                $time_from_fmt = date('h:i A', strtotime($time_from));
                            ?>
                                <tr>
                                    <td><?php echo $row; ?></td>
                                    <td><?php echo date('d/m/Y', strtotime($subject_value->date)); ?></td>
                                    <td><?php echo $time_from_fmt . ' - ' . $time_to; ?></td>
                                    <td class="subject-cell"><?php echo $subject_value->subject_name; ?></td>
                                    <td style="word-break: break-word;"></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php if ($admitcard->content_footer != "") { ?>
                        <div class="note-text"><?php echo htmlspecialchars_decode($admitcard->content_footer); ?></div>
                    <?php } ?>
                </div>

                <table class="sign-table">
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <?php if (!empty($admitcard->sign)) { ?>
                                <img src="<?php echo $this->media_storage->getImageURL('uploads/admit_card/' . $admitcard->sign); ?>" alt="principal sign" class="sign-image">
                            <?php } else { ?>
                                <img src="<?php echo base_url('uploads/signatures/Principal_sign.png'); ?>" alt="principal sign" class="sign-image">
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo $this->lang->line('exam_coordinator') ?: 'EXAM COORDINATOR'; ?></th>
                        <th><?php echo $this->lang->line('student') ?: 'STUDENT'; ?> <?php echo $this->lang->line('sign') ?: 'SIGN'; ?></th>
                        <th><?php echo ($this->lang->line('principal') ?: 'PRINCIPAL') . '\'S ' . ($this->lang->line('sign') ?: 'SIGN'); ?></th>
                    </tr>
                </table>
            </div>
        </div>
<?php
    }
}
?>

