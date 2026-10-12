<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-16 09:46:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-16 09:46:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-16 09:46:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 09:46:44 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 09:46:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 09:47:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 09:47:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 09:47:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 09:51:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 09:52:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 09:52:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 09:52:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 09:54:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 09:55:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 09:55:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 09:55:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 09:56:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 09:56:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 09:56:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 09:56:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 09:56:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 09:56:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 09:57:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 09:57:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 09:57:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 09:57:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 09:57:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 09:57:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:00:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:01:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:01:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:01:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:01:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:01:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:02:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:02:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:02:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:03:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:03:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:03:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:03:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:03:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:03:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:04:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-16 10:04:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-16 10:04:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:04:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:04:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:05:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:05:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:05:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:07:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:08:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-16 10:08:52 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-16 10:10:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:10:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:10:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:10:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-16 10:10:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-16 10:11:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:11:32 --> Could not find the language line "student1"
ERROR - 2026-03-16 10:11:44 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:11:44 --> Could not find the language line "student1"
ERROR - 2026-03-16 10:11:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:11:56 --> Could not find the language line "student1"
ERROR - 2026-03-16 10:12:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:13:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-16 10:13:47 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-16 10:14:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:14:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:14:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:15:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:15:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:15:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:15:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:15:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:15:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:17:51 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:17:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:17:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:17:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:17:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:18:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:18:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:18:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:18:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:18:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:18:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:18:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:18:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:19:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:19:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:19:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:19:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:19:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:19:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:20:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:20:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:20:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:20:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:20:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:20:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:20:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:20:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:20:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:20:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-16 10:20:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-16 10:21:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:21:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:21:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:21:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-16 10:21:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-16 10:21:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:21:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:21:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:21:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:21:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:21:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:22:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:22:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:22:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:24:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:24:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:24:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:24:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:24:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:24:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:26:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:26:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:26:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:26:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:26:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:26:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:26:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:37:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:37:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:37:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:41:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:41:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:41:44 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:41:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:41:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:41:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:42:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:42:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:42:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:42:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:42:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:42:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:43:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:43:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:43:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:43:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:43:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:43:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:44:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:44:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:44:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:44:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:44:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:44:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:46:51 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:48:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:48:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:48:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:48:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:48:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:48:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:49:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:49:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:49:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:50:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:50:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:50:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:50:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:50:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:50:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:51:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 10:51:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:51:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:51:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:51:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:51:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:51:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:52:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:52:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:52:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:52:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:52:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:52:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:53:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:53:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:53:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:54:49 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4189, NULL, 7500, 'D', '')
ERROR - 2026-03-16 10:54:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:54:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:54:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:55:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:55:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:55:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 10:58:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 10:58:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 10:58:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:01:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:01:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:01:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:08:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:08:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:08:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:09:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:09:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:09:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:13:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:13:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:13:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:13:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:13:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:13:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:14:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:14:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:14:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:17:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:17:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:17:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:19:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:19:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:19:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:23:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 11:23:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 11:23:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 11:23:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:23:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:23:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:24:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:24:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:24:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:26:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:26:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:26:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:29:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:29:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:29:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:32:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:32:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:32:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:32:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:32:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:32:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:32:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:32:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:32:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:35:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:35:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:35:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:35:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:35:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:35:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:36:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:36:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:36:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:39:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:39:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:39:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:40:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:40:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:40:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:41:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:41:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:41:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:44:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:44:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:44:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:44:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:44:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:44:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:44:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:44:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:44:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:47:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:47:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:47:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:47:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:47:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:47:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:48:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:48:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:48:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:49:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:49:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:49:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:50:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:50:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:50:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:51:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:51:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:51:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:55:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:55:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:55:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:56:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:56:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:56:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 11:56:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 11:56:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 11:56:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:04:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:04:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:04:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:08:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:08:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:08:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:10:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 12:11:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 12:11:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 12:11:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:11:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:11:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:12:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:12:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:12:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:14:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:14:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:14:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:16:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:16:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:16:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:19:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:19:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:19:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:20:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:20:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:20:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:21:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:21:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:21:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:23:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:23:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:23:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:28:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:28:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:28:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:28:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:28:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:28:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:30:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:30:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:30:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:30:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:30:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:30:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:30:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:30:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:30:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:31:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:31:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:31:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:31:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:31:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:31:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:32:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:32:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:32:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:32:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:32:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:32:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:33:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:33:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:33:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:33:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:33:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:33:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:34:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:34:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:34:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:34:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:34:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:34:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:35:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:35:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:35:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:37:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:37:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:37:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:37:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:37:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:37:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:37:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:37:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:37:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:38:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:38:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:38:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:41:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:41:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:41:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:42:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:42:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:42:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:43:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:43:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:43:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:44:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:44:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:44:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:45:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:45:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:45:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:45:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:45:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:45:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:45:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:45:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:45:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:46:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 12:46:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 12:46:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 12:46:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 12:46:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 12:46:35 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 12:46:35 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 12:46:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 12:46:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 12:46:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 12:46:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:46:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:46:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:46:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:46:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:46:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:50:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:50:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:50:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:50:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:50:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:50:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:50:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:50:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:50:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:51:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:51:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:51:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:52:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:52:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:52:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:53:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:53:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:53:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:54:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 12:54:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 12:54:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 12:54:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:54:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:54:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:55:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:55:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:55:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:55:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:55:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:55:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:58:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:58:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:58:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:58:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:58:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:58:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 12:59:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 12:59:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 12:59:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 13:02:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 13:02:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 13:02:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 13:03:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 13:03:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 13:03:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 13:04:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 13:04:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 13:04:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 13:05:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 13:06:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 13:06:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 13:06:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 13:06:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 13:06:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 13:07:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 13:07:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 13:07:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 13:15:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 13:15:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 13:15:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 13:21:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 13:21:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 13:21:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 13:23:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 13:23:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 13:23:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 13:25:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 13:25:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 13:25:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 13:45:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 13:45:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 13:45:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 13:45:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 13:45:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 13:45:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 13:55:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 13:55:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 13:55:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:01:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:01:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:01:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:05:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:05:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:05:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:06:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:06:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:06:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:07:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:07:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:07:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:10:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:10:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:10:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:11:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:11:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:11:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:12:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:12:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:12:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:14:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:14:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:14:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:15:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:15:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:15:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:16:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:16:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:16:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:17:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:17:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:17:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:17:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:17:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:17:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:17:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:17:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:17:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:18:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:18:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:18:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:19:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:19:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:19:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:19:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:19:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:19:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:19:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:19:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:19:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:19:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:19:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:19:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:19:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:19:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:19:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:19:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:19:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:19:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:20:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:20:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:20:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:21:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:21:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:21:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:22:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:22:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:22:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:23:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:23:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:23:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:23:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:23:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:23:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:24:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:24:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:24:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:25:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:25:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:25:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:26:17 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4207, NULL, 6000, 'D', '')
ERROR - 2026-03-16 14:26:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:26:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:26:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:26:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:26:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:26:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:28:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:28:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:28:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:28:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:28:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:28:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:29:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:29:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:29:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:30:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:30:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:30:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:31:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:31:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:31:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:31:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:31:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:31:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:31:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:31:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:31:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:32:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:32:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:32:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:34:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:34:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:34:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:34:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:34:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:34:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:35:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:35:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:35:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:36:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:36:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:36:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:36:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:36:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:36:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:37:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:37:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:37:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:39:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:39:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:39:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:39:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:39:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:39:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:43:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:43:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:43:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:44:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:44:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:44:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:44:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:44:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:44:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:50:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:50:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:50:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 14:50:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:50:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:50:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:55:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:55:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:55:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 14:57:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 14:57:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 14:57:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:00:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:00:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:00:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:01:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:01:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:01:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:03:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:03:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:03:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:03:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:03:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:03:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:04:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:04:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:04:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:04:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:04:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:04:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:07:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 15:07:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 15:07:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 15:07:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:07:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:07:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:07:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:07:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:07:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:08:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:08:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:08:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:08:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:08:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:08:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:08:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:08:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:08:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:09:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:09:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:09:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:10:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:10:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:10:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:11:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:11:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:11:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:13:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:13:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:13:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:18:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:18:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:18:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:21:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:21:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:21:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:25:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 15:25:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 15:25:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 15:25:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:25:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:25:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:26:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:26:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:26:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:28:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:28:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:28:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:29:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:29:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:29:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:43:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:43:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:43:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:43:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:43:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:43:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:51:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:51:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:51:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:52:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:52:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:52:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:53:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:53:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:53:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 15:53:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 15:53:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 15:53:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 16:05:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 16:05:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 16:05:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 16:15:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 16:15:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 16:15:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 17:13:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 17:13:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 17:13:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 17:15:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 17:15:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 17:15:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 17:48:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 17:48:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 17:48:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 17:51:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-16 17:51:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-16 17:54:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 17:54:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 17:54:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 17:56:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 17:56:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 17:56:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 18:00:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 18:00:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 18:00:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 18:00:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 18:00:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 18:00:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 18:01:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 18:01:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 18:01:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 18:02:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 18:04:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 18:04:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 18:04:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 18:05:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 18:05:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 18:05:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 18:05:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 18:05:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 18:05:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 18:07:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 18:07:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 18:07:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 18:44:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-16 18:44:16 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-16 18:44:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 18:44:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 18:44:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 18:45:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 18:45:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 18:45:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 18:46:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-16 18:46:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-16 18:46:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-16 19:04:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 19:18:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-16 19:18:29 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-16 20:37:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-16 20:37:29 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-16 20:37:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-16 20:38:41 --> Could not find the language line "not_generated"
