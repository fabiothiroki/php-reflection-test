<?php

namespace Foo\Bar;

declare(strict_types=1);

abstract class AbstractClass
{
    private $unacessibleDependency;

    public function __construct()
    {
        $this->unacessibleDependency = new UnacessibleDependency();
    }

    abstract function doSomething(): void;
}