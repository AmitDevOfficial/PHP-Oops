<?php

    /* Inheritance - Inheritance extend the parent class to the child class */

    // Parent
    class vechile {
        public $brand = "Unknow";

        function startEngine() {
            echo "Engine start of this car <b>$this->brand</b><br>";
        }
    }

    // Child
    class car extends vechile{
        public $model;
        
        function showDetails() {
            echo "Brand : $this->brand <br>";
            echo "Model : $this->model";
        }
    }


    $myCar = new car();
    $myCar->brand = "Swift Maruti";
    $myCar->model = "2025";
    $myCar->startEngine();
    $myCar->showDetails();
?>