<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-29 10:29:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-29 10:29:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-29 10:32:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-29 10:32:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-29 10:32:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 10:32:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 10:32:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 10:32:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-29 10:32:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-29 10:32:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-29 10:33:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 10:33:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 10:33:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 10:33:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 10:33:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 10:33:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 10:34:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 10:34:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 10:34:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 11:00:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-29 11:00:06 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-29 11:00:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 11:00:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 11:00:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 11:06:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 11:06:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 11:06:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 11:07:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 11:07:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 11:07:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 11:08:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 11:08:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 11:08:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 11:11:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 11:11:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 11:11:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 11:13:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 11:13:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 11:13:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 11:14:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 11:14:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 11:14:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 11:40:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 11:40:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 11:40:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 11:44:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 11:44:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 11:44:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 11:45:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 11:45:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 11:45:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 12:07:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-29 12:07:26 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-29 12:07:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 12:07:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 12:07:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 12:12:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 12:12:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 12:12:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 12:13:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 12:13:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 12:13:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 12:25:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-29 12:25:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 12:25:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 12:25:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 12:35:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-29 12:35:37 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-29 12:35:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-29 12:35:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-29 12:35:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-29 12:35:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 12:35:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 12:35:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 13:47:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 13:47:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 13:47:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 13:47:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 13:47:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 13:47:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 13:59:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 13:59:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 13:59:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 13:59:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 13:59:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 13:59:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 13:59:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 13:59:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 13:59:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 14:00:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 14:00:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 14:00:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 14:00:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 14:00:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 14:00:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 14:00:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 14:00:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 14:00:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 14:04:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 14:04:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 14:04:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 14:06:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 14:06:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 14:06:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 14:06:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 14:06:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 14:06:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 14:09:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 14:09:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 14:09:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 14:09:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 14:09:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 14:09:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 14:13:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 14:13:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 14:13:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 14:14:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 14:14:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 14:14:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 14:15:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 14:15:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 14:15:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 14:17:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 14:17:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 14:17:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 14:18:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 14:18:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 14:18:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 14:20:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 14:20:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 14:20:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 14:24:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 14:24:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 14:24:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 14:26:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 14:26:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 14:26:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:00:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:00:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:00:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:08:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:08:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:08:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:08:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:08:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:08:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:24:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:24:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:24:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:26:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:26:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:26:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:28:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-29 15:28:07 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-29 15:29:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:29:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:29:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:30:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-29 15:30:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-29 15:30:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:30:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:30:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:30:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-29 15:30:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-29 15:30:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:30:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:30:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:31:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:31:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:31:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:32:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:32:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:32:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:32:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:32:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:32:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:34:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:34:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:34:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:35:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:35:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:35:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:35:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:35:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:35:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:36:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:36:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:36:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:36:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:36:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:36:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:37:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:37:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:37:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:38:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:38:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:38:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:39:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:39:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:39:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:41:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:41:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:41:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:41:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:41:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:41:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:42:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:42:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:42:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:43:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:43:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:43:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:43:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:43:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:43:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:43:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:43:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:43:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:45:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:45:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:45:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:45:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:45:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:45:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:46:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:46:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:46:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:53:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-29 15:53:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-29 15:53:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-29 15:53:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-29 15:53:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-29 15:53:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:53:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:53:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:57:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:57:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:57:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:58:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:58:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:58:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:59:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:59:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:59:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:59:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:59:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:59:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 15:59:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 15:59:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 15:59:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 16:01:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 16:01:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 16:01:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 16:22:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 16:22:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 16:22:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 16:23:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 16:23:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 16:23:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 16:23:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-29 16:23:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-29 16:23:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 16:23:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 16:23:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 16:24:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 16:24:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 16:24:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 16:25:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 16:25:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 16:25:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 16:26:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 16:26:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 16:26:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 16:26:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 16:26:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 16:26:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 16:27:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 16:27:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 16:27:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 16:31:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-29 16:31:52 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-29 16:49:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 16:49:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 16:49:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 16:51:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 16:51:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 16:51:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 16:56:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 16:56:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 16:56:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 17:08:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 17:08:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 17:08:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 17:10:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 17:10:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 17:10:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 17:11:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 17:11:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 17:11:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 17:15:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 17:15:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 17:15:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 17:15:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 17:15:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 17:15:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 17:19:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 17:19:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 17:19:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 17:24:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 17:24:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 17:24:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 17:25:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 17:25:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 17:25:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 17:27:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 17:27:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 17:27:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-29 17:27:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-29 17:27:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-29 17:27:52 --> Could not find the language line "discount_this_action_is_irreversible"
