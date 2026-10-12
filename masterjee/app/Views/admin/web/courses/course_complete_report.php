<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
        
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/course_trending_report" class="btn btn-sm w-100 category" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Trending</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/course_rating_report" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Rating</a>
            </div>
    </div>
    <br>
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/web/course_student_report" class="btn btn-sm w-100 category" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Students</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/web/course_complete_report" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Complete</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/web/online_course" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>All Courses</a>
            </div>
    </div>
    <div class="row pt-4" id="rating" style="padding-left:25px; padding-right:25px">
    <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Course</th>
                        <th>Progress</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i  = 0;
                    $db = db_connect();
                    foreach ($allCourses as $rating) { 
                    $i += 1;
                    
                    $csInfo     = $StaffModel->all_courses_section_info($rating->ocid);
                    $x          = 0;
                    $y          = 0;
                    foreach ($csInfo as $cs) {
                        $slInfo = $db->query("SELECT COUNT(id) as tl FROM online_course_lesson WHERE course_section_id = '".$cs->id."' ")->getRow();
                        $x      += $slInfo->tl;
                        
                        $sqInfo = $db->query("SELECT COUNT(id) as tq FROM online_course_quiz WHERE course_section_id = '".$cs->id."' ")->getRow();
                        $y      += $sqInfo->tq;
                    }
                    $total_lq   = $x + $y;
                    $scpInfo    = $db->query("SELECT COUNT(id) as cp FROM course_progress WHERE course_id = '".$rating->ocid."' AND student_id = '".$rating->studentid."' ")->getRow();
                    if (!empty($total_lq) && !empty($scpInfo->cp)) {
                        $progress   = ($scpInfo->cp / $total_lq) * 100;
                    } else {
                        $progress   = 0;
                    }
                    ?>
                    <tr>
                        <td><?= $rating->admission_no.' '.$rating->firstname; ?></td>
                        <td><?= $rating->title; ?></td>
                        <td><?= $progress; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
    </table>

            
        </div>

<script>
   $('table').dataTable({searching: true, paging: true, info: false, ordering: true,});
</script> 