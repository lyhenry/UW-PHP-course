<?php

// Tests for NS_Civic

class CivicTest extends PHPUnit_Framework_TestCase
{

    private $_testYear = '1995';
    private $_name = 'Honda Civic';

    public function testCivic()
    {
        $car = new NS_Civic\Civic();
        $this->assertObjectHasAttribute('_make', $car);
        $this->assertObjectHasAttribute('_model', $car);
        return $car;
    }
 
    /**
     * @depends testCivic
     */
    public function test_set_Year($car)
    {
        $car->setYear($this->_testYear);
        $this->assertEquals($this->_testYear, $car->getYear());
        return $car;
    }
 
    /**
     * @depends testCivic
     */
    public function test_getName($car)
    {
        $this->assertEquals($this->_name, $car->getName());
        return $car;
    }
 
    /**
     * @depends testCivic
     */
    public function test_getNumberOfDoors($car)
    {
        $this->assertNull($car->getNumberOfDoors());
        return $car;
    }
 
    /**
     * @depends testCivic
     */
    public function test_honk($car)
    {
        $this->assertEquals('honk honk!', $car->honk());
        return $car;
    }
 
}

?>
