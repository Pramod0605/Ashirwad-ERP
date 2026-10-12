<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-30 10:32:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-30 10:32:42 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-30 10:33:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 10:33:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 10:33:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 10:35:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 10:35:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 10:35:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 10:35:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 10:35:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 10:35:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 10:51:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 10:51:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 10:51:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 11:13:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-30 11:13:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-30 11:13:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-30 11:14:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 11:14:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 11:14:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 11:14:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 11:14:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 11:14:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 11:16:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 11:16:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 11:16:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 11:34:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 11:34:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 11:34:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 11:35:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 11:35:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 11:35:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 11:39:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 11:39:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 11:39:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 11:41:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 11:41:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 11:41:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 11:43:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 11:43:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 11:43:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 11:44:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 11:44:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 11:44:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 11:45:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 11:45:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 11:45:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 11:53:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 11:53:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 11:53:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 11:55:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 11:55:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 11:55:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 11:56:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 11:56:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 11:56:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 11:57:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 11:57:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 11:57:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 11:57:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 11:57:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 11:57:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:05:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:05:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:05:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:09:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:09:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:09:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:09:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:09:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:09:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:12:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:12:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:12:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:14:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:14:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:14:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:15:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:15:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:15:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:16:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:16:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:16:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:17:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:17:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:17:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:18:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:18:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:18:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:22:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:22:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:22:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:24:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:24:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:24:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:26:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-30 12:26:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-30 12:27:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:27:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:27:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:35:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:35:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:35:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:36:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:36:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:36:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:37:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:37:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:37:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:39:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:39:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:39:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:43:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:43:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:43:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:48:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:48:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:48:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:51:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:51:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:51:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:52:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:52:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:52:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:54:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:54:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:54:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:56:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:56:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:56:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:56:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-30 12:56:46 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-30 12:57:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:57:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:57:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 12:58:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 12:58:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 12:58:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:06:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:06:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:06:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:07:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-30 13:07:00 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-30 13:07:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:07:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:07:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:07:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:07:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:07:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:07:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:07:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:07:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:08:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:08:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:08:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:08:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:08:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:08:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:09:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:09:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:09:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:11:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:11:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:11:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:11:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:11:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:11:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:11:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:11:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:11:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:12:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:12:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:12:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:12:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:12:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:12:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:12:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:12:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:12:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:13:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:13:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:13:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:15:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:15:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:15:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:15:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:15:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:15:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:16:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:16:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:16:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:16:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:16:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:16:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:48:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-30 13:48:05 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-30 13:48:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-30 13:48:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-30 13:48:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-30 13:48:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:48:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:48:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:49:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-30 13:49:01 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-30 13:49:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-30 13:49:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-30 13:49:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-30 13:49:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:49:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:49:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:50:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:50:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:50:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 13:52:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 13:52:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 13:52:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 14:06:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 14:06:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 14:06:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 14:27:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 14:27:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 14:27:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 14:27:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 14:27:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 14:27:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 14:28:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 14:28:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 14:28:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 14:28:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 14:28:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 14:28:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 14:29:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 14:29:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 14:29:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 15:36:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 15:36:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 15:36:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 15:37:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 15:37:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 15:37:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 15:37:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 15:37:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 15:37:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 15:38:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 15:38:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 15:38:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 15:40:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 15:40:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 15:40:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 15:42:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 15:42:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 15:42:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 15:43:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 15:43:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 15:43:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 15:43:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 15:43:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 15:43:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 15:43:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 15:43:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 15:43:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 15:44:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 15:44:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 15:44:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 15:46:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 15:46:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 15:46:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 15:46:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 15:46:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 15:46:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 15:48:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 15:48:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 15:48:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 15:48:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 15:48:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 15:48:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 15:50:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 15:50:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 15:50:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 15:53:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 15:53:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 15:53:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 16:10:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 16:10:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 16:10:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 16:11:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 16:11:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 16:11:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 16:11:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 16:11:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 16:11:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 16:11:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 16:11:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 16:11:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 16:12:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 16:12:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 16:12:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 16:36:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 16:36:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 16:36:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 16:46:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 16:46:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 16:46:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 16:59:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 16:59:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 16:59:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 17:08:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 17:08:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 17:08:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 17:11:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 17:11:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 17:11:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-30 17:13:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-30 17:13:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-30 17:13:38 --> Could not find the language line "discount_this_action_is_irreversible"
