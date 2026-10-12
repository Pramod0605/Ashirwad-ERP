<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-10-22 01:58:32 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:32 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:35 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:35 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:35 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:35 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:35 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:35 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:35 --> Severity: Warning --> mysqli::real_connect(): (HY000/1040): Too many connections /home/ashir611/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2025-10-22 01:58:35 --> Unable to connect to the database
ERROR - 2025-10-22 01:58:35 --> Severity: Warning --> mysqli::real_connect(): (HY000/1040): Too many connections /home/ashir611/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2025-10-22 01:58:35 --> Unable to connect to the database
ERROR - 2025-10-22 01:58:35 --> Query error: Too many connections - Invalid query: SELECT `sch_settings`.`lastname`, `sch_settings`.`middlename`, `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`superadmin_restriction`, `sch_settings`.`student_timeline`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`start_week`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`, `sch_settings`.`student_profile_edit`, `sch_settings`.`staff_barcode`, `sch_settings`.`student_barcode`, `languages`.`is_rtl`, `sch_settings`.`student_panel_login`, `sch_settings`.`parent_panel_login`, `sch_settings`.`currency_format`, `sch_settings`.`exam_result`, `sch_settings`.`base_url`, `sch_settings`.`folder_path`, `currencies`.`symbol` as `currency_symbol`, `currencies`.`base_price`, `currencies`.`short_name` as `currency`, `sch_settings`.`online_admission_application_form`, `currencies`.`id` as `currency_id`, `sch_settings`.`admin_login_page_background`, `sch_settings`.`user_login_page_background`, `sch_settings`.`low_attendance_limit`, `sch_settings`.`scan_code_type`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
JOIN `currencies` ON `currencies`.`id` = `sch_settings`.`currency`
ORDER BY `sch_settings`.`id`
ERROR - 2025-10-22 01:58:35 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/ashir611/public_html/application/models/Setting_model.php 42
ERROR - 2025-10-22 01:58:35 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:35 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:36 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:36 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:36 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:36 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:37 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:37 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:37 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:37 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:37 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:37 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:37 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:37 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:37 --> Severity: Warning --> mysqli::real_connect(): (HY000/1040): Too many connections /home/ashir611/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2025-10-22 01:58:37 --> Unable to connect to the database
ERROR - 2025-10-22 01:58:37 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:37 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:37 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:37 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:37 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:37 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/1040): Too many connections /home/ashir611/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2025-10-22 01:58:38 --> Unable to connect to the database
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::real_connect(): (08004/1040): Too many connections /home/ashir611/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2025-10-22 01:58:38 --> Unable to connect to the database
ERROR - 2025-10-22 01:58:38 --> Query error: Too many connections - Invalid query: SELECT `sch_settings`.`lastname`, `sch_settings`.`middlename`, `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`superadmin_restriction`, `sch_settings`.`student_timeline`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`start_week`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`, `sch_settings`.`student_profile_edit`, `sch_settings`.`staff_barcode`, `sch_settings`.`student_barcode`, `languages`.`is_rtl`, `sch_settings`.`student_panel_login`, `sch_settings`.`parent_panel_login`, `sch_settings`.`currency_format`, `sch_settings`.`exam_result`, `sch_settings`.`base_url`, `sch_settings`.`folder_path`, `currencies`.`symbol` as `currency_symbol`, `currencies`.`base_price`, `currencies`.`short_name` as `currency`, `sch_settings`.`online_admission_application_form`, `currencies`.`id` as `currency_id`, `sch_settings`.`admin_login_page_background`, `sch_settings`.`user_login_page_background`, `sch_settings`.`low_attendance_limit`, `sch_settings`.`scan_code_type`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
JOIN `currencies` ON `currencies`.`id` = `sch_settings`.`currency`
ORDER BY `sch_settings`.`id`
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/ashir611/public_html/application/models/Setting_model.php 42
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/1040): Too many connections /home/ashir611/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2025-10-22 01:58:38 --> Unable to connect to the database
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:38 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:38 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:39 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:39 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:39 --> Severity: Warning --> mysqli::__construct(): (08004/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:39 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:39 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:39 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:39 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:39 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:39 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:39 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:39 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:39 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:39 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:39 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:39 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:39 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:39 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:39 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:39 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:39 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:39 --> Severity: Warning --> mysqli::real_connect(): (HY000/1040): Too many connections /home/ashir611/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2025-10-22 01:58:39 --> Unable to connect to the database
ERROR - 2025-10-22 01:58:39 --> Severity: Warning --> mysqli::real_connect(): (08004/1040): Too many connections /home/ashir611/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2025-10-22 01:58:39 --> Unable to connect to the database
ERROR - 2025-10-22 01:58:39 --> Query error: Too many connections - Invalid query: SELECT `sch_settings`.`lastname`, `sch_settings`.`middlename`, `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`superadmin_restriction`, `sch_settings`.`student_timeline`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`start_week`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`, `sch_settings`.`student_profile_edit`, `sch_settings`.`staff_barcode`, `sch_settings`.`student_barcode`, `languages`.`is_rtl`, `sch_settings`.`student_panel_login`, `sch_settings`.`parent_panel_login`, `sch_settings`.`currency_format`, `sch_settings`.`exam_result`, `sch_settings`.`base_url`, `sch_settings`.`folder_path`, `currencies`.`symbol` as `currency_symbol`, `currencies`.`base_price`, `currencies`.`short_name` as `currency`, `sch_settings`.`online_admission_application_form`, `currencies`.`id` as `currency_id`, `sch_settings`.`admin_login_page_background`, `sch_settings`.`user_login_page_background`, `sch_settings`.`low_attendance_limit`, `sch_settings`.`scan_code_type`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
JOIN `currencies` ON `currencies`.`id` = `sch_settings`.`currency`
ORDER BY `sch_settings`.`id`
ERROR - 2025-10-22 01:58:39 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/ashir611/public_html/application/models/Setting_model.php 42
ERROR - 2025-10-22 01:58:39 --> Severity: Warning --> mysqli::__construct(): (HY000/1040): Too many connections /home/ashir611/public_html/application/config/database.php 78
ERROR - 2025-10-22 01:58:39 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2025-10-22 01:58:39 --> Severity: Warning --> mysqli::real_connect(): (HY000/1040): Too many connections /home/ashir611/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2025-10-22 01:58:39 --> Unable to connect to the database
ERROR - 2025-10-22 01:58:39 --> Severity: Warning --> mysqli::real_connect(): (HY000/1040): Too many connections /home/ashir611/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2025-10-22 01:58:39 --> Unable to connect to the database
ERROR - 2025-10-22 01:58:39 --> Query error: Too many connections - Invalid query: SELECT `sch_settings`.`lastname`, `sch_settings`.`middlename`, `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`superadmin_restriction`, `sch_settings`.`student_timeline`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`start_week`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`, `sch_settings`.`student_profile_edit`, `sch_settings`.`staff_barcode`, `sch_settings`.`student_barcode`, `languages`.`is_rtl`, `sch_settings`.`student_panel_login`, `sch_settings`.`parent_panel_login`, `sch_settings`.`currency_format`, `sch_settings`.`exam_result`, `sch_settings`.`base_url`, `sch_settings`.`folder_path`, `currencies`.`symbol` as `currency_symbol`, `currencies`.`base_price`, `currencies`.`short_name` as `currency`, `sch_settings`.`online_admission_application_form`, `currencies`.`id` as `currency_id`, `sch_settings`.`admin_login_page_background`, `sch_settings`.`user_login_page_background`, `sch_settings`.`low_attendance_limit`, `sch_settings`.`scan_code_type`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
JOIN `currencies` ON `currencies`.`id` = `sch_settings`.`currency`
ORDER BY `sch_settings`.`id`
ERROR - 2025-10-22 01:58:39 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/ashir611/public_html/application/models/Setting_model.php 42
ERROR - 2025-10-22 09:26:12 --> Could not find the language line "edit_print_logo"
ERROR - 2025-10-22 09:26:12 --> Could not find the language line "edit_print_logo"
ERROR - 2025-10-22 09:39:45 --> Could not find the language line "edit_print_logo"
ERROR - 2025-10-22 09:39:45 --> Could not find the language line "edit_print_logo"
ERROR - 2025-10-22 14:43:49 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
