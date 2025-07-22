<?php
    class myEncap {
        private $name, $age;


        //Setter method to set name
        function setName($name){
            $this->name = $name;
        }

        //Getter method to get name
        function getName() {
            return $this->name;
        }

        //Setter method to set age
        function setAge($age){
            if($age > 0){
                $this->age = $age;
            }else{
                echo "InVaild age!<br>";
            }
        }

        //Getter method to get age
        function getAge(){
            return $this->age;
        }

    }

    //Object 
    $obj = new myEncap();
    $obj->setName("Amit");
    $obj->setAge("26");

    echo "Name : ". $obj->getName() ."<br>";
    echo "Age : ". $obj->getAge() ."<br>";
?>