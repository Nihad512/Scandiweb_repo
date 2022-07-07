<?php
if ($delete) {
$conn = new mysqli($serwer, $username, $password, $database);
$query = "DELETE FROM mystore WHERE sku='".$delete."'";
$conn->query($query);
$conn->close();
}
?>