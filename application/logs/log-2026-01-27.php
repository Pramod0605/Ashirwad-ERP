<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-27 09:33:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-27 09:33:22 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-27 09:33:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-27 09:33:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-27 09:33:39 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-27 09:36:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 09:36:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 09:36:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 10:19:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-27 10:19:34 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-27 10:21:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-27 10:21:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-27 10:25:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-27 10:25:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-27 10:25:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-27 10:39:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 10:39:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 10:39:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 10:40:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 10:40:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 10:40:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 10:40:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 10:40:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 10:40:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 10:40:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 10:40:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 10:40:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 10:40:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 10:40:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 10:40:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 10:40:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 10:40:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 10:40:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 10:41:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 10:41:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 10:41:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 10:41:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 10:41:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 10:41:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 10:41:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 10:41:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 10:41:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 10:55:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 10:55:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 10:55:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 10:56:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 10:56:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 10:56:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:12:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:12:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:12:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:12:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:12:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:12:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:12:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:12:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:12:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:14:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:14:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:14:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:22:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-27 11:22:11 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-27 11:23:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:23:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:23:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:23:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:23:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:23:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:24:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:24:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:24:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:25:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:25:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:25:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:26:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:26:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:26:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:28:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:28:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:28:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:28:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:28:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:28:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:29:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:29:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:29:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:34:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:34:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:34:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:35:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:35:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:35:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:35:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:35:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:35:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:37:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:37:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:37:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:40:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:40:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:40:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:41:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:41:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:41:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:45:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:45:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:45:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:47:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:47:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:47:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:47:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:47:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:47:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:47:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:47:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:47:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:48:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:48:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:48:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:48:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:48:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:48:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:48:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:48:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:48:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:48:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:48:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:48:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:48:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:48:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:48:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:49:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:49:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:49:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:49:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:49:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:49:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:49:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:49:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:49:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:49:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:49:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:49:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:50:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:50:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:50:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:50:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:50:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:50:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:50:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:50:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:50:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:50:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:50:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:50:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:51:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:51:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:51:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:51:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:51:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:51:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:52:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:52:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:52:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:53:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:53:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:53:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 11:54:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 11:54:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 11:54:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:10:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-27 12:10:47 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-27 12:11:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:11:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:11:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:11:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:11:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:11:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:12:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:12:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:12:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:13:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:13:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:13:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:14:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:14:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:14:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:15:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:15:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:15:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:15:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:15:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:15:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:16:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:16:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:16:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:16:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:16:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:16:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:16:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:16:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:16:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:22:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:22:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:22:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:22:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:22:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:22:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:23:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:23:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:23:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:23:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:23:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:23:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:25:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:25:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:25:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:26:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:26:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:26:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:26:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:26:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:26:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:26:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:26:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:26:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:27:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:27:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:27:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:29:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:29:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:29:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:31:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:31:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:31:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:37:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:37:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:37:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:38:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:38:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:38:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:39:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:39:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:39:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:39:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:39:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:39:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:41:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:41:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:41:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:41:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:41:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:41:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:42:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:42:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:42:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:43:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:43:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:43:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:46:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:46:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:46:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:47:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:47:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:47:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:49:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:49:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:49:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 12:59:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 12:59:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 12:59:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 13:09:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 13:09:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 13:09:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 13:10:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 13:10:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 13:10:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 13:14:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 13:14:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 13:14:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 14:20:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 14:20:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 14:20:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 14:23:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 14:23:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 14:23:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 14:24:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 14:24:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 14:24:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 14:27:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 14:27:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 14:27:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 14:47:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 14:47:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 14:47:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 14:48:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 14:48:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 14:48:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 14:53:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 14:53:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 14:53:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 14:55:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 14:55:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 14:55:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 14:59:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 14:59:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 14:59:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 15:04:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 15:04:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 15:04:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 15:57:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 15:57:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 15:57:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 16:01:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 16:01:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 16:01:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 16:05:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 16:05:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 16:05:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 16:12:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 16:12:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 16:12:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 16:13:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 16:13:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 16:13:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 16:16:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 16:16:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 16:16:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 16:20:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 16:20:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 16:20:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 16:21:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 16:21:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 16:21:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 16:22:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 16:22:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 16:22:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 16:23:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 16:23:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 16:23:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 16:26:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 16:26:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 16:26:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 16:27:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 16:27:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 16:27:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 16:28:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 16:28:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 16:28:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 16:41:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 16:41:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 16:41:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 16:58:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 16:58:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 16:58:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 17:14:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 17:14:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 17:14:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 17:14:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 17:14:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 17:14:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 17:16:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 17:16:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 17:16:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 17:21:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-27 17:21:34 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-27 17:56:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-27 17:56:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-27 17:57:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 17:57:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 17:57:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 17:58:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-27 17:58:43 --> Could not find the language line "student_fee1"
ERROR - 2026-01-27 17:58:56 --> Could not find the language line "student_fee1"
ERROR - 2026-01-27 17:59:05 --> Could not find the language line "error_occured"
ERROR - 2026-01-27 17:59:21 --> Could not find the language line "error_occured"
ERROR - 2026-01-27 17:59:47 --> Could not find the language line "student_fee1"
ERROR - 2026-01-27 18:00:00 --> Could not find the language line "student_fee1"
ERROR - 2026-01-27 18:00:06 --> Could not find the language line "student_fee1"
ERROR - 2026-01-27 18:00:14 --> Could not find the language line "student_fee1"
ERROR - 2026-01-27 18:00:20 --> Could not find the language line "error_occured"
ERROR - 2026-01-27 18:00:25 --> Could not find the language line "student_fee1"
ERROR - 2026-01-27 18:00:32 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-27 18:00:32 --> Could not find the language line "principal"
ERROR - 2026-01-27 18:00:32 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-27 18:00:32 --> Could not find the language line "principal"
ERROR - 2026-01-27 18:00:32 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-27 18:00:32 --> Could not find the language line "principal"
ERROR - 2026-01-27 18:00:32 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-27 18:00:32 --> Could not find the language line "principal"
ERROR - 2026-01-27 18:00:43 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-27 18:00:43 --> Could not find the language line "principal"
ERROR - 2026-01-27 18:00:43 --> Could not find the language line "exam_coordinator"
ERROR - 2026-01-27 18:00:43 --> Could not find the language line "principal"
ERROR - 2026-01-27 19:17:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 19:17:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 19:17:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 19:22:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 19:22:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 19:22:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-27 19:23:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-27 19:23:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-27 19:23:25 --> Could not find the language line "discount_this_action_is_irreversible"
