<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-02 10:34:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-02 10:34:46 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-02 10:37:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 10:37:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 10:37:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 10:37:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 10:38:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 10:38:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 10:38:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 10:38:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 10:38:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 10:38:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 10:39:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 10:39:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 10:39:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 10:40:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-02 10:40:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-02 10:40:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 10:40:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 10:40:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 10:42:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 10:42:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 10:42:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 10:43:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 10:43:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 10:43:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 10:44:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-02 10:44:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-02 10:44:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 10:44:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 10:44:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 10:46:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 10:46:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 10:46:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 10:46:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 10:46:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 10:46:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 10:49:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 10:50:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 10:50:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 10:50:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 10:55:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 10:55:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 10:55:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 10:55:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 10:57:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 10:57:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 10:57:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 10:58:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 10:58:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 10:58:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 10:59:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 10:59:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 10:59:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 11:01:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 11:01:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 11:01:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 11:01:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 11:10:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 11:10:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 11:10:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 11:11:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 11:11:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 11:11:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 11:25:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-02 11:25:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-02 11:26:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 11:26:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 11:26:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 11:31:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 11:31:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 11:31:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 11:32:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 11:32:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 11:32:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 11:49:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 11:49:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 11:49:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 11:49:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 11:49:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 11:49:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 11:50:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 11:50:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 11:50:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 11:50:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 11:50:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 11:50:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 11:50:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 11:50:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 11:50:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 11:50:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 11:50:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 11:50:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:00:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:00:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:00:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:04:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:04:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:04:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:04:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:04:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:04:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:05:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:05:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:05:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:06:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:06:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:06:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:07:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:07:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:07:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:08:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:08:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:08:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:09:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:09:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:09:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:10:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:10:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:10:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:10:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:10:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:10:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:12:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:12:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:12:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:12:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:12:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:12:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:13:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:13:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:13:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:17:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-02 12:17:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-02 12:17:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:17:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:17:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:43:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:43:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:43:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:43:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:43:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:43:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:49:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:49:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:49:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:50:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:50:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:50:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:50:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:50:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:50:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:52:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:52:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:52:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:53:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:53:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:53:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:55:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:55:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:55:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:55:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:55:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:55:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:56:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:56:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:56:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 12:59:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 12:59:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 12:59:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 13:00:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 13:00:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 13:00:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 13:01:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 13:01:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 13:01:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 13:01:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 13:01:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 13:01:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 13:04:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 13:04:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 13:04:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 13:07:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 13:07:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 13:07:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 13:08:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 13:08:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 13:08:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 13:10:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 13:10:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 13:10:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 13:38:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-02 13:38:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-02 13:38:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 13:38:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 13:38:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 13:39:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 13:39:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 13:39:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 13:48:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-02 13:48:46 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-02 13:48:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 13:48:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 13:48:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 13:52:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 13:52:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 13:52:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 13:55:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 13:55:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 13:55:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 13:57:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 13:57:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 13:57:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 14:00:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 14:00:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 14:00:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 14:01:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 14:01:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 14:01:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 14:03:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 14:03:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 14:03:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 14:05:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 14:05:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 14:05:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 14:07:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 14:07:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 14:07:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 14:08:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 14:08:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 14:08:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 14:56:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 14:56:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 14:56:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:00:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:00:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:00:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:04:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:04:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:04:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:06:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:06:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:06:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:28:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:28:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:28:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:30:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:30:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:30:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:32:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-02 15:32:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-02 15:33:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:33:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:33:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:33:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:33:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:33:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:34:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:34:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:34:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:35:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-02 15:35:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-02 15:36:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-02 15:36:22 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-02 15:36:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:36:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:36:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:36:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:36:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:36:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:37:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:37:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:37:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:37:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:37:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:37:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:38:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:38:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:38:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:39:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-02 15:39:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:39:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:39:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:42:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:42:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:42:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:45:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:45:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:45:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:47:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:47:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:47:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:49:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:49:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:49:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:53:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:53:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:53:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:55:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:55:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:55:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 15:59:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 15:59:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 15:59:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 16:02:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 16:02:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 16:02:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 16:04:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 16:04:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 16:04:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 16:05:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 16:05:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 16:05:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 16:07:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 16:07:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 16:07:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 16:10:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 16:10:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 16:10:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-02 16:13:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-02 16:13:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-02 16:13:24 --> Could not find the language line "discount_this_action_is_irreversible"
