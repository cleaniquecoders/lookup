[![Test](https://github.com/cleaniquecoders/lookup/actions/workflows/run-tests.yml/badge.svg)](https://github.com/cleaniquecoders/lookup/actions/workflows/run-tests.yml) [![Update Changelog](https://github.com/cleaniquecoders/lookup/actions/workflows/update-changelog.yml/badge.svg)](https://github.com/cleaniquecoders/lookup/actions/workflows/update-changelog.yml) [![PHPStan](https://github.com/cleaniquecoders/lookup/actions/workflows/phpstan.yml/badge.svg)](https://github.com/cleaniquecoders/lookup/actions/workflows/phpstan.yml) [![Fix PHP Code Styling](https://github.com/cleaniquecoders/lookup/actions/workflows/fix-php-code-style-issues.yml.yml/badge.svg)](https://github.com/cleaniquecoders/lookup/actions/workflows/fix-php-code-style-issues.yml.yml)

## About Your Package

Lookup package allow you to have common information such contact types, education levels, etc.

A full list of keys are available [keys](keys).

For metadata, following are the current list available.

1. Social Media
2. Currency
3. Country
4. Technical Skill
5. Database
6. Language
7. MIME
8. Skills Proficiency

Please take note all above are sample of the data available. You may modify as necessary when you have publish / create your own seeders.

## Installation

In order to install `cleaniquecoders/lookup` in your Laravel project, just run the _composer require_ command from your terminal:

```bash
composer require cleaniquecoders/lookup
```

## Usage

Publish lookup related assets:

```bash
php artisan vendor:publish --tag=lookup-config
php artisan vendor:publish --tag=lookup-migrations
php artisan vendor:publish --tag=lookup-seeder
php artisan vendor:publish --tag=lookup-schemas
```

Get lookup data:

```php
lookup('education.qualification');
```

Get metada data:

```php
metadata('Currency');
```

## Test

Run the following command:

```bash
vendor/bin/phpunit  --testdox --verbose
```

## Contributing

Thank you for considering contributing to the `cleaniquecoders/lookup`!

### Bug Reports

To encourage active collaboration, it is strongly encourages pull requests, not just bug reports. "Bug reports" may also be sent in the form of a pull request containing a failing test.

However, if you file a bug report, your issue should contain a title and a clear description of the issue. You should also include as much relevant information as possible and a code sample that demonstrates the issue. The goal of a bug report is to make it easy for yourself - and others - to replicate the bug and develop a fix.

Remember, bug reports are created in the hope that others with the same problem will be able to collaborate with you on solving it. Do not expect that the bug report will automatically see any activity or that others will jump to fix it. Creating a bug report serves to help yourself and others start on the path of fixing the problem.

## Coding Style

`cleaniquecoders/lookup` follows the PSR-2 coding standard and the PSR-4 autoloading standard.

You may use PHP CS Fixer in order to keep things standardised. PHP CS Fixer configuration can be found in `.php_cs`.

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
