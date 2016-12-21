<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Shieldfy Configurations
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials and configurations for Shieldfy.
    | You can get your credentials from https://shieldfy.io.
    | Please refere to the documentations on https://shieldfy.io for further info.
    |
    */

    /*
     |--------------------------------------------------------------------------
     | Main App Credentials
     |--------------------------------------------------------------------------
     */
    'keys' => [
        'app_key'    => env('SHIELDFY_APP_KEY'),
        'app_secret' => env('SHIELDFY_APP_SECRET'),
    ],

    /*
     |--------------------------------------------------------------------------
     | Shieldfy debug whether or not expose debug and errors ( True , False )
     |--------------------------------------------------------------------------
     */
    'debug' => env('SHIELDFY_DEBUG', false),

    /*
     |--------------------------------------------------------------------------
     | Shieldfy default action for detecting threat ( block , listen )
     |--------------------------------------------------------------------------
     */
    'action' => env('SHIELDFY_ACTION', 'block'),

    /*
     |--------------------------------------------------------------------------
     | List of headers you don't want shieldfy to expose
     | Shieldfy expose the following headers by default
     | -- X-XSS-Protection
     | -- X-Content-Type-Options
     | -- X-Frame-Options
     |--------------------------------------------------------------------------
     */
    'disabledHeaders' => [],

];
