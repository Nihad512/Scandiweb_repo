<!DOCTYPE html>
<html lang="en">
<head>
 <?php include 'php_babayev/head.php'; ?>
 <?php include 'php_babayev/database.php'; ?>
 <?php include 'php_babayev/eitherDeleteBabayev.php';?>
 <?php include 'php_babayev/deleter.php';?>
 <?php include 'php_babayev/testNewEvent.php'; ?>
 <?php include 'php_babayev/AddEvent.php'; ?>
 <?php include 'php_babayev/all_events.php'; ?>
 <?php include 'php_babayev/item_fetcher.php'; ?>
 <link rel="stylesheet" href="css_babayev/style.css">
</head>
<body>
 <?php include 'php_babayev/header.php'; ?>
 <h2>All Products</h2>
 <section>


<table>
<form action="illustrate_events_Babayev.php" id="form" method="post">
    <button class="delete" type="submit">delete</button>
<?php  include 'php_babayev/show_events.php'; ?>
</form>
</table>
</section>
 <?php include "php_babayev/nav.php"; ?>
 
 <br>
 <?php include "php_babayev/footer.php"; ?>
</body>
</html>