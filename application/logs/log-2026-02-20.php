<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-20 10:17:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 10:17:45 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 10:17:45 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 10:18:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 10:18:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 10:18:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 10:18:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 10:18:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 10:18:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 10:18:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 10:18:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 10:18:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 10:19:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 10:19:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 10:19:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 10:20:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 10:20:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 10:20:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 10:23:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 10:23:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 10:23:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 10:28:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-20 10:28:31 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-20 10:30:12 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:01:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-20 11:01:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-20 11:01:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-20 11:01:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-20 11:02:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-20 11:02:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:02:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:02:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:03:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:03:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:03:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:03:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:03:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:03:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:04:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:04:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:04:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:05:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:05:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:05:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:06:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-20 11:07:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:07:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:07:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:08:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:08:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:08:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:09:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:09:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:09:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:09:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:09:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:09:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:10:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:10:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:10:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:10:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:10:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:10:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:10:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:10:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:10:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:10:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:10:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:10:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:20:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:20:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:20:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:20:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:20:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:20:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:20:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:20:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:20:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:20:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:20:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:20:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:28:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:28:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:28:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:28:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:28:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:28:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:31:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:31:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:31:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:33:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:33:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:33:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:44:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:44:29 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:44:30 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:44:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:44:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:44:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:47:01 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:47:05 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:47:05 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:47:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:47:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:47:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:47:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:47:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:47:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:47:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:47:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:47:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:48:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:48:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:48:44 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:48:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:48:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:48:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:49:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:50:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:50:04 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:50:13 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:50:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:50:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:50:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:50:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:50:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:50:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 11:50:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:50:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:50:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:53:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:53:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:53:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:54:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-20 11:54:39 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-20 11:55:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:55:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:55:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:55:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:55:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:55:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:56:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:56:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:56:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:57:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:57:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:57:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:58:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:58:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:58:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:59:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:59:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:59:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 11:59:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 11:59:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 11:59:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:03:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:03:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:03:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:04:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:04:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:04:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:07:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:07:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:07:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:08:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:08:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:08:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:12:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:12:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:12:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:12:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:12:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:12:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:12:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:12:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:12:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:12:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:12:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:12:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:14:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:14:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:14:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:15:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:15:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:15:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:18:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:18:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:18:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:19:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:19:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:19:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:20:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:20:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:20:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:21:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:21:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:21:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:23:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:23:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:23:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:26:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:26:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:26:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:28:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:28:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:28:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:31:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:31:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:31:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:38:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:38:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:38:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:40:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:40:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:40:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:42:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:42:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:42:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:42:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:42:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:42:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:42:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:42:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:42:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:42:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:42:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:42:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:42:58 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 12:43:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:43:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:43:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:44:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:44:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:44:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:45:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:45:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:45:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:45:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:45:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:45:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:46:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:46:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:46:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:46:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:46:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:46:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:47:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:47:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:47:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:49:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:49:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:49:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 12:52:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 12:52:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 12:52:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 13:04:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 13:04:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 13:04:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 13:07:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 13:07:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 13:07:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 13:08:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 13:08:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 13:08:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 13:08:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 13:08:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 13:08:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 13:08:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 13:08:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 13:08:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 13:09:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 13:09:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 13:09:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 13:11:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 13:11:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 13:11:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 13:16:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 13:16:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 13:16:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 13:17:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 13:17:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 13:17:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:01:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:01:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:01:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:05:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:05:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:05:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:12:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:12:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:12:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:12:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:12:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:12:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:13:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:13:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:13:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:16:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:16:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:16:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:21:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:21:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:21:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:22:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:22:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:22:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:29:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:29:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:29:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:31:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:31:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:31:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:31:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:31:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:31:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:31:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:31:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:31:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:34:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:34:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:34:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:44:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:44:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:44:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:44:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:44:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:44:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:48:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:48:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:48:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:48:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:48:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:48:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:49:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:49:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:49:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:49:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:49:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:49:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:49:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:49:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:49:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:49:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:49:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:49:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:51:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:51:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:51:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:52:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:52:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:52:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:52:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:52:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:52:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:53:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:53:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:53:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 14:53:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 14:53:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 14:53:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:04:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:04:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:04:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:06:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:06:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:06:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:07:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:07:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:07:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:09:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:09:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:09:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:20:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:20:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:20:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:25:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:25:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:25:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:30:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:30:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:30:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:31:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:31:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:31:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:32:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:32:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:32:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:39:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:39:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:39:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:40:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:40:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:40:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:42:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:42:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:42:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:42:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:42:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:42:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:42:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:42:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:42:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:44:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:44:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:44:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:44:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:44:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:44:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:44:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:44:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:44:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:45:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:45:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:45:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:45:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:45:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:45:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:45:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:45:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:45:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:46:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:46:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:46:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:46:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:46:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:46:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:47:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:47:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:47:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:47:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:47:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:47:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:47:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:47:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:47:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:47:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:47:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:47:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:48:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:48:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:48:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:49:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:49:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:49:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:49:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:49:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:49:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:50:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:50:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:50:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:51:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:51:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:51:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:51:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:51:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:51:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:51:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:51:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:51:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:52:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:52:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:52:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:53:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:53:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:53:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:53:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:53:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:53:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:55:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:55:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:55:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:56:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:56:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:56:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:56:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:56:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:56:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:57:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:57:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:57:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:57:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:57:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:57:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:57:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:57:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:57:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:57:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:57:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:57:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:57:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:57:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:57:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:57:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:57:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:57:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 15:58:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 15:58:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 15:58:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 16:01:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 16:01:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 16:01:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 16:04:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 16:04:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 16:04:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 16:06:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 16:06:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 16:06:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 16:07:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 16:07:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 16:07:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 16:07:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 16:07:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 16:07:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 16:07:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 16:07:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 16:07:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 16:07:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 16:07:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 16:07:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 16:07:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 16:07:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 16:07:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 16:09:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-20 16:09:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-20 16:09:48 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 16:09:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 16:09:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-20 16:16:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 16:16:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 16:16:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 16:16:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 16:16:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 16:16:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 16:18:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 16:18:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 16:18:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 16:25:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 16:25:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 16:25:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 16:27:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 16:27:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 16:27:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 16:27:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 16:27:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 16:27:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 18:07:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-20 18:07:26 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-20 18:07:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 18:07:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 18:07:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-20 18:08:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-20 18:08:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-20 18:08:26 --> Could not find the language line "discount_this_action_is_irreversible"
