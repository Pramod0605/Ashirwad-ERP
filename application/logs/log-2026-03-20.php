<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-20 09:43:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 09:43:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 09:43:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 09:49:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 09:49:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 09:49:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 09:50:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 09:50:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 09:50:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 09:52:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 09:52:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 09:52:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:01:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-20 10:01:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-20 10:01:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:01:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:01:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:01:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:01:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:01:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:01:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:02:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:02:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:02:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:02:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:02:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:02:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:02:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:02:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:02:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:04:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:04:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:04:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:06:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:06:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:06:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:06:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:06:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:06:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:07:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:07:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:07:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:08:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:08:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:08:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:10:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:10:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:10:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:13:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:13:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:13:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:14:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:14:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:14:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:14:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:14:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:14:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:14:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:14:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:14:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:15:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:15:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:15:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:15:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:15:27 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:15:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:15:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:15:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:15:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:15:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:15:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:15:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:16:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:16:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:16:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:16:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:17:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:17:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:17:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:17:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:17:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:17:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:18:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:18:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:18:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:18:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:18:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:19:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:19:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:19:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:19:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:19:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:19:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:20:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:20:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:20:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:20:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:20:46 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:20:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:20:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:20:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:20:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:21:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:21:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:21:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:22:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:22:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:22:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:22:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:22:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:22:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:22:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:22:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:22:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:23:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:23:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:23:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:24:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:24:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:24:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:24:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:24:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:24:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:25:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:25:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:25:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:25:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:25:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:25:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:29:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:29:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:29:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:29:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:29:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:29:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:29:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:29:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:29:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:29:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:29:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:29:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:29:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:29:46 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:29:46 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:29:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:29:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:29:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:31:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:31:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:31:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:31:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:31:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:31:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:32:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:32:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:32:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:32:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:32:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:32:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:32:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-20 10:32:49 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-20 10:32:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-20 10:32:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-20 10:33:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:33:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:33:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:33:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:33:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:33:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:33:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:33:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:33:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:33:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:33:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:33:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:35:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:35:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:35:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:38:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:39:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:39:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:39:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:39:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:39:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:39:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:39:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:39:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:40:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:40:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:40:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:40:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:40:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:40:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:40:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:40:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:40:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:44:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:44:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:44:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:45:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:45:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:45:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:47:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:47:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:47:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:48:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:48:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:48:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:49:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:49:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:49:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:51:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:51:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:51:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:52:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:52:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:52:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:54:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-20 10:54:16 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-20 10:54:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 10:55:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:55:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:55:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:55:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:55:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:55:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:56:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:56:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:56:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:57:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:57:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:57:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:57:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:57:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:57:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:57:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:57:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:57:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:58:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:58:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:58:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 10:58:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 10:58:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 10:58:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 11:00:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 11:00:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 11:00:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-20 11:03:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 11:03:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 11:03:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 11:03:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 11:03:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 11:03:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 11:34:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 11:34:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 11:34:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 11:47:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 11:47:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 11:47:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 11:47:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 11:47:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 11:47:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 11:53:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 11:53:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 11:53:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 11:58:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 11:58:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 11:58:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 12:00:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 12:00:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 12:00:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 12:12:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 12:12:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 12:12:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 12:13:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 12:13:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 12:13:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 12:19:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 12:19:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 12:19:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 12:19:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 12:19:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 12:19:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 12:20:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 12:20:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 12:20:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 12:20:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 12:20:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 12:20:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 12:32:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 12:32:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 12:32:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 12:33:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 12:33:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 12:33:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 12:37:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 12:37:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 12:37:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 12:40:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 12:40:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 12:40:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 12:44:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 12:44:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 12:44:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 13:01:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 13:01:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 13:01:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 13:02:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 13:02:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 13:02:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 13:03:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 13:03:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 13:03:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 13:04:04 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4269, NULL, 6000, 'D', '')
ERROR - 2026-03-20 13:04:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 13:04:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 13:04:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 13:04:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 13:04:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 13:04:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 13:06:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 13:06:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 13:06:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 13:06:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 13:06:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 13:06:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 13:08:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 13:08:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 13:08:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 13:12:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 13:12:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 13:12:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 13:13:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 13:13:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 13:13:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 13:21:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 13:21:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 13:21:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 13:48:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-20 13:48:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-20 13:49:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 13:49:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 13:49:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 13:50:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-20 13:50:49 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-20 13:51:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 13:51:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 13:51:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 13:51:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 13:51:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 13:51:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 15:32:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-20 15:32:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-20 15:32:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 15:32:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 15:32:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 16:53:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 16:53:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 16:53:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 17:05:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 17:05:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 17:05:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 17:13:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 17:13:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 17:13:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-20 17:51:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-20 17:51:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-20 17:51:51 --> Could not find the language line "discount_this_action_is_irreversible"
