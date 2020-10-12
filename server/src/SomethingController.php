<?php

    class User {

        public static $NUMBER_OF_USERS = 0;

        private $name;
        private $age;
    
        function __construct( $name, $age ) {
            $this->name = $name;
            $this->age = $age;

            self::privateFunc();

            self::$NUMBER_OF_USERS++;
        }
    
        function getName() {
            return $this->name;
        }
    
        function isAdult() {
            return $this->age >= 18?"an Adult":"Not an Adult";
        }

        private function privateFunc() {
            echo "private, you cant see <br />";
        }

    }

?>