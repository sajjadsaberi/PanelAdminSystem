<?php
session_start();

$_SESSION["permission"] = "showallusers";

header("Location:../../../views/index.php");

?>