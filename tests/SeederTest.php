<?php

namespace CleaniqueCoders\Lookup\Tests;

class SeederTest extends TestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->republish();
        $this->migrate();
    }

    /** @test */
    public function has_seeder_class()
    {
        $this->assertFileExists($this->app->databasePath() . '/seeders/LookupSeeder.php');
    }

    /** @test */
    public function has_lookup_schema()
    {
        $this->assertFileExists(database_path('schemas/lookup.sql'));
    }
}
