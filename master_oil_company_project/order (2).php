<?php
$con = mysql_connect("localhost","order","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  //print_r($_POST);
mysql_select_db("adminstration", $con);

$result = mysql_query("select * from  order");

while($row = mysql_fetch_array($result))
  {
  echo $row['order_id'] . " " . $row['order_name']. " " . $row['order_quantity'];
  echo "<br />";
  }
//order ==  table name 
//(order_id,order_name,order_quantity)  == fields in the database with the same names .
//valuse ->>>>> this is the data from the html , FORM !!!!!
?>

</body>
</html>