<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-08-08 09:36:54 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 09:37:07 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 09:37:07 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 09:41:04 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 09:41:08 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 09:41:09 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 09:41:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 09:41:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 09:41:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 10:33:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 10:33:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 10:33:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 10:35:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 10:35:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 10:35:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 10:56:41 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 11:30:31 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 11:30:36 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 11:30:37 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 11:30:39 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 11:33:18 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 11:33:27 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 11:33:27 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 11:41:13 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 11:41:13 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 11:46:35 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 11:46:36 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:00:03 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:00:03 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:00:05 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:00:12 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:00:12 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:02:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-1' at line 48 - Invalid query: SELECT `classes`.`id` AS `class_id`, `students`.`id`, `student_session`.`id` as `student_session_id`, `classes`.`class`, `sections`.`id` AS `section_id`, `sections`.`section`, `students`.`id`, `students`.`admission_no`, `students`.`roll_no`, `students`.`admission_date`, `students`.`firstname`, `students`.`middlename`, `students`.`lastname`, `students`.`image`, `students`.`mobileno`, `students`.`email`, `students`.`state`, `students`.`city`, `students`.`pincode`, `students`.`religion`, `students`.`dob`, `students`.`current_address`, `students`.`permanent_address`, IFNULL(students.category_id, 0) as `category_id`, IFNULL(categories.category, "") as `category`, `students`.`adhar_no`, `students`.`samagra_id`, `students`.`bank_account_no`, `students`.`bank_name`, `students`.`ifsc_code`, `students`.`father_name`, `students`.`guardian_name`, `students`.`guardian_relation`, `students`.`guardian_phone`, `students`.`guardian_address`, `students`.`is_active`, `students`.`created_at`, `students`.`updated_at`, `students`.`gender`, `students`.`rte`, `student_session`.`session_id`, `table_custom_1`.`field_value` as `Calerder Date`, `table_custom_2`.`field_value` as `Cat`
FROM `students`
LEFT JOIN `custom_field_values` as `table_custom_1` ON `students`.`id` = `table_custom_1`.`belong_table_id` AND `table_custom_1`.`custom_field_id` = 1
LEFT JOIN `custom_field_values` as `table_custom_2` ON `students`.`id` = `table_custom_2`.`belong_table_id` AND `table_custom_2`.`custom_field_id` = 3
JOIN `student_session` ON `student_session`.`student_id` = `students`.`id`
JOIN `classes` ON `student_session`.`class_id` = `classes`.`id`
JOIN `sections` ON `sections`.`id` = `student_session`.`section_id`
LEFT JOIN `categories` ON `students`.`category_id` = `categories`.`id`
LEFT JOIN `school_houses` ON `students`.`school_house_id` = `school_houses`.`id`
WHERE `student_session`.`session_id` = '21'
AND `students`.`is_active` = 'yes'
AND   (
`students`.`firstname` LIKE '%maha%' ESCAPE '!'
OR  `students`.`middlename` LIKE '%maha%' ESCAPE '!'
OR  `students`.`lastname` LIKE '%maha%' ESCAPE '!'
OR  `school_houses`.`house_name` LIKE '%maha%' ESCAPE '!'
OR  `students`.`guardian_name` LIKE '%maha%' ESCAPE '!'
OR  `students`.`adhar_no` LIKE '%maha%' ESCAPE '!'
OR  `students`.`samagra_id` LIKE '%maha%' ESCAPE '!'
OR  `students`.`roll_no` LIKE '%maha%' ESCAPE '!'
OR  `students`.`admission_no` LIKE '%maha%' ESCAPE '!'
OR  `students`.`mobileno` LIKE '%maha%' ESCAPE '!'
OR  `students`.`email` LIKE '%maha%' ESCAPE '!'
OR  `students`.`religion` LIKE '%maha%' ESCAPE '!'
OR  `students`.`cast` LIKE '%maha%' ESCAPE '!'
OR  `students`.`gender` LIKE '%maha%' ESCAPE '!'
OR  `students`.`current_address` LIKE '%maha%' ESCAPE '!'
OR  `students`.`permanent_address` LIKE '%maha%' ESCAPE '!'
OR  `students`.`blood_group` LIKE '%maha%' ESCAPE '!'
OR  `students`.`bank_name` LIKE '%maha%' ESCAPE '!'
OR  `students`.`ifsc_code` LIKE '%maha%' ESCAPE '!'
OR  `students`.`father_name` LIKE '%maha%' ESCAPE '!'
OR  `students`.`father_phone` LIKE '%maha%' ESCAPE '!'
OR  `students`.`father_occupation` LIKE '%maha%' ESCAPE '!'
OR  `students`.`mother_name` LIKE '%maha%' ESCAPE '!'
OR  `students`.`mother_phone` LIKE '%maha%' ESCAPE '!'
OR  `students`.`mother_occupation` LIKE '%maha%' ESCAPE '!'
OR  `students`.`guardian_name` LIKE '%maha%' ESCAPE '!'
OR  `students`.`guardian_relation` LIKE '%maha%' ESCAPE '!'
OR  `students`.`guardian_phone` LIKE '%maha%' ESCAPE '!'
OR  `students`.`guardian_occupation` LIKE '%maha%' ESCAPE '!'
OR  `students`.`guardian_address` LIKE '%maha%' ESCAPE '!'
OR  `students`.`guardian_email` LIKE '%maha%' ESCAPE '!'
OR  `students`.`previous_school` LIKE '%maha%' ESCAPE '!'
OR  `students`.`note` LIKE '%maha%' ESCAPE '!'
 )
