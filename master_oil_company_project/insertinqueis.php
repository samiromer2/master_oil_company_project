<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  

mysql_select_db("coment", $con);

$sql="INSERT INTO host (uno,uname,password)
VALUES
($_POST[uno],'$_POST[uname]','$_POST[password]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . 'wrong data');
  }
echo "1 user registered";

mysql_close($con)
?>

