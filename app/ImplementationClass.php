<?php

declare(strict_types=1);

namespace Foo\Bar;

class ImplementationClass extends AbstractClass
{

    function doSomething(string $argument): void
    {
        $this->unacessibleDependency->doSomethingElse($argument);
    }
}