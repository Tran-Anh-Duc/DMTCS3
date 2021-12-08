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
    'google' => [

        'client_id' => '577642893093-8n2hmfqiiu5ul50ere8bj640bd7tjn4e.apps.googleusercontent.com',

        'client_secret' => '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',

        'redirect' => 'http://127.0.0.1:8000/callback/google',

    ],

    'github' => [

        'client_id' => 'c43b8cccd38b84a2b2e3',

        'client_secret' => '1650a300f82efe3291892452e86af3df17060476',

        'redirect' => 'http://127.0.0.1:8000/callback/github',

    ],

];
