<?php
$enter = TRUE;
if (isset($_POST['SKu'])) {$SKU=$_POST['SKu'];} else {$enter = FALSE;}
if (isset($_POST['name'])) {$Name=$_POST['name'];} else {$enter = FALSE;}
if (isset($_POST['price'])) {$price=$_POST['price'];} else {$enter = FALSE;}
if (isset($_POST['type'])) {$type=$_POST['type'];} else {$enter = FALSE;}
if (isset($_POST['size'])) {$size=$_POST['size'];} else {$enter = FALSE;}
if (isset($_POST['height'])) {$height=$_POST['height'];} else {$enter = FALSE;}
if (isset($_POST['width'])) {$width=$_POST['width'];} else {$enter = FALSE;}
if (isset($_POST['length'])) {$length=$_POST['length'];} else {$enter = FALSE;}
if (isset($_POST['Weight'])) {$Weight=$_POST['Weight'];} else {$enter = FALSE;}
?>