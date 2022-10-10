<?php

return [
    'name' => env('APP_NAME') ?: 'Vision',

    'url' => env('APP_URL') ?: 'http:"//127.0.0.1:8000',

    'env' => env('APP_ENV') ?: 'production',

    'debug' => (bool) env('APP_DEBUG') ?: false,

    'key' => env('APP_KEY') ?: false,

    'cipher' => 'AES-256-CBC',
];
