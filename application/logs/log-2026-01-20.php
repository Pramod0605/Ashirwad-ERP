<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-20 09:21:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-20 09:21:05 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-20 09:21:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:21:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:21:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:21:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 09:21:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 09:21:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 09:22:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 09:22:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 09:22:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 09:23:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:23:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:23:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:23:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 09:23:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 09:23:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 09:25:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 09:25:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 09:25:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 09:26:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 09:26:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 09:26:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 09:29:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:29:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:29:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:29:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 09:29:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 09:29:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 09:31:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 09:31:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 09:31:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 09:33:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 09:33:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 09:33:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 09:53:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:54:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:54:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:54:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:54:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:55:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 09:55:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 09:55:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 09:56:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:56:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:56:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 09:56:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 09:56:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 09:56:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 09:59:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 09:59:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 09:59:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:01:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:01:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:01:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:03:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:03:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:03:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:05:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-20 10:05:18 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-20 10:05:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:05:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:05:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:06:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:06:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:06:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:06:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:06:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:06:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:07:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:07:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:07:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:07:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:07:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:07:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:09:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:09:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:09:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:10:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:10:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:10:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:10:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:10:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:10:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:10:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:10:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:10:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:11:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:11:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:11:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:13:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:13:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:13:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:14:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:14:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:14:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:14:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:14:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:14:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:15:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:15:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:15:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:15:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:15:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:15:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:16:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:16:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:16:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:16:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:16:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:16:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:19:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:19:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:19:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:21:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:21:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:21:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:21:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:21:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:21:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:22:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:22:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:22:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:24:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:24:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:24:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:24:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:24:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:24:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:30:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:30:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:30:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:36:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:36:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:36:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:37:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:37:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:37:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:37:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:37:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:37:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:39:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:39:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:39:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:44:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:44:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:44:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:46:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:46:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:46:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 10:52:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 10:52:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 10:52:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:00:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:00:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:00:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:02:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:02:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:02:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:02:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:02:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:02:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:02:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:02:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:03:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:03:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:03:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:03:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-20 11:03:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-20 11:04:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:04:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:04:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:07:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:07:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:07:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:08:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:08:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:08:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:11:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:11:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:11:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:12:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:12:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:12:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:26:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:26:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:26:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:27:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:27:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:27:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:28:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:28:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:28:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:39:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:39:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:39:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:40:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:40:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:40:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:41:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:41:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:41:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:41:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-20 11:41:29 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-20 11:41:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 11:41:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 11:41:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 11:41:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:41:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:41:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:41:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:41:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:41:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:43:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 11:43:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 11:43:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 11:43:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:43:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:43:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:44:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 11:44:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 11:44:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 11:44:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:44:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:44:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:46:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:46:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:46:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:48:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:48:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:48:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:48:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:48:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:48:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:48:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:48:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:48:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:48:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:48:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:48:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:48:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:48:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:48:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:49:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:49:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:49:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:49:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:49:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:49:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:49:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:49:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:49:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:49:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:49:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:49:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:49:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:49:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:49:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:50:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:50:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:50:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:50:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:50:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:50:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:50:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:50:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:50:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:50:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:50:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:50:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:51:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:51:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:51:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:51:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:51:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:51:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:51:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:51:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:51:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:51:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:51:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:51:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:51:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:51:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:51:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:54:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:54:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:54:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:54:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:54:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:54:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:57:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:57:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:57:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:57:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:57:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:57:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:58:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:58:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:58:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:58:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-20 11:58:16 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-20 11:58:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 11:58:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 11:58:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 11:58:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:58:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:58:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:59:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:59:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:59:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 11:59:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 11:59:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 11:59:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 12:00:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 12:00:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 12:00:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 12:00:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 12:00:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 12:00:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 12:01:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 12:01:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 12:01:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 12:01:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 12:01:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 12:01:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 12:02:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 12:02:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 12:02:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 12:03:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 12:03:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 12:03:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 12:05:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-20 12:05:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-20 12:05:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 12:05:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 12:05:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 12:08:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 12:08:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 12:08:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 12:09:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 12:09:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 12:09:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 12:09:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 12:09:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 12:09:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 12:10:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 12:10:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 12:10:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 12:11:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 12:11:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 12:11:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 12:12:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 12:12:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 12:12:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 12:17:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 12:18:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 12:27:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 12:27:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 12:28:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 12:28:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 12:28:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 12:28:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 12:28:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 12:28:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 12:35:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 12:35:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 12:35:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:01:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:01:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:01:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:01:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:01:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:01:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:06:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 13:14:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 13:25:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 13:25:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 13:25:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 13:26:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:26:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:26:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:31:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:31:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:31:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:31:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:31:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:31:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:31:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:31:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:33:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:33:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:33:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:34:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:34:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:34:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:40:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:40:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:40:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:41:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:41:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:41:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:43:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:43:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:43:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:46:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:46:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:46:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:47:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:47:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:47:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:48:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:48:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:48:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:51:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:51:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:51:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:55:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:55:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:55:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:57:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:57:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:57:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 13:58:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-20 13:58:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-20 13:59:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 13:59:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 13:59:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:00:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 14:00:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 14:00:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 14:00:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 14:01:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:01:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:01:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:02:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:02:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:02:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:06:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:06:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:06:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:07:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:07:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:07:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:08:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:08:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:08:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:08:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:08:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:08:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:10:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:10:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:10:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:10:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:10:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:10:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:10:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:10:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:10:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:11:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:11:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:11:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:12:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:12:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:12:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:22:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:22:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:22:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:23:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:23:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:23:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:41:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:41:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:41:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:42:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:42:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:42:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:42:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:42:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:42:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:43:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:43:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:43:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:44:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:44:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:44:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:45:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:45:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:45:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:49:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:49:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:49:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:54:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:54:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:54:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:57:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:57:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:57:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 14:59:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 14:59:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 14:59:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:01:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:02:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:02:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:04:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-20 15:04:30 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-20 15:04:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 15:05:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:05:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:05:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:05:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:05:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:05:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:06:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:06:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:06:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:06:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:06:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:06:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:06:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:06:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:06:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:07:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-20 15:07:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-20 15:07:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 15:08:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:08:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:08:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:08:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:08:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:08:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:10:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:10:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:10:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:10:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:10:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:10:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:10:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:10:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:10:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:12:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:12:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:12:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:13:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:13:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:13:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:14:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:14:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:14:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:17:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-20 15:17:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-20 15:17:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 15:17:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 15:17:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 15:17:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:17:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:17:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:18:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:18:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:18:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:18:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:18:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:18:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:18:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:18:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:18:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:19:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:19:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:19:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:19:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:19:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:19:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:19:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:19:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:19:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:19:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:19:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:19:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:20:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:20:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:20:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:22:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:22:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:22:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:24:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:24:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:24:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:26:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:26:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:26:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:26:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:26:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:26:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:31:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 15:37:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-20 15:37:41 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-20 15:38:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:38:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:38:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:39:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:39:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:39:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:42:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:42:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:42:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:43:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:43:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:43:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:43:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:43:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:43:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 15:43:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 15:43:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 15:43:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 16:07:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 16:07:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 16:07:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 16:12:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:12:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:12:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:12:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 16:12:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 16:12:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 16:14:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:14:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:14:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:15:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 16:15:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 16:15:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 16:15:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:15:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:15:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:16:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 16:16:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 16:16:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 16:16:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:16:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:16:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:16:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:16:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:22:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 16:22:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 16:22:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 16:22:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 16:22:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 16:22:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 16:29:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-20 16:29:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-20 16:29:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 16:29:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 16:29:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 16:32:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:32:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:32:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:32:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 16:32:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 16:32:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 16:32:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 16:44:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 16:44:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 16:44:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 17:06:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 17:15:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-20 17:15:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-20 17:15:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 17:15:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 17:15:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 17:15:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 17:15:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 17:15:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 17:17:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 17:17:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 17:17:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 17:17:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 17:17:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 17:17:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 17:17:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 17:18:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 17:18:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 17:18:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 17:18:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 17:18:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 17:18:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 17:18:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 17:25:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-20 18:05:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 18:05:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 18:05:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 18:06:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-20 18:06:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-20 18:11:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-20 18:11:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-20 18:11:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-20 18:53:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-20 18:53:46 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-20 19:54:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-20 19:54:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
