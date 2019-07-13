<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
        <title>View products</title>
</head>
<body>

<?php
/* 
        VIEW.PHP
        Displays all data from 'players' table
*/

        // connect to the database
        include('connect-db.php');

        // get results from database
        $result = mysql_query("SELECT * FROM products") 
                or die(mysql_error());  
                
        // display data in table
       // echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";
        
        echo "<table border='1' cellpadding='10'>";
        echo "<tr>     <th>Serial</th> <th>product_id</th> <th>product_name</th> <th>product_describtion</th> <th>product_quentity</th> <th>product_price</th>  <th>Name</th> <th>description</th>     <th> 	price</th>  <th>  </th> <th></th>    </tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['serial'] . '</td>';
				echo '<td>' . $row['product_id'] . '</td>';
				echo '<td>' . $row['product_name'] . '</td>';
				echo '<td>' . $row['product_describtion'] . '</td>';
				echo '<td>' . $row['product_quentity'] . '</td>';
				echo '<td>' . $row['product_price'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['description'] . '</td>';
				echo '<td>' .'$'. $row['price'] . '</td>';
                echo '<td><a href="edit.php?id=' . $row['serial'] . '">Edit</a></td>';
                echo '<td><a href="delete.php?id=' . $row['serial'] . '">Delete</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?>
<p><a href="new.php">Add new product</a></p>

</body>
</html> 