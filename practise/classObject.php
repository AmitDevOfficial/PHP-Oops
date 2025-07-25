<?php 

    class myClass {
        public $brand, $model;

        function startEngine() {
            echo "This is the <strong>$this->brand</strong> car - and the Model numbber of this car is <strong>$this->model</strong>, Now starting the engine";
        }
    }

    $obj = new myClass();

    $obj->brand = "RollsRoyas";
    $obj->model = "123456789";

    $obj-> startEngine();

?>
