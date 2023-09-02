<?php
include_once "../utils/connection.php";

session_start();


$user = $_POST["username"];
$pass = $_POST["password"];

// Submit
if(!empty($_POST["submit"])){
 
    // Validation Input
    if(!empty($user) && !empty($pass)){

// Username & Password Validate
        if($user == "amir" && $pass == 1234){
            $_SESSION["permission"] = "dashboard";



            // Add User Query
            // $add_user = 'INSERT INTO users(name , fathername , codemeli , shsh)
            // VALUES ("mahdi" , "ali" , 12341234 , 214214);
            // ';

            // $test = $mysqli->query($add_user);
            // $show = $test->fetch_assoc();
            // echo "<pre>";
            // print_r($show);
            // echo "</pre>";



            header("Location:../views/index.php");
        }else{
            echo "Details is not valid";
        }

    }else{
        echo "Input Is Empty";
    }

}

?>