<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

ERROR - 2017-11-12 00:14:02 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column '0' in 'where clause' with query: "SELECT COUNT(*) as count, date_usage FROM `voucher` WHERE `0` = 'date_usage' AND `1` = 'IS NOT' AND `2` IS null GROUP BY `date_usage`" in /Library/WebServer/Documents/voucherbox/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-11-12 00:18:41 --> Notice - Undefined index: usage_date in /Library/WebServer/Documents/voucherbox/fuel/app/views/dashboard/index.php on line 180
ERROR - 2017-11-12 00:19:34 --> Parsing Error - parse error in /Library/WebServer/Documents/voucherbox/fuel/app/views/dashboard/index.php on line 182
ERROR - 2017-11-12 00:19:35 --> Parsing Error - parse error in /Library/WebServer/Documents/voucherbox/fuel/app/views/dashboard/index.php on line 182
