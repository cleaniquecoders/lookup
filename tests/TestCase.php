<?php

namespace CleaniqueCoders\Lookup\Tests;

use CleaniqueCoders\Lookup\LookupServiceProvider;
use Illuminate\Foundation\Application;

class TestCase extends \Orchestra\Testbench\TestCase
{
    use Traits\TestCaseTrait;

    /**
     * Load Package Service Provider.
     *
     * @param  Application  $app
     * @return array List of Service Provider
     */
    protected function getPackageProviders($app)
    {
        return [
            LookupServiceProvider::class,
        ];
    }
}
