<?php 

    class myClass {

        public $name = "Amit\n";

        function one() {
            $city = "Delhi";
            echo "Hello Good Morning\n";
            echo $this->name;
            echo $city;
        }

        function two() {
            echo "Amit Vishwakarma\n";
            // echo $this->city;
        }

        function three() {
            echo "Welcome to the Web Development World....!";
            echo $this->name;
        }
    }

    $obj = new myClass();

    $obj->one();
    $obj->two();
    $obj->three();

?>