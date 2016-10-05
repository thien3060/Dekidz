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

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => '35751916467-bkr7tjd03elnqftj97jbq0jh7h63h2q3.apps.googleusercontent.com',
        'client_secret' => 'S7CqU9-xfS_oFPY1SyIs7R3e',
        'redirect' => 'http://local.dekidz.com/admin/oauth/google/callback',
    ],

    'facebook' => [
        'client_id' => '1084901388213775',
        'client_secret' => '0d517fd860e5116550411da812febb74',
        'redirect' => 'http://local.dekidz.com/admin/oauth/facebook/callback',
    ],

];
