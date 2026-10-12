<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-06 07:58:27 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-03-06 10:12:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-06 10:12:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-06 10:12:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 10:12:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 10:12:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 10:14:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-06 10:14:14 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-06 10:14:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 10:14:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 10:14:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 10:20:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-06 10:20:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-06 10:22:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 10:22:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 10:22:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 10:24:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 10:24:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 10:24:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 10:27:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 10:27:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 10:27:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 10:29:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 10:29:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 10:29:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 10:29:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 10:29:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 10:29:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 10:48:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 10:48:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 10:48:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 10:49:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 10:49:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 10:49:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:04:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-06 11:04:48 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-06 11:04:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:05:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:05:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:05:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:05:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:05:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:07:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:08:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:08:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:08:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:08:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:08:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:10:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-06 11:10:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-06 11:11:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:11:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:11:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:15:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:15:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:15:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:15:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:15:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:15:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:18:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:19:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:19:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:19:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:19:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:19:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:19:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-06 11:19:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-06 11:24:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:24:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:24:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:24:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-06 11:24:36 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-06 11:25:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:25:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:25:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:26:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:26:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:26:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:28:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:28:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:28:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:28:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:28:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:28:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:28:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:28:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:28:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:28:46 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:28:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:28:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:28:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:28:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:28:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:29:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:29:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:29:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 11:29:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:29:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:29:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:38:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:38:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:38:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:41:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:41:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:41:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:42:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:42:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:42:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:43:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:43:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:43:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:44:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:44:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:44:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:45:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:45:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:45:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 11:50:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 11:50:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 11:50:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 12:27:59 --> Could not find the language line "error_occured"
ERROR - 2026-03-06 12:28:07 --> Could not find the language line "student_fee1"
ERROR - 2026-03-06 12:28:26 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-06 12:28:26 --> Could not find the language line "principal"
ERROR - 2026-03-06 12:41:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 12:41:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 12:41:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 12:48:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 12:48:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 12:48:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 14:03:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 14:03:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 14:03:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 14:22:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-06 14:22:22 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-06 14:22:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 14:22:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 14:22:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 14:23:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 14:23:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 14:23:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 14:36:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 14:36:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 14:36:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 14:37:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 14:37:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 14:37:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 14:46:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 14:46:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 14:46:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 14:59:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 14:59:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 14:59:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 15:02:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 15:02:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 15:02:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 15:08:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-06 15:08:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-06 15:08:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 15:08:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 15:08:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 15:09:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 15:09:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 15:09:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 15:10:06 --> Could not find the language line "error_occured"
ERROR - 2026-03-06 15:10:10 --> Could not find the language line "student_fee1"
ERROR - 2026-03-06 15:10:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 15:10:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 15:10:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 15:10:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 15:11:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 15:11:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 15:11:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 15:11:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 15:11:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 15:11:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 15:13:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 15:13:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 15:13:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 15:13:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 15:13:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 15:13:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 15:16:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 15:16:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 15:16:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 15:16:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 15:16:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 15:16:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 15:26:18 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-06 15:26:18 --> Could not find the language line "principal"
ERROR - 2026-03-06 15:26:28 --> Could not find the language line "student_fee1"
ERROR - 2026-03-06 15:26:34 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-06 15:26:34 --> Could not find the language line "principal"
ERROR - 2026-03-06 15:27:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 15:27:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 15:27:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 15:28:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-06 15:28:14 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-06 15:28:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 15:28:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 15:28:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 15:33:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 15:33:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 15:33:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 15:33:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 15:33:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 15:33:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 16:13:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 16:13:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 16:13:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 16:14:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 16:14:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 16:14:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 16:15:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 16:15:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 16:15:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 16:15:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 16:15:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 16:15:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 16:15:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 16:15:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 16:15:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 16:15:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 16:15:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 16:15:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-06 19:04:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-06 19:04:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-06 19:04:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 19:04:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 19:04:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 19:04:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-06 19:04:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-06 19:04:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-06 19:04:35 --> Could not find the language line "discount_this_action_is_irreversible"
