<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("adminstration", $con);    
    // username and password sent from form
    $name=$_POST['myusername'];
    $password=$_POST['mypassword'];
    //echo ($name);
	//echo ($password);
    // To protect MySQL injection (more detail about MySQL injection)
    $name = stripslashes($name);
    $password = stripslashes($password);
    $name = mysql_real_escape_string($name);
    $password = mysql_real_escape_string($password);
     
    $sql="SELECT * FROM user WHERE Name = '$name' and password = '$password'";
    $result=mysql_query($sql);
     
    // Mysql_num_row is counting table row
    $count=mysql_num_rows($result);
     
	if($count == 1){
	
	$sql=mysql_query("SELECT user_type FROM user WHERE Name = '$name' and password = '$password'");
    $row = mysql_fetch_array($sql);
	echo $row['user_type'];
	if ($row['user_type'] == 'Customer' )
		header("location:customer.html");
		
    else if ($row['user_type'] == 'Admin')
		header("location:admin_page.html");
	
			}
    else {
      ?>
   <script type="text/javascript">
   alert("sorry wrong username or password");
   header("location:index.html");
   </script>
   <?php
	
    }
	
	?>