<?php

namespace CleaniqueCoders\Lookup\Tests;

use PHPUnit\Framework\Attributes\Test;

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

    #[Test]
    public function has_lookup_helper()
    {
        $this->assertHasHelper('lookup');
    }
}
