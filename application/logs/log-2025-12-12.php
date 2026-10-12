<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-12 09:59:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-12 09:59:00 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-12 09:59:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:08:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-12 10:08:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-12 10:09:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:09:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:09:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:09:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-12 10:09:16 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-12 10:09:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:09:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:09:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:11:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:11:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:11:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:12:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:12:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:12:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:13:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:13:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-12 10:13:46 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-12 10:14:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:14:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:14:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:15:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:15:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:15:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:17:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:17:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:17:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:18:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:18:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:18:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:21:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:22:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:22:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:22:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:22:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:22:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:25:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:25:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:25:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:25:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:25:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:25:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:34:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:34:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:34:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:34:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:34:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:34:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:34:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:34:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:34:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:35:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:35:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:35:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:35:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:35:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:35:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:35:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:35:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:35:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:36:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:36:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:36:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:36:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:36:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:36:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:37:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:37:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:37:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:37:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:37:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:37:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:38:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:38:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:38:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:39:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:39:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:39:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:41:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:41:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:41:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:41:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:41:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:41:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:42:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:42:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:42:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:42:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:42:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:42:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:43:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:43:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:43:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:44:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:44:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:44:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:44:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:44:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:44:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:44:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:44:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:44:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:44:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:44:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:44:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:45:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:45:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:45:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:45:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:45:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:45:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:45:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:45:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:45:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:46:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-12 10:46:24 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-12 10:46:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:46:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:46:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:47:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:47:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:47:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:47:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-12 10:47:06 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-12 10:47:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:47:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:47:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:53:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:53:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:53:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:54:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:54:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:54:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:54:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:54:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:54:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:54:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:54:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:54:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 10:55:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:55:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:55:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 10:57:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 10:57:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 10:57:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:00:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:00:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:00:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:02:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:02:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:02:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:02:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:02:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:02:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:03:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:03:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:03:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:03:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:03:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:03:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:03:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:03:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:03:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:03:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:03:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:03:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:03:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:03:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:03:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:05:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:05:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:05:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:05:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:05:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:05:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:05:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:06:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:06:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:06:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:06:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:06:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:06:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:06:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:06:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:07:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:07:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:07:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:09:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:09:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:09:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:10:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:10:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:10:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:10:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:10:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:10:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:10:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:10:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:10:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:10:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:10:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:10:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:14:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:14:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:14:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:36:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:36:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:36:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:36:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:36:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:36:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:38:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:38:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:38:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:38:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:38:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:38:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:39:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:39:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:39:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:39:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:39:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:39:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:39:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:39:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:39:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:39:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:39:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:39:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:40:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:40:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:40:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:41:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:41:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:41:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:41:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:41:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:41:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:41:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:41:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:41:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:41:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:41:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:41:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:41:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:41:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:41:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:42:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:42:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:42:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:42:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:42:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:42:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:42:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:42:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:42:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:42:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:42:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:42:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:43:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:43:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:43:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:43:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:43:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:43:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:48:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:48:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:48:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:49:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:49:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:49:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:49:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:49:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:49:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:50:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:50:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:50:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:50:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:50:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:50:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:51:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:51:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:51:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:51:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:51:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:51:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:52:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:52:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:52:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:53:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:53:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:53:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:53:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:53:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:53:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:53:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:53:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:53:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:53:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:53:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:53:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:53:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:53:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:53:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:54:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:54:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:54:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:54:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:54:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:54:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:54:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:54:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:54:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:55:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:55:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:55:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:55:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:55:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:55:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:57:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:58:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:58:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:58:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:58:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:58:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:58:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:58:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:58:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:58:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:58:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:58:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:59:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:59:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:59:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 11:59:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 11:59:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 11:59:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 11:59:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:00:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:00:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:00:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:00:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:00:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:00:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:00:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:00:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:01:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:01:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:01:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:02:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:02:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:02:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:02:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:02:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:02:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:03:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:03:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:03:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:03:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:03:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:03:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:04:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:04:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:04:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:04:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:04:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:04:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:05:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:05:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:05:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:07:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:07:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:07:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:07:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:08:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:08:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:08:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:08:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:08:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:08:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:09:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:09:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:09:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:10:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:10:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:10:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:10:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:10:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:10:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:11:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:11:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:11:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:13:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:13:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:13:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:13:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:13:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:13:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:13:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:13:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:13:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:14:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:14:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:14:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:15:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:15:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:15:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:15:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:15:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:15:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:15:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:15:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:15:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:16:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:16:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:16:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:16:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:16:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:16:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:17:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:17:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:17:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:17:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:17:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:17:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:17:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:17:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:17:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:18:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:18:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:18:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:18:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:18:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:18:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:18:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:18:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:18:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:18:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:18:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:18:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:19:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:19:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:19:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:19:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:19:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:19:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:19:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:19:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:19:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:19:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:19:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:19:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:20:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:20:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:20:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:20:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:20:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:20:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:20:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:20:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:20:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:21:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:21:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:21:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:21:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:21:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:21:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:21:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:21:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:21:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:22:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:22:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:22:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:22:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:22:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:22:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:23:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:23:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:23:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:23:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:23:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:23:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:24:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:24:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:24:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:26:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:26:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:26:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 12:26:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:26:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:26:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:28:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:28:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:28:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:28:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:28:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:28:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:29:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:29:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:29:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:29:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:29:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:29:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:30:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:30:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:30:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:30:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:30:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:30:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:31:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:31:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:31:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:32:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:32:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:32:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:34:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:34:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:34:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:38:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:38:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:38:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:45:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:45:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:45:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:48:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:48:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:48:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:50:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:50:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:50:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 12:57:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 12:57:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 12:57:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:00:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:00:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:00:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:03:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:03:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:03:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:05:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:05:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:05:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:07:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 13:07:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 13:07:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 13:07:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:07:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:07:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:10:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 13:10:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 13:10:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 13:10:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:10:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:10:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:40:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:40:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:40:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:42:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:42:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:42:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:43:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:43:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:43:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:43:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:43:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:43:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:44:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:44:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:44:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:46:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:46:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:46:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:46:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:46:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:46:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:47:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:47:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:47:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:47:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:47:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:47:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:49:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:49:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:49:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:50:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:50:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:50:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:51:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:51:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:51:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 13:52:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 13:52:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 13:52:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:10:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:10:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:10:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:13:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:13:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:13:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:13:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:13:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:13:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:13:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:13:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:13:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:14:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:14:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:14:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:14:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:14:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:14:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:15:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:15:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:15:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:15:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:15:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:15:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:19:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:19:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:19:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:20:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:20:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:20:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:22:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:22:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:22:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:23:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:23:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:23:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:27:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:27:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:27:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:28:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:28:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:28:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:29:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:29:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:29:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:31:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:31:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:31:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:36:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:36:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:36:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:39:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:39:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:39:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:39:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:39:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:39:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:41:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:41:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:41:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:44:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:44:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:44:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:44:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:44:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:44:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:44:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:44:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:44:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:45:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:45:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:45:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:46:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:46:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:46:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:47:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:47:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:47:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:48:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:48:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:48:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:48:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:48:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:48:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:50:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:50:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:50:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:51:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 14:51:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 14:51:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 14:51:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:51:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:51:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:52:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-12 14:52:29 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-12 14:52:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:52:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:52:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:52:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:52:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:52:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:53:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:53:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:53:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:53:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:53:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:53:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:53:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:53:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:53:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:53:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:53:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:53:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:53:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:53:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:53:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:54:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:54:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:54:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:54:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:54:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:54:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:56:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:56:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:56:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:56:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:56:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:56:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:57:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:57:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:57:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:57:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:57:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:57:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:57:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:57:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:57:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 14:59:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 14:59:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 14:59:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:00:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:00:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:00:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:00:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:00:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:00:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:00:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:00:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:00:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:03:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:03:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:03:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:03:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:03:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:03:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:05:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:05:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:05:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:08:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-12 15:08:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:08:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:08:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:09:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:09:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:09:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:10:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:10:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:10:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:13:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:13:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:13:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:15:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:15:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:15:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:15:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:15:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:15:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:15:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:15:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:15:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:15:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:15:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:15:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:16:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:16:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:16:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:18:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:18:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:18:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:19:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:19:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:19:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:19:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:19:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:19:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:19:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:19:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:19:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:21:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:21:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:21:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:21:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:21:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:21:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:23:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:23:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:23:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:23:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:23:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:23:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:23:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:23:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:23:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:24:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:24:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:24:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:38:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:38:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:38:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:40:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:40:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:40:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:41:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:41:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:41:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:41:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:41:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:41:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:41:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:41:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:41:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:42:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:42:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:42:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:42:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:42:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:42:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:42:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:42:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:42:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:43:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:43:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:43:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:49:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:49:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:49:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:49:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-12 15:49:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-12 15:49:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:49:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:49:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:50:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:50:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:50:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:50:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:50:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:50:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:51:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:51:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:51:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:51:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:51:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:51:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:54:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:54:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:54:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:55:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:55:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:55:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:55:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:55:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:55:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:57:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:57:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:57:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:59:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:59:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:59:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:59:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:59:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:59:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 15:59:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 15:59:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 15:59:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 16:00:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-12 16:00:24 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-12 16:00:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 16:00:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 16:00:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 16:01:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 16:01:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 16:01:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 16:01:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 16:01:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 16:01:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 16:03:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 16:03:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 16:03:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 16:03:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 16:03:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 16:03:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 16:10:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 16:10:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 16:10:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-12 16:24:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-12 16:24:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-12 16:24:50 --> Could not find the language line "discount_this_action_is_irreversible"
