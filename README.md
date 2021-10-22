# json-response-package

[![version](https://img.shields.io/badge/version-1.0.0-blue)](https://packagist.org/packages/kars/json-response)

Returns json format when this package gives value and data properties

## Installation
composer require kars/json-response

### Use

```<?php

require_once "vendor/autoload.php";

$test= [
    'name'  =>  'mehmet',
    'email' =>  'mehmetcanak99@gmail.com',
];

new \Kars\JsonResponse\Response('ok', '', $test);
```
### Params (required)
1. success or ok - 200 http status
2. unauthorized - 401 http status
3. exception - 500 http status

### Response
```
{
 "status":"ok",
 "data":
    {
      "name":"mehmet",
      "email":"mehmetcanak99@gmail.com"
    }
}
```
