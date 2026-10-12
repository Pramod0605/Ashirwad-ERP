<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-07 09:51:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 09:51:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 09:51:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 10:02:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 10:03:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 10:03:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 10:03:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 10:03:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 10:03:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 10:03:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 10:04:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 10:04:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 10:04:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 10:05:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 10:05:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 10:05:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 10:14:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 10:14:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 10:14:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 10:18:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 10:18:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 10:18:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 10:19:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 10:19:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 10:19:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 10:21:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-07 10:21:39 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-07 10:21:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-07 10:21:52 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-07 10:22:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 10:22:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 10:22:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 10:22:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 10:22:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 10:22:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 10:26:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 10:26:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 10:26:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 10:28:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 10:28:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 10:28:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 10:28:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 10:28:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 10:28:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:22:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:22:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:22:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:26:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:26:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:26:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:29:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-07 11:29:07 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-07 11:29:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:29:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:29:30 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:29:30 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:29:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:29:36 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:30:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:30:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:30:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:30:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:30:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:30:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:31:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:31:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:32:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:32:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:32:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:32:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:32:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:32:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:35:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:35:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:35:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:38:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:38:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:45:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:45:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:50:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:50:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:50:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:53:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:53:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:53:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:53:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:53:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:53:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:54:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:54:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:54:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:54:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:54:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:54:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:54:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:54:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:54:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:54:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:54:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:54:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:55:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:55:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:55:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:55:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:55:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:55:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:56:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:56:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:56:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:56:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:56:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:56:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:57:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:57:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:57:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:57:19 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:57:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:57:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 11:57:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:57:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:57:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 11:58:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 11:58:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 11:58:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:05:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:05:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:05:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:05:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:05:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:05:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:05:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:05:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:05:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:06:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:06:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:06:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:06:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:06:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:06:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:06:26 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 12:06:26 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 12:06:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:06:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:06:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:07:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:07:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:07:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:07:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:07:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:07:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:08:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:08:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:08:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:08:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:08:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:08:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:08:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:08:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:08:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:08:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:08:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:08:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:09:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:09:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:09:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:09:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:09:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:09:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:09:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:09:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:09:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:10:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:10:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:10:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:10:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:10:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:10:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:11:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:11:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:11:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:12:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:12:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:12:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:12:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:12:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:12:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:13:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:13:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:13:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:13:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:13:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:13:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:13:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:13:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:13:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:14:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:14:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:14:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:14:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:14:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:14:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:15:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:15:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:15:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:15:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:15:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:15:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:15:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:15:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:15:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:16:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:16:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:16:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:16:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:16:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:16:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:16:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:16:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:16:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:17:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:17:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:17:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:17:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:17:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:17:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:17:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:17:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:17:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:18:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:18:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:18:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:18:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:18:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:18:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:19:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:19:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:19:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:19:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:19:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:19:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:20:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:20:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:20:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:21:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:21:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:21:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:21:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:21:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:21:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:22:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:22:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:22:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:23:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:23:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:23:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:24:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 12:24:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 12:24:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 12:44:06 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4405360 bytes) /home/ashir611/public_html/system/core/Output.php 198
ERROR - 2026-02-07 12:45:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-07 12:45:25 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-07 12:45:55 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4509688 bytes) /home/ashir611/public_html/system/core/Output.php 198
ERROR - 2026-02-07 12:46:03 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4509688 bytes) /home/ashir611/public_html/system/core/Output.php 198
ERROR - 2026-02-07 12:47:59 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 6307840 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 255
ERROR - 2026-02-07 12:48:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-07 12:48:25 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 6307840 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 448
ERROR - 2026-02-07 13:43:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 13:43:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 13:43:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 13:44:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-07 13:44:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-07 13:44:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 13:44:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 13:44:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 13:47:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 13:47:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 13:47:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 13:49:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 13:49:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 13:49:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 13:53:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 13:53:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 13:53:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 13:53:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 13:53:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 13:53:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 14:25:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 14:25:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 14:25:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 14:49:15 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4210688 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 279
ERROR - 2026-02-07 14:49:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-07 14:50:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-07 14:51:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-07 14:51:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-07 14:52:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 14:52:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 14:52:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 14:55:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 14:55:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 14:55:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 14:56:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-07 14:56:36 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-07 14:56:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 14:56:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 14:56:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 15:02:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 15:02:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 15:02:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 15:03:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 15:03:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 15:03:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 15:06:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 15:06:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 15:06:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 15:27:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 15:27:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 15:27:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 15:30:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 15:30:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 15:30:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 15:30:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 15:30:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 15:30:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 15:32:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 15:32:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 15:32:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 15:36:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 15:36:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 15:36:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:11:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:11:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:11:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:25:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:25:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:25:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:25:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:25:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:25:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:26:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:26:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:26:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:27:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:27:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:27:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:28:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:28:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:28:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:30:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:31:44 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:31:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:31:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:31:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:31:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:31:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:32:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:32:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:32:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:32:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:32:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:32:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:33:19 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:33:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:33:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:34:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:34:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:34:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:35:09 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:35:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:35:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:35:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:35:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:35:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:35:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:35:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:35:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:42:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:42:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:42:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:45:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:45:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:45:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:47:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:47:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:47:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:50:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:50:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:50:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:51:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:51:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:51:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:53:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:53:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:53:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:53:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:53:58 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:53:58 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 16:54:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:54:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:54:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:54:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:54:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:54:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:55:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:55:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:55:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:55:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:55:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:55:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:55:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:55:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:55:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:56:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:56:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:56:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:57:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:57:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:57:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 16:57:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 16:57:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 16:57:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:00:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:00:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:00:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:01:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:01:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:01:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:01:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:01:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:01:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:02:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:02:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:02:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:02:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:02:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:02:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:07:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:07:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:07:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:08:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:08:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:08:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:11:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:11:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:11:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:18:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:18:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:18:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:38:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:38:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:38:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:43:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:43:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:43:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:46:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:46:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:46:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:47:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:47:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:47:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:47:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:47:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:47:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:48:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:48:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:48:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:48:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:48:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:48:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:49:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:49:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:49:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:54:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-07 17:54:00 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-07 17:54:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 17:54:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 17:54:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 17:54:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:54:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:54:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:55:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 17:55:13 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 17:55:13 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 17:55:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 17:55:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 17:55:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 17:55:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-07 18:17:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 18:17:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 18:17:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 18:17:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 18:17:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 18:17:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 18:18:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 18:18:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 18:18:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 18:18:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 18:18:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 18:18:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 18:18:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 18:18:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 18:18:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-07 18:19:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-07 18:19:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-07 18:19:23 --> Could not find the language line "discount_this_action_is_irreversible"
