#json-response-package

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
