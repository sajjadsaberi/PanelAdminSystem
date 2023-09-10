<?php
session_start();

$_SESSION["permission"] = "showallusers";
$_SESSION["path"] = "مدیریت مدد جویان > نمایش همه کاریران";

header("Location:../../../views/index.php");

?>