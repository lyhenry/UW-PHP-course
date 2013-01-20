<?php

    /**
     * Class to represent a Chevrolet Silverado truck
     * Inherits from class Truck
     */
     class Silverado extends Truck implements VehicleInterface
     {
        /**
         * Class variable style
         */
        public $_make = "Chevrolet";
        public $_model = "Silverado";

        /**
         * Set parent class variable '_numberOfDoors'
         */
        public $_numberOfDoors = 2;

        function __construct() {
             print '<p>Congratulations on your new '
                .$this->getName().'!!</p>';
        }

        /**
         * Method getName
         * @return string
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
