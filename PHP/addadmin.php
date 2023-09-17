<?php
session_start();

include_once "../utils/connection.php";

$username = $_POST["username"];
$password = $_POST["password"];
$fullname = $_POST["fullname"];
$basename = $_POST["basename"];
$roll = $_POST["roll"];
$databasename = $_POST["databasename"];


if(!empty($_POST["submit"])){

    if($roll != "null" && !empty($username) && !empty($password) && !empty($fullname) && !empty($basename) && !empty($databasename)){

        $admin_permission = $_SESSION["admin-permission"];

        if($admin_permission !== "full"){
            echo "شما ادمین نیستید";
        }else{

            $query_add_user = "
        INSERT INTO manager(username , password , id , permission , fullname , basename) 
        VALUES('$username' , '$password' , '$databasename' , '$roll' , '$fullname' , '$basename');
        ";


        $showtables = "
        show tables;
        ";

        $runshowtable = $mysqli->query($showtables);

        $table_data = "";
        for($i = 0 ; $i < $runshowtable->num_rows ; $i++){
        $table_data += $runshowtable->fetch_array()[0] + ",";
        $create_array = explode("," , $table_data);

        if($tablesarray !== $databasename){
            
            $table_creator = "
            create table $databasename(
                id int NOT NULL AUTO_INCREMENT,
                name varchar(256) NOT NULL,
                fathername varchar(256) NOT NULL,
                gender varchar(100) NOT NULL,
                birth varchar(256) NOT NULL,
                shsh int NOT NULL,
                loc varchar(256) NOT NULL,
                codemeli varchar(256) NOT NULL,
                eduction varchar(256) NOT NULL,
                job varchar(256) NOT NULL,
                taahol varchar(100) NOT NULL,
                din varchar(100) NOT NULL,
                mazhab varchar(100) NOT NULL,
                address varchar(256) NOT NULL,
                logdate varchar(256) NOT NULL,
                outdate varchar(256) NOT NULL,
                dublelog varchar(256) NOT NULL,
                adminname varchar(256) NOT NULL,
                policename varchar(256) NOT NULL,
                PRIMARY KEY(id , shsh , codemeli)
                );
            ";

        $create_query = $mysqli->query($table_creator);


        }

        }


        $create_query = $mysqli->query($query_add_user);

        header("Location:./router/dashboard.php");

        }


    }else{
        echo "fields is Empty !";
    }

}else{
    echo "NO";
}