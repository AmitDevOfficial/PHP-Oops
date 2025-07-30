<?php

    class database{
        public function connect() {
            $this->name = "localhost";
            $this->user = "root";
            $this->pass = "";
            $this->database = "employes";

            $conn = new mysqli($this->name, $this->user, $this->pass, $this->database);

            return $conn;

            // if($conn->connect_error){
            //     echo $conn->connect_error;
            // }else{
            //     echo"Database connect";
            // }
        }
    }

    // $obj = new database();
    // $obj->connect();

    class quries extends database {
        /*---Read data in our Database---*/
        public function getData() {
            $sql ="SELECT * FROM user ORDER BY firstname ASC";
            $data = $this->connect()->query($sql);
            if($data->num_rows>0){
                // echo "Data exits";
                while($result=$data->fetch_assoc()){
                    $arr[] = $result;
                }
                return $arr;
            }else{
                echo "Data not exit";
            }
        }

        /*---Insert Data in our Database---*/
        public function addData($data){
            $firstname = $data['firstname'];
            $lastname = $data['lastname'];
            $email = $data['email'];
            $sql ="INSERT INTO user (firstname,lastname,email) VALUES('$firstname','$lastname','$email')";
            $data = $this->connect()->query($sql);

            if($data){
                echo "Data Inserted";
            }else{
                echo "Data not Inserted....!";
            }

            // echo "String";
            // print_r($data);
        }


        /*---Showing data in form for update---*/
       public function showDataUpdate($id) {
            // echo "Hello showDataUpdate - $id<br>";

            $sql = "SELECT * FROM user WHERE id = $id";
            $data = $this->connect()->query($sql);

            $result = $data->fetch_assoc();
            // echo "<pre>";
            // print_r($result); 
            return $result;
        }


        /*---Update Data---*/
        public function updateData($data){

            $firstname = $data['firstname'];
            $lastname = $data['lastname'];
            $email = $data['email'];
            $id = $data['id'];

            $sql ="UPDATE user SET firstname = '$firstname', lastname='$lastname', email='$email' WHERE id='$id'";
            $data = $this->connect()->query($sql);

        }


        /*---Search Data filter---*/
        public function searchData($search) {
            $conn = $this->connect();
            $search = $conn->real_escape_string($search);

            $sql = "SELECT * FROM user 
                    WHERE firstname LIKE '%$search%' 
                    OR lastname LIKE '%$search%' 
                    OR email LIKE '%$search%' 
                    OR id = '$search'
                    ORDER BY firstname ASC";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $arr[] = $row;
                }
                return $arr;
            } else {
                return []; // empty result
            }
        }

        /*---Delete user from Database---*/
        public function dltData($dltid){
            $conn = $this->connect();
            $sql = "DELETE FROM user WHERE id = $dltid";
            $conn->query($sql);
            header("Location: view_data.php");
            exit;
        }

        /*---Total user in Database---*/
        public function totalUsers() {
            $sql = "SELECT COUNT(*) AS total_users FROM user";
            $result = $this->connect()->query($sql);
            $row = $result->fetch_assoc();
            return $row['total_users'];
        }
    }

    $obj = new quries();
    $fetch_data = $obj->getData();
    // echo "<pre>";
    //  print_r($fetch_data);



    /*---When we click submit button then data is inserted---*/

    if(isset($_POST['submit'])){
        // echo "Data inserted....!";
        // print_r($_POST);
        $obj->addData($_POST);
        header("Location: view_data.php");
        exit;
    }

    if(isset($_POST['update'])){
        // echo "Data inserted....!";
        // print_r($_POST);
        $obj->updateData($_POST);
        header("Location: view_data.php");
        // exit;
    }

    if(isset($_GET['dltid'])){
        // echo "Data Deleted...", $_GET['id'];
        // print_r($_GET);
         $obj->dltData($_GET['dltid']);
    }

?>