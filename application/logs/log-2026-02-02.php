<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-02 09:42:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-02 09:42:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-02 09:42:46 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 09:43:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 09:43:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 09:43:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 09:43:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 09:43:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 09:45:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 09:45:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 09:45:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 10:10:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-02 10:10:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-02 10:10:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 10:10:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 10:10:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 10:11:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 10:11:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 10:11:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 10:15:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 10:15:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 10:15:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 10:15:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 10:15:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 10:15:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 10:32:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 10:32:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 10:32:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 10:37:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 10:37:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 10:37:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 10:44:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 10:44:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 10:44:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 10:50:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 10:50:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 10:50:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 11:04:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 11:04:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 11:04:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 11:05:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 11:05:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 11:05:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 11:05:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 11:05:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 11:05:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 11:12:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 11:12:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 11:12:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 11:28:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 11:28:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 11:28:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 11:28:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 11:28:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 11:28:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 11:35:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 11:35:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 11:35:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 11:54:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-02 11:54:56 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-02 11:55:05 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 11:55:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 11:55:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 11:55:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 11:55:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 11:55:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 11:55:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:01:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:01:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:01:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:01:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:01:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:01:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:01:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:01:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:01:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:04:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:04:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:04:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:07:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-02 12:07:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-02 12:07:54 --> Could not find the language line "student1"
ERROR - 2026-02-02 12:08:03 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user ''@'localhost' (using password: NO) /home/ashir611/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2026-02-02 12:08:03 --> Unable to connect to the database
ERROR - 2026-02-02 12:08:03 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user ''@'localhost' (using password: NO) /home/ashir611/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2026-02-02 12:08:03 --> Unable to connect to the database
ERROR - 2026-02-02 12:08:03 --> Query error: Access denied for user ''@'localhost' (using password: NO) - Invalid query: SELECT `sch_settings`.`start_month`, `sch_settings`.`name`, `sch_settings`.`id`, `sch_settings`.`session_id`, `sessions`.`session`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
ORDER BY `sch_settings`.`id`
ERROR - 2026-02-02 12:08:03 --> Severity: error --> Exception: Call to a member function row() on bool /home/ashir611/public_html/application/models/multibranch/Multibranch_model.php 51
ERROR - 2026-02-02 12:08:12 --> Could not find the language line "student1"
ERROR - 2026-02-02 12:40:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:40:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:40:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:41:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:41:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:41:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:41:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:41:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:41:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:41:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:41:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:41:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:41:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:41:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:41:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:42:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:42:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:42:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:43:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:43:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:43:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:43:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:43:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:43:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:44:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:44:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:44:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:44:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:44:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:44:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:44:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:44:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:44:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:45:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:45:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:45:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:45:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:45:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:45:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:45:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:45:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:45:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:46:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:46:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:46:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:46:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:46:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:46:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:47:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:47:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:47:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:47:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:47:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:47:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:57:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:57:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:57:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:57:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:57:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:57:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:57:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:57:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:57:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:58:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:58:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:58:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 12:59:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 12:59:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 12:59:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:09:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:09:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:09:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:29:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:29:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:29:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:29:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:29:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:29:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:29:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:29:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:29:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:29:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:29:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:29:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:32:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:32:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:32:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:33:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:33:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:33:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:34:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:34:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:34:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:34:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:34:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:34:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:40:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:40:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:40:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:48:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:48:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:48:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:49:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:49:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:49:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:50:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:50:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:50:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:50:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:50:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:50:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:51:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:51:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:51:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:51:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:51:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:51:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:51:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:51:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:51:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:52:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:52:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:52:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:52:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:52:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:52:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 13:57:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-02 13:57:47 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-02 13:57:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 13:57:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 13:57:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 13:58:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 13:58:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 13:58:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 13:58:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 14:16:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 14:16:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 14:16:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 14:18:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 14:18:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 14:18:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 14:18:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 14:18:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 14:18:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 14:24:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 14:24:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 14:24:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 14:25:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 14:25:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 14:25:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 14:25:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 14:25:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 14:25:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 14:25:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 14:25:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 14:25:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 14:45:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-02 14:45:47 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-02 14:45:50 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 14:45:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 14:45:56 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 14:46:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 14:46:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 14:46:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 14:46:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 14:47:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 14:47:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 14:47:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 14:50:29 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 14:55:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 14:55:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 14:55:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 14:55:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 14:55:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 14:55:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 14:58:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 14:58:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 14:58:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 14:58:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 14:58:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 14:58:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 15:01:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 15:01:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 15:01:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 15:03:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 15:03:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 15:03:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 15:06:20 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 15:06:25 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 15:06:25 --> Could not find the language line "not_generated"
ERROR - 2026-02-02 15:06:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 15:06:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 15:06:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 15:40:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 15:40:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 15:40:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 15:40:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 15:40:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 15:40:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 15:40:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 15:40:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 15:40:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 15:41:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 15:41:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 15:41:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 15:41:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-02 15:41:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-02 15:41:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-02 16:02:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-02 16:02:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-02 16:02:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-02 16:02:55 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-02 17:20:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-02 17:20:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-02 19:56:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-02 19:56:59 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-02 19:57:02 --> Could not find the language line "not_generated"
