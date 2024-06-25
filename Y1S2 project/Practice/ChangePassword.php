<?php session_start(); ?>
<?php require_once('connection.php'); ?>
<?php 

	$errors = array();
	$UserId = '';
	$Username = '';
	$NIC = '';
	$ContactNo = '';
	$email = '';
	$DateOfBirth = '';
	$password = '';

	if(isset($_GET['UserId'])){
		//get user info
		$UserId = mysqli_real_escape_string($connection, $_GET['UserId']);
		$query = " SELECT * From member where UserId = {$UserId} LIMIT 1";

		$result_set = mysqli_query($connection, $query);

		if ($result_set) {
			if (mysqli_num_rows($result_set) == 1) {
				//user found
				$result = mysqli_fetch_assoc($result_set) ;
					$UserId = $result['UserId'];
	                $Username = $result['Username'];
	                $NIC = $result['NIC'];
	                $ContactNo = $result['ContactNo'];
	                $email = $result['email'];
	                $DateOfBirth = $result['DateOfBirth'];
			}
			else //user not fund
			header('Location: profile.php?err=user_not_found');
			exit();
		}
		else{
			//query unsuccessful
			header('Location: profil.php?err=query_failed');
			exit();
		}
	}

	if (isset($_POST['submit'])) {

		$UserId = $_POST['UserId'];
		$Password = $_POST['Password '];  

		// checking required fields
		$req_fields = array('UserId','Password');

		foreach ($req_fields as $field) {
			if (empty(trim($_POST[$field]))) {
				$errors[] = $field . ' is required'; 
			}
		}

	    // checking max length
		$max_len_fields = array('password' => 10);

		if (empty($errors)) {
			// no errors found... updating th password
			$Password = mysqli_real_escape_string($connection, $_POST['Password']);

			$query = "UPDATE member SET ";
			$query .= "Password = '{$Password}'";
			$query .= "WHERE UserId = {$UserId} LIMIT=1";


			$result = mysqli_query($connection, $query);

			if ($result) {
				// query successful... redirecting to profile page
				header('Location: profile.php?password_updated=true');
				exit();
			} else {
				$errors[] = 'Failed to change the password.';
			}


		}

}

?>
<html>
	<head>
		<link rel="stylesheet" href="profile.css">
		<title>IABT University Library</title>
		<link rel="icon" type="image/png" href="img/logo3.png" sizes="32x32">
		<link rel="stylesheet" type="text/css" href="Style/profile.css">
	</head>

	<body class="body">
		<header class="h">
			<img class="hb" src=""> 
			<img class="img1" src="IWTimg/logo.jpg" alt="logo">
			<img class="img2" src="IWTimg/avatar.jpg" alt="avatar">
			<a class="login" href="home.html">Logout</a>
			<h1 class="header">IABT UNIVERSITY LIBRARY</h1>

			<!-- menu bar design -->
			<ul class="menubar">
				<li><a href="Home.html">Home</a></li>
				<li><a href="search.html">Search</a></li>
				<li><a href="facilities.html">Facilities</a></li>
				<li><a href="membership.html">Membership</a></li>
				<li><a href="aboutus.html">About Us</a></li>
				<li><a href="newarrivals.html">New Arrivals</a></li>
				<li><a href="myprofile.html" class="active">My Profile</a></li>
				<li><a href="asklibrarian.html">Ask Librarian</a></li>
			</ul>
		</header>
		<main class="content">
			<br><br>

        <div>  
			    <center>
				   <h1>Change Password</h1>

	
               	<form acton="ChangePassword.php" method="POST" class="userform">
					<label for="">New Password :</label>    
					<input type="password" name="Password"> <br><br>

					<label for="">Confirm Password :</label>    
					<input type="password" name="Password">
			    </form></center>  
 
		<center>
			 <button type="submit" name="submit"> Update password</button>
		</center>
	</div>


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