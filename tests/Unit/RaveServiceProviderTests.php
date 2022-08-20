<?php

namespace Tests\Unit;

use Tests\TestCase;
use Stephen\Rave\Rave;

class RaveServiceProviderTests extends TestCase
{
    /**
     * Tests if service provider Binds alias "laravelrave" to \Stephen\Rave\Rave
     *
     * @test
     */
    public function isBound()
    {
        $this->assertTrue($this->app->bound('laravelrave'));
    }
    /**
     * Test if service provider returns \Rave as alias for \Stephen\Rave\Rave
     *
     * @test
     */
    public function hasAliased()
    {
        $this->assertTrue($this->app->isAlias("Stephen\Rave\Rave"));
        $this->assertEquals('laravelrave', $this->app->getAlias("Stephen\Rave\Rave"));
    }
}
