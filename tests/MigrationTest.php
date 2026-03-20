<?php

namespace CleaniqueCoders\Lookup\Tests;

use PHPUnit\Framework\Attributes\Test;

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

    #[Test]
    public function has_lookup_table()
    {
        $this->assertHasTable('lookups');
    }
}
