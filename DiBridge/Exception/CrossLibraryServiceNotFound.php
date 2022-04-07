<?php
declare(strict_types=1);

namespace RiverRing\DiPoc\DiBridge\Exception;

use Exception;

class CrossLibraryServiceNotFound extends Exception
{
    public function __construct(Exception $zendException, Exception $symfonyException)
    {
        parent::__construct(
            sprintf(
                "Zend ServiceManager error:\n %s\n Symfony ServiceContainer error:\n %s",
                $zendException->getMessage(),
                $symfonyException->getMessage()
            ),
            $zendException->code,
            $zendException
        );
    }
}