<?php

/**
 * Dummy Test file.
 *
 * @package Dummy
 */

declare(strict_types=1);

namespace DummyTests;

use PHPUnit\Framework\TestCase;

/**
 * Dummy Test class.
 */
class DummyTest extends TestCase
{
    /**
     * Dummy test - does nothing.
     *
     * @return void
     */
    public function testFunction()
    {
        // Assert.
        $result = \Dummy\DummyClass::returnTrue();
        $this->assertTrue($result);
    }
}
