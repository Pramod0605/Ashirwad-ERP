<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-12 09:59:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 09:59:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 09:59:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 10:00:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 10:00:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 10:00:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 10:05:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 10:05:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 10:05:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 10:13:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-12 10:13:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-12 10:14:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 10:14:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 10:14:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 10:14:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-12 10:14:55 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-12 10:39:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 10:39:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 10:39:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 10:43:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-12 10:43:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-12 10:43:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 10:43:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 10:43:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 10:45:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-12 10:45:36 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-12 10:45:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-12 10:45:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-12 10:52:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 10:52:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 10:52:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 10:52:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-12 10:52:24 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-12 10:52:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 10:52:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 10:52:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 10:52:49 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4140, NULL, 7000, 'D', '')
ERROR - 2026-03-12 10:52:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 10:52:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 10:52:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 10:53:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 10:53:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 10:53:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 10:53:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 10:53:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 10:53:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 10:55:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 10:55:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 10:55:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 10:55:37 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4142, NULL, 7000, 'D', '')
ERROR - 2026-03-12 10:55:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 10:55:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 10:55:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 10:56:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 10:56:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 10:56:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 10:57:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 10:57:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 10:57:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 10:57:54 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4144, NULL, 7000, 'D', '')
ERROR - 2026-03-12 10:57:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 10:57:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 10:57:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 10:58:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 10:58:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 10:58:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 11:04:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 11:04:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 11:04:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 11:53:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 11:53:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 11:53:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 12:23:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 12:23:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 12:23:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 12:29:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:30:31 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:30:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:30:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:30:45 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:31:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:31:35 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:31:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:31:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:32:13 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:36:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:36:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:36:30 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:36:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:36:38 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:37:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:37:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:37:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:42:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:42:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:42:51 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:42:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:42:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:43:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:44:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:44:27 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:44:27 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:44:29 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:44:35 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:44:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:45:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:45:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:45:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:45:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:46:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:46:44 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:47:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 12:47:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 12:47:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 12:47:43 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:47:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:47:52 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:47:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:48:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:48:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:49:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:49:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:49:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:49:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:49:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:49:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:50:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:50:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:50:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:50:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:50:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:50:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:50:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:51:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:51:01 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:51:09 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:51:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:52:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:52:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:52:04 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:52:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:52:22 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:52:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:54:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 12:54:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 12:54:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 12:54:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 12:54:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 12:54:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 12:55:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 12:55:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 12:55:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 12:55:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 12:55:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:55:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 12:55:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 12:55:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 12:55:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 12:55:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 12:55:26 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:55:27 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:55:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 12:55:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 12:55:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 12:55:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 12:55:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 12:55:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 12:55:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 12:56:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 12:56:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 12:56:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 13:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 13:02:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 13:02:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 13:05:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 13:05:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 13:05:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 13:06:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 13:08:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 13:08:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 13:08:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 13:08:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 13:10:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 13:10:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 13:11:28 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 13:11:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 13:11:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 13:11:35 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 13:13:27 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 13:16:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 13:16:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 13:16:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 13:17:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 13:17:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 13:17:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 13:17:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 13:17:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 13:17:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 13:19:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 13:19:27 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 13:19:32 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 13:38:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 13:38:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 13:38:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 13:55:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 13:55:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 13:55:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 14:00:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 14:00:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 14:00:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 14:02:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 14:02:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 14:02:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 14:07:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 14:07:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 14:07:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 14:09:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 14:09:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 14:09:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 14:22:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 14:22:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 14:22:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 14:23:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 14:23:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 14:23:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 14:26:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 14:26:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 14:26:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 14:41:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 14:41:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 14:41:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 14:51:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-12 14:51:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-12 14:55:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-12 14:55:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-12 15:09:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:09:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:09:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:10:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:10:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:10:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:11:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:11:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:11:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:11:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:11:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:11:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:12:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:12:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:12:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:16:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:16:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:16:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:16:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:16:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:16:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:17:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:17:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:17:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:18:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:18:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:18:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:19:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:19:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:19:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:20:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:20:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:20:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:20:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:20:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:20:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:25:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:25:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:25:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:26:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:26:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:26:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:28:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:28:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:28:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:31:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:31:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:31:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:32:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:32:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:32:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:36:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:36:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:36:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:39:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:39:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:39:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:40:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:40:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:40:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:40:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:40:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:40:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:42:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:42:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:42:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:42:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:42:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:42:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:43:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:43:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:43:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:46:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:46:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:46:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:47:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:47:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:47:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:47:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:47:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:47:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:48:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:48:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:48:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 15:49:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 15:49:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 15:49:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 16:01:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-12 16:01:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-12 16:01:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 16:01:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 16:01:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 16:02:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 16:02:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 16:02:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 16:02:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 16:02:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 16:02:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 16:04:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 16:04:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 16:04:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 16:05:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 16:05:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 16:05:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 16:07:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 16:07:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 16:07:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 16:08:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 16:08:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 16:08:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 16:09:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 16:09:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 16:09:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 16:21:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-12 16:21:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-12 16:22:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 16:22:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 16:22:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 16:25:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 16:25:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 16:25:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 16:31:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 16:31:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 16:31:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 16:33:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 16:33:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 16:33:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 16:39:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 16:39:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 16:39:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 16:51:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 16:51:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 16:51:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 16:52:34 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4149, NULL, 5400, 'D', '1 month not Came to bus ')
ERROR - 2026-03-12 16:52:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 16:52:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 16:52:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 16:53:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 16:53:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 16:53:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 17:00:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 17:00:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 17:00:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 17:04:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 17:04:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 17:04:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 17:04:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 17:04:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 17:04:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 17:06:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 17:06:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 17:06:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 17:32:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 17:32:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 17:32:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 17:40:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 17:40:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 17:40:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 17:40:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 17:40:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 17:40:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:07:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:07:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:07:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:10:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:10:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:10:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:11:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:11:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:11:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:12:17 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4152, NULL, 3500, 'D', '')
ERROR - 2026-03-12 18:12:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:12:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:12:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:12:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:12:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:12:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:13:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-12 18:13:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-12 18:13:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:13:57 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:13:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:13:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:13:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:14:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:14:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:14:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:15:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:15:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:15:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:15:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:15:08 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:15:39 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:16:00 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:16:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:16:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:16:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:16:07 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:16:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:16:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:17:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:17:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:17:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:17:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:17:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:17:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:17:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:17:31 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:17:31 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:17:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:17:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:17:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:17:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:17:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:17:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:18:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:18:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:18:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:18:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:18:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:18:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:19:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:19:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:19:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:19:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:19:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:19:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:20:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:20:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:20:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:20:54 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4155, NULL, 8500, 'D', '')
ERROR - 2026-03-12 18:20:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:20:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:20:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:21:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:21:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:21:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:22:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:22:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:22:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:22:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:22:53 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:22:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:22:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:22:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:23:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:23:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:23:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:23:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:23:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:23:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:23:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:23:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:24:11 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (4156, NULL, 9000, 'D', '')
ERROR - 2026-03-12 18:24:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:24:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:24:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:25:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:25:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:25:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:25:06 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:31:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:31:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:31:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:32:19 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:32:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:32:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:32:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:33:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:33:11 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:33:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:33:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:33:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:33:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:33:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:33:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:33:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:33:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:33:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:34:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:34:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:34:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:35:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 18:37:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:37:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:37:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 18:39:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-12 18:39:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-12 18:39:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-12 13:51:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 19:22:44 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-03-12 15:19:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 20:49:47 --> Severity: User Error --> Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 8.1.0". You are running 7.4.33. /home/ashir611/public_html/application/third_party/omnipay/vendor/composer/platform_check.php 24
ERROR - 2026-03-12 19:03:03 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 22:36:34 --> Could not find the language line "not_generated"
ERROR - 2026-03-12 22:42:22 --> Could not find the language line "not_generated"
