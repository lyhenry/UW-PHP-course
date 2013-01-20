<?php

    /**
     * Class to represent a Civic Coupe car
     * Inherits from class Civic
     */
     class CivicCoupe extends Civic 
     {
        /**
         * Class variable style
         */
        public $_style = "Coupe";

        /**
         * Set parent class variable '_numberOfDoors'
         */
        public $_numberOfDoors = 4;

        function __construct() {
             print '<p>Congratulations on your new '
                .$this->_numberOfDoors.' door '
                .$this->getName()
                .'!</p>';
        }

        /**
         * Method getName
         * @return string
         */
        public function getName() {
            return $this->_make.' '.$this->_model.' '.$this->_style;
        }

     }

?>
