<?php 

    // class myClass {
    //     static function myFun() {
    //         echo "Hello from static method...!";
    //     }
    // }

    // myClass::myFun();


    class myClassOne {
        static function add($a, $b){
            return $a + $b;
        }
    }

    echo myClassOne::add(5,5);
    

?>