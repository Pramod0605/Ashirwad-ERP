<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-18 10:01:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:01:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:01:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:06:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-18 10:06:34 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-18 10:07:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:07:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:07:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:08:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-18 10:08:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-18 10:08:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:08:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:08:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:08:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-18 10:08:49 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-18 10:08:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-18 10:08:52 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-18 10:09:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:09:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:09:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:09:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:09:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:09:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:10:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:10:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:10:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:11:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:11:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:11:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:11:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:11:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:11:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:11:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:11:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:11:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:13:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:13:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:13:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:15:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:15:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:15:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:15:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:15:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:15:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:16:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:16:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:16:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:16:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:16:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:16:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:16:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:16:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:16:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:17:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:17:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:17:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:17:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-18 10:17:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-18 10:17:51 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:19:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:19:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:19:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:19:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:19:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:19:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:20:21 --> Could not find the language line "error_occured"
ERROR - 2026-03-18 10:20:27 --> Could not find the language line "student_fee1"
ERROR - 2026-03-18 10:20:33 --> Could not find the language line "student_fee1"
ERROR - 2026-03-18 10:20:49 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-18 10:20:49 --> Could not find the language line "principal"
ERROR - 2026-03-18 10:20:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:20:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:20:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:21:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:21:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:21:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:21:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:21:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:21:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:22:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-18 10:22:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-18 10:22:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:22:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:22:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:23:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:23:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:23:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:24:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:24:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:24:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:25:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:25:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:25:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:26:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:26:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:26:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:27:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:27:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:27:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:27:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:27:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:27:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:27:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:27:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:27:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:28:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:28:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:28:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:29:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:29:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:29:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:30:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:30:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:30:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:30:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:30:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:30:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:30:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:30:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:30:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:30:51 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:30:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:30:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:31:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:31:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:31:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:32:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:32:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:32:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:32:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:32:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:32:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:33:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:33:27 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:33:27 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:33:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:33:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:33:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:34:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:34:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:34:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:34:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:34:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:34:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:35:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:35:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:35:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:36:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:36:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:36:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:36:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:36:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:36:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:37:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:37:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:37:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:37:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:37:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:37:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:37:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:37:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:37:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:37:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:37:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:37:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:38:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:38:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:38:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:39:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:39:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:39:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:40:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:40:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:40:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:41:08 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4253, NULL, 6000, 'D', '')
ERROR - 2026-03-18 10:41:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:41:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:41:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:42:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:42:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:42:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:45:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:45:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:45:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:46:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:46:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:46:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:47:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:47:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:47:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:54:31 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 10:55:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:55:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:55:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:57:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:57:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:57:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:57:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:57:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:57:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 10:57:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 10:57:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 10:57:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:11:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 11:11:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 11:14:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:14:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:14:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:14:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:14:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:14:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:15:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:15:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:15:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:16:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:16:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:16:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:19:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:19:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:19:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:20:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:20:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:20:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:21:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:21:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:21:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:21:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:21:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:21:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:22:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:22:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:22:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:22:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:22:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:22:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:23:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:23:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:23:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:25:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:25:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:25:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:26:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:26:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:26:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:27:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:27:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:27:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:27:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:27:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:27:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:27:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:27:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:27:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:28:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:28:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:28:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:28:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:28:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:28:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:29:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:29:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:29:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:29:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:29:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:29:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:30:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:30:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:30:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:30:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:30:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:30:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:31:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:31:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:31:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:31:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:31:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:31:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:31:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:31:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:31:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:32:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:32:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:32:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:33:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:33:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:33:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:33:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:33:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:33:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:33:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:33:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:33:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:34:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:34:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:34:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:34:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:34:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:34:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:36:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:36:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:36:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:37:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:37:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:37:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:38:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:38:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:38:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:39:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:39:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:39:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:40:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:40:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:40:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:41:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:41:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:41:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:41:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:41:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:41:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:42:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:42:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:42:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:42:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:42:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:42:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:42:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:42:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:42:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:43:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:43:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:43:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:43:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:43:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:43:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:44:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:44:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:44:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:45:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:45:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:45:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:47:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:47:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:47:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:48:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:48:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:48:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:48:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:48:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:48:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:49:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:49:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:49:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:49:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:49:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:49:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:50:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:50:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:50:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:50:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:50:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:50:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:51:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:51:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:51:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:51:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:51:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:51:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:52:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:52:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:52:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:53:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:53:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:53:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:53:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:53:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:53:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:57:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:57:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:57:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:58:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:58:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:58:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:58:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:58:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:58:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:59:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 11:59:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 11:59:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:00:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 12:00:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 12:00:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:01:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 12:01:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 12:01:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:02:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 12:02:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 12:02:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:07:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 12:07:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 12:07:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:07:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 12:07:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 12:07:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:09:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 12:09:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 12:09:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:09:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 12:09:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 12:09:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:13:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 12:13:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 12:13:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:13:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 12:13:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 12:13:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:15:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 12:15:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 12:15:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:16:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 12:16:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 12:16:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:17:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 12:17:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 12:17:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:18:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 12:18:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 12:18:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:22:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 12:22:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 12:22:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:22:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 12:22:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 12:22:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:23:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 12:23:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 12:23:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 12:53:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 12:53:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 12:53:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:07:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 13:07:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 13:07:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 13:07:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 13:07:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 13:07:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 13:08:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:08:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:08:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:08:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:08:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:08:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:08:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:08:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:08:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:08:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:09:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:09:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:09:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:09:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:09:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:10:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:10:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:10:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:10:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:10:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:10:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 13:10:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 13:10:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 13:10:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 13:10:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 13:10:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 13:10:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 13:10:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 13:10:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 13:11:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 13:11:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 13:11:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 13:11:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 13:11:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 13:11:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 13:12:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 13:12:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 13:12:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 13:12:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 13:12:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 13:12:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 13:15:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:15:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:15:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:16:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 13:16:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 13:16:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 13:27:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 13:34:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 13:34:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 13:34:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 13:35:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 13:35:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 13:35:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 13:57:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 13:57:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 13:57:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 13:58:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 13:58:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 13:58:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:00:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:00:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:00:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:27:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:27:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:27:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:28:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:28:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:28:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:28:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:28:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:28:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:29:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:29:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:29:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:29:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:29:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:29:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:30:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:30:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:30:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:31:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:31:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:31:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:31:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:31:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:31:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:31:47 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 14:31:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 14:31:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 14:32:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:32:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:32:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:33:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:33:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:33:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:33:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:33:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:33:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:33:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:33:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:33:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:34:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:34:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:34:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:34:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:34:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:34:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:35:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:35:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:35:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:37:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:37:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:37:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:38:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:38:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:38:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:39:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:39:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:39:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:42:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:42:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:42:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:42:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:42:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:42:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:43:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:43:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:43:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:43:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:43:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:43:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:48:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:48:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:48:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:49:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:49:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:49:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:49:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:49:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:49:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:50:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:50:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:50:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:50:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:50:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:50:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:51:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:51:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:51:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:52:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:52:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:52:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:55:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:55:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:55:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:55:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:55:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:55:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:56:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:56:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:56:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:56:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:56:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:56:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:56:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:56:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:56:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:57:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:57:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:57:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:57:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:57:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:57:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 14:58:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 14:58:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 14:58:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:01:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:01:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:01:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:02:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:02:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:02:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:02:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:02:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:02:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:05:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:05:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:05:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:06:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:06:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:06:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:06:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:06:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:06:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:06:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:06:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:06:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:07:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:07:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:07:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:07:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:07:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:07:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:08:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:08:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:08:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:08:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:08:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:08:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:08:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:08:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:08:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:09:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:09:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:09:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:11:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:11:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:11:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:12:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:12:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:12:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:14:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:14:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:14:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:15:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:15:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:15:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:16:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:16:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:16:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:16:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:16:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:16:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:25:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:25:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:25:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:26:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:26:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:26:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:30:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:30:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:30:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:32:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:32:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:32:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:33:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:33:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:33:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:33:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:33:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:33:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:34:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:34:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:34:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:34:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:34:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:34:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:35:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:35:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:35:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:39:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:39:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:39:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:51:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:51:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:51:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:51:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:51:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:51:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:52:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:52:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:52:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:55:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:55:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:55:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:56:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:56:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:56:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:56:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:56:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:56:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:56:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:56:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:56:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:57:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:57:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:57:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:58:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:58:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:58:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:58:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:58:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:58:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 15:59:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 15:59:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 15:59:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:03:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 16:03:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 16:04:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:04:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:04:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:07:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:07:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:07:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:08:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:08:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:08:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:09:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:09:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:09:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:09:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:09:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:09:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:09:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:09:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:09:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:10:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:10:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:10:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:13:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:13:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:13:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:17:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:17:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:17:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:18:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:18:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:18:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:18:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:18:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:18:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:18:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:18:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:18:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:19:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:19:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:19:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:21:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:21:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:21:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:21:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:21:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:21:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:21:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:21:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:21:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:22:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:22:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:22:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:22:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:22:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:22:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:24:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:24:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:24:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:25:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:25:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:25:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:25:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:25:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:25:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:26:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:26:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:26:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:27:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:27:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:27:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:27:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:27:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:27:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:28:47 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 16:29:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:29:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:29:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:29:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:29:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:29:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:30:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:30:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:30:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:30:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:30:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:30:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:30:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:30:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:30:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:31:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 16:31:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 16:31:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 16:32:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:32:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:32:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:32:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:32:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:32:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:32:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:32:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:32:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:33:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:33:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:33:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:33:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:33:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:33:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:34:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 16:34:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 16:34:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 16:34:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:34:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:34:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:36:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 16:36:31 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 16:36:31 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 16:37:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:37:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:37:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:38:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 16:40:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:40:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:40:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:40:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:40:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:40:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:41:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:41:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:41:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:41:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:41:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:41:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:41:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:41:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:41:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:42:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:42:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:42:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:43:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:43:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:43:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:43:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:43:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:43:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:44:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:44:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:44:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:44:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:44:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:44:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:44:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:44:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:44:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:44:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:44:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:44:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:44:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:44:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:44:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:45:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:45:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:45:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:45:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:45:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:45:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:46:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:46:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:46:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 11:16:53 --> Severity: Warning --> mysqli::__construct(): (HY000/2002): No such file or directory /home/ashir611/public_html/application/config/database.php 78
ERROR - 2026-03-18 11:16:53 --> Severity: error --> Exception: Call to undefined method mysqli::connect_error() /home/ashir611/public_html/application/config/database.php 81
ERROR - 2026-03-18 16:47:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:47:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:47:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:48:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:48:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:48:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:49:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:49:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:49:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:49:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:49:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:49:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:49:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:49:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:49:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:49:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:49:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:49:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:49:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:49:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:49:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:50:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:50:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:50:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:50:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:50:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:50:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:50:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:50:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:50:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:50:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:50:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:50:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:51:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:51:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:51:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:51:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:51:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:51:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:51:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:51:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:51:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:52:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:52:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:52:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:53:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 16:53:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 16:53:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 16:54:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 16:54:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 16:54:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 16:57:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-18 17:12:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-18 17:12:06 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-18 17:39:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 17:39:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 17:39:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 17:47:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-18 17:47:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-18 17:47:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-18 17:49:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-18 17:49:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
