<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-10 10:37:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-10 10:37:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-10 10:37:50 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:37:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:37:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:38:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 10:38:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 10:38:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 10:40:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:40:19 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:40:20 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:40:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 10:40:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 10:40:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 10:40:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:41:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:41:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:41:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 10:41:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 10:41:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 10:42:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 10:42:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 10:42:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 10:43:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 10:43:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 10:43:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 10:54:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:54:58 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:54:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:55:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:55:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 10:55:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 10:55:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 10:55:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:55:54 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:55:54 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:56:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 10:56:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 10:56:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 10:56:13 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:56:19 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:56:19 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 10:56:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 10:56:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 10:56:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 11:01:37 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 11:01:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 11:01:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 11:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 11:02:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 11:02:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 11:02:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 11:02:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 11:02:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 11:02:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 11:02:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 11:02:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 11:02:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 11:13:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 11:13:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 11:13:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 11:13:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 11:13:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 11:13:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 11:13:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 11:17:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 11:17:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 11:17:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 11:21:19 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 11:51:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-10 11:51:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-10 11:51:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 11:51:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 11:51:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 12:00:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-10 12:00:39 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-10 12:01:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 12:01:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 12:01:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 12:08:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 12:08:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 12:08:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 12:33:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 12:33:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 12:33:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 12:50:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 12:50:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 12:50:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 12:51:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 12:51:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 12:51:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 12:52:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 12:52:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 12:52:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 12:54:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 12:54:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 12:54:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 13:01:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 13:01:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 13:01:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 13:03:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 13:03:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 13:03:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 13:28:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 13:28:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 13:28:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 13:43:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 13:43:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 13:43:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 13:44:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 13:44:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 13:44:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 13:56:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-10 13:56:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-10 13:57:04 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 13:57:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 13:57:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 13:57:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 13:57:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 13:57:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 13:57:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 13:57:56 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 13:57:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 13:58:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 13:58:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 13:58:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 13:58:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 13:58:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 13:58:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 13:59:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 13:59:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 13:59:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 14:00:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 14:07:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 14:07:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 14:07:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 14:08:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 14:08:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 14:08:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 14:09:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 14:09:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 14:09:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 14:11:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 14:11:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 14:11:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 14:11:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 14:11:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 14:11:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 14:11:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 14:11:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 14:11:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 14:12:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 14:12:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 14:12:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 14:31:01 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4553160 bytes) /home/ashir611/public_html/system/core/Loader.php 990
ERROR - 2026-02-10 15:21:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 15:21:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 15:21:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 15:22:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 15:22:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 15:22:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 15:23:00 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 15:23:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 16:31:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 16:31:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 16:31:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 16:31:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 16:31:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 16:31:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 16:31:38 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 16:31:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 16:31:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 16:31:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 16:31:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 17:02:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:02:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:02:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:02:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 17:02:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 17:02:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 17:04:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 17:04:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 17:04:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 17:07:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:07:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:07:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:08:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 17:08:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 17:08:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 17:09:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:09:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:09:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:09:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 17:09:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 17:09:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 17:09:29 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:09:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:09:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:10:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 17:10:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 17:10:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 17:12:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 17:12:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 17:12:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 17:13:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 17:13:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 17:13:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 17:16:02 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:16:09 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:16:09 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:16:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 17:16:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 17:16:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 17:18:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:18:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:18:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:18:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-10 17:18:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-10 17:18:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-10 17:19:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:21:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-10 17:21:17 --> Could not find the language line "not_generated"
