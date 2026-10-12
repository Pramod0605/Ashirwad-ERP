<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-10 10:03:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-10 10:03:37 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-10 10:18:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:18:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:18:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:18:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:18:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:18:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:18:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:18:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:18:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:18:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:18:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:18:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:18:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:18:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:18:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:20:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-10 10:20:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-10 10:21:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:21:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:21:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:27:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:27:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:27:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:30:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-10 10:30:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-10 10:30:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:30:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:30:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:31:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:31:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:31:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:31:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:31:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:31:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:32:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 10:32:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 10:32:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 10:32:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 10:32:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 10:32:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 10:32:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 10:32:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 10:32:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 10:32:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 10:32:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:32:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:32:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:34:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:34:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:34:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:34:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:34:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:34:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:34:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:34:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:34:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:34:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:34:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:34:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:34:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:34:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:34:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:36:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-10 10:36:41 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-10 10:36:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:36:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:36:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:37:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:37:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:37:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:41:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:41:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:41:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:42:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:42:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:42:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 10:43:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 10:43:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 10:43:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:02:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-10 11:02:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-10 11:02:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:02:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:02:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:32:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-10 11:32:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-10 11:32:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:32:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:32:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:32:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:33:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:33:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:33:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:34:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:34:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:34:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:36:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:36:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:36:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:38:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:38:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:38:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:41:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:41:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:41:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:44:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:44:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:44:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:45:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:45:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:45:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:46:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:46:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:46:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:47:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:47:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:47:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:49:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:49:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:49:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:49:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:49:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:49:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:49:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:49:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:49:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:49:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:49:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:49:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:50:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:50:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:50:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:50:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:50:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:50:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:50:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:50:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:50:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:52:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:52:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:52:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:52:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:52:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:52:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:52:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:52:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:52:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:52:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:53:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:53:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:53:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:53:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:53:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:53:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:53:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:53:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:53:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:53:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:53:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:53:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:53:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:53:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:53:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:53:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:54:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:54:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:54:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:54:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:54:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:54:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:54:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:54:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:54:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:54:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:56:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:56:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:56:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:58:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:58:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:58:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 11:59:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:59:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:59:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:59:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:59:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:59:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:59:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:59:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:59:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:59:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:59:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:59:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:59:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 11:59:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 11:59:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 11:59:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:02:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:02:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:02:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:02:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:02:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:02:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:04:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:04:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:04:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:06:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:06:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:06:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:07:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:07:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:07:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:07:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:07:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:07:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:10:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:10:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:10:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:11:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:11:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:11:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:12:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:12:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:12:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:15:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:15:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:15:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:18:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:18:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:18:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:19:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:19:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:19:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:20:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:20:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:20:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:22:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:22:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:22:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:24:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:24:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:24:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:28:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:28:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:28:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:32:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:32:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:32:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:34:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:34:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:34:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:34:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:34:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:34:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:35:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 12:35:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 12:35:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 12:35:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 12:35:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 12:37:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 12:37:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 12:37:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 12:37:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 12:37:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 12:37:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 12:37:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 12:37:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:37:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:37:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:38:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:38:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:38:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:40:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:40:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:40:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:42:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:42:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:42:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:43:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:43:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:43:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:43:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:43:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:43:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:43:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:43:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:43:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:46:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:46:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:46:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:52:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:52:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:52:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:53:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:53:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:53:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:53:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:53:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:53:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:53:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:53:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:53:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:56:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:56:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:56:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:57:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:57:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:57:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 12:59:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 12:59:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 12:59:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:05:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:05:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:05:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:27:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:28:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:28:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:29:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:29:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:29:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:30:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:30:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:30:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:31:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 13:31:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:31:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:31:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:31:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:31:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:31:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:34:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:34:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:34:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:35:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:35:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:35:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:36:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:36:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:36:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:36:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:36:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:36:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:36:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:36:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:36:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:44:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:44:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:44:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:44:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:44:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:44:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:55:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:55:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:55:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:56:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:56:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:56:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:56:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:56:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:56:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 13:56:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 13:56:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 13:56:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:01:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:01:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:01:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:09:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 14:09:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 14:09:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 14:31:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:31:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:31:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:33:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:33:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:33:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:39:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:39:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:39:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:39:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:39:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:39:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:40:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:40:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:40:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:40:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:40:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:40:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:40:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:40:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:40:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:40:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:40:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:40:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:40:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:40:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:40:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:49:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:49:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:49:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:50:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:50:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:50:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:50:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:50:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:50:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:50:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:50:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:50:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:54:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:54:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:54:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:55:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:55:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:55:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:56:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:56:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:56:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:56:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:56:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:56:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:58:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:58:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:58:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:58:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:58:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:58:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 14:59:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 14:59:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 14:59:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 15:14:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 15:14:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 15:14:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 15:16:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 15:16:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 15:16:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 15:37:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 15:37:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 15:37:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 15:37:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 15:37:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 15:37:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 15:40:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 15:40:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 15:40:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 15:40:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 15:40:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 15:40:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 15:41:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 15:41:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 15:41:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 15:41:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 15:41:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 15:41:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 15:43:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 15:43:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 15:43:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 15:45:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 15:45:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 15:45:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 15:48:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 15:48:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 15:48:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 15:49:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 15:49:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 15:49:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 16:57:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 16:57:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 16:57:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 17:00:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 17:00:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 17:00:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 17:04:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 17:04:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 17:04:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 17:04:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 17:04:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 17:04:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 17:06:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 17:06:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 17:06:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 17:08:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 17:08:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 17:08:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 17:10:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 17:10:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 17:10:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 17:48:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 17:48:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 17:48:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 17:50:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 17:50:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 17:50:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-10 18:21:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 18:22:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 18:34:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 18:34:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-10 18:34:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-10 18:34:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-10 18:34:54 --> Could not find the language line "discount_this_action_is_irreversible"
