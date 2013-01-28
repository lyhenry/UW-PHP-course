<?php
    namespace NS_Civic;

    /**
     * Class to represent a Civic car
     * Inherits from class Car
     * Implements interface VehicleInterface
     */
     class Civic extends \NS_Car\Car implements \NS_VehicleInterface\VehicleInterface
     {
        /**
         * Class attributes make and model
         */
        public $_make = 'Honda';
        public $_model = 'Civic';

        /**
         * Set parent class variable '_numberOfDoors'
         */
        public $_numberOfDoors = null;

        /**
         * Constructor method
         * Prints a stings on object creation containing info
         *  for this specific class
         */
        function __construct() {
             print '<p>Congratulations on your new '
                .$this->getName()
                .'!</p>';
        }

        /**
         * Method getName
         * @return string consisting of make and model
         */
        public function getName() {
            return $this->_make.' '.$this->_model;
        }

        /**
         * Interface method honk
         * @return 'honk honk'
         */
        public function honk() {
            return 'honk honk!';
        }
     }

?>
