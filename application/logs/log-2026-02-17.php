<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-17 10:08:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-17 10:08:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-17 10:21:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-17 10:21:22 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-17 10:21:25 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 10:21:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 10:21:58 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 10:22:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 10:22:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 10:22:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 10:23:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 10:23:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 10:23:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 10:26:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-17 10:26:11 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-17 10:27:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 10:27:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 10:27:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 10:33:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 10:33:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 10:33:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 10:36:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 10:36:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 10:36:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 10:40:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 10:40:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 10:40:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 10:40:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-17 10:40:01 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-17 10:40:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-17 10:40:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-17 10:41:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-17 10:45:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 10:45:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 10:45:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 10:46:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 10:46:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 10:46:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 10:53:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 10:53:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 10:53:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 11:14:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 11:14:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 11:14:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 11:15:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 11:15:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 11:15:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 11:36:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 11:37:01 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 11:37:02 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 11:37:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 11:37:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 11:37:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 12:04:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 12:04:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 12:04:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 12:05:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 12:05:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 12:05:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 12:18:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 12:18:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 12:18:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 12:28:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 12:28:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 12:28:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 12:30:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 12:30:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 12:30:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 12:31:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 12:31:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 12:31:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 12:32:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 12:32:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 12:32:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 12:33:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 12:33:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 12:33:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 12:52:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 12:52:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 12:52:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 12:53:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 12:53:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 12:53:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 12:54:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 12:54:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 12:54:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 12:57:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 12:57:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 12:57:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 12:57:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 12:57:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 12:57:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 12:58:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 12:58:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 12:58:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:01:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:01:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:01:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:06:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:06:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:06:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:08:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:08:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:08:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:15:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:15:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:15:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:15:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:15:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:15:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:36:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:36:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:36:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:36:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:36:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:36:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:36:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:36:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:36:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:36:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:36:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:36:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:37:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:37:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:37:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:38:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:38:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:38:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:39:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:39:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:39:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:39:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-17 13:39:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-17 13:40:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:40:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:40:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:42:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:42:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:42:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:42:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:42:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:42:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:42:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:42:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:42:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:48:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:48:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:48:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:48:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:48:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:48:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:52:05 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 13:52:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 13:52:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 13:52:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:52:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:52:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:52:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:52:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:52:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:52:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:52:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:52:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:52:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:52:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:52:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:52:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:52:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:52:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:52:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:52:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:52:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:53:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 13:53:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 13:53:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 13:53:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 13:53:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:53:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:53:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 13:55:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 13:55:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 13:55:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:05:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:05:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:05:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:05:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:05:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:05:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:05:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:05:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:05:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:07:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:07:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:07:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:07:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:07:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:07:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:10:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:10:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:10:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:10:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:10:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:10:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:10:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:10:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:10:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:13:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:13:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:13:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:13:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:13:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:13:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:14:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 14:15:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 14:15:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 14:15:12 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 14:15:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:15:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:15:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:18:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:18:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:18:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:18:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:18:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:18:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:19:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:19:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:19:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:22:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-17 14:22:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-17 14:22:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 14:22:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 14:22:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 14:22:50 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 14:22:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:22:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:22:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:23:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:23:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:23:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:27:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 14:27:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 14:27:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 14:27:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:27:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:27:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:28:00 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 14:28:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 14:28:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 14:28:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:28:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:28:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:29:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:29:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:29:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:37:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 14:37:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:37:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:37:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:41:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:41:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:41:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:44:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:44:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:44:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:45:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:45:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:45:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:55:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:55:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:55:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:55:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:55:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:55:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 14:59:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 14:59:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 14:59:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:00:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:00:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:00:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:01:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:01:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:01:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:08:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:08:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:08:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:11:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:11:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:11:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:11:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:11:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:11:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:11:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:11:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:11:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:11:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:11:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:11:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:14:44 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 15:21:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 15:21:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 15:21:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 15:22:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:22:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:22:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:26:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:26:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:26:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:26:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:26:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:26:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:28:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:28:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:28:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:28:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 15:29:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:29:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:29:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:29:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:29:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:29:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:30:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:30:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:30:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:30:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:30:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:30:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:34:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:34:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:34:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:35:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:35:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:35:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:35:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:35:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:35:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:36:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:36:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:36:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 15:37:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 15:37:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 15:37:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:10:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:10:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:10:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:19:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:19:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:19:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:20:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:20:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:20:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:31:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:31:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:31:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:32:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:32:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:32:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:32:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:32:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:32:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:33:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:33:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:33:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:36:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:36:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:36:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:40:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:40:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:40:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:40:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:40:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:40:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:40:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-17 16:40:39 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-17 16:40:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:40:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:40:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:42:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:42:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:42:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:42:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:42:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:42:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:43:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:43:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:43:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:49:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:49:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:49:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:50:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:50:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:50:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 16:58:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 16:58:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 16:58:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 17:01:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 17:01:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 17:01:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 17:02:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 17:02:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 17:02:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 17:15:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 17:15:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 17:15:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 17:18:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 17:18:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 17:18:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 17:18:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 17:18:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 17:18:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 17:20:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 17:20:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 17:20:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 17:25:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 17:25:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 17:25:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 17:25:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 17:25:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 17:25:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 17:28:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 17:28:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 17:28:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 17:30:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 17:30:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 17:30:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 17:53:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 17:53:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 17:53:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 17:56:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 17:56:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 17:56:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 18:00:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 18:00:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 18:00:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 18:01:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 18:01:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 18:01:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 18:07:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 18:07:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 18:07:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 18:07:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 18:07:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 18:07:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 18:08:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 18:08:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 18:08:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 18:09:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 18:09:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 18:09:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 18:12:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 18:12:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 18:12:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 18:18:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 18:18:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 18:18:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 18:19:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 18:19:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 18:19:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 18:41:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-17 18:41:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-17 18:52:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 18:52:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 18:52:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 18:53:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 18:53:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 18:53:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 18:54:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 18:54:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 18:54:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 19:07:38 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:07:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:07:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:08:25 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:08:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 19:08:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 19:08:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 19:10:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 19:10:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 19:10:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 19:12:48 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:12:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:12:54 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:13:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 19:13:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 19:13:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 19:13:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 19:13:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 19:13:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 19:19:02 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:19:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:19:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:19:13 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:19:30 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:20:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 19:20:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 19:20:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 19:21:22 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:21:26 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:21:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:21:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:21:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 19:21:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 19:21:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 19:22:02 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:22:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:22:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:24:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:29:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:29:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 19:29:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 19:29:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-17 19:30:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:30:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:30:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:34:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:34:45 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:34:46 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:35:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:35:22 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:35:22 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:35:30 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:35:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-17 19:51:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-17 19:51:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-17 19:51:08 --> Could not find the language line "discount_this_action_is_irreversible"
