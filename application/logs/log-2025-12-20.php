<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-20 10:18:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 10:18:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 10:18:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 10:22:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 10:22:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 10:22:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 10:23:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-20 10:23:15 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-20 10:24:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 10:25:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 10:25:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 10:29:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-20 10:29:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-20 10:29:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 10:29:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 10:29:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 10:29:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 10:30:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 10:30:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 10:30:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 10:33:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 10:33:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 10:33:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 10:33:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-20 10:33:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-20 10:59:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-20 10:59:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-20 10:59:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 10:59:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 10:59:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 10:59:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 10:59:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 10:59:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 11:00:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 11:00:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 11:00:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 11:04:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-20 11:04:14 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-20 11:04:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-20 11:04:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-20 11:06:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 11:06:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 11:06:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 11:06:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 11:06:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 11:06:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 11:08:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 11:08:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 11:08:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 11:09:33 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3031, NULL, 5500, 'D', '')
ERROR - 2025-12-20 11:09:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 11:09:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 11:09:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 11:11:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 11:11:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 11:11:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 11:11:27 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3033, NULL, 5500, 'D', '')
ERROR - 2025-12-20 11:11:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 11:11:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 11:11:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 12:36:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 12:36:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 12:36:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 12:48:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-20 12:48:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-20 12:48:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 12:48:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 12:48:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 12:48:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 12:48:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 12:48:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 13:01:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 13:01:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 13:01:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 13:03:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 13:03:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 13:03:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 13:06:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 13:06:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 13:06:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 13:07:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 13:07:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 13:07:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 13:07:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 13:07:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 13:10:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 14:04:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-20 14:04:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-20 14:04:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 14:05:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 14:05:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 14:05:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 14:05:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 14:05:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 14:15:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 14:15:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 14:15:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 14:16:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 14:16:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 14:16:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 14:46:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-20 14:46:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-20 14:49:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 14:49:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 14:49:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 14:51:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 14:51:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 14:51:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 14:53:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 14:53:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 14:53:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 14:55:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-20 14:55:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-20 14:56:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 14:56:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 14:56:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 14:56:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 14:57:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 14:57:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 14:57:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 14:58:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 14:58:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 14:58:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 14:59:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 14:59:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 14:59:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 14:59:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 14:59:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 14:59:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:00:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:00:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:00:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:00:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:00:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:00:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:11:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:11:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:11:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:11:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:11:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:11:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:22:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:22:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:22:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:22:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:22:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:22:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:23:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:23:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:23:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:24:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:24:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:24:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:25:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:25:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:25:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:27:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:27:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:27:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:28:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:28:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:28:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:29:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:29:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:29:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:30:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:30:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:30:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:31:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:31:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:31:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:32:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:32:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:32:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:35:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:35:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:35:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:38:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 15:38:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 15:38:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 15:38:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:38:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:38:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:40:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:40:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:40:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:40:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:40:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:40:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:41:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:41:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:41:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:42:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:42:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:42:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:43:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:43:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:43:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:43:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:43:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:43:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:44:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:44:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:44:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:44:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:44:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:44:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:47:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:47:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:47:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:48:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:48:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:48:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:48:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:48:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:48:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:49:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:49:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:49:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:49:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:49:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:49:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:50:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:50:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:50:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:50:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:50:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:50:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:51:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:51:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:51:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:52:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:52:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:52:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:52:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:52:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:52:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:52:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:52:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:52:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:53:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:53:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:53:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:54:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:54:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:54:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:54:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:54:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:54:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:55:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:55:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:55:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:55:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:55:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:55:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:56:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:56:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:56:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:57:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:57:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:57:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:58:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:58:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:58:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:58:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:58:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:58:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 15:59:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 15:59:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 15:59:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:02:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:02:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:02:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:02:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:02:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:02:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:02:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:02:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:02:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:04:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:04:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:04:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:04:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:04:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:04:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:05:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:05:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:05:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:06:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:06:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:06:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:06:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:06:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:06:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:06:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:06:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:06:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:07:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:07:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:07:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:07:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:07:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:07:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:07:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:07:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:07:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:07:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:07:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:07:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:08:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:08:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:08:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:08:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:08:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:08:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:08:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:08:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:08:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:09:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:09:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:09:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:09:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:09:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:09:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:11:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:11:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:11:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:15:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:15:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:15:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:17:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:17:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:17:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:18:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:18:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:18:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:18:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:18:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:18:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:18:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:18:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:18:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:18:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:18:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:18:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:19:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:19:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:19:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:19:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:19:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:19:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:20:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:20:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:20:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:20:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:20:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:20:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:20:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:20:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:20:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:21:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:21:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:21:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:21:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 16:21:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 16:21:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-20 16:21:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:21:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:21:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:23:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:23:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:23:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:23:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:23:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:23:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:23:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:23:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:23:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:25:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:25:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:25:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:25:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:25:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:25:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:27:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:27:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:27:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:29:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:29:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:29:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:29:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:29:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:29:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:30:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:30:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:30:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:30:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:30:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:30:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:30:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:30:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:30:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:30:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:30:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:30:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:34:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:34:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:34:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:35:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:35:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:35:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:35:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:35:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:35:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-20 16:35:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-20 16:35:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-20 16:35:58 --> Could not find the language line "discount_this_action_is_irreversible"
