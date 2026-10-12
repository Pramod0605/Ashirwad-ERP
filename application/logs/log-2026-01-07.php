<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-07 10:22:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-07 10:22:47 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-07 10:24:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 10:24:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 10:24:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 10:26:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 10:26:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 10:26:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 10:30:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 10:30:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 10:30:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 10:30:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 10:30:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 10:30:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 10:31:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 10:31:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 10:31:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 10:31:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 10:31:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 10:31:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 10:32:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 10:32:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 10:32:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 10:43:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 10:43:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 10:43:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 10:43:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 10:43:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 10:43:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 10:44:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 10:44:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 10:44:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 10:44:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 10:44:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 10:44:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 10:44:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 10:45:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 10:45:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 10:45:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 10:45:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 10:45:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 10:45:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 10:45:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 10:45:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 10:45:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 10:45:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 10:45:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 10:50:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 10:50:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 10:50:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 10:50:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 10:50:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 10:50:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:00:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:00:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:00:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:00:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:00:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:00:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:03:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:03:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:03:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:05:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:05:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:05:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:09:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:09:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:09:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:10:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:10:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:10:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:12:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:12:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:12:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:12:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:12:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:12:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:20:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:20:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:20:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:21:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:21:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:21:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:22:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:22:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:22:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:23:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:23:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:23:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:25:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:25:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:25:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:25:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:25:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:25:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:26:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:26:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:26:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:31:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-07 11:31:18 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-07 11:31:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 11:31:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:31:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:31:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:33:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:33:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:33:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:34:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:34:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:34:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:35:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:35:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:35:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:35:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:35:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:35:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:37:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:37:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:37:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:41:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:41:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:41:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:42:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:42:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:42:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:48:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:48:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:48:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:50:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:50:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:50:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:53:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:53:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:53:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 11:59:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 11:59:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 11:59:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:00:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:00:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:00:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:01:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:01:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:01:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:02:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:02:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:02:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:02:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:02:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:02:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:03:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:03:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:03:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:03:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:03:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:03:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:04:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:04:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:04:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:04:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:04:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:04:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:06:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:06:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:06:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:07:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:07:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:07:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:08:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:08:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:08:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:09:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:09:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:09:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:09:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:09:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:09:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:10:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:10:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:10:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:13:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:13:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:13:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:14:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 12:14:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 12:14:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 12:14:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:14:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:14:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:15:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 12:16:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:16:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:16:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:16:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:16:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:16:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:17:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:17:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:17:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:17:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:17:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:17:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:17:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 12:18:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:18:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:18:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:18:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:18:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:18:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:19:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:19:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:19:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:20:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:20:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:20:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:22:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 12:22:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:22:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:22:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:24:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:24:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:24:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:26:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:26:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:26:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:26:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:26:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:26:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:27:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:27:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:27:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:27:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:27:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:27:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:27:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:27:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:27:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:28:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:28:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:28:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:29:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:29:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:29:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:29:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:29:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:29:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:29:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:29:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:29:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:30:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:30:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:30:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:31:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:31:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:31:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:32:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:32:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:32:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:32:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:32:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:32:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:32:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:32:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:32:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 12:52:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 12:52:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 12:52:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 13:01:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 13:01:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 13:01:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 13:38:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-07 13:38:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-07 13:38:09 --> Could not find the language line "error_occured"
ERROR - 2026-01-07 13:38:12 --> Could not find the language line "student_fee1"
ERROR - 2026-01-07 13:38:25 --> Could not find the language line "student_fee1"
ERROR - 2026-01-07 13:38:32 --> Could not find the language line "student_fee1"
ERROR - 2026-01-07 13:38:37 --> Could not find the language line "error_occured"
ERROR - 2026-01-07 13:38:40 --> Could not find the language line "student_fee1"
ERROR - 2026-01-07 13:38:49 --> Could not find the language line "student_fee1"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:38:52 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:39:43 --> Could not find the language line "error_occured"
ERROR - 2026-01-07 13:39:49 --> Could not find the language line "student_fee1"
ERROR - 2026-01-07 13:39:59 --> Could not find the language line "student_fee1"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:40:02 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:40:53 --> Could not find the language line "student_fee1"
ERROR - 2026-01-07 13:43:37 --> Could not find the language line "student_fee1"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:14 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-07 13:44:25 --> Could not find the language line "principal"
ERROR - 2026-01-07 13:56:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 13:56:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 13:56:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:01:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:01:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:01:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:03:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:03:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:03:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:03:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:03:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:03:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:04:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:04:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:04:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:05:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:05:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:05:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:06:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:06:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:06:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:06:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:06:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:06:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:06:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:06:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:06:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:33:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-07 14:33:48 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-07 14:35:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:35:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:35:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:36:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-07 14:36:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-07 14:36:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/duefeesremark.php 43
ERROR - 2026-01-07 14:36:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/duefeesremark.php 43
ERROR - 2026-01-07 14:36:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/duefeesremark.php 43
ERROR - 2026-01-07 14:36:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-07 14:36:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 14:36:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-07 14:37:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 14:37:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 14:37:45 --> Could not find the language line "not_generated"
ERROR - 2026-01-07 14:37:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-07 14:37:47 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-07 14:37:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:37:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:37:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:38:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:38:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:38:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:39:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:39:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:39:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:49:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:49:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:49:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:53:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:53:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:53:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:54:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:54:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:54:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:54:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:54:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:54:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:55:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:55:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:55:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:55:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:55:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:55:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 14:58:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 14:58:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 14:58:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:01:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:01:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:01:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:03:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:03:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:03:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:06:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:06:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:06:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:07:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:07:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:07:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:08:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:08:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:08:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:08:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:08:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:08:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:08:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:08:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:08:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:08:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:08:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:08:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:09:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-07 15:09:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/reportduefees.php 47
ERROR - 2026-01-07 15:10:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:10:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:10:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:10:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/reportduefees.php 47
ERROR - 2026-01-07 15:10:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-07 15:10:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-07 15:19:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:19:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:19:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:21:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:21:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:21:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:22:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:22:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:22:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:23:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:23:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:23:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:23:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:23:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:23:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:26:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:26:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:26:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:29:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:29:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:29:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:31:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:31:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:31:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:33:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:33:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:33:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:33:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:33:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:33:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:34:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:34:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:34:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:35:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:35:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:35:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:37:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:37:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:37:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:38:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:38:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:38:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:42:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:42:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:42:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:43:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:43:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:43:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:46:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:46:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:46:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:56:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:56:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:56:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:56:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:56:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:56:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:56:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:56:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:56:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:56:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:56:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:56:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:57:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:57:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:57:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 15:59:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 15:59:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 15:59:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 16:00:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 16:00:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 16:00:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-07 16:05:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-07 16:05:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-07 16:05:36 --> Could not find the language line "discount_this_action_is_irreversible"
