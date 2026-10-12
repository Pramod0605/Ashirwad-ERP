<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-23 10:45:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 10:45:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 10:45:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 11:01:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-23 11:01:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-23 11:38:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 11:38:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 11:38:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 11:41:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 11:41:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 11:41:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 11:42:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 11:42:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 11:42:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 11:44:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 11:44:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 11:44:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 13:18:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-23 13:18:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-23 13:18:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 13:18:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 13:18:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 13:18:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-23 13:18:34 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-23 13:18:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 13:18:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 13:18:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 13:20:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 13:20:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 13:20:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 13:21:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 13:21:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 13:21:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:12:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:12:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:12:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:12:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:12:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:12:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:25:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:25:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:25:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:26:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:26:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:26:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:26:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:26:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:26:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:26:59 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4003, NULL, 6000, 'D', '')
ERROR - 2026-02-23 14:27:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:27:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:27:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:32:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-23 14:32:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-23 14:32:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-23 14:34:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:34:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:34:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:35:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:35:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:35:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:36:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:36:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:36:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:38:56 --> Could not find the language line "not_generated"
ERROR - 2026-02-23 14:40:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:40:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:40:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:40:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:40:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:40:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:40:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:40:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:40:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:42:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:42:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:42:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:43:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:43:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:43:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:44:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:44:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:44:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:44:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:44:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:44:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:46:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:46:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:46:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:46:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:46:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:46:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:47:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:47:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:47:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:47:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:47:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:47:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:47:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:47:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:47:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:48:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:48:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:48:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:50:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:50:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:50:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:52:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:52:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:52:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:54:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:54:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:54:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:55:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:55:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:55:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:55:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:55:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:55:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:55:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:55:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:55:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 14:59:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 14:59:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 14:59:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 15:05:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 15:05:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 15:05:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 15:07:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 15:07:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 15:07:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 15:09:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 15:09:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 15:09:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 15:13:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 15:13:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 15:13:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 15:56:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-23 15:56:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-23 17:27:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-23 17:27:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-23 17:49:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-23 17:49:26 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-23 17:49:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 17:49:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 17:49:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-23 17:52:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-23 17:52:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-23 17:52:01 --> Could not find the language line "discount_this_action_is_irreversible"
