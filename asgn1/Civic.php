<?php

    /**
     * Class to represent a Civic car
     * Inherits from class Car
     */
     class Civic extends Car implements VehicleInterface
     {
        /**
         * make and model
         */
        public $_make = 'Honda';
        public $_model = 'Civic';

        /**
         * Set parent class variable '_numberOfDoors'
         */
        public $_numberOfDoors = null;

        function __construct() {
             print '<p>Congratulations on your new '
                .$this->getName()
                .'!</p>';
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
         * @return 'honk honk'
         */
        public function honk() {
            return 'honk honk!';
        }
     }

?>
