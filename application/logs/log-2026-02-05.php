<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-05 10:06:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-05 10:06:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-05 10:13:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 10:13:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 10:13:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 10:13:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 10:13:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 10:13:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 10:13:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-05 10:13:48 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-05 10:16:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 10:16:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 10:16:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 10:16:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 10:16:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 10:16:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 10:18:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 10:18:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 10:18:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 10:19:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 10:19:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 10:19:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 10:21:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 10:21:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 10:21:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 10:21:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 10:21:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 10:21:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 10:37:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 10:37:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 10:37:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 10:39:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 10:39:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 10:39:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 10:55:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 10:55:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 10:55:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 11:41:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 11:42:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 11:42:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 11:42:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 11:42:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 11:42:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 11:50:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-05 11:50:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-05 11:50:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 11:50:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 11:50:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 11:51:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 11:51:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 11:51:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 11:52:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 11:52:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 11:52:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 11:52:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 11:52:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 11:52:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 11:54:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 11:54:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 11:54:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 11:55:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 11:55:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 11:55:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 11:55:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 11:55:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 11:55:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 11:55:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 11:55:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 11:55:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 11:55:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 11:55:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 11:55:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 11:56:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 11:56:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 11:56:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 11:58:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 11:58:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 11:58:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:00:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:00:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:00:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:03:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:03:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:03:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:04:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:04:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:04:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:06:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:06:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:06:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:11:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:11:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:11:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:14:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:14:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:14:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:18:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:18:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:18:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:18:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:18:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:18:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:20:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:20:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:20:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:22:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:22:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:22:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:28:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:28:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:28:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:30:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:30:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:30:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:31:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:31:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:31:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:33:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:33:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:33:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:35:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:35:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:35:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:43:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:43:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:43:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:46:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:46:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:46:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:48:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:48:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:48:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:50:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:50:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:50:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:52:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:52:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:52:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:52:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:52:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:52:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:53:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:53:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:53:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:53:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:53:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:53:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:55:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:55:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:55:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 12:59:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 12:59:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 12:59:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:08:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:08:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:08:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:10:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:10:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:10:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:11:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:11:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:11:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:15:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:15:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:15:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:16:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:16:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:16:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:16:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:16:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:16:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:20:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:20:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:20:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:32:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:32:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:32:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:36:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-05 13:36:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-05 13:37:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:37:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:37:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:38:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:38:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:38:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:40:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:40:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:40:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:43:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:43:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:43:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:44:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:44:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:44:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:44:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:44:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:44:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:49:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:49:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:49:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:50:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:50:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:50:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:50:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:50:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:50:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:56:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:56:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:56:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 13:57:43 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 13:57:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 13:57:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 13:57:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 13:57:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 13:57:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:04:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:04:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:04:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:08:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:08:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:08:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:09:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:09:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:09:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:11:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:11:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:11:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:11:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:11:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:11:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:12:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:12:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:12:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:13:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:13:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:13:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:13:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:13:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:13:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:14:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:14:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:14:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:15:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:15:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:15:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:21:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:21:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:21:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:23:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:23:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:23:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:26:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:26:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:26:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:29:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:29:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:29:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:35:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:35:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:35:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:38:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 14:38:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 14:38:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 14:38:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:38:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:38:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:40:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:40:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:40:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:43:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:43:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:43:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 14:57:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 14:57:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 14:57:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 15:00:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-05 15:00:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-05 15:01:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 15:01:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 15:01:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 15:02:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 15:02:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 15:02:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 15:10:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 15:10:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 15:10:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 15:11:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 15:11:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 15:11:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 16:12:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 16:12:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 16:12:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 16:17:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 16:17:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 16:17:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 16:17:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 16:17:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 16:17:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 16:18:50 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 16:21:46 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 16:21:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 16:21:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 16:23:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 16:23:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 16:23:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 16:23:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 16:23:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 16:23:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 16:27:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 16:27:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 16:27:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 16:31:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 16:31:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 16:31:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 16:32:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 16:32:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 16:32:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 16:37:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 16:37:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 16:37:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 16:40:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 16:40:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 16:40:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 16:42:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 16:42:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 16:42:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 16:43:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 16:43:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 16:43:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 16:45:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 16:45:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 16:45:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 16:49:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 16:49:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 16:49:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 16:51:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 16:51:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 16:51:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 17:17:50 --> Could not find the language line "error_occured"
ERROR - 2026-02-05 17:21:18 --> Could not find the language line "student_fee1"
ERROR - 2026-02-05 17:21:23 --> Could not find the language line "exam_coordinator"
ERROR - 2026-02-05 17:21:23 --> Could not find the language line "principal"
ERROR - 2026-02-05 17:21:23 --> Could not find the language line "exam_coordinator"
ERROR - 2026-02-05 17:21:23 --> Could not find the language line "principal"
ERROR - 2026-02-05 17:21:23 --> Could not find the language line "exam_coordinator"
ERROR - 2026-02-05 17:21:23 --> Could not find the language line "principal"
ERROR - 2026-02-05 17:21:23 --> Could not find the language line "exam_coordinator"
ERROR - 2026-02-05 17:21:23 --> Could not find the language line "principal"
ERROR - 2026-02-05 17:21:40 --> Could not find the language line "student_fee1"
ERROR - 2026-02-05 17:21:54 --> Could not find the language line "exam_coordinator"
ERROR - 2026-02-05 17:21:54 --> Could not find the language line "principal"
ERROR - 2026-02-05 17:21:54 --> Could not find the language line "exam_coordinator"
ERROR - 2026-02-05 17:21:54 --> Could not find the language line "principal"
ERROR - 2026-02-05 17:21:54 --> Could not find the language line "exam_coordinator"
ERROR - 2026-02-05 17:21:54 --> Could not find the language line "principal"
ERROR - 2026-02-05 17:21:54 --> Could not find the language line "exam_coordinator"
ERROR - 2026-02-05 17:21:54 --> Could not find the language line "principal"
ERROR - 2026-02-05 17:23:09 --> Could not find the language line "exam_coordinator"
ERROR - 2026-02-05 17:23:09 --> Could not find the language line "principal"
ERROR - 2026-02-05 17:23:09 --> Could not find the language line "exam_coordinator"
ERROR - 2026-02-05 17:23:09 --> Could not find the language line "principal"
ERROR - 2026-02-05 17:23:09 --> Could not find the language line "exam_coordinator"
ERROR - 2026-02-05 17:23:09 --> Could not find the language line "principal"
ERROR - 2026-02-05 17:23:09 --> Could not find the language line "exam_coordinator"
ERROR - 2026-02-05 17:23:09 --> Could not find the language line "principal"
ERROR - 2026-02-05 17:31:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 17:31:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 17:31:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 18:17:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 18:17:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 18:17:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 18:27:48 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 18:27:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 18:27:50 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 18:27:50 --> Could not find the language line "not_generated"
ERROR - 2026-02-05 18:28:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 18:28:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 18:28:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-05 18:42:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-05 18:42:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-05 18:42:15 --> Could not find the language line "discount_this_action_is_irreversible"
