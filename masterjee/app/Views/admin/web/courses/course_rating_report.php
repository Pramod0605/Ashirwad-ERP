
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
                        <th>Title</th>
                        <th>Class</th>
                        <th>Rating</th>
                        <th>Review</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i = 0;
                    foreach ($allCourses as $rating) { 
                    $i += 1;
                    ?>
                    <tr>
                        <td><?= $rating->title; ?></td>
                        <td><?= $rating->classname; ?></td>
                        <td><?= $rating->rating; ?></td>
                        <td><?= $rating->review; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            
        </div>
<script>
   $('table').dataTable({searching: true, paging: true, info: false, ordering: true,});
</script> 