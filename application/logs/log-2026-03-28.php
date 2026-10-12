<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-28 10:43:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-28 10:43:49 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-28 11:09:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-28 11:09:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-28 11:09:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-28 11:09:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-28 11:09:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-28 11:38:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-28 11:38:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-28 11:38:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-28 12:14:55 --> Severity: Warning --> imagejpeg(): gd-jpeg: JPEG library reports unrecoverable error: Output file write error --- out of disk space? /home/ashir611/public_html/system/helpers/captcha_helper.php 324
ERROR - 2026-03-28 12:14:55 --> Session: Unable to write data.
ERROR - 2026-03-28 12:14:55 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: /tmp) Unknown 0
ERROR - 2026-03-28 12:15:04 --> Session: Unable to write data.
ERROR - 2026-03-28 12:15:04 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: /tmp) Unknown 0
ERROR - 2026-03-28 12:15:05 --> Session: Unable to write data.
ERROR - 2026-03-28 12:15:05 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: /tmp) Unknown 0
ERROR - 2026-03-28 12:15:06 --> Severity: Warning --> imagejpeg(): gd-jpeg: JPEG library reports unrecoverable error: Output file write error --- out of disk space? /home/ashir611/public_html/system/helpers/captcha_helper.php 324
ERROR - 2026-03-28 12:15:06 --> Session: Unable to write data.
ERROR - 2026-03-28 12:15:06 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined ERROR - 2026-03-28 12:41:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-28 12:41:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-28 12:41:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-28 12:47:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-28 12:47:47 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-28 12:47:50 --> Could not find the language line "not_generated"
ERROR - 2026-03-28 12:47:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-28 12:47:55 --> Could not find the language line "not_generated"
ERROR - 2026-03-28 13:19:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-28 13:19:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-28 15:55:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-28 15:55:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-28 15:55:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-28 17:07:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-28 17:07:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-28 17:08:02 --> Could not find the language line "not_generated"
ERROR - 2026-03-28 17:08:02 --> Could not find the language line "student1"
ERROR - 2026-03-28 17:08:12 --> Could not find the language line "not_generated"
ERROR - 2026-03-28 17:08:12 --> Could not find the language line "student1"
ERROR - 2026-03-28 17:08:17 --> Could not find the language line "not_generated"
ERROR - 2026-03-28 17:08:33 --> Could not find the language line "not_generated"
ERROR - 2026-03-28 17:30:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-28 17:30:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-28 17:30:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-28 17:31:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-28 17:31:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-28 17:31:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-28 17:59:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-28 17:59:26 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-28 19:33:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-28 19:33:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-28 19:33:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-28 19:40:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-28 19:40:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-28 19:40:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-28 20:04:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-28 20:04:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-28 20:04:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-28 22:14:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-03-28 22:14:56 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-03-28 22:15:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-28 22:15:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-28 22:15:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-28 22:30:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-28 22:30:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-28 22:30:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-03-28 23:09:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-03-28 23:09:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-03-28 23:09:01 --> Could not find the language line "discount_this_action_is_irreversible"
