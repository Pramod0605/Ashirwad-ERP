<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-04 09:16:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-04 09:16:25 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-04 09:16:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 09:16:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 09:16:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 09:16:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 09:16:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 09:16:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 09:16:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 09:17:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 09:17:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 09:17:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 09:17:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 09:17:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 09:17:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 09:17:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 09:17:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 09:17:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 09:17:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 09:17:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 09:17:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 09:17:45 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 09:17:45 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 09:17:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 09:17:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 09:17:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:16:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-04 10:16:29 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-04 10:16:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:16:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:16:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:18:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:18:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:18:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:19:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:19:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:19:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:19:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-04 10:19:48 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-04 10:20:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:20:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:20:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:20:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:20:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:20:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:20:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:20:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:20:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:21:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:21:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:21:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:22:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:22:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:22:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:29:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 10:29:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 10:29:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 10:29:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:29:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:29:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:32:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 10:34:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 10:36:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 10:36:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 10:36:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:36:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:36:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:38:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:38:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:38:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:39:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:39:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:39:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:39:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:39:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:39:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:41:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 10:41:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:41:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:41:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:41:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 10:41:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 10:44:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:44:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:44:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:47:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:47:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:47:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:48:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:48:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:48:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:49:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 10:49:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 10:49:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 10:49:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:49:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:49:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:50:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:50:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:50:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:57:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:57:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:57:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:58:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 10:58:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 10:58:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 10:59:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 11:01:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 11:01:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 11:01:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 11:02:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 11:02:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 11:05:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:05:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:05:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:06:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:06:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:06:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:06:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:06:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:06:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:06:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:06:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:06:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:10:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:10:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:10:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:10:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-04 11:10:11 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-04 11:10:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:10:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:10:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:13:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 11:13:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 11:14:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 11:14:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:14:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:14:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:16:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:16:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:16:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:18:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:18:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:18:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:21:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:21:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:21:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:21:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:21:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:21:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:25:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:25:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:25:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:26:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:26:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:26:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:29:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:29:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:29:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:30:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:30:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:30:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:31:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:31:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:31:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:31:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:31:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:31:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:36:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:36:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:36:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:37:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:37:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:37:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:37:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:37:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:37:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:38:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:38:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:38:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:39:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:39:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:39:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:41:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:41:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:41:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:43:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:43:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:43:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:44:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:44:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:44:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:46:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:46:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:46:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:47:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:47:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:47:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:48:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:48:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:48:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:50:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:50:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:50:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:51:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:51:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:51:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:54:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:54:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:54:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:56:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:56:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:56:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:56:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:56:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:56:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:57:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:57:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:57:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:58:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:58:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:58:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 11:59:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-04 11:59:05 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-04 11:59:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 11:59:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 11:59:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:01:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:01:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:01:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:03:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:03:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:03:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:05:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:05:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:05:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:09:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:09:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:09:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:10:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:10:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:10:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:11:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:11:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:11:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:12:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:12:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:12:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:12:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:12:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:12:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:13:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:13:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:13:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:13:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:13:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:13:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:14:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:14:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:14:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:14:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:14:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:14:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:15:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:15:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:15:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:16:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:16:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:16:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:18:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:18:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:18:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:18:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:18:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:18:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:19:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:19:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:19:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:19:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:19:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:19:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:20:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:20:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:20:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:21:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:21:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:21:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:22:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:22:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:22:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:22:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:22:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:22:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:23:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-04 12:23:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-04 12:23:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:23:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:23:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:23:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:23:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:23:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:23:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:23:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:23:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:25:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-04 12:25:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-04 12:25:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:25:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:25:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:26:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:26:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:26:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:26:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:26:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:26:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:26:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:26:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:26:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:28:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:28:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:28:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:29:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:29:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:29:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:29:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:29:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:29:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:30:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:30:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:30:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:31:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:31:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:31:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:32:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:32:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:32:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:32:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:32:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:32:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:32:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:32:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:32:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:32:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:32:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:32:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:33:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:33:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:33:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:35:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:35:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:35:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:35:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:35:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:35:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:37:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:37:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:37:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:37:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:37:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:37:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:41:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:41:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:41:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:42:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:42:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:42:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:43:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:43:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:43:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:44:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:44:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:44:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:45:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-04 12:45:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-04 12:45:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:45:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:45:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:46:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:46:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:46:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:46:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:46:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:46:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:47:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:47:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:47:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:50:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:50:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:50:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:51:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:51:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:51:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:51:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:51:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:51:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:52:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:52:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:52:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:52:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-04 12:52:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-04 12:53:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:53:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:53:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:53:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:53:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:53:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:55:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:55:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:55:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:55:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:55:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:55:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:55:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:55:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:55:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:56:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:56:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:56:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:56:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:56:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:56:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:57:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:57:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:57:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:58:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:58:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:58:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 12:58:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 12:58:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 12:58:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:00:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:00:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:00:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:02:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:02:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:02:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:03:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:03:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:03:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:03:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:03:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:03:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:05:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:05:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:05:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:05:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:05:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:05:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:07:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:07:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:07:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:08:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:08:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:08:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:08:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:08:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:08:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:09:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:09:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:09:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:09:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:09:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:09:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:13:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:13:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:13:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:14:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:14:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:14:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:15:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:15:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:15:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:18:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:18:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:18:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:19:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 13:20:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:20:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:20:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:20:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 13:21:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 13:21:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 13:21:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:21:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:21:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:22:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:22:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:22:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:29:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:29:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:29:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:31:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:31:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:31:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:31:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:31:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:31:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:33:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:33:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:33:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:43:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:43:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:43:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:45:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:45:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:45:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:46:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:46:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:46:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:46:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:46:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:46:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:46:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:46:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:46:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:51:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:51:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:51:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:54:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:54:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:54:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:58:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:58:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:58:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 13:58:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 13:58:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 13:58:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 14:03:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 14:03:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 14:03:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 14:14:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-04 14:14:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-04 14:21:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 14:21:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 14:21:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 14:23:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 14:23:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 14:23:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 14:38:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 14:38:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 14:38:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 14:39:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 14:39:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 14:39:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 14:43:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 14:43:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 14:43:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 14:43:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 14:43:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 14:43:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 14:44:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 14:44:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 14:44:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 15:30:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-04 15:30:14 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-04 15:30:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-04 15:30:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-04 15:31:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 15:31:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 15:31:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 15:49:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 15:49:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 15:49:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 15:51:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 15:51:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 15:51:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 15:53:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 15:53:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 15:53:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 17:22:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-04 17:22:01 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-04 17:22:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 17:22:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 17:22:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-04 17:22:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 17:22:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 17:22:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-04 17:24:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-04 17:24:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-04 17:24:13 --> Could not find the language line "discount_this_action_is_irreversible"
