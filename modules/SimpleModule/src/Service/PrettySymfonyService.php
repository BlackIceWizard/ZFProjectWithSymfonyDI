<?php
declare(strict_types=1);

namespace RiverRing\DiPoc\SimpleModule\Service;

class PrettySymfonyService implements SymfonyService
{
    public function sayHelloSymfony(): void
    {
        var_dump('Hello! I\'m Symfony Service!');
    }
}