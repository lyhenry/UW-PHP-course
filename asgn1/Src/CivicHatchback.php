<?php
    namespace NS_CivicHatchback;

    /**
     * Class to represent a Civic Hatchback car
     * Inherits from class Civic
     */
     class CivicHatchback extends \NS_Civic\Civic
     {

        /**
         * Class variable style
         * Describes the style of this model
         */
        public $_style = 'Hatchback';

        /**
         * Set parent class variable '_numberOfDoors'
         */
        public $_numberOfDoors = 3;

        /**
         * Constructor method
         * Prints a stings on object creation containing info
         *  for this specific class
         */
        function __construct() {
             print '<p>Congratulations on your new '
                .$this->_numberOfDoors.' door '
                .$this->getName()
                .'!</p>';
        }

        /**
         * Method getName
         * @return string consisting of make, model, and style
         */
        public function getName() {
            return $this->_make.' '.$this->_model.' '.$this->_style;
        }

     }

?>
