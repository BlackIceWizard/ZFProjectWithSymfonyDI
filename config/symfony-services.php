<?php

use RiverRing\DiPoc\SimpleModule\Service\PrettySymfonyService;
use RiverRing\DiPoc\SimpleModule\Service\SymfonyService;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return function(ContainerConfigurator $configurator) {
    $services = $configurator->services();

    $services->set(PrettySymfonyService::class, PrettySymfonyService::class);

    $services->alias(SymfonyService::class, PrettySymfonyService::class);
};