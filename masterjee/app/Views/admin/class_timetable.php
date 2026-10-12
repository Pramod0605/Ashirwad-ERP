    <div class="mg-top-90">
    </div>
    
    <?php 
            $db         = db_connect();
            $class_id   = session('class_id');
            $section_id = session('section_id');
            $session_id = site_info()['active_session'];
            $staff_id   = session('userid');
            foreach ($teachers_timetable_info as $tt) { 
                
		    $days_timetable = $StaffModel->teachers_timetable_info_times_grouped($staff_id, $session_id, $tt->day);

?>
<div class="row pt-4">
            <div class="card card-primary" style="padding-left:0px !important; padding-right:0px !important; margin-left:0px !important; margin-right:0px !important">
                <div class="card-header">
                    <span class="float-left text-sm"><?=$tt->day; ?></span>
                    <span class="float-right text-sm text-right" style="float: right;">&nbsp;</span>
                    <br>
                    <a href="#" class="btn btn-secondary btn-lg disabled w-100" role="button" aria-disabled="true" style="text-align: left; padding:0; font-size:14px;border-radius: 0.2rem">&ensp;Time&ensp; &ensp; &ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Class</a>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div id="content">
                        <ul class="timeline">
                            <?php foreach ($days_timetable as $dtt) {
                            $p_timetable = $StaffModel->teachers_timetable_info_times_ungrouped($staff_id, $session_id, $tt->day, $dtt->start_time, $dtt->end_time);
                            ?>       
                            <li class="event" data-date="<?= $dtt->time_from ?>">
                                <p>
                                    <?= $dtt->time_from.' To '.$dtt->time_to ?><hr>
                                </p>
                                <?php foreach ($p_timetable as $ptt) { ?>
                                <p>
                                    <?= $ptt->name.'<hr>'.$ptt->class.' '.$ptt->section ?><hr>
                                    <a class="active" href="<?= base_url(); ?>admin/web/add_lesson_plan/<?= $ptt->subject_group_subject_id; ?>/<?= $ptt->tt_id; ?>"><i class="fa fa-plus-circle" aria-hidden="true"></i> Lesson Plan</a>
                                </p>
                                <hr>
                                <?php } ?>
                                <p>
                                    <?php if ($schSetting->attendence_type == 1) { ?>
                                    <a class="active btn btn-primary" href="<?= base_url(); ?>admin/staff/student_period_attendance/<?= $dtt->tt_id; ?>/<?= $dtt->subject_group_id; ?>">Attendance</a>
                                    <?php } ?>
                                </p>
                                <hr>
                            </li>
                             <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>


