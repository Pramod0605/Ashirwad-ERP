<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-24 09:45:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-24 09:45:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-24 09:55:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 09:55:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 09:55:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 09:55:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 09:56:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 09:56:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 09:56:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 09:57:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 09:57:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 09:57:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 09:57:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 09:57:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 09:57:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 09:58:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 09:58:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 09:58:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 09:59:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 09:59:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 09:59:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 10:00:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 10:00:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 10:00:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 10:00:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 10:00:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 10:00:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 10:10:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 10:10:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 10:10:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 10:30:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 10:30:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 10:30:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 10:30:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 10:30:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 10:30:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 10:30:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 10:30:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 10:30:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 10:30:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 10:32:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 10:32:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 10:32:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 10:32:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 10:32:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 10:32:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 10:39:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 10:39:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 10:39:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 10:39:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 10:39:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 10:39:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 10:50:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 10:50:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 10:50:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 10:51:51 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 10:51:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 10:51:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 10:52:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 10:52:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 10:52:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 10:53:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 10:53:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 10:53:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 10:56:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 10:56:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 10:56:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 10:56:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 10:56:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 10:56:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 11:06:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:07:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:07:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:07:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 11:07:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 11:07:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 11:12:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:12:31 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:12:31 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:12:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 11:12:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 11:12:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 11:13:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:13:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:13:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:13:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 11:13:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 11:13:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 11:14:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 11:14:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 11:14:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 11:18:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:41:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 11:41:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 11:41:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 11:42:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 11:42:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 11:42:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 11:43:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-24 11:43:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-24 11:45:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 11:45:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 11:45:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 11:47:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:47:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:47:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:47:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 11:47:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 11:47:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 11:54:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:54:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:54:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:56:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 11:56:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 11:56:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 11:58:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:58:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:58:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 11:58:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 11:58:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 11:58:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 12:06:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 12:06:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 12:06:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 12:06:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 12:06:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 12:06:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 12:42:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 12:42:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 12:42:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 12:42:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 12:42:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 12:42:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 12:43:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 12:43:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 12:43:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 12:53:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 12:53:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 12:53:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 12:54:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 12:54:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 12:54:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 12:55:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 12:55:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 12:55:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 13:29:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 13:29:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 13:29:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 13:31:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 13:31:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 13:31:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 13:32:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 13:32:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 13:32:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 13:33:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 13:33:47 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 13:33:47 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 13:34:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 13:34:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 13:34:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 13:36:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 13:36:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 13:36:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 13:40:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 13:40:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 13:40:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 13:41:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 13:41:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 13:41:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 13:46:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 13:46:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 13:46:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 13:49:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 13:49:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 13:49:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 13:56:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 13:56:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 13:56:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 13:56:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 13:56:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 13:56:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:03:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:03:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:03:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:04:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 14:22:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:22:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:22:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:30:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:30:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:30:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:37:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:37:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:37:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:37:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:37:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:37:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:38:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:38:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:38:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:38:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:38:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:38:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:41:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:41:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:41:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:48:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:48:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:48:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:49:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:49:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:49:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:51:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:51:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:51:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:52:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:52:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:52:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:53:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:53:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:53:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:54:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:54:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:54:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:54:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:54:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:54:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:55:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:55:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:55:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:58:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:58:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:58:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 14:59:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 14:59:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 14:59:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:00:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:00:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:00:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:01:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:01:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:01:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:04:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:04:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:04:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:04:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:04:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:04:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:05:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:05:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:05:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:07:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-24 15:07:01 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-24 15:07:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:07:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:07:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:08:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:08:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:08:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:08:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:08:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:08:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:08:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:08:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:08:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:12:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:12:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:12:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:13:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:13:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:13:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:14:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-24 15:14:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-24 15:15:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:15:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:15:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:22:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:22:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:22:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:26:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:26:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:26:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:27:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:27:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:27:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:28:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:28:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:28:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:29:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:29:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:29:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:29:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:29:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:29:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:29:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:29:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:29:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:30:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:30:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:30:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:31:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:31:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:31:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:32:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:32:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:32:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:32:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:32:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:32:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:34:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:34:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:34:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:35:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-24 15:35:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-24 15:35:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:35:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:35:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:36:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:36:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:36:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:38:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:38:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:38:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:39:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:39:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:39:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:44:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:44:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:44:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:44:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:44:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:44:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:44:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:44:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:44:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:46:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:46:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:46:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:47:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:47:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:47:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:48:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:48:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:48:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:49:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:49:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:49:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:56:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:56:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:56:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 15:57:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 15:57:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 15:57:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:06:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:06:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:06:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:06:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:06:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:06:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:07:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:07:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:07:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:11:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:11:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:11:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:11:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:11:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:11:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:16:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:16:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:16:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:23:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:23:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:23:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:29:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:29:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:29:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:31:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:31:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:31:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:32:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:32:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:32:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:42:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:42:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:42:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:46:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:46:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:46:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:46:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 16:49:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:49:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:49:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:50:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:50:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:50:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:50:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:50:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:50:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:51:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:51:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:51:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:51:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:51:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:51:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:52:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:52:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:52:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:52:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:52:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:52:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:53:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:53:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:53:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:54:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:54:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:54:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:55:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:55:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:55:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:55:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:55:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:55:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:56:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:56:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:56:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 16:58:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 16:58:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 16:58:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 17:00:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 17:00:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 17:00:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 17:02:47 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4312, NULL, 3600, 'D', '4 months stayed in hostel')
ERROR - 2026-03-24 17:02:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 17:02:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 17:02:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 17:02:51 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4313, NULL, 3600, 'D', '4 months stayed in hostel')
ERROR - 2026-03-24 17:02:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 17:02:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 17:02:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 17:04:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 17:04:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 17:04:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 17:04:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 17:04:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 17:04:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 17:08:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 17:08:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 17:08:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 17:11:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 17:11:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 17:11:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 17:14:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-24 17:14:55 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-24 17:15:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 17:15:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 17:15:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 17:15:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 17:15:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 17:15:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 17:26:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-24 17:26:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-24 17:26:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 17:26:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 17:26:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 17:47:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-24 17:47:33 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-24 18:00:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 18:00:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 18:00:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 18:11:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 18:11:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 18:11:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 18:11:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 18:11:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 18:11:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 18:11:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 18:11:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 18:11:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-24 18:11:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 18:11:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 18:11:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 18:42:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-24 18:42:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-24 18:42:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-24 20:10:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-24 20:10:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
