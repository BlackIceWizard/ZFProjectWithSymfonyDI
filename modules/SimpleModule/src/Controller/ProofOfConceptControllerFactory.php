<?php
declare(strict_types=1);

namespace RiverRing\DiPoc\SimpleModule\Controller;

use RiverRing\DiPoc\SimpleModule\Service\SymfonyService;
use RiverRing\DiPoc\SimpleModule\Service\ZendService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ProofOfConceptControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator): ProofOfConceptController
    {
        $locator = $serviceLocator->getServiceLocator();
        $zendService = $locator->get(ZendService::class);
        $symfonyService = $locator->get(SymfonyService::class);

        return new ProofOfConceptController($zendService, $symfonyService);
    }
}