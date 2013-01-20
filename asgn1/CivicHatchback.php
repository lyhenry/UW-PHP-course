<?php

    /**
     * Class to represent a Civic Hatchback car
     * Inherits from class Civic
     */
     class CivicHatchback extends Civic
     {

        /**
         * Class variable style
         */
        public $_style = 'Hatchback';

        /**
         * Set parent class variable '_numberOfDoors'
         */
        public $_numberOfDoors = 3;

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
