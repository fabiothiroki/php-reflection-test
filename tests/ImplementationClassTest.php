<?php

declare(strict_types=1);

use Foo\Bar\ImplementationClass;
use PHPUnit\Framework\TestCase;

class ImplementationClassTest extends TestCase
{
    public function test(): void
    {
        $this->assertNotNull(new ImplementationClass());
    }
}
