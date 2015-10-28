# starter-kit-cache

PHP singleton for Memcached/Redis

[![Latest Stable Version](https://poser.pugx.org/starter-kit/cache/v/stable)](https://packagist.org/packages/starter-kit/cache) [![License](https://poser.pugx.org/starter-kit/cache/license)](https://packagist.org/packages/starter-kit/cache)

## Requirements

- PHP >= 5.3

## Suggestions

- PHP Memcached extension
- PHP Redis extension

## Installation

Install directly via [Composer](https://getcomposer.org/):
```bash
$ composer require starter-kit/cache
```

## Basic Usage

### Memcached

```php
<?php

// Require your autoloading script (Composer autoload here) to use namespaces
require_once 'vendor/autoload.php';

use StarterKit\Cache\Memcached;

// First instanciation : pass your Memcached parameters
$mc = Memcached::getInstance('YOUR_SERVER_NAME', 'YOUR_SERVER_PORT');

// Later in your code : you can retrieve your instance at any time, without creating new Memcached connection
$res = Memcached::getInstance()->set('yolo', 'swag');
```

### Redis

```php
<?php

// Require your autoloading script (Composer autoload here) to use namespaces
require_once 'vendor/autoload.php';

use StarterKit\Cache\Redis;

// First instanciation : pass your Redis parameters
$mc = Redis::getInstance('YOUR_SERVER_NAME', 'YOUR_SERVER_PORT');

// Later in your code : you can retrieve your instance at any time, without creating new Redis connection
$res = Redis::getInstance()->set('yolo', 'swag');
```
