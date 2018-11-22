# JpCarbon

[![Latest Stable Version](https://poser.pugx.org/enomotodev/jp-carbon/v/stable.png)](https://packagist.org/packages/enomotodev/jp-carbon)
[![Build Status](https://api.travis-ci.org/enomotodev/JpCarbon.svg?branch=master)](https://travis-ci.org/enomotodev/JpCarbon)
[![StyleCI](https://styleci.io/repos/104899144/shield?style=flat)](https://styleci.io/repos/104899144)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/enomotodev/JpCarbon/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/enomotodev/JpCarbon)
[![Code Coverage](https://scrutinizer-ci.com/g/enomotodev/JpCarbon/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/enomotodev/JpCarbon)

Japanese extended version of carbon of the PHP datetime API.

**For Carbon < 2.0, please use [1.0 branch](https://github.com/enomotodev/JpCarbon/tree/1.0)**

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
