<?php
//Autoload classes using composer
require_once '../vendor/autoload.php';

//Include the payments collection class directly from path
//require_once '../vendor/a3pay/php/dist/payments.php';

//Ignite the Payment Collection Class Using Your a3Pay Account Taken
$mode = 'test'; // 'live' or 'test'
$token = 'w6gfpqde8a3u5lauu7r7xkfqhkinslvxrsybr0'; //To know more about tokens and how to get yours follow here (https://a3pay.co/docs/#access_token)
$payments = new a3\payments($token, $mode);


//Using the create_transaction function
$category = 'checkout'; // 'checkout' or 'donation'
$amount = 1000;
$label = 'frgtyuy4';
$currency = 'USD';
$coin = 'BTC,USDT';
$success_url = 'https://my_domain.com/success_callback?id=456ytgre56';
$error_url = 'https://my_domain.com/error_callback?id=456ytgre56';
$resp = $payments->create_transaction($category, $amount, $label, $currency, $coin, $success_url, $error_url);
//Using the create_transaction function without callback urls
$resp = $payments->create_transaction($category, $amount, $label, $currency, $coin, null, null);


//Using the get_tx_info function
$txid = 'w0ogbja0cfs7rp466';
$resp = $payments->get_tx_info($txid);


//Using the get_tx_list function
$limit = 3;
$resp = $payments->get_tx_list($limit);

