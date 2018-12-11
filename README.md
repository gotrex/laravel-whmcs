# Laravel WHMCS

[![Latest Stable Version](https://poser.pugx.org/gotrex/laravel-whmcs/v/stable)](https://packagist.org/packages/gotrex/laravel-whmcs)
[![Total Downloads](https://poser.pugx.org/gotrex/laravel-whmcs/downloads)](https://packagist.org/packages/gotrex/laravel-whmcs)
[![License](https://poser.pugx.org/gotrex/laravel-whmcs/license)](https://packagist.org/packages/gotrex/laravel-whmcs)

A Laravel 5 wrapper for the WHMCS API.

## Installation

You can install the package via composer:

```bash
composer require gotrex/laravel-whmcs
```

From the command-line run:

```bash
php artisan vendor:publish --provider=Gotrex\Whmcs\WhmcsServiceProvider
```

Add and populate the following variables to your .env file. Supported auth types are `api` and `password`.

```env
WHMCS_AUTH_TYPE=api
WHMCS_URL=
WHMCS_KEY=
WHMCS_SECRET=
WHMCS_USERNAME=
WHMCS_PASSWORD=
WHMCS_RESPONSE_TYPE=json
```

## Usage

You can call an WHMCS API function directly by using the facade (e.g. `\Whmcs::{WHMCSAPIFUNCTION}`). This also works with custom API functions contained in your WHMCS API folder.

### Examples

Retrieve a list of client purchased products

``` php
return Whmcs::GetClientsProducts([
    'clientid' => 1
]);
```

Retrieve a specific invoice

``` php
return Whmcs::GetInvoice([
    'invoiceid' => 1
]);
```

If you do not use the Facade, you can call it with the app() helper.

```php
$whmcs = app('whmcs');
$whmcs->execute('GetInvoice', [
    'invoiceid' => 1
]);

return $whmcs;
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Ortwin van Vessem](https://github.com/ovvessem)

## Support

[Please open an issue in github](https://github.com/gotrex/laravel-whmcs/issues)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
