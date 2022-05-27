# a3pay-php
PHP library for a3Pay


## Requirements
 * PHP ^7.3
 * Composer - [getcomposer.org](https://getcomposer.org/)


## Installation
To install with composer run the following command

    composer require a3Pay/a3pay-php

and then include the following line in your project where you want to use the wrapper's classes.

```php
require_once('your_project_path_to/vendor/autoload.php');
``` 


## Usage
```php

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
$resp = $payments->create_transaction($amount, $label, $currency, $coin, $success_callback, $error_callback);


//Get account information Transaction
$resp = $account->get_account_info();
print_r($resp);

//Get new bitcoin address
$label = 'default';
$resp = $btc->get_new_address($label);
print_r($resp);
//Get new tether USDT address
//$resp = $usdt->get_new_address($label);
//Get new tether Ethereum address
//$resp = $eth->get_new_address($label);


//Get live exchange rates
$resp = $marketa->live_data();
print_r($resp);


```


## Examples
Look to the scripts in the `/examples` directory in your browser. You will have to change the api_key and token in the example files to your own.


## Contributing
If you encounter a bug or have a suggestion to help improve this liobrary for others, you are welcome to open a Github issue on this repository and it will be reviewed by our development team.


## License
MIT - see LICENSE.md
