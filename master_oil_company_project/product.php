<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  //print_r($_POST);
mysql_select_db("adminstration", $con);

$result = mysql_query("select * from product");

while($row = mysql_fetch_array($result))
  {
  echo $row['product_id'] . " " . $row['product_name']. "  " . $row['product_describtion']. "  " . $row['product_quantity']. "  " . $row['product_price'];
  echo "<br />";
  }
//product ==  table name 
//(product_id,product_name,product_describtion,product_quantity,product_price)  == fields in the database with the same names .
//valuse ->>>>> this is the data from the html , FORM !!!!!
?>
