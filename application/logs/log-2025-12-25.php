<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-25 10:51:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-25 10:51:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-25 10:51:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 10:51:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 10:51:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 10:52:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-25 10:52:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-25 10:52:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-25 11:00:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 11:00:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 11:00:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 11:00:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-25 11:00:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-25 11:00:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-25 11:00:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 11:01:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 11:01:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 11:01:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-25 11:01:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-25 11:01:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-25 11:01:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 11:02:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 11:02:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 11:02:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-25 11:02:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-25 11:02:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-25 11:02:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 11:02:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 11:02:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 11:03:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-25 11:03:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-25 11:03:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-25 11:04:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-25 11:04:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-25 11:04:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-25 11:06:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-25 11:06:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-25 11:06:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-25 11:08:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 11:08:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 11:08:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-25 11:08:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-25 11:08:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-25 11:08:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-25 11:09:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-25 11:09:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-25 11:09:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-25 11:10:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-25 11:10:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-25 11:10:46 --> Could not find the language line "discount_this_action_is_irreversible"
