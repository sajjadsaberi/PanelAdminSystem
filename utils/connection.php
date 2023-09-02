<?php

$mysqli = new mysqli("127.0.0.1", "root", "" , "sadeghi");

if($mysqli->connect_errno){
    echo 'MySQL Connection Failed !';
}

$mysqli->set_charset("utf8");

?>