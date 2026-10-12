<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-09 09:41:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-09 09:41:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-09 09:43:07 --> Could not find the language line "error_occured"
ERROR - 2025-12-09 09:43:10 --> Could not find the language line "student_fee1"
ERROR - 2025-12-09 09:43:16 --> Could not find the language line "student_fee1"
ERROR - 2025-12-09 09:43:25 --> Could not find the language line "student_fee1"
ERROR - 2025-12-09 09:43:36 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-09 09:43:36 --> Could not find the language line "principal"
ERROR - 2025-12-09 09:43:36 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-09 09:43:36 --> Could not find the language line "principal"
ERROR - 2025-12-09 09:43:36 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-09 09:43:36 --> Could not find the language line "principal"
ERROR - 2025-12-09 09:43:36 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-09 09:43:36 --> Could not find the language line "principal"
ERROR - 2025-12-09 09:43:36 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-09 09:43:36 --> Could not find the language line "principal"
ERROR - 2025-12-09 09:43:36 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-09 09:43:36 --> Could not find the language line "principal"
ERROR - 2025-12-09 09:43:36 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-09 09:43:36 --> Could not find the language line "principal"
ERROR - 2025-12-09 09:43:36 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-09 09:43:36 --> Could not find the language line "principal"
ERROR - 2025-12-09 09:49:12 --> Could not find the language line "error_occured"
ERROR - 2025-12-09 09:49:18 --> Could not find the language line "student_fee1"
ERROR - 2025-12-09 09:49:26 --> Could not find the language line "student_fee1"
ERROR - 2025-12-09 09:49:33 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-09 09:49:33 --> Could not find the language line "principal"
ERROR - 2025-12-09 09:49:33 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-09 09:49:33 --> Could not find the language line "principal"
ERROR - 2025-12-09 09:52:14 --> Could not find the language line "error_occured"
ERROR - 2025-12-09 09:52:23 --> Could not find the language line "student_fee1"
ERROR - 2025-12-09 09:52:29 --> Could not find the language line "student_fee1"
ERROR - 2025-12-09 09:52:32 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-09 09:52:32 --> Could not find the language line "principal"
ERROR - 2025-12-09 09:52:32 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-09 09:52:32 --> Could not find the language line "principal"
ERROR - 2025-12-09 09:53:46 --> Could not find the language line "student_fee1"
ERROR - 2025-12-09 09:53:50 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-09 09:53:50 --> Could not find the language line "principal"
ERROR - 2025-12-09 09:53:50 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-09 09:53:50 --> Could not find the language line "principal"
ERROR - 2025-12-09 10:11:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-09 10:11:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-09 10:14:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:14:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:14:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:14:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:20:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-09 10:20:01 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-09 10:20:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:20:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:20:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:21:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:21:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:21:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:21:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:24:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:24:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:27:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:27:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:27:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:27:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:28:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:28:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:28:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:28:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:28:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:28:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:28:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:28:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:29:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:29:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:29:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:29:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:29:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:29:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:30:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:30:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:30:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:30:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:31:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:31:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:32:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:32:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:32:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:32:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:33:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:33:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:33:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:33:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:33:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:33:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:34:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:34:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:35:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:35:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:35:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-09 10:35:18 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-09 10:35:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:35:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:35:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:35:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:35:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 10:35:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 10:35:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 10:36:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:36:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:36:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:36:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:37:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:37:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:37:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:37:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:38:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:38:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:39:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:39:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:42:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:42:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:42:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:42:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:42:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:43:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:43:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:43:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:43:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:44:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:44:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:46:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:46:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:46:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:46:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:46:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:46:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:46:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:47:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:48:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:48:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:49:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:50:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 10:50:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 10:50:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 10:51:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:51:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:52:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:52:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:54:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:54:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:54:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:54:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:54:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:55:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:55:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:55:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:55:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:55:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:55:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:55:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:56:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:56:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:56:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:56:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:56:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:56:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:56:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 10:56:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 10:56:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 10:57:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:57:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:57:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:57:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:57:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:57:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:57:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 10:58:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 10:59:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 11:00:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 11:00:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 11:05:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:05:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:05:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:06:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 11:07:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 11:08:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 11:09:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 11:09:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 11:09:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 11:10:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 11:10:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 11:10:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 11:10:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 11:11:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:11:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:11:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:11:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:11:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:11:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:12:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:12:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:12:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:16:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 11:16:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:16:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:16:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:17:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:17:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:17:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:17:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:17:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:17:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:17:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:17:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:17:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:18:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 11:18:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 11:18:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 11:20:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 11:20:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-09 11:22:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:22:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:22:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:23:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:23:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:23:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:23:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:23:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:23:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:23:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:23:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:23:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:24:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:24:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:24:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:24:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:24:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:24:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:26:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:26:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:26:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:27:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:27:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:27:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:34:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:34:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:34:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:38:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:38:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:38:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:39:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:39:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:39:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:40:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:40:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:40:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:40:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:40:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:40:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:40:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:40:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:40:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:41:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:41:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:41:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:44:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:44:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:44:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:46:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:46:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:46:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 11:46:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 11:46:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 11:46:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 12:00:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 12:00:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 12:00:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 12:01:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-09 12:01:22 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-09 12:02:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 12:02:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 12:02:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 12:02:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 12:02:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 12:02:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 12:26:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-09 12:26:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-09 12:26:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 12:27:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 12:27:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 12:27:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 12:35:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 12:35:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 12:35:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 12:56:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 12:56:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 12:56:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 13:01:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 13:01:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 13:01:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 13:10:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 13:10:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 13:10:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:04:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:04:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:04:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:13:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-09 14:13:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-09 14:13:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 14:13:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 14:13:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 14:14:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 14:14:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 14:14:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 14:14:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 14:14:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 14:34:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:34:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:34:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:34:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:34:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:34:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:34:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:34:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:34:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:35:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:35:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:35:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:35:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:35:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:35:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:40:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-09 14:40:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-09 14:42:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:42:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:42:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:42:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:42:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:42:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:43:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:43:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:43:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:44:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:44:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:44:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:44:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:44:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:44:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:44:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:44:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:44:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:46:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:46:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:46:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:47:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:47:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:47:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:50:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:50:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:50:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:51:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:51:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:51:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 14:52:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 14:52:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 14:52:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 15:02:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 15:02:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 15:02:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 15:10:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 15:10:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 15:10:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 15:11:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 15:11:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 15:11:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 15:21:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 15:21:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 15:21:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 15:28:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-09 15:28:59 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-09 15:29:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 15:29:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 15:29:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 15:48:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 15:48:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 15:48:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 15:52:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 15:52:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 15:52:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 16:07:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 16:07:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 16:07:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 16:10:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-09 16:10:39 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-09 16:10:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 16:10:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 16:10:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 16:11:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-09 16:46:18 --> Could not find the language line "by_date1"
ERROR - 2025-12-09 16:46:26 --> Could not find the language line "by_date1"
ERROR - 2025-12-09 16:48:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 16:48:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 16:48:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 16:53:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 16:53:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 16:53:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 17:03:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 17:03:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 17:03:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 17:42:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-09 17:42:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-09 17:44:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 17:44:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 17:44:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 17:44:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 17:44:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 17:44:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 17:45:40 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (2953, NULL, 6000, 'D', '')
ERROR - 2025-12-09 17:45:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 17:45:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 17:45:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 17:46:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 17:46:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 17:46:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 17:48:46 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (2954, NULL, 6000, 'D', '')
ERROR - 2025-12-09 17:48:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 17:48:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 17:48:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 17:49:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 17:49:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 17:49:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-09 18:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-09 18:03:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-09 18:03:19 --> Could not find the language line "discount_this_action_is_irreversible"
