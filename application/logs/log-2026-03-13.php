<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-13 00:33:36 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-03-13 04:06:54 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-03-13 04:12:55 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-03-13 10:00:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 10:00:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 10:00:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 10:08:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-13 10:08:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-13 10:08:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:11:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:12:05 --> Could not find the language line "error_occured"
ERROR - 2026-03-13 10:12:09 --> Could not find the language line "student_fee1"
ERROR - 2026-03-13 10:12:24 --> Could not find the language line "student_fee1"
ERROR - 2026-03-13 10:12:31 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:12:38 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 10:12:38 --> Could not find the language line "principal"
ERROR - 2026-03-13 10:12:56 --> Could not find the language line "student_fee1"
ERROR - 2026-03-13 10:13:04 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 10:13:04 --> Could not find the language line "principal"
ERROR - 2026-03-13 10:20:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:21:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:21:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:21:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:24:51 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:24:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:24:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:24:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:24:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:25:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:25:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:25:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:25:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:25:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:25:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-13 10:25:30 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-13 10:25:35 --> Could not find the language line "error_occured"
ERROR - 2026-03-13 10:25:41 --> Could not find the language line "student_fee1"
ERROR - 2026-03-13 10:25:48 --> Could not find the language line "student_fee1"
ERROR - 2026-03-13 10:26:03 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 10:26:03 --> Could not find the language line "principal"
ERROR - 2026-03-13 10:27:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:28:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:28:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:28:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:28:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:29:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:29:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:29:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:29:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:29:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:29:16 --> Could not find the language line "error_occured"
ERROR - 2026-03-13 10:29:22 --> Could not find the language line "student_fee1"
ERROR - 2026-03-13 10:29:29 --> Could not find the language line "student_fee1"
ERROR - 2026-03-13 10:29:33 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 10:29:33 --> Could not find the language line "principal"
ERROR - 2026-03-13 10:30:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-13 10:30:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-13 10:30:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:33:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-13 10:33:30 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-13 10:36:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:36:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:36:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:36:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:36:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:36:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:37:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:37:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:37:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:37:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-13 10:37:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-13 10:37:09 --> Could not find the language line "student_fee1"
ERROR - 2026-03-13 10:37:15 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 10:37:15 --> Could not find the language line "principal"
ERROR - 2026-03-13 10:46:35 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:46:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:46:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:46:44 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:46:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:46:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:46:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:46:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:46:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:46:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:46:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:47:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:47:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:47:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:47:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:47:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 10:47:16 --> Could not find the language line "error_occured"
ERROR - 2026-03-13 10:47:20 --> Could not find the language line "student_fee1"
ERROR - 2026-03-13 10:47:27 --> Could not find the language line "student_fee1"
ERROR - 2026-03-13 10:47:31 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 10:47:31 --> Could not find the language line "principal"
ERROR - 2026-03-13 10:52:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-13 10:52:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-13 10:52:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 10:52:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 10:52:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 10:53:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 10:53:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 10:53:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 10:54:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 10:54:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 10:54:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 11:05:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 11:06:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 11:06:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 11:06:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 11:07:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 11:07:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 11:07:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 11:08:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 11:08:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 11:08:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 11:09:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 11:09:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 11:09:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 11:11:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 11:11:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 11:11:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 11:11:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 11:11:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 11:11:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 11:11:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 11:11:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 11:11:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 11:11:34 --> Could not find the language line "error_occured"
ERROR - 2026-03-13 11:11:37 --> Could not find the language line "student_fee1"
ERROR - 2026-03-13 11:11:45 --> Could not find the language line "student_fee1"
ERROR - 2026-03-13 11:11:54 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 11:11:54 --> Could not find the language line "principal"
ERROR - 2026-03-13 11:21:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-13 11:21:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-13 11:25:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-13 11:25:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-13 11:26:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 11:26:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 11:26:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 11:33:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-13 11:33:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-13 11:40:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 11:40:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 11:40:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 11:42:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 11:42:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 11:42:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 11:42:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 11:42:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 11:42:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 11:43:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 11:43:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 11:43:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 11:44:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 11:44:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 11:44:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 11:46:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 11:46:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 11:46:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 11:46:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 11:46:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 11:46:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 11:47:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 11:47:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 11:47:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 11:51:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 11:51:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 11:51:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 11:59:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 11:59:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 11:59:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 12:07:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 12:07:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 12:07:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 12:24:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 12:24:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 12:24:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 12:27:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 12:27:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 12:27:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 12:27:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 12:27:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 12:27:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 12:27:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 12:27:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 12:27:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 12:27:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 12:27:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 12:27:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 12:27:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 12:29:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 12:29:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 12:29:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 12:29:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 12:29:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 12:29:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 12:41:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 12:41:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 12:41:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 12:42:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 12:42:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 12:42:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 12:43:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 12:43:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 12:43:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 12:54:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-13 12:54:00 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-13 12:54:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-13 12:54:33 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-13 12:54:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 12:54:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 12:54:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 12:56:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 12:56:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 12:56:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 12:57:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 12:57:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 12:57:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 12:57:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 12:57:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 12:57:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 12:57:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 12:57:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 12:57:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 12:58:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 12:58:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 12:58:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 12:58:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 12:58:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 12:58:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 12:58:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 12:58:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 12:58:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:06:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:06:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:06:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:11:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:11:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:11:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:11:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-13 13:11:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-13 13:12:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:12:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:12:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:13:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:13:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:13:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:13:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:13:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:13:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:14:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:14:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:14:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:15:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:15:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:15:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:17:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:17:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:17:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:17:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:17:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:17:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:17:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:17:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:17:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:19:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:19:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:19:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:19:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:19:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:19:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:20:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:20:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:20:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:20:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:20:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:20:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:21:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:21:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:21:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:21:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:21:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:21:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:22:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:22:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:22:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:22:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:22:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:22:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:27:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:27:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:27:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:28:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:28:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:28:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:30:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:30:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:30:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 13:31:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 13:31:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 13:31:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 14:25:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 14:25:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 14:25:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 14:28:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-13 14:28:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-13 14:28:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 14:28:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 14:28:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 14:30:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-13 14:30:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-13 14:30:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 14:30:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 14:30:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 14:37:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 14:37:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 14:37:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 14:42:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 14:42:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 14:42:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 14:47:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 14:47:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 14:47:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 14:49:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 14:49:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 14:49:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 14:57:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-13 14:57:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-13 14:59:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 14:59:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 14:59:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 15:06:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 15:06:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 15:06:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 15:11:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 15:11:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 15:11:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 15:14:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 15:14:19 --> Could not find the language line "error_occured"
ERROR - 2026-03-13 15:14:24 --> Could not find the language line "student_fee1"
ERROR - 2026-03-13 15:15:43 --> Could not find the language line "student_fee1"
ERROR - 2026-03-13 15:16:14 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 15:16:14 --> Could not find the language line "principal"
ERROR - 2026-03-13 15:16:14 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 15:16:14 --> Could not find the language line "principal"
ERROR - 2026-03-13 15:16:22 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 15:16:22 --> Could not find the language line "principal"
ERROR - 2026-03-13 15:16:22 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 15:16:22 --> Could not find the language line "principal"
ERROR - 2026-03-13 15:16:35 --> Could not find the language line "student_fee1"
ERROR - 2026-03-13 15:16:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 15:16:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 15:16:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 15:16:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 15:16:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 15:16:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 15:16:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-13 15:16:57 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 15:16:57 --> Could not find the language line "principal"
ERROR - 2026-03-13 15:16:57 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 15:16:57 --> Could not find the language line "principal"
ERROR - 2026-03-13 15:17:07 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 15:17:07 --> Could not find the language line "principal"
ERROR - 2026-03-13 15:17:15 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 15:17:15 --> Could not find the language line "principal"
ERROR - 2026-03-13 15:17:15 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 15:17:15 --> Could not find the language line "principal"
ERROR - 2026-03-13 15:17:19 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 15:17:19 --> Could not find the language line "principal"
ERROR - 2026-03-13 15:17:19 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-13 15:17:19 --> Could not find the language line "principal"
ERROR - 2026-03-13 15:54:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-13 15:54:16 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-13 16:16:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 16:16:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 16:16:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 16:24:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 16:24:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 16:24:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 16:24:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 16:24:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 16:24:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 16:30:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 16:30:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 16:30:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 16:32:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 16:32:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 16:32:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 16:35:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 16:35:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 16:35:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 16:37:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 16:37:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 16:37:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 16:50:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 16:50:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 16:50:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 17:37:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 17:37:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 17:37:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 18:25:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 18:25:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 18:25:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 18:26:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 18:26:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 18:26:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 18:27:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 18:27:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 18:27:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 18:29:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 18:29:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 18:29:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 18:30:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 18:30:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 18:30:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 18:31:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 18:31:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 18:31:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 18:44:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 18:44:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 18:44:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 18:45:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 18:45:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 18:45:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 18:46:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 18:46:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 18:46:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 19:11:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 19:11:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 19:11:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-13 19:12:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-13 19:12:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-13 19:12:47 --> Could not find the language line "discount_this_action_is_irreversible"
