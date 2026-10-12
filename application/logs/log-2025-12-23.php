<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-23 11:14:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-23 11:14:47 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-23 11:15:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-23 11:15:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-23 11:15:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:15:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:15:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:15:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:15:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:15:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:16:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:16:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:16:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:16:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:16:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:16:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:23:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:23:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:23:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:23:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:23:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:23:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:24:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:24:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:24:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:25:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-23 11:25:25 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-23 11:25:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:25:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:25:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:25:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:25:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:25:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:26:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:26:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:26:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:28:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:28:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:28:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:30:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:30:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:30:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:30:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:30:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:30:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:30:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:31:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:31:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:31:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:31:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:31:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:31:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:31:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:31:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:32:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:32:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:32:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:41:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:41:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:41:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:43:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:43:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:43:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:44:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-23 11:44:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-23 11:49:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:49:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:49:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:51:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:51:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:51:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:53:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:53:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:53:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:54:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:54:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:54:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:55:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:55:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 11:55:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:55:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:55:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 11:58:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 11:58:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 11:58:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:00:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-23 12:00:48 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-23 12:01:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:01:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:01:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:09:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:09:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:09:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:10:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:10:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:10:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:15:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:15:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:15:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:15:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:15:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:15:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:23:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:23:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:23:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:23:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:23:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:23:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:23:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:28:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:28:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:28:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:28:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:28:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:28:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:28:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:30:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:30:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:30:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:30:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:30:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:30:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:32:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:32:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:32:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:32:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:42:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:42:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:42:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:43:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:43:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:43:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:43:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:43:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:43:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:47:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:47:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:47:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:47:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:47:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:47:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:49:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:49:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:49:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:53:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:53:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:53:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:53:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:53:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:53:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:53:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:53:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:53:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:53:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:53:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:53:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:53:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:53:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:53:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:53:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:54:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:54:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:54:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:56:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:56:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:56:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:57:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:57:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:57:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:57:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:57:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:57:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:58:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:58:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:58:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:59:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 12:59:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 12:59:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 12:59:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:59:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 12:59:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 13:00:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 13:00:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 13:00:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 13:01:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 13:01:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 13:01:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 13:02:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 13:02:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 13:02:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 13:02:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 13:02:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 13:02:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 13:03:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 13:03:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 13:03:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 13:03:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 13:03:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 13:03:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 13:03:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 13:03:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 13:03:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 13:04:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 13:04:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 13:04:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 13:08:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 13:08:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 13:08:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 13:08:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 13:08:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 13:08:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 13:08:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 13:08:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 13:08:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 13:09:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 13:09:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 13:09:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 13:10:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 13:11:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 13:11:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 13:11:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 13:12:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 13:12:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 13:12:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 13:37:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 13:38:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-23 13:38:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-23 13:38:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 13:38:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 13:38:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 13:39:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 13:39:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 13:39:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 13:43:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 13:43:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 13:43:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 13:44:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 13:44:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 13:44:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 13:49:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 13:49:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 13:49:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:08:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:08:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:08:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:09:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:09:08 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2025-12-23 14:09:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:09:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:09:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:09:30 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2025-12-23 14:09:47 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2025-12-23 14:09:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-23 14:09:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-23 14:10:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:10:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:10:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:10:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:10:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:10:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:10:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:11:34 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2025-12-23 14:23:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:23:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:23:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:23:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:23:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:23:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:24:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:24:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:24:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:24:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:24:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:24:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:24:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:24:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:24:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:26:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:26:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:26:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:31:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:31:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:31:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:31:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:31:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:31:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:36:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-23 14:36:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-23 14:38:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-23 14:39:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:39:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:39:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:42:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-23 14:44:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:44:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:44:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:44:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:44:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:44:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:44:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:44:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:44:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:44:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:44:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:44:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:44:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:44:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:44:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:45:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:45:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:45:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:46:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:46:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:46:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:47:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-23 14:48:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:48:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:48:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:49:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-23 14:50:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:50:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:50:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:51:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:51:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:51:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:51:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:51:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:51:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:51:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:51:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:51:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-23 14:51:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 14:51:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 14:51:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 14:51:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-23 14:55:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-23 15:21:40 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 10502144 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 435
ERROR - 2025-12-23 15:21:58 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 6307840 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 275
ERROR - 2025-12-23 15:22:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-23 15:22:14 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-23 15:22:57 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 20480 bytes) /home/ashir611/public_html/system/database/DB_query_builder.php 301
ERROR - 2025-12-23 15:23:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-23 15:23:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-23 15:26:49 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4491592 bytes) /home/ashir611/public_html/system/core/Output.php 198
ERROR - 2025-12-23 15:27:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-23 15:27:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-23 15:42:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 15:42:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 15:42:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 15:55:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 15:55:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 15:55:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 15:59:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 15:59:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 15:59:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 16:00:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 16:00:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 16:00:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 16:02:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-23 16:02:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-23 16:04:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 16:04:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 16:04:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 16:05:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 16:05:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 16:05:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 16:05:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-23 16:05:46 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-23 16:06:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 16:06:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 16:06:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 16:12:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 16:12:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 16:12:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 16:20:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 16:20:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 16:20:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 16:21:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 16:21:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 16:21:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 16:26:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 16:26:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 16:26:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 16:48:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 16:48:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 16:48:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 16:49:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-23 16:49:07 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-23 16:49:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 16:49:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 16:49:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 17:03:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 17:03:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 17:03:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 17:04:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 17:04:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 17:04:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 17:05:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 17:05:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 17:05:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 17:28:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 17:28:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 17:28:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 17:41:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-23 17:41:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-23 17:42:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 17:42:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 17:42:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 17:43:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 17:43:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 17:43:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 17:44:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 17:44:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 17:44:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 17:45:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 17:45:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 17:45:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-23 17:46:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-23 17:46:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-23 17:46:12 --> Could not find the language line "discount_this_action_is_irreversible"
