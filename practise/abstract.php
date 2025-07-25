<?php 


// Abstact funciton ko hum tab use krte he jab hum apne function ko dikhana nhi chahte mtlb user ko kam se mtlb hona chahiye function ya code se nhi

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