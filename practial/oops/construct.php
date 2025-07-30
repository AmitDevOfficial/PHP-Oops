<?php 

    class myConstruct {

        public $city = "Dewas";

        function __destruct() {
            echo "Hello Destruct Function";
        }

        function __construct() {
            echo "Hello Construct Function \n",  $this->city, "\n";
            // $this->city;
        }

        function showName() {
            echo "Amit Vishwakarma\n";
        }
    }

    $obj = new myConstruct();
    $obj->showName();

?>