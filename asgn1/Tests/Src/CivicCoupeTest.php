<?php

// Tests for NS_CivicCoupe

class CivicCoupeTest extends PHPUnit_Framework_TestCase
{

    private $_testYear = '1995';
    private $_name = 'Honda Civic Coupe';
    private $_numberOfDoors = 4;

    public function testCivicCoupe()
    {
        $car = new NS_CivicCoupe\CivicCoupe();
        $this->assertObjectHasAttribute('_make', $car);
        $this->assertObjectHasAttribute('_model', $car);
        $this->assertObjectHasAttribute('_style', $car);
        return $car;
    }
 
    /**
     * @depends testCivicCoupe
     */
    public function test_set_Year($car)
    {
        $car->setYear($this->_testYear);
        $this->assertEquals($this->_testYear, $car->getYear());
        return $car;
    }
 
    /**
     * @depends testCivicCoupe
     */
    public function test_getName($car)
    {
        $this->assertEquals($this->_name, $car->getName());
        return $car;
    }
 
    /**
     * @depends testCivicCoupe
     */
    public function test_getNumberOfDoors($car)
    {
        $this->assertEquals($this->_numberOfDoors, $car->_numberOfDoors);
        $this->assertEquals($this->_numberOfDoors, $car->getNumberOfDoors());
        return $car;
    }
 
    /**
     * @depends testCivicCoupe
     */
    public function test_honk($car)
    {
        $this->assertEquals('honk honk!', $car->honk());
        return $car;
    }
 
}

?>
