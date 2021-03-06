<?php

// Tests for NS_Car

class CarTest extends PHPUnit_Framework_TestCase
{

    private $_testYear = '1995';
    private $_name = 'Generic Car';

    public function testCar()
    {
        $car = new NS_Car\Car();
        $this->assertObjectHasAttribute('_make', $car);
        $this->assertObjectHasAttribute('_model', $car);
        return $car;
    }
 
    /**
     * @depends testCar
     */
    public function test_set_Year($car)
    {
        $car->setYear($this->_testYear);
        $this->assertEquals($this->_testYear, $car->getYear());
        return $car;
    }
 
    /**
     * @depends testCar
     */
    public function test_getName($car)
    {
        $this->assertEquals($this->_name, $car->getName());
        return $car;
    }
 
    /**
     * @depends testCar
     */
    public function test_getNumberOfDoors($car)
    {
        $this->assertNull($car->getNumberOfDoors());
        return $car;
    }
 
    /**
     * @depends testCar
     */
    public function test_honk($car)
    {
        $this->assertEmpty($car->honk());
        return $car;
    }
 
}

?>
