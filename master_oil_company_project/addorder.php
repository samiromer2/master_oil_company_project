<?php
//print_r($_POST);

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//  print_r($_POST);
mysql_select_db("adminstration", $con);
$result2=mysql_query("SELECT order_id FROM `order`");  
while($row = mysql_fetch_array($result2)) 
{
	$nos[]  = $row['order_id'];
}
if (isset($nos)){
if (in_array($_POST['id'], $nos)) 
{
?>
   <script type="text/javascript">
   alert("sorry you can only order 1 product form the same type");
    setTimeout("location.href = 'user_page.php';",10)
   </script>
   <?php
//header("location:user_page.php");
}
else
{
$sql="INSERT INTO `order` (order_id , order_name , order_quentity ) VALUES ( '$_POST[id]' , '$_POST[product_name]' , '$_POST[product_quentity]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
header("location:user_page.php");

mysql_close($con);
}}
else
{
$sql="INSERT INTO `order` (order_id , order_name , order_quentity ) VALUES ( '$_POST[id]' , '$_POST[product_name]' , '$_POST[product_quentity]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
header("location:user_page.php");

mysql_close($con);
}

?>