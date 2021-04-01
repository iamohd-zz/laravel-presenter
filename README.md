# Laravel Eloquent Presenter

[![Latest Version on Packagist](https://img.shields.io/packagist/v/smartisan/laravel-presenter.svg?style=flat-square)](https://packagist.org/packages/smartisan/laravel-presenter)
[![GitHub Tests Action Status](https://github.com/iamohd/laravel-presenter/workflows/run-tests/badge.svg)](https://github.com/iamohd/laravel-presenter/actions?query=workflow%3Arun-tests)
[![Total Downloads](https://img.shields.io/packagist/dt/smartisan/laravel-presenter.svg?style=flat-square)](https://packagist.org/packages/smartisan/laravel-presenter)

A simple package to present your model attributes.

## Installation

You can install the package via composer:

```bash
composer require smartisan/laravel-presenter
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Smartisan\Presenter\PresenterServiceProvider" --tag="config"
```

## Usage
1. Create a new presenter class using the following command
```bash
php artisan make:presenter UserPresenter
```

2. Prepare your model with the presenter trait
```php
use Smartisan\Presenter\HasPresenter;
use App\Presenters\UserPresenter;

class User extends Model
{
    use HasPresenter;
    
    protected $presenter = UserPresenter::class;
}
```

3. Add a new presenter method with your logic to the generated presenter class
```php
namespace Smartisan\Presenter\Presenter;

use Smartisan\Presenter\Presenter;

class UserPresenter extends Presenter
{
    public function fullName($value)
    {
        return $this->model->firstName . ' ' . $this->model->lastName;
    }
}
```

4. Now to present the full name of the user you can do the following
```php
$user->present()->fullName;

// or

$user->present()->full_name;
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mohammed Isa](https://github.com/iamohd)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
