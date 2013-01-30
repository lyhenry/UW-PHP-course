<?php

// Tests for NS_CivicHatchback

class CivicHatchbackTest extends PHPUnit_Framework_TestCase
{

    private $_testYear = '1995';
    private $_name = 'Honda Civic Hatchback';
    private $_numberOfDoors = 3;

    public function testCivicHatchback()
    {
        $car = new NS_CivicHatchback\CivicHatchback();
        $this->assertObjectHasAttribute('_make', $car);
        $this->assertObjectHasAttribute('_model', $car);
        $this->assertObjectHasAttribute('_style', $car);
        return $car;
    }
 
    /**
     * @depends testCivicHatchback
     */
    public function test_set_Year($car)
    {
        $car->setYear($this->_testYear);
        $this->assertEquals($this->_testYear, $car->getYear());
        return $car;
    }
 
    /**
     * @depends testCivicHatchback
     */
    public function test_getName($car)
    {
        $this->assertEquals($this->_name, $car->getName());
        return $car;
    }
 
    /**
     * @depends testCivicHatchback
     */
    public function test_getNumberOfDoors($car)
    {
        $this->assertEquals($this->_numberOfDoors, $car->_numberOfDoors);
        $this->assertEquals($this->_numberOfDoors, $car->getNumberOfDoors());
        return $car;
    }
 
    /**
     * @depends testCivicHatchback
     */
    public function test_honk($car)
    {
        $this->assertEquals('honk honk!', $car->honk());
        return $car;
    }
 
}

?>
