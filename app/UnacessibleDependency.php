<?php

declare(strict_types=1);

namespace Foo\Bar;

class UnacessibleDependency
{
    public function doSomethingElse(string $argument): void
    {
        echo 'Doing something important with ' . $argument;
    }
}