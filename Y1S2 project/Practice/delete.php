
<?php require_once('inc/connection.php'); ?>
<?php

/* 

     DELETE FROM table_name
     WHERE column_name = value
     LIMIT 1 


     */

     $query = "DELETE FROM  new_arrivals   WHERE id = '9635B'  LIMIT 1" ;


     $result_set = mysqli_query($connection, $query) ;

     if ($result_set) {
     	
     	echo mysqli_affected_rows($connection) ."Records deleted." ;
     }

     else {

     	echo "Database query failed" .mysqli_error($connection) ;
     }


     mysqli_close ($connection) ;

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title> Delete Query</title>
</head>
<body>

</body>
</html>

