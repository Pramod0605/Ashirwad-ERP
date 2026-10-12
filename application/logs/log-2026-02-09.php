<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-09 08:41:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-09 08:41:56 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-09 08:41:58 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 08:42:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 08:42:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 08:42:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 08:42:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 08:42:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 08:43:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 08:43:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 08:43:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 10:23:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-09 10:23:37 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-09 10:25:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 10:25:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 10:25:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 10:27:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-09 10:27:59 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-09 10:28:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 10:28:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 10:28:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 10:29:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 10:29:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 10:29:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 10:34:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 10:34:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 10:34:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 10:35:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 10:35:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 10:35:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 10:39:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 10:39:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 10:39:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 10:40:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 10:40:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 10:40:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 10:42:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 10:42:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 10:42:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 11:09:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 11:09:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 11:09:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 11:11:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 11:11:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 11:11:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 11:25:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 11:25:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 11:25:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 11:26:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 11:26:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 11:26:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 11:27:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 11:27:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 11:27:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 11:31:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 11:31:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 11:31:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:10:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:10:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:10:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:10:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:10:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:10:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:10:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:10:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:10:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:14:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:14:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:14:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:14:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:14:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:14:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:15:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:15:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:15:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:15:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:15:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:15:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:16:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:16:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:16:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:16:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:16:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:16:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:16:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:16:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:16:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:17:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:17:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:17:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:17:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:17:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:17:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:18:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:18:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:18:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:20:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:20:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:20:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:20:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:20:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:20:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:20:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:20:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:20:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:20:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:20:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:20:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:21:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:21:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:21:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:25:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-09 12:25:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-09 12:25:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 12:25:37 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 12:25:37 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 12:26:42 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 12:26:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 12:26:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 12:27:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 12:27:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 12:27:12 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 12:27:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:27:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:27:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:30:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:30:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:30:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:32:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:32:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:32:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:44:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:44:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:44:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:50:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:50:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:50:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:50:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:50:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:50:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:51:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:51:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:51:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:51:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:51:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:51:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:53:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:53:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:53:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:53:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:53:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:53:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:53:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:53:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:53:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 12:56:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 12:56:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 12:56:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 13:04:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 13:04:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 13:04:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 13:05:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 13:05:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 13:05:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 13:06:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 13:06:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 13:06:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 13:07:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 13:07:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 13:07:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 13:14:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 13:14:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 13:14:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 13:15:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 13:15:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 13:15:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 13:55:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 13:55:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 13:55:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 13:57:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 13:57:22 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 13:57:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 13:57:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 13:57:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 13:57:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 14:00:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 14:00:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 14:00:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 14:04:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 14:04:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 14:04:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 14:29:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 14:29:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 14:29:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 14:29:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 14:29:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 14:29:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 14:30:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 14:30:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 14:30:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 14:32:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 14:32:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 14:32:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 14:33:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-09 14:33:25 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-09 14:33:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 14:33:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 14:33:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 14:36:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 14:36:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 14:36:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 14:37:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 14:37:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 14:37:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 14:38:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 14:38:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 14:38:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 14:40:37 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 14:40:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 14:40:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 14:40:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 14:40:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 14:40:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 14:40:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 14:40:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 14:40:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 14:44:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 14:44:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 14:44:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 14:49:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 14:49:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 14:49:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 14:50:19 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 14:52:56 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 14:53:00 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 14:53:01 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 14:53:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 14:53:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 14:53:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 14:53:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:04:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:04:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:04:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:04:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 15:10:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:10:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:10:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:11:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:11:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:11:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:24:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:24:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:24:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:31:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:31:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:31:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:32:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:32:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:32:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:32:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:32:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:32:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:33:19 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 15:33:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:33:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:33:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:35:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:35:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:35:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:39:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:39:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:39:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:42:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:42:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:42:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:42:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:42:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:42:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:46:22 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3833, NULL, 6500, 'D', '')
ERROR - 2026-02-09 15:46:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:46:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:46:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:46:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:46:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:46:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:47:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:47:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:47:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:55:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:55:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:55:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:55:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:55:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:55:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:57:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:57:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:57:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:58:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:58:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:58:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:58:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:58:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:58:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 15:59:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 15:59:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 15:59:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:00:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:00:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:00:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:01:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:01:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:01:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:01:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:01:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:01:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:02:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:02:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:02:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:02:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:02:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:02:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:03:38 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:03:42 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:03:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:03:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:03:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:03:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:04:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:04:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:04:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:04:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:04:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:04:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:05:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:05:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:05:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:06:20 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:06:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:06:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:06:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:06:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:06:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:08:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:08:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:08:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:08:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:08:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:08:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:15:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:15:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:15:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:16:38 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:16:42 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:16:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:16:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:16:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:16:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:17:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:17:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:17:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:26:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:26:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:26:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:26:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:26:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:26:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:34:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:34:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:34:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:36:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:36:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:36:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:37:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:37:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:37:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:44:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:44:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:44:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:45:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:45:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:45:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:45:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:45:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:45:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:47:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:47:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:47:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:51:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-09 16:51:14 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-09 16:51:22 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:51:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:51:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:51:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:52:22 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:52:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:52:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:53:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:53:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:53:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:55:19 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:57:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:57:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:57:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:58:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:58:37 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:58:37 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 16:58:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:58:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:58:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:59:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:59:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:59:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 16:59:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 16:59:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 16:59:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:00:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:00:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:00:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:03:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:03:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:03:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:04:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:04:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:04:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:05:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:05:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:05:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:06:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:06:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:06:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:06:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:06:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:06:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:07:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:07:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:07:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:08:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:08:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:08:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:10:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 17:10:44 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 17:10:44 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 17:10:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 17:10:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:10:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:10:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:11:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:11:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:11:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:11:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:11:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:11:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:12:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:12:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:12:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:12:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:12:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:12:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:13:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-09 17:13:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-09 17:13:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:13:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:13:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:14:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:14:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:14:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:15:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:15:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:15:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:15:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:15:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:15:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:16:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:16:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:16:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:16:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:16:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:16:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:17:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:17:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:17:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:18:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:18:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:18:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:18:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:18:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:18:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:19:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:19:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:19:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:19:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:19:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:19:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:19:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:19:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:19:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:19:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:19:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:19:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:20:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:20:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:20:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:20:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:20:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:20:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:21:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:21:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:21:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:21:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:21:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:21:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:21:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:21:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:21:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:21:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:21:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:21:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:22:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:22:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:22:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:23:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:23:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:23:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:24:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:24:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:24:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:35:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:35:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:35:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:36:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:36:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:36:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:36:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:36:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:36:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:36:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:36:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:36:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:37:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:37:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:37:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:37:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:37:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:37:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:38:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:38:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:38:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:38:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:38:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:38:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:38:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:38:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:38:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:39:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:39:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:39:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:39:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:39:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:39:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:40:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:40:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:40:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:41:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:41:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:41:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:42:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:42:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:42:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:43:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:43:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:43:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:43:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:43:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:43:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:43:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:43:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:43:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:44:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:44:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:44:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:44:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:44:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:44:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:44:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:44:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:44:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:45:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:45:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:45:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:46:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:46:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:46:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:46:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:46:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:46:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:47:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:47:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:47:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:49:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:49:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:49:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:50:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:50:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:50:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:52:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:52:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:52:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:53:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:53:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:53:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 17:54:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 17:54:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 17:54:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 18:01:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-09 18:01:15 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-09 18:01:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 18:01:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 18:01:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 18:34:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 18:34:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 18:34:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 18:34:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 18:34:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 18:34:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 18:35:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 18:35:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 18:35:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 18:36:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 18:36:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 18:36:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 19:09:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 19:09:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 19:09:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 19:40:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-09 19:40:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-09 19:40:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 19:40:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 19:40:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-09 19:40:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 19:40:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 19:40:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 19:42:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 19:42:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 19:42:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 19:59:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-09 19:59:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-09 20:00:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 20:00:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 20:00:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 20:01:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 20:01:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 20:01:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-09 20:03:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-09 20:03:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-09 20:03:48 --> Could not find the language line "discount_this_action_is_irreversible"
