<?php
namespace Derhansen\CodeceptionTest\Tests\Unit\Service;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Nimut\TestingFramework\TestCase\UnitTestCase;

/**
 * @author Torben Hansen <derhansen@gmail.com>
 */
class DummyServiceTest extends UnitTestCase
{
    /**
     * @var \Derhansen\CodeceptionTest\Service\DummyService
     */
    protected $subject = null;

    /**
     * Setup
     *
     * @return void
     */
    protected function setUp()
    {
        $this->subject = new \Derhansen\CodeceptionTest\Service\DummyService();
    }

    /**
     * Teardown
     *
     * @return void
     */
    protected function tearDown()
    {
        unset($this->subject);
    }

    /**
     * @test
     */
    public function sayHelloReturnsExpectedStringForGivenUser()
    {
        $this->assertEquals('Hello Torben', $this->subject->sayHello('Torben'));
    }
}
