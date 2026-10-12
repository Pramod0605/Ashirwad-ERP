
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <div class="balance-area mg-top-90"></div>
        
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/student_behaviour" class="btn btn-sm w-100 category" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Behaviour</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/student_behaviour_incidents" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Incident Report</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/student_behaviour_ranks" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Behaviour Rank</a>
            </div>
        </div>
    
    <div class="row pt-4" id="rating" style="padding-left:25px; padding-right:25px">
            <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Incidents</th>
                        <th>Points</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $db = db_connect();
                    $i  = 0;
                    foreach ($all_student_info as $stu) { 
                    $i  += 1;
                    
                    $siInfo = $db->query("SELECT COUNT(id) as si FROM student_incidents WHERE session_id = '".site_info()['active_session']."' AND student_id = '".$stu->student_id."'  ")->getRow();
                    $siInfo = $db->query("SELECT COUNT(id) as si FROM student_incidents WHERE session_id = '".site_info()['active_session']."' AND student_id = '".$stu->student_id."'  ")->getRow();
                    
                    $points = $StaffModel->student_incidents_info(site_info()['active_session'], $stu->student_id);
                    $ip     = 0;
                    foreach ($points as $point) {
                        $ip += $point->point;
                    }
                    ?>
                    <tr>
                        <td><?= $stu->admission_no.' '.$stu->firstname; ?></td>
                        <td><?= $siInfo->si; ?></td>
                        <td><?= $ip; ?></td>
                        <td> <a href="<?= base_url(); ?>admin/staff/student_behaviour_view/<?= $stu->student_id; ?>"><i class="fa fa-eye" aria-hidden="true"></i><br></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            
        </div>
<script>
   $('table').dataTable({searching: true, paging: true, info: false, ordering: true,});
</script> 