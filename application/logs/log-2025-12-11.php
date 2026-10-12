<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-11 10:07:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-11 10:07:05 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-11 10:07:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 10:07:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 10:07:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 10:10:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 10:10:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 10:10:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 10:31:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 10:31:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 10:31:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 10:34:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 10:34:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 10:34:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 10:37:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 10:37:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 10:37:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 10:39:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 10:39:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 10:39:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 10:47:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 10:47:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 10:47:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 10:50:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-11 10:50:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-11 10:50:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 10:50:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 10:50:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 10:52:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 10:52:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 10:52:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 10:52:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 10:52:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 10:52:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 10:57:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 10:57:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 10:57:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 11:01:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 11:01:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 11:01:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 11:17:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-11 11:17:01 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-11 11:30:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:30:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:30:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:30:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 11:30:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 11:30:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 11:33:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:33:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:33:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:33:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 11:33:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 11:33:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 11:36:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:36:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:36:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:36:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 11:36:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 11:36:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 11:38:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:38:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:38:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:39:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 11:39:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 11:39:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 11:42:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:42:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:42:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:42:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 11:42:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 11:42:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 11:45:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:45:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:45:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:46:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 11:46:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 11:46:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 11:49:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:49:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:49:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:49:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 11:49:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 11:49:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 11:49:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 11:49:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 11:49:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 11:58:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:58:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:58:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 11:59:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 11:59:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 11:59:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:01:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:01:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:01:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:02:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:02:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:02:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:04:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:04:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:04:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:04:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:04:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:04:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:07:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:07:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:07:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:09:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:09:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:09:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:11:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:11:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:11:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:11:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:11:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:11:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:14:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:14:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:14:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:14:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:14:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:14:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:18:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:18:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:18:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:19:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:19:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:19:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:21:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:21:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:21:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:21:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:21:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:21:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:22:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:22:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:22:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:23:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:23:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:23:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:23:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:23:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:23:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:23:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:23:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:23:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:25:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:25:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:25:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:26:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:26:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:26:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:38:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:38:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:38:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:38:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:38:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:38:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:40:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:40:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:40:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:40:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:40:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:40:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:45:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:45:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:45:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:45:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:45:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:45:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:46:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:46:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:46:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:46:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:46:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:46:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:48:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:48:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:48:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:49:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:49:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:49:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:52:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:52:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:52:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:53:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:53:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:53:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:56:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:56:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:56:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:57:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:57:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:57:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 12:57:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:58:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:58:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 12:58:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 12:58:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 12:58:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:00:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:00:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:00:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:01:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:01:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:01:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:02:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:02:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:02:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:04:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:04:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:04:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:05:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:05:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:05:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:06:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:06:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:06:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:06:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:06:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:06:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:07:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:07:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:07:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:07:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:14:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:14:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:14:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:16:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:16:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:16:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:16:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:16:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:16:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:16:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:16:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:16:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:18:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:18:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:18:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:18:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:18:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:18:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:18:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:19:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:19:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:19:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:21:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:21:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:21:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:22:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:22:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:22:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:32:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:32:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:32:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:32:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:32:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:32:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:32:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:32:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:32:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:46:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:46:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:46:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:51:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:51:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:51:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:51:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:51:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:51:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:53:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:53:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:53:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:53:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:53:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:53:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:55:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:55:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:55:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 13:56:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 13:56:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 13:56:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 13:59:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:02:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:02:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:02:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:04:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:04:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:04:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:05:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:05:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:05:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:06:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:06:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:06:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:06:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:06:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:06:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:06:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:06:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:08:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:08:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:08:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:09:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:09:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:09:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:10:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:10:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:10:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:10:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:10:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:10:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:11:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:11:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:11:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:13:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:13:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:13:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:13:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:13:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:13:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:14:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:14:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:14:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:15:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:15:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:15:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:15:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:15:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:15:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:17:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:17:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:17:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:18:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:18:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:18:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:19:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:19:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:19:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:20:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:20:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:20:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:20:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:20:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:20:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:21:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:21:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:21:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:25:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:25:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:25:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:26:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:26:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:26:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:26:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:26:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:26:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:28:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:28:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:28:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:30:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:30:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:30:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:34:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:34:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:34:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:34:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:34:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:34:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:35:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:35:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:35:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:36:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:36:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:36:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:36:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:36:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:36:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:36:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:36:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:36:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:37:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:37:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:37:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:37:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:37:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:37:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:38:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:38:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:38:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:38:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:38:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:38:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:38:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:39:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:39:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:40:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:40:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:40:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:41:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:41:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:41:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:44:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:45:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:45:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:45:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:45:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:45:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:47:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:47:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:47:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:50:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:50:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:50:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:51:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-11 14:51:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-11 14:51:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:51:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:51:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:52:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:52:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:52:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:54:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:54:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:54:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:54:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:54:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:54:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:57:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:57:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:57:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:58:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:58:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:58:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:58:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:58:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 14:59:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:59:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:59:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 14:59:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 14:59:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 14:59:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:01:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:01:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:01:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:02:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:02:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:02:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:03:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:03:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:03:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:04:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:05:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:05:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:05:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:05:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:05:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:08:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:08:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:08:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:09:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:10:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:10:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:10:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:10:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:10:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:11:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:11:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:11:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:12:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:12:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:12:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:16:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:16:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:16:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:16:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-11 15:16:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-11 15:16:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:16:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:16:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:20:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:20:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:20:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:20:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:20:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:20:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:35:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-11 15:35:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-11 15:36:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:36:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:36:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:36:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-11 15:36:55 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-11 15:37:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:37:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:37:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:37:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:37:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:37:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:37:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:37:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:37:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:37:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:38:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:38:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:38:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:38:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:38:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:39:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:39:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:39:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:39:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:39:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:39:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:39:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:39:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:39:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:39:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:39:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:39:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:43:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:43:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:43:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:44:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:44:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:44:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:44:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:44:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:44:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:44:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:44:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:44:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:44:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:44:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:44:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:47:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:47:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:47:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:47:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:47:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:47:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:48:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:48:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:48:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:48:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:48:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:48:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:49:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:49:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:49:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:49:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:49:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:49:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:51:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:51:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:51:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 15:51:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:51:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:51:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:53:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:53:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:53:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 15:53:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 15:53:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 15:53:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:04:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:04:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:04:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:09:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:09:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:09:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:17:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:18:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:18:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:18:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:18:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:18:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:19:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:19:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:19:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:20:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:20:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:20:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:21:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:21:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:21:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:21:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:21:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:21:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:21:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:21:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:21:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:22:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:22:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:22:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:22:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:22:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:22:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:23:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:23:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:23:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:23:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:23:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:23:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:23:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:23:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:23:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:24:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:24:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:24:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:25:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:25:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:25:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:26:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:27:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:27:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:29:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:29:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:29:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:31:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:31:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:31:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:32:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:32:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:32:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:41:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:41:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:41:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:46:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:46:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:46:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:46:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:46:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:46:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:51:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:51:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:51:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:53:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:53:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:53:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:55:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:55:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:55:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:58:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:58:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:58:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 16:59:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:59:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:59:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 16:59:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 16:59:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 16:59:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:01:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:01:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:01:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:02:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:02:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:02:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:03:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:03:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:03:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:04:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:04:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:04:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:04:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:04:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:04:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:05:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:05:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:05:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:07:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:07:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:07:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:12:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:12:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:12:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:13:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:13:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:13:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:13:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:13:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:13:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:14:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:14:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:14:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:17:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:17:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:17:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:17:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:18:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:18:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:18:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:18:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:18:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:20:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:21:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:21:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:21:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:21:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:21:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:22:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:22:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:22:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:22:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:22:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:22:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:22:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:22:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:22:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:23:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:23:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:23:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:25:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:25:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:25:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:26:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:26:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:26:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:27:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-11 17:27:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-11 17:28:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:28:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:28:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:28:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:28:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:28:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:32:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:32:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:32:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:38:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:38:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:38:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:38:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:38:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:39:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:39:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:39:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:39:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:39:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:39:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:40:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:40:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:40:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:40:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:40:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:40:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:40:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:40:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:40:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:41:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:41:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:41:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:42:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:42:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:42:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:43:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:43:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:43:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:45:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:45:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:45:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:45:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:45:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:45:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:45:48 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (2969, NULL, 6000, 'D', '')
ERROR - 2025-12-11 17:45:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:45:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:45:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:46:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:46:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:46:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:46:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:46:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:46:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:46:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:46:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:46:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:47:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:47:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:47:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:47:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:47:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:48:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:48:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:48:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:49:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:49:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:49:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 17:50:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:50:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:50:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 17:50:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 17:50:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 17:50:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 18:00:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:00:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:00:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:00:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 18:00:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 18:00:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 18:02:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:04:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:04:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:04:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 18:04:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 18:04:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 18:04:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:05:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:05:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:05:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 18:05:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 18:05:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 18:05:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:05:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:05:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:05:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 18:05:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 18:05:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 18:06:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:06:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:06:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:06:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 18:06:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 18:06:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 18:08:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:08:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:08:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:08:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 18:08:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 18:08:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 18:10:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:10:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:10:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:10:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 18:10:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 18:10:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 18:11:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:11:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:11:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:11:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 18:11:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 18:11:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-11 18:12:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:12:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:12:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-11 18:12:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-11 18:12:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-11 18:12:34 --> Could not find the language line "discount_this_action_is_irreversible"
