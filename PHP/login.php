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


            // Get Permission
            $permission_query = "
            select permission from manager where username='$user';
            ";

            // Get Fullname
            $fullname_query = "
            select fullname from manager where username='$user';
            ";

            // Get Management
            $managment_query = "
            select permission from manager where username='$user';
            ";

            // Run Query
            $get_permission_admin = $mysqli->query($permission_query);
            $get_fullname_admin = $mysqli->query($fullname_query);
            $get_managment_admin = $mysqli->query($manage_query);

            // Get Item As Array
            $admin_permission = $get_permission_admin->fetch_all()[0][0];
            $admin_fullname = $get_fullname_admin->fetch_all()[0][0];
            $admin_managment = $get_managment_admin->fetch_all()[0][0];


            // Push In Session
            $_SESSION["permission"] = "dashboard";
            $_SESSION["admin-permission"] = "$admin_permission";
            $_SESSION["admin-name"] = "$admin_fullname";
            $_SESSION["admin-managment"] = "$admin_managment";


            header("Location:../views/index.php");

        }else{
            echo "Username Or Password In not Valid !";
        }
    }
            }

    }else{
        echo "Input Is Empty";
    }

}

?>