<?php
include 'php_babayev/database.php';
$conn = new mysqli($serwer, $username, $password, $database);
$query = "select * from mystore";
$rs = $conn->query($query);
$conn->close();
$num = $rs->num_rows;
 ?>