ORDER BY `students`.`id`
 LIMIT -1
ERROR - 2025-08-08 12:02:31 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/ashir611/public_html/application/models/Student_model.php 526
ERROR - 2025-08-08 12:06:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 12:06:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 12:06:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 12:07:26 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:07:26 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:08:58 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:09:04 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:09:04 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:09:17 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:09:40 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:10:12 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:10:12 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:22:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 12:22:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 12:22:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 12:22:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 12:22:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 12:22:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 12:49:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 12:49:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 12:49:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 12:50:17 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:50:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 12:50:40 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:50:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 12:52:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 12:52:39 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 12:52:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 13:02:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 13:02:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 13:02:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 13:03:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 13:03:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 13:03:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 13:09:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 13:09:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 13:09:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 13:09:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 13:09:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 13:09:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 13:24:37 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 13:25:07 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 13:25:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 13:41:58 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 13:41:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 13:47:32 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 13:47:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 13:52:54 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 13:52:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 13:54:37 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 13:54:41 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 13:54:41 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 13:58:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 13:59:05 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 13:59:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 14:13:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 14:13:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 14:13:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 14:14:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 14:14:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 14:14:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 14:14:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 14:15:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 14:15:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 14:15:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 14:16:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 14:16:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 14:16:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 14:30:45 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 14:30:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 14:36:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 14:37:29 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 14:37:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 14:46:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 14:46:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 14:46:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 14:48:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 14:48:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 14:48:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 14:51:28 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 14:51:40 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 14:54:16 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 14:54:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 15:15:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 15:15:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 47
ERROR - 2025-08-08 15:44:22 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 16:02:29 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 16:02:33 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 16:02:33 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 16:02:39 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 17:06:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 17:06:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 17:06:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 17:06:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 17:06:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 17:06:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 17:18:51 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 17:19:17 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 17:19:21 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 17:19:22 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 17:19:23 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 17:20:10 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 17:24:40 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 17:25:30 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 17:26:18 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 17:29:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 17:29:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 17:29:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 17:30:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 17:30:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 17:30:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 17:32:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 17:32:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 17:32:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-08-08 17:33:05 --> Could not find the language line "not_generated"
ERROR - 2025-08-08 17:33:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-08-08 17:33:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-08-08 17:33:58 --> Could not find the language line "discount_this_action_is_irreversible"
