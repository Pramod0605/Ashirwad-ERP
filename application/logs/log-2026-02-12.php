<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-12 00:12:38 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 5580728 bytes) /home/ashir611/public_html/system/core/Output.php 198
ERROR - 2026-02-12 00:13:50 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4493184 bytes) /home/ashir611/public_html/system/core/Output.php 198
ERROR - 2026-02-12 00:14:10 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 5580728 bytes) /home/ashir611/public_html/system/core/Output.php 198
ERROR - 2026-02-12 09:59:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-12 09:59:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-12 09:59:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-12 09:59:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-12 09:59:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 09:59:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 09:59:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 10:00:11 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 20480 bytes) /home/ashir611/public_html/system/database/DB_query_builder.php 301
ERROR - 2026-02-12 10:00:22 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 5404752 bytes) /home/ashir611/public_html/system/core/Loader.php 990
ERROR - 2026-02-12 10:03:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-12 10:03:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-12 10:03:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 10:03:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 10:03:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 10:05:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 10:05:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 10:05:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 10:05:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 10:05:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 10:05:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 10:09:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 10:09:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 10:09:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 10:12:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-12 10:12:05 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-12 10:25:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 10:25:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 10:25:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 10:34:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 10:34:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 10:34:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 10:34:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 10:34:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 10:34:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 10:35:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 10:35:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 10:35:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 10:47:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 10:47:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 10:47:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 10:57:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-12 10:57:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-12 11:19:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-12 11:19:59 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-12 11:20:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-12 11:20:46 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-12 11:24:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 11:24:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 11:24:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 11:28:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 11:28:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 11:28:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 11:47:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-12 11:47:24 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-12 12:05:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 12:05:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 12:05:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 12:20:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-12 12:20:36 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-12 12:51:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 12:51:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 12:51:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 12:57:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-12 12:57:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-12 12:57:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 12:57:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 12:57:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 12:59:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 12:59:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 12:59:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 13:29:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 13:29:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 13:29:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 13:35:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-12 13:35:11 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-12 13:35:13 --> Could not find the language line "not_generated"
ERROR - 2026-02-12 13:35:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-12 13:35:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-12 13:35:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 13:35:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 13:35:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 13:35:37 --> Could not find the language line "not_generated"
ERROR - 2026-02-12 13:35:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-12 13:35:42 --> Could not find the language line "not_generated"
ERROR - 2026-02-12 13:35:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 13:35:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 13:35:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 13:43:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 13:43:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 13:43:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 13:45:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 13:45:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 13:45:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 13:46:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 13:46:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 13:46:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 13:47:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 13:47:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 13:47:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 13:48:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 13:48:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 13:48:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 13:50:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 13:50:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 13:50:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 13:50:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 13:50:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 13:50:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 13:51:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 13:51:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 13:51:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 14:04:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 14:04:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 14:04:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 14:51:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 14:51:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 14:51:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 14:52:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 14:52:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 14:52:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:00:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:00:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:00:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:06:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-12 15:06:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-12 15:06:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:06:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:06:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:11:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:11:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:11:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:11:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:11:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:11:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:14:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:14:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:14:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:14:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:14:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:14:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:23:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:23:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:23:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:24:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:24:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:24:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:24:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:24:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:24:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:25:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:25:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:25:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:27:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:27:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:27:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:28:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:28:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:28:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:41:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:41:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:41:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:53:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:53:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:53:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:54:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:54:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:54:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:55:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-12 15:55:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-12 15:55:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:55:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:55:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:56:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:56:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:56:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:57:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:57:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:57:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 15:59:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 15:59:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 15:59:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:02:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:02:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:02:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:03:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:03:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:03:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:05:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:05:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:05:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:14:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:14:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:14:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:15:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:15:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:15:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:16:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:16:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:16:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:17:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:17:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:17:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:33:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-12 16:33:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-12 16:33:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:33:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:33:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:37:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:37:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:37:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:38:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:38:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:38:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:44:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:44:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:44:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:45:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:45:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:45:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:48:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:48:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:48:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:48:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:48:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:48:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:49:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:49:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:49:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:49:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:49:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:49:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:57:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:57:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:57:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:58:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:58:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:58:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 16:58:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 16:58:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 16:58:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 17:15:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 17:15:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 17:15:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 17:41:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 17:41:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 17:41:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-12 17:41:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-12 17:41:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-12 17:41:48 --> Could not find the language line "discount_this_action_is_irreversible"
