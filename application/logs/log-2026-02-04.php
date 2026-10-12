<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-04 09:34:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-04 09:34:26 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-04 09:34:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 09:34:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 09:34:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 09:34:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 09:34:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 09:34:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 09:35:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 09:35:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 09:35:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 10:22:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 10:22:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 10:22:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 10:25:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 10:25:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 10:25:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 10:25:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 10:25:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 10:25:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 10:31:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-04 10:31:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-04 10:42:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-04 10:42:30 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-04 10:42:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 10:43:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 10:43:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 10:43:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 10:46:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 10:46:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 10:46:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:02:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-04 11:02:00 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-04 11:03:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:03:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:03:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:05:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-04 11:05:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-04 11:08:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-04 11:09:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-04 11:09:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-04 11:13:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:13:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:13:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:27:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:27:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:27:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:28:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:28:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:28:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:30:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:30:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:30:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:31:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:31:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:31:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:34:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:34:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:34:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:37:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 11:38:05 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 11:38:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 11:38:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 11:38:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 11:38:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 11:38:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 11:38:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 11:38:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 11:38:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 11:38:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:38:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:38:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:44:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-04 11:44:18 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-04 11:44:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:44:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:44:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:45:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:45:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:45:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:45:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:45:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:45:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:52:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:52:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:52:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:54:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:54:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:54:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:54:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:54:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:54:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:55:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:55:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:55:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:55:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:55:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:55:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:55:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:55:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:55:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:55:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:55:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:55:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 11:56:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 11:56:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 11:56:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:01:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:01:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:01:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:02:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:02:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:02:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:02:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:02:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:02:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:03:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:03:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:03:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:05:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:05:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:05:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:08:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:08:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:08:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:15:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:15:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:15:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:15:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:15:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:15:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:16:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:16:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:16:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:17:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:17:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:17:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:17:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:17:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:17:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:18:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:18:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:18:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:19:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:19:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:19:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:19:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:19:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:19:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:20:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:20:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:20:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:20:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:20:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:20:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:21:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:21:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:21:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:21:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:21:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:21:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:22:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:22:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:22:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:22:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:22:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:22:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:22:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:22:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:22:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:23:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:23:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:23:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:27:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:27:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:27:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:27:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:27:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:27:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:28:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:28:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:28:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:28:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:28:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:28:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:29:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:29:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:29:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:33:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:33:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:33:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:33:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:33:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:33:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:34:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:34:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:34:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:34:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:34:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:34:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:35:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:35:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:35:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:35:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:35:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:35:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:36:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:36:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:36:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:36:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:36:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:36:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:36:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:36:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:36:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:37:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:37:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:37:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:38:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:38:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:38:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:39:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:39:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:39:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:39:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:39:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:39:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:40:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:40:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:40:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:40:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:40:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:40:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:40:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:40:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:40:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:41:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:41:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:41:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:42:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:42:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:42:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:42:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:42:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:42:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:42:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:42:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:42:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:43:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:43:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:43:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:43:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:43:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:43:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:43:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:43:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:43:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:44:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:44:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:44:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:45:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:45:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:45:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:46:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:46:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:46:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:46:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:46:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:46:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:47:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:47:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:47:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:48:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:48:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:48:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:48:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:48:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:48:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:51:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:51:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:51:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:51:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:51:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:51:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:52:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:52:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:52:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:52:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:52:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:52:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 12:54:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 12:54:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 12:54:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 13:09:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 13:09:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 13:09:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 13:10:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 13:10:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 13:10:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 13:28:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-04 13:28:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-04 13:29:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-04 13:31:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-04 13:31:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-04 13:32:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-04 13:33:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-04 13:33:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-04 13:33:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-04 13:34:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-04 13:50:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 13:50:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 13:50:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 13:50:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 13:50:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 13:50:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 13:52:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 13:52:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 13:52:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:01:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-04 14:01:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-04 14:01:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 14:02:00 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 14:02:00 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 14:02:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:02:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:02:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:06:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:06:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:06:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:08:56 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 14:09:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 14:09:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 14:09:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:09:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:09:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:38:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:38:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:38:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:39:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:39:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:39:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:39:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:39:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:39:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:40:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:40:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:40:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:41:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:41:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:41:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:41:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:41:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:41:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:42:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:42:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:42:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:42:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:42:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:42:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:43:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:43:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:43:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:43:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:43:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:43:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:43:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:43:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:43:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:43:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:43:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:43:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:44:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:44:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:44:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:44:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:44:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:44:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:45:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:45:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:45:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:45:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:45:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:45:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:46:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:46:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:46:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:46:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:46:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:46:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:46:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:46:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:46:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:49:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:49:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:49:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 14:55:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 14:55:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 14:55:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 15:04:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 15:04:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 15:04:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 15:06:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 15:06:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 15:06:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 15:09:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 15:09:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 15:09:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 15:15:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 15:15:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 15:15:32 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 15:15:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 15:15:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 15:15:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 15:24:30 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 15:24:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 15:24:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 15:24:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 15:24:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 15:24:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 15:25:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 15:25:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 15:25:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 15:26:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 15:26:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 15:26:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 15:44:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 15:44:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 15:44:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 15:45:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 15:45:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 15:45:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 15:45:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 15:45:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 15:45:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 15:45:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 15:45:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 15:45:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 15:47:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 15:47:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 15:47:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 15:55:25 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 15:55:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 15:55:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 15:57:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 15:57:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 15:57:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:00:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:00:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:00:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:01:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:01:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:01:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:04:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:04:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:04:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:05:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:05:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:05:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:05:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:05:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:05:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:06:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 16:06:32 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 16:06:32 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 16:06:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 16:06:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:06:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:06:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:07:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:07:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:07:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:11:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:11:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:11:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:12:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:12:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:12:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:12:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:12:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:12:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:12:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:12:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:12:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:13:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:13:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:13:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:13:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:13:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:13:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:16:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:16:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:16:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:16:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:16:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:16:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:17:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:17:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:17:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:17:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:17:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:17:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:17:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:17:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:17:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:17:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:17:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:17:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:18:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:18:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:18:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:18:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:18:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:18:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:18:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:18:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:18:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:18:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:18:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:18:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:18:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:18:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:18:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:19:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:19:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:19:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:19:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:19:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:19:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:19:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:19:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:19:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:19:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:19:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:19:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:20:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:20:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:20:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:20:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:20:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:20:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:21:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:21:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:21:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:21:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:21:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:21:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:21:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:21:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:21:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:21:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:21:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:21:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:22:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:22:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:22:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:22:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:22:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:22:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:22:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:22:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:22:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:23:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:23:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:23:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:23:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:23:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:23:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:23:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:23:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:23:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:24:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:24:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:24:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:24:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:24:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:24:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:24:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:24:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:24:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:25:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:25:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:25:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:25:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:25:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:25:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:25:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:25:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:25:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:26:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:26:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:26:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:26:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:26:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:26:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:26:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:26:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:26:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:27:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:27:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:27:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:27:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:27:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:27:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:27:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:27:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:27:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:28:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:28:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:28:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:28:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:28:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:28:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:29:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:29:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:29:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:29:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:29:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:29:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:29:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:29:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:29:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:30:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:30:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:30:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:31:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:31:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:31:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:31:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:31:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:31:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:33:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:33:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:33:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:33:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:33:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:33:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:34:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:34:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:34:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:35:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:35:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:35:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:35:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:35:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:35:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:35:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:35:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:35:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:36:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:36:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:36:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:36:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:36:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:36:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:36:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:36:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:36:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:37:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:37:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:37:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:37:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:37:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:37:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:37:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:37:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:37:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:37:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:37:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:37:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:38:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:38:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:38:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:39:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:39:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:39:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:40:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:40:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:40:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:40:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:40:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:40:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:40:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:40:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:40:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:41:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:41:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:41:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:41:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:41:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:41:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:42:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:42:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:42:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:42:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:42:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:42:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:42:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:42:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:42:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:43:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:43:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:43:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:43:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:43:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:43:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:44:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:44:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:44:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:44:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:44:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:44:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:44:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:44:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:44:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:48:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 16:48:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 16:48:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 16:50:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-04 17:06:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:06:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:06:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:06:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:06:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:06:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:06:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:06:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:06:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:07:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:07:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:07:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:08:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:08:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:08:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:08:20 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 17:08:29 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 17:08:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 17:08:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 17:08:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 17:08:38 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 17:08:38 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 17:08:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 17:08:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 17:08:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-04 17:08:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:08:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:08:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:08:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:08:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:08:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:09:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:09:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:09:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:09:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:09:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:09:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:10:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:10:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:10:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:10:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:10:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:10:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:10:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:10:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:10:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:11:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:11:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:11:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:11:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:11:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:11:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:11:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:11:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:11:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:11:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:11:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:11:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:12:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:12:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:12:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:14:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:14:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:14:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:15:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:15:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:15:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:16:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:16:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:16:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:17:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:17:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:17:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:17:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:17:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:17:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:18:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:18:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:18:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:20:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:20:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:20:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:21:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:21:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:21:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:21:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:21:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:21:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:22:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:22:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:22:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:22:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:22:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:22:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:23:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:23:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:23:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:23:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:23:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:23:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:23:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:23:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:23:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:24:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:24:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:24:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:25:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:25:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:25:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:25:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:25:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:25:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:25:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:25:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:25:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:26:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:26:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:26:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:27:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:27:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:27:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:27:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:27:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:27:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:27:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:27:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:27:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:28:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:28:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:28:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:29:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:29:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:29:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:30:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:30:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:30:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:30:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:30:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:30:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:31:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:31:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:31:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:31:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:31:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:31:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:31:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:31:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:31:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:31:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:31:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:31:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:32:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:32:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:32:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:32:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:32:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:32:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:32:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:32:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:32:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:32:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:32:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:32:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:32:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:32:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:32:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:33:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:33:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:33:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:34:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:34:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:34:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:34:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:34:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:34:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:34:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:34:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:34:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:35:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:35:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:35:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:36:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:36:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:36:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:38:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:38:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:38:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:41:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:41:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:41:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:42:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:42:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:42:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:43:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:43:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:43:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:45:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:45:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:45:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:45:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:45:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:45:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:46:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:46:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:46:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:46:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:46:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:46:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:47:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:47:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:47:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:47:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:47:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:47:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:48:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:48:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:48:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:49:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:49:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:49:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:50:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:50:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:50:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:51:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:51:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:51:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:53:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:53:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:53:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:53:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:53:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:53:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 17:55:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 17:55:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 17:55:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 18:04:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 18:04:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 18:04:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-04 18:08:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-04 18:08:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-04 18:08:16 --> Could not find the language line "discount_this_action_is_irreversible"
