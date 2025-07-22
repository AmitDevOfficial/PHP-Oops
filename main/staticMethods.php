<?php 

    // Static method -- we can access the varible and function with creating obj then we use static methods --

    class abc {

        public static $name = "Amit Vishwakarma";

        public static function employee() {
            echo self::$name;
        }
    }

    class xyz extends abc {
        public static function show() {
            echo parent::employee();
        }
    }

    // echo abc::$name;
    // echo abc::employee;
    $obj = new xyz();
    
    $obj->show();
?>