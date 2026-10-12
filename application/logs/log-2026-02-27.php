<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-27 11:42:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-27 11:42:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-27 11:55:45 --> Could not find the language line "not_generated"
ERROR - 2026-02-27 12:25:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-27 12:25:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-27 12:25:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-27 12:25:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-27 12:25:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-27 12:25:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-27 12:25:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-27 12:25:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-27 12:55:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-27 12:55:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-27 12:55:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-27 14:06:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-27 14:06:42 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-27 14:07:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-27 14:07:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-27 14:08:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-27 14:08:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-27 14:08:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-27 14:08:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-27 14:08:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-27 14:08:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-27 14:10:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-27 14:10:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-27 14:10:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-27 14:11:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-27 14:11:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-27 14:11:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-27 14:12:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-27 14:12:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-27 14:12:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-27 14:53:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-27 14:53:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-27 14:53:25 --> Could not find the language line "not_generated"
ERROR - 2026-02-27 14:53:29 --> Could not find the language line "not_generated"
ERROR - 2026-02-27 14:53:29 --> Could not find the language line "not_generated"
ERROR - 2026-02-27 14:53:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-27 14:53:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-27 14:53:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-27 14:54:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-27 14:54:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-27 14:54:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-27 15:02:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-27 15:02:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-27 15:02:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-27 15:02:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-27 15:02:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-27 15:02:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-27 15:04:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-27 15:04:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-27 15:04:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-27 15:05:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-27 15:05:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-27 15:05:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-27 15:06:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-27 15:06:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-27 15:06:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-27 15:07:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-27 15:07:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-27 15:07:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-27 15:13:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-27 15:13:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-27 15:13:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-27 15:14:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-27 15:14:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-27 15:14:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-27 15:49:58 --> Could not find the language line "not_generated"
