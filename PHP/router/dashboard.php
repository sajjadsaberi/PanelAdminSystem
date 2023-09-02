<?php
session_start();

$_SESSION["permission"] = "dashboard";

header("Location:../../views/index.php");

?>