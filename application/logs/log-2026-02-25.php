<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-25 09:05:22 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-02-25 09:05:23 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-02-25 09:06:03 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-02-25 09:06:03 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-02-25 09:06:05 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-02-25 09:06:05 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-02-25 09:06:07 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-02-25 09:06:08 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-02-25 09:06:10 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-02-25 09:06:10 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-02-25 10:07:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-25 10:07:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-25 10:08:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 10:08:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 10:08:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 10:10:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 10:10:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 10:10:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 10:19:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 10:19:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 10:19:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 10:19:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 10:19:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 10:19:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 10:40:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 10:40:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 10:40:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 10:40:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 10:40:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 10:40:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 11:23:24 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-02-25 11:36:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-25 11:36:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-25 11:36:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 11:36:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 11:36:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 11:37:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 11:37:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 11:37:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 11:37:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-25 11:37:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-25 11:38:44 --> Could not find the language line "not_generated"
ERROR - 2026-02-25 11:39:05 --> Could not find the language line "not_generated"
ERROR - 2026-02-25 11:39:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-25 11:39:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-25 11:39:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-25 11:39:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-25 11:39:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 11:39:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 11:39:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 11:40:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 11:40:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 11:40:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 11:42:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 11:42:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 11:42:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 11:43:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 11:43:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 11:43:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 12:33:23 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-02-25 12:39:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 12:39:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 12:39:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 12:45:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 12:45:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 12:45:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 12:50:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 12:50:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 12:50:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 12:51:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 12:51:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 12:51:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 12:52:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 12:52:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 12:52:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 12:53:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 12:53:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 12:53:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 12:54:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 12:54:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 12:54:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 12:56:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 12:56:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 12:56:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 12:56:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 12:56:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 12:56:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 13:36:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 13:36:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 13:36:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 13:46:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-25 13:47:32 --> Could not find the language line "not_generated"
ERROR - 2026-02-25 13:51:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 13:51:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 13:51:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 14:02:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 14:02:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 14:02:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 14:19:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 14:19:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 14:19:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 14:20:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 14:20:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 14:20:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 14:42:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 14:42:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 14:42:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 14:42:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 14:42:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 14:42:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 14:42:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 14:42:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 14:42:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 16:12:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-25 16:12:46 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-25 16:20:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 16:20:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 16:20:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 16:29:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 16:29:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 16:29:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 16:30:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 16:30:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 16:30:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 16:53:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 16:53:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 16:53:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 16:53:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 16:53:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 16:53:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 16:54:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 16:54:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 16:54:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 16:54:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 16:54:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 16:54:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 16:55:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 16:55:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 16:55:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 16:56:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 16:56:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 16:56:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 16:58:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 16:58:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 16:58:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 17:34:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-25 17:34:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-25 17:34:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-25 18:39:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-25 18:39:31 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-25 18:39:42 --> Could not find the language line "not_generated"
ERROR - 2026-02-25 18:39:56 --> Could not find the language line "not_generated"
ERROR - 2026-02-25 18:39:56 --> Could not find the language line "not_generated"
ERROR - 2026-02-25 20:17:05 --> Could not find the language line "not_generated"
ERROR - 2026-02-25 20:46:42 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
