<?php 

    class user {
        public static $userCount = 0;

        public function __construct() {
            self::$userCount++;
        }
    }

    $obj1 = new User();
    $obj1 = new User();
    $obj1 = new User();
    $obj1 = new User();
    $obj1 = new User();

    echo "Total Users : " .user::$userCount;

?>