<?php 

    interface interOne{
        public function divides($a, $b);
        public function multi();
    }

    class child implements interOne{

        function divides($a, $b) {
            return $a + $b. "\n";
        }

        function multi() {
            echo 2*2 ."\n";
        }
        
        function name() {
            echo "Amit Vishwakarma";
        }
    }

    $obj = new child();
    echo $obj->divides(10, 20);
    $obj->multi();
    $obj->name();

?>