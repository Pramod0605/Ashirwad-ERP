<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-08 10:09:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 10:09:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 10:09:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 10:21:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-08 10:21:42 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-08 10:45:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 10:45:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 10:45:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 10:46:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 10:46:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 10:46:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 10:51:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 10:51:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 10:51:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 11:34:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-08 11:34:11 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-08 11:52:36 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3275, NULL, 1000, 'D', '')
ERROR - 2026-01-08 11:52:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 11:52:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 11:52:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 11:52:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 11:52:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 11:52:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:06:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-08 12:06:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-08 12:07:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:07:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:07:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:10:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-08 12:10:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-08 12:10:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-08 12:10:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-08 12:20:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-08 12:20:21 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-08 12:20:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:20:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:20:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:20:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:20:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:20:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:22:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:22:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:22:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:23:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:23:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:23:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:23:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:23:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:23:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:24:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:24:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:24:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:25:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:25:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:25:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:26:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:26:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:26:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:28:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:28:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:28:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:29:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:29:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:29:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:30:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:30:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:30:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:31:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:31:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:31:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:32:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:32:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:32:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:32:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:32:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:32:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:33:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:33:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:33:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:37:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:37:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:37:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:39:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:39:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:39:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:39:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:40:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:40:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:40:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:40:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:40:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:41:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:41:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:41:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:42:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:42:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:42:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:45:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:45:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:45:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:46:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:46:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:46:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:46:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:46:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:46:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:50:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:50:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:50:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:50:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:50:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:50:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:51:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:51:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:51:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:52:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:52:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:52:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:53:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:53:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:53:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:54:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:54:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:54:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:55:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:55:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:55:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:56:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:56:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:56:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:56:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:56:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:56:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 12:58:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 12:58:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 12:58:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 13:00:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 13:00:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 13:00:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 13:01:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 13:01:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 13:01:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 13:11:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 13:11:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 13:11:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 13:15:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-08 13:15:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-08 13:21:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-08 13:44:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-08 13:44:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-08 13:45:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 13:45:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 13:45:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 13:49:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 13:49:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 13:49:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 14:29:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 14:29:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 14:29:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 14:30:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 14:30:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 14:30:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 14:32:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 14:32:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 14:32:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 15:15:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-08 15:15:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-08 16:24:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-08 16:24:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-08 16:24:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-08 16:24:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-08 16:25:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/duefeesremark.php 43
ERROR - 2026-01-08 16:25:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/duefeesremark.php 43
ERROR - 2026-01-08 16:26:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/duefeesremark.php 43
ERROR - 2026-01-08 16:33:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-08 16:33:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-08 16:33:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 16:33:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 16:33:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 16:33:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 16:33:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 16:33:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 16:34:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 16:34:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 16:34:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 16:45:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-08 16:45:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-08 16:45:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 16:45:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 16:45:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 16:46:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 16:46:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 16:46:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 17:09:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-08 17:09:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-08 17:09:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-08 17:09:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-08 17:09:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-08 17:09:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-08 18:19:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-08 18:19:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
