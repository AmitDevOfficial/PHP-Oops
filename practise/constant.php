<?php

    //Constant
    
    // class myConst {
    //     const myName = "Amit vishwakarma";
    // }

    // echo myConst::myName;


    class myConst {

        const myName = "Amit Vishwakarma\n";

        function detail(){
            echo "Hello Welcome ", self::myName;
        }
    }

    echo myConst::myName;

    $obj = new myConst();
    $obj->detail();
?>