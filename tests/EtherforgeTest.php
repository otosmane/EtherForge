<?php
/**
 * Tests for EtherForge
 */

use PHPUnit\Framework\TestCase;
use Etherforge\Etherforge;

class EtherforgeTest extends TestCase {
    private Etherforge $instance;

    protected function setUp(): void {
        $this->instance = new Etherforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Etherforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
