<?php
 $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("adminstration", $con);

$result = mysql_query("delete from file where id = ".$_GET['id']."");

 ?>
   <script type="text/javascript">
   alert("sorry wrong username or password");
   header("Location:admin_maintain.php");

   </script>
   <?php

 
?>