<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-03 01:19:15 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2025-12-03 09:58:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-03 09:58:52 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-03 09:59:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 09:59:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 09:59:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 10:10:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-03 10:10:56 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-03 10:11:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:11:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:11:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:20:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 10:20:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 10:20:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 10:24:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:24:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:24:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:24:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 10:24:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 10:24:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 10:26:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 10:26:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 10:26:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 10:28:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-03 10:28:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-03 10:30:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 10:30:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 10:30:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 10:33:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 10:33:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 10:33:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 10:37:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-03 10:37:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-03 10:37:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:37:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:37:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:37:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:37:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:37:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 10:37:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 10:37:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 10:38:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:38:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:38:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:38:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:38:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:38:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:38:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:39:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:39:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:40:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:40:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:40:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:40:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:40:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:40:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:40:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:40:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:40:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:40:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:40:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:40:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:41:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:41:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:41:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:41:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:41:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:41:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:41:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:42:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:42:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:42:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:42:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:42:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:42:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:42:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:42:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:42:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:42:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:42:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:42:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:42:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:42:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:43:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 10:43:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 10:43:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 10:43:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:43:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:43:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:44:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:44:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:44:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:44:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:44:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:45:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:45:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:45:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:45:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:45:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:45:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:45:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:45:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:45:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:45:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:45:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:45:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:45:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:46:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:46:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:46:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:46:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 10:46:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 10:46:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 10:46:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:46:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:47:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:47:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:47:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:47:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:47:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:47:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:48:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:48:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:48:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:48:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:48:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:48:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:48:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:48:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:48:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:48:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:48:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:48:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:49:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:49:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 10:49:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 10:49:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 10:49:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:49:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:49:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:49:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:49:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:49:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:49:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:49:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:50:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:50:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:50:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:50:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:50:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:50:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:50:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:50:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:51:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:51:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:51:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:51:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:51:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:51:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:51:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:51:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:51:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:51:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:51:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:51:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:51:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:51:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:52:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:52:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:52:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:52:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 10:52:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:52:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 10:52:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 10:52:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:52:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:52:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:52:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:52:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:53:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:53:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:53:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:53:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:53:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:53:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:53:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:53:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:53:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:53:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:54:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:54:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:54:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:55:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:55:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:55:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:55:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:55:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:55:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:55:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 10:55:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 10:55:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 10:56:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:56:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:56:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:56:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:56:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:56:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:56:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:56:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:57:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:57:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:57:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:57:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:57:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:57:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:57:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 10:58:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 10:58:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 10:58:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 11:00:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 11:00:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 11:00:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 11:01:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 11:01:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 11:01:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 11:01:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 11:01:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 11:01:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 11:01:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 11:01:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 11:01:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 11:01:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 11:01:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 11:01:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 11:01:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 11:01:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 11:01:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 11:05:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 11:05:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 11:05:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 11:08:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 11:08:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 11:08:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 11:12:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 11:12:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 11:12:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 11:25:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 11:25:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 11:25:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 11:32:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 11:32:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 11:32:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 11:35:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 11:35:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 11:35:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 11:39:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 11:39:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 11:39:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 11:44:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 11:44:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 11:44:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 11:45:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 11:45:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 11:45:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 11:48:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 11:48:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 11:48:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 11:52:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 11:52:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 11:52:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 11:55:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 11:55:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 11:55:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 11:57:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 11:57:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 11:57:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:00:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-03 12:00:39 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-03 12:00:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:00:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:00:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:02:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:02:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:02:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:11:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:11:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:11:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:12:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:12:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:12:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:28:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:28:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:28:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:30:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:30:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:30:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:32:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:32:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:32:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:35:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:35:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:35:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:38:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:38:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:38:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:41:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:41:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:41:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:42:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:42:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:42:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:45:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:45:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:45:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:45:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:45:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:45:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:46:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:46:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:46:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:46:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:46:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:46:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:47:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:47:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:47:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:48:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:48:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:48:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:48:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:48:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:48:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:48:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:48:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:48:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:50:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:50:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:50:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:52:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:52:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:52:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:56:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:56:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:56:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 12:58:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 12:58:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 12:58:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:02:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:02:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:02:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:05:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:05:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:05:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:15:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:15:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:15:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:16:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:16:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:16:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:18:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:18:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:18:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:18:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:18:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:18:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:18:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:18:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:18:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:20:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:20:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:20:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:20:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:20:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:20:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:23:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:23:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:23:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:28:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:28:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:28:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:32:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:32:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:32:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:34:59 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 13:35:15 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (2855, NULL, 7000, 'D', '')
ERROR - 2025-12-03 13:35:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:35:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:35:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:35:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:35:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:35:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:37:47 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 13:39:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:39:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:39:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:44:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:44:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:44:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:53:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:53:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:53:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:56:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:56:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:56:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:57:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:57:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:57:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:58:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 13:58:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 13:58:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 13:59:06 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 14:00:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:00:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:00:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:01:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:01:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:01:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:05:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:05:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:05:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:10:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:10:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:10:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:10:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:10:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:10:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:13:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:13:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:13:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:15:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:15:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:15:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:22:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:22:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:22:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:23:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:23:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:23:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:24:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:24:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:24:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:38:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:38:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:38:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:39:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:39:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:39:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:39:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:39:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:39:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:39:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:39:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:39:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:40:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:40:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:40:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:40:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:40:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:40:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:40:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:40:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:40:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:41:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:41:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:41:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:41:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:41:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:41:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:41:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:41:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:41:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:41:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:41:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:41:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:42:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:42:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:42:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:51:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:51:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:51:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:52:08 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 14:52:18 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 14:52:30 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 14:52:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:52:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:52:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:53:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:53:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:53:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:53:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-03 14:53:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-03 14:53:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:53:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:53:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:53:11 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 14:53:31 --> Could not find the language line "custom"
ERROR - 2025-12-03 14:54:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:54:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:54:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:55:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:55:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:55:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:55:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-03 14:55:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-03 14:55:53 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 14:56:44 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 14:56:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:56:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:56:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:58:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:58:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:58:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:58:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:58:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:58:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 14:59:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 14:59:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 14:59:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:01:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:01:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:01:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:03:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:03:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:03:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:04:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:04:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:04:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:04:51 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:05:28 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 15:06:06 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 15:07:08 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 15:07:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:07:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:07:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:08:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:08:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:08:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:08:56 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 15:10:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:10:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:10:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:12:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:12:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:12:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:14:15 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 15:18:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:18:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:18:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:18:39 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 15:18:46 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 15:18:54 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:18:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:18:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:18:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:19:02 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:19:19 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:19:25 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:19:31 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:20:13 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:20:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:20:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:20:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:20:31 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:21:38 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 15:21:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:21:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:21:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:22:13 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:22:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:22:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:22:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:23:12 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 15:23:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:23:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:23:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:23:19 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:23:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:23:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:23:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:24:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:24:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:24:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:25:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:25:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:25:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:26:06 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 15:26:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:26:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:26:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:27:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:27:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:27:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:28:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:28:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:28:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:30:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:30:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:30:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:31:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:31:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:31:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:32:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:32:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:32:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:33:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:33:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:33:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:34:32 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 15:34:34 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:34:46 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:36:24 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:37:21 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 15:37:24 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:37:35 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:38:59 --> Could not find the language line "error_occured"
ERROR - 2025-12-03 15:39:00 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:39:07 --> Could not find the language line "student_fee1"
ERROR - 2025-12-03 15:42:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:42:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:42:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:44:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:44:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:44:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:44:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:44:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:44:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:45:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:45:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:45:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:46:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:46:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:46:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:46:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:46:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:46:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:47:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:47:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:47:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:47:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:47:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:47:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:50:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:50:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:50:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:50:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-03 15:50:49 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-03 15:51:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:51:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:51:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:52:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:52:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:52:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:52:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:53:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:53:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:53:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:53:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:53:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:53:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:53:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:53:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:53:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 15:53:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:53:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:53:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 15:56:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 15:56:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 15:56:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 16:01:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 16:01:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 16:01:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 16:04:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 16:04:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 16:04:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 16:10:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 16:10:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 16:10:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 16:10:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 16:10:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 16:10:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 16:43:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 16:43:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 16:43:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 16:47:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 16:47:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 16:47:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 16:49:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 16:49:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 16:49:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 16:50:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 16:50:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 16:50:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 16:50:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 16:50:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 16:50:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 16:50:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 16:50:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 16:50:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 16:50:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 16:50:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 16:50:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-03 16:50:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 16:50:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 16:50:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 16:51:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 16:51:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 16:51:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 16:51:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 16:51:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 16:51:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 16:54:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 16:54:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 16:54:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 17:10:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-03 17:10:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-03 17:11:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 17:11:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 17:11:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 17:18:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-03 17:18:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-03 17:21:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 17:21:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 17:21:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 17:26:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 17:26:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 17:26:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-03 17:29:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-03 17:29:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-03 17:29:30 --> Could not find the language line "discount_this_action_is_irreversible"
