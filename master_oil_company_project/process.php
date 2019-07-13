<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  //print_r($_POST);
mysql_select_db("adminstration", $con);

print_r($_POST);
echo "<br>";
if (isset($_POST['p_1']) )

{
	echo "you have bought product number 1<br>";
	$namep1  = "";
	$descP1  = "";
	$priceP1 = "";
	$sql="insert into product (id,name,describtion,quentity,price)
VALUES
(null,$namep1,$descP1,'$_POST[quentity],$priceP1)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}

if (isset($_POST['p_2']) )
	echo "you have bought product number 2<br>";
if (isset($_POST['p_3']) )
	echo "you have bought product number 3<br>";
if (isset($_POST['p_4']) )
	echo "you have bought product number 4<br>";
if (isset($_POST['p_5']) )
	echo "you have bought product number 5<br>";
if (isset($_POST['p_6']) )
	echo "you have bought product number 6<br>";
if (isset($_POST['p_7']) )
	echo "you have bought product number 7<br>";
	
	


mysql_close($con);


?>