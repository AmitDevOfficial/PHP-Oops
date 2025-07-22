<?php 

    // --Encapsulation - means ki hum apnse varibale or function ko public private or protect krna chahte he isliye taki unhe koi access na kar paye

    // ------------------------------------------------------------------

    /* Isme three methods hoti he 

    --- Public -- Protected -- Private --- */

/*
    class myEncapOne {

        protected $number = 100;

        function __construct(){
            $this->number;
        }

        //Getter to get value with protected -- we can also set the value with the help of setter
        // but we can not access and change the direct value protected
        function getVal() {
            return $this->number;
        }
    }


    $obj = new myEncapOne();
    // echo $obj->number = 200;
    echo $obj->getVal();

*/

    // Private --


    // Private ko agr humne ek class me delcare kardiya to vo sirf usi class me access hoga dusri class me acess nhi hoga chahe hum interitance ka use kre class ko extend kre fir bhi vo access nhi hoga or error throw krega

    class myFunOne {

        private $name = "Amit Vishwakarma";
        
        function __constructOne() {
            echo $this->name;
        }

        // function showName(){
        //     echo $this->name;
        // }

    }

    $obj = new myFunOne();
    $obj->__constructOne()

?>