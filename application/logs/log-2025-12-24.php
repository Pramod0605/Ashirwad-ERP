<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-24 09:36:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-24 09:36:07 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-24 09:36:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 09:36:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 09:36:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 09:36:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 09:36:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 09:36:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 09:36:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 09:37:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 09:37:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 09:37:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 09:53:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-24 09:53:36 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-24 09:53:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 09:53:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 09:53:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:08:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-24 10:08:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-24 10:09:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:09:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:09:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:09:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-24 10:12:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-24 10:12:25 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-24 10:13:23 --> Could not find the language line "std_dtl_for"
ERROR - 2025-12-24 10:13:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:13:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:13:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:14:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:14:34 --> Could not find the language line "std_dtl_for"
ERROR - 2025-12-24 10:14:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:14:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:14:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:14:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:14:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:16:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-24 10:16:52 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-24 10:17:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:17:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:17:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:19:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:20:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:20:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:20:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:21:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:21:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:21:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:24:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:24:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:24:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:27:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:27:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:27:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:29:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:30:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:30:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:30:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:33:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:33:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:33:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:34:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:34:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:34:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:34:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:34:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:34:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:36:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:36:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:36:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:37:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:37:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:37:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:38:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-24 10:38:49 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-24 10:38:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:38:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:38:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:38:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:38:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:38:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:39:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:39:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:39:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:39:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:39:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:39:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:43:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:43:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:43:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:43:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:47:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:47:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:47:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:50:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-24 10:50:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:50:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:50:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-24 10:50:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 10:50:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-24 10:50:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:50:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:50:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:52:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:52:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:52:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:57:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:57:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:57:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:58:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:58:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:58:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:59:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:59:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:59:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 10:59:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 10:59:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 10:59:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:02:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:02:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:02:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:03:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:03:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:03:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:06:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:06:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:06:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:07:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 11:07:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:07:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:07:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:08:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:08:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:08:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:08:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:08:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:08:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:09:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:09:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:09:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:10:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:10:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:10:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:11:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:11:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:11:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:13:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:13:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:13:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:14:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:14:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:14:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:14:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:14:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:14:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:17:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:17:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:17:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:19:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:19:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:19:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:24:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 11:24:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 11:24:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 11:24:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:24:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:24:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:25:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 11:25:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 11:25:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 11:25:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:25:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:25:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:27:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:27:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:27:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:28:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:29:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:29:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:35:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 11:35:44 --> Could not find the language line "student1"
ERROR - 2025-12-24 11:35:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 11:35:50 --> Could not find the language line "student1"
ERROR - 2025-12-24 11:35:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 11:42:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:42:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:42:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:45:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 11:45:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:45:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:45:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:48:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:48:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:48:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:51:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:51:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:51:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:52:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:52:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:52:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 11:54:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 11:54:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 11:54:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 12:26:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 12:26:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 12:26:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 12:27:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 12:27:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 12:27:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 12:31:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 12:31:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 12:31:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 12:31:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 12:36:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 12:36:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 12:36:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 12:43:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 12:49:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 12:49:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 12:49:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 12:52:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 12:52:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 12:52:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 12:53:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 12:53:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 12:53:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 12:53:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 12:53:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 12:53:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 13:00:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 13:00:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 13:00:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 13:03:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 13:03:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 13:03:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 13:05:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 13:05:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 13:05:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 13:06:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 13:06:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 13:06:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 13:08:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 13:08:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 13:08:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 13:09:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-24 13:09:26 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-24 13:10:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 13:10:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 13:10:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 13:11:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 13:11:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 13:11:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 13:11:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 13:11:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 13:11:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 13:15:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 13:15:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 13:15:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 14:13:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 14:13:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 14:13:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 14:15:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 14:15:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 14:15:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 14:18:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 14:18:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 14:18:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 14:20:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 14:20:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 14:20:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 14:22:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 14:22:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 14:22:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 14:23:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 14:23:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 14:23:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 14:26:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 14:26:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 14:26:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 14:28:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 14:28:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 14:28:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 14:31:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 14:31:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 14:31:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 14:33:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 14:33:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 14:33:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 14:37:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 14:37:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 14:37:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 14:41:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 14:41:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 14:41:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 14:57:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 14:57:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 14:57:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 14:57:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 14:57:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 14:57:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 14:57:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 14:58:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 14:58:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 14:58:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 14:58:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 14:58:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:03:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 15:03:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 15:03:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 15:03:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:03:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:03:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:04:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 15:04:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 15:04:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 15:04:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 15:04:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 15:04:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-24 15:04:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:04:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:04:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:07:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:07:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:07:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:21:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:21:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:21:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:26:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:26:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:26:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:26:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-24 15:26:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-24 15:26:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:26:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:26:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:26:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:26:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:26:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:28:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:28:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:28:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:31:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:31:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:31:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:33:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:33:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:33:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:34:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:34:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:34:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:35:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:35:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:35:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:38:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:38:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:38:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:40:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:40:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:40:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:41:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:41:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:41:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:52:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:52:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:52:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:53:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:53:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:53:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:56:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:56:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:56:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 15:57:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 15:57:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 15:57:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 16:02:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 16:02:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 16:02:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 16:06:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 16:06:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 16:06:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 16:08:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 16:08:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 16:08:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 16:14:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 16:14:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 16:14:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 16:14:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 16:14:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 16:14:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 16:14:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 16:14:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 16:14:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 16:15:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 16:15:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 16:15:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 16:15:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-24 16:15:52 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-24 16:18:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 16:18:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 16:18:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-24 16:24:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-24 16:24:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-24 16:24:55 --> Could not find the language line "discount_this_action_is_irreversible"
