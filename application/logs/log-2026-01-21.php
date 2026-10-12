<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-21 09:12:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-21 09:12:24 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-21 09:12:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:12:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:12:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:12:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 09:12:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 09:12:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 09:19:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:19:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:19:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:19:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 09:19:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 09:19:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 09:21:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:21:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:21:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:23:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 09:23:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 09:23:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 09:27:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 09:27:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 09:27:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 09:32:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:32:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:32:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:32:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 09:32:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 09:32:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 09:33:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 09:33:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 09:33:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 09:36:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:40:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:49:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:49:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:50:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 09:50:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 09:50:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 09:50:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 09:50:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 09:50:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 09:51:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:51:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:51:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:51:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:51:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 09:51:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 09:51:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 09:52:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:52:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:52:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:52:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 09:52:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 09:52:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 09:53:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:53:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:53:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 09:53:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 09:53:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 09:53:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 09:54:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 09:54:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 09:54:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 09:55:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 09:55:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 09:55:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:00:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:00:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:00:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:12:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:12:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:12:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:16:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:16:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:16:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:16:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:16:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:16:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:21:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:21:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:21:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:23:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:23:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:23:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:24:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-21 10:24:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-21 10:24:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:24:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:24:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:26:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:26:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:26:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:27:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:27:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:27:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:29:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:29:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:29:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:34:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:35:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:35:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:35:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:35:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:35:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:45:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:45:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:45:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:48:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:48:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:48:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:48:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:48:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:48:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:52:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:52:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:52:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:56:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:56:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:56:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:57:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:57:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:57:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:58:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:58:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:58:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 10:59:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-21 10:59:05 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-21 10:59:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 10:59:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 10:59:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:00:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:00:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:00:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:03:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:03:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:03:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:03:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:03:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:03:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:05:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:05:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:05:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:05:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:05:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:05:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:07:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:07:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:07:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:10:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:10:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:10:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:12:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:12:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:12:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:13:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:13:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:13:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:16:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:16:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:16:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:21:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:21:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:21:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:23:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:23:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:23:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:23:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:23:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:23:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:23:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:23:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:23:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:24:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-21 11:24:18 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-21 11:24:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 11:24:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 11:24:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 11:24:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:24:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:24:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:25:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:25:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:25:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:28:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:28:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:28:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:28:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:28:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:28:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:32:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:32:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:32:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:32:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:32:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:32:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:33:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:33:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:33:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:34:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:34:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:34:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:34:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:34:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:34:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:39:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 11:39:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 11:39:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 11:40:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:40:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:40:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:40:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:40:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:40:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:41:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 11:41:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 11:41:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 11:41:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 11:42:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:42:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:42:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:42:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:42:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:42:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:44:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:44:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:44:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:45:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 11:45:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 11:45:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 11:45:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 11:45:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:45:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:45:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:47:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:47:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:47:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:48:25 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3495, NULL, 10000, 'D', '')
ERROR - 2026-01-21 11:48:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:48:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:48:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:48:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 11:49:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 11:49:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:49:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:49:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:49:54 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3496, NULL, 10000, 'D', '')
ERROR - 2026-01-21 11:49:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:49:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:49:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:50:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:50:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:50:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:50:52 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3497, NULL, 10000, 'D', '')
ERROR - 2026-01-21 11:50:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:50:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:50:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:52:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:52:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:52:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:55:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:55:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:55:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:56:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:56:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:56:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:57:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:57:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:57:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 11:59:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 11:59:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 11:59:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:00:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:00:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:00:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:01:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:01:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:01:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:08:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 12:08:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 12:08:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 12:08:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:08:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:08:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:10:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:10:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:10:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:11:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:11:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:11:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:13:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:13:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:13:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:14:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:14:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:14:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:14:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:14:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:14:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:15:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:15:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:15:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:32:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:32:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:32:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:33:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:33:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:33:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:36:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:36:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:36:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:37:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:37:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:37:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:38:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:38:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:38:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:40:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-21 12:40:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-21 12:42:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:42:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:42:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:45:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:45:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:45:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:50:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:50:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:50:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:52:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:52:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:52:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:53:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:53:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:53:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:53:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-21 12:53:41 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-21 12:53:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 12:53:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 12:53:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 12:54:00 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 12:56:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 12:56:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 12:56:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 12:56:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 12:57:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:57:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:57:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 12:59:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 12:59:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 12:59:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:00:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:00:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:00:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:01:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:01:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:01:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:03:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-21 13:03:25 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-21 13:03:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:03:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:03:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:04:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:04:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:04:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:05:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:05:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:05:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:22:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-21 13:22:46 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-21 13:23:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:23:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:23:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:24:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:24:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:24:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:24:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-21 13:24:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-21 13:25:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:25:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:25:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:25:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:25:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:25:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:26:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:26:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:26:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:26:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:26:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:26:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:26:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:26:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:26:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:27:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:27:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:27:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:27:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:27:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:27:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:32:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:32:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:32:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:33:24 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3515, NULL, 5000, 'D', '')
ERROR - 2026-01-21 13:33:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:33:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:33:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:34:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:34:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:34:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:34:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:34:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:34:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:36:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:36:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:36:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:37:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:37:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:37:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:43:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-21 13:43:46 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-21 13:43:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 13:43:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 13:43:58 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 13:43:58 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 13:43:58 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 13:44:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 13:44:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 13:44:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 13:44:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 13:44:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 13:44:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:44:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:44:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:47:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:47:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:47:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:50:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:50:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:50:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:50:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:50:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:50:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:51:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:51:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:51:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:51:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:51:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:51:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:52:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 13:52:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 13:52:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 13:55:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 13:55:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:22:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-21 14:22:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-21 14:22:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:23:00 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:23:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:23:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:23:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:23:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:23:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:23:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:23:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:23:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:23:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:23:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:23:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:25:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:25:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:25:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:25:45 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:26:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:26:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:26:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:27:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:28:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:28:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:28:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:28:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:28:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:29:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:29:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:29:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:29:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:29:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:29:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:32:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:32:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:32:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:33:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:33:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:33:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:37:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:37:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:37:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:37:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:37:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:37:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:37:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:37:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:37:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:37:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:37:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:37:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:37:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:37:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:37:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:38:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:38:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:38:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:38:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:38:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:38:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:38:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:38:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:38:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:41:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:41:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:41:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:48:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-21 14:48:15 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-21 14:48:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:48:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:48:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:48:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 14:53:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:53:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:53:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:54:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:54:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:54:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:56:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:56:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:56:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:58:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:58:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:58:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 14:58:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 14:58:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 14:58:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 15:01:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 15:01:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 15:01:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 15:03:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 15:03:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 15:03:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 15:04:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 15:04:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 15:04:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 15:07:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 15:07:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 15:07:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 15:07:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 15:07:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 15:07:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 15:10:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 15:10:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 15:10:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 15:17:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 15:17:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 15:17:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 15:33:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 15:33:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 15:33:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 15:33:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 15:33:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 15:33:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 15:33:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 15:33:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 15:33:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 15:33:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 15:33:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 15:33:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 15:34:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 15:37:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 15:37:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 15:37:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 15:38:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 15:38:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 15:38:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 15:38:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 15:38:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 15:43:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 15:43:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 15:43:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 15:44:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 15:44:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 15:44:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 15:58:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 15:58:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 15:58:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 16:00:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 16:00:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 16:00:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 16:00:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 16:00:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 16:00:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 16:01:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 16:01:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 16:01:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 16:04:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 16:04:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 16:04:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 16:05:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 16:05:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 16:05:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 16:07:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 16:07:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 16:07:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 16:14:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 16:15:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 16:49:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 16:49:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 16:49:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 16:50:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 16:50:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 16:50:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 16:50:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 16:50:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 16:50:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 17:08:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 17:08:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 17:08:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 17:21:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 17:21:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 17:21:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 17:23:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-21 17:23:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-21 17:23:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 17:23:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 17:23:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 17:24:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 17:24:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 17:24:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 17:24:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 17:24:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 17:24:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 17:24:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 17:25:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 17:28:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 17:28:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 17:28:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 17:42:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 17:42:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 17:42:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 17:43:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 17:43:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 17:43:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 17:45:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 17:45:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 17:45:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 17:45:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 17:45:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 17:45:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-21 18:15:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-21 18:26:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-21 18:26:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-21 18:27:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-21 18:27:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-21 18:27:16 --> Could not find the language line "discount_this_action_is_irreversible"
