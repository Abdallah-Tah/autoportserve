<?php

namespace Tests;

use Amohamed\AutoPortServe\AutoPortServeServiceProvider;
use Orchestra\Testbench\TestCase;
use Amohamed\AutoPortServe\Console\ServeCommand;

/**
 * Class ServeCommandTest
 * @package Tests
 */
class ServeCommandTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            AutoPortServeServiceProvider::class,
        ];
    }


    public function testServeCommand()
    {
        $mock = $this->getMockBuilder(ServeCommand::class)
            ->onlyMethods(['isPortInUse'])
            ->getMock();

        $mock->method('isPortInUse')
            ->willReturn(false);

        $this->app->instance(ServeCommand::class, $mock);

        $this->artisan('serve:dynamic')
            ->expectsOutput('Laravel development server started: <http://127.0.0.1:8000>')
            ->assertExitCode(0);
    }
}
