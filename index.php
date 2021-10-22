<?php

require_once "vendor/autoload.php";

$test= [
    'name'  =>  'mehmet',
    'email' =>  'mehmetcanak99@gmail.com',
];

new \Kars\JsonResponse\Response('ok', '', $test);