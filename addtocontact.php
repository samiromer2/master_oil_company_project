<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//  print_r($_POST);
mysql_select_db("adminstration", $con);
$sql = "INSERT INTO contact (Name,address,telenumber,email,likeit,comments)VALUES('$_POST[name]','$_POST[address]','$_POST[telephone]','$_POST[email]','$_POST[likeit]','$_POST[comments]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header("location:index.html");

mysql_close($con);

?>
