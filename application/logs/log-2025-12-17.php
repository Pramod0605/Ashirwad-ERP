<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-17 10:37:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-17 10:37:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-17 10:54:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 10:58:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 10:58:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 11:05:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 11:05:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 11:05:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 11:07:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 11:14:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-17 11:14:36 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-17 11:15:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 11:15:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 11:15:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 11:27:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 11:27:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 11:27:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 12:43:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 12:43:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 12:43:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 12:44:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 12:44:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 12:44:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 14:43:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-17 14:43:55 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-17 14:43:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 14:44:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 14:44:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 14:44:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 14:44:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 14:44:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 14:59:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 14:59:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 14:59:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 15:11:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 15:11:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 15:11:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 15:53:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 15:53:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 15:53:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 15:53:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 15:53:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 15:53:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 15:53:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 15:54:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 15:54:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 15:54:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 15:54:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 15:54:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 16:20:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 16:20:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 16:20:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 16:23:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 16:23:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 16:23:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 16:26:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 16:26:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 16:26:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 16:27:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 16:27:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 16:27:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 16:30:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 16:30:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 16:30:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 16:30:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 16:35:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 16:35:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 16:35:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 16:35:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 16:36:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 16:36:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 16:36:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 16:37:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 16:37:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 16:37:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 16:37:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 16:37:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 16:37:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-17 16:43:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-17 16:43:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-17 16:43:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 16:43:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 16:43:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-17 16:43:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-17 16:43:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-17 16:43:24 --> Could not find the language line "discount_this_action_is_irreversible"
