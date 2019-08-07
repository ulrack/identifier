<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Identifier\Tests\Component;

use PHPUnit\Framework\TestCase;
use Ulrack\Identifier\Component\UlidPidGenerator;

/**
 * @coversDefaultClass Ulrack\Identifier\Component\UlidPidGenerator
 * @covers Ulrack\Identifier\Component\UlidGenerator
 */
class UlidPidGeneratorTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::generate
     */
    public function testGenerate(): void
    {
        $subject = new UlidPidGenerator();
        $result = $subject->generate();
        $this->assertEquals(30, strlen($result));
        $this->assertNotEquals($result, $subject->generate());
    }
}
