<!DOCTYPE html>
<html lang="en">
<head>

 <?php include 'php_babayev/head.php'; ?>
 <link rel="stylesheet" href="css_babayev/style_add_page.css">
 <?php include 'php_babayev/database.php'; ?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="js_babayev/SKU.js"></script>
</head>
<body>
 <?php include 'php_babayev/header.php'; ?>
 <h2>Welcome</h2>
 <h6>Wanna Add a new Product? if so then please fill the input fields according  what writes above them</h6>

<form action="illustrate_events_Babayev.php" method="post" onsubmit="return tester()">
<input class="btn btn-success" type="submit" value="Add Event"> 
 <a href="Illustrate_events_Babayev.php" class="btn btn-danger">Cancel</a> 
<div class="flex direction_column">
<span class="flex direction_row">SKU <input type="number" name="SKU" id="SKU"></span>
<span  class="flex direction_row">Name <input type="text" name="name" id=""></span>
<span  class="flex direction_row">Price($) <input type="number" name="price" id=""></span>
<span  class="flex direction_row">
    
Type of Item
 <select name="tip" id="Selector">
    <option value="Disk" id="Disks">Disk</option>
    <option value="Furniture" id="furnitures">Furniture</option>
    <option value="Book">Book</option>
 </select></span>
 <div id="test">
 <span class="flex direction_row" id="Disk">size(MB) <input type="number" name="size" id=""></span>
<span id="Furniture"> 
    <ul  class="flex direction_column">
    <li>Height(CM) <input type="number" name="height" id=""></li>
    <li>Width(CM) <input type="number" name="width" id=""></li>
    <li>Length(CM) <input type="number" name="length" id=""></li>
</ul>
</span >
<span id="Book">Weight(KG) <input type="number" name="Weight" id=""> </span>
 </div>

</div>







</form>

 <br>
 <?php include "php_babayev/nav.php"; ?>
 <br>
 <?php include "php_babayev/footer.php"; ?>
</body>
</html>


