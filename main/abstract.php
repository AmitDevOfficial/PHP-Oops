<?php 

    // Abstract class me abstract name se function bhi banna padta he or us abstract function ko uske child class ke ander function me same name ke function ko use krte he  -- agr hume same sturcture of function chahiye to --


    abstract class myAbstract {
        abstract function helloFun();
    }

    class myClassName extends myAbstract {
        function helloFun() {
            echo "Hello Morning Star";
        }
        // function ourFun() {
        //     echo "Hello baby girl...!";
        // }
    }

    class yourClass extends myClassName {
        function helloFun() {
            parent::helloFun();
            echo "Your are Devil....!";
        }
    }

    $obj = new yourClass();

    $obj->helloFun();

    $obj->ourFun();

?>