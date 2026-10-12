<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-26 01:57:49 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-02-26 10:50:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-26 10:50:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-26 10:50:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 10:50:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 10:50:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 10:51:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 10:51:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 10:51:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:02:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:02:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:02:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:02:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-26 11:02:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-26 11:03:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-26 11:03:47 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-26 11:04:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:04:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:04:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:06:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:06:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:06:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:24:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:24:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:24:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:24:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:24:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:24:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:25:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:25:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:25:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:26:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:26:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:26:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:26:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:26:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:26:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:31:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:31:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:31:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:33:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:33:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:33:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:34:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:34:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:34:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:36:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:36:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:36:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:37:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:37:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:37:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:37:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:37:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:37:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:38:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:38:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:38:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:38:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:38:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:38:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:39:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:39:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:39:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:39:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:39:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:39:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:40:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:40:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:40:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:41:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-26 11:41:07 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-26 11:41:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:41:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:41:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:42:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:42:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:42:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:42:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:42:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:42:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:43:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 11:43:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 11:43:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 11:58:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-26 11:58:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-26 12:15:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 12:15:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 12:15:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 12:19:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 12:19:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 12:19:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 12:22:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 12:22:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 12:22:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 12:23:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 12:23:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 12:23:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 12:28:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 12:28:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 12:28:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 12:30:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 12:30:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 12:30:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 12:30:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 12:30:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 12:30:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 12:50:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 12:50:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 12:50:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 12:54:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 12:54:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 12:54:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 12:57:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 12:57:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 12:57:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:00:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-26 13:00:11 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-26 13:02:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:02:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:02:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:04:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:04:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:04:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:07:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:07:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:07:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:11:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:11:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:11:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:17:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:17:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:17:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:20:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:20:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:20:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:23:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:23:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:23:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:24:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:24:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:24:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:26:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:26:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:26:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:28:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:28:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:28:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:29:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:29:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:29:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:30:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:30:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:30:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:37:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:37:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:37:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:39:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-26 13:39:47 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-26 13:40:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:40:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:40:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:42:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:42:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:42:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:48:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:48:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:48:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:49:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:49:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:49:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 13:50:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 13:50:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 13:50:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:13:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-26 14:13:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-26 14:13:26 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 14:13:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 14:13:32 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 14:13:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:13:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:13:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:15:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 14:15:22 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 14:15:22 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 14:15:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:15:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:15:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:17:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 14:17:50 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 14:17:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 14:17:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:17:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:17:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:18:25 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 14:18:29 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 14:18:29 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 14:18:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:18:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:18:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:21:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:21:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:21:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:22:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:22:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:22:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:22:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:22:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:22:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:23:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:23:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:23:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:23:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:23:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:23:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:24:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:24:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:24:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:26:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:26:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:26:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:32:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:32:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:32:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:32:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:32:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:32:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:32:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:32:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:32:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:33:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:33:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:33:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:34:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:34:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:34:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:35:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:35:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:35:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:38:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:38:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:38:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:38:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:38:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:38:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:39:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-26 14:39:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-26 14:39:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 14:39:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 14:39:29 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 14:43:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:43:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:43:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:47:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:47:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:47:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:49:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:49:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:49:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:51:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:51:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:51:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:52:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:52:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:52:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:53:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:53:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:53:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 14:53:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 14:53:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 14:53:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 15:03:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 15:03:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 15:03:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 15:12:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 15:12:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 15:12:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 15:13:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 15:13:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 15:13:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 15:22:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 15:22:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 15:22:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 15:33:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 15:33:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 15:33:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 15:48:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 15:48:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 15:48:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 15:56:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 15:56:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 15:56:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:01:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:01:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:01:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:07:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:07:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:07:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:07:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:07:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:07:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:08:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:08:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:08:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:08:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:08:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:08:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:10:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:10:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:10:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:11:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:11:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:11:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:14:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:14:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:14:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:23:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-26 16:23:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-26 16:24:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:24:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:24:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:25:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:25:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:25:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:26:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:26:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:26:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:27:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:27:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:27:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:28:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:28:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:28:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:40:30 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 16:40:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 16:40:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 16:40:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:40:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:40:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:41:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:41:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:41:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:41:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:41:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:41:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:46:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:46:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:46:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:53:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 16:53:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 16:53:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 16:58:01 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 16:58:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 16:58:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 16:58:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 16:58:33 --> Could not find the language line "student1"
ERROR - 2026-02-26 16:58:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 16:58:41 --> Could not find the language line "student1"
ERROR - 2026-02-26 16:58:56 --> Could not find the language line "not_generated"
ERROR - 2026-02-26 17:04:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 17:04:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 17:04:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-26 17:05:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-26 17:05:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-26 17:05:56 --> Could not find the language line "discount_this_action_is_irreversible"
