        <div class="row pt-4 mg-top-90">
        </div>
           
        <?php 
        
        $date = date("Y-m-d");
        $db = db_connect();
        foreach ($all_routes_info as $route) {  ?>
        
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-primary text-center">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;<?= $route->route_title; ?>
                    <hr>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        
        <?php
        
        $all_students = $StaffModel->all_student_info_route($route->id, site_info()['active_session']);
        
        foreach ($all_students as $stu) {
                  
        ?>
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <input type="hidden" name="student_id[]" class="form-control" value="<?= $stu->student_id; ?>"><?= $stu->admission_no.' - '.$stu->firstname.' '.$stu->lastname; ?><hr>
                    <?= $stu->mobileno; ?>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
        