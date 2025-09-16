<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default database table prefix used for package migrations
    |--------------------------------------------------------------------------
    */
    'table_prefix' => 'fin_',

    /*
    |--------------------------------------------------------------------------
    | Related table names from dependencies from other packages
    |--------------------------------------------------------------------------
    */
    'tables' => [
        'currency' => env('TABLE_UTILS_CURRENCY', 'utils_currency'),
        'units' => env('TABLE_UTILS_MEASUREMENT_UNITS', 'measurement_units'),
    ]
];
