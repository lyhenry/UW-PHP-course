<?php

    /**
    * Class to represent a car
    * Inherits from class Vehicle
    * Implements interface VehicleInterface
    */
    class Car extends Vehicle implements VehicleInterface
    {
        /**
         * Class attributes make and model
         */
        public $_make = 'Generic';
        public $_model = 'Car';

        /**
         * Method setYear
         * @return int
         */
        public function setYear($year) {
            $this->_year = $year;
        }

        /**
         * Method getYear
         * @return int
         */
        public function getYear() {
            return $this->_year;
        }

        /**
         * Method getName
         * @return string consisting of make and model
         */
        public function getName() {
            return $this->_make.' '.$this->_model;
        }

        /**
         * Method getNumberOfDoors
         * @return int
         */
        public function getNumberOfDoors() {
            return $this->_numberOfDoors;
        }

        /**
         * Interface method honk
         * @return empty string for this class
         */
        public function honk() {
            return '';
        }
    }

?>
