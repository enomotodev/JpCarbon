# JpCarbon

<a href="https://github.com/enomotodev/JpCarbon/actions"><img src="https://github.com/enomotodev/JpCarbon/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/enomotodev/jp-carbon"><img src="https://img.shields.io/packagist/dt/enomotodev/jp-carbon" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/enomotodev/jp-carbon"><img src="https://img.shields.io/packagist/v/enomotodev/jp-carbon" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/enomotodev/jp-carbon"><img src="https://img.shields.io/packagist/l/enomotodev/jp-carbon" alt="License"></a>

Japanese extended version of carbon of the PHP datetime API.

## Usage

```php
<?php

require 'vendor/autoload.php';

use JpCarbon\JpCarbon;

$instance = JpCarbon::createFromDate(2017, 1, 1)->holiday;
var_dump($instance);
// => string(6) "元日"

$instance = JpCarbon::createFromDate(2017, 1, 2)->holiday;
var_dump($instance);
// => string(12) "振替休日"

$instance = JpCarbon::createFromDate(2017, 1, 3)->holiday;
var_dump($instance);
// => string(0) ""

$eto = JpCarbon::createFromDate(2017)->eto;
var_dump($eto);
// => string(3) "酉"
```

### via Helpers

```php
<?php

require 'vendor/autoload.php';

$instance = jp_carbon('20170101')->holiday;
var_dump($instance);
// => string(6) "元日"
```

## Install

```
$ composer require enomotodev/jp-carbon
```

## License

MIT License.
