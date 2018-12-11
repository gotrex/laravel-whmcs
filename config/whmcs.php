<?php

return [

    /*
    |--------------------------------------------------------------------------
    | HTTP Driver
    |--------------------------------------------------------------------------
    |
    | The Laravel WHMCS package supports guzzlehttp as the HTTP driver to fetch 
    | the data through the API.
    |
    | Supported: "guzzlehttp"
    |
    */

    'driver' => 'guzzlehttp',

    /*
    |--------------------------------------------------------------------------
    | Authentication Type
    |--------------------------------------------------------------------------
    |
    | Here you specify the authentication type for connecting throuth the API. 
    | The preferred option is "api", since this is more secure over "password".
    |
    | Should you choose "password" keep in mind to enter the unhashed variant of your password.
    |
    | Supported: "api", "password"
    |
    */

    'auth_type' => env('WHMCS_AUTH_TYPE', 'api'),

    /*
    |--------------------------------------------------------------------------
    | API URL
    |--------------------------------------------------------------------------
    |
    | Here you may specify the API URL of the WHMCS application used by
    | your Laravel application. 
    |
    | For most installations the url is: https://[yourdomain.com]/includes/api.php
    |
     */

    'apiurl' => env('WHMCS_URL', 'https://[yourdomain.com]/includes/api.php'),

    /*
    |--------------------------------------------------------------------------
    | API Credentials
    |--------------------------------------------------------------------------
    |
    | Here you may specify the api or user credentials based on the chosen
    | authentication type.
    |
     */

    'api' => [
        'identifier' => env('WHMCS_KEY', ''),
        'secret' => env('WHMCS_SECRET', ''),
    ],

    'password' => [
        'username' => env('WHMCS_USERNAME', ''),
        'password' => env('WHMCS_PASSWORD', ''),
    ],

    /*
    |--------------------------------------------------------------------------
    | ResponseType
    |--------------------------------------------------------------------------
    |
    | Here you may specify a preferred reponse type. Of course, a sensible default 
    | is provided for you; however, you are free to change this as needed.
    |
    | Supported auth types': "json", "xml"
    |
     */

    'responsetype' => env('WHMCS_RESPONSE_TYPE', 'json'),
];
