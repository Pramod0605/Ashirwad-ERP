
<div class="ba-navbar">
        <div class="ba-navbar-user text-center">
            <div class="menu-close">
                <i class="la la-times"></i>
            </div>
            <div class="thumb">
                <img src="<?= site_info()['vehImgPath']; ?><?= session('vehicle_photo'); ?>" alt="user" style="width:50%">
            </div>
            <div class="details">
                <h5><?= session('driver_name'); ?></h5>
                <p>VEHICLE: <?= session('vehicle_no'); ?></p>
            </div>
        </div>
        <div class="ba-main-menu">
            <ul>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li><a href="<?= base_url(); ?>admin/staff/students">Students</a></li>
                <li><a href="<?= base_url(); ?>admin/staff/student_attendance">Attendance</a></li>
                <li><a href="<?= base_url(); ?>admin/staff/student_attendance_report">Attendance Report</a></li>
                <li><a href="<?= base_url(); ?>admin/staff/routes">Route</a></li>
                <li><a href="<?= base_url(); ?>admin/staff/refill_fuel">Refill Fuel</a></li>
                <li><a href="<?= base_url(); ?>admin/staff/fuel_report">Fuel Report</a></li>
                <li><a href="<?= base_url(); ?>admin/staff/services">Services</a></li>
                <li><a href="<?= base_url(); ?>admin/staff/services_report">Services Report</a></li>
                <li><a href="<?= base_url(); ?>admin/staff/swap_driver">Swap Driver</a></li>
                <li><a href="<?= base_url(); ?>">Vehicle Parts</a></li>
                <li><a href="<?= base_url(); ?>">Vehicle RTO</a></li>
                <li><a href="<?= base_url(); ?>admin/staff/ticket">Tickets</a></li>
                <li><a href="<?= base_url(); ?>admin/staff/swapping_report">Swap Report</a></li>
                
                <li><a class="mt-4" href="<?= base_url(); ?>login/logout">Sign out</a></li>
            </ul>
        </div>
    </div>