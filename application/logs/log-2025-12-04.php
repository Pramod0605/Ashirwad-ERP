<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-04 09:49:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-04 09:49:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-04 09:50:04 --> Could not find the language line "error_occured"
ERROR - 2025-12-04 09:50:10 --> Could not find the language line "student_fee1"
ERROR - 2025-12-04 09:50:18 --> Could not find the language line "student_fee1"
ERROR - 2025-12-04 10:16:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-04 10:16:07 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-04 10:16:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-04 10:30:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-04 10:30:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-04 10:30:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-04 10:33:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-04 10:33:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-04 10:38:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 10:38:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 10:38:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 10:51:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 10:51:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 10:51:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 10:53:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 10:53:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 10:53:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 11:00:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 11:00:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 11:00:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 11:12:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 11:12:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 11:12:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 11:18:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 11:18:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 11:18:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 11:23:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 11:23:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 11:23:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 11:28:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-04 11:28:42 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-04 11:29:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-04 11:29:13 --> Could not find the language line "student1"
ERROR - 2025-12-04 11:29:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-04 11:29:16 --> Could not find the language line "student1"
ERROR - 2025-12-04 11:29:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-04 11:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-04 11:55:21 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-04 11:59:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 11:59:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 11:59:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 12:03:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 12:03:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 12:03:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 12:06:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 12:06:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 12:06:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 12:34:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 12:34:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 12:34:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 12:47:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 12:47:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 12:47:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 12:48:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 12:48:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 12:48:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 12:48:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 12:48:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 12:48:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 12:50:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 12:50:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 12:50:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 13:13:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 13:13:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 13:13:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 13:41:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-04 13:41:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-04 14:08:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 14:08:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 14:08:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 14:09:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 14:09:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 14:09:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 14:09:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 14:09:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 14:09:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 15:03:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-04 15:03:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-04 15:14:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-04 15:14:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-04 15:14:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 15:14:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 15:14:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 15:37:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 15:37:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 15:37:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 15:37:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 15:37:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 15:37:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 15:39:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 15:39:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 15:39:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 15:41:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 15:41:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 15:41:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 16:19:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-04 16:19:05 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-04 16:19:09 --> Could not find the language line "error_occured"
ERROR - 2025-12-04 16:19:24 --> Could not find the language line "student_fee1"
ERROR - 2025-12-04 16:22:48 --> Could not find the language line "student_fee1"
ERROR - 2025-12-04 16:31:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 16:31:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 16:31:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 16:44:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-04 16:44:33 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-04 16:44:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-04 16:45:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-04 16:45:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-04 16:45:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-04 16:45:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-04 16:56:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 16:56:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 16:56:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 17:03:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-04 17:03:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-04 17:03:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-04 17:04:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-04 18:01:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-04 18:01:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-04 18:01:58 --> Could not find the language line "error_occured"
ERROR - 2025-12-04 18:02:03 --> Could not find the language line "student_fee1"
ERROR - 2025-12-04 18:02:19 --> Could not find the language line "student_fee1"
