<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-31 10:37:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-31 10:37:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-31 10:39:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 10:39:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 10:39:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 10:40:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 10:40:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 10:40:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 10:45:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-31 10:45:22 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-31 10:45:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 10:45:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 10:45:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 10:45:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 10:47:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 10:47:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 10:47:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 10:48:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 10:48:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 10:48:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 10:51:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 10:51:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 10:51:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 10:52:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-31 10:52:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-31 10:54:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 10:54:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 10:54:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 10:58:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 10:58:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 10:58:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:01:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:01:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:01:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:08:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:08:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:08:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:13:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:13:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:13:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:14:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:14:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:14:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:18:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:18:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:18:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:30:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:30:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:30:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:30:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-31 11:30:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-31 11:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:31:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:31:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:32:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:32:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:32:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:32:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:32:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:32:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:33:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:33:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:33:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:34:09 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3652, NULL, 2000, 'D', '')
ERROR - 2026-01-31 11:34:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:34:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:34:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:34:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:34:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:34:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:35:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:35:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:35:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:37:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:37:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:37:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:38:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:38:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:38:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:38:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:38:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:38:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:39:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:39:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:39:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:40:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:40:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:40:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:42:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:42:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:42:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:44:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:44:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:44:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:51:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 11:51:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 11:51:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 11:51:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:51:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:51:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:53:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:53:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:53:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:55:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:55:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:55:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 11:58:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 11:58:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 11:58:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:01:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:01:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:01:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:02:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:02:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:02:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:03:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:03:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:03:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:07:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:07:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:07:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:12:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:12:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:12:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:14:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:14:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:14:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:14:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:14:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:14:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:14:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:14:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:14:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:15:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:15:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:15:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:17:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 12:17:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 12:17:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 12:17:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 12:17:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 12:17:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 12:17:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 12:17:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 12:17:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 12:18:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:18:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:18:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:21:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:21:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:21:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:24:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:24:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:24:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:25:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-31 12:25:48 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-31 12:26:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 12:26:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:26:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:26:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:26:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 12:26:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 12:27:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:27:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:27:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:27:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 12:27:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 12:27:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:27:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:27:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:27:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 12:29:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:29:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:29:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:30:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:30:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:30:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:30:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:30:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:30:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:31:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:31:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:31:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:39:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:39:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:39:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:41:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:41:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:41:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:43:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:43:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:43:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:45:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:45:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:45:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:48:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:48:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:48:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:50:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:50:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:50:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:50:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:50:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:50:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:51:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:51:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:51:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:51:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:51:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:51:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:51:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:51:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:51:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:53:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:53:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:53:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:54:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:54:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:54:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:54:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:54:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:54:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:54:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:54:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:54:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:54:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:54:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:54:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 12:55:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 12:55:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 12:55:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 13:05:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 13:05:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 13:05:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 13:05:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 13:05:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 13:05:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 13:07:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 13:07:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 13:07:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 13:34:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 13:48:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 13:48:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 13:48:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:05:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:05:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:05:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:06:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:06:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:06:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:12:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:12:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:12:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:13:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 14:13:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 14:13:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-31 14:13:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:13:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:13:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:14:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:14:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:14:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:15:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:15:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:15:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:16:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:16:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:16:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:18:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:18:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:18:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:18:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:18:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:18:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:19:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:19:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:19:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:19:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:19:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:19:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:19:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:19:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:19:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:19:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:19:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:19:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:19:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:19:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:19:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:20:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:20:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:20:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:20:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:20:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:20:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:20:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:20:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:20:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:22:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:22:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:22:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:23:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:23:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:23:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:24:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:24:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:24:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:24:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:24:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:24:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:24:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:24:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:24:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:26:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:26:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:26:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:29:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:29:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:29:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:30:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:30:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:30:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:31:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:31:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:31:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:37:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:37:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:37:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:50:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-31 14:50:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-31 14:51:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:51:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:51:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:51:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:51:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:51:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 14:52:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 14:52:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 14:52:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 15:00:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 15:00:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 15:00:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 15:24:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-31 15:24:46 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-31 15:24:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 15:25:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 15:25:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 15:35:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 15:35:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 15:35:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 15:37:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 15:37:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 15:37:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 15:54:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 15:54:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 15:54:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 15:54:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 15:54:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 15:54:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 15:55:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 15:55:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 15:55:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 15:55:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 15:55:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 15:55:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 15:56:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-31 15:56:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-31 15:56:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-31 17:15:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-31 17:15:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
