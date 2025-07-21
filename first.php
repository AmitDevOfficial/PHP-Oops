<?php 

class calCulation {
    public $a, $b, $c;

    function sum() {
        $this -> c = $this -> a + $this -> b;
        return $this -> c;
    }

    function sub() {
        $this -> c = $this -> a + $this -> b;
        return $this -> c;
    }
}

/*---Object---*/

$c1 = new calCulation();

$c1 -> a = 10;
$c1 -> b = 30;

echo "The value of sum is -  ",  $c1 -> sum();


?>
