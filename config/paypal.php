<?php

return [
    'client_id' => env('PAYPAL_CLIENT_ID', 'AQzD-xq8gm45BPS_5z83OOLkls27NFukgV7VgABnMLrIJWVng-DoLghj-ztbTKMoV_aLZTZstMhnEkzr'),
    'secret' => env('PAYPAL_SECRET', 'EFLfBKMrbysnvyRkOfZrZZMUZEe5g-PDOvG0y8wf2VRkC7-hFSGPbvntf-bBl5fwrAQkTZUGZyb7Enq0'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE', 'live'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path().'/logs/paypal.log',
        'log.LogLevel' => 'ERROR',
    ),
];
