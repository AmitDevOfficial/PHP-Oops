<?php 

    // Abstract class
    abstract class Animal {

        // Abstract method (without body)
        abstract function makeSound();

        //Normal Function
        function breathe(){
            echo "Animal is breathing...!\n";
        }
    }


    //Derived Class 
    class Dog extends Animal {
        function makeSound() {
            echo "Dog barks : Woof Woofff..!\n";
        }
    }


    class Cat extends Animal{
        function makeSound() {
            echo "Cat meows: Meow Meow...!";
        }
    }


    $dog = new Dog();
    $dog->breathe();
    $dog->makeSound();

    $cat = new cat();
    $cat->makeSound();
?>