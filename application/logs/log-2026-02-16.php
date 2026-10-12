<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-16 10:16:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-16 10:16:18 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-16 10:45:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-16 10:45:06 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-16 10:47:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 10:47:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 10:47:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 11:01:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-16 11:01:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-16 11:16:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 11:16:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 11:16:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 11:19:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 11:19:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 11:19:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 11:24:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 11:24:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 11:24:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 11:29:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 11:29:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 11:29:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 11:32:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 11:32:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 11:32:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 11:33:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 11:33:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 11:33:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 11:37:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 11:37:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 11:37:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 11:41:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 11:41:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 11:41:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 11:44:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 11:44:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 11:44:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 11:49:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 11:49:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 11:49:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 11:49:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 11:49:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 11:49:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 11:51:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 11:51:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 11:51:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 11:58:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 11:58:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 11:58:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 12:00:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 12:00:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 12:00:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 12:02:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 12:02:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 12:02:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 12:05:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 12:05:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 12:05:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 12:09:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 12:09:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 12:09:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 12:10:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-16 12:10:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-16 12:11:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 12:11:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 12:11:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 12:12:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 12:12:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 12:12:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 12:12:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 12:12:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 12:12:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 12:14:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 12:14:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 12:14:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 12:18:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 12:18:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 12:18:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 12:20:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 12:20:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 12:20:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 12:22:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 12:22:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 12:22:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 12:35:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 12:45:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 12:45:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 12:45:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 12:46:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 12:46:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 12:46:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 12:46:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 12:46:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 12:46:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 12:53:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 12:53:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 12:53:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 12:53:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 12:53:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 12:54:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 12:54:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 12:54:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 13:40:29 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 13:41:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 13:44:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 13:44:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 13:44:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 13:56:50 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 13:56:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 13:56:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 13:57:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 13:57:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 13:57:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:03:36 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 14:03:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 14:03:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 14:03:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:03:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:03:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:04:02 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 14:04:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 14:04:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 14:04:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:04:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:04:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:06:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:06:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:06:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:09:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:09:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:09:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:10:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:10:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:10:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:19:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:19:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:19:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:23:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-16 14:23:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-16 14:24:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:24:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:24:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:26:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:26:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:26:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:26:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:26:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:26:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:26:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:26:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:26:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:26:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:26:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:26:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:26:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:26:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:26:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:26:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:26:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:26:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:26:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:26:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:26:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:26:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:26:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:26:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:27:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:27:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:27:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:28:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:28:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:28:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:28:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:28:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:28:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:28:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:28:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:30:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:30:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:30:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:30:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:30:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:30:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:30:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:30:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:30:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:30:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:30:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:30:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:30:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:30:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:30:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:30:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:30:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:30:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:31:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:31:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:31:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:31:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:31:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:31:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:33:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:33:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:33:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:34:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:34:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:34:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:34:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:34:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:34:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:34:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:34:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:34:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:38:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:38:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:38:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:39:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:39:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:39:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:39:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:39:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:39:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:39:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:39:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:39:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:40:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:40:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:40:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:40:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:40:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:40:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:40:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:40:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:40:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:40:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:40:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:40:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:40:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:40:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:40:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:41:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:41:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:41:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:41:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:41:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:41:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:45:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:45:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:45:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:47:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:47:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:47:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:47:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:47:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:47:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:48:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:48:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:48:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:53:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:53:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:53:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:54:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:54:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:54:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 14:54:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 14:54:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 14:54:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:03:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:03:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:03:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:03:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:03:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:03:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:03:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:03:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:03:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:03:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:03:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:04:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:04:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:04:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:04:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:04:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:04:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:04:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:04:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:04:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:05:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:05:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:05:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:06:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:06:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:06:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:06:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:06:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:06:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:06:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:06:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:06:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:06:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:06:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:06:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:06:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:06:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:06:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:08:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:08:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:08:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:08:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:08:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:08:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:08:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:08:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:08:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:14:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:14:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:14:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:14:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:14:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:14:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:15:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:15:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:15:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:15:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:15:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:15:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:15:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:15:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:15:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:20:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:20:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:20:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:20:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:20:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:20:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:33:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:33:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:33:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:33:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:33:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:33:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:33:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:33:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:33:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:33:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:33:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:33:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:33:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:33:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:33:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:34:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:34:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:34:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:34:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:34:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:34:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:36:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:36:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:36:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:37:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 15:37:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 15:37:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 15:37:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-16 15:38:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:38:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:38:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:38:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-16 15:38:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-16 15:40:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:40:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:40:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:40:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:40:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:40:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:44:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:44:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:44:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:44:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:44:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:44:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:46:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:46:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:46:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:47:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:47:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:47:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:49:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:49:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:49:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:50:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:50:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:50:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:51:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:51:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:51:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:51:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:51:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:51:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:55:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:55:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:55:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 15:56:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 15:56:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 15:56:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 16:09:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 16:09:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 16:09:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 16:09:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 16:09:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 16:09:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 16:11:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 16:11:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 16:11:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 16:16:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 16:16:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 16:16:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 18:53:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 18:53:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 18:53:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 18:56:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 18:56:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 18:56:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-16 18:58:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-16 18:58:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-16 18:58:52 --> Could not find the language line "discount_this_action_is_irreversible"
