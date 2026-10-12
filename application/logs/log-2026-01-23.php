<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-23 10:42:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-23 10:42:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-23 10:44:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:09:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:09:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:09:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:10:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-23 11:10:33 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-23 11:10:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:11:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:11:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:11:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:11:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:11:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:11:23 --> Could not find the language line "current"
ERROR - 2026-01-23 11:11:23 --> Could not find the language line "social_media"
ERROR - 2026-01-23 11:13:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:13:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:13:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:13:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:14:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:14:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:15:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-23 11:15:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-23 11:16:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:16:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:17:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:17:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:17:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:19:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:19:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:19:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:19:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:19:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:19:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:23:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:27:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:27:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:27:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:28:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:28:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:28:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:28:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:28:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:28:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:28:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-23 11:28:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-23 11:29:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:29:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:29:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:30:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:30:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:30:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:30:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:30:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:30:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:30:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:30:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:30:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:30:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:30:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:31:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:31:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:31:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:31:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:31:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:31:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:31:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:31:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:32:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:32:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:32:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:32:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:32:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:32:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:32:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:32:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:32:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:33:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:33:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:33:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:33:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:33:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:33:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:34:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:34:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:34:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:35:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:35:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:35:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:35:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:35:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:35:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:35:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:37:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:37:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:37:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:38:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:38:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:38:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:39:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-23 11:39:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-23 11:39:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:39:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:39:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:40:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:40:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:40:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:41:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:41:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:41:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:41:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:41:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:41:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:41:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:41:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:44:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:44:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:44:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:44:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:44:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:44:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:45:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:45:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:45:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:46:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:46:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:46:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:46:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:46:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:46:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:47:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:47:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:47:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:47:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:47:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:47:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:48:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:48:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:48:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:48:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:48:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:48:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:49:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:49:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:49:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:49:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:49:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:49:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:50:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:50:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:50:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:50:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:50:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:50:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:50:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:50:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:50:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:51:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:51:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:51:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:53:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:53:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:53:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:53:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:53:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:53:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:54:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:54:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:54:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:54:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:54:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:54:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:54:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:54:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:54:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:55:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:55:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:55:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:55:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:56:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:56:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:56:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 11:56:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:56:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:56:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:58:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:58:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:58:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:59:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:59:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:59:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 11:59:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 11:59:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 11:59:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:00:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:00:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:00:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:07:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:07:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:07:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:10:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:10:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:10:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:12:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:12:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:12:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:14:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:14:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:14:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:14:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:14:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:14:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:15:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:15:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:15:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:16:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:16:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:16:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:16:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:16:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:16:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:17:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:17:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:17:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:17:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:17:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:17:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:18:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:18:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:18:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:18:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:18:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:18:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:19:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-23 12:19:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-23 12:22:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 12:24:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:24:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:24:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:25:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:25:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:25:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:25:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:25:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:25:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:26:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:26:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:26:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:26:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:26:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:26:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:27:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:27:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:27:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:27:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:27:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:27:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:28:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:28:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:28:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:28:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:28:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:28:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:28:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:28:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:28:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:29:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:29:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:29:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:29:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:29:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:29:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:29:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:29:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:29:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:30:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:30:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:30:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:31:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:31:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:31:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:31:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:31:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:31:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:32:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:32:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:32:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:32:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:32:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:32:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:32:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:32:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:32:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:32:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:32:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:32:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:33:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:33:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:33:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:34:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:34:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:34:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:34:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 12:35:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:35:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:35:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:35:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:35:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:35:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:35:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:35:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:35:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:36:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:36:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:36:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:36:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:36:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:36:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:37:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:37:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:37:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:37:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:37:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:37:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:38:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:38:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:38:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:39:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:39:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:39:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:39:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:39:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:39:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:39:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:39:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:39:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:40:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:40:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:40:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:40:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:40:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:40:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:40:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:40:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:40:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:41:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:41:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:41:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:41:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:41:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:41:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:48:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:48:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:48:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:48:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:48:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:48:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:49:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:49:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:49:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:49:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:49:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:49:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:50:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:50:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:50:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:51:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:51:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:51:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:51:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:51:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:51:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:55:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:55:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:55:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:56:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:56:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:56:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:56:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:56:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:56:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:57:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:57:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:57:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:58:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:58:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:58:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:59:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:59:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:59:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 12:59:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 12:59:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 12:59:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 13:00:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 13:00:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 13:00:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 13:00:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 13:00:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 13:00:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 13:00:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 13:00:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 13:00:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 13:01:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 13:01:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 13:01:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 13:02:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 13:02:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 13:02:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 13:03:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 13:03:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 13:03:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 13:07:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 13:07:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 13:07:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 13:08:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 13:08:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 13:08:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 13:09:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 13:09:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 13:09:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 13:09:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 13:09:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 13:09:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 13:10:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 13:10:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 13:10:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 13:12:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 13:12:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 13:12:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 13:14:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 13:14:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 13:14:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 13:25:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 13:25:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 13:25:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 13:43:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 13:43:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 13:59:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 13:59:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 13:59:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:00:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:00:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:00:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:01:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:01:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:01:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:16:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:16:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:16:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:16:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:16:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:16:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:18:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:18:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:18:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:18:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:18:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:18:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:19:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:19:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:19:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:19:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:19:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:19:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:19:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:19:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:19:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:19:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:19:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:19:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:20:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:20:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:20:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:20:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:20:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:20:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:20:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:20:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:20:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:21:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:21:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:21:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:21:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:21:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:21:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:22:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:22:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:22:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:23:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:23:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:23:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:23:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:23:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:23:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:23:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:23:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:23:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:24:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:24:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:24:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:24:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:24:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:24:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:24:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:24:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:24:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:25:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:25:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:25:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:26:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:26:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:26:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:26:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:26:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:26:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:26:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:26:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:26:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:27:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:27:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:27:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:28:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:28:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:28:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:28:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:28:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:28:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:29:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:29:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:29:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:29:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:29:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:29:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:30:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:30:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:30:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:30:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:30:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:30:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:31:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:31:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:31:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:31:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:31:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:31:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:32:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:32:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:32:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:35:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:35:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:35:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:36:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-23 14:36:15 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-23 14:36:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:36:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:36:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:37:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:37:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:37:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:38:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-23 14:38:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-23 14:38:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:38:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:38:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:39:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:39:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:39:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:41:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:41:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:41:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:43:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:43:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:43:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:44:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:44:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:44:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:45:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:45:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:45:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:45:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:45:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:45:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:46:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:46:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:46:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:47:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:47:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:47:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:47:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:47:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:47:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:48:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 14:48:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 14:48:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 14:48:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:48:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:48:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:49:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:49:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:49:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:50:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:50:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:50:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:51:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:51:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:51:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:51:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:51:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:51:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:51:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:51:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:51:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:52:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:52:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:52:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:52:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:52:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:52:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:52:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:52:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:52:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:52:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:52:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:52:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:53:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:53:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:53:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:53:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 14:53:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 14:53:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 14:58:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-23 14:58:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-23 14:59:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 15:02:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 15:02:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 15:02:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 15:02:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:02:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:02:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:03:18 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 15:03:45 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 15:03:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 15:04:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 15:04:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-23 15:04:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-23 15:04:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 15:05:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:05:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:05:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:05:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:05:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:05:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:05:59 --> Could not find the language line "complaint_by"
ERROR - 2026-01-23 15:06:02 --> Could not find the language line "complaint_by"
ERROR - 2026-01-23 15:06:08 --> Could not find the language line "complaint_by"
ERROR - 2026-01-23 15:09:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:09:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:09:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:12:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:12:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:12:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:12:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:12:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:12:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:13:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:13:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:13:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:13:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:13:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:13:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:14:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:14:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:14:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:14:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:14:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:14:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:14:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:14:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:14:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:15:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:15:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:15:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:15:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:15:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:15:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:16:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:16:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:16:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:16:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:16:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:16:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:16:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:16:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:16:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:17:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:17:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:17:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:21:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:21:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:21:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:22:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:22:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:22:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:22:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:22:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:22:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:22:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:22:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:22:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:24:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:24:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:24:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:24:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:24:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:24:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:25:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:25:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:25:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:25:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:25:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:25:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:26:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:26:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:26:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:28:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 15:28:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 15:31:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:31:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:31:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:31:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:31:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:31:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:35:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 15:35:44 --> Could not find the language line "student1"
ERROR - 2026-01-23 15:35:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 15:35:49 --> Could not find the language line "student1"
ERROR - 2026-01-23 15:37:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:37:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:37:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:37:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:37:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:37:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:39:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:39:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:39:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:42:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:42:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:42:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:43:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:43:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:43:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:43:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:43:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:43:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:44:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:44:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:44:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:46:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:46:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:46:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:48:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:48:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:48:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:48:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:48:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:48:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:49:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:49:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:49:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:50:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:50:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:50:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:50:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:50:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:50:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:51:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:51:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:51:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:52:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:52:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:52:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:53:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:53:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:53:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:54:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:54:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:54:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:55:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:55:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:55:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:55:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:55:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:55:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:56:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-23 15:56:14 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-23 15:57:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:57:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:57:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 15:58:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 15:58:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 15:58:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:00:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 16:00:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 16:00:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 16:00:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:00:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:00:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:00:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 16:00:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 16:00:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 16:00:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:00:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:00:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:04:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:04:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:04:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:04:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:04:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:04:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:05:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:05:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:05:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:05:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:05:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:05:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:06:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:06:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:06:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:06:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:06:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:06:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:07:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:07:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:07:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:07:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:07:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:07:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:07:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:07:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:07:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:08:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 16:08:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 16:08:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 16:08:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:08:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:08:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:08:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 16:08:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 16:08:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 16:09:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:09:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:09:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:09:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:09:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:09:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:10:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:10:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:10:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:10:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:10:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:10:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:10:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:10:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:10:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:13:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:13:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:13:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:14:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:14:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:14:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:14:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:14:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:14:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:14:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:14:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:14:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:14:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:14:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:14:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:15:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:15:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:15:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:15:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:15:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:15:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:15:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:15:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:15:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:16:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:16:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:16:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:16:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:16:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:16:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:16:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:16:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:16:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:19:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:19:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:19:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:19:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:19:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:19:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:20:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:20:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:20:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:20:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:20:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:20:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:20:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:20:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:20:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:21:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:21:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:21:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:21:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:21:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:21:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:22:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:22:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:22:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:22:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:22:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:22:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:23:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:23:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:23:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:29:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:29:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:29:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:36:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:37:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:38:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:38:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:39:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:39:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:39:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:40:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:40:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:40:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:41:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:41:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:42:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:42:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:43:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:43:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 16:44:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:44:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:44:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:51:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:51:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:51:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 16:52:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 16:52:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 16:52:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:00:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:00:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:00:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:01:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:01:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:01:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:01:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:01:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:01:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:01:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:01:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:01:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:01:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:01:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:01:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:01:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:01:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:01:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:02:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:02:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:02:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:02:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:02:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:02:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:02:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:02:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:02:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:05:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:05:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:05:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:05:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:05:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:05:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:05:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:05:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:05:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:06:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:06:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:06:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:07:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:07:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:07:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:07:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:07:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:07:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:08:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:08:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:08:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:10:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:10:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:10:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:10:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:10:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:10:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:11:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:11:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:11:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:12:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:12:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:12:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:12:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:12:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:12:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:12:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:12:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:12:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:13:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:13:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:13:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:13:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:13:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:13:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:14:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:14:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:14:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:14:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:14:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:14:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:15:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:15:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:15:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:15:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:15:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:15:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:17:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:17:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:17:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:27:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 17:27:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 17:28:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:28:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:28:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:29:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:29:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:29:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:29:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:29:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:29:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:30:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:30:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:30:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:35:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:35:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:35:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:35:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 17:36:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:36:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:36:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:36:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:36:58 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:37:04 --> Severity: Warning --> A non-numeric value encountered /home/ashir611/public_html/application/helpers/custom_helper.php 418
ERROR - 2026-01-23 17:37:06 --> Severity: Warning --> A non-numeric value encountered /home/ashir611/public_html/application/helpers/custom_helper.php 418
ERROR - 2026-01-23 17:37:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:37:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:37:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:37:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:37:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:37:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:37:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:37:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:39:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:39:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:39:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:39:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:39:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:39:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:39:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:39:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:39:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:39:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:39:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:39:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:39:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:39:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:40:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:40:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:40:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:40:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:40:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:40:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-23 17:40:07 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-23 17:40:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:40:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:40:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:40:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:40:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:40:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:40:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:40:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:40:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:42:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:42:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:42:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:42:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:42:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:42:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 17:44:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 17:44:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 17:44:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 17:59:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 17:59:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 18:08:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 18:09:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 18:09:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 18:11:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 18:11:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 18:12:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 18:12:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 18:14:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 18:14:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 18:14:25 --> Could not find the language line "student1"
ERROR - 2026-01-23 18:14:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 18:14:30 --> Could not find the language line "student1"
ERROR - 2026-01-23 18:14:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 18:14:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-23 18:14:32 --> Could not find the language line "student1"
ERROR - 2026-01-23 18:15:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 18:15:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 18:15:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 18:16:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 18:16:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 18:16:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 18:18:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-23 18:35:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 18:35:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 18:35:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 18:37:28 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3577, NULL, 4500, 'D', '')
ERROR - 2026-01-23 18:37:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 18:37:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 18:37:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 18:38:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 18:38:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 18:38:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 18:39:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 18:39:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 18:39:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 18:39:36 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3579, NULL, 4500, 'D', 'Student Scholarship given by MD Sir ')
ERROR - 2026-01-23 18:39:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 18:39:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 18:39:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 18:39:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 18:39:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 18:39:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 18:41:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 18:41:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 18:41:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 18:41:24 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3581, NULL, 4000, 'D', '')
ERROR - 2026-01-23 18:41:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 18:41:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 18:41:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 18:42:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 18:42:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 18:42:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 18:50:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 18:50:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 18:50:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 18:51:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 18:51:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 18:51:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 18:52:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 18:52:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 18:52:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 18:52:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 18:52:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 18:52:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 19:01:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 19:01:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 19:01:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 19:01:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 19:01:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 19:01:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-23 19:01:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-23 19:01:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-23 19:01:59 --> Could not find the language line "discount_this_action_is_irreversible"
