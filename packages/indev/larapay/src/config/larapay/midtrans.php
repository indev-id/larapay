<?php

return [

    /*
    |--------------------------------------------------------------------------
    | MIDTRANS CONFIGURATION
    |--------------------------------------------------------------------------
    |
    | there's some configuration need to be prepare
    | if there's any confusing variable please take a look offical documentation
    | and search what variable used for
    | offical documentation : http://api-docs.midtrans.com
    | offical documentation snap : http://snap-docs.midtrans.com
    */

    'env' => env('MIDTRANS_ENV','sandbox'),

    /*
    |--------------------------------------------------------------------------
    | MIDTRANS URL ENV
    |--------------------------------------------------------------------------
    |
    | each environments has each urls this configuration below to setup 
    | which urls shall use with current environment
    */
    'url'   => [

        /**
         * PRODUCTION URL 
         */
        'production'    => [
            
        ]
    ]


];
