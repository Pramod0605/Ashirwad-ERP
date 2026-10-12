<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-02 12:40:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-02 12:40:18 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-02 12:41:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 12:41:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 12:41:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 12:41:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-02 12:41:15 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-02 12:42:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 12:42:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 12:42:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 12:50:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 12:50:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 12:50:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 12:51:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 12:51:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 12:51:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 12:54:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-02 12:54:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-02 13:00:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 13:00:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 13:00:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 13:00:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 13:00:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 13:00:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 13:54:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-02 13:54:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-02 13:55:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-02 13:55:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-02 13:55:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-02 13:55:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 13:55:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 13:55:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 14:20:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-02 14:24:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-02 14:24:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-02 14:24:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-02 14:25:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 14:25:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 14:25:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 14:33:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 14:33:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 14:33:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 14:58:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-02 14:58:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-02 14:59:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 14:59:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 14:59:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:01:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:01:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:01:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:03:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:03:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:03:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:04:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:04:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:04:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:07:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:07:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:07:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:08:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:08:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:08:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:08:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:08:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:08:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:10:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:10:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:10:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:10:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:10:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:10:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:11:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:11:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:11:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:36:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:36:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:36:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:36:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:36:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:36:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:39:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:39:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:39:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:40:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:40:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:40:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:41:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:41:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:41:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:48:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:48:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:48:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:49:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:49:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:49:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:53:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:53:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:53:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:54:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:54:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:54:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 15:55:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 15:55:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 15:55:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 16:00:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-02 16:00:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-02 16:00:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-02 16:11:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-02 16:11:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-02 16:12:00 --> Could not find the language line "error_occured"
ERROR - 2025-12-02 16:12:04 --> Could not find the language line "student_fee1"
ERROR - 2025-12-02 16:12:11 --> Could not find the language line "student_fee1"
ERROR - 2025-12-02 16:14:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-02 16:17:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-02 16:30:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-02 16:30:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-02 16:30:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-02 16:30:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-02 16:39:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-02 16:39:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-02 16:39:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-02 18:58:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-02 18:58:25 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
