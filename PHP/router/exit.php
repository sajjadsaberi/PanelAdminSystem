<?php
session_start();

$_SESSION["permission"] = "exit";

header("Location:../../views/login/index.php");

?>