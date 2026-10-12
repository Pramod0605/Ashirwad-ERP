<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-08 09:22:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-08 09:22:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-08 09:22:46 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 09:22:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 09:22:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 09:23:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 09:23:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 09:23:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 09:23:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 09:23:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 09:23:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 09:23:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 09:23:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 09:23:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 09:41:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 09:41:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 09:41:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 09:41:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 09:41:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 09:41:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 09:42:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 09:42:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 09:42:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 09:42:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 09:42:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 09:42:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 10:01:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 10:01:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 10:01:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 10:01:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 10:02:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 10:02:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 10:22:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-08 10:22:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-08 10:22:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 10:22:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 10:22:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 10:33:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 10:33:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 10:33:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 10:33:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 10:33:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 10:33:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 10:36:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 10:36:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 10:36:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 10:37:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 10:37:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 10:37:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 10:37:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 10:37:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 10:37:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 10:45:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 10:45:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 10:45:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 11:10:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 11:10:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 11:10:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 11:15:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 11:15:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 11:15:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 11:29:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 11:29:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 11:29:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 11:42:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-08 11:42:30 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-08 11:43:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 11:43:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 11:43:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 11:44:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-08 11:44:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-08 11:44:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 11:44:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 11:44:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 11:51:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 11:51:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 11:51:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 11:51:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 11:51:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 11:51:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 11:52:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 11:52:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 11:52:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 11:58:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 11:58:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 11:58:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 11:58:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 11:58:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 11:58:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 12:00:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 12:00:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 12:00:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 12:00:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 12:00:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 12:00:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 12:07:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 12:07:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 12:07:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 12:10:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 12:10:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 12:10:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 12:18:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 12:18:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 12:18:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 12:20:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 12:20:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 12:20:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 12:21:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 12:21:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 12:21:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 12:23:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 12:23:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 12:23:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 13:13:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-08 13:13:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-08 13:13:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 13:13:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 13:13:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 13:13:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 13:13:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 13:13:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 13:19:50 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 13:19:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 13:19:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 13:20:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 13:20:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 13:20:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 13:20:12 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 13:20:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 13:20:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 13:20:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 13:20:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 13:20:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 13:25:36 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 13:25:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 13:25:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 13:25:48 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 13:25:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 13:25:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 13:25:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 13:43:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 13:43:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 13:43:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 13:45:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 13:45:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 13:45:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 13:47:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 13:47:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 13:47:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:03:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:03:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:03:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:13:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:13:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:13:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:23:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:23:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:23:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:28:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:28:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:28:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:31:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:31:56 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:31:56 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:32:19 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:32:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:32:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:32:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:33:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:33:12 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:33:12 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:33:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:33:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:33:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:33:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:34:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:34:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:34:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:34:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:34:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:34:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:35:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:35:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:35:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:36:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:36:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:36:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:37:44 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:37:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:37:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:37:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:37:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:37:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:38:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:38:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:38:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:38:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:39:37 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:39:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:39:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:40:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:40:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:40:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:40:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:40:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:40:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:40:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:41:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:41:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:41:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:41:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:41:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:41:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:43:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:43:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:43:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:43:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:43:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:43:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:43:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:43:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:43:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:43:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:43:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:43:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:44:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:44:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:44:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:45:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:45:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:45:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:46:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:46:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:46:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:46:48 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:46:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:46:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:47:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:47:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:47:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:47:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:47:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:47:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:47:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:47:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:47:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:47:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:47:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:47:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:47:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:47:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:47:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:47:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:47:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:47:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:48:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:48:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:48:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:50:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:50:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:50:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:50:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:50:22 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:50:22 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:50:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:50:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:50:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:50:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:50:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:50:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:51:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:51:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:51:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:51:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:51:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:51:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:51:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:51:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:51:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:51:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:53:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:53:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:53:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:55:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:55:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:55:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:55:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:55:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:55:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:55:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:55:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:55:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:55:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:55:58 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:55:58 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:56:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:56:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:56:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:57:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:57:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:57:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 14:57:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:58:26 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:58:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:58:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:58:45 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 14:58:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 14:58:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 14:58:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:00:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:00:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:00:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:01:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:01:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:01:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:02:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:02:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:02:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:02:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:02:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:02:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:03:05 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:03:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:03:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:03:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:04:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:04:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:04:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:04:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:04:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:04:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:05:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:05:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:05:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:05:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:05:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:05:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:06:30 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:06:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:06:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:06:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:06:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:06:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:06:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:06:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:06:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:06:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:06:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:06:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:07:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:07:13 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:07:13 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:07:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:07:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:07:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:09:46 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:10:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:10:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:10:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:10:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:11:36 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:11:36 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:12:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:12:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:12:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:12:20 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:12:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:12:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:12:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:12:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:12:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:14:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:14:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:14:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:16:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:16:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:16:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:16:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:16:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:16:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:16:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:16:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:16:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:18:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:18:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:18:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:19:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:19:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:19:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:21:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:21:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:21:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:21:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:21:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:21:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:22:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:22:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:22:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:22:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:22:44 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:22:44 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:23:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:23:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:23:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:23:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:23:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:23:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:24:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:24:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:24:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:24:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:24:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:24:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:26:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:26:46 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:26:46 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 15:26:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:26:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:26:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:35:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:35:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:35:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:36:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:36:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:36:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:36:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:36:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:36:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:38:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:38:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:38:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:38:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:38:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:38:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:46:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:46:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:46:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:46:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:46:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:46:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:48:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:48:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:48:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:49:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:49:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:49:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:50:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:50:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:50:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 15:52:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 15:52:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 15:52:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 16:03:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 16:03:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 16:03:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 16:05:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 16:05:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 16:05:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 16:05:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 16:06:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 16:06:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 16:22:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-08 16:22:59 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-08 16:23:01 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 16:23:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 16:23:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 16:23:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 16:23:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 16:23:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 16:23:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 16:23:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 16:23:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 17:13:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-08 17:13:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-08 17:13:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 17:13:46 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 17:13:46 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 17:13:54 --> Could not find the language line "not_generated"
ERROR - 2026-02-08 17:14:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 17:14:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 17:14:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-08 17:17:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-08 17:17:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-08 17:17:27 --> Could not find the language line "discount_this_action_is_irreversible"
