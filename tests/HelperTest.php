<?php

namespace CleaniqueCoders\Lookup\Tests;

class HelperTest extends TestCase
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
    public function has_lookup_helper()
    {
        $this->assertHasHelper('lookup');
    }
}
