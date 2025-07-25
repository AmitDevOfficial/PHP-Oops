<?php 

    // Abstract class me abstract name se function bhi banna padta he or us abstract function ko uske child class ke ander function me same name ke function ko use krte he  -- agr hume same sturcture of function chahiye to --
    // Abstact funciton ko hum tab use krte he jab hum apne function ko dikhana nhi chahte mtlb user ko kam se mtlb hona chahiye function ya code se nhi


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