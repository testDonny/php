<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName ="logintest";
$link = mysqli_connect($serverName, $userName, $password);
mysqli_select_db($link, $databaseName);

?>