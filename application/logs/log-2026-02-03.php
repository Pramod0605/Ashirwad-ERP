<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-02-03 10:00:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-03 10:00:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-03 10:00:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 10:00:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 10:00:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 10:22:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-03 10:22:33 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-03 10:24:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 10:24:31 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 10:24:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 10:24:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 10:42:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 10:42:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 10:42:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 11:15:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-03 11:15:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-03 11:16:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 11:16:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 11:16:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 11:16:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 11:16:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 11:16:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 11:17:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 11:17:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 11:17:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 11:20:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 11:20:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 11:20:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 11:23:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 11:23:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 11:23:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 11:28:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-03 11:28:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-03 11:30:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 11:30:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 11:30:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 11:36:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-03 11:36:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-03 11:36:48 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 11:36:53 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 11:36:54 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 11:37:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 11:37:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 11:37:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 11:39:48 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 11:40:30 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 11:40:36 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 11:40:36 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 11:43:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-03 11:43:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-03 11:43:08 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 11:45:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 11:45:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 11:45:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 11:48:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 11:48:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 11:48:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 11:50:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 11:50:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 11:50:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 11:52:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 11:52:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 11:52:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 11:53:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 11:53:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 11:53:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 11:54:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 11:54:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 11:54:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 11:55:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 11:55:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 11:55:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 11:59:05 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 11:59:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 11:59:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 11:59:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 11:59:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 11:59:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 12:25:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 12:25:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 12:25:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 12:25:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 12:25:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 12:25:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 12:26:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 12:26:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 12:26:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 12:26:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 12:26:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 12:26:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 12:27:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 12:27:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 12:27:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 12:32:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-03 12:32:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-03 12:41:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-03 12:41:25 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-03 12:41:28 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 12:41:32 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 12:41:32 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 12:41:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 12:41:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 12:41:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 12:44:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 12:44:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 12:44:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:08:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 13:08:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 13:11:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:11:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:11:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:11:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:11:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:11:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:11:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:11:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:11:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:17:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:24:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:24:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:24:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:24:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:24:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:24:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:24:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/admin/route/studentroutedetails.php 153
ERROR - 2026-02-03 13:28:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:28:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:28:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:30:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:30:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:30:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:31:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:31:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:31:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:32:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:32:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:32:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:33:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:33:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:33:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:35:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:35:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:35:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:36:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:36:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:36:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:40:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-03 13:40:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-03 13:40:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 13:40:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 13:40:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:40:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:40:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:41:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:41:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:41:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:41:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:41:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:41:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:41:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:41:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:41:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:41:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:41:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:41:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:42:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:42:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:42:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:42:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:42:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:42:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:43:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:43:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:43:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:44:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:44:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:44:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:50:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:50:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:50:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:51:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:51:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:51:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:51:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:51:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:51:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:54:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:54:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:54:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:55:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:55:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:55:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 13:56:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 13:56:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 13:56:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:14:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:14:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:14:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:18:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:18:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:18:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:18:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:18:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:18:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:18:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:18:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:18:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:20:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:20:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:20:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:20:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:20:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:20:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:20:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:20:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:20:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:20:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:20:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:20:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:21:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:21:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:21:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:24:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:24:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:24:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:24:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:24:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:24:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:25:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:25:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:25:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:28:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:28:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:28:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:28:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:28:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:28:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:31:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:31:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:31:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:31:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:31:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:31:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:32:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:32:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:32:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:33:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:33:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:33:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:34:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:34:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:34:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:35:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:35:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:35:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:37:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:37:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:37:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:38:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:38:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:38:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:39:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:39:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:39:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:40:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:40:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:40:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:41:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:41:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:41:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:41:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:41:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:41:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:42:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:42:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:42:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:42:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:42:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:42:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:43:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:43:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:43:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:44:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:44:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:44:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:44:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:44:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:44:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:45:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:45:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:45:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:45:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:45:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:45:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:46:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:46:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:46:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:47:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:47:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:47:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:47:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:47:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:47:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:48:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:48:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:48:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:48:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:48:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:48:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:49:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:49:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:49:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:49:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:49:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:49:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:50:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:50:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:50:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:50:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:50:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:50:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:51:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:51:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:51:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:51:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:51:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:51:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:51:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:51:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:51:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:52:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:52:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:52:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:53:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:53:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:53:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:54:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:54:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:54:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:54:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:54:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:54:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:54:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:54:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:54:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:55:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:55:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:55:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:55:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:55:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:55:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:56:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:56:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:56:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:57:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:57:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:57:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:59:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:59:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:59:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 14:59:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 14:59:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 14:59:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:02:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:02:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:02:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:04:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:04:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:04:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:06:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:06:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:06:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:07:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:07:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:07:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:10:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:10:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:10:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:10:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:10:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:10:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:11:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:11:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:11:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:12:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:12:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:12:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:12:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:12:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:12:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:13:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:13:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:13:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:13:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:13:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:13:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:13:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:13:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:13:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:14:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:14:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:14:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:14:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:14:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:14:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:16:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:16:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:16:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:16:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:16:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:16:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:17:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:17:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:17:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:18:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:18:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:18:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:19:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:19:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:19:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:19:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:19:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:19:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:20:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:20:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:20:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:21:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:21:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:21:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:21:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:21:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:21:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:24:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:24:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:24:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:24:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-03 15:24:52 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-03 15:27:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:27:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:27:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:27:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 15:27:17 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 15:27:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:27:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:27:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:28:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:28:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:28:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:28:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-03 15:28:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-03 15:28:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:28:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:28:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:28:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:28:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:28:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:28:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:28:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:28:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:29:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:29:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:29:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:29:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:29:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:29:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:29:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:29:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:29:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:30:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:30:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:30:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:30:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:30:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:30:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:30:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:30:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:30:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:31:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:31:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:31:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:31:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:31:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:31:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:31:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:31:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:31:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:31:39 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 15:31:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:31:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:31:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:31:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:31:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:31:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:32:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:32:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:32:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:33:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:33:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:33:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:33:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:33:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:33:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:33:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:33:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:33:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:34:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:34:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:34:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:34:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:34:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:34:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:35:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:35:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:35:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:35:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:35:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:35:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:35:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:35:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:35:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:35:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:35:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:35:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:36:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:36:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:36:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:36:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:36:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:36:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:36:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:36:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:36:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:37:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:37:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:37:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:38:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:38:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:38:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:38:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:38:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:38:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:39:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:39:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:39:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:39:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:39:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:39:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:39:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:39:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:39:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:40:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:40:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:40:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:41:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:41:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:41:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:42:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:42:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:42:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:43:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:43:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:43:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:43:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:43:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:43:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:44:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:44:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:44:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:44:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:44:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:44:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:44:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:44:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:44:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:44:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:44:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:44:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:45:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:45:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:45:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:46:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:46:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:46:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:46:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:46:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:46:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:46:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:46:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:46:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:46:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:46:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:46:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:47:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:47:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:47:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:49:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:49:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:49:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:49:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:49:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:49:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:50:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:50:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:50:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:50:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:50:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:50:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:52:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:52:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:52:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:53:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 15:53:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 15:53:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 15:55:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:55:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:55:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:55:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:55:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:55:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 15:59:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 15:59:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 15:59:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:00:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:00:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:00:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:01:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:01:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:01:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:01:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:01:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:01:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:01:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:01:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:01:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:01:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:01:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:01:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:02:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:02:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:02:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:02:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:02:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:02:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:03:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:03:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:03:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:16:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:16:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:16:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:17:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:17:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:17:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:23:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:23:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:23:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:25:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:25:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:25:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:26:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:26:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:26:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:27:10 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 16:27:14 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 16:27:15 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 16:27:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:27:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:27:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:31:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:31:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:31:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:32:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:32:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:32:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:47:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:47:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:47:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:51:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:51:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:51:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:51:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:51:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:51:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:56:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:56:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:56:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 16:59:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 16:59:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 16:59:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:00:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:00:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:00:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:01:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:01:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:01:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:02:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:02:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:02:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:02:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:02:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:02:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:03:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:03:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:03:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:03:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:03:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:03:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:04:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:04:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:04:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:04:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:04:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:04:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:05:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:05:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:05:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:10:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:10:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:10:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:11:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:11:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:11:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:12:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:12:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:12:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:12:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:12:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:12:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:13:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:13:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:13:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:14:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:14:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:14:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:14:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:14:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:14:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:15:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:15:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:15:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:15:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:15:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:15:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:16:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:16:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:16:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:17:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:17:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:17:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:17:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:17:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:17:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:18:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:18:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:18:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:18:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:18:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:18:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:19:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:19:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:19:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:19:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:19:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:19:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:20:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:20:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:20:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:23:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:23:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:23:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:24:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:24:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:24:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:25:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:25:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:25:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:25:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:25:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:25:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:26:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:26:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:26:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:26:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-03 17:26:48 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-03 17:26:52 --> Could not find the language line "not_generated"
ERROR - 2026-02-03 17:28:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:28:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:28:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:30:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:30:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:30:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:31:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:31:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:31:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:32:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:32:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:32:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:32:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:32:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:32:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:34:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:34:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:34:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:35:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:35:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:35:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:36:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:36:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:36:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:36:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:36:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:36:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:36:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:36:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:36:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:37:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:37:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:37:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:37:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:37:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:37:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:38:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:38:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:38:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:38:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:38:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:38:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:42:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:42:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:42:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:43:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:43:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:43:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:43:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:43:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:43:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:45:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:45:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:45:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:50:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:50:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:50:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:51:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:51:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:51:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:51:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:51:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:51:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:51:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:51:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:51:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:52:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:52:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:52:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:52:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:52:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:52:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:52:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:52:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:52:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:53:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:53:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:53:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:54:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:54:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:54:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:55:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:55:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:55:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:56:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:56:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:56:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:56:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:56:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:56:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:57:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:57:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:57:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:57:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:57:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:57:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:58:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:58:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:58:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 17:59:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 17:59:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 17:59:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:01:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:01:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:01:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:02:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:02:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:02:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:03:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:03:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:03:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:05:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:05:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:05:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:05:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:05:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:05:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:06:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:06:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:06:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:06:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:06:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:06:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:07:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:07:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:07:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:07:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:07:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:07:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:08:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:08:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:08:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:10:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:10:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:10:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:19:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:19:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:19:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:19:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:19:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:19:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:20:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:20:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:20:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:20:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:20:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:20:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:21:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:21:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:21:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:23:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:23:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:23:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:23:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:23:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:23:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:23:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:23:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:23:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:24:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:24:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:24:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:24:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:24:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:24:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:24:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:24:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:24:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:33:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:33:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:33:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:33:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:33:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:33:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:34:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:34:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:34:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:34:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:34:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:34:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:34:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:34:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:34:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:35:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:35:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:35:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:35:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:35:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:35:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:35:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:35:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:35:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:35:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:35:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:35:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:36:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:36:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:36:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:36:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:36:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:36:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:37:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:37:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:37:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:37:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:37:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:37:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:39:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:39:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:39:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:39:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:39:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:39:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:42:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:42:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:42:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:42:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:42:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:42:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:42:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:42:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:42:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:42:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:42:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:42:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:43:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:43:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:43:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:43:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:43:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:43:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:44:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:44:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:44:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:44:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:44:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:44:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:44:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:44:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:44:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:45:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:45:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:45:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:45:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:45:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:45:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:45:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:45:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:45:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:46:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:46:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:46:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:46:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:46:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:46:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:46:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:46:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:46:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 18:47:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 18:47:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 18:47:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 19:00:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 19:00:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 19:00:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 19:01:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 19:01:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 19:01:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 19:02:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:03:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:04:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:06:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:06:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:07:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:15:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:16:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:16:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:17:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:17:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:18:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:18:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:19:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:22:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:23:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:24:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:24:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:24:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:25:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:25:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:25:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:25:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:25:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:25:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:26:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-03 19:26:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-03 19:26:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:26:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:26:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:26:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:26:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:26:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:33:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-02-03 19:33:01 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-02-03 19:33:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-02-03 19:33:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-02-03 19:33:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-02-03 19:39:15 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4210688 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 275
ERROR - 2026-02-03 19:39:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ashir611/public_html/application/views/financereports/studentAcademicReport.php 78
ERROR - 2026-02-03 19:40:23 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 20480 bytes) /home/ashir611/public_html/system/database/DB_query_builder.php 301
ERROR - 2026-02-03 19:40:53 --> Severity: Error --> Allowed memory size of 33554432 bytes exhausted (tried to allocate 4210688 bytes) /home/ashir611/public_html/application/views/financereports/collection_report.php 279
