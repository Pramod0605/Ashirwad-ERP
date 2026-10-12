<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-29 09:58:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-29 09:58:39 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-29 10:09:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-29 10:09:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-29 10:09:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-29 10:21:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-29 10:21:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-29 10:21:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-29 10:46:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-29 10:46:56 --> Could not find the language line "student1"
ERROR - 2026-03-29 10:46:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-29 10:46:59 --> Could not find the language line "student1"
ERROR - 2026-03-29 10:47:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-29 10:47:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-29 10:47:36 --> Could not find the language line "not_generated"
ERROR - 2026-03-29 10:47:37 --> Could not find the language line "not_generated"
ERROR - 2026-03-29 10:47:37 --> Could not find the language line "access_denied"
ERROR - 2026-03-29 10:47:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-29 10:47:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-29 10:47:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-29 10:48:56 --> Could not find the language line "not_generated"
ERROR - 2026-03-29 10:49:14 --> Could not find the language line "not_generated"
ERROR - 2026-03-29 10:49:15 --> Could not find the language line "not_generated"
ERROR - 2026-03-29 12:16:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-29 12:16:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-29 12:16:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-29 13:05:41 --> Could not find the language line "not_generated"
ERROR - 2026-03-29 13:05:41 --> Could not find the language line "student1"
ERROR - 2026-03-29 13:05:44 --> Could not find the language line "not_generated"
ERROR - 2026-03-29 13:05:44 --> Could not find the language line "student1"
ERROR - 2026-03-29 13:16:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-29 13:16:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-29 13:16:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-29 15:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-29 15:47:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-29 16:16:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-29 16:16:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-29 16:16:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-29 16:36:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-29 16:36:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-29 16:36:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-29 16:55:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-29 16:55:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-29 16:55:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-29 16:55:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-29 16:55:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-29 16:55:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-29 17:32:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-29 17:32:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-29 17:32:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-29 17:37:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-29 17:37:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-29 17:37:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-29 18:59:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-29 18:59:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-29 18:59:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-29 18:59:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-29 18:59:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-29 21:11:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-29 21:11:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-29 21:12:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-29 21:12:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-29 21:12:01 --> Could not find the language line "discount_this_action_is_irreversible"
