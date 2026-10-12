<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-10 08:31:15 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2025-12-10 08:46:22 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2025-12-10 10:19:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 10:19:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 10:19:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 10:35:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-10 10:35:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-10 10:35:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 10:35:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 10:35:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 10:35:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 10:35:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 10:35:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 10:42:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-10 10:42:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-10 10:47:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 10:47:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 10:47:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 10:49:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 10:49:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 10:49:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 10:57:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 10:57:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 10:57:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 11:00:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 11:00:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 11:00:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 11:03:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:03:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:03:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:03:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:03:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:03:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:04:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:04:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:04:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:04:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:04:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:04:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:04:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:04:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:04:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:04:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:04:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 11:05:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-10 11:05:33 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-10 11:06:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 11:06:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 11:06:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 11:07:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 11:07:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 11:07:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 11:10:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 11:10:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 11:10:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 11:11:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 11:11:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 11:11:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 11:12:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 11:12:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 11:12:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 11:12:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 11:12:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 11:12:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 11:14:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 11:14:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 11:14:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 11:15:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 11:15:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 11:15:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 11:16:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 11:16:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 11:16:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 11:17:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 11:17:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 11:17:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 11:20:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 11:20:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 11:20:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 11:23:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 11:23:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 11:23:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 11:24:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 11:24:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 11:24:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 11:25:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 11:25:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 11:25:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 12:40:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 12:40:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 12:40:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 12:40:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 12:40:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 12:40:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 12:40:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 12:40:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 12:40:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 12:41:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 12:41:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 12:41:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 12:44:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 12:44:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 12:44:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 12:45:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 12:45:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 12:45:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 12:46:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 12:46:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 12:46:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 12:53:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 12:53:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 12:53:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 12:53:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 12:53:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 12:53:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 12:56:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 12:56:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 12:56:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 12:58:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 12:58:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 12:58:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 12:58:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 12:59:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 12:59:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 12:59:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 13:01:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 13:01:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 13:01:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 13:01:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 13:01:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 13:02:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 13:02:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 13:02:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 13:02:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 13:02:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 13:02:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 13:06:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 13:06:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 13:06:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 13:08:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-10 13:08:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-10 13:08:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 13:08:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 13:08:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 13:08:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 13:08:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 13:08:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 13:09:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 13:09:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 13:09:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 13:13:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 13:13:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 13:13:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 13:13:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 13:13:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 13:13:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 13:19:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 13:25:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 13:25:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 13:47:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 13:47:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 13:47:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 13:47:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 13:47:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 13:47:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 13:50:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-10 13:50:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-10 13:51:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 13:51:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 13:51:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 13:53:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 13:55:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 13:55:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 13:55:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 13:55:20 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (2958, NULL, 5000, 'D', '')
ERROR - 2025-12-10 13:55:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 13:55:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 13:55:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 13:56:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 13:56:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 13:56:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 14:00:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 14:00:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 14:00:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 14:00:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 14:00:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-10 14:02:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 14:02:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 14:02:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 14:06:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 14:06:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 14:06:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 14:11:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 14:11:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 14:11:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 14:12:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 14:12:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 14:12:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 14:17:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 14:17:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 14:17:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 14:20:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 14:20:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 14:20:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 14:23:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 14:23:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 14:23:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 15:09:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 15:09:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 15:09:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 15:10:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 15:10:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 15:10:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 15:12:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 15:12:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 15:12:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 15:16:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 15:16:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 15:16:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 15:17:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 15:17:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 15:17:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 15:42:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 15:42:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 15:42:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 15:43:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 15:43:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 15:43:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 15:45:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 15:45:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 15:45:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 15:47:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 15:47:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 15:47:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 15:47:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 15:47:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 15:47:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 15:47:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 15:47:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 15:47:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 15:47:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 15:47:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 15:47:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 15:48:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 15:48:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 15:48:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 15:48:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 15:48:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 15:48:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 15:55:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 15:55:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 15:55:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 15:59:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 15:59:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 15:59:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-10 18:23:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-10 18:23:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-10 18:23:37 --> Could not find the language line "discount_this_action_is_irreversible"
