<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-24 09:48:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-24 09:48:24 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-24 09:56:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 09:56:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 09:56:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 09:56:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 09:56:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 09:56:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:12:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-24 10:12:00 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-24 10:12:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:12:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:12:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:12:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:12:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:12:15 --> Could not find the language line "current"
ERROR - 2026-01-24 10:12:15 --> Could not find the language line "social_media"
ERROR - 2026-01-24 10:12:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:12:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:12:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:12:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:13:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:13:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:14:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:14:14 --> Could not find the language line "current"
ERROR - 2026-01-24 10:14:14 --> Could not find the language line "social_media"
ERROR - 2026-01-24 10:15:18 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:15:18 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:15:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:15:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:15:49 --> Query error: Table 'ashir611.cyc_hedu_department' doesn't exist - Invalid query: INSERT INTO `cyc_hedu_department` (`linked_department_id`, `department_name`, `department_head`) VALUES (26, 'Marketing', '46')
ERROR - 2026-01-24 10:15:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:16:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:16:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:16:08 --> Could not find the language line "current"
ERROR - 2026-01-24 10:16:08 --> Could not find the language line "social_media"
ERROR - 2026-01-24 10:16:18 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:16:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:16:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:16:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/controllers/admin/Staff.php 1152
ERROR - 2026-01-24 10:16:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:16:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:16:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:16:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/controllers/admin/Staff.php 1152
ERROR - 2026-01-24 10:16:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:16:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:16:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:16:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/controllers/admin/Staff.php 1152
ERROR - 2026-01-24 10:16:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:16:58 --> Could not find the language line "custom"
ERROR - 2026-01-24 10:17:11 --> Could not find the language line "custom"
ERROR - 2026-01-24 10:17:11 --> Could not find the language line "custom"
ERROR - 2026-01-24 10:19:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:19:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:19:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-24 10:19:25 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-24 10:19:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:19:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:19:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:20:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:20:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:20:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:20:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:20:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:20:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:20:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:20:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:20:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:22:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-24 10:22:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-24 10:22:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:22:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:22:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:22:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:22:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:22:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:24:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-24 10:24:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-24 10:24:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:24:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:24:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:25:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:25:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:25:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:26:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:26:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:26:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:26:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:26:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:26:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:27:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:27:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:27:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:28:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:28:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:28:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:32:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:32:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:32:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:33:58 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:34:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:34:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:34:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:34:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:34:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:34:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:34:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:34:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:34:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:34:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-24 10:34:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-24 10:34:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:34:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:34:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:37:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:37:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:37:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:37:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:37:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:37:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:39:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:39:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:40:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:40:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:40:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:40:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:40:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:40:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:40:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:40:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/controllers/admin/Staff.php 1152
ERROR - 2026-01-24 10:40:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:40:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:40:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:40:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/controllers/admin/Staff.php 1152
ERROR - 2026-01-24 10:40:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:40:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:40:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:40:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/controllers/admin/Staff.php 1152
ERROR - 2026-01-24 10:40:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:40:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:42:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:42:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:42:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:43:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:43:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:43:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:44:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 10:44:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 10:44:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 10:46:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:48:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:48:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 10:48:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 11:06:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:06:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:06:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:07:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:07:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:07:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:07:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:07:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:07:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:08:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:08:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:08:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:08:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:08:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:08:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:09:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:09:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:09:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:09:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:09:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:09:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:09:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:09:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:09:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:10:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:10:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:10:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:13:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:13:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:13:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:17:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:17:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:17:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:17:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:17:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:17:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:19:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:19:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:19:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:33:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:33:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:33:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:34:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:34:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:34:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:40:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:40:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:40:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:47:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:47:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:47:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:47:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 11:47:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 11:47:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:47:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:47:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:47:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:47:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:47:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 11:47:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 11:47:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 11:47:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 11:47:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 12:21:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-24 12:21:11 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-24 12:21:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 12:21:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 12:21:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 12:21:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 12:22:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 12:22:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 12:22:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 12:25:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 12:25:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 12:25:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 12:26:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 12:26:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 12:26:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 12:27:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 12:27:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 12:27:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 12:27:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 12:29:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 12:29:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-24 12:30:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-24 12:31:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 12:33:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-24 12:33:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-24 12:35:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 12:35:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 12:35:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 12:36:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 12:36:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 12:36:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 12:36:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 12:36:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 12:36:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 12:37:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 12:37:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 12:37:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 12:42:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 12:42:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 12:42:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 12:59:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-24 12:59:05 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-24 13:00:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 13:00:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 13:00:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 13:01:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 13:01:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 13:01:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 13:01:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 13:01:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 13:01:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 13:14:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:14:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:14:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:14:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:14:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 13:14:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 13:14:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 13:14:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 13:14:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 13:14:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 13:27:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:29:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:29:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:32:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:32:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:32:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:32:18 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:32:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:32:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:32:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:32:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:33:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:33:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:33:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:33:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:33:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:33:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:33:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:33:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:33:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:33:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:33:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:33:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:33:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:33:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:33:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:33:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:35:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:37:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 13:37:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 13:37:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 13:38:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:38:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:41:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:41:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:41:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:41:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:41:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:41:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:41:58 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:43:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:43:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:45:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:45:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:45:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:45:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:45:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:45:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:45:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:45:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:45:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:45:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 13:51:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 13:51:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 13:51:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 14:01:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 14:01:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 14:01:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 14:01:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 14:01:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 14:01:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 14:01:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 14:01:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 14:01:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 14:01:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 14:01:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 14:01:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 14:02:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 14:02:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 14:02:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 14:07:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 14:07:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 14:07:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 14:11:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 14:11:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 14:11:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 14:23:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 14:23:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 14:23:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 14:24:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 14:24:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 14:24:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 14:24:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 14:24:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 14:24:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 14:25:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 14:25:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 14:25:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 14:42:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 14:42:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 14:42:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 14:43:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 14:43:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 14:43:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 14:43:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 14:43:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 14:43:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 15:02:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-24 15:02:59 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-24 15:03:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 15:03:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 15:03:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 15:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 15:03:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 15:03:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 15:03:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 15:03:45 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 15:03:45 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 15:03:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 15:03:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 15:03:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 15:16:42 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4210688 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 275
ERROR - 2026-01-24 15:17:18 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 20480 bytes) /home/ashir611/public_html/system/database/DB_query_builder.php 301
ERROR - 2026-01-24 15:17:48 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 20480 bytes) /home/ashir611/public_html/system/database/DB_query_builder.php 301
ERROR - 2026-01-24 15:17:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-24 15:22:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-24 15:22:18 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-24 15:22:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 15:22:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 15:22:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 15:22:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 15:23:38 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 20480 bytes) /home/ashir611/public_html/system/database/DB_query_builder.php 301
ERROR - 2026-01-24 15:29:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-24 15:29:39 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-24 15:30:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 15:30:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 15:30:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 15:49:20 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4909528 bytes) /home/ashir611/public_html/system/core/Output.php 198
ERROR - 2026-01-24 15:49:44 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4371392 bytes) /home/ashir611/public_html/system/core/Output.php 198
ERROR - 2026-01-24 16:06:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 16:06:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 16:06:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 16:07:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 16:07:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 16:07:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 16:07:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 16:07:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-24 16:41:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 16:41:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 16:41:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 16:41:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 16:41:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 16:41:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 16:41:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 16:41:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 16:41:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 16:41:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 16:41:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 16:41:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 16:42:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 16:42:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 16:42:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 16:43:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 16:43:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 16:43:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 16:44:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 16:44:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 16:44:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 17:17:36 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 6307840 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 466
ERROR - 2026-01-24 18:18:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-24 18:18:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-24 18:19:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-24 18:20:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-01-24 18:39:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-24 18:39:34 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-24 18:50:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-24 18:50:00 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-24 18:50:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 18:50:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 18:50:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 18:53:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 18:53:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 18:53:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 18:59:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 18:59:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 18:59:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 19:01:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 19:01:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 19:01:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 19:02:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 19:02:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 19:02:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 19:04:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 19:04:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 19:04:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 19:05:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 19:05:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 19:05:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 19:56:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 19:56:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 19:56:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 20:03:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 20:03:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 20:03:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 20:05:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 20:05:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 20:05:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 20:06:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 20:06:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 20:06:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 20:07:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 20:07:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 20:07:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 20:09:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 20:09:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 20:09:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 20:13:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 20:13:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 20:13:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-24 20:14:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-24 20:14:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-24 20:14:04 --> Could not find the language line "discount_this_action_is_irreversible"
