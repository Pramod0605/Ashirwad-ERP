        <div class="row pt-4 mg-top-90">
        </div>
        
        <?php $uInfo = user_info(session('userid')); 
            $db = db_connect();
            if (empty($uInfo->image)) {
                $uImage = 'default_male.jpg';
            } else {
                $uImage = $uInfo->image;
            }
            
            $stfFaInfo = $db->query("SELECT * FROM face_authentication WHERE id = '".session('userid')."' AND belong_to = 'staff' ")->getRow();
            
            if (!empty($stuFaInfo->face_features)) {
                $titl = 'Update';
            } else {
                $titl = 'Register';
            } 
        ?>
    
        <div class="ba-navbar-user text-center">
            <div class="thumb">
                <img src="<?= site_info()['userImgPath']; ?><?= $uImage; ?>" alt="user" style="width:25%">
            </div>
            <div class="details">
                <h5><?= $uInfo->name.' '.$uInfo->surname; ?></h5>
                <p>ID: <?= $uInfo->employee_id; ?></p>
            </div>
            <hr>
            <a href="?id=<?= session('userid') ?>&belong_to=staff" data-belong_to="staff" data-user_id="<?= session('userid') ?>" class="btn btn-primary-outline action" style="border: 1px solid; border-color: #20c997"><?= $titl ?></a>
        </div>
        
        
        <?php 
        
        $date = date("Y-m-d");
        $db = db_connect();
        foreach ($all_student_info as $stu) {  
        
        $stuFaInfo = $db->query("SELECT * FROM face_authentication WHERE id = '".$stu->student_id."' AND belong_to = 'student' ")->getRow();
        
        if (!empty($stuFaInfo->face_features)) {
            $status = 'Update';
            $bColor = '#20c997';
        } else {
            $status = 'Pending';
            $bColor = '#ffc107';
        }
                  
        ?>
        
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    
                    <span class="float-left text-sm"><strong><?= $stu->admission_no.' - '.$stu->firstname.' '.$stu->lastname; ?></strong></span>
                    <hr>
                    <span class="float-left text-sm text-right" style="float: right;">
                        <a href="?id=<?= $stu->student_id ?>&belong_to=student" data-belong_to="student" data-user_id="<?= $stu->student_id ?>" class="btn btn-primary-outline action" style="border: 1px solid; border-color: <?= $bColor; ?>"><?= $status ?></a>
                    </span>
                </div>
            </div>
        </div>
        
        <?php } ?>
        
      


      <div class="alert alert-primary alert-dismissible fade" role="alert" id="success_alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <span id="success_message"></span>
      </div>

      <div class="alert alert-danger alert-dismissible fade" role="alert" id="error_alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <span id="error_message"></span>
      </div>
