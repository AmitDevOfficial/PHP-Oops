<?php 

    trait myTrait {
        public function showMsg() {
            echo "This is trait\n";
        }

        // public function myMsg() {
        //     echo "This is trait two\n";
        // }
    }

    trait myTrait1 {
        public function myMsg() {
            echo "This is trait two";
        }
    }

    class a {
        use myTrait;
        use myTrait1;
    }

    class b {
        use myTrait;
    }

    $obj1 = new a();

    $obj1-> showMsg();
    $obj1-> myMsg();
   

?>