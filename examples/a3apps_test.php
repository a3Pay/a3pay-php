<?php
//Autoload classes using composer
require_once '../vendor/autoload.php';

//Include the a3apps class directly from path
//require_once '../vendor/a3pay/php/dist/apps.php';

//Ignite the a3apps Class Using Your a3Pay Account Taken
$token = 'w6gfpqde8a3u5lauu7r7xkfqhkinslvxrsybr0'; //To know more about tokens and how to get yours follow here (https://a3pay.co/docs/#access_token)
$apps = new a3\apps($token);


//Using the get_account_info function
$resp = $apps->get_account_info();


//Using the update_password function
$oldPass = 'pass';
$newPass = 'pass123';
$resp = $apps->update_password($oldPass, $newPass);


//Using the list_login_activity function
$resp = $apps->list_login_activity();


//Using the list_assets function
$resp = $apps->list_assets();


//Using the support_countries function
$resp = $apps->support_countries();


//Using the list_pricing function
$resp = $apps->list_pricing();


//Using the support_currencies function
$resp = $apps->support_currencies();


