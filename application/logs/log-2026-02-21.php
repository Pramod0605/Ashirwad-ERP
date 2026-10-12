<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-21 10:19:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-21 10:19:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-21 10:19:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 10:19:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 10:19:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 10:28:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 10:28:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 10:28:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 10:58:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-21 10:58:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-21 10:59:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 10:59:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 10:59:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 11:30:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-21 11:30:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-21 11:30:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-21 11:31:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 11:31:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 11:31:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 11:36:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 11:36:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 11:36:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 11:39:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 11:39:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 11:39:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 11:40:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 11:40:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 11:40:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 11:43:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 11:43:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 11:43:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 11:48:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 11:48:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 11:48:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 11:55:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 11:55:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 11:55:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 11:59:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 11:59:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 11:59:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 12:03:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 12:03:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 12:03:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 12:08:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-21 12:08:37 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-21 12:08:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-21 12:08:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-21 12:08:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-21 12:08:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-21 12:08:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-21 12:10:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 12:10:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 12:10:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 12:14:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 12:14:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 12:14:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 12:19:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-21 12:19:55 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-21 12:32:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 12:32:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 12:32:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 12:44:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 12:44:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 12:44:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 12:46:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-21 12:46:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 12:46:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 12:46:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 12:48:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 12:48:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 12:48:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 12:50:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 12:50:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 12:50:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 12:51:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 12:51:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 12:51:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 13:52:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 13:52:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 13:52:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 13:54:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 13:54:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 13:54:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 13:55:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 13:55:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 13:55:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 13:58:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 13:58:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 13:58:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 14:22:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-21 14:34:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-21 14:39:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 14:39:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 14:39:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 14:46:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 14:46:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 14:46:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 14:48:48 --> Could not find the language line "not_generated"
ERROR - 2026-02-21 14:50:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 14:50:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 14:50:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 14:54:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 14:54:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 14:54:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 14:58:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 14:58:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 14:58:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 15:04:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 15:04:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 15:04:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 15:04:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 15:04:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 15:04:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 15:08:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 15:08:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 15:08:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 15:15:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-21 15:15:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-21 15:16:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-21 15:16:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-21 15:36:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 15:36:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 15:36:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 15:39:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 15:39:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 15:39:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 16:02:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 16:02:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 16:02:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 16:05:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 16:05:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 16:05:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 16:14:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 16:14:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 16:14:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 16:15:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 16:15:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 16:15:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 16:17:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 16:17:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 16:17:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 16:19:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 16:19:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 16:19:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 16:46:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 16:46:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 16:46:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 16:46:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 16:46:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 16:46:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 18:26:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 18:26:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 18:26:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 18:27:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 18:27:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 18:27:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 18:42:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 18:42:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 18:42:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 19:10:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-21 19:10:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-21 19:10:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-21 19:13:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-21 19:13:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
