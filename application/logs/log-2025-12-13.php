<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-13 09:41:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-13 09:41:01 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-13 09:41:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:41:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:41:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:47:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:47:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:47:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:47:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:47:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:47:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:47:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:47:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:47:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:47:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:47:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:47:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:47:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:48:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:49:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:49:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:49:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:49:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:49:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:49:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:49:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:49:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:49:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:49:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:49:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:49:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:49:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:49:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:50:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:50:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:50:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:50:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:50:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:50:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:50:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:50:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:50:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:50:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:50:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:50:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:50:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:51:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:51:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:51:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:51:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:51:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:51:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:51:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:51:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:51:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:52:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:52:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:52:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:52:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:52:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:23 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:56:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:57:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:57:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:57:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:57:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:57:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:57:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:57:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:57:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:57:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:57:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:57:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:57:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:57:50 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:58:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:58:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:58:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:58:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:58:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:58:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:58:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:58:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:58:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:58:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:58:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:58:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:58:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:58:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:59:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:59:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:59:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:59:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:59:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:59:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:59:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:59:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 09:59:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:03:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:03:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:03:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:03:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:04:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:04:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:04:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:04:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:04:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:04:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:04:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:04:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:11:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:11:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:11:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:11:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:39 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:12:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:13:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:13:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:13:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:13:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:13:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:13:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:13:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:13:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:13:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:13:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:13:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:13:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:13:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:13:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:14:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:14:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:14:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:14:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:14:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:14:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:14:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:14:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:14:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:14:34 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:14:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:14:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:14:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:14:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:15:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:16:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:16:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:16:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:16:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:16:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:16:20 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:16:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:16:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:16:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:16:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:16:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:16:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:16:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:16:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:04 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:05 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:25 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:17:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:18:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:18:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:18:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:18:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:18:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:18:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:18:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:18:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:18:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:18:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:19:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:20:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:21:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:21:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:21:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:21:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:21:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:21:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:21:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:21:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:21:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:21:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:21:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:21:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:21:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:22:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:22:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:22:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:22:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:22:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:22:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:22:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:22:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:22:42 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:22:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:22:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:22:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:22:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:22:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:23:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 10:23:49 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 10:23:49 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 10:23:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:23:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:23:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:23:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:24:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 10:24:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 10:24:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 10:24:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:24:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:24:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:24:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:24:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:24:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:24:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:24:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:25:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:25:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:25:32 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:25:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:25:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:25:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:25:58 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:25:59 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:26:18 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:26:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:26:40 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:26:41 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:29:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:29:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:29:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:29:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:14 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:30:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:31:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:31:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:31:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:31:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:31:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:31:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:31:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:31:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:31:31 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:31:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:31:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:31:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:31:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:31:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:32:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-13 10:32:06 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-13 10:34:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:34:47 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:34:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:34:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:34:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 10:34:56 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 10:34:56 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 10:35:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:35:02 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:35:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:35:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:35:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:35:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 10:35:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 10:35:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 10:35:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 10:35:19 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 10:35:19 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 10:37:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-13 10:37:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-13 10:43:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:54 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:43:55 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:47:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:47:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:47:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:47:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:47:43 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:47:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:47:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:47:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:47:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:01 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:17 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:29 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:45 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:51:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:52:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:52:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:52:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:53:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 10:53:44 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 11:12:57 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 11:13:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-13 11:13:05 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-13 11:13:07 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 11:13:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 11:13:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 11:13:22 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 11:16:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 11:16:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-13 11:16:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-13 11:17:00 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 11:17:06 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 11:17:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 11:17:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 11:17:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 11:25:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 11:25:14 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 11:25:14 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 11:26:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-13 11:26:26 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-13 11:26:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 11:26:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 11:26:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 11:30:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 11:30:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 11:30:16 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 11:30:19 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 11:40:10 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 11:40:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 11:40:15 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 11:45:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 11:45:45 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 11:45:45 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 11:48:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 11:48:10 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 11:48:10 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 11:52:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 11:52:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 11:52:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 11:56:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 11:56:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 11:56:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 12:07:08 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:07:51 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:07:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:07:56 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:09:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:09:03 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:09:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:09:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 12:09:28 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 12:09:28 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 12:10:21 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:10:33 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:11:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 12:11:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 12:11:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 12:14:11 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:20:37 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:25:27 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:34:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 12:34:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 12:34:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 12:37:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 12:37:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 12:37:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 12:38:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-13 12:38:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-13 12:38:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:38:35 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:38:36 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:38:38 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:38:46 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:38:48 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:38:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:38:52 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:38:53 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:39:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 12:39:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 12:39:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 12:39:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 12:39:25 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 12:39:25 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 12:39:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 12:39:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 12:39:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 12:40:09 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:40:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:40:12 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:40:13 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:40:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 12:40:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 12:40:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 12:40:24 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:40:26 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:40:28 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:40:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:40:30 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 12:40:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 12:40:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 12:40:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 12:41:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 12:41:55 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 12:41:55 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 12:43:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 12:43:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 12:43:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 12:44:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 12:44:23 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 12:44:23 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 12:44:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 12:44:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 12:44:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 13:36:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 13:36:07 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 13:36:07 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 13:37:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-13 13:37:24 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-13 13:40:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 13:40:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 13:40:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 13:40:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 13:40:36 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 13:40:36 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 13:41:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 13:41:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 13:41:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 13:42:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 13:42:33 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 13:42:33 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 13:44:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 13:44:29 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 13:44:29 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 13:46:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 13:46:09 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 13:46:09 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 13:48:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 13:48:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 13:48:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 13:49:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 13:49:59 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 13:49:59 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 13:51:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 13:51:57 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 13:51:57 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 13:56:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 13:56:15 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 13:56:15 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 14:00:49 --> Could not find the language line "not_generated"
ERROR - 2025-12-13 14:08:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 14:08:41 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 14:08:41 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 14:10:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 14:10:21 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 14:10:21 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 14:26:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 14:26:53 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 14:26:53 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 14:27:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-13 14:27:56 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
ERROR - 2025-12-13 14:28:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 14:28:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 14:28:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 14:38:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 14:38:38 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 14:38:38 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 14:55:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 14:55:11 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 14:55:11 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 14:57:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 14:57:48 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 14:57:48 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 15:00:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 15:00:18 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 15:00:18 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 15:02:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 15:02:34 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 15:02:34 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 15:27:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 15:27:20 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 15:27:20 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 15:32:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 15:32:22 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 15:32:22 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 15:33:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 15:33:44 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 15:33:44 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 15:35:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 15:35:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 15:35:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 15:38:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 15:38:02 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 15:38:02 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 15:40:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 15:40:08 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 15:40:08 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 15:42:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 15:42:31 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 15:42:31 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 15:45:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 15:45:46 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 15:45:46 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 15:58:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 15:58:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 15:58:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 16:00:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 16:00:24 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 16:00:24 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 16:03:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 16:03:27 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 16:03:27 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 16:15:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 16:15:05 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 16:15:05 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 16:17:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 16:17:37 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 16:17:37 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 16:25:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 16:25:26 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 16:25:26 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 16:26:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/ashir611/public_html/application/controllers/Studentfee.php 430
ERROR - 2025-12-13 16:26:17 --> Could not find the language line "are_you_sure_want_to_revert"
ERROR - 2025-12-13 16:26:17 --> Could not find the language line "discount_this_action_is_irreversible"
ERROR - 2025-12-13 17:09:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`led...' at line 1 - Invalid query: SELECT SUM(amount) as total, `date`, MONTH(date) as month, YEAR(date) as year, DATE_FORMAT(`date`, "%Y-%m") as offset
FROM `cyc_entryitems`
LEFT JOIN `cyc_ledgers` ON `cyc_entryitems`.`ledger_id`=`cyc_ledgers`.`id`
LEFT JOIN `cyc_entries` ON `cyc_entries`.`id`=`cyc_entryitems`.`entry_id`
WHERE `cyc_ledgers`.`group_id` IN('31', '32', '11')
AND `cyc_entries`.`date` <= NOW() and `cyc_entries`.`date` >= Date_add(Now(),interval - 12 month)
GROUP BY `offset`
ERROR - 2025-12-13 17:09:18 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/ashir611/public_html/application/models/Finance/Reports_model.php 185
