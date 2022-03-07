<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'foxpost' => [
        'login' => env('FOXPOST_LOGIN'),
        'ecomcode' => env('FOXPOST_ECOM_CODE'),
        'ecompassw' => env('FOXPOST_ECOM_PASSWORD'),
        'apikey' => env('FOXPOST_API_KEY'),
    ],

    'simplepay' => [
        'apiendpoint' => env('API_ENDPOINT'),
        'hufmerchant' => env('HUF_MERCHANT'),
        'hufsecretkey' => env('HUF_SECRET_KEY'),          //secret key for account ID (HUF)
        'eurmerchant' => env('EUR_MERCHANT'),            //merchant account ID (EUR)
        'eursecretkey' => env('EUR_SECRET_KEY'),          //secret key for account ID (EUR)
        'usdmerchant' => env('USD_MERCHANT'),            //merchant account ID (USD)
        'usdsecretkey' => env('USD_SECRET_KEY'),          //secret key for account ID (USD)
        'sandbox' => env('SANDBOX', true),
        'urlback' => env('APP_URL', 'http://localhost') . '/simplepay/back',

        
        'urlsuccess' => env('APP_URL', 'http://localhost') . '/simplepay/success',       //url for successful payment
        'urlfail' => env('APP_URL', 'http://localhost') . '/simplepay/fail',             //url for unsuccessful
        'urlcancel' => env('APP_URL', 'http://localhost') . '/simplepay/cancel',         //url for cancell on payment page
        'urltimeout' => env('APP_URL', 'http://localhost') . 'simplepay/timeout',       //url for payment page timeout
        'getdata' => (isset($_GET['r']) && isset($_GET['s'])) ? ['r' => $_GET['r'], 's' => $_GET['s']] : [],
        'postdata' => $_POST,
        'serverdata' => $_SERVER,
        'logger' => env('LOGGER', true),                              //basic transaction log
        'logpath' => env('LOG_PATH', 'log'),                           //path of log file
        'autochallenge' => env('AUTOCHALLENGE', true),  
    ]


];
