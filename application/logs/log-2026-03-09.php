<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-09 09:29:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-09 09:29:39 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-09 09:30:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 09:30:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 09:30:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 09:30:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 09:30:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 09:30:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 09:31:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 09:31:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 09:31:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 09:31:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 09:31:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 09:31:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 09:40:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:41:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:41:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:41:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 09:41:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 09:41:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 09:41:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:41:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:41:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:41:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 09:41:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 09:41:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 09:41:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:41:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:41:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:42:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:42:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:42:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:42:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 09:42:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 09:42:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 09:42:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:42:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:42:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:42:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 09:42:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 09:42:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 09:56:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-09 09:56:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-09 09:57:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:57:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 09:57:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:01:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:01:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:01:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:01:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:01:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:01:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:04:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:04:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:04:35 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:04:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:04:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:04:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:05:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:05:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:05:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:05:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:05:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:05:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:06:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:06:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:06:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:06:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:06:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:06:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:07:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:07:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:07:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:10:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:10:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:10:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:12:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:12:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:12:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:16:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-09 10:16:55 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-09 10:19:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:19:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:19:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:20:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:20:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:20:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:21:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:21:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:21:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:21:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:21:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:21:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:23:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-09 10:23:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-09 10:23:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:23:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:23:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:23:51 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:23:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:23:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:24:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:24:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:24:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:24:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:24:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:24:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:24:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:24:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:24:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:24:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:24:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:24:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:27:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:27:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:27:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:28:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:28:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:28:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:31:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:31:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:31:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 10:31:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:31:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:32:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-09 10:32:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-09 10:32:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:32:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:32:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:34:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:34:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:34:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:34:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:34:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:34:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:40:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:40:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:40:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:54:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:54:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:54:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 10:56:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 10:56:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 10:56:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:01:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:01:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:01:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:12:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:12:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:12:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:19:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:19:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:19:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:19:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:19:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:19:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:24:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:24:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:24:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:24:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 11:25:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 11:27:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:27:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:27:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:27:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 11:27:44 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 11:27:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 11:27:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:27:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:27:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:28:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 11:28:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 11:28:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 11:28:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:28:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:28:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:28:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 11:33:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:33:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:33:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:34:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:34:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:34:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:37:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:37:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:37:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:46:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:46:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:46:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:50:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:50:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:50:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:51:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:51:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:51:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:51:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-09 11:51:24 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-09 11:51:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:51:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:51:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:52:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:52:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:52:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:52:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:52:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:52:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:53:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:53:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:53:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:53:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:53:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:53:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:54:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:54:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:54:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 11:56:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 11:57:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 11:57:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 11:57:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:01:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:01:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:01:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:02:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:02:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:02:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:05:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:05:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:05:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:08:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:08:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:08:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:10:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:10:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:10:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:14:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:14:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:14:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:14:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:14:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:14:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:15:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:15:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:15:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:19:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:19:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:19:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:19:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:19:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:19:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:19:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:19:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:19:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:20:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:20:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:20:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:23:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:23:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:23:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:31:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:31:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:31:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:33:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:33:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:33:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:36:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:36:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:36:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:39:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:39:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:39:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:41:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:41:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:41:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:42:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:42:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:42:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:43:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:43:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:43:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:43:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:43:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:43:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:44:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:44:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:44:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:46:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:46:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:46:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:49:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 12:49:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 12:49:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 12:49:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:49:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:49:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:49:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:49:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:49:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:50:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:50:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:50:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:54:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:54:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:54:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:55:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:55:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:55:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 12:55:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 12:55:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 12:55:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:00:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 13:01:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 13:01:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 13:01:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:01:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:01:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:02:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:02:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:02:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:06:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:06:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:06:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:33:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:33:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:33:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:33:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:33:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:33:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:34:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:34:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:34:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:34:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:34:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:34:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:34:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:34:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:34:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:34:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:34:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:34:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:35:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:35:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:35:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:35:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:35:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:35:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:40:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:40:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:40:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:40:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:40:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:40:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:40:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:40:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:40:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:43:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:43:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:43:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:48:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:48:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:48:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:49:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-09 13:49:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-09 13:50:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:50:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:50:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:53:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:53:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:53:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:57:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:57:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:57:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 13:58:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 13:59:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 13:59:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 13:59:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 14:16:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 14:16:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 14:16:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 14:18:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 14:18:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 14:18:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 14:35:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 14:35:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 14:35:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 14:37:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 14:37:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 14:37:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 14:38:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 14:38:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 14:38:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 14:41:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 14:41:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 14:41:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 14:41:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 14:41:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 14:41:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 14:42:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 14:42:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 14:42:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 14:56:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 14:56:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 14:56:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 14:56:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 14:56:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 14:56:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 14:57:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 14:57:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 14:57:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 14:59:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 14:59:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 14:59:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:00:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:00:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:00:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:00:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:00:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:00:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:02:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:02:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:02:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:02:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:02:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:02:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:05:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:05:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:05:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:05:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:05:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:05:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:09:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:09:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:09:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:11:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:11:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:11:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:12:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:12:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:12:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:14:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:14:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:14:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:15:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:15:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:15:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:15:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:15:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:15:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:17:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:17:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:17:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:18:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:18:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:18:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:18:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-09 15:18:31 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-09 15:18:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:18:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:18:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:18:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:18:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:18:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:19:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:19:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:19:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:20:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:20:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:20:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:21:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:21:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:21:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:21:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:21:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:21:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:21:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:21:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:21:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:22:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:22:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:22:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:22:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:22:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:22:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:23:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:23:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:23:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:23:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:23:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:23:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:25:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:25:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:25:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:26:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:26:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:26:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:26:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:26:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:26:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:27:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:27:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:27:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:29:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:29:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:29:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:30:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:30:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:30:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:32:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:32:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:32:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:32:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:32:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:32:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:32:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:32:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:32:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:40:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:40:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:40:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:42:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:42:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:42:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:43:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:43:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:43:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:45:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:45:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:45:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:45:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:45:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:45:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:46:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:46:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:46:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:50:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:50:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:50:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:51:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:51:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:51:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:51:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:51:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:51:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:52:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:52:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:52:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:57:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:57:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:57:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:57:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:57:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:57:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:58:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:58:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:58:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:58:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:58:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:58:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 15:59:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 15:59:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 15:59:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 16:02:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 16:02:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 16:02:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 16:03:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 16:03:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 16:03:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 16:05:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-09 16:05:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-09 16:06:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 16:06:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 16:06:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 16:06:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 16:06:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 16:06:31 --> Could not find the language line "not_generated"
ERROR - 2026-03-09 16:06:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 16:06:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 16:06:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 16:07:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 16:07:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 16:07:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 16:08:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 16:09:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 16:09:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 16:20:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 16:20:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 16:20:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 16:22:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-09 16:22:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-09 16:22:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 16:22:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 16:22:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 16:24:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 16:24:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 16:24:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 16:30:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-03-09 16:31:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-03-09 16:31:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-03-09 16:32:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-03-09 16:32:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-03-09 16:32:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-03-09 16:33:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-03-09 16:33:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 16:33:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 16:33:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 16:35:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 16:35:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 16:35:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 16:40:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 16:40:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 16:40:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 16:40:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 16:40:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 16:40:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 17:45:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-09 17:45:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-09 17:45:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-09 18:30:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-09 18:30:48 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
