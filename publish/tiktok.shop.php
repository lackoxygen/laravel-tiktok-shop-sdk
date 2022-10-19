<?php

return [
    'default' => [
        'app_key' => env('TIKTOK_APP_KEY', ''),
        'app_secret' => env('TIKTOK_APP_SECRET', ''),
        'enable_mock' => env('TIKTOK_ENABLE_MOCK', false),
        'base_uri' => env('TIKTOK_BASE_URI', 'https://openapi-sandbox.jinritemai.com'),
        'timeout' => env('TIKTOK_TIMEOUT', 5.0),
    ]
];
