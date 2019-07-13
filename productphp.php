<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  //print_r($_POST);
mysql_select_db("adminstration", $con);
$sql="delete from product where(id='$_POST[id]',name,describtion,quentity,price)
VALUES
('$_POST[id]','$_POST[name]','$_post'[describtion]','$_POST[quentity],'$_POST[price]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

//header("location:")
mysql_close($con);
?>
