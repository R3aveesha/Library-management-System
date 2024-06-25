
<?php require_once('inc/connection.php'); ?>
<?php

   $id = '9635B';
    $category = 'Books' ;
    $title = 'Accounting Information Systems (13 edition)' ;
    $author = ' Marshall B Romney, Paul J Steinbart' ;
    $medium = 'English' ;
    $publisher = 'Pearson' ;
    $year = '2015' ;
    $type = '' ;
    $addDate = '2023-05-30' ;




    $query = "INSERT INTO new_arrivals (id,category, title, author, medium, publisher,year, type,addDate )
              VALUES ('{$id}', '{$category}' ,'{$title}' ,'{$author}' ,'{$medium}','{$publisher}','{$year}','{$type}','{$addDate}')" ;
 

$result = mysqli_query($connection,$query) ; 

if($result) {

	echo "1 Record added" ;
}
else {

	echo "Database query failed" ;
}




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Insert Query</title>
</head>
<body>

</body>
</html>

<?php mysqli_close ($connection) ; ?>