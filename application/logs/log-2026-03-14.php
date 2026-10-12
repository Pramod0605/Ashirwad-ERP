<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-14 10:03:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-14 10:03:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-14 10:07:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 10:07:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 10:07:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 10:12:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 10:12:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 10:12:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 10:14:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 10:14:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 10:14:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 10:15:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 10:15:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 10:15:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 10:18:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-14 10:18:07 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-14 10:18:23 --> Could not find the language line "error_occured"
ERROR - 2026-03-14 10:18:36 --> Could not find the language line "student_fee1"
ERROR - 2026-03-14 10:18:43 --> Could not find the language line "student_fee1"
ERROR - 2026-03-14 10:18:53 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-14 10:18:53 --> Could not find the language line "principal"
ERROR - 2026-03-14 10:19:22 --> Could not find the language line "student_fee1"
ERROR - 2026-03-14 10:19:30 --> Could not find the language line "error_occured"
ERROR - 2026-03-14 10:19:35 --> Could not find the language line "student_fee1"
ERROR - 2026-03-14 10:19:42 --> Could not find the language line "student_fee1"
ERROR - 2026-03-14 10:19:58 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-14 10:19:58 --> Could not find the language line "principal"
ERROR - 2026-03-14 10:57:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-14 10:57:18 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-14 10:58:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 10:58:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 10:58:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 11:08:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 11:08:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 11:08:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 11:09:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 11:09:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 11:09:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 11:31:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 11:31:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 11:31:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 11:33:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-14 11:33:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-14 11:33:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-14 11:33:05 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-14 11:33:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 11:33:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 11:33:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 11:38:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 11:38:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 11:38:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 11:39:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 11:39:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 11:39:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 11:47:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 11:47:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 11:47:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 11:54:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-14 11:54:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-14 11:54:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 11:54:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 11:54:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 11:54:36 --> Could not find the language line "error_occured"
ERROR - 2026-03-14 11:54:48 --> Could not find the language line "student_fee1"
ERROR - 2026-03-14 11:54:58 --> Could not find the language line "student_fee1"
ERROR - 2026-03-14 11:55:06 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-14 11:55:06 --> Could not find the language line "principal"
ERROR - 2026-03-14 11:55:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 11:55:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 11:55:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 11:59:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-14 11:59:05 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-14 11:59:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 11:59:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 11:59:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 12:00:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 12:00:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 12:00:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 12:00:51 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 12:00:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 12:00:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 12:00:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 12:00:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 12:01:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 12:01:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 12:01:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 12:01:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 12:01:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 12:01:19 --> Could not find the language line "error_occured"
ERROR - 2026-03-14 12:01:23 --> Could not find the language line "student_fee1"
ERROR - 2026-03-14 12:01:29 --> Could not find the language line "student_fee1"
ERROR - 2026-03-14 12:01:35 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-14 12:01:35 --> Could not find the language line "principal"
ERROR - 2026-03-14 12:09:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 12:09:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 12:09:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 12:38:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 12:38:23 --> Could not find the language line "student1"
ERROR - 2026-03-14 12:38:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 12:38:26 --> Could not find the language line "student1"
ERROR - 2026-03-14 12:39:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 12:39:29 --> Could not find the language line "student1"
ERROR - 2026-03-14 12:39:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 12:39:33 --> Could not find the language line "student1"
ERROR - 2026-03-14 12:39:47 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 12:39:47 --> Could not find the language line "student1"
ERROR - 2026-03-14 12:45:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 12:45:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 12:45:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 13:03:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 13:03:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 13:03:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 13:03:53 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4172, NULL, 6000, 'D', '')
ERROR - 2026-03-14 13:03:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 13:03:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 13:03:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 13:04:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 13:04:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 13:04:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 13:06:03 --> Could not find the language line "student_fee1"
ERROR - 2026-03-14 13:16:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-14 13:16:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-14 13:17:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 13:17:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 13:17:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 13:18:40 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4174, NULL, 3750, 'D', 'She joins the School From 2nd term')
ERROR - 2026-03-14 13:18:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 13:18:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 13:18:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 13:19:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 13:19:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 13:19:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 13:27:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 13:27:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 13:27:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 13:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 13:28:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 13:28:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 13:28:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 13:28:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 13:28:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 13:29:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 13:29:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 13:29:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 13:31:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 13:31:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 13:31:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 13:31:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 13:31:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 13:31:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 13:31:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 13:31:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 13:31:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 13:47:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 13:47:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 13:47:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 13:50:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 13:50:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 13:50:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 13:52:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 13:52:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 13:52:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 14:22:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 14:22:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 14:22:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 15:14:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 15:14:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 15:14:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 15:14:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 15:14:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 15:14:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 15:15:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-14 15:15:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-14 15:18:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 15:18:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 15:18:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 15:18:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 15:18:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 15:18:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 15:22:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 15:22:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 15:22:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 15:24:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 15:24:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 15:24:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 16:21:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-14 16:21:55 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-14 16:22:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 16:22:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 18:48:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-14 18:48:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-14 18:49:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 18:49:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 18:49:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 18:49:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 18:49:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 18:49:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 18:49:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 18:49:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 18:49:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 18:50:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 18:50:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 18:50:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 18:50:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 18:50:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 18:50:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 18:50:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 18:50:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 18:50:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 18:50:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 18:50:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 18:50:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 18:51:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 18:51:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 18:51:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 18:51:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 18:51:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 18:51:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 18:51:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 18:51:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 18:51:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 18:52:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 18:52:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 18:52:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 18:52:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 18:52:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 18:52:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 18:52:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 18:52:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 18:52:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 18:54:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 18:54:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 18:54:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 19:22:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-14 19:22:34 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-14 19:25:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 19:25:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 19:25:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 19:44:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 19:44:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 19:44:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 19:45:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 19:45:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 19:45:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 19:46:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 19:46:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 19:46:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 19:51:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 19:51:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 19:51:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 19:52:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 19:52:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 19:52:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 19:52:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 19:52:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 19:52:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 19:52:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 19:52:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 19:52:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 19:55:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 19:55:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 19:55:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 19:59:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 19:59:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 19:59:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:00:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:00:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:00:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:01:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:01:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:01:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:01:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:01:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:01:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:02:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:02:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:02:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:04:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:04:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:04:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:05:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:05:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:05:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:05:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:05:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:05:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:06:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:06:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:06:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:06:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:06:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:06:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:06:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:06:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:06:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:07:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:07:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:07:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:07:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:07:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:07:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:08:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:08:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:08:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:08:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:08:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:08:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:10:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:10:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:10:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:12:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:12:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:12:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:12:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:12:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:12:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:15:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:15:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:15:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:15:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:15:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:15:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:15:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:15:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:15:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:16:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:16:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:16:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:16:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:16:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:16:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:17:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:17:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:17:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:19:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:19:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:19:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:19:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:19:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:19:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:20:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:20:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:20:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:21:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:21:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:21:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:21:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:21:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:21:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:22:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:22:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:22:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:23:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:23:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:23:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:24:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:24:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:24:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:24:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:24:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:24:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:25:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:25:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:25:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:27:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:27:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:27:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:27:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:27:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:27:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:28:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-14 20:28:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-14 20:28:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-14 20:32:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-14 20:32:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-14 21:54:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-14 23:53:39 --> Could not find the language line "not_generated"
