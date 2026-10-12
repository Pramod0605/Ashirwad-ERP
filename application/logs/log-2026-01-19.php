<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-01-19 08:33:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-19 08:33:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-19 08:34:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:34:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:34:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:34:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 08:34:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 08:34:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 08:34:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:34:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:34:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:34:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 08:34:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 08:34:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 08:34:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:35:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:35:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:35:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 08:35:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 08:35:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 08:35:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:35:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:35:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:35:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:35:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 08:35:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 08:35:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 08:36:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:36:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:36:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:36:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 08:36:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 08:36:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 08:37:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:37:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:37:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:38:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 08:38:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 08:38:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 08:39:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:39:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:39:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:39:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:39:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:39:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:39:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:40:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 08:40:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 08:40:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 08:41:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:41:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:41:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:41:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:41:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 08:41:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 08:41:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 08:41:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:41:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:41:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:42:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 08:42:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 08:42:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 08:42:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:42:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:43:00 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:43:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:43:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 08:43:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 08:43:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 08:44:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:44:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:44:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:44:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:44:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 08:44:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 08:44:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 08:48:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:48:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:48:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:49:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:49:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:49:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 08:49:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 08:49:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 08:49:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 08:59:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 08:59:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 08:59:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:00:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:00:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:00:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:02:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:02:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:02:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:02:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:02:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:02:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:02:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:02:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:02:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:02:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:03:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:03:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:03:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:04:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:04:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:04:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:04:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:04:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:04:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:04:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:05:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:05:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:05:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:05:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:05:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:05:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:05:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:05:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:05:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:07:00 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:07:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:07:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:07:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:07:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:07:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:08:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:08:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:08:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:08:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:08:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:08:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:08:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:08:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:08:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:08:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:08:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:08:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:09:45 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:09:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:09:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:10:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:10:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:10:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:10:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:11:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:11:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:11:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:12:02 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:12:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:12:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:12:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:12:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:12:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:12:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:12:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:12:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:13:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:13:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:13:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:13:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:13:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:13:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:14:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:14:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:14:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:14:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:14:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:14:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:15:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:15:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:15:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:15:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:15:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:15:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:15:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:16:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:16:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:16:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:16:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:17:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:17:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:17:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:18:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:18:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:18:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:19:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:19:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:19:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:21:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:21:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:21:58 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:22:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:22:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:22:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:23:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:23:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:23:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:23:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:23:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:23:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:24:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:24:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:24:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:24:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:25:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:25:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:25:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:25:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:25:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:25:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:25:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:25:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:25:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:26:45 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:26:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:26:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:27:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:27:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:27:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:27:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:27:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:27:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:27:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:27:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:27:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:27:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:28:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:28:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:28:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:28:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:28:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:30:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:30:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:30:59 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:31:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:31:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:31:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:33:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:33:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:33:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:33:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:33:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:33:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:33:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:33:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:33:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:34:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:34:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:34:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:34:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:34:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:34:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:34:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:34:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:34:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:34:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:35:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:35:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:35:58 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:36:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:36:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:36:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:37:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:37:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:37:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:37:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:37:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:37:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:40:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:41:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:41:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:41:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:41:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:41:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:41:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:41:45 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:41:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:41:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:41:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:41:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:44:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:44:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:44:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:44:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:44:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:44:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:44:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:44:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:44:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:47:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:47:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:47:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:48:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:48:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:48:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:48:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:48:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:48:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:49:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:49:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:49:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:50:18 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:50:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:50:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:50:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:50:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:50:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:50:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:50:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:50:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:50:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:50:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:50:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:51:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:51:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:51:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:51:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:51:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:51:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:52:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-19 09:52:38 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-19 09:52:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:52:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:52:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:53:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:53:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:53:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:53:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:53:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:53:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:54:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:54:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:54:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:54:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-19 09:54:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-19 09:54:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:54:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:54:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:54:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:54:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:54:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:54:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:54:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:54:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:54:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:54:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:54:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:55:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:55:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:55:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:55:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:55:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:55:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:55:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:55:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:55:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:55:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:55:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:55:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:56:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:56:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:56:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:56:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:56:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:56:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:57:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:57:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:57:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 09:59:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:59:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:59:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 09:59:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 09:59:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 09:59:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:00:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:00:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:00:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:01:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:01:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:01:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:02:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:02:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:02:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:02:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:02:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:02:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:03:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:03:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:03:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:03:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:03:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:03:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:04:09 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:04:18 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:04:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:04:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:04:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:04:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:05:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:05:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:05:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:07:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:07:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:07:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:08:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:08:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:08:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:09:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:09:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:09:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:09:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:09:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:09:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:10:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:10:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:10:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:11:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:11:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:11:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:11:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:11:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:11:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:13:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:13:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:13:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:14:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:14:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:14:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:15:00 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:15:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:15:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:15:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:15:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:15:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:15:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:15:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:15:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:15:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:15:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:15:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:16:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:16:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:16:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:16:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:16:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:16:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:18:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:18:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:18:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:18:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:18:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:18:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:19:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:19:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:19:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:19:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:19:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:19:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:19:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:19:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:19:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:20:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:20:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:20:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:22:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:22:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:22:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:22:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:23:00 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:23:00 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:23:07 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:23:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:23:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:24:18 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:24:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:24:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:24:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:24:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:24:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:24:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:24:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:24:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:24:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:24:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:24:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:24:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:24:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:24:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:25:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:25:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:25:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:25:29 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:25:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:25:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:25:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:25:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:25:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:26:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:26:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:26:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:27:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:27:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:27:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:27:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:27:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:27:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:28:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:28:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:28:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:28:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:28:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:28:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:29:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:29:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:29:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:29:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:29:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:29:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:29:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:30:03 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:30:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:30:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:30:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:30:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:30:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:30:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:30:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:30:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:31:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:31:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:31:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:32:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:32:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:32:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:32:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:33:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:33:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:34:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:34:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:34:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:34:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:34:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:34:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:35:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:35:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:35:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:35:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:35:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:35:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:35:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:35:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:35:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:38:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:38:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:38:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:38:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:38:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:38:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:38:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:38:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:38:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:39:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:39:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:39:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:39:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:39:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:39:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:40:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:40:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:40:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:40:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:40:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:40:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:40:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:40:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:40:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:41:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:41:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:41:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:42:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:42:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:42:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:42:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:42:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:42:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:43:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:43:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:43:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:43:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:43:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:43:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:43:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:43:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:43:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:43:31 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:43:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:43:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:44:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:44:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:44:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:44:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:44:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:44:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:44:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:44:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:44:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:44:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:44:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:44:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:45:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:45:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:45:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:46:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:46:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:46:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:46:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:46:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:46:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:46:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:46:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:46:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:47:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:47:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:47:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:49:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:49:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:49:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:50:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:50:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:50:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:50:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:50:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:50:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:50:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:50:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:50:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:53:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:53:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:53:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:55:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:55:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:55:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:55:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:55:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:55:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:56:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:56:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:56:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:56:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:56:45 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:56:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:56:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:56:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:56:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:56:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:56:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:56:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:56:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:56:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:56:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:57:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:57:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:57:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:58:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:58:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:58:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 10:58:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:58:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:58:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:59:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:59:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:59:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:59:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:59:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:59:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 10:59:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 10:59:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 10:59:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:02:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:02:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:02:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:04:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:04:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:04:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:04:24 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:04:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:04:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:04:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:05:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:05:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:05:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:05:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:05:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:05:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:07:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:07:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:07:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:12:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:12:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:12:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:12:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:12:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:12:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:12:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:12:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:12:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:13:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:13:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:13:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:13:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:13:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:13:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:14:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:14:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:14:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:14:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:14:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:14:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:14:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:14:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:14:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:15:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:15:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:15:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:15:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:15:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:15:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:18:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:18:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:18:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:20:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:20:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:20:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:20:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:20:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:20:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:21:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:21:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:21:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:21:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:21:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:21:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:21:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:21:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:21:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:23:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:23:36 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:23:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:23:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:23:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:23:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:24:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:24:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:24:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:24:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:24:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:24:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:24:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:24:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:24:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:24:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:24:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:24:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:24:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:24:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:24:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:26:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:26:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:26:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:26:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:26:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:26:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:26:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:26:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:26:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:32:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:32:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:32:43 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:32:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:32:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:32:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:33:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:33:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:33:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:33:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:33:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:33:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:34:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:34:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:34:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:35:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:35:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:35:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:35:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:35:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:35:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:35:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:35:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:35:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:36:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:36:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:36:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:36:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:36:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:36:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:37:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:37:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:37:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:37:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:37:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:37:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:37:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:37:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:37:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:38:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:38:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:38:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:40:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:40:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:40:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:41:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:41:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:41:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:42:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:42:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:42:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:43:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:43:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:43:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:43:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:43:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:43:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:44:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:44:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:44:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:45:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:45:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:45:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:47:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:47:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:47:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:47:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:47:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:47:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:48:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:48:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:48:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:49:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:49:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:49:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:54:08 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:54:08 --> Could not find the language line "student1"
ERROR - 2026-01-19 11:54:12 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:54:12 --> Could not find the language line "student1"
ERROR - 2026-01-19 11:54:18 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:56:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-19 11:56:30 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-19 11:56:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:56:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:56:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:58:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:58:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:58:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:59:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:59:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:59:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 11:59:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:59:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:59:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 11:59:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 11:59:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 11:59:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:00:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:00:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:00:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:00:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:00:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:00:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:06:35 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:06:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:06:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:06:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:06:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:06:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:07:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:07:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:07:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:11:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:11:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:11:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:11:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:11:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:11:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:12:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:12:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:12:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:12:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:12:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:12:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:12:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:12:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:12:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:13:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:13:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:13:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:13:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:13:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:13:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:13:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:13:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:13:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:13:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:13:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:13:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:15:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:15:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:15:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:15:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:15:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:15:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:16:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:16:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:16:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:16:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:16:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:16:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:17:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:17:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:17:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:17:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:17:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:17:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:17:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:17:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:17:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:18:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:18:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:18:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:18:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:18:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:18:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:19:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:19:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:19:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:22:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:22:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:22:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:22:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:22:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:22:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:22:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:22:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:22:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:23:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:23:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:23:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:24:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:24:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:24:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:26:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:26:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:26:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:33:40 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:33:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:33:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:34:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:34:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:34:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:35:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:35:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:35:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:35:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:35:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:35:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:35:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:35:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:35:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:35:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:36:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:36:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:36:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:36:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:36:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:36:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:38:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:38:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:38:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:38:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:38:54 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:38:54 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:40:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:40:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:40:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:40:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:40:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:40:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:40:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:40:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:40:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:41:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:41:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:41:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:41:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:41:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:41:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:42:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:42:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:42:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:43:42 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:43:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:43:46 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:43:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:43:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:43:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:44:10 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:44:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:44:16 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:44:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:44:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:44:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:44:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:44:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:44:54 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:45:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:45:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:45:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:45:22 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:45:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:45:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:45:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:45:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:45:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:46:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:46:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:46:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:46:25 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:46:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:46:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 12:46:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:46:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:46:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:46:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:46:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:46:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:49:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:49:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:49:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:53:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:54:00 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:54:00 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:55:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:55:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:55:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:55:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:55:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:55:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 12:59:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 12:59:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 12:59:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:05:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-19 13:05:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-19 13:06:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:06:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:06:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:08:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:08:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:08:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:10:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:10:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:10:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:10:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:10:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:10:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:13:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:13:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:13:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:16:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:16:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:16:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:18:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:18:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:18:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:19:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:19:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:19:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:19:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:19:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:19:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:19:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:19:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:19:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:19:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:19:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:19:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:19:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:19:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:19:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:20:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:20:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:20:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:20:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:20:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:20:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:21:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:21:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:21:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:23:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:23:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:23:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:23:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:23:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:23:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:24:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:24:40 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:24:40 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:26:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:26:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:26:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:27:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:27:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:27:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:27:31 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3415, NULL, 4000, 'D', '')
ERROR - 2026-01-19 13:27:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:27:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:27:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:29:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 13:29:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 13:29:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 13:29:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:29:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:29:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:31:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:31:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:31:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:32:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 13:32:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 13:32:41 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 13:32:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:32:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:32:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:34:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:34:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:34:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:49:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 13:49:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 13:49:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 13:50:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:50:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:50:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:50:07 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 13:50:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 13:50:11 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 13:50:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 13:50:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:50:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:50:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:52:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:52:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:52:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:53:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:53:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:53:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:54:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 13:54:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 13:54:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 13:54:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:54:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:54:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 13:59:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 13:59:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 13:59:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:04:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:04:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:04:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:07:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:07:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:07:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:08:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:08:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:08:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:09:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:09:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:09:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:12:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:12:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:12:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:14:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:14:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:14:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:14:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:14:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:14:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:15:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:15:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:15:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:16:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:16:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:16:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:16:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:16:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:16:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:18:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:18:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:18:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:18:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:18:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:18:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:19:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:19:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:19:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:19:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:19:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:19:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:20:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:20:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:20:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:20:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:20:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:20:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:22:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:22:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:22:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:24:20 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:24:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:24:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:24:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:24:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:24:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:25:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:25:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:25:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:25:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:25:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:25:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:25:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:25:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:25:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:25:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:25:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:25:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:26:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:26:48 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:26:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:26:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:26:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:26:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:30:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:30:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:30:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:30:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:30:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:30:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:31:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:31:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:31:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:39:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:39:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:39:14 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:39:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:39:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:39:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:39:27 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:39:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:39:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:39:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:39:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:39:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:40:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:40:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:40:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:41:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:41:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:41:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:44:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:44:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:44:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:44:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:44:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:44:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:45:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:45:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:45:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:45:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-19 14:45:56 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-19 14:46:01 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:46:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:46:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:46:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:46:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:46:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:46:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:46:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:46:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:49:55 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:50:00 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:50:00 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:50:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:50:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:50:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:50:15 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:50:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:50:19 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:50:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:50:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:50:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:50:52 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 14:54:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:54:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:54:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:57:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:57:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:57:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:57:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:57:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:57:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:57:29 --> Query error: Column 'ledger_id' cannot be null - Invalid query: INSERT INTO `cyc_entryitems` (`entry_id`, `ledger_id`, `amount`, `dc`, `narration`) VALUES (3423, NULL, 6000, 'D', '')
ERROR - 2026-01-19 14:57:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:57:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:57:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 14:59:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 14:59:51 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 14:59:51 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:01:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:01:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:01:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:04:18 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 15:04:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 15:04:21 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 15:04:26 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 15:05:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:05:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:05:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:05:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:05:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:05:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:06:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:06:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:06:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:10:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:10:30 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:10:30 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:15:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:15:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:15:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:15:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:15:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:15:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:16:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:16:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:16:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:16:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:16:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:16:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:18:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:18:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:18:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:18:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:18:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:18:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:23:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:23:52 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:23:52 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:24:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:24:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:24:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:24:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:24:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:24:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:29:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:29:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:29:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:29:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:29:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:29:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:30:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:30:16 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:30:16 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:31:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:31:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:31:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:32:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:32:43 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:32:43 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:33:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:33:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:33:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:33:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:33:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:33:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:33:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:33:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:33:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:33:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:33:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:33:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:33:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:33:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:33:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:33:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:33:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:33:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:33:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:33:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:33:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:36:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:36:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:36:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:36:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:36:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:36:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:37:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:37:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:37:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:38:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:38:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:38:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:42:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:42:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:42:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:51:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:51:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:51:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 15:57:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 15:57:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 15:57:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:01:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:01:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:01:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:01:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:01:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:01:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:04:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:04:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:04:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:05:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:05:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:05:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:08:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:08:06 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:08:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:08:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:08:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:08:23 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:08:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:08:30 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:08:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:08:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:08:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:08:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:08:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:08:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:08:45 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:08:49 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:08:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:08:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:08:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:08:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:09:28 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:09:32 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:09:33 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:09:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:09:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:09:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:10:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:10:13 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:10:13 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:14:56 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:15:04 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:15:05 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:19:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:19:01 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:19:01 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:26:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:26:35 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:26:35 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:28:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:28:32 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:28:32 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:28:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:28:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:28:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:29:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:29:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:29:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:29:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:29:42 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:29:42 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:29:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:29:47 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:29:47 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:30:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:30:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:30:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:39:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:39:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:39:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:41:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:41:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:41:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:42:13 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:42:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:42:17 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:42:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:42:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:42:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:46:53 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:46:57 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:46:58 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:47:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:47:06 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:47:06 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:54:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:54:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:54:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:54:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:54:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:54:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:54:38 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:54:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:54:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:54:51 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 16:54:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:54:58 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:54:58 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:54:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:54:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:54:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:56:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:56:04 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:56:04 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:57:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:57:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:57:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 16:57:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 16:57:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 16:57:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 17:15:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-19 17:15:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-19 17:15:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 17:15:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 17:15:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 17:16:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 17:16:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 17:16:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 17:18:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 17:18:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 17:18:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 17:18:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 17:18:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 17:18:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 17:21:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 17:21:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 17:21:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 17:22:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 17:22:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 17:22:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 17:30:34 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 17:30:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 17:30:39 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 17:30:47 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 17:31:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 17:31:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 17:31:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 17:43:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 17:43:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 17:43:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 17:55:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 17:55:12 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 17:55:12 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 17:55:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 17:55:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 17:55:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 18:01:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2026-01-19 18:01:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2026-01-19 18:01:37 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 18:01:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 18:01:44 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 18:01:50 --> Could not find the language line "not_generated"
ERROR - 2026-01-19 18:15:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 18:15:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 18:15:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 18:17:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 18:17:39 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 18:17:39 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 18:21:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 18:21:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 18:21:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 18:21:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 18:21:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 18:21:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 18:38:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 18:38:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 18:38:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 18:38:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 18:38:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 18:38:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 18:39:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 18:39:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 18:39:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 18:42:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 18:42:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 18:42:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 18:43:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 18:43:03 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 18:43:03 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 19:18:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 19:18:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 19:18:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 19:19:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 19:19:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 19:19:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 19:20:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 19:20:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 19:20:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 19:20:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 19:20:50 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 19:20:50 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 19:22:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 19:22:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 19:22:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2026-01-19 19:22:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2026-01-19 19:22:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2026-01-19 19:22:57 --> Could not find the language line "discount_this_action_is_irreversible"
