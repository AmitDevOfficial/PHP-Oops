<?php 

    class Database {
        const DB_Name = "localhost";
        const DB_User = "root";
        const DB_Password = "123";

        function connect() {
            echo "connecting to " . self::DB_Name . " and the user is " . self::DB_User;
        }
    }

    $db = new Database();
    $db->connect();

?>