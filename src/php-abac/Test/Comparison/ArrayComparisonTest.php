<?php

namespace PhpAbac\Test\Comparison;

use PhpAbac\Comparison\ArrayComparison;

class ArrayComparisonTest extends \PHPUnit_Framework_TestCase {
    /** @var ArrayComparison **/
    protected $comparison;
    
    public function setUp() {
        $this->comparison = new ArrayComparison();
    }
    
    public function testIsIn() {
        $this->assertTrue($this->comparison->isIn(serialize([
            'value',
            'expected_value',
            'another_value'
        ]), 'expected_value'));
        $this->assertFalse($this->comparison->isIn(serialize([
            'value',
            'another_value'
        ]), 'expected_value'));
    }
    
    public function testIsNotIn() {
        $this->assertTrue($this->comparison->isNotIn(serialize([
            'value',
            'another_value'
        ]), 'expected_value'));
        $this->assertFalse($this->comparison->isNotIn(serialize([
            'value',
            'expected_value',
            'another_value'
        ]), 'expected_value'));
    }
}