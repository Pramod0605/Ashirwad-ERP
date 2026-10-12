<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-13 08:40:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 08:40:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 08:41:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 08:41:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 08:41:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 08:43:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 08:43:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 08:43:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 08:43:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 08:43:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 08:43:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 09:37:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 09:37:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 09:38:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 09:38:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 09:38:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 09:39:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 09:39:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 09:39:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 10:48:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 10:48:37 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 10:48:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 10:48:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 10:48:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 10:49:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 10:49:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 11:05:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 11:06:00 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 11:06:00 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 11:06:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 11:06:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 11:06:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 11:10:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 11:10:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 11:10:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 11:10:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 11:10:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 11:10:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 11:11:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 11:11:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 11:11:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 11:13:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 11:13:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 11:13:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 11:13:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 11:13:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 11:13:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 11:15:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 11:15:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 11:15:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 11:17:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 11:17:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 11:17:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 11:17:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 11:17:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 11:17:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 11:19:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 11:19:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 11:19:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 11:20:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 11:20:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 11:20:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 11:20:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 11:20:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 11:20:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 11:20:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 11:20:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 11:20:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 11:21:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 11:21:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 11:21:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 11:21:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 11:21:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 11:21:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 11:22:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 11:22:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 11:22:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:02:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:02:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:02:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:02:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:02:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:02:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:04:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:04:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:04:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:06:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:07:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:07:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:07:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:07:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:07:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:09:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 12:09:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 12:09:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:09:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:09:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:09:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 12:09:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 12:09:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:09:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:09:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:10:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:10:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:10:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:11:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:11:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:11:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:12:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:12:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:12:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:12:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:12:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:12:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:13:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:13:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:13:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:15:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:15:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:15:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:15:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:15:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:15:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:15:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:15:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:15:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:15:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:16:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:16:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:16:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:16:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:16:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:16:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:16:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:16:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:16:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:17:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:17:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:17:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:17:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:17:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:17:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:17:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:17:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:17:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:19:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:19:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:19:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:19:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:19:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:19:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:19:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:19:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:19:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:20:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:20:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:20:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:20:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:20:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:20:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:20:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:21:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:21:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:21:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:21:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:21:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:21:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:21:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:21:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:21:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:21:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:21:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:21:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:22:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:22:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:22:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:23:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:23:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:23:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:24:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:24:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:24:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:24:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:24:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:24:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:24:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:24:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:24:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:24:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:24:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:24:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:24:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:24:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:24:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:25:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:25:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:25:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:25:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:25:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:25:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:25:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:25:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:25:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:25:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:25:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:25:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:25:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:25:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:25:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:25:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:26:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:26:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:26:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:26:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:26:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:26:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:26:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:30:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:30:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:30:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:30:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:30:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:30:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:31:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:31:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:31:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:31:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:31:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:31:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:34:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:34:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:34:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:34:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:34:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:34:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:37:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 12:37:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 12:37:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:37:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:38:00 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:38:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:38:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:38:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:38:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:39:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:39:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:39:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:39:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:39:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:40:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:41:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:41:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 12:41:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 12:41:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 12:41:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 12:43:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:00:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 13:00:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 13:01:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:01:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:01:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:01:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 13:01:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 13:02:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 13:02:56 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 13:03:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 13:03:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 13:05:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:05:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:05:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:06:18 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:06:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:06:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:06:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:06:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:06:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:06:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:06:58 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:06:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:07:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:07:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:07:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:07:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:07:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:07:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:07:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:07:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:07:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:08:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:08:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:08:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:08:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:08:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:08:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:08:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:08:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:08:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:08:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:08:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:08:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:08:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:08:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:08:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:08:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:08:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:09:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:09:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:09:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:09:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:09:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:09:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:09:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:09:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:09:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:09:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:09:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:10:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:10:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:10:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:10:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:10:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:10:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:10:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:11:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:11:58 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:11:58 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:12:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:12:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:12:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:12:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:13:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:13:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:13:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:13:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:13:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:13:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:13:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:13:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:14:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:14:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:14:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:14:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:14:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:14:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:15:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:15:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:15:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:16:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:16:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:16:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:21:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:21:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:21:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:21:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:21:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:21:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:21:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:21:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:21:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:22:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:22:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:22:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:22:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:22:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:22:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:22:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:23:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:23:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:23:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:24:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:24:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:24:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:24:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:24:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:24:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:24:18 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:24:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:24:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:24:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:24:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:24:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:24:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:25:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:25:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:25:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:27:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:27:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:27:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:27:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:27:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:27:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:29:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:29:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:29:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:29:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:29:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:29:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:31:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:31:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:31:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:31:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:31:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:31:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:32:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:32:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:32:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:32:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:32:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:32:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:34:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:34:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:34:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:35:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:35:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:35:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:35:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:35:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:35:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:37:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:37:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:37:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:37:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:37:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:37:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:38:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:38:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:38:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:39:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:39:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:39:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:39:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 13:39:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 13:39:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:39:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:39:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:40:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:40:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:40:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:41:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:41:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:41:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:42:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:42:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:42:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:42:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:42:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:42:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:43:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:43:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:43:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:44:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:44:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:44:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:45:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:45:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:45:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:45:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:45:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:45:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:47:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:47:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:47:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:49:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:49:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:49:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:49:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:49:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:49:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:50:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:50:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:50:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:51:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:52:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 13:52:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 13:52:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:52:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:52:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:53:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:53:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:53:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:54:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:54:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:54:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:54:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:54:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:54:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:54:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:54:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:54:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:55:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:55:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:55:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:55:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:55:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:55:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:55:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:55:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:55:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:56:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:56:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:56:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:56:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:56:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:56:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:56:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:56:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:56:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:56:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:57:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:57:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:57:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:57:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:57:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:57:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:57:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:57:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:57:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:57:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:57:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:57:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:57:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:57:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:58:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:58:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:58:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:58:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:58:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:58:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 13:58:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 13:58:56 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 13:59:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:59:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:59:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:59:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:59:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:59:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:59:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:59:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 13:59:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 13:59:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 13:59:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:00:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:00:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:00:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:00:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:00:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:00:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:00:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:00:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:00:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:00:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:00:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:00:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:00:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:00:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:00:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:00:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:00:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:00:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:01:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:01:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:01:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:01:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:01:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:01:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:02:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:02:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:02:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:03:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:03:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:03:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:03:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:03:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:03:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:03:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:03:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:03:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:04:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:04:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:04:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:04:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:04:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:04:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:04:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:04:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:04:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:04:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:06:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:06:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:06:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:06:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:06:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:06:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:06:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:06:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:06:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:06:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:07:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:07:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:07:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:11:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:11:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:11:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:11:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:11:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:11:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:12:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:12:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:12:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:12:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:12:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:12:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:12:45 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:12:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:12:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:13:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:13:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:13:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:14:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:14:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:14:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:14:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:14:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:14:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:15:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:15:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:15:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:15:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:15:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:15:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:16:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:16:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:16:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:16:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:16:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:16:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:17:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:17:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:17:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:17:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:17:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:17:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:20:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:20:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:20:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:20:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:20:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:20:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:21:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:21:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:21:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:21:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:21:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:21:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:21:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:21:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:21:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:21:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:21:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:21:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:25:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 14:25:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 14:26:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:26:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:26:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:26:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:26:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:26:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:26:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:26:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:26:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:26:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:26:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:26:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:26:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:27:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:27:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:27:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:27:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:27:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:27:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:27:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:43:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:43:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:43:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:49:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:49:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:49:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:50:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:50:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:50:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:51:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:51:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:51:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:51:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:51:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:51:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:51:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:52:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:52:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:52:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:52:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:52:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:52:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:53:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:53:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:53:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:53:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:53:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:53:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:53:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:53:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:53:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:54:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:54:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:54:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:54:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:55:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:55:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:55:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:55:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:55:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:55:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:55:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:55:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:55:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:55:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:56:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:56:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:56:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 14:56:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 14:56:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:56:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:56:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:58:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:58:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:58:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 14:58:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:58:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:58:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 14:58:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 14:58:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 14:58:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:01:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:01:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:01:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:01:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:01:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:01:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:01:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:01:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:01:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:04:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:04:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:04:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:04:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 15:04:31 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 15:04:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:04:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:04:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:07:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:07:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:07:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:09:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:09:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:09:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:10:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:10:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:10:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:10:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:10:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:10:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:11:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:11:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:11:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:12:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:12:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:12:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:14:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:14:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:14:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:28:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:28:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:28:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:29:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:29:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:29:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:32:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:33:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:33:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:33:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:33:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:33:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:34:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:34:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:34:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:34:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:34:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:34:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:35:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:35:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:35:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:37:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:37:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:37:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:45:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:45:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:45:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:48:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:48:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:48:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:48:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:48:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:48:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:49:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:50:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-13 15:57:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 15:57:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 15:57:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:57:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:57:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 15:59:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 15:59:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 15:59:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 16:04:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 16:04:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 16:04:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 16:08:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 16:08:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 16:08:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 16:21:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 16:21:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 16:21:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 19:22:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 19:22:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 21:03:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-13 21:03:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-13 21:03:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 21:03:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 21:03:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 21:06:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 21:06:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 21:06:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 21:07:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 21:07:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 21:07:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 21:10:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 21:10:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 21:10:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 21:11:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 21:11:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 21:11:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 21:12:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 21:12:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 21:12:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 21:14:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 21:14:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 21:14:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 21:15:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-13 21:15:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-13 21:15:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-13 21:23:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-13 21:23:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
