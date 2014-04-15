<?php
namespace Fuel\Core;
use \Model\Sample;

/**
 * Sapmle class tests
 *
 * @group App
 */
class Tests_Sample extends TestCase {

    /**
     * Tests sample method
     *
     * @test
     */
    public function test_sample1()
    {
        new \Model\Sample();
        $this->assertEquals(0, 0);
    }

}
