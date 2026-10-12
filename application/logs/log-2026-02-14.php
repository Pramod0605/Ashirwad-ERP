<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-14 10:23:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-14 10:23:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-14 10:40:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-14 10:40:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-14 10:41:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 10:41:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 10:41:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 10:41:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 10:41:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 10:41:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 10:41:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 10:41:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 10:41:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 10:43:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-14 10:43:00 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-14 10:43:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 10:43:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 10:43:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 10:43:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 10:43:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 10:43:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 10:59:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 10:59:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 10:59:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 11:00:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 11:00:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 11:00:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 11:07:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 11:07:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 11:07:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 11:19:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 11:19:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 11:19:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 11:45:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 11:45:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 11:45:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 11:45:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 11:45:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 11:45:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 11:46:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 11:46:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 11:46:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 11:47:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 11:47:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 11:47:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 11:47:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 11:47:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 11:47:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 13:23:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-14 13:23:36 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-14 13:23:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-14 13:24:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 13:24:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 13:24:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 13:33:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 13:33:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 13:33:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 13:42:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 13:42:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 13:42:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 13:42:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 13:42:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 13:42:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 13:46:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 13:46:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 13:46:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 13:53:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-14 13:53:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-14 14:27:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 14:27:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 14:27:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 14:37:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 14:37:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 14:37:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 14:37:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 14:37:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 14:37:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 14:53:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 14:53:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 14:53:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 15:06:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 15:06:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 15:06:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 16:15:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-14 16:15:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-14 16:15:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-14 16:15:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 16:15:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 16:15:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 16:16:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 16:16:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 16:16:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 16:31:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 16:31:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 16:31:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 17:05:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-14 17:05:11 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-14 17:07:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 17:07:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 17:07:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 17:09:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-14 17:09:15 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-14 17:09:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 17:09:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 17:09:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 17:11:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 17:11:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 17:11:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 17:12:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 17:12:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 17:12:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-14 17:12:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-14 17:12:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-14 17:12:43 --> Could not find the language line "discount_this_action_is_irreversible"
