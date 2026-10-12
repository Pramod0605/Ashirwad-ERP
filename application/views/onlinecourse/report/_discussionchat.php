<?php
if (!empty($discussions_chat)) {
    foreach ($discussions_chat as $chat_key => $dc) {
        
        if ($dc->student_id > 0) {
            $userInfo   = $this->studentcourse_model->student_info($dc->student_id);
            $sentBy     = $userInfo->firstname.' '.$userInfo->middlename.' '.$userInfo->lastname;
        } elseif ($dc->teacher_id > 0) {
            $userInfo   = $this->studentcourse_model->staff_info($dc->teacher_id);
            $sentBy     = $userInfo->employee_id.' '.$userInfo->name;
        } else {
            $userInfo   = $this->studentcourse_model->guest_info($dc->guest_id);
            $sentBy     = $userInfo->name;
        }
                                    
        if ($dc->teacher_id > 0 && $dc->teacher_id == $teacher_id) {
            $chat_type = 'sent';
            $style = 'text-align:right !important';
        } else {
            $chat_type = 'replies';
            $style = 'text-align:left !important';
        }
        $date_time = ($dc->teacher_id == $teacher_id) ? 'time_date' : 'time_date_send';
        ?>
            <li class="<?php echo $chat_type; ?>" style="<?= $style; ?>">
                <p>&nbsp;</p>
                <?php if ($chat_type == 'replies') { ?>
                <p><strong><?= $sentBy; ?></strong></p>
                <?php } ?>
                <p><i><?php echo $dc->discuss_content; ?></i></p>
                <span class="<?php echo $date_time; ?>" style="position: unset !important; <?= $style; ?>"> <?php echo $this->customlib->dateyyyymmddToDateTimeformat($dc->discuss_date.' '.$dc->discuss_time); ?></span>
            </li>
        <?php
    }
}
?>