<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-16 09:56:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-16 09:56:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-16 09:56:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-16 09:56:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-16 09:56:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-16 09:56:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 09:56:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 09:56:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 10:01:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-16 10:01:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-16 10:01:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-16 10:02:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 10:02:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 10:02:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 10:04:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 10:04:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 10:04:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 10:05:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 10:05:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 10:05:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 10:06:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-16 10:06:24 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-16 10:07:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 10:07:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 10:07:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 10:07:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-16 10:07:41 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-16 10:08:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 10:08:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 10:08:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 10:08:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 10:08:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 10:08:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 10:12:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 10:12:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 10:12:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 10:12:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 10:12:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 10:12:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 10:15:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 10:15:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 10:15:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 10:19:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 10:19:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 10:19:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 10:44:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 10:44:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 10:44:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 10:46:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 10:46:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 10:46:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 10:50:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 10:50:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 10:50:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:21:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:21:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:21:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:23:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:23:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:23:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:24:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:24:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:24:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:25:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:25:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:25:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:25:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:25:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:25:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:25:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:25:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:25:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:27:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:27:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:27:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:28:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:28:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:28:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:29:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:29:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:29:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:30:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:30:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:30:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:31:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:31:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:31:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:33:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:33:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:33:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:34:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:34:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:34:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:35:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:35:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:35:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:36:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:36:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:36:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:37:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:37:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:37:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:37:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:37:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:37:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:41:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:41:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:41:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:41:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:41:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:41:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:43:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-16 11:43:22 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-16 11:46:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:46:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:46:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:46:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:46:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:46:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:47:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:47:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:47:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:47:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:47:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:47:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:47:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:47:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:47:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:48:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:48:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:48:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:51:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:51:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:51:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:52:05 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3010, NULL, 7500, 'D', '')
ERROR - 2025-12-16 11:52:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:52:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:52:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:52:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:52:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:52:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:52:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:52:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:52:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:53:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:53:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:53:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:53:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:53:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:53:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:53:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:53:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:53:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:53:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:53:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:53:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:54:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:54:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:54:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:54:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:54:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:54:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:55:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:55:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:55:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 11:59:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 11:59:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 11:59:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:04:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:04:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:04:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:04:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:04:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:04:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:04:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-16 12:04:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-16 12:06:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:06:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:06:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:06:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:06:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:06:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:07:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:07:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:07:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:10:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:10:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:10:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:11:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:11:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:11:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:11:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:11:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:11:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:11:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:11:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:11:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:12:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:12:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:12:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:13:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:13:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:13:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:14:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:14:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:14:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:15:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:15:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:15:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:16:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:16:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:16:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:17:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:17:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:17:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:20:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:20:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:20:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:22:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:22:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:22:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:23:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:23:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:23:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:26:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:26:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:26:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:27:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:27:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:27:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:28:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:28:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:28:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:28:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:28:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:28:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:28:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:28:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:28:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:31:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:31:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:31:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:33:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-16 12:34:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:34:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:34:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:35:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:35:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:35:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:35:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:35:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:35:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:36:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:36:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:36:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:36:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:36:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:36:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:36:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:36:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:36:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:36:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:36:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:36:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:36:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:36:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:36:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:40:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:40:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:40:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:42:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:42:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:42:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 12:43:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 12:43:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 12:43:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 13:16:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-16 13:16:56 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-16 13:49:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-16 13:49:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-16 13:49:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-16 13:49:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 13:49:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 13:49:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 13:50:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-16 13:50:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-16 13:50:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-16 13:50:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 13:50:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 13:50:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 13:54:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 13:54:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 13:54:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 14:01:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-16 14:01:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-16 14:01:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-16 14:01:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 14:01:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 14:01:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 14:06:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 14:06:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 14:06:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 14:07:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-16 14:12:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 14:12:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 14:12:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 14:12:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 14:12:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 14:12:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 14:44:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 14:44:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 14:44:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 15:00:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 15:00:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 15:00:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 15:01:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 15:01:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 15:01:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 15:06:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 15:06:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 15:06:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 15:06:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 15:06:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 15:06:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 15:11:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 15:11:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 15:11:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 15:11:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-16 15:11:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-16 15:15:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 15:15:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 15:15:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 15:19:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 15:19:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 15:19:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 15:24:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 15:24:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 15:24:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 15:25:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 15:25:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 15:25:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 15:29:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 15:29:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 15:29:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 15:32:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 15:32:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 15:32:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 15:33:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 15:33:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 15:33:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 15:33:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 15:33:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 15:33:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 15:53:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 15:53:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 15:53:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 15:54:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 15:54:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 15:54:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 16:53:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 16:53:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 16:53:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 16:53:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 16:53:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 16:53:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 16:54:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 16:54:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 16:54:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 16:54:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 16:54:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 16:54:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 16:55:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 16:55:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 16:55:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 17:37:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-16 17:37:47 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-16 17:38:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 17:38:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 17:38:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-16 17:39:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-16 17:39:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-16 17:39:24 --> Could not find the language line "discount_this_action_is_irreversible"
