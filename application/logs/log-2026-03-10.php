<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-10 03:55:44 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-03-10 04:05:04 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-03-10 04:49:59 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-03-10 09:16:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-10 09:16:21 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-10 09:17:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:18:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 09:18:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 09:18:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 09:18:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:19:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:19:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:19:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 09:19:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 09:19:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 09:20:35 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:20:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:20:44 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:20:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:21:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:21:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:21:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 09:21:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 09:21:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 09:31:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:31:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:31:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:31:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 09:31:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 09:31:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 09:31:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:31:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:31:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:31:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 09:31:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 09:31:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 09:31:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 09:31:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 09:31:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 09:31:47 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:31:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:31:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:31:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 09:31:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 09:31:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 09:34:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:34:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:34:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:34:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 09:34:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 09:34:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 09:56:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 09:56:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 09:56:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 09:59:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:59:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 09:59:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:00:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:00:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:00:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:06:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:06:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:06:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:08:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:08:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:08:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:10:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-10 10:10:29 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-10 10:10:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:16:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-10 10:16:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-10 10:17:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:17:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:17:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:20:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:20:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:20:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:20:44 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:21:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:21:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:21:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:21:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:21:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:21:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:22:31 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4088, NULL, 7000, 'D', '')
ERROR - 2026-03-10 10:22:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:22:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:22:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:22:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:22:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:22:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:23:08 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4089, NULL, 7000, 'D', '')
ERROR - 2026-03-10 10:23:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:23:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:23:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:25:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:25:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:25:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:25:59 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4090, NULL, 9000, 'D', '')
ERROR - 2026-03-10 10:26:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:26:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:26:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:26:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:26:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:26:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:27:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:27:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:27:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:27:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:27:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:27:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:28:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:28:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:28:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:29:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:29:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:29:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:30:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:30:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:30:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:30:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:30:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:30:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:31:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:31:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:31:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:31:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:31:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:31:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:32:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:32:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:32:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:32:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:32:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:32:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:37:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:37:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-10 10:37:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-10 10:37:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:37:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:37:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:37:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:37:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:37:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:37:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:43:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:43:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:43:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:44:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:44:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:44:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:49:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:49:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:49:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:50:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:50:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:50:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:50:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:50:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:50:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 10:52:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:52:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:52:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 10:52:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 10:52:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 10:52:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:01:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:01:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:01:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:01:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:01:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:01:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:01:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:01:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:01:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:02:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:02:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:02:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:08:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:08:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:08:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:12:43 --> Could not find the language line "student_fee"
ERROR - 2026-03-10 11:12:47 --> Could not find the language line "error_occured"
ERROR - 2026-03-10 11:12:51 --> Could not find the language line "student_fee1"
ERROR - 2026-03-10 11:13:04 --> Could not find the language line "student_fee1"
ERROR - 2026-03-10 11:13:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:13:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:13:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:13:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:14:54 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-10 11:14:54 --> Could not find the language line "principal"
ERROR - 2026-03-10 11:14:54 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-10 11:14:54 --> Could not find the language line "principal"
ERROR - 2026-03-10 11:15:02 --> Could not find the language line "student_fee1"
ERROR - 2026-03-10 11:15:27 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-10 11:15:27 --> Could not find the language line "principal"
ERROR - 2026-03-10 11:15:33 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-10 11:15:33 --> Could not find the language line "principal"
ERROR - 2026-03-10 11:15:44 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-10 11:15:44 --> Could not find the language line "principal"
ERROR - 2026-03-10 11:15:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:15:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:15:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:15:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:15:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:16:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:16:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:16:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:16:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:20:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-10 11:20:46 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-10 11:20:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:21:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:27:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:27:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:27:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:27:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-10 11:27:31 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-10 11:28:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:28:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:28:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:29:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:29:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:29:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:30:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:30:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:30:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:31:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:31:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:31:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:32:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:32:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:32:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:32:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:32:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:32:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:32:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:32:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:32:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:34:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:34:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:34:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:37:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:37:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:37:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:39:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:39:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:39:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:40:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:40:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:40:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:49:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:49:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:49:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:49:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:49:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:49:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:49:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:49:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:49:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:49:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 11:49:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-10 11:49:41 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-10 11:49:44 --> Could not find the language line "error_occured"
ERROR - 2026-03-10 11:49:48 --> Could not find the language line "student_fee1"
ERROR - 2026-03-10 11:49:57 --> Could not find the language line "student_fee1"
ERROR - 2026-03-10 11:50:06 --> Could not find the language line "exam_coordinator"
ERROR - 2026-03-10 11:50:06 --> Could not find the language line "principal"
ERROR - 2026-03-10 11:50:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:50:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:50:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 11:51:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 11:51:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 11:51:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 12:01:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 12:01:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 12:01:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 12:02:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 12:02:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 12:02:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 12:07:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 12:07:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 12:07:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 12:10:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 12:10:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 12:10:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 12:22:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 12:22:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 12:22:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 12:22:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 12:23:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 12:24:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-10 12:24:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-10 12:29:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 12:29:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 12:29:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 12:29:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 12:29:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 12:29:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 12:30:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 12:30:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 12:30:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 12:31:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 12:31:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 12:31:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 12:33:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 12:33:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 12:33:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 12:33:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 12:33:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 12:33:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 12:35:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 12:35:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 12:35:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 12:35:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 12:35:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 12:35:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 12:35:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 12:35:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 12:35:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 12:39:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 12:39:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 12:39:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 12:43:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 12:43:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 12:43:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 13:04:27 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 13:04:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 13:04:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 13:04:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 13:04:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 13:05:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 13:05:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 13:05:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 13:12:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 13:12:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 13:12:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 13:16:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 13:16:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 13:16:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 13:16:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 13:16:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 13:16:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 13:25:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 13:25:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 13:25:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 13:42:31 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 13:42:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 13:42:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 13:42:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 13:42:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 13:42:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 14:02:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 14:02:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 14:02:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 14:05:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 14:05:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 14:05:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 14:06:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 14:06:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 14:06:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 14:09:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 14:09:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 14:09:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 14:09:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 14:09:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 14:09:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 14:11:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 14:11:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 14:11:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 14:11:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 14:11:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 14:11:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 14:12:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 14:12:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 14:12:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 14:12:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 14:12:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 14:12:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 14:13:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 14:13:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 14:13:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 14:16:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 14:16:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 14:16:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 14:18:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 14:18:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 14:18:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 14:23:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 14:23:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 14:23:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 14:48:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 14:48:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 14:48:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 14:48:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 14:48:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 14:48:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 14:50:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 14:50:38 --> Could not find the language line "student1"
ERROR - 2026-03-10 14:50:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 14:50:43 --> Could not find the language line "student1"
ERROR - 2026-03-10 14:51:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 14:54:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 14:54:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 14:54:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:01:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:01:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:01:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:02:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:02:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:02:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:03:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:03:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:03:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:03:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:03:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:14:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:14:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:14:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:14:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:14:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:14:46 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:14:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:14:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:14:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:22:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:22:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:22:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:28:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:28:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:28:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:36:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:36:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:36:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:36:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:36:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:36:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:36:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:36:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:36:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:37:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:37:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:37:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:44:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:44:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:44:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:47:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:47:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:47:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:47:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:47:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:47:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:48:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:48:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:48:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:50:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:50:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:50:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:51:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:54:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:54:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:54:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:54:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:54:51 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:54:51 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:54:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:54:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:54:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 15:57:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:57:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:57:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 15:57:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 15:57:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 15:57:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:00:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:00:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:00:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:10:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:10:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:10:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:10:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:10:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:10:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:11:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 16:12:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:12:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:12:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:13:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 16:13:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 16:13:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 16:13:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 16:20:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:20:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:20:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:20:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:20:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:20:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:21:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:21:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:21:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:21:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:21:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:21:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:23:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:23:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:23:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:23:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:23:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:23:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:23:57 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4120, NULL, 7500, 'D', '')
ERROR - 2026-03-10 16:23:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:23:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:23:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:29:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:29:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:29:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:39:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:39:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:39:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:44:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:44:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:44:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:45:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:45:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:45:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:45:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:45:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:45:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:45:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:45:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:45:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:48:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:48:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:48:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:48:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:48:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:48:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:49:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:49:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:49:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:49:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:49:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:49:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:53:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:53:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:53:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:53:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:53:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:53:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:54:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:54:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:54:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:56:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:56:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:56:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 16:59:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 16:59:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 16:59:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 17:00:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 17:00:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 17:00:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 17:08:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 17:08:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 17:08:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 17:10:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 17:10:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 17:10:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 17:20:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-10 17:20:18 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-10 17:55:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 17:55:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 17:55:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 17:55:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 17:55:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 17:55:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 17:55:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-10 17:55:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-10 17:56:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 17:56:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 17:56:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 17:57:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 17:57:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 17:57:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 17:58:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 17:58:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 17:58:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 17:58:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 17:58:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 17:58:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 17:58:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 17:58:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 17:58:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 17:59:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 17:59:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 17:59:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 17:59:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 17:59:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 17:59:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 17:59:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 17:59:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 17:59:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:00:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:00:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:00:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:00:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:00:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:00:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:01:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:01:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:01:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:01:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:01:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:01:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:01:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:01:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:01:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:03:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:03:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:03:35 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:03:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:03:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:03:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:04:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:04:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:04:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:04:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:04:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:04:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:04:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:04:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:04:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:04:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:04:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:04:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:05:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:05:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:05:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:05:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:05:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:05:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:05:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:05:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:05:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:05:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:05:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:05:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:05:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:05:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:05:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:06:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:06:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:06:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:06:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:06:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:06:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:06:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:06:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:06:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:06:35 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:06:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:06:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:06:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:06:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:06:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:06:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:06:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:06:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:07:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:07:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:07:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:07:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:07:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:07:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:07:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:07:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:07:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:08:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:08:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:08:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:08:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:08:15 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:08:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:08:20 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:08:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:08:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:08:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:08:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:08:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:08:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:08:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:08:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:08:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:08:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:08:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:08:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:09:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:09:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:09:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:09:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:09:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:09:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:09:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:09:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:09:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:09:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:09:43 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:09:44 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:09:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:09:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:09:49 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:09:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:09:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:09:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:09:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:09:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:10:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:10:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:10:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:10:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:10:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:10:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:10:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:10:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:10:46 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:10:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:10:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:10:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:11:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:11:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:11:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:11:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:11:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:11:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:11:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:11:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:11:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:11:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:11:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:11:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:12:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:12:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:12:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:12:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:12:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:12:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:12:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:12:46 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:12:46 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:12:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:12:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:12:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:13:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:13:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:13:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:13:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:13:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:13:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:13:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:13:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:13:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:13:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:13:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:13:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:13:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:13:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:13:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:13:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:13:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:13:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:14:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:14:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:14:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:14:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:14:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:14:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:14:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:14:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:14:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:14:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:14:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:14:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:14:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:14:47 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:14:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:14:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:14:55 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:14:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:14:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:14:58 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:15:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:15:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:15:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:15:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:15:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:15:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:15:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:15:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:15:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:15:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:15:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:15:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:15:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:15:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:15:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:15:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:15:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:15:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:15:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:16:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:16:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:16:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:16:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:16:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:16:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:16:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:16:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:16:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:16:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:16:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:16:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:16:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:17:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:17:01 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:17:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:17:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:17:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:17:04 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:17:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:17:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:17:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:17:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:17:27 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:17:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:17:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:17:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:17:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:17:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:17:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:17:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:17:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:17:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:18:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:18:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:18:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:18:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:18:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:18:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:18:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:18:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:18:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:18:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:18:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:18:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:19:27 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:19:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:19:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:19:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:19:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:19:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:19:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:20:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:20:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:20:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:20:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:20:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:20:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:20:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:20:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:20:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:20:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:20:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:20:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:20:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:20:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:20:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:20:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:20:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:20:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:20:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:20:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:20:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:20:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:20:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:21:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:21:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:21:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:21:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:21:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:21:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:22:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:22:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:22:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:22:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:22:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:22:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:23:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:23:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:23:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:23:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:23:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:23:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:23:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:23:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:23:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:23:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:23:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:23:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:24:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:24:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:24:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:24:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:24:21 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:24:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:24:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:24:26 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:24:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:24:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:24:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:24:46 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:24:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:24:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:24:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:24:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:24:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:25:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:25:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:25:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:25:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:25:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:25:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:25:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:25:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:25:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:25:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:25:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:25:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:25:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:26:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:26:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:26:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:26:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:26:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:26:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:26:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:26:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:26:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:26:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:26:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:26:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:26:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:26:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:26:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:26:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:27:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:27:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:27:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:27:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:27:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:27:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:27:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:27:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:27:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:27:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:27:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:27:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:27:47 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:27:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:28:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:28:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:28:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:28:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:28:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:28:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:28:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:28:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:28:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:28:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:28:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:28:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:28:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:28:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:28:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:28:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:28:58 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:28:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:29:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:29:01 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:29:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:29:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:29:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:29:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:29:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:29:31 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:29:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:29:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:29:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:29:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:29:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:29:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:29:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:29:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:30:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:30:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:30:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:30:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:30:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:30:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:33:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:33:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:33:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:33:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:33:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:33:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:33:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:33:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:33:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:34:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:34:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:34:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:34:27 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:34:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:34:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:34:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:34:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:34:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:34:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:35:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:35:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:35:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:35:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:35:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:35:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:35:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:35:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:35:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:35:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:35:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:35:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:36:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:36:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:36:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:36:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:36:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:36:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:36:27 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:36:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:36:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:36:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:36:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:36:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:36:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:37:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:37:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:37:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:37:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:37:32 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:37:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:37:38 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:37:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:37:49 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:37:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:37:55 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:38:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:38:35 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:38:35 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:38:44 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:38:44 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:39:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:39:23 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:39:27 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:39:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:39:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:39:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:39:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:39:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:40:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:40:44 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:40:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:40:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:40:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:40:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:41:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:41:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:41:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:41:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:41:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:41:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:41:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:41:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:41:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:41:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:41:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:41:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:42:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:42:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:42:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:42:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:42:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:42:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:43:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-10 18:43:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-10 18:43:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:44:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:44:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:44:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:44:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:44:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:44:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:44:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:44:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:44:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:44:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:44:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:44:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:44:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:44:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:45:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:45:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:45:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:45:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:45:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:45:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:45:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:45:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:45:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:45:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:45:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:45:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:45:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:45:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:45:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:46:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:46:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:46:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:46:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:46:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:46:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:46:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:46:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:46:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:46:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:46:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:46:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:47:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:47:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:47:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:47:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:47:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:47:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:47:31 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:47:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:47:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:47:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:47:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:47:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:48:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:48:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:48:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:48:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:48:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:48:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:48:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:48:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:48:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:48:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:48:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:48:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:49:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:49:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:49:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:49:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:49:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:49:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:49:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:49:31 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:49:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:49:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:49:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:49:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:49:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:49:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:49:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:50:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:50:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:50:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:51:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:51:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:51:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:51:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:51:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:51:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:51:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:51:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:51:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:51:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:51:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:51:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:51:46 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:51:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:51:51 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:51:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:51:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:51:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:52:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:52:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:52:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:52:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:52:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:52:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:52:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:52:46 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:52:47 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:52:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:52:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:52:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:53:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:53:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:53:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:53:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:53:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:53:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:53:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:53:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:53:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:53:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:53:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:53:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:54:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:54:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:54:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:54:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:54:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:54:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:54:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:54:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:54:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:55:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:55:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:55:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:55:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:55:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:55:25 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:55:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:55:30 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:55:35 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:56:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:56:01 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:56:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:56:05 --> Could not find the language line "student1"
ERROR - 2026-03-10 18:56:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:56:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:56:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:56:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:56:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:56:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:56:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:56:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:56:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:56:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:56:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:56:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:57:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:57:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:57:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:57:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:57:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:57:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:57:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:57:27 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:57:27 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:57:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:57:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:57:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:57:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:57:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:57:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:57:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:57:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:57:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:58:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:58:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:58:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:58:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:58:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:58:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:58:31 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:58:35 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:58:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:58:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:58:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:58:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:58:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:58:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:58:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:59:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:59:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:59:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:59:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:59:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:59:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:59:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:59:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:59:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 18:59:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:59:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:59:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 18:59:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 18:59:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 18:59:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:00:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:00:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:00:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:00:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:00:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:00:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:00:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:00:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:00:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:00:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:00:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:00:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:01:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:01:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:01:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:01:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:01:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:01:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:01:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:01:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:01:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:01:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:01:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:01:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:01:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:02:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:02:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:02:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:02:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:02:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:02:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:02:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:02:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:02:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:02:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:02:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:03:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:03:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:03:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:03:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:03:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:03:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:04:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:04:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:04:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:04:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:04:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:04:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:04:51 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:04:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:04:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:05:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:05:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:05:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:05:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:05:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:05:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:05:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:05:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:05:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:05:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:06:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:06:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:06:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:06:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:06:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:06:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:06:44 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:06:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:06:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:06:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:06:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:07:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:07:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:07:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:07:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:07:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:07:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:07:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:07:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:07:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:07:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:07:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:07:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:08:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:08:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:08:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:08:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:08:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:08:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:08:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:08:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:08:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:08:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:08:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:08:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:09:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:09:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:09:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:09:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:09:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:09:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:09:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:09:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:09:40 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:09:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:09:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:09:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:10:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:10:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:10:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:10:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:10:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:10:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-10 19:10:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:10:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:10:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-10 19:11:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-10 19:11:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-10 19:11:02 --> Could not find the language line "discount_this_action_is_irreversible"
