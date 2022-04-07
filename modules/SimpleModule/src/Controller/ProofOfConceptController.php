<?php
declare(strict_types=1);

namespace RiverRing\DiPoc\SimpleModule\Controller;

use RiverRing\DiPoc\SimpleModule\Service\SymfonyService;
use RiverRing\DiPoc\SimpleModule\Service\ZendService;
use Zend\Mvc\Controller\AbstractConsoleController;

class ProofOfConceptController extends AbstractConsoleController
{
    private $zendService;
    private $symfonyService;

    public function __construct(ZendService $zendService, SymfonyService $symfonyService)
    {
        $this->zendService = $zendService;
        $this->symfonyService = $symfonyService;
    }

    public function indexAction()
    {
        $this->zendService->sayHelloZend();
        $this->symfonyService->sayHelloSymfony();
    }
}