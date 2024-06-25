<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["email"])) {
    // Redirect to the login page or any other appropriate action
    header("Location: loginpage.php");
    exit;
}

// Get the user details from the session or database
$email = $_SESSION["email"];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement to fetch user details based on the email
$stmt = $conn->prepare("SELECT * FROM register_details WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();

// Fetch the result
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows == 1) {
    // User exists, fetch the details
    $row = $result->fetch_assoc();

    $full_name = $row["full_name"];
    $nic = $row["nic"];
    $contact_no = $row["contact_no"];
    $email= $row["email"];
    $uni_id = $row["uni_id"];
    $gender = $row["gender"];
    $birthday = $row["birthday"];
    $create_password = $row["create_password"];
    $confirm_password = $row["confirm_password"];
    $status = $row["status"];
} else {
    // User not found, handle accordingly
    // Redirect, display an error message, or take any other appropriate action
    header("Location: loginpage.php");
    exit;
}

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>IABT University Library</title>
    <link rel="icon" type="image/png" href="img/logo3.png" sizes="32x32">
    <link rel="stylesheet" type="text/css" href="Style/myprofile.css">
    <script type="text/javascript" src="Js/slide.js"></script>
    <style>
        .body
        {
            background-image: url("img/l7.jpg");
        }
    </style>
</head>

<body class="body">
    <header class="h">
        <img class="hb" src=""> 
        <a href="home.php"><img class="img1" src="img/logo3.jpeg" alt="logo"></a>
        <?php
        if ($isSignedIn) {
            // User is signed in, show the avatar and logout link
            ?>
            <a href="myprofile.php"><img class="img2" src="img/avatar.png" alt="avatar"></a>
            <a class="login" href="home.php">Logout</a>
            <?php
        } else {
            // User is not signed in, show the login and register links
            ?>
            <a href="login.php"><img class="img2" src="img/avatar.png" alt="avatar"></a>
            <a class="reg" href="reg.php">Register</a>
            <?php
        }
        ?>
        <h1 class="header">IABT UNIVERSITY LIBRARY</h1>

        <!-- menu bar design -->
        <ul class="menubar">
            <li><a href="Home.php">Home</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="facilities.php">Facilities</a></li>
            <li><a href="membership.php">Membership</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="new arivals1.php">New Arrivals</a></li>
            <li><a href="myprofile.php">My Profile</a></li>
            <li><a href="Ask Librarian.html">Ask Librarian</a></li>
        </ul>
    </header>

	<h1 style="padding-top:300px; margin-left: 650px;">MY PROFILE</h1>

	<center>
	<ul class="bar">

	<button style="margin: 10px; background-color: white;"><a class="p" href="myprofile.php">Account Details</a> </button>

	<button style="margin:10px; background-color: white;"><a class="p" href="logout.php">Log Out</a> </button>

	</ul>
	</center>


</header>



   <div class="form-container">
        <form>
            <div class="form-group">
                <label for="name">Ful Name</label>
                <input type="text" id="full_name" name="full_name" value="<?php echo $full_name; ?>" placeholder="Enter your full name" readonly>
            </div>

            <div class="form-group">
                <label for="email">NIC</label>
                <input type="text" id="nic" name="nic"  value="<?php echo $nic; ?>" placeholder="Enter your nic" readonly>
            </div>

            <div class="form-group">
                <label for="phone">Contact NO</label>
                <input type="text" id="contact_no" name="contact_no"  value="<?php echo $contact_no; ?>" placeholder="Enter your phone number" readonly>
            </div>

            <div class="form-group">
                <label for="address">Email</label>
                <input type="text" id="email" name="email"  value="<?php echo $email; ?>"  placeholder="Enter your email address" readonly>
            </div>

            <div class="form-group">
                <label for="city">Uni ID</label>
                <input type="text" id="uni_id" name="uni_id"  value="<?php echo $uni_id; ?>" placeholder="Enter your uni ID" readonly>
            </div>

            <div class="form-group">
                <label for="country">Gender</label>
                <input type="text" id="gender" name="gender"  value="<?php echo $gender; ?>" placeholder="Enter your gender" readonly>
            </div>
           
           <div class="form-group">
                <label for="country">Birth Date</label>
                <input type="Date" id="birthday" name="birthday"  value="<?php echo $birthday; ?>" placeholder="Enter your birthday" readonly>
            </div>

           <div class="form-group">
                <label for="country">User Status</label>
                <input type="text" id="status" name="status"  value="<?php echo $status; ?>" placeholder="Enter your user status" readonly>
            </div>
         

           
            <div class="form-group">
               <a href="eeedit.php"> <input type="submit" name="edit" value="Edit my profile"></a>
            </div>

          

             <div class="form-group">
             	  <form action="deleteaccount.php" method="post">
                <input type="submit" name="delete" value="delete my profile" onclick="return confirm('Are you sure you want to delete your account?' ">
            </form>
            </div>
   
        </form>
    </div>




<footer>
        <h3 class="footer">IABT UNIVERSITY LIBRARY<br>
            Bandaranayake road,<br>
            Colombo 05.
        </h3>
    </footer>
</body>
</html>
