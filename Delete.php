<!DOCTYPE html>
<html lang="en">
<head>
 <?php include 'php_babayev/head.php'; ?>
 <?php include 'php_babayev/database.php'; ?>
 <?php include 'php_babayev/item_fetcher.php';?>
 <?php include 'php_babayev/eitherDeleteBabayev.php';?>
 <?php include 'php_babayev/deleter.php';?>
 <link rel="stylesheet" href="css_babayev/style.css">
</head>
<body>
 <?php include 'php_babayev/header.php'; ?>
 <h2>Delete Items</h2>
<form action="illustrate_events_Babayev.php" method="POST">
 <select name="delete">
 <?php include 'php_babayev/sort_events.php'; ?>
 </select>
 <input type="submit" class="delete" value="Delete selected Event">
 </form>

 <br>
 <?php include "php_babayev/nav.php"; ?>
 
 <br>
 <?php include "php_babayev/footer.php"; ?>
</body>
</html>


