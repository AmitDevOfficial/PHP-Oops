<?php 

    abstract class myClass{
        public $name = "Amit Vishwakarma\n";
        abstract function helloFunc();
    }

    class abc extends myClass{
        function helloFunc() {
            echo "Hello Abstract Function\n";
            echo $this->name;
        }
    }

    class xyz extends abc{
        function helloFunc() {
            parent::helloFunc();
            echo "My name is Amit Vishwkarma and this is abstract function";
        }
    }

    $obj = new xyz();
    $obj->helloFunc();

?>