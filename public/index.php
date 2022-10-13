<?php

define('APP_STARTED', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->build();

// $collection = collect(['testing1' => 'test1', 'testing2' => 'test2', 'testing3' => 'test3']);

// foreach ($collection->toArray() as $key => $value)
// {
//     print_r(['key' => $key, 'value' => $value]);
//     print_r("<br><br>");
// }

// print_r($app->getRequest());
