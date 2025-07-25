<?php 

    // we can also declare the value in contructor in php
    // Constructor and destructor run automatically without createing its instances - only create  instance with its class

    class myConstruct {

        function __construct(){
            echo "Hey i am construct";
            echo $this->x = 100;
        }

        function __destruct(){
            echo "Hey i am destruct";
            echo $this->x;
        }
    }

    $obj = new myConstruct();
?>