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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '499019326539-0ep8q6q66bctekaa2lihk05n5ejgk2p4.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://itjob.vn/callback/Google',
    ],

    'facebook' => [
        'client_id' => '1203964297168457',
        'client_secret' => '20b9ae17da03147085994fe3b26ca1db',
        'redirect' => 'http://127.0.0.1:8000/callback-facebook/Facebook',
    ],

];
