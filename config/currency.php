<?php

return [
    'default' => env('CURRENCY_DEFAULT', 'MY'),
    'MY'      => [
        'swift_code' => 'MYR',
        'symbol'     => 'RM',
    ],
    'US'      => [
        'swift_code' => 'USD',
        'symbol'     => '$',
    ],
    'CNY' => [
        'swift_code' => 'CNY',
        'symbol' => '¥',
    ],
];
