<?php

return [
    'server_key' => env('MIDTRANS_SERVER_KEY', 'SB-Mid-server-1NUtZwXNgYsnMPLUBmK910Pn'),
    'client_key' => env('MIDTRANS_CLIENT_KEY', 'SB-Mid-client-gv9XvyHgOsanZt2G'),
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    'is_sanitized' => env('MIDTRANS_IS_SANITIZED', true),
    'is_3ds' => env('MIDTRANS_IS_3DS', true),
];
