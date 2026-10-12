<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-27 11:16:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-27 11:16:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-27 13:15:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-27 13:15:26 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-27 13:15:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-27 13:15:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-27 13:15:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-27 13:16:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-27 13:16:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-27 13:16:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-27 13:22:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-27 13:22:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-27 13:22:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-27 13:23:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-27 13:23:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-27 13:23:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-27 13:28:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-27 13:28:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-27 13:28:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-27 13:28:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-27 13:28:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-27 13:28:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-27 13:29:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-27 13:29:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-27 13:29:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-27 13:29:26 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3125, NULL, 6000, 'D', '')
ERROR - 2025-12-27 13:29:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-27 13:29:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-27 13:29:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-27 13:31:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-27 13:44:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-27 13:44:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-27 13:44:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-27 14:42:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-27 14:42:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-27 18:00:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-27 18:00:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-27 18:00:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-27 18:00:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-27 18:00:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-27 18:01:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-27 18:01:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-27 18:01:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-27 18:02:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-27 18:02:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-27 18:02:36 --> Could not find the language line "discount_this_action_is_irreversible"
