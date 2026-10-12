<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-02 10:46:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-02 10:46:46 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-02 10:47:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 10:47:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 10:47:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 10:48:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-02 10:48:00 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-02 10:48:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 10:49:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-02 10:49:36 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-02 10:50:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-02 10:50:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-02 10:51:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 10:51:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 10:51:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 10:53:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 10:53:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 10:53:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 10:53:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 10:53:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 10:53:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 10:54:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 10:54:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 10:54:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 11:03:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 11:03:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 11:03:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 11:06:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 11:06:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 11:06:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 11:06:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 11:06:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 11:06:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 11:08:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 11:10:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 11:10:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 11:10:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 11:29:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 11:31:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 11:31:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 11:31:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 11:33:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 11:33:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 11:33:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 11:35:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 11:35:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 11:35:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 11:35:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 11:35:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 11:39:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 11:39:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 11:39:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 11:46:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 11:46:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 11:46:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 12:04:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 12:04:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 12:04:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 12:15:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 12:15:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 12:15:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 12:29:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 12:29:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 12:29:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 12:54:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 12:54:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 12:54:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 13:05:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 13:05:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 13:05:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 13:09:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-02 13:09:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-02 13:22:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 13:22:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 13:22:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 14:17:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 14:17:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 14:17:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 14:19:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 14:19:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 14:19:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 14:23:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 14:23:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 14:23:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 14:37:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 14:37:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 14:37:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 14:40:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 14:40:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 14:40:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 14:43:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 14:43:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 14:43:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 14:43:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 14:43:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 14:43:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 14:47:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 14:47:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 14:47:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 14:52:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 14:52:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 14:52:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 14:53:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 14:53:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 14:53:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 14:53:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 14:53:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 14:53:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 14:56:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 14:56:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 14:56:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:02:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:02:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:02:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:04:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:04:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:04:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:09:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:09:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:09:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:10:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:10:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:10:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:11:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:11:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:11:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:12:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:12:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:12:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:14:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:14:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:14:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:15:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:15:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:15:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:19:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:19:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:19:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:21:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:21:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:21:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:21:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:21:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:21:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:22:42 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 15:22:48 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 15:22:49 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 15:23:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:23:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:23:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:23:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:23:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:23:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:40:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:40:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:40:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:43:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-02 15:43:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-02 15:43:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:43:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:43:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:53:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 15:53:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 15:54:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:54:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:54:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 15:54:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 15:54:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 15:54:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 16:00:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 16:00:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 16:00:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 16:03:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 16:03:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 16:03:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 16:08:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 16:08:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 16:08:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 16:12:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 16:12:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 16:12:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 16:14:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 16:14:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 16:14:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 16:15:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 16:15:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 16:15:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 16:15:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 16:15:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 16:15:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 16:25:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 16:25:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 16:25:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 16:39:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 16:39:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 16:39:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 16:45:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-02 16:45:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-02 16:46:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 16:48:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 16:48:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 16:48:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-02 16:48:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 16:48:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 16:48:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-02 17:19:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-02 17:19:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-02 17:19:19 --> Could not find the language line "discount_this_action_is_irreversible"
