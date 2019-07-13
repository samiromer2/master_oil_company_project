 <?php 
 // Connects to your Database 
 mysql_connect("localhos", "username", "password") or die(mysql_error()) ; 
 mysql_select_db("localhost","root") or die(mysql_error()) ; 
 
 //Retrieves data from MySQL 
 $data = mysql_query("SELECT * from File uploader") or die(mysql_error()); 

//Puts it into an array while($info = mysql_fetch_array( $data )) { //Outputs the image and other data Echo "<img src=http://www.yoursite.com/images/".$info['photo'] ."> 
<br>"; Echo "<b>Name:</b> ".$info['name'] . "<br> "; Echo "<b>type:</b> ".$info['type'] ." <br>"; Echo "<b>size:</b> ".$info['size'] . " <hr>";. " <br>"; Echo "<b>tmp_name:</b> ".$info['tmp_name'] . " <hr>";. " <br>"; Echo "<b>error:</b> ".$info['error'] " <hr>"; } ?> 