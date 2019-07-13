<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  //print_r($_POST);
mysql_select_db("adminstration", $con);
$sql="INSERT INTO order (id,name,quentity,price,description)
VALUES
('$_POST[id]','$_POST[id]','$_post'[name]','$_post'[quantity]','$_POST[price],'$_POST[description]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);

?>
