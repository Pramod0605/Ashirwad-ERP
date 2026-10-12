<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-19 08:37:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-19 08:37:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-19 08:37:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:37:48 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:37:50 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:37:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 08:37:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 08:37:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 08:38:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:38:56 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:38:56 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:39:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 08:39:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 08:39:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 08:39:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:39:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:39:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:39:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 08:39:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 08:39:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 08:39:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:40:19 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:40:19 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:40:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 08:40:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 08:40:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 08:40:54 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:40:58 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:40:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:41:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 08:41:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 08:41:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 08:42:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:42:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:42:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 08:42:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 08:42:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 08:42:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 09:02:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:03:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:03:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:03:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 09:03:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 09:03:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 09:04:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:04:32 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:04:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:04:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 09:04:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 09:04:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 09:08:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:08:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:08:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:08:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 09:08:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 09:08:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 09:16:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:16:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:16:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:16:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 09:16:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 09:16:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 09:26:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:26:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:26:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:26:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 09:26:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 09:26:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 09:27:02 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:27:09 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:27:09 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:27:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:27:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 09:27:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 09:27:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 09:33:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:33:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:33:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:33:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 09:33:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 09:33:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 09:37:12 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:37:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:37:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:37:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 09:37:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 09:37:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 09:42:56 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:43:01 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:43:02 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 09:43:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 09:43:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 09:43:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 09:45:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 09:45:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 09:45:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 09:45:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 09:45:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 09:45:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 09:58:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 09:58:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 09:58:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 09:59:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 10:01:12 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 10:01:12 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 10:01:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:01:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:01:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:10:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-19 10:10:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-19 10:11:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:11:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:11:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:11:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-19 10:11:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-19 10:12:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:12:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:12:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:13:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:13:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:13:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:15:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:15:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:15:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:15:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-19 10:15:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-19 10:16:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:16:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:16:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:16:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 10:17:04 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 10:17:05 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 10:17:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:17:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:17:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:17:25 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 10:25:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 10:25:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 10:25:32 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 10:25:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:25:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:25:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:30:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-19 10:30:26 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-19 10:32:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:32:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:32:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:33:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:33:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:33:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:33:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:33:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:33:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:33:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:33:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:33:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:33:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 10:37:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:37:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:37:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:44:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:44:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:44:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:47:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:47:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:47:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:48:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:48:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:48:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:49:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:49:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:49:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:50:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:50:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:50:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:53:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:53:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:53:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 10:54:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 10:54:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 10:54:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 11:02:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 11:02:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 11:02:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 11:02:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 11:02:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 11:02:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 11:12:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 11:12:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 11:12:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 11:21:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 11:21:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 11:21:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 11:23:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 11:23:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 11:23:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 11:23:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 11:23:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 11:23:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 11:24:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 11:24:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 11:24:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 11:42:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 11:42:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 11:42:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 11:42:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 11:42:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 11:42:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 11:43:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-19 11:43:30 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-19 11:43:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 11:43:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 11:43:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 11:43:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 11:43:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 11:43:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 11:46:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 11:47:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 11:47:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 11:47:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 11:48:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 11:48:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 11:48:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 11:48:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 11:49:38 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 11:49:38 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 11:49:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 11:56:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 11:56:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 11:56:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 11:57:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 11:57:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 11:57:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:04:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 12:04:37 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 12:04:37 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 12:04:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:04:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:04:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:07:36 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 12:07:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 12:07:42 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 12:09:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:09:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:09:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:11:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:11:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:11:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:11:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:11:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:11:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:14:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:14:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:14:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:14:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-19 12:14:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-19 12:15:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:15:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:15:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:15:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:15:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:15:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:15:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:15:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:15:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:18:09 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 12:20:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 12:21:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 12:21:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 12:24:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:24:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:24:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:24:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:24:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:24:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:26:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:26:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:26:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:27:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:27:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:27:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:28:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 12:28:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:28:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:28:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:28:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:28:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:28:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:35:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:35:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:35:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:36:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 12:36:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 12:36:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 12:36:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 12:36:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:36:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:36:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:36:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:36:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:36:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:37:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:37:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:37:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:37:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:37:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:37:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:38:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:38:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:38:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:41:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:41:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:41:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 12:59:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 12:59:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 12:59:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 13:00:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 13:00:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 13:00:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 13:01:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 13:01:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 13:01:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 13:01:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 13:01:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 13:01:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 13:02:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 13:02:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 13:02:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 13:02:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 13:02:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 13:02:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 13:03:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 13:03:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 13:03:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 13:04:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 13:04:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 13:04:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 13:05:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 13:05:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 13:05:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 13:34:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 13:35:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 13:37:01 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 13:37:01 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 13:37:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 13:38:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 13:38:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 13:38:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 13:39:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 13:41:46 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 13:52:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 13:52:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 13:52:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 13:52:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 13:52:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 13:52:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 13:52:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 13:53:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 13:53:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 13:53:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 13:53:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 13:53:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:12:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:12:58 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:13:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:13:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:13:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:13:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:13:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:13:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:13:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:14:13 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:14:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:14:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:14:25 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:14:26 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:14:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:14:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:14:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:15:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:15:20 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:15:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:15:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:15:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:15:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:15:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:15:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:15:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:21:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:21:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:21:32 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:21:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:21:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:21:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:23:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:23:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:23:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:25:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:25:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:25:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:25:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:25:48 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:25:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 14:26:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:26:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:26:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:27:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:27:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:27:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:28:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:28:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:28:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:41:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:41:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:41:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:42:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:42:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:42:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:44:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:44:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:44:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:45:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:45:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:45:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:45:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:45:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:45:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:45:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:45:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:45:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:46:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:46:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:46:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:46:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:46:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:46:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:46:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:46:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:46:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:47:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:47:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:47:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:47:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:47:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:47:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:49:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:49:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:49:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:51:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:51:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:51:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:51:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:51:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:51:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:52:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:52:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:52:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:52:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:52:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:52:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:56:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:56:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:56:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 14:57:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 14:57:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 14:57:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 15:00:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 15:00:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 15:00:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 15:01:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 15:01:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 15:01:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 15:01:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 15:01:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 15:01:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 15:01:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 15:01:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 15:01:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 15:02:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 15:02:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 15:02:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 15:02:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 15:02:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 15:02:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 15:04:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 15:04:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 15:04:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 15:32:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 15:32:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 15:32:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 15:35:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 15:35:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 15:35:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 16:25:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-19 16:25:59 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-19 16:26:01 --> Could not find the language line "not_generated"
ERROR - 2026-02-19 16:26:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 16:26:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 16:26:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 16:26:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 16:26:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 16:26:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 16:27:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 16:27:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 16:27:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 16:27:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 16:27:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 16:27:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 16:48:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 16:48:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 16:48:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-19 18:00:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-19 18:00:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-19 18:00:29 --> Could not find the language line "discount_this_action_is_irreversible"
