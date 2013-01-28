<?php
    namespace NS_Silverado;

    /**
     * Class to represent a Chevrolet Silverado truck
     * Inherits from class Truck
     * Implements interface VehicleInterface
     */
     class Silverado extends \NS_Truck\Truck implements \NS_VehicleInterface\VehicleInterface
     {
        /**
         * Class variable style
         */
        public $_make = 'Chevrolet';
        public $_model = 'Silverado';

        /**
         * Set parent class variable '_numberOfDoors'
         */
        public $_numberOfDoors = 2;

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
         * @return 'oogah oogah'
         */
        public function honk() {
            return 'oogah oogah!';
        }

     }

?>
