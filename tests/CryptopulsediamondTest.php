<?php
/**
 * Tests for CryptoPulseDiamond
 */

use PHPUnit\Framework\TestCase;
use Cryptopulsediamond\Cryptopulsediamond;

class CryptopulsediamondTest extends TestCase {
    private Cryptopulsediamond $instance;

    protected function setUp(): void {
        $this->instance = new Cryptopulsediamond(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptopulsediamond::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
