<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-26 10:21:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-26 10:21:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-26 10:21:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:21:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:21:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:23:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-26 10:23:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-26 10:23:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 10:23:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 10:23:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 10:24:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 10:24:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 10:24:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 10:25:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:25:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:25:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:25:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 10:25:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 10:25:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 10:25:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:25:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:25:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:26:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:26:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:26:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:26:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:26:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:26:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:27:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:27:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:27:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:27:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:27:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:27:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:27:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:27:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:27:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:27:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:27:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:27:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:30:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:30:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:30:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:31:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:31:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:31:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:31:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 10:31:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 10:31:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 10:31:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:31:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:31:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:35:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:35:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:35:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:44:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:44:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:44:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:45:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-26 10:45:29 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-26 10:46:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:46:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:46:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:48:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:48:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:48:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:55:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:55:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:55:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:56:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:56:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:56:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 10:59:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 10:59:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 10:59:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:01:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:01:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:01:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:07:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-26 11:07:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-26 11:07:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:07:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:07:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:08:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:08:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:08:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:10:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:10:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:10:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:11:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:11:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:11:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:11:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:11:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:11:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:18:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:18:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:18:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:19:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:19:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:19:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:19:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:19:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:19:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:20:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:20:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:20:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:20:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:20:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:20:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:20:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:21:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:21:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:21:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:21:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:21:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:21:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:21:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:21:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:24:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:24:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:24:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:24:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:24:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:24:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:24:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:24:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:24:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:27:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:27:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:27:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:27:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:28:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:28:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:28:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:28:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:28:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:28:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:28:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:28:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:31:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:31:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:31:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:32:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:32:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:32:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:40:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:40:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:40:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:40:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:40:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:40:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:42:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:42:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:42:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:42:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:42:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:42:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:44:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:44:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:44:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:44:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:44:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:44:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:45:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:45:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:45:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:45:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:45:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:45:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:45:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:47:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:47:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:47:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:47:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:47:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:49:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:49:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:49:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:49:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:49:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:49:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:51:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:51:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:51:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 11:51:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:51:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:51:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:53:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:53:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:53:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:54:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:54:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:54:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 11:54:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 11:54:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 11:54:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:05:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:05:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:05:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:07:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:07:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:07:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:08:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:08:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:08:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:08:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:08:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:08:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:10:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:10:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:10:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:15:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:15:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:15:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:16:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:16:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:16:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:16:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:16:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:16:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:19:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:19:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:19:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:19:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 12:19:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 12:19:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 12:19:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:19:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:19:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:19:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 12:20:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 12:20:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:20:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:20:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:20:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 12:20:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:20:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:20:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:21:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:21:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:21:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:23:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:23:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:23:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:25:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:25:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:25:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:29:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:29:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:29:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:33:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:33:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:33:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:33:35 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3119, NULL, 9000, 'D', '')
ERROR - 2025-12-26 12:33:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:33:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:33:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:33:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:33:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:33:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:33:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:33:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:33:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:36:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:36:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:36:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:37:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:37:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:37:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 12:37:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 12:37:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 12:37:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 13:26:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-26 13:26:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-26 13:26:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 13:26:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 13:26:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 13:27:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 13:27:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 13:27:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 13:54:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 13:55:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 13:55:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 13:55:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 13:56:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 13:56:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 13:56:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 13:57:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 13:57:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 13:57:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 13:57:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 13:57:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 13:57:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 13:58:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 14:21:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 14:21:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 14:21:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 14:25:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 14:25:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 14:25:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 14:32:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 14:32:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 14:32:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 14:47:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-26 14:47:30 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-26 14:47:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 14:47:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 14:47:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 14:52:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 14:52:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 14:52:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 14:52:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 14:52:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 14:52:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 15:22:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 15:22:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 15:22:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 15:36:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 15:36:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 15:36:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 15:49:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 15:49:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 15:49:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 15:52:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 15:52:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 15:52:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 15:53:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 15:53:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 15:53:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 16:00:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 16:00:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 16:00:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 16:02:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 16:02:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 16:02:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-26 16:10:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-26 16:32:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-26 16:32:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-26 16:32:55 --> Could not find the language line "discount_this_action_is_irreversible"
