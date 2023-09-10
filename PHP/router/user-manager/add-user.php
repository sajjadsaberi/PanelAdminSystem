<?php
session_start();

$_SESSION["permission"] = "addUser";
$_SESSION["path"] = "مدیریت مدد جویان > اضافه کردن کاربر";

header("Location:../../../views/index.php");

?>