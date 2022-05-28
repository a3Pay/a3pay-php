<?php
//Autoload classes using composer
require_once '../vendor/autoload.php';

//Include a3marketa class directly from path
//require_once '../vendor/a3pay/php/dist/marketa.php';

//Ignite the a3marketa Class
$marketa = new a3\marketa();


//Using the live_data function
$resp = $marketa->live_data();


//Using the specific_data function
$target = 'USD';
$symbol = 'BTC';
$days = 1; // 1 for lie data
$resp = $marketa->specific_data($target, $symbol, $days);


//Using the list_symbols function
$resp = $marketa->list_symbols();


//Using the list_targets function
$resp = $marketa->list_targets();

