# starter-kit-cache

PHP singleton for Memcached

[![Latest Stable Version](https://poser.pugx.org/starter-kit/cache/v/stable)](https://packagist.org/packages/starter-kit/cache) [![License](https://poser.pugx.org/starter-kit/cache/license)](https://packagist.org/packages/starter-kit/cache)

## Requirements

- PHP >= 5.*
- PHP Memcached extension

## Installation

Install directly via [Composer](https://getcomposer.org/):
```bash
$ composer require starter-kit/cache
```

## Basic Usage

```php
<?php

// Require your autoloading script (Composer autoload here) to use namespaces
require_once 'vendor/autoload.php';

use StarterKit\Cache\Memcached;

// First instanciation : pass your DB parameters
$mc = Memcached::getInstance('YOUR_SERVER_NAME', 'YOUR_SERVER_PORT');

// Later in your code : you can retrieve your instance at any time, without creating new Memcached connection
$res = Memcached::getInstance()->set('yolo', 'swag');
```
