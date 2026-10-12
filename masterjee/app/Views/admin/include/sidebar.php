 
<?php $uInfo = user_info(session('userid')); 
    
    if (empty($uInfo->image)) {
        $uImage = 'default_male.jpg';
    } else {
        $uImage = $uInfo->image;
    }
    
    $uclsInfo = class_info(session('class_id')); 
    $usecInfo = section_info(session('section_id')); 
    ?>
<div class="ba-navbar">
        <div class="ba-navbar-user text-center">
            <div class="menu-close">
                <i class="la la-times"></i>
            </div>
            <div class="thumb">
                <img src="<?= site_info()['userImgPath']; ?><?= $uImage; ?>" alt="user" style="width:50%">
            </div>
            <div class="details">
                <h5><?= $uInfo->name.' '.$uInfo->surname; ?></h5>
                <p>ID: <?= $uInfo->employee_id; ?></p>
                <?php if (!empty($uclsInfo)) { ?>
                <p>Class: <?= $uclsInfo['class']; ?> | Section: <?= $usecInfo->section; ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="ba-main-menu">
            <ul>
                <?php if (!session('isLeadHandler')) { ?>
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <?php if (session('isSectionIn') == true || session('isAdmin') == true) { ?>
                    <li><a href="<?= base_url(); ?>admin/staff/student_attendance">Attendance</a></li>
                    <?php } ?>
                    <li><a href="<?= base_url(); ?>admin/staff/student_dues">Dues Report</a></li>
                    <li><a href="<?= base_url(); ?>admin/staff/class_timetable">Timetable</a></li>
                    <?php if (session('isSectionIn') == true || session('isAdmin') == true || session('isTechr') == true) { ?>
                    <li><a href="<?= base_url(); ?>admin/staff/approve_leave">Approve Leave</a></li>
                    <?php } ?>
                    <li><a href="<?= base_url(); ?>admin/staff/homework">Homework</a></li>
                    <li><a href="<?= base_url(); ?>admin/staff/assessment">Assesment</a></li>
                    <li><a href="<?= base_url(); ?>admin/staff/students_progress">Student Progress</a></li>
                    <li><a href="<?= base_url(); ?>admin/staff/ptm">PTM</a></li>
                    <li><a href="<?= base_url(); ?>admin/staff/leads">Leads</a></li>
                    <li><a class="mt-4" href="<?= base_url(); ?>login/logout">Sign out</a></li>
                <?php } else { ?>
                    <li><a href="<?= base_url(); ?>admin/staff/leads">Home</a></li>
                    <li><a href="<?= base_url(); ?>admin/staff/add_lead">Add Leads</a></li>
                    <li><a href="<?= base_url(); ?>admin/staff/followups">Followup</a></li>
                    <li><a class="mt-4" href="<?= base_url(); ?>login/logout">Sign out</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>