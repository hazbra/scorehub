<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '955957134441597',
        'client_secret' => '24a9fa6f3165c3edcaba1762ecc5b61c',
        'redirect' => 'http://www.scorehub.info/callback/facebook',
    ],

    'twitter' => [
      'client_id' => 'kSWAihtsaIyTXl9QWTmE2bBXi',
      'client_secret' => 'yTeKRbnfJ8ZP9yh6eTLFxLwJq52IrJ0RVJtuZ3Q55CAMC3wE88',
      'redirect' => 'http://scorehub.info/callback/twitter',
    ],

    'google' => [
        'client_id' => '301672841035-nkll5p9pb64jsjmu2gfdne5gku0un4hh.apps.googleusercontent.com',
        'client_secret' => 'D70PBxR4zx7R7gTorzjZEU4j',
        'redirect' => '/scorehub2.0/public/callback/google',
    ],

];
