# a3pay-php
PHP library for a3Pay


## Requirements
 * PHP ^7.3


## Installation
To install with composer run the following command

    composer require a3pay/php


## Usage
```php

//Autoload classes using composer
require_once 'vendor/autoload.php';
//OR
//Include the classes directly from path
require_once 'vendor/a3pay/php/dist/payments.php';
require_once 'vendor/a3pay/php/dist/marketa.php';
require_once 'vendor/a3pay/php/dist/apps.php';
require_once 'vendor/a3pay/php/dist/wallet.php';


//Payment Collection
//Ignite the Payment Collection Class Using Your a3Pay Account Taken
$token = 'w6gfpqde8a3u5lauu7r7xkfqhkinslvxrsybr0'; //To know more about tokens and how to get yours follow here (https://a3pay.co/docs/#access_token)
$payments = new a3\payments($token);

//Using the create_transaction function
$amount = 1000;
$label = 'frgtyuy4';
$currency = 'USD';
$coin = 'BTC,USDT';
$success_url = 'https://my_domain.com/success_callback?id=456ytgre56';
$error_url = 'https://my_domain.com/error_callback?id=456ytgre56';
$resp = $payments->create_transaction($amount, $label, $currency, $coin, $success_url, $error_url);
//Using the create_transaction function without callback urls
$resp = $payments->create_transaction($amount, $label, $currency, $coin, null, null);


//Wallet
//Ignite the wallet Class Using Your wallet api_key
$btc_api_key = 'praoubf8d2e1584059489f8ffa3663b3223df2'; //For Bitcoin
$usdt_api_key = '9f8ffbf8d2e1584059489f8ffa3663b3223df2'; // For Tether USDT
$eth_api_key = 'praoubf8d2e1584059489f8ffa3663b3223df2'; // For Ethereum
//To know more about wallet api keys and how to get yours follow here (https://a3pay.co/docs/#api_key)
$eth = new a3\wallet($eth_api_key);

//Using the get_new_address function
$label = 'wsedrftgyh';
$resp = $eth->get_new_address($label);


//a3Marketa
//Ignite the a3marketa Class
$marketa = new a3\marketa();

//Using the live_data function
$resp = $marketa->live_data();


//a3Apps
//Ignite the a3apps Class Using Your a3Pay Account Taken
$token = 'w6gfpqde8a3u5lauu7r7xkfqhkinslvxrsybr0'; //To know more about tokens and how to get yours follow here (https://a3pay.co/docs/#access_token)
$apps = new a3\apps($token);

//Using the get_account_info function
$resp = $apps->get_account_info();

```


## Examples
Look to the scripts in the `/examples` directory in your browser. You will have to change the api_key and token in the example files to your own.


## Contributing
If you encounter a bug or have a suggestion to help improve this liobrary for others, you are welcome to open a Github issue on this repository and it will be reviewed by our development team.


## License
MIT - see LICENSE
