<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-03 10:08:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-03 10:08:21 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-03 10:08:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 10:08:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 10:08:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 10:08:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 10:11:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 10:11:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 10:11:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 10:15:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 10:15:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 10:15:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 10:19:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 10:19:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 10:19:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 10:21:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 10:21:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 10:21:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 10:25:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 10:25:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 10:25:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 10:27:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 10:27:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 10:27:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 10:31:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 10:31:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 10:31:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 10:34:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 10:34:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 10:34:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 10:38:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 10:38:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 10:38:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 10:39:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 10:39:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 10:39:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 10:42:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 10:42:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 10:42:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:09:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:09:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:09:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:11:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-03 11:11:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-03 11:12:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:12:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:12:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:16:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:16:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:16:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:17:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:17:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:17:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:18:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:18:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:18:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:20:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:20:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:20:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:22:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:22:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:22:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:27:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:27:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:27:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:30:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:30:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:30:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:31:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:31:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:31:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:41:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:41:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:41:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:43:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:43:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:43:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:48:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:48:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:48:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:50:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:50:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:50:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:51:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:51:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:51:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:54:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-03 11:54:01 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-03 11:54:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:54:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:54:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:55:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:55:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:55:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:56:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:56:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:56:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:57:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:57:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:57:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:59:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:59:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:59:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 11:59:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 11:59:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 11:59:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:01:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:01:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:01:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:03:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:03:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:03:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:05:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:05:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:05:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:08:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:08:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:08:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:09:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-03 12:09:06 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-03 12:09:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:09:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:09:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:09:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-03 12:09:47 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-03 12:09:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 12:09:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 12:09:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 12:09:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 12:10:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 12:10:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 12:10:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 12:10:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 12:10:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 12:10:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:10:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:10:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:13:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:13:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:13:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:15:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:15:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:15:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:19:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:19:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:19:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:22:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:22:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:22:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:23:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:23:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:23:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:26:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:26:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:26:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:42:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:42:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:42:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:44:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:44:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:44:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:46:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:46:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:46:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:51:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:51:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:51:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:52:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:52:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:52:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:53:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:53:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:53:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 12:58:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 12:58:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 12:58:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 13:03:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 13:03:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 13:03:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 13:03:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 13:03:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 13:03:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 13:04:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 13:04:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 13:04:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 13:04:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 13:04:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 13:04:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 13:05:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 13:05:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 13:05:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 13:09:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 13:09:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 13:09:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 13:15:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 13:15:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 13:15:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 13:15:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 13:15:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 13:15:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 13:15:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 13:15:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 13:15:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 13:15:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 13:15:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 13:16:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 13:16:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 13:16:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 13:17:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 13:17:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 13:17:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 14:42:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 14:42:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 14:42:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 14:42:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 14:43:00 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 14:43:00 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 14:43:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 14:43:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 14:43:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-03 16:33:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-03 16:33:16 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-03 16:33:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 16:33:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 16:33:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-03 16:35:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-03 16:35:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-03 16:35:57 --> Could not find the language line "discount_this_action_is_irreversible"
