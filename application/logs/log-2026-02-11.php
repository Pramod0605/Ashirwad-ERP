<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-11 07:59:42 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 07:59:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 07:59:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 08:00:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 08:00:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 08:00:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 08:04:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 08:04:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 08:04:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 08:04:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 08:04:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 08:04:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 08:04:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 08:04:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 08:04:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 08:39:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 08:39:37 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 08:39:38 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 08:39:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 08:39:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 08:39:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 08:41:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 08:41:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 08:41:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 08:43:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 08:43:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 08:43:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 09:34:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 09:34:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 09:34:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 09:36:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 09:36:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 09:36:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 09:38:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 09:38:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 09:38:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 09:38:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 09:38:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 09:38:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 09:39:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 09:39:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 09:39:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 09:45:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 09:45:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 09:45:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 09:45:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 09:45:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 09:45:34 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4210688 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 265
ERROR - 2026-02-11 09:45:42 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4210688 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 265
ERROR - 2026-02-11 09:46:29 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 6725592 bytes) /home/ashir611/public_html/system/core/Loader.php 990
ERROR - 2026-02-11 09:47:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 09:47:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 09:47:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 09:48:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 09:48:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 09:48:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 09:50:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 09:50:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 09:50:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 09:51:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 09:51:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 09:53:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 09:53:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 09:53:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 09:56:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 09:56:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 09:56:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 09:57:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 09:57:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 09:57:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 09:57:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 09:57:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 09:57:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 09:58:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 09:58:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 09:58:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 09:59:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 09:59:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 09:59:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 09:59:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 09:59:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:00:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:00:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:00:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:03:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:03:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:03:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:05:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 10:05:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 10:05:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:05:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:05:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:06:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:06:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:06:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:08:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:08:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:08:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:08:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:08:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:08:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:09:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:09:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:09:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:10:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 10:10:48 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 10:11:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:11:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:11:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:12:51 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4210688 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 265
ERROR - 2026-02-11 10:13:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:13:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:13:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:13:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 10:13:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 10:14:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:14:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:14:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:15:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:15:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:15:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:15:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:15:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:15:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:15:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:15:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:15:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:16:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:16:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:16:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:16:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:16:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:16:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:16:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:16:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:16:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:16:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:16:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:16:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:16:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:16:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:16:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:16:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:16:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:16:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:16:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 10:16:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 10:17:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:17:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:17:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:17:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:17:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:17:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:17:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:17:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:17:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:17:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:17:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:17:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:17:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:17:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:17:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:17:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:17:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:17:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:18:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:18:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:18:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:18:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:18:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:18:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:18:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:18:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:18:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:18:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:18:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:18:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:19:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:19:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:19:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:19:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:19:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:19:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:19:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:19:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:19:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:19:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 10:19:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 10:20:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:20:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:20:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:20:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:20:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:20:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:20:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:20:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:20:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:20:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:20:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:20:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:20:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:20:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:20:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:20:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:20:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:20:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:20:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:21:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:21:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:21:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:21:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:21:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:21:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:21:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:21:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:21:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:21:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:21:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:21:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:21:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:21:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:21:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:21:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:21:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:22:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:22:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:22:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:22:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:22:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:22:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:22:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:22:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:22:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:23:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:23:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:23:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:23:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:23:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:23:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:24:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:24:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:24:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:25:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:25:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:25:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:26:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:26:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:26:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:26:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:26:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:26:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:28:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 10:28:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 10:29:01 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 10:29:04 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 10:29:05 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 10:29:12 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 10:29:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:29:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:29:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:29:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:29:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:29:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:30:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:30:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:30:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:31:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:31:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:31:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:43:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:43:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:43:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:44:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:44:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:44:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:47:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:47:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:47:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:48:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:48:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:48:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:49:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:49:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:49:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:50:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:50:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:50:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:50:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:50:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:50:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:52:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:52:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:52:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:53:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:53:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:53:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:55:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:55:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:55:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:57:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:57:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:57:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:58:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:58:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:58:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:58:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:58:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:58:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 10:59:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 10:59:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 10:59:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 11:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 11:03:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 11:03:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 11:04:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 11:04:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 11:04:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 11:04:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 11:04:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 11:05:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 11:05:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 11:05:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 11:07:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 11:07:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 11:07:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 11:07:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 11:07:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 11:07:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 11:08:25 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:08:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:08:44 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:08:44 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:08:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:09:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:09:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:09:22 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:09:26 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:09:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:09:32 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:09:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:09:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:09:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:10:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:10:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:10:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:10:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:10:29 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 11:20:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 11:20:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 11:20:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 11:23:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 11:23:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 11:23:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 11:25:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 11:25:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 11:25:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 11:26:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 11:26:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 11:26:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 11:38:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 11:38:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 11:38:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 12:11:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 12:11:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 12:11:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 12:13:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 12:13:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 12:13:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 12:15:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 12:15:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 12:16:11 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4210688 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 265
ERROR - 2026-02-11 12:16:13 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4210688 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 265
ERROR - 2026-02-11 12:16:27 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 6307840 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 295
ERROR - 2026-02-11 12:16:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 12:16:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 12:16:52 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 6307840 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 469
ERROR - 2026-02-11 12:45:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 12:45:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 12:45:53 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 6307840 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 469
ERROR - 2026-02-11 12:46:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 12:46:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 12:46:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 12:46:15 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4210688 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 265
ERROR - 2026-02-11 12:46:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 12:46:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 12:46:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 12:46:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 12:46:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 12:46:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 12:46:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 12:46:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 12:46:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 12:46:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 12:46:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 12:47:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 12:47:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 12:47:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 12:47:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 12:47:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 12:47:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 12:58:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 12:58:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 12:58:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 12:58:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 12:58:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 12:58:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 12:59:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 12:59:42 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 12:59:42 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 13:06:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 13:06:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 13:06:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 13:20:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 13:20:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 13:20:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 13:24:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 13:24:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 13:24:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 13:37:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 13:37:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 13:37:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 13:41:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 13:41:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 13:41:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 13:49:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 13:49:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 13:49:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 13:50:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 13:50:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 13:50:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 13:54:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 13:54:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 13:54:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 13:57:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 13:57:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 13:57:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 14:04:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 14:04:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 14:04:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 14:05:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 14:05:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 14:05:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 14:10:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 14:10:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 14:10:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 14:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 14:10:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 14:11:05 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 14:11:13 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 14:11:13 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 14:11:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 14:11:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 14:11:30 --> Could not find the language line "not_generated"
ERROR - 2026-02-11 14:11:48 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4210688 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 265
ERROR - 2026-02-11 14:11:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 14:11:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 14:11:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 14:12:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 14:12:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 14:12:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 14:12:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 14:12:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 14:12:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 14:12:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 14:12:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 14:12:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 14:13:15 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4210688 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 265
ERROR - 2026-02-11 14:14:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 14:14:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 14:14:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 14:23:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 14:23:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 14:23:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 14:24:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 14:24:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 14:24:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 14:25:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 14:25:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 14:25:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 14:25:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 14:25:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 14:25:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 14:59:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 14:59:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 14:59:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 15:01:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 15:01:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 15:01:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 15:02:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 15:02:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 15:02:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 15:02:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 15:02:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 15:02:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 15:04:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 15:04:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 15:04:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 15:04:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 15:04:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 15:04:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 15:36:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 15:36:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 15:36:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 15:37:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 15:37:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 15:37:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 15:41:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 15:41:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 15:50:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 15:50:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 15:50:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 16:20:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 16:20:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 16:20:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 16:30:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 16:30:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 16:30:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 16:50:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 16:50:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 16:51:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 16:51:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 16:51:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 16:52:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 16:52:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 16:52:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 17:06:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 17:06:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 17:06:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 17:19:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 17:19:21 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 17:19:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 17:19:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 17:19:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 17:41:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 17:41:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 17:41:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 17:41:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 17:41:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 17:41:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 17:41:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 17:41:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 17:42:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 17:42:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 17:42:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 17:43:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 17:43:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 17:43:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 17:44:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 17:44:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 17:44:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 17:47:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 17:47:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 17:47:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:10:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 18:10:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 18:10:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:10:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:10:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:10:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:10:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:10:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:11:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:11:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:11:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:12:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:12:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:12:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:13:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:13:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:13:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:14:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:14:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:14:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:16:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:16:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:16:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:17:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:17:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:17:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:18:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:18:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:18:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:19:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:19:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:19:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:19:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:19:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:19:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:20:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:20:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:20:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:27:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:27:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:27:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:32:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:32:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:32:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:34:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:34:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:34:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:35:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:35:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:35:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:35:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:35:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:35:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:36:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:36:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:36:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:36:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:36:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:36:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:38:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:38:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:38:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:39:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:39:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:39:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:42:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:42:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:42:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 18:55:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 18:55:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 18:55:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 19:06:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 19:06:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 19:06:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 19:11:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 19:11:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 19:11:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 19:27:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 19:27:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 19:27:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 19:32:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 19:32:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 19:32:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 19:40:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 19:40:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 19:40:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 20:15:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 20:15:36 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 20:19:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 20:19:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 20:19:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 20:20:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-11 20:20:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-11 20:20:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-11 23:40:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-11 23:40:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-11 23:41:09 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 6307840 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 240
ERROR - 2026-02-11 23:41:27 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 20480 bytes) /home/ashir611/public_html/system/database/DB_query_builder.php 301
ERROR - 2026-02-11 23:43:33 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 6307840 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 435
ERROR - 2026-02-11 23:43:35 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 7019424 bytes) /home/ashir611/public_html/system/core/Output.php 198
ERROR - 2026-02-11 23:44:20 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 7019424 bytes) /home/ashir611/public_html/system/core/Output.php 198
