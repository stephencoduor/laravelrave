<?php

namespace Tests\Unit;

use Tests\TestCase;
use StephenCoduor\Rave\Rave;

class RaveServiceProviderTests extends TestCase
{
    /**
     * Tests if service provider Binds alias "laravelrave" to \StephenCoduor\Rave\Rave
     *
     * @test
     */
    public function isBound()
    {
        $this->assertTrue($this->app->bound('laravelrave'));
    }
    /**
     * Test if service provider returns \Rave as alias for \StephenCoduor\Rave\Rave
     *
     * @test
     */
    public function hasAliased()
    {
        $this->assertTrue($this->app->isAlias("StephenCoduor\Rave\Rave"));
        $this->assertEquals('laravelrave', $this->app->getAlias("StephenCoduor\Rave\Rave"));
    }
}
