<?php

use RiverRing\DiPoc\DiBridge\SymfonyContainerBuilderProvider;
use RiverRing\DiPoc\DiBridge\SymfonyContainerBuilderProviderFactory;
use RiverRing\DiPoc\SimpleModule\Module as SimpleModule;

return [
    'modules' => [
        SimpleModule::class,
    ],
    'service_manager' => [
        'factories' => [
            SymfonyContainerBuilderProvider::class => SymfonyContainerBuilderProviderFactory::class,
        ],
    ]
];