<?php

namespace CleaniqueCoders\Lookup\Tests;

use PHPUnit\Framework\Attributes\Test;

class SeederTest extends TestCase
{
    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->republish();
        $this->migrate();
    }

    #[Test]
    public function has_seeder_class()
    {
        $this->assertFileExists($this->app->databasePath().'/seeders/LookupSeeder.php');
    }

    #[Test]
    public function has_lookup_schema()
    {
        $this->assertFileExists(storage_path('app/lookup.json'));
    }
}
