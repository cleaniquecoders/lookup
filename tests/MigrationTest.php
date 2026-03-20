<?php

namespace CleaniqueCoders\Lookup\Tests;

use PHPUnit\Framework\Attributes\Test;

class MigrationTest extends TestCase
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
    public function has_lookup_table()
    {
        $this->assertHasTable('lookups');
    }
}
