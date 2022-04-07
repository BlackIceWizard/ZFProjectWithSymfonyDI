<?php
declare(strict_types=1);

namespace RiverRing\DiPoc\DiBridge;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class SymfonyContainerBuilderProviderFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator): SymfonyContainerBuilderProvider
    {
        $containerBuilder = new ContainerBuilder();
        $loader = new PhpFileLoader($containerBuilder, new FileLocator(__DIR__.'/../config'));
        $loader->load('symfony-services.php');
        
        return new SymfonyContainerBuilderProvider($containerBuilder);
    }
}