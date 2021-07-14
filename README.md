# Genesis Stubs

[![Build Status](https://travis-ci.com/php-stubs/genesis-stubs.svg?branch=master)](https://travis-ci.com/php-stubs/genesis-stubs)

This package provides stub declarations for [Genesis framework](https://www.studiopress.com/get-genesis/)
functions, classes and interfaces.
These stubs can help plugin and theme developers leverage static analysis tools
like [PHPStan](https://github.com/phpstan/phpstan),
which is not able to parse genesis as it is not clean OOP code.

Stubs are generated directly from the latest Genesis version that is required to be downloaded manually as it is blocked by a form.
using [giacocorsiglia/stubs-generator](https://github.com/GiacoCorsiglia/php-stubs-generator).

### Requirements

- PHP >=7.1

### Installation

Require this package as a development dependency with [Composer](https://getcomposer.org).

```bash
composer require --dev php-stubs/genesis-stubs
```

Alternatively you may download `genesis-stubs.php` directly.

### Usage in PHPStan

Include all stubs in PHPStan configuration file.

```yaml
parameters:
    bootstrapFiles:
        - %rootDir%/../../php-stubs/wordpress-stubs/wordpress-stubs.php
        - %rootDir%/../../php-stubs/genesis-stubs/genesis-stubs.php
```
