<?php 

    // Inheritance - inherit parent class to the child class -- we can also access the parent property in child class

    class Base {

        function __construct(){
            echo "This is Base class<br>";
        }

    }

    class child extends Base {
        function __construct(){
            parent::__construct();      // -- we can access the parent property like this
            echo "This is child inherit to base class<br>";
        }


        function myFun(){
                    echo "Hello Amit";
                }
    }

    $obj = new child();
    $obj->myFun();

?>