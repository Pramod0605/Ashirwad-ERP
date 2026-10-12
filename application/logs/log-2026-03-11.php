<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-11 10:08:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 10:08:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 10:09:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 10:09:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 10:09:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 10:14:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 10:14:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 10:14:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 10:17:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 10:17:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 10:18:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 10:18:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 10:18:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 10:19:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 10:19:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 10:19:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 10:21:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 10:21:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 10:21:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 10:21:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 10:21:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 10:21:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 10:21:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 10:21:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 10:21:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 10:22:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 10:22:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 10:22:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 10:23:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 10:23:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 10:23:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 10:24:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 10:24:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 10:24:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 10:24:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 10:24:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 10:24:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 10:24:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 10:24:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 10:24:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 10:25:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 10:25:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 10:25:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 10:26:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 10:26:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 10:26:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 10:28:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 10:28:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 10:28:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 10:28:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 10:28:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 10:28:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 11:17:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 11:17:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 11:17:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 11:17:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 11:17:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 11:17:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 11:19:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 11:19:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 11:19:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 11:19:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 11:19:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 11:19:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 11:20:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 11:20:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 11:20:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 11:25:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 11:25:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 11:25:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 11:25:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 11:25:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 11:25:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 11:25:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 11:25:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 11:27:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 11:27:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 11:27:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 11:31:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 11:31:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 11:31:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 11:48:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 11:48:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 11:48:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 11:58:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 11:58:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 11:58:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:06:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:06:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:06:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:08:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:08:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:08:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:13:10 --> Could not find the language line "error_occured"
ERROR - 2026-03-11 12:13:15 --> Could not find the language line "student_fee1"
ERROR - 2026-03-11 12:13:21 --> Could not find the language line "student_fee1"
ERROR - 2026-03-11 12:13:33 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-11 12:13:33 --> Could not find the language line "principal"
ERROR - 2026-03-11 12:13:33 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-11 12:13:33 --> Could not find the language line "principal"
ERROR - 2026-03-11 12:16:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:16:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:16:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:16:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:16:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:16:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:23:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 12:23:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 12:23:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:23:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:23:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:24:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:24:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:24:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:25:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:25:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:25:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:25:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:25:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:25:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:34:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 12:34:55 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 12:35:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:35:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:35:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:44:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:44:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:44:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:44:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:44:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:44:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:44:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 12:44:24 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 12:45:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:45:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:45:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:45:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:45:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:45:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:45:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 12:45:25 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 12:45:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:45:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:45:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:46:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 12:46:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 12:48:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:48:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:48:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:48:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:48:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:48:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:48:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:48:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:48:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:49:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 12:49:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 12:49:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:49:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:49:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:49:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:49:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:49:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:49:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:49:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:49:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:49:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:49:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:49:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:50:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:50:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:50:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:53:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:53:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:53:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:53:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:53:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:53:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:54:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:54:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:54:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:55:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 12:55:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 12:56:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 12:56:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 12:56:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 12:56:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 12:56:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 12:56:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 12:57:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 12:57:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 12:57:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 12:57:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 12:57:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 13:02:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 13:02:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 13:02:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 13:02:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 13:02:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 13:02:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 13:02:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 13:04:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 13:04:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 13:04:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 13:05:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 13:05:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 13:05:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 13:26:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 13:26:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 13:26:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 14:00:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 14:00:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 14:00:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 14:00:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 14:00:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 14:06:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 14:06:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 14:06:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 14:08:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 14:08:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 14:09:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 14:09:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 14:09:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 14:09:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 14:09:33 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 14:10:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 14:10:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 14:10:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 14:46:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 14:47:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 14:47:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 14:47:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 14:47:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 14:47:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 14:47:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 14:47:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 14:47:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 14:47:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 14:47:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 14:47:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 14:47:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 14:47:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 14:47:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 14:48:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 14:48:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 14:48:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 14:49:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 14:49:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 14:49:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 14:49:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 14:49:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 14:49:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 14:51:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 14:51:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 14:51:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 14:51:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 14:51:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 14:51:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 14:53:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 14:53:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 14:53:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 15:19:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 15:19:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 15:29:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 15:29:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 15:29:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 15:33:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 15:33:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 15:33:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 15:41:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 15:41:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 15:41:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:07:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 16:07:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 16:07:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:08:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 16:08:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 16:08:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:09:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 16:09:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 16:09:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:12:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 16:12:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 16:12:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:15:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 16:15:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 16:15:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:16:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 16:16:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 16:16:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:16:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 16:16:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 16:17:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 16:17:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 16:17:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:17:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 16:17:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 16:17:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:17:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 16:17:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 16:17:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:19:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 16:19:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 16:19:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:21:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:21:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:21:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:21:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:21:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:22:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:22:44 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:22:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:22:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:22:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:24:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:25:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 16:25:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 16:25:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:26:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 16:26:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 16:26:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:26:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 16:26:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 16:26:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:35:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:35:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:35:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:35:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:36:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:36:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:36:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:36:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:36:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:36:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:36:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:36:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:36:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:36:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:37:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:37:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:37:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:43:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 16:43:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 16:43:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:45:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 16:45:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 16:45:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:47:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:47:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:47:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:47:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:47:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:47:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:47:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:47:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:47:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:48:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:48:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:48:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:48:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:48:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-11 16:48:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 16:48:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 16:48:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 16:51:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 16:51:30 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 17:01:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 17:01:11 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 17:42:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 17:42:31 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 17:45:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-11 17:45:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-11 17:46:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 17:46:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 17:46:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-11 17:49:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-11 17:49:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-11 17:49:00 --> Could not find the language line "discount_this_action_is_irreversible"
