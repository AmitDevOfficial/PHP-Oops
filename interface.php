<?php 

    //Interface
    interface Animal {
        public function makeSound();
    }

    class Dog implements Animal {
        function makeSound() {
            echo "Dog : Woof Woof....! <br>";
        }
    }

    class Cat implements Animal {
        function makeSound() {
            echo "Cat : Meow Meow....!";
        }
    }


    //InterFace in Action
    $dog = new Dog();
    $dog->makeSound();

    $cat = new Cat();
    $cat->makeSound();
?>