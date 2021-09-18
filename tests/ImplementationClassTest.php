<?php

declare(strict_types=1);

use Foo\Bar\ImplementationClass;
use Foo\Bar\UnacessibleDependency;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class ImplementationClassTest extends TestCase
{
    /**
     * @var MockObject
     */
    private $mockUnacessible;

    /**
     * @var ImplementationClass
     */
    private $implementation;

    protected function setUp(): void
    {
        parent::setUp();

        $this->implementation = new ImplementationClass();
        $reflectionClass = new ReflectionClass($this->implementation);
        $property = $reflectionClass->getProperty('unacessibleDependency');
        $property->setAccessible(true);

        $this->mockUnacessible = $this->createMock(UnacessibleDependency::class);
        $property->setValue($this->implementation, $this->mockUnacessible);
    }


    public function test(): void
    {
        $this->mockUnacessible->expects(self::once())
            ->method('doSomethingElse')
            ->with(self::equalTo('argument'));

        $this->implementation->doSomething('argument');
    }
}
