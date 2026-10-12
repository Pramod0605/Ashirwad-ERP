<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-08 10:09:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 10:09:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 10:09:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 10:09:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 10:09:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 10:09:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 10:11:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-08 10:11:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-08 10:12:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 10:12:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 10:12:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 10:24:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-08 10:24:06 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-08 10:24:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 10:24:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 10:24:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 10:25:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 10:25:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 10:25:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 10:33:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 10:33:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 10:33:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 10:36:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 10:36:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 10:36:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 10:43:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 10:43:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 10:43:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 10:44:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 10:44:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 10:44:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 10:46:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 10:46:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 10:46:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 10:50:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 10:50:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 10:50:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 10:52:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 10:52:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 10:52:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 10:59:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 10:59:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 10:59:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 11:02:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 11:02:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 11:02:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 11:19:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 11:19:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 11:19:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 11:21:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 11:21:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 11:21:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 11:23:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 11:23:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 11:23:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 11:27:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 11:27:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 11:27:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 11:30:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 11:30:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 11:30:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 11:37:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-08 11:37:25 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-08 11:37:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 11:37:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 11:37:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 11:37:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 11:39:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 11:39:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 11:39:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 11:44:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 11:44:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 11:44:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 11:46:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 11:46:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 11:46:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 11:49:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 11:49:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 11:49:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 11:59:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 11:59:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 11:59:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:00:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:00:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:00:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:03:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:03:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:03:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:04:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:04:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:04:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:06:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:06:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:06:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:13:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:13:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:13:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:15:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:15:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:15:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:16:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:16:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:16:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:21:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:21:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:21:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:26:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:26:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:26:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:30:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:30:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:30:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:33:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:33:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:33:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:36:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:36:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:36:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:38:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:38:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:38:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:40:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:40:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:40:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:45:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:45:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:45:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:46:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-08 12:46:33 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-08 12:47:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:47:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:47:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:48:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:48:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:48:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:49:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:49:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:49:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:50:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:50:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:50:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:51:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:51:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:51:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 12:58:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 12:58:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 12:58:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 13:00:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 13:00:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 13:00:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 13:02:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 13:02:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 13:02:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 13:09:04 --> Severity: Warning --> date() expects parameter 2 to be int, string given /home/ashir611/public_html/application/views/print/printTransportFeesByGroup.php 340
ERROR - 2025-12-08 13:09:04 --> Severity: Warning --> date() expects parameter 2 to be int, string given /home/ashir611/public_html/application/views/print/printTransportFeesByGroup.php 575
ERROR - 2025-12-08 13:09:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 13:09:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 13:09:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 13:10:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 13:10:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 13:10:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 13:10:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 13:10:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 13:10:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 13:12:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 13:12:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 13:12:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 13:12:46 --> Severity: Warning --> date() expects parameter 2 to be int, string given /home/ashir611/public_html/application/views/print/printTransportFeesByGroup.php 340
ERROR - 2025-12-08 13:12:46 --> Severity: Warning --> date() expects parameter 2 to be int, string given /home/ashir611/public_html/application/views/print/printTransportFeesByGroup.php 575
ERROR - 2025-12-08 13:15:33 --> Severity: Warning --> date() expects parameter 2 to be int, string given /home/ashir611/public_html/application/views/print/printTransportFeesByGroup.php 340
ERROR - 2025-12-08 13:15:33 --> Severity: Warning --> date() expects parameter 2 to be int, string given /home/ashir611/public_html/application/views/print/printTransportFeesByGroup.php 575
ERROR - 2025-12-08 13:16:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 13:16:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 13:16:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 13:17:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 13:17:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 13:17:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 13:21:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 13:21:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 13:21:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 13:21:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 13:21:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 13:21:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 13:22:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 13:22:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 13:22:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 13:30:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 13:30:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 13:30:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 13:53:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 13:53:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 13:53:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 13:54:26 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2025-12-08 13:59:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 13:59:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 13:59:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:00:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:00:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:00:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:02:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:02:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:02:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:04:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:04:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:04:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:06:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:06:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:06:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:08:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:08:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:08:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:13:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:13:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:13:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:14:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:14:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:14:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:14:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:14:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:14:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:14:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:14:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:14:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:14:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:14:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:14:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:14:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:14:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:14:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:14:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:14:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:14:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:15:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:15:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:15:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:15:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:15:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:15:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:15:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:15:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:15:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:15:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:15:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:15:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:15:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:15:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:15:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:16:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:16:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:16:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:16:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-08 14:16:26 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-08 14:16:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:16:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:16:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:16:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:16:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:16:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:16:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:16:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:16:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:16:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:16:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:16:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:17:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:17:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:17:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:17:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:17:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:17:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:17:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:17:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:17:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:18:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:18:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:18:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:22:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:22:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:22:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:23:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:23:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:23:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:23:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:23:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:23:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:24:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:24:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:24:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:46:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 14:46:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 14:46:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 14:46:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:46:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:46:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:47:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:47:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:47:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:48:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:48:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:48:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:49:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:49:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:49:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:50:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:50:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:50:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:52:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:52:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:52:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:56:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:56:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:56:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 14:57:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 14:57:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 14:57:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:00:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:00:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:00:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:02:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:02:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:02:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:06:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:06:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:06:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:11:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:11:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:11:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:14:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:14:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:14:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:17:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:17:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:17:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:22:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:22:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:22:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:24:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:24:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:24:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:28:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:28:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:28:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:28:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 15:28:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 15:28:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 15:28:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 15:29:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 15:29:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:29:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:29:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:30:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:30:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:30:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:33:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:33:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:33:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:34:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:34:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:34:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:36:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:36:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:36:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:38:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:38:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:38:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:40:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:40:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:40:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:41:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-08 15:41:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-08 15:41:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:41:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:41:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:41:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:41:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:41:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:43:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:43:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:43:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:44:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:44:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:44:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:45:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:45:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:45:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:48:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:48:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:48:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:48:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 15:49:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 15:49:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 15:49:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:49:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:49:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:49:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:49:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:49:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:50:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:50:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:50:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:51:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:51:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:51:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:52:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:52:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:52:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:53:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:53:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:53:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:54:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:54:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:54:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:55:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:55:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:55:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 15:55:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 15:55:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 15:55:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 16:04:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 16:04:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 16:04:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 16:05:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 16:05:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 16:05:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 16:05:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 16:05:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 16:05:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 16:06:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 16:06:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 16:06:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 16:06:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 16:06:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 16:06:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 16:07:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 16:07:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 16:07:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 16:07:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 16:07:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 16:07:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 16:08:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 16:08:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 16:08:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 16:08:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 16:08:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 16:08:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 16:08:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 16:08:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 16:08:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 16:10:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 16:10:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 16:10:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 16:13:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 16:13:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 16:13:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 16:16:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 16:16:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 16:16:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 16:18:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 16:18:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 16:18:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 16:23:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 16:23:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 16:23:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-08 16:23:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 16:23:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 16:23:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 17:20:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 17:20:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 17:20:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 17:21:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 17:21:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 17:21:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 17:21:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 17:21:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 17:21:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 17:21:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 17:21:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 17:21:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 17:25:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 17:25:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 17:25:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 17:25:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 17:25:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 17:25:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 17:26:08 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (2949, NULL, 4000, 'D', '')
ERROR - 2025-12-08 17:26:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-08 17:26:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-08 17:26:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-08 18:52:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-08 18:52:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
