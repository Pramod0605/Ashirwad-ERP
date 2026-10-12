<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-26 10:57:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-26 10:57:48 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-26 12:17:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-26 12:17:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-26 12:33:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-26 12:33:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-26 12:35:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-26 12:35:14 --> Could not find the language line "student1"
ERROR - 2026-03-26 12:35:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-26 12:35:18 --> Could not find the language line "student1"
ERROR - 2026-03-26 12:35:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-26 12:51:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-26 12:51:21 --> Could not find the language line "student1"
ERROR - 2026-03-26 12:51:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-26 12:51:25 --> Could not find the language line "student1"
ERROR - 2026-03-26 14:21:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 14:21:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 14:21:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 14:24:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 14:24:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 14:24:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 14:49:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 14:49:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 14:49:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 14:50:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 14:50:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 14:50:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 14:52:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 14:52:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 14:52:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 14:53:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 14:53:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 14:53:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 14:53:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 14:53:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 14:53:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 14:54:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 14:54:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 14:54:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 14:54:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 14:54:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 14:54:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 14:57:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 14:57:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 14:57:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 14:58:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 14:58:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 14:58:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 14:58:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 14:58:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 14:58:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 14:59:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 14:59:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 14:59:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 14:59:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 14:59:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 14:59:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:24:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:24:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:24:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:25:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:25:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:25:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:28:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:28:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:28:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:30:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:30:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:30:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:32:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:32:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:32:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:34:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:34:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:34:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:35:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:35:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:35:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:35:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:35:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:35:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:35:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:35:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:35:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:41:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:41:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:41:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:42:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:42:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:42:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:42:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:42:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:42:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:43:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-26 15:43:15 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-26 15:50:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:50:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:50:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:53:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:53:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:53:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:54:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:54:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:54:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:55:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:55:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:55:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:55:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:55:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:55:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:55:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:55:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:55:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:57:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-26 15:57:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-26 15:58:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 15:58:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 15:58:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 15:58:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-26 15:58:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-26 15:59:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-26 15:59:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-26 15:59:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-26 15:59:05 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-26 15:59:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-26 15:59:07 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-26 15:59:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-26 15:59:11 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-26 16:00:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:00:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:00:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:01:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:01:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:01:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:01:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:01:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:01:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:01:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:01:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:01:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:02:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:02:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:02:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:06:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:06:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:06:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:06:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:06:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:06:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:06:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:06:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:06:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:06:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:06:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:06:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:26:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:26:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:26:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:27:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:27:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:27:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:28:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:28:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:28:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:29:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:29:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:29:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:31:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:31:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:31:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:34:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:34:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:34:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:34:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:34:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:34:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:39:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:39:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:39:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:39:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:39:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:39:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:40:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:40:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:40:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:40:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:40:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:40:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 16:57:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 16:57:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 16:57:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:02:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:02:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:02:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:03:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:03:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:03:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:03:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:03:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:03:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:03:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:03:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:03:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:06:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:06:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:06:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:07:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:07:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:07:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:08:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:08:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:08:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:09:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:09:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:09:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:10:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:10:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:10:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:21:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:21:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:21:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:24:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:24:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:24:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:24:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:24:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:24:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:26:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:26:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:26:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:28:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:28:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:28:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:29:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:29:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:29:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:29:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:29:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:29:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:30:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:30:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:30:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:31:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:31:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:31:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:34:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:34:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:34:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:34:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:34:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:34:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:34:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:34:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:34:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:34:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:34:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:34:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:38:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:38:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:38:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:38:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:38:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:38:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:38:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:38:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:38:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:38:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:38:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:38:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:42:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:42:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:42:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:42:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:42:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:42:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:42:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:42:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:42:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:44:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:44:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:44:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:45:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:45:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:45:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:49:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:49:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:49:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:49:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:49:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:49:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:49:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:49:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:49:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:52:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:52:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:52:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:54:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:54:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:54:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:54:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-26 17:54:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-26 17:56:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:56:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:56:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:56:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:56:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:56:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:56:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:56:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:56:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:56:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:56:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:56:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 17:58:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 17:58:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 17:58:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 18:01:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 18:01:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 18:01:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 18:02:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 18:02:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 18:02:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 18:03:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 18:03:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 18:03:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 18:04:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 18:04:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 18:04:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 18:06:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 18:06:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 18:06:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 18:06:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 18:06:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 18:06:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 18:12:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 18:12:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 18:12:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 19:08:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 19:08:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 19:08:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 19:28:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 19:28:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 19:28:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 19:28:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 19:28:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 19:28:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 19:28:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 19:28:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 19:28:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 19:30:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 19:30:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 19:30:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 19:35:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 19:35:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 19:35:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 19:36:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 19:36:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 19:36:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 19:37:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 19:37:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 19:37:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 19:41:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 19:41:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 19:41:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-26 19:43:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-26 19:43:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-26 19:43:18 --> Could not find the language line "discount_this_action_is_irreversible"
