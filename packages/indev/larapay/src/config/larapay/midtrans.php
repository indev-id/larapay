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

    'env'           => env('MIDTRANS_ENV','sandbox'),
    'mid'           => env('MIDTRANS_MID'),
    'client_key'    => env('MIDTRANS_CLIENT_KEY'),
    'secret_key'    => env('MIDTRANS_CLIENT_KEY'),

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

            /**
             * SNAP URL
             */
            'snap'      =>  [
                'transaction'       => 'https://app.midtrans.com/snap/v1/transactions',
                'javascript'        => 'https://app.midtrans.com/snap/snap.js',      
            ],

            /**
             * CORE API URL
             */
            'api'       => [
                'url'               => 'https://api.midtrans.com',
                'javascript'        => [
                    'token'                 => 'https://api.midtrans.com/v2/assets/js/midtrans-new-3ds.min.js',
                ]
            ]     
        ],

        /**
         * SANDBOX URL
         */
        'sandbox'    => [

            /**
             * SNAP URL
             */
            'snap'      =>  [
                'transaction'       => 'https://app.sandbox.midtrans.com/snap/v1/transactions',
                'javascript'        => 'https://app.sandbox.midtrans.com/snap/snap.js',      
            ],

            /**
             * CORE API URL
             */
            'api'       => [
                'url'               => 'https://api.sandbox.midtrans.com',
                'javascript'        => 'https://api.sandbox.midtrans.com/v2/assets/js/midtrans-new-3ds.min.js'
            ]     
        ],

        /**
         * Method URL for core api
         */
        'methods'           => [
            'token'                 => '/v2/token',
            'charge'                => '/v2/charge',
            'capture'               => '/v2/capture',
            'approve'               => '/v2/{id}/approve',
            'deny'                  => '/v2/{id}/deny',
            'cancel'                => '/v2/{id}/cancel',
            'expire'                => '/v2/{id}/expire',
            'refund'                => '/v2/{id}/refund',
            'refund_online'         => '/v2/{id}/refund/online/direct',
            'status'                => '/v2/{id}/status',
            'status_b2b'            => '/v2/order_id/status/b2b',
            'card_register'         => '/v2/card/register',
            'point_inquiry'         => '/v2/point_inquiry/{id}',
            'pay_account'           => '/v2/pay/account',
            'pay_account_unbind'    => '/v2/pay/account/{id}/unbind',
            'bins'                  => '/v1/bins/bin_number'
        ],
    ],

    /**
     * Enabled payments give empty array if enable all payments
     * nb : this configuration might be overide midtrans panel setting
     */
    'enabled_payments'  => [],

    /**
     * Expiry transactions
     */
    'expiry'            => [
        'start_time'    => null, // timestamp in yyyy-MM-dd HH:mm:ss Z
        'duration'      => null, // integer
        'unit'          => null, // day, hour, minute
    ]



];
