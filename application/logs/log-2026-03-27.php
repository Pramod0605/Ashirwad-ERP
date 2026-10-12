<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-27 10:13:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-27 10:13:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-27 10:23:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-27 10:23:33 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-27 10:25:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 10:25:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 10:25:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 10:27:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 10:27:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 10:27:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 10:31:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 10:31:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 10:31:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 10:32:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 10:32:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 10:32:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 10:34:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 10:34:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 10:34:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 10:35:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 10:35:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 10:35:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 10:36:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 10:36:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 10:36:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 10:37:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 10:37:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 10:37:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 10:42:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 10:42:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 10:42:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 10:44:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 10:44:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 10:44:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 10:47:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 10:47:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 10:47:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 10:50:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 10:50:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 10:50:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 10:58:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 10:58:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 10:58:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:01:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:01:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:01:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:09:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:09:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:09:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:10:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:10:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:10:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:11:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:11:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:11:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:12:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:12:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:12:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:14:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:14:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:14:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:15:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:15:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:15:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:21:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:21:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:21:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:23:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:23:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:23:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:24:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:24:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:24:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:26:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:26:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:26:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:27:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:27:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:27:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:28:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:28:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:28:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:30:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:30:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:30:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:32:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:32:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:32:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:33:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:33:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:33:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:34:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:34:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:34:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:36:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:36:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:36:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:41:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:41:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:41:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 11:59:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 11:59:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 11:59:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 12:02:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 12:02:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 12:02:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 12:49:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-27 12:49:24 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-27 13:29:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-27 13:29:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-27 13:30:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-27 13:30:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-27 13:30:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 13:30:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 13:30:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 13:34:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 13:34:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 13:34:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 13:35:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 13:35:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 13:35:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 13:36:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 13:36:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 13:36:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 13:38:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 13:38:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 13:38:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 13:39:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 13:39:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 13:39:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 13:54:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 13:54:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 13:54:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 13:56:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 13:56:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 13:56:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 13:57:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 13:57:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 13:57:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 14:00:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 14:00:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 14:00:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 14:01:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 14:01:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 14:01:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 14:03:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 14:03:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 14:03:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 14:04:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 14:04:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 14:04:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 14:31:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 14:31:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 14:31:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 14:33:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 14:33:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 14:33:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 14:34:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-27 14:34:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-27 14:34:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-27 14:34:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-27 14:34:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 14:34:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 14:34:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 14:36:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 14:36:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 14:36:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 14:37:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 14:37:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 14:37:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 14:38:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 14:38:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 14:38:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 14:39:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 14:39:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 14:39:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 14:53:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 14:53:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 14:53:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 16:58:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 16:58:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 16:58:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:00:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:00:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:00:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:01:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:01:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:01:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:02:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:02:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:02:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:03:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:03:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:03:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:04:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:04:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:04:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:07:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:07:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:07:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:08:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:08:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:08:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:10:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:10:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:10:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:12:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:12:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:12:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:14:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:14:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:14:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:15:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:15:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:15:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:16:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:16:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:16:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:28:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:28:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:28:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:31:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:31:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:31:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:43:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:43:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:43:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:54:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:54:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:54:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:56:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:56:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:56:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:57:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:57:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:57:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:57:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:57:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:57:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 17:59:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 17:59:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 17:59:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 18:00:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 18:00:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 18:00:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 18:04:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 18:04:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 18:04:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 19:02:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-27 19:02:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-27 19:02:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 19:02:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 19:02:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 19:02:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 19:02:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 19:02:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 19:03:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 19:03:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 19:03:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 19:06:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 19:06:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 19:06:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 19:21:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 19:21:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 19:21:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 21:12:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 21:12:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 21:12:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-27 21:53:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-27 21:53:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-27 21:53:46 --> Could not find the language line "discount_this_action_is_irreversible"
