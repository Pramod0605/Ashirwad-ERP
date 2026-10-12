<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-08 01:31:38 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-03-08 10:22:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-08 10:22:37 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-08 10:23:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-08 10:23:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-08 10:23:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-08 10:24:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-08 10:24:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-08 10:24:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-08 10:24:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-08 10:24:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-08 10:24:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-08 10:50:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-08 10:50:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-08 10:50:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-08 10:51:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-08 10:51:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-08 10:51:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-08 10:51:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-08 10:51:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-08 11:19:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-08 11:19:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-08 11:19:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-08 11:59:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-08 11:59:41 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-08 12:00:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-08 12:00:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-08 12:00:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-08 12:06:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-08 12:06:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-08 12:06:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-08 12:14:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-08 12:14:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-08 12:14:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-08 12:15:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-08 12:15:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-08 12:15:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-08 13:18:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-08 13:18:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-08 13:18:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-08 13:19:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-08 13:19:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-08 13:19:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-08 13:50:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-08 13:50:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-08 13:50:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-08 13:50:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-08 13:50:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-08 13:50:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-08 13:50:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-08 13:50:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-08 13:50:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-08 13:51:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-08 13:51:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-08 13:51:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-08 13:51:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-08 13:51:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-08 12:21:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-08 12:21:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-08 20:26:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-08 20:27:00 --> Could not find the language line "not_generated"
