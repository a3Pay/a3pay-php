<?php
/**
 * config.php
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

//Payment Collection
$payments = new a3\payments('w6gfpqde8a3u5lauu7r7xkfqhkinslvxrsybr0');

//a3 Apps
$account = new a3\account('w6gfpqde8a3u5lauu7r7xkfqhkinslvxrsybr0');

//Wallet
$btc = new a3\wallet('praoubf8d2e1584059489f8ffa3663b3223df2');
$usdt = new a3\wallet('praoubf8d2e1584059489f8ffa3663b3223df2');
$eth = new a3\wallet('praoubf8d2e1584059489f8ffa3663b3223df2');

//Marketa
$marketa = new a3\marketa;


//Create Transaction
//$resp = $payments->create_transaction($amount, $label, $currency, $coin, $success_callback, $error_callback);


//Get account information Transaction
$resp = $account->get_account_info();
print_r($resp);

//Get new bitcoin address
$label = 'default';
//$resp = $btc->get_new_address($label);
//print_r($resp);
//Get new tether USDT address
//$resp = $usdt->get_new_address($label);
//Get new tether Ethereum address
//$resp = $eth->get_new_address($label);


//Get live exchange rates
//$resp = $marketa->live_data();
//print_r($resp);

