<?php
 $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("adminstration", $con);

$result = mysql_query("delete from `order` where order_id = ".$_GET['id']."");

 ?>
   <script type="text/javascript">
   alert("the order is delivered !");
   </script>
   <?php
 header("Location:user_maintain.php");

 
?>