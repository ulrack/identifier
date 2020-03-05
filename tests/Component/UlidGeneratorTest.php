<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Identifier\Tests\Component;

use PHPUnit\Framework\TestCase;
use Ulrack\Identifier\Component\UlidGenerator;

/**
 * @coversDefaultClass Ulrack\Identifier\Component\UlidGenerator
 */
class UlidGeneratorTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::generate
     * @covers ::getCurrentTime
     * @covers ::ensureRandom
     * @covers ::generateRandom
     */
    public function testGenerate(): void
    {
        $subject = new UlidGenerator();
        $result = $subject->generate();
        $this->assertEquals(26, strlen($result));
        $this->assertNotEquals($result, $subject->generate());
    }
}
