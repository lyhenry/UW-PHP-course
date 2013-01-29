<?php

// Tests for NS_Car

class CarTest extends PHPUnit_Framework_TestCase
{
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
    public function test_setYear($car)
    {
        $testYear = '1995';
        $car->setYear($testYear);
        $this->assertEquals($testYear, $car->getYear());
 
        return $car;
    }
 
}

?>
