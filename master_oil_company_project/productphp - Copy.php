<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  //print_r($_POST);
mysql_select_db("adminstration", $con);
$sql="update  product set (name,describtion,quentity,price)
('$_POST[name]','$_post'[describtion]','$_POST[quentity],'$_POST[price]') where id = '$_POST[id]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);

?>
