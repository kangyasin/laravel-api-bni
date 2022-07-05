<?php

return [
    'api_url' => env('BNI_API_URL', 'https://apidev.bni.co.id:8067'),

    /**
     * API Keys
     */
    'api_key' => env('BNI_API_KEY', 'YOUR_BNI_API_KEY'),
    'api_secret' => env('BNI_API_SECRET', 'YOUR_BNI_API_SECRET'),

    /**
     * OAuth Credential
     */
    'client_id' => env('BNI_CLIENT_ID', 'YOUR_BNI_CLIENT_ID'),
    'client_secret' => env('BNI_CLIENT_SECRET', 'YOUR_BNI_CLIENT_SECREET'),

    /**
     * Client name is taken from the application name.
     */
    'client_name' => env('BNI_CLIENT_NAME', 'YOUR_BNI_CLIENT_NAME'),
];
