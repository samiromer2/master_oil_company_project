<?php
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
  echo "Upload: " . $_FILES["product_id"]["name"] . "<br>";
  echo "Type: " . $_FILES["product_name"]["name"] . "<br>";  
  echo "Type: " . $_FILES["product_describtion"]["describtion"] . "<br>";  echo "Type: " . $_FILES["product_quentity"]["quentity"] . "<br>";
  
  echo "Stored in: " . $_FILES["product_price"]["price"];
  }
?> echo "Size: " . ($_FILES["product_describtion"]["quentity"] / 1024) . " kB<br>";