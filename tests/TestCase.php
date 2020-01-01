<?php

namespace Lloople\LaravelBladeCurrentYear\Tests;

use Lloople\LaravelBladeCurrentYear\LaravelBladeCurrentYearServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [LaravelBladeCurrentYearServiceProvider::class];
    }

}