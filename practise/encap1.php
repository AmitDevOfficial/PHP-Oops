<?php

class Person {
    private $name;
    private $age;

    // Setter for name
    public function setName($name) {
        $this->name = $name;
    }

    // Setter for age
    public function setAge($age) {
        if ($age > 0) {
            $this->age = $age;
        } else {
            echo "Invalid age. Please enter a positive number.\n";
        }
    }

    // Getter to show result
    public function showDetails() {
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
    }
}

// Input from user
echo "Enter your name: ";
$name = trim(fgets(STDIN)); // Console input

echo "Enter your age: ";
$age = (int)trim(fgets(STDIN)); // Convert to integer

// Object create
$obj = new Person();
$obj->setName($name);
$obj->setAge($age);

// Output
$obj->showDetails();

?>
