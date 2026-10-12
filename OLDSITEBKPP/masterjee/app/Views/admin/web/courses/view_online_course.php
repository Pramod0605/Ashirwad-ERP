

    <div class="balance-area mg-top-90"></div>
        
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/online_course" class="btn btn-sm w-100 course" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Courses</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/online_course_reports" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Reports</a>
            </div>
    </div>
        
        <div class="row pt-4" id="cours" style="padding-left:25px; padding-right:25px">
            <table class="table">
                <tbody>
                    <tr style="border-bottom:hidden;">
                        <td colspan="6" style="width:100%"><img src="<?= site_info()['siteUrl'].'uploads/course/course_thumbnail/'.$courseInfo->course_thumbnail; ?>" style="width:100%;"></td>
                    </tr>
                    <tr style="border-top:hidden;border-bottom:hidden;">
                        <td colspan="3" style="width:30%; text-align:left">Title</td>
                        <td colspan="3" style="width:70%; text-align:left"><strong><?= $courseInfo->title; ?></strong></td>
                    </tr>
                    <tr style="border-top:hidden;border-bottom:hidden;">
                        <td colspan="3" style="width:30%; text-align:left">Teacher</td>
                        <td colspan="3" style="width:70%; text-align:left"><strong><?= $courseInfo->employee_id.' '.$courseInfo->name; ?></strong></td>
                    </tr>
                    <tr style="border-top:hidden;border-bottom:hidden;">
                        <td colspan="3" style="width:30%; text-align:left">Class</td>
                        <td colspan="3" style="width:70%; text-align:left"><strong><?= $courseInfo->classname; ?></strong></td>
                    </tr>
                    <tr style="border-top:hidden;border-bottom:hidden;">
                        <td colspan="3" style="width:30%; text-align:left">Section</td>
                        <td colspan="3" style="width:70%; text-align:left">
                            <?php foreach ($classSections as $cs) { ?>
                            <strong><?= $cs->section; ?>,</strong>
                            <?php } ?>
                        </td>
                    </tr>
                    
                    <tr style="border-top:hidden;border-bottom:hidden;">
                        <td colspan="6" style="width:100%">Description : <br><br><?= $courseInfo->description; ?></td>
                    </tr>
                    <?php 
                    $i = 0;
                    foreach ($sections as $section) { 
                    $i += 1;
                    $allLessons = $StaffModel->online_course_lesson($section->id);
                    ?>
                    <tr style="border-top:hidden;border-bottom:hidden;">
                        <td colspan="6" style="width:100%; text-align:left"><strong>Section <?= $i; ?> : <?= $section->section_title; ?></strong></td>
                    </tr>
                    <?php 
                    $j = 0;
                    foreach ($allLessons as $lesson) { 
                    $j += 1;
                    ?>
                    <tr style="border-top:hidden;border-bottom:hidden;">
                        <td colspan="6" style="width:100%; text-align:left"><strong>Lesson <?= $j; ?> : <?= $lesson->lesson_title; ?></strong></td>
                    </tr>
                    <tr>
                        <?php if ($lesson->lesson_type == 'video' && $lesson->video_provider == 'youtube') { ?>
                            <td colspan="6" style="width:100%; text-align:left"><iframe width="100%" src="<?= $lesson->video_url; ?>"></iframe></td>
                        <?php } ?>
                        <?php if ($lesson->lesson_type == 'video' && $lesson->video_provider != 'youtube') { ?>
                            <td colspan="6" style="width:100%; text-align:left"><video width="100%" controls><source src="<?= $lesson->video_url; ?>" type="video/mp4"></video></td>
                        <?php } ?>
                        <?php if ($lesson->lesson_type != 'video') { ?>
                            <td colspan="6" style="width:100%; text-align:left"><a href="<?= site_info()['siteUrl'].'uploads/course_content/'.$lesson->course_section_id.'/'.$lesson->id; ?>"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download Content</a></td>
                        <?php } ?>
                    </tr>
                    <tr style="border-top:hidden;border-bottom:hidden;">
                        <td colspan="6" style="width:100%">Summary : <br><br><?= $lesson->summary; ?></td>
                    </tr>
                    <?php } } ?>
                </tbody>
            </table>

            
        </div>
    <div class="alert alert-primary alert-dismissible fade" role="alert" id="success_alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <span id="success_message"></span>
    </div>

    <div class="alert alert-danger alert-dismissible fade" role="alert" id="error_alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <span id="error_message"></span>
    </div>    

        