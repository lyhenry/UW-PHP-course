<?php

    /**
    * Class to represent a truck
    */
    class Truck extends Vehicle implements VehicleInterface
    {

        /**
         * Class variables make and  model
         */
        public $_make = "Generic";
        public $_model = "Truck";

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
         * @return string
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
         * @return an empty string
         */
        public function honk() {
            return '';
        }

    }

?>
