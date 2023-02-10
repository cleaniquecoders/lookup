<?php

namespace CleaniqueCoders\Lookup\Tests;

class MigrationTest extends TestCase
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
    public function has_lookup_table()
    {
        $this->assertHasTable('lookups');
    }
}
