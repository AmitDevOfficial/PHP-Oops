<?php

//Construct phele run hota he 

//Destruct last me run hota he -- chahe jo bhi ho 

    class myClass {

        //construct
        function __construct() {
            echo "This is <strong> construct </strong> <br>";
        }

        function myFunction() {
            echo "This is normal Function <br>";
        }

        //destruct
        function __destruct() {
            echo "This is <strong> destruct </strong>";
        }

    }

    $obj = new myClass();
    $obj->  myFunction();

?>