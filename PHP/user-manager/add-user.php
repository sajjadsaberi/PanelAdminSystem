<?php
session_start();

include_once "../../utils/connection.php";

$name = $_POST["name"];
$fathername = $_POST["fathername"];
$codemeli = $_POST["codemeli"];
$gender = $_POST["gender"];
$birthdate = $_POST["birthdate"];
$signdate = $_POST["signdate"];
$shsh = $_POST["shsh"];
$loc = $_POST["loc"];
$education = $_POST["education"];
$din = $_POST["din"];
$mazhab = $_POST["mazhab"];
$job = $_POST["job"];
$address = $_POST["address"];
$taahol = $_POST["taahol"];
$outdate = $_POST["outdate"];
$dublelog = $_POST["dublelog"];
$logdate = $_POST["signdate"];
$adminlog = $_POST["adminlog"];
$police = $_POST["police"];

if(!empty($_POST["submit"])){

    if(!empty($name) && !empty($fathername) && !empty($codemeli) && !empty($birthdate) && !empty($signdate) && !empty($shsh) && !empty($loc) && $education != "null" && $gender != "null" && !empty($din) && !empty($mazhab) && !empty($job) && !empty($address) && $taahol != "null" && !empty($outdate) && !empty($adminlog) && !empty($police)){

        $admin_permission = $_SESSION["admin-permission"];

        $query_add_user = "
        INSERT INTO $admin_permission(name , fathername , gender , birth , shsh , loc , codemeli , eduction , job , taahol , din , mazhab , address , logdate , outdate , dublelog , adminname , policename)
        VALUES ( '$name' , '$fathername' , '$gender' , '$birthdate' , $shsh , '$loc' , $codemeli , '$eduction' , '$job' , '$taahol' , '$din' , '$mazhab' , '$address' , '$logdate' , '$outdate' , '$dublelog' , '$adminlog' , '$police');
        ";

        $create_query = $mysqli->query($query_add_user);

        header("Location:../router/dashboard.php");


    }else{
        echo "fields is Empty !";
    }

}else{
    echo "NO";
}

$_SESSION["news"] = $name;