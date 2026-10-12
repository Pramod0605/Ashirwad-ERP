<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-05 09:57:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-05 09:57:01 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-05 09:57:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 09:57:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 09:57:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 09:57:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 09:57:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 09:57:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:02:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:02:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:02:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:05:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 10:07:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 10:07:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 10:07:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 10:08:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 10:14:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-05 10:14:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-05 10:14:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:14:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:14:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:14:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:14:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:14:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:23:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 10:23:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 10:23:18 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 10:23:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:23:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:23:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:24:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-05 10:24:25 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-05 10:24:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:24:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:24:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:27:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-05 10:27:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-05 10:28:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:28:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:28:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:29:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:29:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:29:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:31:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:31:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:31:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:31:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:31:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:31:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:31:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:31:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:31:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:32:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:32:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:32:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:33:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:33:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:33:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:33:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:33:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:33:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:34:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:34:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:34:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:35:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:35:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:35:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:35:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:35:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:35:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:35:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:35:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:35:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:36:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:36:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:36:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:37:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:37:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:37:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:37:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:37:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:37:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:38:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:38:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:38:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:38:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:38:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:38:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:40:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:40:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:40:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:41:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:41:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:41:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:42:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:42:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:42:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:43:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:43:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:43:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:45:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:45:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:45:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:45:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:45:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:45:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:48:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:48:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:48:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:50:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:50:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:50:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:51:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:51:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:51:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:52:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:52:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:52:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:52:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:52:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:52:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:53:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:53:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:53:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:53:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:53:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:53:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:53:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:53:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:53:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:54:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:54:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:54:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:54:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:54:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:54:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:55:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:55:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:55:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:56:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:56:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:56:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:57:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:57:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:57:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:57:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:57:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:57:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:58:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:58:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:58:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:59:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:59:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:59:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 10:59:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 10:59:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 10:59:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:02:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:02:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:02:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:02:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:02:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:02:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:02:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:02:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:02:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:02:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:02:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:02:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:03:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:03:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:03:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:03:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:03:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:03:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:03:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:03:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:03:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:08:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:08:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:08:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:10:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 11:10:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:10:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:10:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:11:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:11:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:11:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:15:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:15:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:15:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:21:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:21:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:21:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:23:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:23:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:23:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:24:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:24:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:24:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:25:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:25:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:25:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:29:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:29:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:29:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:32:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:32:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:32:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:32:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 11:33:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:33:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:33:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:33:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:33:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:33:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:33:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:33:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:33:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:34:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:34:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:34:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:35:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:35:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:35:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:37:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:37:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:37:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:38:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:38:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:38:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:42:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:42:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:42:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:42:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:42:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:42:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:42:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:42:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:42:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:43:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:43:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:43:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:44:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:44:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:44:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:44:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:44:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:44:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:45:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:45:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:45:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:46:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:46:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:46:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:48:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:48:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:48:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:49:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-05 11:49:14 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-05 11:49:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:49:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:49:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:49:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:49:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:49:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:50:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:50:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:50:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:50:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:50:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:50:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:53:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:53:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:53:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:53:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:53:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:53:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:53:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:53:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:53:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:54:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:54:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:54:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:54:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 11:55:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:55:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:55:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 11:59:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 11:59:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 11:59:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:00:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:00:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:00:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:00:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:00:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:00:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:01:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:01:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:01:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:01:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:01:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:01:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:02:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:02:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:02:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:02:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:02:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:02:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:02:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:02:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:02:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:02:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:02:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:02:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:02:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:02:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:02:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:03:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:03:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:03:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:04:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:04:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:04:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:04:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:04:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:04:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:05:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:05:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:05:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:05:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:05:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:05:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:06:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:06:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:06:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:06:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:06:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:06:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:06:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:06:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:06:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:07:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:07:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:07:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:08:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:08:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:08:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:10:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:10:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:10:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:13:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:13:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:13:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:13:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:13:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:13:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:20:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:20:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:20:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:20:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:20:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:20:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:25:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:25:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:25:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:30:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:30:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:30:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:31:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:31:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:31:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:33:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:33:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:33:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:33:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:33:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:33:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:34:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:34:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:34:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:35:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:35:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:35:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:37:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:37:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:37:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:38:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:38:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:38:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:38:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:38:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:38:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:39:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:39:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:39:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:39:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:39:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:39:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:41:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:41:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:41:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:41:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:41:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:41:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:41:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:41:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:41:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:44:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:44:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:44:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:44:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:44:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:44:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:44:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:44:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:44:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:44:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:44:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:44:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:55:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:55:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:55:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 12:58:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 12:58:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 12:58:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:00:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:00:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:00:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:02:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:02:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:02:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:04:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:04:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:04:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:04:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:04:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:04:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:08:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:08:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:08:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:14:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:14:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:14:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:15:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:15:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:15:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:17:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:17:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:17:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:20:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:20:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:20:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:21:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:21:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:21:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:23:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:23:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:23:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:23:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:23:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:23:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:23:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:23:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:23:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:24:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:24:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:24:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:24:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:24:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:24:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:26:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:26:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:26:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:26:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:26:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:26:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:26:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:26:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:26:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:26:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:26:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:26:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:27:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:27:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:27:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:29:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:29:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:29:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:40:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:40:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:40:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:40:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-05 13:40:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-05 13:40:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:40:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:40:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:44:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:44:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:44:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:49:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-05 13:49:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-05 13:49:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 13:49:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 13:49:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 13:50:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:50:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:50:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:50:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 13:50:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 13:50:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 13:51:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:51:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:51:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:51:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:51:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:51:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:51:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 13:52:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 13:52:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 13:52:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:52:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:52:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:52:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:52:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:52:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:54:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:54:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:54:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:55:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:55:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:55:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:56:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:56:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:56:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:56:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:56:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:56:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 13:57:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 13:57:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 13:57:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:03:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:03:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:03:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:03:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:03:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:03:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:04:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:04:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:04:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:06:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:06:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:06:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:10:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:10:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:10:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:11:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-05 14:11:47 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-05 14:12:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:12:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:12:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:12:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-05 14:12:21 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-05 14:12:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:12:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:12:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:13:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:13:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:13:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:13:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:13:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:13:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:14:53 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3236, NULL, 5000, 'D', '')
ERROR - 2026-01-05 14:14:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:14:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:14:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:14:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:14:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:14:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:15:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:15:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:15:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:15:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:15:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:15:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:15:45 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3238, NULL, 5000, 'D', '')
ERROR - 2026-01-05 14:15:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:15:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:15:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:15:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:15:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:15:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:15:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:15:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:15:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:17:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:17:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:17:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:17:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:17:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:17:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:18:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:18:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:18:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:19:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:19:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:19:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:20:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:20:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:20:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:20:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:20:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:20:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:20:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:20:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:20:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:20:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:20:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:20:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:20:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:20:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:20:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:21:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:21:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:21:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:23:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:23:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:23:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:24:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:24:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:24:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:26:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:26:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:26:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:28:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:28:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:28:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:31:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:31:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:31:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:33:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:33:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:33:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:33:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:33:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:33:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:34:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:34:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:34:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:35:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:35:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:35:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:36:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:36:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:36:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:36:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:36:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:36:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:36:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:36:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:36:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:38:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:38:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:38:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:38:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:38:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:38:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:38:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:38:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:38:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:39:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:39:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:39:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:40:58 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 14:41:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:41:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:41:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:41:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:41:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:41:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:43:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:43:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:43:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:43:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:43:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:43:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:45:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:45:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:45:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:47:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:47:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:47:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:49:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:49:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:49:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:52:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:52:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:52:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:53:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:53:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:53:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:54:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:54:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:54:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:55:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:55:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:55:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:57:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-05 14:57:15 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-05 14:57:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:57:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:57:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:58:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:58:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:58:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 14:59:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 14:59:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 14:59:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:00:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:00:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:00:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:00:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:00:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:00:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:00:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:00:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:00:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:03:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:03:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:03:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:03:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:03:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:03:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:03:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:03:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:03:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:04:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:04:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:04:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:04:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:04:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:04:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:05:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:05:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:05:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:06:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:06:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:06:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:08:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 15:08:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 15:08:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 15:08:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:08:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:08:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:09:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 15:09:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 15:09:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 15:09:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:09:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:09:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:16:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:16:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:16:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:17:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:17:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:17:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:19:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:19:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:19:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:20:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:20:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:20:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:22:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:22:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:22:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:22:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:22:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:22:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:24:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-05 15:24:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-05 15:24:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-05 15:24:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-05 15:25:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:25:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:25:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:27:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:27:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:27:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:27:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:27:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:27:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:27:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:27:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:27:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:28:28 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3244, NULL, 6000, 'D', '')
ERROR - 2026-01-05 15:28:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:28:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:28:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:28:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:28:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:28:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:29:32 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3246, NULL, 6000, 'D', '')
ERROR - 2026-01-05 15:29:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:29:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:29:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:29:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:29:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:29:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:30:31 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3248, NULL, 6000, 'D', '')
ERROR - 2026-01-05 15:30:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:30:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:30:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:30:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:30:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:30:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:32:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:32:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:32:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:34:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:34:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:34:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:34:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:34:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:34:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:34:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:34:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:34:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:36:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:36:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:36:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:38:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:38:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:38:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:41:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:41:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:41:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:41:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:41:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:41:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:46:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 15:47:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:47:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:47:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:47:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:47:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:47:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:48:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:48:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:48:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:49:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:49:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:49:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:51:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:51:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:51:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:51:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:51:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:51:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:52:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:52:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:52:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:54:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:54:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:54:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:55:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:55:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:55:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:58:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:58:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:58:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:58:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:58:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:58:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 15:58:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 15:58:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 15:58:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:00:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:00:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:00:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:04:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:04:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:04:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:05:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:05:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:05:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:07:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 16:07:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 16:07:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 16:09:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:09:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:09:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:09:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:09:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:09:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:10:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:10:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:10:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:10:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:10:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:10:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:11:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:11:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:11:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:11:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 16:11:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 16:11:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 16:12:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:12:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:12:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:13:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:13:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:13:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:15:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:15:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:15:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:16:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:16:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:16:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:22:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:22:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:22:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:23:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:23:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:23:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:25:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:25:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:25:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:28:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:28:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:28:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:39:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:39:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:39:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:40:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:40:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:40:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:48:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:48:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:48:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:48:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:48:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:48:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:49:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:49:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:49:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:50:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:50:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:50:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:52:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:52:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:52:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 16:55:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 16:55:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 16:55:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 17:42:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 17:42:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 17:42:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 17:43:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-05 17:43:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-05 17:43:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-05 17:44:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:44:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:44:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:45:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:45:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:45:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:46:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:46:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:46:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:46:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:46:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:46:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:46:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:46:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:47:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:47:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:47:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:47:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:47:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:48:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:48:18 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 17:48:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-05 18:08:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-05 18:08:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-05 18:26:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-05 18:26:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
