<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-16 09:32:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-16 09:32:30 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-16 09:33:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-16 09:38:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-16 09:38:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-16 09:39:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-16 09:39:49 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-16 09:41:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-16 09:41:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-16 10:09:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-16 10:09:41 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-16 10:09:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:09:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:09:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 10:15:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-16 10:15:36 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-16 10:21:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:21:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:21:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 10:21:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:21:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:21:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 10:21:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:21:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:21:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 10:34:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:34:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:34:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 10:35:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:35:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:35:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 10:35:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:35:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:35:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 10:35:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:35:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:35:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 10:35:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:35:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:35:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 10:35:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:35:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:35:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 10:35:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:35:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:35:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 10:35:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:35:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:35:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 10:41:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:41:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:41:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 10:51:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:51:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:51:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 10:51:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:51:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:51:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 10:51:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:51:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:51:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 10:57:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 10:57:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 10:57:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:04:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:04:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:04:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:04:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:04:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:04:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:04:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:04:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:04:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:05:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:05:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:05:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:15:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:15:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:15:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:16:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:16:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:16:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:17:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-16 11:17:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-16 11:17:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-16 11:17:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-16 11:19:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:19:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:19:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:20:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:20:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:20:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:22:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:22:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:22:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:22:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:22:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:22:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:24:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:24:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:24:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:24:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:24:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:24:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:25:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:25:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:25:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:25:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:25:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:25:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:26:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:26:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:26:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:27:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:27:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:27:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:27:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:27:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:27:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:28:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:28:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:28:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:30:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:30:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:30:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:32:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:32:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:32:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:32:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:32:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:32:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:54:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:54:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:54:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 11:55:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 11:55:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 11:55:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:03:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:03:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:03:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:04:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:04:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:04:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:05:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:05:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:05:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:06:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:06:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:06:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:07:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:07:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:07:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:08:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:08:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:08:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:10:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:10:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:10:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:13:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:13:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:13:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:14:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:14:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:14:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:16:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:16:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:16:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:23:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:23:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:23:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:23:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:23:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:23:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:24:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:24:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:24:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:26:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:26:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:26:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:30:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:30:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:30:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:32:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:32:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:32:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:40:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:40:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:40:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:41:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:41:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:41:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:41:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:41:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:41:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:45:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:45:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:45:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:48:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:48:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:48:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:49:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:49:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:49:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 12:54:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 12:54:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 12:54:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 13:01:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 13:01:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 13:01:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 13:03:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 13:03:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 13:03:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 13:06:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 13:06:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 13:06:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 13:06:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 13:06:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 13:06:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 13:07:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 13:07:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 13:07:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 13:07:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 13:07:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 13:07:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 13:09:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 13:09:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 13:09:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 13:54:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 13:54:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 13:54:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 14:02:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 14:02:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 14:02:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 14:04:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 14:04:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 14:04:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 14:06:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 14:06:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 14:06:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 14:37:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 14:37:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 14:37:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 14:37:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 14:37:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 14:37:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-16 16:35:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-16 16:35:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-16 16:35:34 --> Could not find the language line "discount_this_action_is_irreversible"
