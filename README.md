# Fyre PHP-CS-Fixer Config

PHP-CS-Fixer shareable config for the *Fyre* style.


## Table Of Contents
- [Installation](#installation)
- [Methods](#methods)



## Installation

**Using Composer**

```
composer require --dev fyre/php-cs-fixer-config
```


## Usage

```php
use Fyre\PhpCsFixer\Config;

$config = new Config();

$config->getFinder()->in(__DIR__);

return $config;

```