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

	if(isset($_GET['UserId'])){
		//get user info
		$UserId = mysqli_real_escape_string($connection, $_GET['UserId']);
		$query = " SELECT * From member where UserId = {$iserId} LIMIT 1";

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
			header('Location: users.php?err=user_not_found');
		}
		else{
			//query unsuccessful
			header('Location: users.php?err=query_failed');
		}
	}

	if (isset($_POST['submit'])) {

		$UserId = $_POST['UserId'];
		$Username = $_POST['Username'];
		$NIC = $_POST['NIC'];
		$ContactNo = $_POST['ContactNo'];
		$email = $_POST['email'];
		$DateOfBirth = $_POST['DateOfBirth'];

		// checking required fields
		$req_fields = array('UserId', 'Username','NIC', 'ContactNo', 'email','DateOfBirth');

		foreach ($req_fields as $field) {
			if (empty(trim($_POST[$field]))) {
				$errors[] = $field . ' is required';
			}
		}


		if (empty($errors)) {
			// no errors found... adding new record
			$UserId = mysqli_real_escape_string($connection, $_POST['UserId']);
			$Username = mysqli_real_escape_string($connection, $_POST['Username']);
			$NIC = mysqli_real_escape_string($connection, $_POST['NIC']);
			$ContactNo = mysqli_real_escape_string($connection, $_POST['ContactNo']);
			$email = mysqli_real_escape_string($connection, $_POST['email']);
			$DateOfBirth = mysqli_real_escape_string($connection, $_POST['DateOfBirth']);
			// email address is already sanitized

			$query = "UPDATE member set ";
			$query .= "UserId = '{$UserId}', ";
			$query .= "Username = '{$Username}', ";
			$query .= "NIC = '{$NIC}', ";
			$query .= "ContactNo = '{$ContactNo}', ";
			$query .= "email = '{$email}', ";
			$query .= "DateOfBirth = '{$DateOfBirth}', ";
			$query .= " WHERE UserId = '{$UserId}'' LIMIT 1";

			$result = mysqli_query($connection, $query);

			if ($result) {
				// query successful... redirecting to users page
				header('Location: profile.php?user_edited=true');
			} else {
				$errors[] = 'Failed to edit the record.';
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
		<!-- <script type="text/javascript" src="Js/home.js"></script> -->
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
			<h1> Edit Profile</h1> <br>
			<div class="p1"> <img src="IWTimg/avatar.jpg" width="100px" height="auto" /> </div>

         <?php 

			if (!empty($errors)) {
				echo '<div class="errmsg">';
				echo '<b>There were error(s) on your form.</b><br>';
				foreach ($errors as $error) {
					echo '- ' . $error . '<br>';
				}
				echo '</div>';
			}

		 ?>
        <form>
        <div class="p2"> 
		<form action="profile.php" method="post" class="userform">

			<p>
				<label for="">User ID:</label>
				<input type="text" name="UserId" <?php echo 'value="' . $UserId . '"'; ?>>
			</p>

			<p>
				<label for="">User Name:</label>
				<input type="text" name="Username" <?php echo 'value="' . $Username . '"'; ?>>
			</p>

			<p>
				<label for="">NIC:</label>
				<input type="text" name="NIC" <?php echo 'value="' . $NIC . '"'; ?>>
			</p>

			<p>
				<label for="">Contact No:</label>
				<input type="text" name="ContactNo" <?php echo 'value="' . $ContactNo . '"'; ?>>
			</p>

			<p>
				<label for="">Email Address:</label>
				<input type="text" name="email" <?php echo 'value="' . $email . '"'; ?>>
			</p>

			<p>
				<label for="">Date of Birth:</label>
				<input type="text" name="DateOfBirth" <?php echo 'value="' . $DateOfBirth . '"'; ?>>
			</p>

		</form>
	</div>

	<br>
			<center>
				<button type = "submit" name="submit">Save</button>
			</center>
				
	</form>

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