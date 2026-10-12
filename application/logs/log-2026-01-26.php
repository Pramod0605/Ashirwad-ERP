<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-26 09:56:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-26 09:56:37 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-26 10:59:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-26 10:59:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-26 10:59:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-26 11:01:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-26 11:01:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-26 11:01:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-26 11:02:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-26 11:02:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-26 11:02:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-26 11:58:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-26 11:58:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-26 11:58:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-26 12:00:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-26 12:00:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-26 12:00:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-26 12:00:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-26 12:00:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-26 12:00:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-26 13:45:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-26 13:45:49 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-26 13:46:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-26 13:46:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-26 13:46:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-26 17:27:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-26 17:27:26 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-26 17:27:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-26 17:27:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-26 17:27:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-26 17:27:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-26 17:27:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-26 17:27:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-26 17:29:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-26 17:29:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-26 17:29:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-26 17:32:03 --> Could not find the language line "not_generated"
