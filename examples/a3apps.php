<?php
/**
 * a3apps.php
 *
 * App Configuration
 *
 * @author     a3Pay
 * @license    MIT
 * @version    1.0
 * @since      File available since Release 1.0
 * @copyright  2022 a3 Payments www.a3pay.co
 */
require_once '../vendor/autoload.php';

//a3 Apps
$account = new a3\account('w6gfpqde8a3u5lauu7r7xkfqhkinslvxrsybr0');

//Get account information Transaction
$resp = $account->get_account_info();
print_r($resp);
