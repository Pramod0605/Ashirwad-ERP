<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-12 10:03:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-12 10:03:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-12 10:26:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-12 10:26:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-12 10:26:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-12 10:26:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-12 10:26:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-12 10:26:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-12 10:37:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-12 10:37:06 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-12 10:38:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-12 10:47:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-12 10:47:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-12 10:49:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-12 10:49:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-12 11:40:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 11:40:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 11:40:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 11:41:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 11:41:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 11:41:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 11:55:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 11:55:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 11:55:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:01:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 12:01:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 12:03:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:03:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:03:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:04:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-12 12:04:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-12 12:07:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:07:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:07:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:10:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:10:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:10:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:12:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:12:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:12:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:17:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:17:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:17:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:18:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:18:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:18:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:20:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:20:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:20:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:20:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:20:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:20:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:20:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:20:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:20:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:20:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:20:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:20:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:34:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:34:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:34:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:42:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:42:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:42:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:43:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:43:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:43:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:55:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:55:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:55:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:57:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:57:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:57:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:57:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:57:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:57:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:57:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:57:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:57:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:58:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:58:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:58:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:58:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:58:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:58:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:58:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:58:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:58:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 12:59:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 12:59:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 12:59:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 13:27:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-12 13:27:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-12 13:27:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 13:27:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/reportduefees.php 47
ERROR - 2026-01-12 13:27:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/reportduefees.php 47
ERROR - 2026-01-12 13:27:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 13:27:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-12 13:27:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 13:34:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 13:34:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 13:34:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 13:41:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-12 13:41:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 13:42:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-12 13:42:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-12 13:42:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 13:42:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 13:42:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 13:45:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-12 13:45:14 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-12 13:45:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 13:45:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 13:45:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 13:49:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-12 13:49:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 13:53:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 13:53:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 13:53:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 13:54:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 13:54:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-12 13:54:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 14:44:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 14:44:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 14:44:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 14:45:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 14:45:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 14:45:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 14:55:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 14:55:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 14:55:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 14:56:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 14:56:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 14:56:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 14:57:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 14:57:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 14:57:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 14:57:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 14:57:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 14:57:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 14:58:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 14:58:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 14:58:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 14:59:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 14:59:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 14:59:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:01:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-12 15:01:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 15:04:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:04:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:04:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:04:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:04:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:04:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:07:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:07:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:07:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:08:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:08:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:08:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:11:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:11:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:11:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:12:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:12:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:12:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:15:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:15:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:15:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:16:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:16:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:16:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:17:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:17:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:17:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:20:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:20:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:20:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:20:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:20:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:20:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:28:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:28:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:28:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:37:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:37:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:37:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:39:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:39:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:39:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:43:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:43:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:43:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:43:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:43:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:43:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:44:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:44:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:44:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:45:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:45:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:45:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:46:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:46:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:46:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:48:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:48:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:48:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:50:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-12 15:50:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-12 15:50:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:50:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:50:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 15:55:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 15:55:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 15:55:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 16:00:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 16:00:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 16:00:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 16:37:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 16:52:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 16:52:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 16:52:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 16:54:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 16:54:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 16:54:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 17:04:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 17:04:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 17:04:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 17:04:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-12 17:04:41 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-12 17:06:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 17:06:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 17:06:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 17:10:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 17:10:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 17:10:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 17:11:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 17:11:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 17:11:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 17:11:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 17:11:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 17:11:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 17:12:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-12 17:12:15 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-12 17:18:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 17:18:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 17:18:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 17:21:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 17:21:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-12 17:21:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 17:23:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-12 17:23:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-12 17:23:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 17:23:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 17:23:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 17:34:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 17:34:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 17:34:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 17:39:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-12 17:39:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 17:39:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-12 17:39:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-12 17:39:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-12 17:39:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-12 17:47:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-12 17:47:55 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-12 20:05:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-12 20:05:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
