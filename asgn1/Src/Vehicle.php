<?php

    /**
     * Abstract class to represent a vehicle
     */
    abstract class Vehicle
    {
        /**
         * Number of doors
         * @return int 
         */
         protected $_numberOfDoors;

        /**
         * Vehicle year
         * @return int 
         */
         protected $_year;

        /**
         * Vehicle make
         * @return string 
         */
         protected $_make;

        /**
         * Vehicle style
         * @return string 
         */
         protected $_style;

        /**
         * Vehicle model
         * @return string 
         */
         protected $_model;

         /**
          * Return the year of the vehicle
          * @return int
          */
         abstract public function getYear();

         /**
          * Set the year of the vehicle
          */
         abstract public function setYear($year);

        /**
         * Method getName
         * @return string
         */
        abstract public function getName();

        /**
         * Method getNumberOfDoors
         * @return int
         */
        abstract public function getNumberOfDoors();
    }

?>
