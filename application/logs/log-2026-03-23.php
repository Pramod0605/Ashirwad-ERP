<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-23 09:54:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-23 09:54:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-23 09:54:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 09:54:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 09:54:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 09:54:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 09:54:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 09:54:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:01:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-23 10:01:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-23 10:01:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-23 10:01:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-23 10:02:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:02:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:02:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:02:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:02:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:02:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:03:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:03:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:03:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:04:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:04:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:04:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:04:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:04:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:04:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:08:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:08:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:08:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:08:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:08:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:08:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:08:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:08:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:08:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:11:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:11:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:11:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:11:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:11:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:11:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:11:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:11:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:11:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:11:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:11:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:11:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:12:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:12:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:12:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:12:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:12:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:12:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:12:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:12:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:12:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:13:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:13:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:13:51 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:13:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:13:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:13:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:14:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:14:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:14:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:15:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:15:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:15:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:16:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:16:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:16:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:20:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:20:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:20:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:20:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:20:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:20:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:41:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:41:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:41:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:42:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:42:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:42:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:44:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:44:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:44:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:47:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:47:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:47:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:48:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:48:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:48:51 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:49:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:49:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:49:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:50:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:50:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:50:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:51:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:51:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:51:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:52:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:52:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:52:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:52:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:52:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:52:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:54:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:54:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:54:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:54:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:54:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:54:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 10:57:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:57:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:57:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 10:57:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 10:57:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 10:57:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:04:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:04:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:04:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:04:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:04:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:04:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:09:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:09:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:09:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:09:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:09:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:09:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:16:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:16:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:16:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:16:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:16:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:16:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:25:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:25:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:25:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:25:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:25:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:25:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:27:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:27:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:27:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:30:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:31:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:31:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:31:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:31:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:31:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:34:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:34:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:34:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:34:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:34:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:34:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:35:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:36:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:36:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:36:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:36:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:36:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:38:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:38:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:38:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:39:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:39:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:39:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:43:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:44:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:44:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:44:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:44:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:44:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:46:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:46:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:46:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:46:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:46:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:46:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:46:35 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:46:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:46:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:46:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:46:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:46:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:49:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:49:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:49:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:50:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:50:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:50:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:50:44 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:50:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:50:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:51:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:51:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:51:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:52:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:52:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:52:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:53:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:53:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:53:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:53:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:53:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:53:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 11:54:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:54:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:54:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:55:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:55:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:55:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 11:55:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 11:55:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 11:55:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 12:00:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 12:00:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 12:00:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 12:00:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 12:00:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 12:00:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 12:02:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 12:02:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 12:02:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 12:02:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 12:02:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 12:02:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 12:17:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 12:17:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 12:17:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 12:17:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 12:17:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 12:22:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 12:22:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 12:22:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 12:22:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 12:22:47 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 12:22:47 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 12:22:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 12:22:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 12:22:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 12:23:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 12:23:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 12:23:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 12:26:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 12:26:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 12:26:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 12:27:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 12:27:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 12:27:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 12:55:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 12:55:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 12:55:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 12:58:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 12:58:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 12:58:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 13:01:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 13:01:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 13:01:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 13:16:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 13:16:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 13:16:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 13:41:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 13:41:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 13:41:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 13:55:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 13:55:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 13:55:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 13:57:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 13:57:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 13:57:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 13:58:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 13:58:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 13:58:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 13:59:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 13:59:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 13:59:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 14:01:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 14:01:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 14:01:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 14:01:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 14:01:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 14:01:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 14:01:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 14:01:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 14:01:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 14:05:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 14:05:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 14:05:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 14:06:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 14:06:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 14:06:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 14:07:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 14:07:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 14:07:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 14:07:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 14:07:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 14:07:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 14:16:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 14:16:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 14:16:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 14:17:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 14:17:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 14:17:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 14:17:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 14:17:47 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 14:17:47 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 14:17:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 14:17:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 14:17:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 14:37:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 14:37:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 14:37:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 15:04:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 15:04:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 15:04:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 15:04:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 15:04:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 15:04:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 15:06:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-23 15:06:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-23 15:06:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 15:06:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 15:06:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 15:06:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 15:06:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 15:06:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 15:07:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 15:07:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 15:07:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 15:07:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 15:07:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 15:07:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 15:15:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 15:15:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 15:15:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 15:15:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 15:15:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 15:15:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 15:16:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 15:16:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 15:16:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 15:20:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 15:20:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 15:20:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 15:20:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 15:20:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 15:20:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 15:38:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 15:38:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 15:38:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 15:41:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 15:41:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 15:41:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 15:50:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 15:50:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 15:50:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 15:54:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 15:54:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 15:54:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 15:57:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 15:57:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 15:57:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 16:00:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 16:00:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 16:00:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 16:03:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 16:03:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 16:03:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 16:05:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 16:05:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 16:05:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 16:06:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-23 16:06:39 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-23 16:10:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 16:10:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 16:10:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 16:13:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 16:13:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 16:13:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 16:16:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 16:16:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 16:16:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 16:18:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 16:18:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 16:18:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 16:19:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 16:19:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 16:19:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 16:25:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 16:25:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 16:25:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 16:27:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 16:27:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 16:27:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 16:56:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 16:56:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 16:56:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 17:19:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 17:19:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 17:19:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 17:21:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 17:21:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 17:21:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 17:23:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 17:23:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 17:23:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 17:30:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 17:30:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 17:30:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 17:33:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 17:33:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 17:33:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 17:35:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 17:35:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 17:35:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 17:36:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 17:36:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 17:36:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 17:38:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 17:38:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 17:38:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 17:44:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 17:44:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 17:44:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 17:49:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 17:49:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 17:49:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 17:50:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 17:50:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 17:50:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 17:50:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 17:50:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 17:50:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 17:52:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 17:52:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 17:52:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 17:53:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 17:53:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 17:53:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 17:58:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 17:58:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 17:58:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 17:59:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 17:59:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 17:59:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:02:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 18:02:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 18:02:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 18:02:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-23 18:02:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:02:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:02:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:06:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:06:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:06:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:13:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:13:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:13:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:17:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:17:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:17:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:18:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:18:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:18:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:23:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:23:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:23:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:24:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:24:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:24:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:25:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:25:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:25:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:26:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:26:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:26:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:27:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:27:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:27:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:28:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:28:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:28:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:46:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:46:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:46:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:47:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:47:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:47:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:50:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:50:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:50:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:53:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:53:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:53:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:54:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:54:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:54:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:55:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:55:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:55:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:56:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:56:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:56:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 18:57:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 18:57:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 18:57:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 19:37:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 19:37:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 19:37:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 19:42:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 19:42:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 19:42:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 19:43:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 19:43:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 19:43:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 19:43:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 19:43:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 19:43:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 19:44:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 19:44:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 19:44:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-23 19:44:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-23 19:44:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-23 19:44:19 --> Could not find the language line "discount_this_action_is_irreversible"
