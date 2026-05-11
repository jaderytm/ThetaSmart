<?php
/**
 * Tests for ThetaSmart
 */

use PHPUnit\Framework\TestCase;
use Thetasmart\Thetasmart;

class ThetasmartTest extends TestCase {
    private Thetasmart $instance;

    protected function setUp(): void {
        $this->instance = new Thetasmart(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Thetasmart::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
