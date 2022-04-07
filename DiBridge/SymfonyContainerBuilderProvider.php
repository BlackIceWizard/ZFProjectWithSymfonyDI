<?php
declare(strict_types=1);

namespace RiverRing\DiPoc\DiBridge;

use Symfony\Component\DependencyInjection\ContainerBuilder;

class SymfonyContainerBuilderProvider
{
    private $containerBuilder;

    public function __construct(ContainerBuilder $containerBuilder)
    {
        $this->containerBuilder = $containerBuilder;
    }

    public function containerBuilder(): ContainerBuilder
    {
        return $this->containerBuilder;
    }
}