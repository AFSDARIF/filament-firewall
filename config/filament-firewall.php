<?php

use Afsdarif\FilamentFirewall\Filament\Resources\FirewallIpResource;
use Afsdarif\FilamentFirewall\Models\Ip;

return [
    'models' => [
        'ip' => Ip::class,
    ],
    'resources' => [
        FirewallIpResource::class,
    ],
    'skip_whitelist_range' => [
        '127.0.0.1',
    ],
];