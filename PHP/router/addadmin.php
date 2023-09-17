<?php
session_start();

$_SESSION["permission"] = "addadmin";
$_SESSION["path"] = "افزودن مدیر";

header("Location:../../views/index.php");

?>