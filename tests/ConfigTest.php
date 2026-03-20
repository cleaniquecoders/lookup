<?php

namespace CleaniqueCoders\Lookup\Tests;

use PHPUnit\Framework\Attributes\Test;

class ConfigTest extends TestCase
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
    public function has_lookup_config()
    {
        $this->assertHasConfig('lookup');
    }
}
