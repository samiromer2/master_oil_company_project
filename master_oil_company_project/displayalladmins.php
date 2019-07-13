<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  //print_r($_POST);
mysql_select_db("adminstration", $con);

$result = mysql_query("select * from  admin");

while($row = mysql_fetch_array($result))
  {
  echo "this is the id ".$row['admin_id'] . "<br>" . "this is the name of the admin ".$row['admin_name']. "<br>" . "this is the address ".$row['admin_address']. "<br>" . "this is the email ".$row['admin_emial'];
  echo "<br />";
  }
//admin ==  table name 
//(admin_id,admin_name,admin_emial,admin_address)  == fields in the database with the same names .
//valuse ->>>>> this is the data from the html, FORM !!!!!
?>
