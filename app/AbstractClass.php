<?php

declare(strict_types=1);

namespace Foo\Bar;


abstract class AbstractClass
{
    protected $unacessibleDependency;

    public function __construct()
    {
        $this->unacessibleDependency = new UnacessibleDependency();
    }

    abstract function doSomething(string $argument): void;
}