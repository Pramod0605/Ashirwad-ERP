<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-30 10:39:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-30 10:39:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-30 10:40:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 10:40:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 10:40:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 10:40:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 10:40:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 10:40:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 11:08:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-30 11:08:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-30 11:09:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 11:09:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 11:09:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 13:05:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 13:05:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 13:05:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 13:08:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 13:08:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 13:08:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 13:08:32 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3148, NULL, 3500, 'D', '')
ERROR - 2025-12-30 13:08:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 13:08:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 13:08:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 13:08:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 13:08:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 13:08:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 13:10:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 13:10:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 13:10:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 13:10:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 13:10:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 13:10:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 13:49:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 13:49:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 13:49:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 13:52:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 13:52:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 13:52:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 13:52:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 13:52:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 13:52:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 14:11:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-30 14:11:06 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-30 14:11:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 14:11:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 14:11:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 14:11:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 14:11:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 14:11:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 14:11:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 14:12:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 14:12:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 14:12:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 14:12:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 14:12:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 14:12:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 14:15:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-30 14:15:31 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-30 14:15:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 14:15:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 14:15:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 14:15:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 14:16:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 14:16:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 14:16:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 14:26:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-30 14:26:18 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-30 14:26:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 14:26:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 14:26:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 14:26:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 14:26:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 14:26:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 15:07:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 15:07:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 15:07:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 15:08:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 15:08:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 15:08:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 15:58:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 15:58:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 15:58:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-30 15:58:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 15:58:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 15:58:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 16:01:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-30 16:01:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-30 16:01:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 16:01:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 16:01:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 16:02:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 16:02:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 16:02:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 16:02:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-30 16:02:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-30 16:02:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-30 17:19:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-30 17:19:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-30 17:21:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-30 17:21:16 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-30 17:27:18 --> Could not find the language line "not_generated"
