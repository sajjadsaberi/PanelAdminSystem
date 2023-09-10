<?php
session_start();

$_SESSION["permission"] = "dashboard";
$_SESSION["path"] = "داشبورد";

header("Location:../../views/index.php");

?>