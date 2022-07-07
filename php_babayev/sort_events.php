<?php
    $i=0;
    while ($i< $num) {
    $rs->data_seek($i);
    $row = $rs->fetch_assoc();
    echo "<option value=".$row["Sku"].">".$row["Sku"]." ".$row["spec"]."</option>";
    $i++;
    }
?>