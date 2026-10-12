<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-31 10:07:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-31 10:07:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-31 10:30:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-31 10:30:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-31 10:31:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 10:35:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 10:38:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 10:38:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 10:38:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 10:40:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 10:40:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 10:40:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 11:44:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-31 11:44:05 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-31 11:44:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 11:44:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 11:44:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 11:44:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 11:44:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 11:44:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 11:44:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 11:44:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 11:44:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 11:44:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 11:44:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 11:44:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 12:47:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-31 12:47:29 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-31 13:13:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 13:13:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 13:13:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 13:14:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 13:14:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 13:14:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 13:16:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 13:16:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 13:16:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 13:18:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 13:18:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 13:18:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 13:18:45 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3156, NULL, 8000, 'D', '')
ERROR - 2025-12-31 13:18:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 13:18:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 13:18:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 13:19:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 13:19:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 13:19:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 13:19:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 13:19:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 13:19:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 13:39:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 13:39:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 13:39:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 14:33:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 14:33:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 14:33:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 14:33:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 14:33:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 14:33:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 14:37:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 14:37:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 14:37:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 14:39:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 14:39:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 14:39:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 14:39:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 14:39:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 14:39:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 14:40:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 14:40:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 14:40:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 14:41:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 14:41:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 14:41:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 14:44:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-31 14:44:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-31 14:44:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 14:45:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 14:45:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 14:45:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 14:45:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 14:45:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-31 15:10:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 15:10:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 15:10:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 16:48:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-31 16:48:33 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-31 18:44:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-31 18:44:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-31 18:44:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 18:44:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 18:44:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-31 18:44:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-31 18:44:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-31 18:44:36 --> Could not find the language line "discount_this_action_is_irreversible"
