<?php

// Tests for NS_Silverado

class Silverado extends PHPUnit_Framework_TestCase
{

    private $_testYear = '1995';
    private $_name = 'Chevrolet Silverado';
    private $_numberOfDoors = 2;

    public function testSilverado()
    {
        $truck = new NS_Silverado\Silverado();
        $this->assertObjectHasAttribute('_make', $truck);
        $this->assertObjectHasAttribute('_model', $truck);
        return $truck;
    }
 
    /**
     * @depends testSilverado
     */
    public function test_set_Year($truck)
    {
        $truck->setYear($this->_testYear);
        $this->assertEquals($this->_testYear, $truck->getYear());
        return $truck;
    }
 
    /**
     * @depends testSilverado
     */
    public function test_getName($truck)
    {
        $this->assertEquals($this->_name, $truck->getName());
        return $truck;
    }
 
    /**
     * @depends testSilverado
     */
    public function test_getNumberOfDoors($truck)
    {
        $this->assertEquals($this->_numberOfDoors, $truck->getNumberOfDoors());
        return $truck;
    }
 
    /**
     * @depends testSilverado
     */
    public function test_honk($truck)
    {
        $this->assertEquals('oogah oogah!', $truck->honk());
        return $truck;
    }
 
}

?>
