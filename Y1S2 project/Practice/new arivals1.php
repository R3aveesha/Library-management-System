<?php
	//check if the user is signed in
	$isSignedIn = true ; 

if($isSignedIn){

	//user is signed in ,hide the login button

?>


<html>
	<head>
		<title>IABT Online Library</title>
		<link rel="stylesheet" type="text/css" href="Style/new arivals.css">
		<link rel="icon" type="image/png" href="img/logo1.jpg" sizes="32x32">

		<style>
			
			body
			{
				background-color: #ecd9c6 ;

		</style>
	</head>

	<body class="body">
		<header class="h">
			<img class="hb" src=""> 
			<a href="Home.php"><img class="img1" src="img/logo1.jpg" alt="logo"></a>
            <a href="myprofile.html"><img class="img2" src="img/avatar.jpg" alt="avatar"></a>
            <a class="login" href="login.html">Logout</a>
            <h1 class="header">IABT UNIVERSITY LIBRARY</h1>

			<!-- menu bar design -->
			<ul class="menubar">
				<li><a href="Home.php" >Home</a></li>
	            <li><a href="search.php">Search</a></li>
	            <li><a href="facilities.php">Facilities</a></li>
	            <li><a href="membership.php">Membership</a></li>
	            <li><a href="aboutus.php">About Us</a></li>
	            <li><a href="new arivals1.php" class="active">New Arrivals</a></li>
	            <li><a href="myprofile.php">My Profile</a></li>
	            <li><a href="Ask Librarian.html">Ask Librarian</a></li>
			</ul>
		</header>

        <img class ="img4"src ="img/b1.jpg">
        <h2 class ="ms">New Arrivals</h2><br><br>

        <div class ="c">
        	<h4>Duration : 01 June 2023 to 25 June 2023<h5>
        </div>		


        <?php
require_once('connection.php');

$query = "SELECT * FROM new_arrivals";
$result = mysqli_query($connection, $query);

if ($result && mysqli_num_rows($result) > 0) {
    // Fetch data from the result set
    while ($row = mysqli_fetch_assoc($result)) {
        // Access each column value using the column name
        $id = $row['id'];
        $category = $row['category'];
        $title = $row['title'];
        $author = $row['author'];
        $medium = $row['medium'];
        $publisher = $row['publisher'];
		$year = $row['year'];
		$type = $row['type'];
		$addDate = $row['addDate'];



        // Display the data
        echo "ID: $id<br>";
        echo "title: $title<br>";
        echo "Author: $author<br>";
        echo "Medium: $medium<br>";
        echo "Publisher: $publisher<br>";
        echo "Year: $year<br>";
        echo "Type: $type<br>";
        echo "Added At: $addDate<br>";
        echo "<br><br>";
    }
} else {
    echo "No data found.";
}

mysqli_close($connection);
?>


         

		<main class="content">
			<!-- Type the body in this section -->
		</main>
		
		<hr class="hr2">
		<footer>
			<h3 class="footer">IABT UNIVERSITY LIBRARY<br>
				Bandaranayake road,<br>
				Colombo 05.
			</h3>
		</footer>
	</body>
</html>

<?php
}
else{

	//User is not sugned in,display the login button



?>

<html>
	<head>
		<title>IABT Online Library</title>
		<link rel="stylesheet" type="text/css" href="Style/new arivals.css">
		<link rel="icon" type="image/png" href="img/logo1.jpg" sizes="32x32">

		<style>
			
			body
			{
				background-color: #ecd9c6 ;

		</style>
	</head>

	<body class="body">
		<header class="h">
			<img class="hb" src=""> 
			<img class="img1" src="img/logo1.jpg" alt="logo">
			<img class="img2" src="img/avatar.jpg" alt="avatar">
			<a class="login" href="login.html">Login</a>
			<a class="reg" href="reg.html">Register</a>
			<h1 class="header">IABT UNIVERSITY LIBRARY</h1>

			<!-- menu bar design -->
			<ul class="menubar">
				<li><a href="Home.php"  class="active">Home</a></li>
	            <li><a href="search.php">Search</a></li>
	            <li><a href="facilities.php">Facilities</a></li>
	            <li><a href="membership.php">Membership</a></li>
	            <li><a href="aboutus.php">About Us</a></li>
	            <li><a href="new arivals1.php">New Arrivals</a></li>
	            <li><a href="myprofile.php">My Profile</a></li>
	            <li><a href="Ask Librarian.html">Ask Librarian</a></li>
			</ul>
		</header>

        <img class ="img4"src ="img/b1.jpg">
        <h2 class ="ms">New Arrivals</h2><br><br>

        <div class ="c">
        	<h4>Duration : 01 June 2023 to 25 June 2023<h5>
        </div>		


        <?php
require_once('inc/connection.php');

$query = "SELECT * FROM new_arrivals";
$result = mysqli_query($connection, $query);

if ($result && mysqli_num_rows($result) > 0) {
    // Fetch data from the result set
    while ($row = mysqli_fetch_assoc($result)) {
        // Access each column value using the column name
        $id = $row['id'];
        $category = $row['category'];
        $title = $row['title'];
        $author = $row['author'];
        $medium = $row['medium'];
        $publisher = $row['publisher'];
		$year = $row['year'];
		$type = $row['type'];
		$addDate = $row['addDate'];



        // Display the data
        echo "ID: $id<br>";
        echo "title: $title<br>";
        echo "Author: $author<br>";
        echo "Medium: $medium<br>";
        echo "Publisher: $publisher<br>";
        echo "Year: $year<br>";
        echo "Type: $type<br>";
        echo "Added At: $addDate<br>";
        echo "<br><br>";
    }
} else {
    echo "No data found.";
}

mysqli_close($connection);
?>

         

		<main class="content">
			<!-- Type the body in this section -->
		</main>
		
		<hr class="hr2">
		<footer>
			<h3 class="footer">IABT UNIVERSITY LIBRARY<br>
				Bandaranayake road,<br>
				Colombo 05.
			</h3>
		</footer>
	</body>
</html>

<?php
	}
?>