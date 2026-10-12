<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-15 13:49:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-15 13:49:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-15 13:49:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-15 13:49:20 --> Could not find the language line "not_generated"
ERROR - 2026-02-15 13:49:20 --> Could not find the language line "not_generated"
ERROR - 2026-02-15 13:49:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-15 13:49:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-15 13:49:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-15 13:58:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-15 13:58:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-15 13:58:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-15 13:59:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-15 13:59:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-15 13:59:43 --> Could not find the language line "discount_this_action_is_irreversible"
