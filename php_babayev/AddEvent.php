<?php 
if ($enter) {
    $conn = new mysqli($serwer, $username, $password, $database);
    $query = "INSERT INTO mystore(Sku, given_name, price, Typo,
    Size,Height,Width,longth,Weigh)";
    $query .= "VALUES('".$SKU. "','".$Name. "','".$price. "','"
    .$type. "','".$size."','".$height. "','".$width. "','".$length. "','".$Weight. "')";
    $conn->query($query);
    $conn->close();
    }



?>