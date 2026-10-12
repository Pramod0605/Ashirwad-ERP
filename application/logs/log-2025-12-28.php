<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-28 12:57:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-28 12:57:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-28 12:58:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-28 12:58:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-28 12:58:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-28 12:59:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-28 12:59:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-28 12:59:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-28 13:28:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-28 13:28:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-28 13:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-28 13:28:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-28 13:28:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-28 13:38:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-28 13:38:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-28 13:38:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-28 13:41:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-28 13:41:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-28 13:41:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-28 13:44:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-28 13:44:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-28 13:44:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-28 13:46:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-28 13:46:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-28 13:46:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-28 13:47:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-28 13:47:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-28 13:47:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-28 13:47:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-28 13:47:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-28 13:47:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-28 13:49:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-28 13:49:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-28 13:49:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-28 14:06:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-28 14:06:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-28 14:06:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-28 14:09:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-28 14:09:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-28 14:09:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-28 15:57:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-28 15:57:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-28 15:58:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-28 15:58:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-28 15:58:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-28 15:58:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-28 15:58:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-28 15:58:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-28 15:58:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-28 15:58:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-28 15:58:34 --> Could not find the language line "discount_this_action_is_irreversible"
