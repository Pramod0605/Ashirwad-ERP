<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-06 09:33:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 09:33:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 09:38:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 09:38:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 09:38:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 09:41:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 09:41:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 09:41:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 09:41:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 09:41:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 09:41:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 09:56:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 09:56:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 09:56:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 09:57:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 09:57:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 09:57:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 09:58:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 09:58:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 09:58:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 09:59:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 09:59:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 09:59:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:00:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:00:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:00:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:05:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:05:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:05:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:08:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:08:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:08:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:12:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:12:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:12:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:13:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:13:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:13:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:15:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:15:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:15:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:16:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 10:16:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 10:17:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:17:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:17:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:18:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 10:18:05 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 10:18:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:18:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:18:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:18:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:18:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:18:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:20:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:20:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:20:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:21:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:21:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:21:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:22:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:22:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:22:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:23:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:23:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:23:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:24:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:24:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:24:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:24:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:24:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:24:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:25:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:25:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:25:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:25:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:25:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:25:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:27:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:27:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:27:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:27:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:27:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:27:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:27:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:27:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:27:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:28:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:28:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:28:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:34:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:34:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:34:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:35:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 10:35:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 10:36:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:36:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:36:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:37:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:37:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:37:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:37:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:37:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:37:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:41:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:41:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:41:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:41:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:41:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:41:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:41:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:41:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:41:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:43:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:43:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:43:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:45:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:45:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:45:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:45:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:45:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:45:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:47:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 10:47:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 10:47:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:47:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:47:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:47:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:47:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:47:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:48:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:48:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:48:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:48:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:48:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:48:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:50:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 10:50:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 10:50:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 10:50:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 10:50:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 10:50:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:50:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:50:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:50:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 10:50:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 10:50:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 10:50:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 10:50:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 10:50:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 10:50:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:50:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:50:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:51:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:51:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:51:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:51:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:51:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:51:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:51:55 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (2871, NULL, 5000, 'D', '')
ERROR - 2025-12-06 10:51:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:51:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:51:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:52:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:52:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:52:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:53:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:53:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:53:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:53:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:53:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:53:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:53:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:53:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:53:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:54:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:54:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:54:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:55:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:55:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:55:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:55:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:55:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:55:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:55:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:55:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:55:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:56:37 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (2877, NULL, 3000, 'D', '')
ERROR - 2025-12-06 10:56:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:56:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:56:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:57:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:57:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:57:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:57:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 10:57:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 10:58:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 10:58:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 10:58:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 10:58:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 10:58:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:58:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:58:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:59:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:59:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:59:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:59:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:59:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:59:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 10:59:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 10:59:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 10:59:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:00:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 11:00:07 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 11:00:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:00:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:00:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:00:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:00:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:00:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:01:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:01:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:01:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:01:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:01:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:01:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:01:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:01:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:01:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:02:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:02:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:02:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:02:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:02:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:02:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:03:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:03:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:03:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:03:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:03:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:03:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:03:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:03:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:03:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:03:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:03:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:04:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:04:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:04:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:04:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:04:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:04:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:05:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:05:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:05:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:05:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:05:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:05:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:06:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:06:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:06:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:06:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:06:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:06:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:07:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:07:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:07:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:07:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:07:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:07:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:08:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:08:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:08:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:08:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:08:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:08:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:09:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:09:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:09:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:09:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:09:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:09:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:09:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:09:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:09:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:09:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:09:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:09:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:11:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:11:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:11:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:11:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:11:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:11:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:12:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:12:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:12:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:13:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:13:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:13:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:13:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:13:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:13:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:16:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:16:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:16:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:17:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:17:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:17:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:20:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:20:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:20:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:21:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:21:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:21:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:21:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:21:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:21:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:21:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:21:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:21:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:22:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:22:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:22:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:23:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:23:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:23:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:24:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:24:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:24:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:25:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:25:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:25:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:26:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:26:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:26:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:27:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:27:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:27:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:28:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:28:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:28:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:28:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:28:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:28:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:29:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:29:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:29:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:30:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:30:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:30:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:30:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:30:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:30:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:31:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:31:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:31:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:32:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:32:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:32:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:32:21 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (2891, NULL, 2000, 'D', 'Balance Bus fees Adjusted with hostel fees ')
ERROR - 2025-12-06 11:32:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:32:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:32:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:32:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:32:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:32:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:34:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:34:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:34:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:34:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:34:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:34:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:34:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:34:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:34:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:34:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:34:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:34:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:36:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:36:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:36:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:37:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:37:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:37:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:37:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:37:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:37:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:37:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:37:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:37:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:38:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:38:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:38:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:39:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:39:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:39:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:39:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:39:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:39:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:39:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:39:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:39:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:40:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:40:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:40:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:40:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:40:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:40:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:41:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:41:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:41:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:41:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:41:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:41:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:43:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:43:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:43:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:43:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:43:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:43:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:44:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:44:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:44:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:45:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:45:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:45:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:48:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:48:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:48:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:48:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:48:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:48:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:48:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:48:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:48:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:49:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:49:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:49:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:49:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:49:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:49:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:49:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:49:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:49:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:50:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:50:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:50:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:50:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:50:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:50:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:55:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:55:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:55:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:55:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:55:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:55:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:56:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:56:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:56:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:56:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:56:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:56:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:57:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:57:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:57:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:57:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:57:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:57:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:59:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:59:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:59:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 11:59:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 11:59:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 11:59:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:00:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:00:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:00:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:00:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:00:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:00:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:01:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:01:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:01:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:01:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 12:01:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 12:02:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:02:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:02:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:03:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:03:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:03:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:03:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:03:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:03:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:03:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:03:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:03:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:04:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 12:04:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 12:05:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:05:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:05:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:05:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:05:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:05:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:06:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:06:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:06:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:06:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:06:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:06:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:08:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:08:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:08:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:08:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:08:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:08:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:09:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:09:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:09:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:09:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:09:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:09:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:10:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:10:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:10:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:11:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:11:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:11:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:11:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:11:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:11:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:11:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 12:11:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 12:11:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:12:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:12:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:12:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:12:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:12:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:12:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:12:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:12:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:14:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:14:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:14:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:15:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:15:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:15:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:16:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:16:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:17:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:17:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:17:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:17:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:17:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:17:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:18:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:18:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:18:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:18:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:18:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:19:06 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (2906, NULL, 4900, 'D', 'Due to late Admission MD Sir given Concession on 15.11.2025')
ERROR - 2025-12-06 12:19:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:19:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:19:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:20:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:20:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:20:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:20:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:20:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:20:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:21:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:21:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:21:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:21:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:22:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:22:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:22:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:22:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:22:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:22:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:23:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:23:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:23:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:24:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:24:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:24:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:25:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:25:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:25:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:25:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:25:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:25:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:27:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:27:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:27:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:27:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:27:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:27:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:27:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:27:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:27:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:27:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 12:27:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 12:27:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:27:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:27:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:28:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:28:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:28:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:28:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:28:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:28:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:28:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:28:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:28:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:29:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:29:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:29:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:29:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:29:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:29:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:30:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:30:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:30:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:30:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:30:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:30:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:31:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:31:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:31:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:32:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:32:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:32:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:33:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:33:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:33:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:34:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:34:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:34:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:35:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:35:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:35:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:36:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:36:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:36:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:37:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:37:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:37:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:37:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:37:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:38:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:38:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:38:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:39:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:39:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:39:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:39:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:39:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:39:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:40:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:40:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:40:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:40:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:40:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:41:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:41:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:41:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:42:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:42:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-06 12:42:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:42:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:42:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:45:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:45:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:45:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:45:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:45:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:45:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:46:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:46:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:46:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:46:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:46:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:46:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:49:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:49:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:49:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:49:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:49:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:49:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:50:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 12:50:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 12:50:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:50:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:50:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:51:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:51:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:51:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:52:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:52:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:52:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:53:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:53:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:53:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:53:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:53:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:53:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:53:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:53:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:53:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:54:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:54:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:54:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:54:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:54:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:54:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:55:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:55:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:55:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:55:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:55:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:55:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:55:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:55:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:55:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:56:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:56:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:56:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:57:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:57:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:57:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:58:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:58:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:58:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:58:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:58:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:58:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:58:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:58:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:58:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 12:58:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 12:58:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 12:58:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:00:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:00:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:00:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:01:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:01:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:01:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:01:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:01:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:01:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:02:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:02:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:02:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:05:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:05:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:05:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:05:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:05:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:05:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:07:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:07:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:07:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:08:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:08:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:08:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:09:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:09:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:09:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:10:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:10:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:10:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:11:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:11:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:11:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:12:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:12:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:12:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:13:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:13:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:13:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:13:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:13:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:13:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:14:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:14:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:14:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:14:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:14:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:14:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:16:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:16:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:16:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:16:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:16:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:16:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:16:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:16:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:16:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:18:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:18:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:18:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:18:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:18:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:18:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:20:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:20:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:20:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:21:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:21:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:21:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:21:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:21:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:21:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:21:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:21:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:21:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:25:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:25:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:25:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:27:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:27:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:27:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:28:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:28:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:28:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:29:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:29:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:29:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:29:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:29:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:29:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:30:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:30:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:30:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:30:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 13:30:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 13:31:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:31:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:31:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:31:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 13:31:29 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 13:31:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:31:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:31:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:32:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:32:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:32:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:32:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:32:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:32:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:33:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:33:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:33:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:33:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 13:33:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 13:33:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 13:33:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 13:34:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:34:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:34:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:34:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:34:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:34:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:34:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:34:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:34:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:36:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:36:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:36:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:37:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:37:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:37:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:39:08 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (2930, NULL, 2000, 'D', '')
ERROR - 2025-12-06 13:39:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:39:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:39:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:39:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:39:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:39:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:40:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:40:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:40:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:41:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:41:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:41:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:42:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:42:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:42:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:42:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:42:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:42:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:43:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:43:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:43:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:44:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:44:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:44:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:45:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:45:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:45:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:46:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:46:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:46:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:50:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:50:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:50:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:53:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:53:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:53:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:54:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:54:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:54:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:55:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:55:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:55:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:56:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:56:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:56:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:57:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:57:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:57:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:58:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 13:58:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 13:58:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 13:59:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 13:59:33 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 14:00:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 14:00:52 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 14:01:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 14:01:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 14:01:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 14:01:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 14:01:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 14:01:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 14:01:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 14:01:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 14:01:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 14:03:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 14:03:34 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 14:37:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 14:37:26 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 14:37:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 14:37:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 14:37:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 14:39:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 14:39:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 14:39:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 14:40:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 14:40:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 15:28:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 15:28:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 15:28:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 15:29:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 15:29:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 15:29:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 15:31:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 15:31:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 15:31:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 15:33:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 15:33:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 15:33:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 15:35:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 15:35:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 15:35:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 15:38:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 15:38:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 15:38:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 15:42:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 15:42:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 15:42:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 15:44:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 15:44:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 15:44:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 15:49:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 15:49:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 15:49:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-06 16:13:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 16:13:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 18:06:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-06 18:06:30 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-06 18:06:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-06 18:06:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-06 18:06:37 --> Could not find the language line "discount_this_action_is_irreversible"
