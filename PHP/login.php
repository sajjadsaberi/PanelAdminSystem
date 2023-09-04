<?php
include_once "../utils/connection.php";

session_start();


$user = $_POST["username"];
$pass = $_POST["password"];

// Submit
if(!empty($_POST["submit"])){
 
    // Validation Input
    if(!empty($user) && !empty($pass)){

$loweruser = strtolower($user);
// Username & Password Validate

            $manage_query = "
            select * from manager;
            ";

            $runner = $mysqli->query($manage_query);

            

            if ($runner->num_rows > 0) {

                for ($i = 0 ; $i <= $runner->num_rows ; $i++) {
                $assoc = $runner->fetch_assoc();
        if($loweruser == $assoc["username"] && $pass == $assoc["password"]){
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
            echo "Username Or Password In not Valid !";
            echo $assoc["username"];
        }
    }
            }

    }else{
        echo "Input Is Empty";
    }

}

?>