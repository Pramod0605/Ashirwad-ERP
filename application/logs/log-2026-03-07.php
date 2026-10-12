<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-07 10:02:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-07 10:02:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-07 10:02:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 10:02:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 10:02:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 10:02:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 10:03:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 10:03:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 10:03:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 10:03:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 10:03:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 10:03:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 10:03:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 10:03:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 10:06:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 10:06:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 10:06:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 10:39:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-07 10:39:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-07 10:39:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 10:39:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 10:39:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 10:41:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 10:41:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 10:41:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 10:44:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-07 10:44:33 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-07 10:45:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 10:45:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 10:45:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 10:48:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 10:48:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 10:48:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 11:06:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 11:06:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 11:06:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 11:07:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 11:07:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 11:07:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 11:14:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 11:14:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 11:14:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 11:14:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 11:14:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 11:14:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 11:23:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 11:23:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 11:23:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 11:30:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 11:30:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 11:30:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 11:33:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 11:33:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 11:33:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 11:35:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 11:35:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 11:35:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 11:39:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 11:39:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 11:39:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 11:40:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 11:40:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 11:40:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 11:45:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 11:45:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 11:45:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 11:57:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 11:57:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 11:57:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 11:57:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 11:57:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 11:57:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 11:58:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 11:58:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 11:58:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:02:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:02:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:02:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:05:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:05:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:05:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:05:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:05:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:05:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:05:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:05:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:05:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:06:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:06:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:06:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:06:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:06:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:06:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:07:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:07:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:07:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:13:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:13:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:13:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:17:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:17:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:17:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:22:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:22:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:22:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:22:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:22:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:22:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:24:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:24:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:24:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:24:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:24:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:24:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:25:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:25:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:25:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:25:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:25:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:25:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:25:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:25:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:25:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:29:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:29:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:29:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:29:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:29:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:29:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:31:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 12:32:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 12:32:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 12:32:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:32:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:32:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:35:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:35:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:35:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:37:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:37:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:37:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:38:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:38:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:38:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:39:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:39:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:39:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:41:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:41:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:41:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:44:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:44:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:44:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:45:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:45:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:45:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:45:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:45:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:45:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:49:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-07 12:49:22 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-07 12:52:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:52:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:52:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:52:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:52:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:52:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:53:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:53:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:53:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:53:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:53:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:53:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:54:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:54:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:54:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:55:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:55:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:55:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:55:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:55:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:55:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:56:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:56:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:56:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:56:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:56:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:56:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:57:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:57:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:57:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:57:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 12:57:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:57:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:57:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:57:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:57:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:57:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:57:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:57:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:57:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:58:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:58:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:58:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:58:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:58:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:58:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:59:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:59:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:59:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:59:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:59:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:59:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 12:59:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 12:59:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 12:59:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:00:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:00:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:00:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:00:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:00:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:00:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:00:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:00:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:00:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:01:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:01:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:01:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:01:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:01:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:01:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:02:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:02:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:02:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:03:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:03:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:03:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:03:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:03:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:03:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:04:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:04:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:04:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:05:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:05:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:05:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:07:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:07:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:07:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:17:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:17:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:17:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:19:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:19:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:19:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:21:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:21:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:21:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:22:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:22:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:22:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:22:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:22:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:22:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:23:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:23:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:23:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:26:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:26:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:26:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:26:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:26:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:26:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:27:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:27:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:27:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:30:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:30:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:30:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:30:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:30:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:30:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:30:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:30:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:30:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:33:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:33:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:33:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:35:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:35:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:35:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:35:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:35:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:35:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:36:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:36:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:36:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:36:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:36:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:36:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:37:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:37:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:37:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:37:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:37:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:37:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:38:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:38:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:38:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:39:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:39:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:39:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:39:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:39:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:39:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:40:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:40:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:40:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:40:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:40:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:40:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:40:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:40:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:40:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:41:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:41:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:41:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:41:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:41:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:41:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:42:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:42:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:42:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:42:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:42:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:42:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:43:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:43:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:43:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:44:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:44:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:44:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:44:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:44:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:44:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:45:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:45:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:45:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:46:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:46:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:46:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:48:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:48:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:48:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:52:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:52:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:52:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:53:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:53:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:53:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:55:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:55:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:55:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:57:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:57:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:57:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:59:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:59:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:59:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 13:59:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 13:59:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 13:59:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:00:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:00:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:00:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:02:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:02:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:02:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:03:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:03:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:03:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:04:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:04:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:04:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:10:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 14:10:31 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 14:10:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 14:10:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:10:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:10:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:10:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:10:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:10:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:10:46 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 14:10:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 14:10:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 14:11:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 14:11:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:11:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:11:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:11:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:11:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:11:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:12:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:12:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:12:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:12:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:12:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:12:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:13:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:13:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:13:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:18:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:18:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:18:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:18:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:18:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:18:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:18:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:18:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:18:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:20:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:20:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:20:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:21:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:21:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:21:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:21:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:21:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:21:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:22:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:22:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:22:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:24:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:24:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:24:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:24:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:24:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:24:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:27:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:27:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:27:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:32:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:32:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:32:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:32:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:32:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:32:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:33:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:33:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:33:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:34:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:34:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:34:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:34:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 14:34:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 14:34:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 14:34:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:34:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:34:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:41:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:41:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:41:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:41:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:41:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:41:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:42:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:42:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:42:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:43:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:43:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:43:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:43:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:43:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:43:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:46:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:46:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:46:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:48:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:48:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:48:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:50:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:50:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:50:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:50:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:50:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:50:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:51:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:51:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:51:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:52:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:52:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:52:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:53:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:53:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:53:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:53:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:53:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:53:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:54:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:54:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:54:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:55:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:55:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:55:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:55:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:55:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:55:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:58:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 14:58:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 14:58:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 14:58:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-07 14:58:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-07 14:58:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 14:58:41 --> Could not find the language line "error_occured"
ERROR - 2026-03-07 14:58:46 --> Could not find the language line "student_fee1"
ERROR - 2026-03-07 14:59:04 --> Could not find the language line "student_fee1"
ERROR - 2026-03-07 14:59:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 14:59:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 14:59:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 14:59:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 14:59:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 14:59:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:00:23 --> Could not find the language line "error_occured"
ERROR - 2026-03-07 15:00:27 --> Could not find the language line "student_fee1"
ERROR - 2026-03-07 15:00:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:00:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:00:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:00:51 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-07 15:00:51 --> Could not find the language line "principal"
ERROR - 2026-03-07 15:00:51 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-07 15:00:51 --> Could not find the language line "principal"
ERROR - 2026-03-07 15:01:07 --> Could not find the language line "student_fee1"
ERROR - 2026-03-07 15:01:44 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-07 15:01:44 --> Could not find the language line "principal"
ERROR - 2026-03-07 15:01:44 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-07 15:01:44 --> Could not find the language line "principal"
ERROR - 2026-03-07 15:01:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:01:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:01:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:01:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:02:37 --> Could not find the language line "student_fee1"
ERROR - 2026-03-07 15:02:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:02:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:02:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:02:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:02:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:02:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:02:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:02:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:02:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:02:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:03:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:03:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:03:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:03:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:03:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:03:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:03:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:04:55 --> Could not find the language line "student_fee1"
ERROR - 2026-03-07 15:04:58 --> Could not find the language line "error_occured"
ERROR - 2026-03-07 15:05:02 --> Could not find the language line "student_fee1"
ERROR - 2026-03-07 15:05:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:05:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:05:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:05:10 --> Could not find the language line "student_fee1"
ERROR - 2026-03-07 15:05:21 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-07 15:05:21 --> Could not find the language line "principal"
ERROR - 2026-03-07 15:05:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:05:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:05:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:05:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:05:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:05:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:06:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:06:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:06:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:06:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:06:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:06:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 09:36:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 15:06:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:06:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:06:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:06:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:06:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:06:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:06:41 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-03-07 15:06:47 --> Could not find the language line "error_occured"
ERROR - 2026-03-07 15:06:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:06:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:06:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:06:52 --> Could not find the language line "student_fee1"
ERROR - 2026-03-07 15:07:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:07:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:07:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:07:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:07:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:07:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:07:27 --> Could not find the language line "student_fee1"
ERROR - 2026-03-07 15:07:31 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-07 15:07:31 --> Could not find the language line "principal"
ERROR - 2026-03-07 15:08:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:08:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:08:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:09:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:09:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:09:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:10:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:10:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:10:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:10:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:10:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:10:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:11:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:11:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:11:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:12:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:12:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:12:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:12:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:12:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:12:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:12:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:12:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:12:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:13:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:13:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:13:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:13:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:13:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:13:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:14:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:14:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:14:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:15:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:15:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:15:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:17:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:17:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:17:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:21:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:21:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:21:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:22:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:22:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:22:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:23:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:23:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:23:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:23:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-07 15:23:16 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-07 15:23:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-07 15:23:18 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-07 15:23:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:23:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:23:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:23:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:23:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:23:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:27:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:27:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:27:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:27:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:27:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:27:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:27:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:27:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:27:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:28:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:28:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:28:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:29:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:29:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:29:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:29:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:29:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:29:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:29:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:29:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:29:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:32:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:32:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:32:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:32:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:32:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:32:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:33:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:33:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:33:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:33:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:33:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:33:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:35:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:35:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:35:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:35:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:35:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:35:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:35:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:35:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:35:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:35:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:35:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:35:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:36:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:36:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:36:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:36:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:36:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:36:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:36:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:36:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:36:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:37:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:37:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:37:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:37:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:37:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:37:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:37:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:37:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:37:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:42:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-07 15:42:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-07 15:49:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:49:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:49:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:49:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:49:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:49:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:50:32 --> Could not find the language line "reminder"
ERROR - 2026-03-07 15:50:33 --> Could not find the language line "reminder"
ERROR - 2026-03-07 15:58:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:58:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:58:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 15:59:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 15:59:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 15:59:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:01:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:01:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:01:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:12:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:12:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:12:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:16:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:16:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:16:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:16:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:16:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:16:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:17:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 16:17:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 16:17:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 16:17:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 16:17:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 16:17:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:17:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:17:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:19:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:19:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:19:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:20:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:20:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:20:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:20:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:20:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:20:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:21:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:21:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:21:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:26:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:26:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:26:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:28:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:28:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:28:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:29:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:29:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:29:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:29:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:29:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:29:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:30:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:30:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:30:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:31:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:31:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:31:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:31:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:31:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:31:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:31:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:31:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:31:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:32:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:32:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:32:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:32:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:32:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:32:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:33:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:33:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:33:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:33:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:33:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:33:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:36:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:36:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:36:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:37:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:37:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:37:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:37:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:37:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:37:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:38:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:38:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:38:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:39:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:39:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:39:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 16:39:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 16:39:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 16:39:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 11:27:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 16:57:54 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-03-07 17:08:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:08:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:08:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:08:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:08:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:08:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:09:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:09:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:09:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:09:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 17:09:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 17:09:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 17:09:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 17:09:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-07 17:09:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:09:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:09:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:10:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:10:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:10:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:10:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:10:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:10:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:11:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:11:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:11:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:12:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:12:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:12:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:12:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:12:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:12:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:13:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:13:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:13:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:13:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:13:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:13:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:14:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-07 17:14:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-07 17:14:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:14:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:14:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:14:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:14:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:14:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:14:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:14:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:14:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:15:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:15:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:15:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:15:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:15:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:15:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:15:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:15:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:15:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:15:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:15:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:15:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:16:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:16:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:16:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:16:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:16:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:16:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:17:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:17:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:17:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:17:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:17:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:17:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:17:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:17:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:17:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:17:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:17:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:17:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:18:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:18:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:18:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:18:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:18:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:18:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:18:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:18:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:18:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:19:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:19:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:19:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:19:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:19:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:19:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:19:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:19:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:19:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:20:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:20:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:20:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:20:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:20:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:20:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:20:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:20:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:20:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:20:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:20:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:20:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:21:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:21:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:21:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:28:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:28:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:28:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 17:30:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 17:30:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 17:30:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 18:45:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 18:45:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 18:45:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 18:45:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-07 18:45:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-07 18:45:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-07 21:53:55 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-03-07 23:17:52 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
