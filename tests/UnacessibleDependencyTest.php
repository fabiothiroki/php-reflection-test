<?php

declare(strict_types=1);

use Foo\Bar\UnacessibleDependency;
use PHPUnit\Framework\TestCase;

final class UnacessibleDependencyTest extends TestCase
{
    public function test(): void
    {
        $unacessibleDependency = new UnacessibleDependency();
        $unacessibleDependency->doSomethingElse('argument');

        $this->expectOutputString('Doing something important with argument');
    }
}