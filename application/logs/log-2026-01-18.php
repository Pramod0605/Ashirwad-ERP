<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-18 09:25:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-18 09:25:30 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-18 09:25:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-18 09:25:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-18 09:25:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-18 09:25:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 09:25:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 09:25:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 11:07:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-18 11:07:24 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-18 11:32:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-18 11:32:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-18 11:33:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-18 11:33:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-18 11:35:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-18 12:38:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-18 12:38:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-18 12:39:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 12:39:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 12:39:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 12:39:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 12:39:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 12:39:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 13:09:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 13:09:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 13:09:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 13:10:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 13:10:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 13:10:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 13:22:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 13:22:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 13:22:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 13:26:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 13:26:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 13:26:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 14:27:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 14:27:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 14:27:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 14:28:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 14:28:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 14:28:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 14:47:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 14:47:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 14:47:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 14:47:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 14:47:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 14:47:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 15:33:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 15:33:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 15:33:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 15:34:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 15:34:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 15:34:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 15:34:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 15:34:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 15:34:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 16:04:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 16:04:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 16:04:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 16:24:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 16:24:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 16:24:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 16:59:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 16:59:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 16:59:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 17:04:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 17:04:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 17:04:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 17:28:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 17:28:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 17:28:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 17:29:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 17:29:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 17:29:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 17:41:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 17:41:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 17:41:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 17:41:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-18 17:41:42 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-18 17:42:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 17:42:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 17:42:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 17:45:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 17:45:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 17:45:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-18 17:46:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-18 17:46:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-18 17:46:53 --> Could not find the language line "discount_this_action_is_irreversible"
