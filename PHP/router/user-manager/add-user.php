<?php
session_start();

$_SESSION["permission"] = "addUser";

header("Location:../../../views/index.php");

?>