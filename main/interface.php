<?php 

    // Interface is same like an abstact method --

    // Interface - we use interface because we can implement multiple class with one class with the help of (--interface--) using of implement--

    interface inter1 {
        public function sum();
        public function multiple();
    }


    class child implements inter1 {
        function sum() {
            echo 10+5,"\n";
        }
        function multiple() {
            echo 2*2;
        }
    }

    $obj = new child();
    $obj->sum();
    $obj->multiple();
?>