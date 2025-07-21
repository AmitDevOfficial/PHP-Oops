<?php 

    // Polymorphism

    class Dog {
        function makeSound() {
            echo "Dog : Woof - Woof...! <br>";
        }
    }

    class Cat {
        function makeSound() {
            echo "Cat : Meow Meow...! <br>";
        }
    }

    class Cow {
        function makeSound(){
            echo "Cow : Moo Mooo...!";
        }
    }
    
    // Polymorphism in action
    $animals = [new Dog(), new Cat(), new Cow()];

    foreach($animals as $animal) {
        $animal->makeSound();
    }

?>  