<?php
declare(strict_types=1);

namespace RiverRing\DiPoc\SimpleModule;

use RiverRing\DiPoc\SimpleModule\Controller\ProofOfConceptController;
use RiverRing\DiPoc\SimpleModule\Controller\ProofOfConceptControllerFactory;
use RiverRing\DiPoc\SimpleModule\Service\PrettyZendService;
use RiverRing\DiPoc\SimpleModule\Service\ZendService;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ServiceManager\Factory\InvokableFactory;

class Module implements ConfigProviderInterface
{
    public function getConfig(): array
    {
        return [
            'service_manager' => [
                'invokables' => [
                    ZendService::class => PrettyZendService::class,
                ],
            ],
            'controllers' => [
                'factories' => [
                    ProofOfConceptController::class => ProofOfConceptControllerFactory::class,
                ],
            ],
            'console' => [
                'router' => [
                    'routes' => [
                        'proof-of-concept' => [
                            'options' => [
                                'route' => 'proof-of-concept',
                                'defaults' => [
                                    'controller' => ProofOfConceptController::class,
                                    'action' => 'index',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }
}