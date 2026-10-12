        <div class="row pt-4 mg-top-90">
        </div>
        <hr>
        
        <?php 
        $db         = db_connect();
        foreach ($teachers_class as $tc) { 
            $class_sections  = $StaffModel->teachers_timetable_info_grouped_section(site_info()['active_session'], session('userid'), $tc->class_id);
        ?>
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    
                    <span class="float-left text-sm"><strong><?= $tc->class; ?></strong></span><hr>
                    <?php foreach  ($class_sections as $sec) { 
                    $section_subject = $StaffModel->teachers_timetable_info_grouped_subject(site_info()['active_session'], session('userid'), $tc->class_id, $sec->section_id);
                    
                    $cs = $db->query("SELECT id AS Id FROM `class_sections` WHERE class_id  = '".$tc->class_id."' AND section_id = '".$sec->section_id."'  ")->getRow();
                    
                    ?>
                    <span class="float-left text-sm"><strong><?= $sec->section; ?></strong</span>
                    <hr>
                    <?php foreach  ($section_subject as $sub) { 
                        $subject_lessons = $StaffModel->subjects_lesson_info(site_info()['active_session'], $sub->subject_group_subject_id, $cs->Id);
                    ?>
                    <span class="float-left text-sm text-left" style="padding-left: 40%;"><?= $sub->name; ?></span><br>
                    <ul>
                    <?php foreach ($subject_lessons as $lesson) { 
                        $lesson_topic = $StaffModel->lesson_topic_info(site_info()['active_session'], $lesson->id);
                    ?>
                        <li class="float-right text-sm text-left" style="float: right !important;"><?= $lesson->name; ?>
                            <ul>
                            <?php foreach ($lesson_topic as $tp) { ?>
                                <li class="float-right text-sm text-left" style="float: right !important;"><?= $tp->name; ?>
                            <?php } ?>
                            </ul>
                        </li>
                    <?php } ?>
                    </ul>
                    <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        
        <?php } ?>