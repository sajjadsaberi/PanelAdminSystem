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

            $permission_query = "
            select id from manager where username='$user';
            ";

            $get_permission_admin = $mysqli->query($permission_query);
            $admin_permission = $get_permission_admin->fetch_all()[0][0];

            $_SESSION["permission"] = "dashboard";
            $_SESSION["admin-permission"] = "$admin_permission";


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