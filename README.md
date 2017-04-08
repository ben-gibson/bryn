# Bryn

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status](https://travis-ci.org/ben-gibson/bryn.svg?branch=master)](https://travis-ci.org/ben-gibson/bryn)
[![Total Downloads][ico-downloads]][link-downloads]


A `PHP` library acting as an abstraction layer for calculating monetary conversions. This repository contains the interfaces and domain models only.

## Install

Use composer to install this library.

``` bash
$ composer require ben-gibson/bryn
```

## Usage

An exchange rate calculator needs to be installed alongside this library like the ones below.

| Source        | Link           |  
| ------------- |:-------------:|   
| The European Central Bank | https://github.com/ben-gibson/bryn-european-central-bank-calculator |
| Yahoo's YQL Finance API | https://github.com/ben-gibson/bryn-yahoo-calculator |

To increase reliability the [bryn-fallback-calculator](https://github.com/ben-gibson/bryn-fallback-calculator) can be used by registering multiple calculators in priority order.

## Caching

TODO

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email ben.gibson.2011@gmail.com instead of using the issue tracker.

## Credits

- [Ben Gibson][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/ben-gibson/bryn.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/ben-gibson/bryn.svg?style=flat-square
[link-packagist]: https://packagist.org/packages/ben-gibson/bryn
[link-downloads]: https://packagist.org/packages/ben-gibson/bryn
[ico-license]: https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square
[link-author]: https://github.com/ben-gibson
[link-contributors]: ../../contributors
