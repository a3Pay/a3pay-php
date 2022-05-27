# a3pay-php
PHP library for a3Pay


## Requirements
 * PHP ^7.3


## Installation
To install with composer run the following command

    composer require a3pay/php

and then include the following line in your project where you want to use the wrapper's classes.

```php
require_once('your_project_path_to/vendor/autoload.php');
``` 


## Usage
```php

//Include Composer autoload file
require_once 'vendor/autoload.php';

$token = 'w6gfpqde8a3u5lauu7r7xkfqhkinslvxrsybr0';
//To know more about tokens and how to get yours follow here (https://a3pay.co/docs/#access_token)

$btc_api_key = 'praoubf8d2e1584059489f8ffa3663b3223df2'; //For Bitcoin
$usdt_api_key = '9f8ffbf8d2e1584059489f8ffa3663b3223df2'; // For Tether USDT
$eth_api_key = '663b3bf8oubf8d4059489f8ffa3663b3205948'; // For Ethereum
//To know more about api_keys and how to get yours follow here (https://a3pay.co/docs/#api_key)

//Initiate the Payment Collection API Class
$payments = new a3\payments($token);

//Initiate the a3 Apps API Class
$apps = new a3\apps($token);

//Initiate the Wallet API Class
$btc = new a3\wallet($btc_api_key); //Call Wallet Functions for Bitcoin
$usdt = new a3\wallet($usdt_api_key); //Call Wallet Functions for Tether USDT
$eth = new a3\wallet($eth_api_key); //Call Wallet Functions for Ethereum

//Initiate the a3Marketa API Class
$marketa = new a3\marketa;


//Create New Transaction
$resp = $payments->create_transaction($amount, $label, $currency, $coin, $success_callback, $error_callback);

//Get Account Information
$resp = $account->get_account_info();

//Get new bitcoin address
$label = 'default';
$resp = $btc->get_new_address($label);
//Get new tether USDT address
$resp = $usdt->get_new_address($label);
//Get new tether Ethereum address
$resp = $eth->get_new_address($label);

//Get live exchange rates
$resp = $marketa->live_data();


```


## Examples
Look to the scripts in the `/examples` directory in your browser. You will have to change the api_key and token in the example files to your own.


## Contributing
If you encounter a bug or have a suggestion to help improve this liobrary for others, you are welcome to open a Github issue on this repository and it will be reviewed by our development team.


## License
MIT - see LICENSE.md
