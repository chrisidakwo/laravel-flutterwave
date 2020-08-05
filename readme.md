# Handle payments with Flutterwave in Laravel

This is just a Laravel wrapper for the [flutterwave-php](https://github.com/chrisidakwo/flutterwave-php) package.

You can easily start working using the ``Rave`` facade, like so:

```php
// To generate a payment link
Rave::standardPayment($data);

// To verify a transaction 
$transaction = Rave::verifyTransaction($transactionId);

// To refund a transaction
$refund = Rave::refundTransaction($transactionId, $amount);
```

The ``transaction`` and ``refund`` variables in the example above are class objects with pre-filled properties gotten from the Flutterwave API response.

Well, that's about it. Just Facade, lol. 

If you don't like working with Facades, the [flutterwave-php](https://github.com/chrisidakwo/flutterwave-php) library is good enough for you to get started on. No big deal about this package.

I'll always keep this package updated with it's parent package - for those that might find this useful.


## Installation
As usual, the composer way:

```bash
composer require chrisidakwo/laravel-flutterwave 
```

In Laravel 5.5 and above, the service provider and facade will automatically get registered. In older versions of the framework, just add the service provider, and optionally register the facade in your `config/app.php` file:

```bash
'providers' => [
    ...
    ChrisIdakwo\Flutterwave\Laravel\RaveServiceProvider::class,
];

'aliases' => [
    ...
    'Rave' => ChrisIdakwo\Flutterwave\Laravel\Facades\Rave::class,
];
```

## Configuration
The configuration file can optionally be published via:

```bash
php artisan vendor:publish --provider="ChrisIdakwo\Flutterwave\Laravel\RaveServiceProvider"
```

This is the content of the file:
```php
return [
	/**
	 * Staging URL: https://ravesandboxapi.flutterwave.com/v3
	 * Live URL: https://api.ravepay.co/v3
	 */
	'base_url' => 'https://ravesandboxapi.flutterwave.com/v3',

	'public_key' => '',

	'secret_key' => 'secret key',

	'encryption_key' => '',

	'redirect_url' => '',

	'webhook_url' => '',

	'webhook_failed_transaction_url' => '',

	'webhook_secret_hash' => ''
];
```

## Usage Outside Laravel or Without Facades 
Again, if you don't like working with Facades or you're working on a non-Laravel project, you can use the [framework agnostic version](https://github.com/chrisidakwo/flutterwave-php).


## Contribution
You think you can make this package do more or add features to it? Please go ahead! Use the ``.php_cs`` file to format your code before making a PR. Also, add your name to the Credits section.

## Credits
- [All contributors](https://github.com/chrisidakwo/flutterwave-php/contributors)

That's about it!


