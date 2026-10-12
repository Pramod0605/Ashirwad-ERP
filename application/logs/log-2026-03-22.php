<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-22 10:33:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-22 10:33:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-22 10:33:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 10:33:23 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 10:33:24 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 10:33:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 10:33:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 10:33:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-22 10:34:20 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 10:34:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 10:34:25 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 10:34:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 10:34:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 10:34:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-22 10:38:54 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 10:38:58 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 10:38:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 11:50:59 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 11:51:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 11:51:05 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 11:51:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 11:51:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 11:51:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-22 12:02:10 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 12:02:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 12:02:18 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 12:02:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 12:02:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 12:02:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-22 12:05:16 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 12:05:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 12:05:21 --> Could not find the language line "not_generated"
ERROR - 2026-03-22 12:05:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 12:05:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 12:05:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-22 12:22:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-22 12:22:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-22 14:31:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 14:31:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 14:31:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-22 15:13:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 15:13:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 15:13:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-22 15:14:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 15:14:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 15:14:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-22 15:16:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 15:16:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 15:16:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-22 15:25:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 15:25:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 15:25:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-22 15:26:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 15:26:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 15:26:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-22 15:38:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 15:38:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 15:38:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-22 15:41:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 15:41:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 15:41:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-22 15:41:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 15:41:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 15:41:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-22 15:42:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 15:42:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 15:42:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-22 15:44:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 15:44:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 15:44:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-22 15:45:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-22 15:45:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-22 15:45:35 --> Could not find the language line "discount_this_action_is_irreversible"
