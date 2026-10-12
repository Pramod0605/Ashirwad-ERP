<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-22 09:57:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 09:57:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 09:57:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:03:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-22 10:03:18 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-22 10:03:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:03:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:03:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:03:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:03:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:03:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:06:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:06:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:06:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:06:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-22 10:06:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-22 10:07:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:07:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:07:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:07:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:07:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:07:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:07:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:07:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:07:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:08:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:08:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:08:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:08:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:08:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:08:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:09:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:09:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:09:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:09:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:09:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:09:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:09:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:09:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:09:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:10:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:10:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:10:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:10:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:10:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:10:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:11:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:11:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:11:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:12:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:12:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:12:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:12:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:12:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:12:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:12:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:13:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:13:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:13:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:13:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:13:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:20:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:20:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:20:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:20:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:20:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:20:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:25:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:25:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:25:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 10:25:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:25:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:25:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:25:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:25:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:25:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:29:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:29:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:29:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:35:06 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3535, NULL, 6000, 'D', '')
ERROR - 2026-01-22 10:35:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:35:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:35:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:40:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:40:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:40:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:40:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-22 10:40:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-22 10:42:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:42:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:42:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:46:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:46:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:46:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:47:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:47:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:47:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:48:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:48:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:48:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:51:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:51:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:51:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:52:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:52:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:52:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:53:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:53:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:53:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:53:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:53:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:53:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:55:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:55:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:55:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:55:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:55:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:55:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 10:55:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 10:55:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 10:55:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:06:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-22 11:06:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-22 11:06:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-22 11:06:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-22 11:06:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:06:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:06:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:06:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:06:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:06:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:07:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-22 11:07:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-22 11:07:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:07:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:07:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:08:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:08:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:08:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:09:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:09:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:09:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:12:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:12:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:12:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:13:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:13:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:13:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:13:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:13:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:13:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:13:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:13:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:13:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:16:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:16:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:16:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:22:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:22:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:22:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:23:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:23:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:23:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:23:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:23:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:23:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:30:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:30:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:30:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:44:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:44:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:44:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:49:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:49:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:49:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 11:51:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 11:51:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 11:51:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:01:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:01:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:01:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:01:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:01:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:01:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:02:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:02:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:02:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:04:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:04:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:04:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:05:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:05:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:05:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:06:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:06:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:06:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:13:00 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:13:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:13:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:13:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:16:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:16:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:16:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:16:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:16:18 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:16:18 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:16:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:16:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:16:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:17:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:17:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:17:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:20:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:20:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:20:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:22:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:22:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:22:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:29:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:29:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:29:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:29:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:29:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:29:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:30:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:30:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:30:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:30:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:30:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:30:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:33:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:33:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:33:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:33:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:33:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:33:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:36:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:36:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:36:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:36:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:36:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:36:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:36:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:36:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:37:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 12:37:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 12:37:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 12:38:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 12:40:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 13:01:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 13:01:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 13:01:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 13:05:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 13:05:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 13:05:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 13:07:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 13:07:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 13:07:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 13:09:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 13:09:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 13:09:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 13:19:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 13:19:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 13:19:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 13:31:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 13:31:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 13:31:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 13:59:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 13:59:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 13:59:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:15:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:15:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:15:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:15:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:15:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:15:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:16:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-22 14:16:06 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-22 14:16:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:16:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:16:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:18:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:19:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:19:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:19:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:19:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:19:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:19:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:20:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:20:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:20:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:21:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:21:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:21:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:21:33 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3552, NULL, 7000, 'D', '')
ERROR - 2026-01-22 14:21:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:21:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:21:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:21:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:21:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:21:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:21:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:21:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:21:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:21:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:21:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:21:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:22:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:22:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:22:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:22:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:22:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:22:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:22:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:22:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:22:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:22:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:23:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:23:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:23:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:23:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:23:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:23:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:23:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:23:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:24:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:24:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:24:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:24:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:24:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:24:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:26:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:26:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:26:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:26:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:26:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:26:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:28:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:28:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:28:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:35:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:35:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:35:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:37:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:37:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:37:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:37:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:37:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:37:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:38:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:38:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:38:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:40:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:40:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:40:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:42:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:42:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:42:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:42:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:42:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:42:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:45:45 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:45:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:45:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:46:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:46:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:46:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:48:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:48:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:48:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:49:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:49:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:49:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:50:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:50:01 --> Could not find the language line "student1"
ERROR - 2026-01-22 14:50:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:50:06 --> Could not find the language line "student1"
ERROR - 2026-01-22 14:50:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:50:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:50:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:50:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:51:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:51:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:51:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:52:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:52:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:52:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:53:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:53:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:53:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:53:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:53:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:53:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:54:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:54:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:54:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 14:54:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:54:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:54:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 14:54:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 14:54:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 14:54:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:01:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:01:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:01:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:03:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:03:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:03:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:06:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:06:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:06:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:07:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:07:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:07:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:07:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:07:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:07:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:08:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:08:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:08:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:10:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:10:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:10:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:11:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:11:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:11:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:12:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:12:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:12:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:13:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:13:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:13:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:13:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:13:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:13:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:15:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:15:58 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:15:58 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:16:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:16:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:16:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:18:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:18:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:18:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:18:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:18:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:18:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:19:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:19:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:19:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:19:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:19:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:19:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:20:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:20:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:20:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:20:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:20:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:20:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:20:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:20:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:20:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:21:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:21:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:21:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:21:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:21:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:21:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:21:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:21:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:21:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:33:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:33:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:33:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:34:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:34:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:34:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:35:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:35:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:35:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:35:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:35:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:35:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:37:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:37:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:37:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:38:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:38:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:38:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:38:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:38:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:38:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:38:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:38:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:38:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:38:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:39:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:39:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 15:39:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:39:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:39:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:39:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:39:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:39:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:43:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:43:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:43:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:44:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:44:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:44:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:45:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:45:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:45:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:46:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:46:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:46:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:49:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:49:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:49:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:52:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:52:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:52:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:52:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:52:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:52:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:53:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:53:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:53:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 15:54:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 15:54:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 15:54:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 16:00:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 16:00:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 16:00:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 16:02:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 16:02:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 16:02:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 16:02:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 16:02:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 16:02:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 16:03:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 16:03:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 16:03:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 16:04:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 16:04:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 16:04:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 16:05:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 16:05:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 16:05:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 16:12:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 16:13:00 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 16:13:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 16:13:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 16:13:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 16:13:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 16:27:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 16:27:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 16:27:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 16:34:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 16:34:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 16:34:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 16:36:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 16:36:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 16:36:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 16:36:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 16:36:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 16:36:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 16:39:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 16:39:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 16:39:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-22 16:39:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 16:39:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 16:39:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 16:41:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 16:41:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 16:41:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 16:41:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 16:41:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 16:41:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 16:45:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-22 16:45:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-22 16:45:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 16:45:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 16:45:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 16:46:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 16:46:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 16:46:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 17:13:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-22 17:13:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-22 17:14:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-22 17:14:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-22 17:14:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-22 17:14:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-22 17:17:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-22 17:18:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-22 17:18:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-22 17:27:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-22 17:37:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-22 17:38:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-22 17:39:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-22 17:40:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-22 17:46:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-22 17:47:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-22 17:48:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-22 18:16:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 18:16:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 18:16:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-22 18:35:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-22 18:35:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-22 18:35:41 --> Could not find the language line "discount_this_action_is_irreversible"
