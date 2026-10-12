<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-18 09:24:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-18 09:24:07 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-18 09:24:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 09:24:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 09:24:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 09:46:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 09:47:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 09:48:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 09:48:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 09:48:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 10:28:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-18 10:28:56 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-18 10:28:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 10:29:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 10:29:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 10:29:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 10:29:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 10:29:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 10:31:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 10:32:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 10:32:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 10:32:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 10:32:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 10:32:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 10:33:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 10:33:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 10:33:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 10:33:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 10:33:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 10:33:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 11:15:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-18 11:15:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-18 11:19:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 11:19:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 11:19:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 11:20:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 11:20:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 11:20:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 11:24:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 11:24:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 11:24:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 11:26:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 11:26:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 11:26:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 11:26:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 11:26:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 11:26:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 11:26:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 11:26:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 11:26:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 11:27:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 11:27:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 11:27:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 11:27:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 11:27:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 11:27:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 11:28:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 11:28:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 11:28:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 11:28:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 11:28:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 11:28:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 11:29:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 11:29:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 11:29:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 11:29:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 11:29:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 11:29:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 11:50:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-18 11:50:22 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-18 12:05:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:05:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:05:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:17:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 12:17:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 12:17:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 12:17:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 12:17:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:17:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:17:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:21:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:21:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:21:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:27:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:27:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:27:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:27:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:27:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:27:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:27:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 12:28:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 12:28:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 12:28:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:28:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:28:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:29:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-18 12:29:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-18 12:29:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:29:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:29:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:30:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:30:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:30:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:31:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:31:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:31:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:31:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 12:31:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 12:31:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 12:31:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:31:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:31:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:37:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:37:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:37:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:38:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:38:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:38:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:39:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:39:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:39:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:39:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:39:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:39:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:42:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:42:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:42:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:46:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:46:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:46:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:51:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:51:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:51:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:51:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:51:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:51:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:52:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:52:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:52:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:52:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:52:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:52:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:52:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:52:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:52:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:55:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:55:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:55:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:55:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:55:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:55:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:55:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:55:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:55:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:56:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:56:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:56:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:58:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:58:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:58:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 12:59:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 12:59:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 12:59:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:02:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:02:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:02:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:05:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:05:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:05:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:07:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:07:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:07:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:07:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:07:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:07:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:10:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:10:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:10:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:10:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:10:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:10:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:11:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:11:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:11:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:11:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:11:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:11:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:11:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:11:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:11:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:11:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:11:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:11:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:11:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:11:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:11:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:11:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:11:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:11:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:13:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:13:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:13:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:13:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:13:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:13:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:14:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:14:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:14:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:15:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:15:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:15:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:15:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:15:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:15:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:16:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:16:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:16:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:16:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:16:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:16:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:16:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:16:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:16:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:17:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:17:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:17:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:17:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:17:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:17:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:17:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:17:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:17:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:19:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:19:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:19:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:19:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:19:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:19:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 13:19:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 13:19:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 13:19:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 14:06:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 14:06:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 14:06:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 14:06:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 14:06:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 14:06:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 14:06:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 14:06:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 14:06:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 14:13:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 14:13:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 14:13:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 14:13:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 14:13:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 14:13:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 14:18:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 14:18:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 14:19:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 14:19:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 14:19:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 14:19:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 14:19:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 14:29:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 14:29:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 14:29:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 14:30:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 14:30:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 14:30:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 14:30:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 14:30:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 14:30:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 14:30:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 14:30:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 14:30:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 14:30:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 14:30:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 14:30:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 14:34:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 14:34:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 14:34:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 14:34:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 14:34:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 14:34:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 14:40:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 14:40:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 14:40:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:09:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:09:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:09:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:11:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:11:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:11:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:12:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:12:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:12:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:14:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:14:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:14:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:15:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:15:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:15:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:15:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:15:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:15:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:16:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:16:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:16:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:18:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:18:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:18:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:19:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:19:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:19:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:19:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:19:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:19:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:19:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:19:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:19:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:19:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:19:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:19:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:20:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:20:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:20:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:21:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:21:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:21:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:21:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:21:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:21:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:21:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:21:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:21:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:23:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:23:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:23:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 15:24:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 15:24:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 15:24:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 16:00:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-18 16:00:59 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-18 16:01:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 16:01:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 16:01:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 16:01:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 16:01:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 16:01:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 16:15:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 16:15:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 16:15:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 16:16:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 16:16:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 16:16:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 16:39:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 16:39:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 16:39:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 16:44:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 16:44:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 16:44:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 16:46:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 16:46:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 16:46:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 17:02:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 17:03:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 17:03:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 17:03:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 17:03:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 17:03:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 17:03:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 17:03:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 17:03:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 17:03:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 17:03:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 17:03:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 17:03:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 17:04:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 17:04:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 17:04:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 17:04:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 17:04:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 17:04:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 17:04:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 17:04:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 17:04:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 17:04:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 17:04:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 17:04:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-18 17:05:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 17:05:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 17:05:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 17:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-18 17:05:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-18 17:05:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 17:05:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 17:05:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 17:06:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 17:06:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 17:06:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 17:08:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 17:08:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 17:08:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 17:08:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 17:08:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 17:08:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 18:51:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 18:51:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 18:51:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 18:51:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-18 18:51:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-18 18:51:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-18 18:57:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-18 18:57:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
