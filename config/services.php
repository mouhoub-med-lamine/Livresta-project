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

    'firebase' =>[
        "apiKey" => "AIzaSyAWbcIwdZEyfl5tyZsjPpolMxCWARW_SzY",
        "authDomain" => "livr-esta.firebaseapp.com",
        "projectId" => "livr-esta",
        "storageBucket" => "livr-esta.appspot.com",
        "messagingSenderId" => "891841944915",
        "appId" => "1:891841944915:web:d6b1b0baf1221ec7ff95a6",
        "measurementId" => "G-HZWG5BWYY7"
    ],

];
