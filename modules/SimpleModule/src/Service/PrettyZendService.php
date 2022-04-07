<?php
declare(strict_types=1);

namespace RiverRing\DiPoc\SimpleModule\Service;

class PrettyZendService implements ZendService
{
    public function sayHelloZend(): void
    {
        var_dump('Hello! I\'m Zend Service!');
    }
}