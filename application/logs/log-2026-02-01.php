<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-01 10:02:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 10:02:31 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 10:02:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:02:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:02:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:09:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 10:09:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 10:09:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 10:09:30 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 10:09:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-01 10:09:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-01 10:15:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:15:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:15:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:24:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 10:24:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 10:37:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 10:37:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 10:37:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:37:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:37:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:38:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:38:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:38:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:39:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:39:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:39:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:40:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 10:40:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 10:41:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:41:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:41:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:42:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:42:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:42:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:43:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:43:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:43:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:44:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:44:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:44:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:44:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:44:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:44:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:44:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:44:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:44:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:45:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:45:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:45:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:45:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 10:45:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 10:45:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:45:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:45:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:46:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-01 10:46:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:46:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:46:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:47:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:47:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:47:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:47:12 --> Could not find the language line "error_occured"
ERROR - 2026-02-01 10:47:15 --> Could not find the language line "student_fee1"
ERROR - 2026-02-01 10:48:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:48:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:48:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:49:51 --> Could not find the language line "exam_coordinator"
ERROR - 2026-02-01 10:49:51 --> Could not find the language line "principal"
ERROR - 2026-02-01 10:51:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:51:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:51:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:52:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:52:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:52:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:52:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:52:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:52:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:56:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 10:56:07 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 10:57:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 10:57:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 10:58:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:58:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:58:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:59:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:59:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:59:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 10:59:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 10:59:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 10:59:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:00:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:00:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:00:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:00:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:00:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:00:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:00:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:00:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:00:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:03:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:03:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:03:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:03:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:03:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:03:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:07:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:07:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:07:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:07:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:07:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:07:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:17:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:17:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:17:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:19:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:19:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:19:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:19:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:19:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:19:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:20:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:20:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:20:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:20:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:20:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:20:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:21:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:21:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:21:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:21:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 11:21:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 11:27:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:27:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:27:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:32:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:32:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:32:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:32:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:32:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:32:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:34:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:34:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:34:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:34:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:34:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:34:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:34:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:34:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:34:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:35:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:35:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:35:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:36:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:36:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:36:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:36:20 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3665, NULL, 3000, 'D', '')
ERROR - 2026-02-01 11:36:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:36:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:36:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:37:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:37:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:37:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:37:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:37:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:37:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:39:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:39:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:39:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:40:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:40:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:40:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:42:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:42:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:42:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:42:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:42:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:42:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:43:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:43:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:43:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:44:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:44:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:44:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:45:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:45:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:45:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:45:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:45:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:45:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:46:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:46:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:46:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:46:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:46:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:46:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:48:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:48:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:48:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:48:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:48:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:48:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:50:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:50:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:50:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:52:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:52:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:52:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:53:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:53:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:53:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:54:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:54:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:54:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:56:11 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3666, NULL, 1000, 'D', '')
ERROR - 2026-02-01 11:56:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:56:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:56:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:56:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:56:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:56:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:56:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:56:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:56:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:58:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:58:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:58:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:58:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:58:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:58:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:58:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:58:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:58:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:58:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:58:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:58:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:59:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:59:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:59:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:59:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:59:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:59:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 11:59:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 11:59:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 11:59:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:00:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:00:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:00:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:00:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:00:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:00:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:00:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:00:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:00:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:02:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:02:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:02:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:03:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:03:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:03:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:05:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:05:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:05:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:08:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:08:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:08:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:08:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:08:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:08:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:08:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:08:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:08:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:11:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:11:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:11:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:11:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:11:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:11:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:12:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:12:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:12:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:13:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:13:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:13:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:13:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:13:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:13:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:14:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:14:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:14:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:15:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:15:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:15:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:15:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:15:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:15:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:16:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:16:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:16:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:16:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:16:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:16:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:17:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:17:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:17:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:18:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:18:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:18:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:18:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:18:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:18:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:20:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:20:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:20:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:21:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:21:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:21:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:22:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:22:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:22:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:23:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:23:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:23:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:24:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:24:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:24:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:25:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:25:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:25:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:27:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:27:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:27:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:29:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:29:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:29:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:29:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:29:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:29:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:35:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:35:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:35:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:37:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:37:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:37:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:39:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:39:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:39:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:39:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:39:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:39:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:40:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:40:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:40:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:40:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:40:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:40:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:42:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:42:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:42:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:44:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:44:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:44:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:48:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:48:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:48:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:51:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:51:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:51:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:51:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:51:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:51:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:51:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 12:51:50 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 12:51:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 12:51:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 12:51:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 12:53:22 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 12:53:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:53:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:53:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:55:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:55:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:55:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:56:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:56:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:56:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:56:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:56:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:56:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:57:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:57:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:57:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:57:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:57:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:57:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:57:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:57:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:57:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:57:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:57:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:57:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:58:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 12:58:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 12:58:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 12:59:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 12:59:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 12:59:19 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 12:59:19 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 12:59:19 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 12:59:45 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 12:59:45 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 12:59:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 12:59:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 12:59:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:00:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:00:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:00:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:00:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:00:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:00:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:00:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:00:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:00:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:03:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:03:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:03:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:04:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:04:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:04:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:07:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:07:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:07:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:07:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:07:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:07:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:08:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:08:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:08:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:09:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:09:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:09:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:10:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:10:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:10:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:11:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:11:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:11:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:12:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:12:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:12:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:13:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:13:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:13:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:13:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:13:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:13:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:14:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:14:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:14:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:14:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:14:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:14:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:15:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:15:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:15:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:17:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:17:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:17:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:20:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:20:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:20:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:20:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:20:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:20:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:20:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:20:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:20:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:22:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:22:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:22:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:22:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:22:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:22:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:22:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:22:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:22:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:23:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:23:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:23:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:23:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:23:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:23:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:23:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:23:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:23:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:24:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:24:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:24:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:24:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:24:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:24:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:25:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:25:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:25:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:26:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:26:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:26:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:28:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:28:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:28:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:31:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:31:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:31:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:32:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:32:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:32:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:32:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:32:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:32:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:33:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:33:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:33:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:33:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 13:33:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 13:35:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 13:35:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 13:38:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:38:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:38:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:41:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:41:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:41:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:42:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:42:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:42:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:43:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:43:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:43:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:45:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:45:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:45:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:46:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:46:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:46:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:46:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:46:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:46:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:49:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:49:04 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:49:04 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:49:04 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:49:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:49:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:49:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:49:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:49:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:49:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:51:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:51:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:51:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:52:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:52:20 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:52:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:52:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:52:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:52:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:52:32 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:52:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:52:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:52:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:52:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:52:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:52:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:52:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:52:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:53:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:53:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:53:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:53:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:53:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-01 13:53:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:53:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:53:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:53:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:53:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:53:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:57:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:57:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:57:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:58:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:58:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:58:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 13:59:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 13:59:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 13:59:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:01:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:01:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:01:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:02:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 14:02:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 14:02:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 14:02:36 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 14:02:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 14:02:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 14:03:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:03:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:03:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:04:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:04:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:04:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:04:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:04:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:04:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:07:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:07:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:07:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:08:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:08:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:08:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:09:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:09:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:09:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:11:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:11:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:11:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:11:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:11:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:11:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:13:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 14:13:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 14:13:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:13:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:13:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:14:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 14:14:37 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 14:14:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:14:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:14:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:15:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:15:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:15:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:16:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:16:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:16:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:17:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:17:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:17:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:19:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:19:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:19:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:24:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:24:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:24:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:26:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:26:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:26:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:27:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:27:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:27:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:28:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:28:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:28:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:30:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:30:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:30:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:32:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:32:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:32:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:37:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:37:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:37:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:41:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:41:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:41:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:42:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:42:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:42:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 14:55:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 14:55:59 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 14:59:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 14:59:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 14:59:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 15:00:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 15:00:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 15:00:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 15:08:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 15:08:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 15:12:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 15:12:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 15:12:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 15:14:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 15:14:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 15:14:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 15:14:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 15:14:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 15:14:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 15:16:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 15:16:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 15:16:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 15:28:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 15:28:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 15:28:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 15:29:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 15:29:42 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 15:30:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 15:30:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 15:31:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 15:31:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 15:31:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-01 16:46:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-01 16:46:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-01 16:47:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-01 16:47:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-01 16:47:11 --> Could not find the language line "discount_this_action_is_irreversible"
