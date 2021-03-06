<?php

// Tests for NS_Truck

class TruckTest extends PHPUnit_Framework_TestCase
{

    private $_testYear = '1995';
    private $_name = 'Generic Truck';

    public function testTruck()
    {
        $truck = new NS_Truck\Truck();
        $this->assertObjectHasAttribute('_make', $truck);
        $this->assertObjectHasAttribute('_model', $truck);
        return $truck;
    }
 
    /**
     * @depends testTruck
     */
    public function test_set_Year($truck)
    {
        $truck->setYear($this->_testYear);
        $this->assertEquals($this->_testYear, $truck->getYear());
        return $truck;
    }
 
    /**
     * @depends testTruck
     */
    public function test_getName($truck)
    {
        $this->assertEquals($this->_name, $truck->getName());
        return $truck;
    }
 
    /**
     * @depends testTruck
     */
    public function test_getNumberOfDoors($truck)
    {
        $this->assertNull($truck->getNumberOfDoors());
        return $truck;
    }
 
    /**
     * @depends testTruck
     */
    public function test_honk($truck)
    {
        $this->assertEmpty($truck->honk());
        return $truck;
    }
 
}

?>
