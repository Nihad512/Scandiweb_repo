<?php
 $i=0;
 while ($i< $num) {
 $rs->data_seek($i);
 $row = $rs->fetch_assoc();

 echo "<div id='$i'>";
 echo "<input type='checkbox' name='delete' value='$row[Sku]'>";
 echo"<p>".$row["Sku"]."</p>";
 echo"<p>".$row["given_name"]."</p>";
 echo"<p>".$row["price"]."</p>";
 echo"<p>".$row["Typo"]."</p>";
 echo"<p>".$row["Size"]."</p>";
 echo"<p>".$row["Height"]."</p>";
 echo"<p>".$row["Width"]."</p>";
 echo"<p>".$row["longth"]."</p>";
 echo"<p>".$row["Weigh"]."</p>";
 
 echo "</div>";

 $i++;
 }
?>
