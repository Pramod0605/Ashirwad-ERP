<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-18 09:18:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-18 09:18:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-18 09:18:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:18:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:18:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:18:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 09:18:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 09:18:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 09:19:46 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:19:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:19:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:20:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 09:20:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 09:20:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 09:20:12 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:20:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:20:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:20:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 09:20:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 09:20:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 09:22:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:22:38 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:22:38 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:22:46 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:23:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 09:23:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 09:23:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 09:23:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:23:22 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:23:22 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:23:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 09:23:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 09:23:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 09:23:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 09:23:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 09:23:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 09:24:01 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:24:05 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:24:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:24:12 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:24:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 09:24:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 09:24:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 09:24:22 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:24:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:24:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:24:36 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 09:24:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 09:24:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 09:24:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:05:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 10:06:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 10:06:04 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 10:06:12 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 10:06:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:06:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:06:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:08:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:08:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:08:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:08:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:08:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:08:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:09:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:09:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:09:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:09:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:09:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:09:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:11:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:11:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:11:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:19:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-18 10:19:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-18 10:28:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-18 10:28:41 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-18 10:29:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:29:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:29:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:32:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:32:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:32:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:32:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:32:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:32:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:32:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:32:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:32:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:32:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:32:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:32:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:33:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:33:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:33:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:33:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:33:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:33:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-18 10:33:24 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-18 10:33:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:33:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:33:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:33:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:33:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:33:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:34:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:34:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:34:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:34:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:34:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:34:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:34:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 10:34:58 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 10:35:00 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 10:35:00 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 10:35:00 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 10:35:07 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 10:35:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 10:35:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 10:35:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 10:35:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 10:35:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:35:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:35:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:35:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:35:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:35:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:36:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:36:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:36:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:36:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:36:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:36:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:36:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:36:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:36:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:37:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:37:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:37:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:37:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:37:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:37:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:37:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:37:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:37:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:37:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:37:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:37:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:37:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:37:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:37:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:38:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:38:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:38:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:38:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:38:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:38:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:38:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:38:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:38:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:39:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:39:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:39:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:39:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:39:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:39:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:44:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:44:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:44:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:44:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:44:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:44:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:46:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-18 10:46:33 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-18 10:49:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 10:49:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 10:49:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 10:51:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 10:51:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 11:11:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 11:11:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 11:11:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 11:12:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 11:12:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 11:12:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 11:15:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 11:15:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 11:15:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 11:16:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 11:16:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 11:16:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 11:16:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 11:16:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 11:16:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 11:19:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:19:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:19:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:19:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:19:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:19:26 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:19:26 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:19:29 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:19:29 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:19:29 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:19:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 11:19:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 11:20:22 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:20:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:20:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:20:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:20:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:20:32 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:20:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:20:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:20:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:20:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:20:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 11:20:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 11:20:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 11:21:44 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:21:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:21:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:21:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:21:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:21:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:21:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:21:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:21:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:22:00 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:22:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 11:22:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 11:22:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 11:23:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:23:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:23:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:23:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:23:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:23:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:23:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:23:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:23:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:23:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 11:24:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:24:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:24:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:24:23 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:24:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:24:30 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:24:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:24:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:24:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:24:33 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:24:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 11:27:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:27:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:27:24 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:27:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 11:27:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 11:27:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 11:36:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 11:36:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 11:36:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 11:36:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 11:38:04 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:38:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:38:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:38:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:38:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:38:12 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:38:13 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:38:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:38:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:38:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:38:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 11:39:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 11:39:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 11:39:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 11:48:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 11:48:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 11:52:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 11:56:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 11:57:26 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:57:29 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:57:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:57:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:57:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:57:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:57:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:57:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:57:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:57:42 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:57:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 11:57:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 11:57:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 11:58:06 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:58:09 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:58:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:58:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:58:11 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:58:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:58:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:58:20 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:58:20 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:58:21 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 11:58:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 12:03:50 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:03:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:03:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:03:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:03:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:04:00 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:04:00 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:04:02 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:04:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:04:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:04:16 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:04:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:04:30 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:04:30 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:04:30 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:04:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:04:35 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:04:37 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:04:37 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:04:37 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:05:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 12:10:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 12:12:18 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:17:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 12:17:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 12:17:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 12:17:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 12:17:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 12:17:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 12:18:48 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:18:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:18:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:18:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:18:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:53:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-18 12:53:06 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-18 12:53:09 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:53:13 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:53:13 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:53:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 12:53:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 12:53:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 12:54:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 12:54:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 12:54:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 12:55:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 12:55:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 12:55:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 12:56:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 12:56:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 12:56:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 12:57:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 12:57:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 12:57:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 12:57:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:58:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:58:03 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:58:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 12:58:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 12:58:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 12:58:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:58:38 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:58:38 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 12:58:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 12:58:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 12:58:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 13:01:55 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 13:01:59 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 13:22:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 13:22:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 13:22:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 13:23:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 13:23:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 13:23:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 13:25:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 13:25:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 13:25:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 13:26:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 13:26:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 13:26:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 13:39:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 13:39:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 13:39:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 13:40:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 13:40:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 13:40:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 13:41:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 13:41:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 13:41:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 13:45:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 13:45:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 13:45:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 13:59:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 13:59:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 13:59:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:05:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:05:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:05:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:14:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:14:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:14:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:16:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-18 14:16:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-18 14:16:20 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 14:16:26 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 14:16:27 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 14:16:34 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 14:16:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:16:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:16:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:36:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 14:36:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-18 14:39:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:39:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:39:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:43:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:43:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:43:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:44:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:44:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:44:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:53:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:53:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:53:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:53:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:53:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:53:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:53:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:53:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:53:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:53:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:53:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:53:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:53:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:53:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:53:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:54:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:54:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:54:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:54:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:54:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:54:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:54:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:54:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:54:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:54:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:54:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:54:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:54:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:54:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:54:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:54:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:54:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:54:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:56:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:56:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:56:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:56:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:56:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:56:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:56:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:56:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:56:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:56:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:56:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:56:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:57:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:57:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:57:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 14:57:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 14:57:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 14:57:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:04:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:04:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:04:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:05:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:05:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:05:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:07:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:07:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:07:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:07:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:07:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:07:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:07:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:07:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:07:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:08:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:08:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:08:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:09:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:09:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:09:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:09:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:09:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:09:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:09:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:09:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:09:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:09:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:09:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:09:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:10:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:10:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:10:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:10:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:10:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:10:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:10:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:10:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:10:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:10:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:10:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:10:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:10:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:10:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:10:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:10:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:10:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:10:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:11:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:11:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:11:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:11:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:11:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:11:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:11:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:11:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:11:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:11:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:11:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:11:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:11:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:11:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:11:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:12:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:12:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:12:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:12:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:12:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:12:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:13:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:13:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:13:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:14:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:14:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:14:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:14:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:14:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:14:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:16:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:16:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:16:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:17:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:17:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:17:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:18:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:18:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:18:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:19:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:19:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:19:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:21:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:21:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:21:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:23:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:23:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:23:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:23:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-18 15:23:46 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-18 15:24:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:24:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:24:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:25:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:25:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:25:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:25:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:25:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:25:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:26:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:26:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:26:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:27:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:27:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:27:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:29:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:29:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:29:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:29:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:29:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:29:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:29:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:29:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:29:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:30:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:30:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:30:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:31:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-18 15:31:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-18 15:31:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:31:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:31:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:31:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:31:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:31:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:32:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:32:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:32:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:32:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:32:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:32:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:34:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-18 15:34:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-18 15:34:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:34:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:34:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:35:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:35:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:35:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:35:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:35:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:35:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:37:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:37:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:37:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:38:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:38:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:38:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:39:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:39:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:39:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:40:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:40:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:40:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:44:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:44:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:44:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:45:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:45:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:45:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:46:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:46:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:46:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:46:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:46:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:46:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:47:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:47:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:47:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:52:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:52:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:52:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:53:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:53:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:53:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:54:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:54:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:54:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:54:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:54:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:54:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:55:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:55:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:55:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:56:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:56:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:56:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:56:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:56:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:56:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:57:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:57:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:57:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:58:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:58:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:58:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:58:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:58:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:58:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 15:58:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 15:58:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 15:58:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:00:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:00:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:00:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:01:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:01:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:01:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:02:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:02:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:02:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:02:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:02:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:02:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:03:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:03:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:03:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:04:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:04:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:04:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:04:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:04:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:04:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:06:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:06:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:06:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:13:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:13:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:13:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:13:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:13:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:13:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:14:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-18 16:14:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-18 16:14:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:14:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:14:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:15:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:15:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:15:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:20:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:20:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:20:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:24:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:24:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:24:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:28:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:28:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:28:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:32:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:32:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:32:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:33:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:33:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:33:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:35:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:35:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:35:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:36:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:36:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:36:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:43:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:43:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:43:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:47:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:47:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:47:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:55:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 16:56:47 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 16:56:54 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 16:56:54 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 16:57:01 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 16:57:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 16:57:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 16:57:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 16:58:25 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 16:58:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 16:58:40 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 17:00:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 17:00:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 17:00:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 17:01:36 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 17:01:41 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 17:01:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 17:02:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 17:02:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 17:02:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 17:03:48 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 17:03:49 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 17:03:50 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 17:03:51 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 17:03:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 17:03:57 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 17:09:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 17:09:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 17:09:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 17:10:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 17:10:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 17:10:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 17:14:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 17:14:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 17:14:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 17:21:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 17:21:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 17:21:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 17:26:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 17:26:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 17:26:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 18:42:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 18:42:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 18:42:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 18:54:26 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 18:54:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 18:54:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 18:54:37 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 18:54:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 18:54:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 18:54:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 19:22:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 19:22:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 19:22:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 19:24:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 19:24:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 19:24:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 19:25:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 19:25:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 19:25:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 19:26:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 19:26:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 19:26:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 19:27:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 19:27:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 19:27:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 19:27:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 19:27:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 19:27:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 19:27:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 19:27:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 19:27:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 19:29:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 19:29:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 19:29:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-18 20:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-18 20:50:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-18 20:50:26 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 20:50:30 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 20:50:30 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 20:50:44 --> Could not find the language line "not_generated"
ERROR - 2026-02-18 20:50:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-18 20:50:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-18 20:50:57 --> Could not find the language line "discount_this_action_is_irreversible"
