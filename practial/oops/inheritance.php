<?php 

   class base {
        function myInherit() {
            echo "Hey i am inherit\n";
        }
   }

   class child extends base{
        function inOne() {
            echo "Hello i am child and i am inherit base funciton";
        }
   }

   $obj = new child();
   $obj->inOne();

   
?>