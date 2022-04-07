<?php
declare(strict_types=1);

namespace RiverRing\DiPoc\DiBridge;

use Zend\Mvc\Application;
use Zend\Mvc\Service\ServiceManagerConfig;
use Zend\ServiceManager\ServiceManager;


class CrossLibraryApplicationFactory
{
    public static function create($configuration = []): Application
    {
        // Prepare the service manager
        $smConfig = $configuration['service_manager'] ?? [];
        $smConfig = new ServiceManagerConfig($smConfig);

        $serviceManager = new ServiceManager();
        $smConfig->configureServiceManager($serviceManager);

        $serviceManager->setService('ApplicationConfig', $configuration);

        // Load modules
        $serviceManager->get('ModuleManager')->loadModules();

        // Prepare list of listeners to bootstrap
        $listenersFromAppConfig     = $configuration['listeners'] ?? [];
        $config                     = $serviceManager->get('config');
        $listenersFromConfigService = $config['listeners'] ?? [];

        $listeners = array_unique(array_merge($listenersFromConfigService, $listenersFromAppConfig));

        return $serviceManager->get('Application')->bootstrap($listeners);
    }
}