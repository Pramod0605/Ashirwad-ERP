<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-24 00:12:44 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 00:48:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 00:48:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 00:48:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 10:52:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-24 10:52:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-24 11:01:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-24 11:01:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-24 11:02:02 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 11:02:09 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 11:02:09 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 11:09:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-24 11:09:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-24 11:15:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-24 11:15:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-24 11:16:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 11:16:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 11:16:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 11:35:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 11:35:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 11:35:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 11:55:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-24 11:55:11 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-24 12:24:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 12:24:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 12:24:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 12:28:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 12:28:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 12:28:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 13:09:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 13:09:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 13:09:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 13:26:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 13:26:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 13:26:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 13:44:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 13:44:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 13:44:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 13:44:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 13:44:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 13:44:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 13:53:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 13:53:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 13:53:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 13:59:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 13:59:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 13:59:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 14:00:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 14:00:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 14:00:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 14:05:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 14:05:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 14:05:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 14:13:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 14:13:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 14:13:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 14:13:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 14:13:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 14:13:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 14:15:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 14:15:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 14:15:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 14:15:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-24 14:15:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-24 14:20:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 14:20:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 14:20:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 14:23:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 14:23:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 14:23:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 14:41:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 14:41:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 14:41:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 14:41:37 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 14:41:42 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 14:41:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 14:41:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 14:41:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 14:41:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 14:42:02 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 14:42:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 14:42:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 14:42:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 14:42:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 14:42:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 15:10:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-24 15:10:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-24 15:10:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 15:10:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 15:10:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 15:11:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 15:11:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 15:11:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 15:12:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 15:12:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 15:12:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 15:13:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 15:13:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 15:13:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 15:18:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 15:18:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 15:18:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 15:23:04 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 15:23:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 15:23:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 15:23:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 15:23:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 15:23:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 15:34:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 15:34:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 15:34:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 15:37:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-24 15:37:49 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-24 15:38:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 15:38:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 15:38:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 15:40:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 15:40:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 15:40:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 15:40:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 15:40:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 15:40:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 15:44:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 15:44:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 15:44:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 15:49:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 15:49:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 15:49:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 15:52:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 15:52:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 15:52:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 16:21:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-24 16:21:48 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-24 16:21:50 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 16:22:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 16:22:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 16:22:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 16:23:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 16:23:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 16:23:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 16:25:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 16:25:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 16:25:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 16:32:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 16:32:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 16:32:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 16:34:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 16:34:20 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 16:34:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-24 16:34:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 16:34:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 16:34:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 16:35:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 16:35:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 16:35:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 16:42:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 16:42:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 16:42:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 16:43:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 16:43:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 16:43:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 17:18:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-24 17:18:55 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-24 17:19:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 17:19:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 17:19:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 17:33:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 17:33:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 17:33:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 17:33:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 17:33:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 17:33:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 17:39:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 17:39:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 17:39:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 17:40:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 17:40:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 17:40:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 17:42:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 17:42:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 17:42:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-24 17:44:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-24 17:44:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-24 17:44:53 --> Could not find the language line "discount_this_action_is_irreversible"
