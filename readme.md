# JpCarbon

[![Build Status](https://api.travis-ci.org/enomotodev/JpCarbon.svg?branch=master)](https://travis-ci.org/enomotodev/JpCarbon)
[![StyleCI](https://styleci.io/repos/104899144/shield?style=flat)](https://styleci.io/repos/104899144)

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

## Install

```
$ composer require enomotodev/jp-carbon
```

## License

MIT License.