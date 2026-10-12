<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-15 10:12:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-15 10:12:49 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-15 10:13:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 10:13:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 10:13:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 10:18:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 10:18:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 10:18:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 10:21:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 10:21:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 10:21:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 10:24:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 10:24:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 10:24:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 10:25:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 10:25:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 10:25:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 10:26:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 10:26:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 10:26:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 10:26:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 10:26:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 10:26:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 10:26:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 10:26:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 10:26:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 10:27:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 10:27:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 10:27:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 10:27:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 10:27:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 10:27:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 10:28:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 10:28:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 10:28:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 10:34:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 10:34:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 10:34:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 11:26:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 11:26:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 11:26:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 11:26:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 11:26:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 11:26:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 11:27:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 11:27:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 11:27:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 11:27:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 11:27:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 11:27:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 11:30:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 11:30:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 11:30:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 11:33:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-15 11:33:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-15 11:33:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 11:33:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 11:33:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 11:33:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 11:33:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 11:33:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 11:36:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 11:36:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 11:36:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 11:42:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-15 11:42:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-15 11:42:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 11:42:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 11:42:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 11:43:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 11:43:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 11:43:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 11:44:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 11:44:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 11:44:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 11:45:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 11:45:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 11:45:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 11:47:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 11:47:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 11:47:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 11:47:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-15 11:47:59 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-15 11:56:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 11:56:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 11:56:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 11:57:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 11:57:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 11:57:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:10:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:10:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:10:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:17:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:17:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:17:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:20:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:20:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:20:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:21:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:21:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:21:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:21:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:21:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:21:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:22:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:22:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:22:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:23:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:23:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:23:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:23:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:23:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:23:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:23:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:23:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:23:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:23:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:23:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:23:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:25:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:25:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:25:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:25:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:25:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:25:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:25:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:25:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:25:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:25:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:25:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:25:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:28:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:28:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:28:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:28:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:28:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:28:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:28:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:28:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:28:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:29:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:29:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:29:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:29:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:29:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:29:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:30:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:30:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:30:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:32:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 12:32:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:32:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:32:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:33:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:33:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:33:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:34:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 12:34:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 12:34:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:34:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:34:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:34:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:34:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:34:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:34:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:34:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:34:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:35:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:35:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:35:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:35:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:35:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:35:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:36:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:36:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:36:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:37:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:37:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:37:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:37:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:37:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:37:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:38:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:38:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:38:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:38:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:38:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:38:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:39:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:39:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:39:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:39:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:39:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:39:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:40:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:40:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:40:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:41:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:41:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:41:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:44:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:44:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:44:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:45:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:45:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:45:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:45:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:45:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:45:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:45:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:45:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:45:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:50:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:50:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:50:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:50:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:50:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:50:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 12:55:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 12:55:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 12:55:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:06:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:06:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:06:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:06:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:06:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:06:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:07:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:07:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:07:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:07:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:07:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:07:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:08:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:08:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:08:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:11:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:11:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:11:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:13:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:13:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:13:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:15:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:15:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:15:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:16:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:16:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:16:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:19:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:19:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:19:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:22:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:22:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:22:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:23:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:23:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:23:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:24:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:24:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:24:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:25:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:25:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:25:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:26:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:26:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:26:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:26:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:26:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:26:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:26:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:26:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:26:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:26:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:26:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:26:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:26:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:26:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:26:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:45:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:45:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:45:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:46:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-15 13:46:48 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-15 13:46:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 13:49:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 13:49:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 13:49:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 13:56:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-15 13:56:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-15 14:00:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:00:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:00:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:01:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:01:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:01:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:01:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:01:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:01:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:03:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:03:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:03:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:03:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:03:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:03:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:03:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:03:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:03:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:04:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:04:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:04:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:06:48 --> Could not find the language line "student_fee1"
ERROR - 2025-12-15 14:07:06 --> Could not find the language line "student_fee1"
ERROR - 2025-12-15 14:07:11 --> Could not find the language line "error_occured"
ERROR - 2025-12-15 14:07:17 --> Could not find the language line "student_fee1"
ERROR - 2025-12-15 14:07:50 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-15 14:07:50 --> Could not find the language line "principal"
ERROR - 2025-12-15 14:07:50 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-15 14:07:50 --> Could not find the language line "principal"
ERROR - 2025-12-15 14:08:10 --> Could not find the language line "student_fee1"
ERROR - 2025-12-15 14:08:37 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-15 14:08:37 --> Could not find the language line "principal"
ERROR - 2025-12-15 14:08:37 --> Could not find the language line "exam_coordinator"
ERROR - 2025-12-15 14:08:37 --> Could not find the language line "principal"
ERROR - 2025-12-15 14:14:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:14:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:14:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:15:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:15:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:15:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:17:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:17:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:17:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:18:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:18:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:18:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:18:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:18:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:18:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:18:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:18:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:18:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:18:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:18:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:18:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:19:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:19:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:19:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:19:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:19:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:19:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:21:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:21:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:21:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:26:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:26:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:26:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:29:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:29:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:29:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:29:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:29:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:29:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:30:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:30:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:30:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:30:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:30:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:30:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:31:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:31:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:31:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:34:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:34:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:34:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:34:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:34:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:34:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:35:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:35:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:35:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:35:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:35:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:35:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:36:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:36:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:36:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:37:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:37:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:37:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:37:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:37:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:37:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:41:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:41:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:41:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:41:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:41:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:41:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:43:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:43:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:43:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:46:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:46:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:46:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:46:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:46:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:46:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:46:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:46:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:46:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:49:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:49:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:49:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:49:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:49:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:49:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:50:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:50:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:50:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:50:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:50:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:50:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:51:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:51:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:51:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:52:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:52:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:52:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:53:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:53:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:53:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:53:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:53:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:53:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 14:57:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 14:57:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 14:57:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:04:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:04:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:04:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:04:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:04:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:04:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:04:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:04:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:04:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:04:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:04:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:04:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:04:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:04:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:04:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:04:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:04:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:04:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:05:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:05:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:05:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:05:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:05:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:05:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:17:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:17:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:17:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:18:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:18:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:18:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:18:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:18:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:18:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:21:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:21:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:21:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:21:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:21:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:21:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:23:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:23:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:23:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:24:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:24:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:24:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:24:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:24:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:24:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:24:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:24:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:24:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:25:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:25:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:25:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:31:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:31:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:31:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:31:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:31:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:31:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:31:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:31:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:31:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:34:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:34:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:34:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:34:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:34:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:34:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:34:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:34:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:34:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:34:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:34:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:34:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:34:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:34:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:34:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:35:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:35:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:35:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:45:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:45:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:45:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:45:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:45:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:45:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:46:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:46:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:46:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:49:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:49:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:49:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:49:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:49:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:49:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:50:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 15:50:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 15:50:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 15:56:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 16:01:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:01:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:01:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 16:01:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 16:01:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:01:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:01:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 16:02:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 16:03:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:03:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:03:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 16:03:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 16:04:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 16:04:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 16:04:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 16:04:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 16:05:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 16:05:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 16:05:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:05:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:05:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 16:10:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:10:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:10:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 16:16:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:16:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:16:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 16:18:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:18:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:18:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 16:21:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:21:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:21:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 16:21:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:21:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:21:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 16:22:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:22:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:22:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 16:22:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:22:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:22:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 16:26:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-15 16:26:49 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-15 16:27:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:27:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:27:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 16:27:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:27:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:27:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 16:28:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 16:28:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 16:28:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 16:29:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 16:32:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 16:33:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:33:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:33:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 16:52:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:52:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:52:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 16:54:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:54:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:54:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 16:55:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 16:55:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 16:55:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 17:00:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-15 17:02:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 17:02:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 17:02:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 17:11:28 --> Could not find the language line "student_fee1"
ERROR - 2025-12-15 17:16:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-15 17:16:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-15 17:29:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 17:29:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 17:29:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 17:36:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 17:36:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 17:36:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 17:39:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-15 17:39:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-15 17:41:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 17:41:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 17:41:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 17:43:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 17:43:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 17:43:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-15 17:56:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-15 17:56:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-15 17:56:22 --> Could not find the language line "discount_this_action_is_irreversible"
