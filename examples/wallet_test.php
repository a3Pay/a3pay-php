<?php
//Autoload classes using composer
require_once '../vendor/autoload.php';

//Include the wallet class directly from path
//require_once '../vendor/a3pay/php/dist/wallet.php';

//Ignite the wallet Class Using Your wallet api_key
$btc_api_key = 'praoubf8d2e1584059489f8ffa3663b3223df2'; //For Bitcoin
$usdt_api_key = '9f8ffbf8d2e1584059489f8ffa3663b3223df2'; // For Tether USDT
$eth_api_key = 'praoubf8d2e1584059489f8ffa3663b3223df2'; // For Ethereum
//To know more about wallet api keys and how to get yours follow here (https://a3pay.co/docs/#api_key)
$eth = new a3\wallet($eth_api_key);


//Using the get_new_address function
$label = 'wsedrftgyh';
$resp = $eth->get_new_address($label);


//Using the get_balance function
$resp = $eth->get_balance();


//Using the get_my_addresses function
$limit = 5;
$resp = $eth->get_my_addresses($limit);


//Using the get_address_balance function
$address = '0x5b356742908bf309f2731ec8694167cbe9b3bde7';
$resp = $eth->get_address_balance($address);


//Using the get_address_by_label function
$label = 'default';
$resp = $eth->get_address_by_label($label);


//Using the get_network_fee_estimate function
$resp = $eth->get_network_fee_estimate();


//Using the get_transactions function
$limit = 5;
$resp = $eth->get_transactions($limit);


//Using the get_transaction function
$txid = '0xd89a37efdbe6f706224750c7cd33d8da0d5aa55b7f214465bf178b60f7699933';
$resp = $eth->get_transaction($txid);


//Using the send_to_address function
$address = '0xd89a37efdbe6f706224750c7cd33d8da';
$amount = '0.2';
$from = '0xd89a37efdbe6f706224750c7cd33d8da';
$resp = $eth->send_to_address($address, $amount, $from);
//Using the send_to_address function without from address
//$resp = $eth->send_to_address($address, $amount, null);


//Using the set_tx_fee function
$feerate = '0.0002';
$resp = $eth->set_tx_fee($feerate);


//Using the wallet_unlock function
$duration = '300'; //In minutes
$passphrase = 'pass123';
$resp = $eth->wallet_unlock($passphrase, $duration);


//Using the wallet_lock function
$resp = $eth->wallet_lock();


//Using the passphrase_change function
$oldpassphrase = 'pass';
$newpassphrase = 'pass123';
$resp = $eth->passphrase_change($oldpassphrase, $newpassphrase);


//Using the dump_privkey function
$address = '0x004E63486BE595EdD45f6CC6418718b2B598E9AB';
$resp = $eth->dump_privkey($address);


//Using the abandon_transaction function
$txid = '0xd89a37efdbe6f706224750c7cd33d8da0d5aa55b7f214465bf178b60f7699933';
$resp = $eth->abandon_transaction($txid);

