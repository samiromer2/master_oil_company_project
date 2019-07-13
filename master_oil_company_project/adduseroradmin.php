<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//  print_r($_POST);
mysql_select_db("adminstration", $con);
$sql="INSERT INTO user (id , Name , address , email , password , user_type) VALUES ( '$_POST[id]' , '$_POST[Name]' , '$_POST[address]','$_POST[email]','$_POST[password]','$_POST[user_type]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header("location:index.html");

mysql_close($con);

?>
