<?php 

namespace CleaniqueCoders\Lookup\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;

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

    /** @test */
    public function has_metadata_table()
    {
    	$this->assertHasTable('metadata');
    }
}