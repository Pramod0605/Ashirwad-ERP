<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-22 09:18:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-22 09:18:11 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-22 09:18:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 09:18:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 09:18:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 09:18:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 09:18:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 09:18:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 09:23:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-22 09:23:56 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-22 09:25:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 09:25:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 09:25:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 09:25:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 09:25:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 09:25:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 09:38:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 09:38:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 09:38:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 09:44:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 09:44:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 09:44:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 09:45:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 09:45:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 09:45:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 09:45:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 09:45:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 09:45:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 09:46:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-22 09:46:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-22 09:47:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 09:47:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 09:47:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 09:49:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-22 09:49:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-22 09:50:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 09:50:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 09:50:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 09:50:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 09:51:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 09:51:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 09:51:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 09:51:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 09:51:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 09:51:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 09:52:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 09:52:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 09:52:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 09:59:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-22 09:59:24 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-22 10:00:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:00:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:00:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:01:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:01:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:01:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:05:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:05:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:05:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:06:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:06:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:06:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:07:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:07:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:07:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:07:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:07:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:07:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:08:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:08:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:08:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:09:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:09:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:09:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:09:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:09:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:09:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:10:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:10:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:10:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:12:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:12:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:12:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:13:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:13:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:13:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:17:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:17:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:17:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:20:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:20:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:20:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:21:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:21:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:21:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:22:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:22:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:22:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:22:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:22:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:22:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:24:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:24:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:24:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:26:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:26:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:26:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:32:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:32:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:32:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:33:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:33:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:33:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:33:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:33:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:33:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:36:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:36:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:36:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:36:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:36:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:36:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:38:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:38:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:38:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:41:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:41:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:41:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:42:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:42:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:42:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:42:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:42:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:42:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:43:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:43:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:43:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:44:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:44:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:44:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:44:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:44:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:44:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:45:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:45:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:45:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:45:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:45:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:45:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:48:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:48:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:48:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:49:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:49:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:49:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:49:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:49:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:49:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:50:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:50:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:50:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:51:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:51:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:51:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:51:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:51:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:51:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:52:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:52:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:52:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:52:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:52:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:52:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:52:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:52:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:52:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:53:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:53:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:53:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:53:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:53:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:53:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:54:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:54:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:54:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:57:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:57:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:57:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:59:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:59:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:59:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 10:59:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 10:59:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 10:59:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:00:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:00:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:00:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:00:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:00:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:00:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:02:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:02:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:02:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:02:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:02:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:02:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:05:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:05:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:05:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:06:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:06:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:06:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:10:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:10:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:10:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:11:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:11:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:11:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:12:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:12:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:12:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:18:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:18:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:18:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:19:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:19:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:19:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:20:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-22 11:20:05 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-22 11:20:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:20:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:20:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:20:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-22 11:20:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-22 11:25:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-22 11:25:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-22 11:25:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:25:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:25:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:26:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:26:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:26:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:29:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:29:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:29:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:30:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:30:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:30:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:30:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:30:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:30:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:30:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:30:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:30:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:31:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:31:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:31:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:36:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:36:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:36:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:38:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:38:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:38:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:39:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:39:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:39:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:43:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:43:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:43:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:43:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:43:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:43:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:44:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:44:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:44:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:44:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:44:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:44:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:45:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:45:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:45:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:46:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:46:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:46:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:46:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:46:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:46:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:47:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:47:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:47:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:48:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:48:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:48:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:48:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:48:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:48:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:50:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:50:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:50:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:51:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:51:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:51:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:51:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:51:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:51:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:52:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:52:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:52:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:55:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:55:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:55:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:55:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:55:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:55:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:55:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:55:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:55:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 11:58:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 11:58:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 11:58:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:00:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-22 12:00:21 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-22 12:00:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:00:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:00:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:00:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:00:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:00:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:02:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:02:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:02:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:02:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-22 12:02:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-22 12:02:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:02:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:02:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:02:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:02:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:02:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:02:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:31:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:33:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:33:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:33:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:35:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:35:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:35:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:36:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:36:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:36:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:40:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:40:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:40:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:40:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:40:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:40:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:40:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:40:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:41:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:41:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:41:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:41:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:41:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:46:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:46:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:46:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:47:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:47:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:47:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:48:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:48:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:48:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:48:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:48:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:48:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:48:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:48:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:48:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:48:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:48:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:48:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:48:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:48:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:48:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:48:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:48:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:48:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:49:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:49:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:49:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:50:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:50:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:50:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:50:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:50:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:50:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:51:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:51:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:51:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:51:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:51:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:51:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:51:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:51:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:51:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:51:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:51:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:51:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:52:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:52:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:52:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:52:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:52:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:52:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:55:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:55:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:55:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:55:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:55:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:55:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:56:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:56:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:56:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:57:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 12:57:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 12:57:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 12:58:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:58:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 12:58:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:00:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:00:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:00:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:02:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:02:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:02:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:02:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:02:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:02:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:02:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:02:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:02:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:02:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:03:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:03:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:03:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:03:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:03:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:03:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:06:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:06:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:06:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:06:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:06:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:06:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:08:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:08:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:08:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:10:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:10:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:10:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:10:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:10:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:10:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:10:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:10:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:10:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:11:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:11:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:11:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:14:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:23:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-22 13:23:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-22 13:24:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:31:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:31:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:31:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:32:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:32:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:32:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:34:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:34:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:34:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:34:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-22 13:34:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-22 13:35:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:35:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:35:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:37:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:37:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:37:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:38:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-22 13:38:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2025-12-22 13:45:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:45:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:45:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:45:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:45:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:45:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:45:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:46:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:46:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:46:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:46:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:46:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:46:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:46:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:47:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:48:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:48:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:48:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:48:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:48:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:49:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:50:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:50:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:50:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:50:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:50:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:53:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:53:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:53:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 13:54:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:54:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:54:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:56:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:56:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:56:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 13:56:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 13:56:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 13:56:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:12:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 14:12:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 14:12:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 14:12:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:12:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:12:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:12:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 14:14:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:14:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:14:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:16:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:16:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:16:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:18:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:18:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:18:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:19:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:19:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:19:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:19:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:19:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:19:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:20:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:20:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:20:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:21:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:21:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:21:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:26:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 14:33:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:33:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:33:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:34:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:34:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:34:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:35:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:35:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:35:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:36:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:36:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:36:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:36:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:36:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:36:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:38:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 14:38:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 14:38:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 14:38:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-22 14:38:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-22 14:38:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:38:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:38:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:38:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:38:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:38:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:41:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:41:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:41:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:53:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 14:53:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 14:53:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 14:53:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:53:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:53:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 14:58:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 14:58:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 14:58:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 15:00:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 15:00:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 15:00:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 15:02:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 15:02:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 15:02:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 15:03:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 15:03:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 15:03:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 15:06:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 15:06:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 15:06:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 15:08:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-22 15:08:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-22 15:09:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 15:09:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 15:09:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 15:09:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 15:09:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 15:09:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 15:10:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 15:10:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 15:10:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-22 15:19:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-22 15:21:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-22 15:21:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-22 15:21:16 --> Could not find the language line "discount_this_action_is_irreversible"
