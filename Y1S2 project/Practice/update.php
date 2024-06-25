
<?php require_once('inc/connection.php'); ?>

<?php


     /*


     UPDATE table_name 
     SET column_1 = value_1, column_2 = value_2
     WHERE column_name = value

     */

     $query = "UPDATE new_arrivals SET  type = 'Law'  WHERE id = '0123J' " ;


     $result_set = mysqli_query($connection, $query) ;

     if ($result_set) {
     	
     	echo mysqli_affected_rows($connection) ."Records updated." ;
     }

     else {

     	echo "Database query failed" ;
     }

     
     mysqli_close ($connection) ;







?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title> Update Query</title>
</head>
<body>

</body>
</html>

