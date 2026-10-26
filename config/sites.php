<?php

$defaultKey = env('SITE_DEFAULT_KEY', 'disawar-bazaar');

return [
    'default' => $defaultKey,
    'strict_hosts' => env('SITES_STRICT_HOSTS', env('APP_ENV', 'production') === 'production'),
    'current_key' => $defaultKey,
    'current' => [
        'key' => $defaultKey,
        'name' => env('APP_NAME', 'Disawar Bazaar'),
        'url' => rtrim(env('APP_URL', 'https://disawarbazaar.com'), '/'),
        'hosts' => ['disawarbazaar.com', 'www.disawarbazaar.com'],
    ],
    'sites' => [
        'disawar-bazaar' => [
            'name' => 'Disawar Bazaar',
            'url' => rtrim(env('SITE_PLAY_ONLINE_KHAIWAL_URL', env('APP_URL', 'https://disawarbazaar.com')), '/'),
            'hosts' => ['disawarbazaar.com', 'www.disawarbazaar.com'],
        ],
        'galidisawar' => [
            'name' => 'Gali Disawar',
            'url' => rtrim(env('SITE_GALIDISAWAR_URL', 'https://galidisawar.com'), '/'),
            'hosts' => ['galidisawar.com', 'www.galidisawar.com'],
        ],
    ],
];
