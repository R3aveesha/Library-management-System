<?php
// Check if the user is signed in
$isSignedIn = true; // Example variable, you should replace it with your actual logic to determine if the user is signed in or not

if ($isSignedIn) {
    // User is signed in, hide the login button
    ?>
    <html>
	<head>
		<title>IABT University Library</title>
		<link rel="icon" type="image/png" href="img/logo3.png" sizes="32x32">
		<link rel="stylesheet" type="text/css" href="Style/membership.css">
	</head>

	<body class="body">
		<header class="h">
			<img class="hb" src=""> 
			<a href="home.php"><img class="img1" src="img/logo3.jpeg" alt="logo"></a>
			<a href="login.php"><img class="img2" src="img/avatar.png" alt="avatar"></a>
			<a class="login" href="login.php">Logout</a>
			<h1 class="header">IABT UNIVERSITY LIBRARY</h1>

			<!-- menu bar design -->
			<ul class="menubar">
				<li><a href="Home.php">Home</a></li>
                <li><a href="search.php">Search</a></li>
                <li><a href="facilities.php">Facilities</a></li>
                <li><a href="membership.php" class="active">Membership</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="new arivals1.php">New Arrivals</a></li>
                <li><a href="myprofile.php">My Profile</a></li>
                <li><a href="Ask Librarian.html">Ask Librarian</a></li>
			</ul>
		</header>
		<!-- <hr class="hr1"> -->
		<main class="content">
			<div class="des">
				<h1>Membership</h1>
				<p>Students of IABT campus are allowed to use both libraries for reference while Academic staff is eligible to borrow books from any campus they teach. It is mandatory to have a library membership to borrow books.
					<ul>
						<li>All registered students are eligible for library membership without placing any security deposit.</li>
						<li>Members have access to core text books, reference books, general reading materials, CDs, DVDs and etc.</li>
					</ul>		
				Students who have library membership are allowed to borrow one book for a period of 14 days. Books on high demand will be issued for overnight use during the demanding period. Books issued for the weekend may also vary depending on the demand during that period.

				</p>
				<h6><a href="reg.php" class="reglink">Online Membership Form</a></h6>

				<h3>Post Graduate Students</h3>
				<p>Post graduate students are require to make a refundable Security deposit of Rs. 3000.00 or Rs. 5000.00 according to the package of their preference.<br><br>
				Post Graduate students are allowed to borrow one book for a period of 14 days. If a member requires the same book to be renewed for a further period of time he/she will be allowed to renew the same for another 14 days only.<br>
				</p>

				<h3>Academic and Non Academic Staff</h3>
				<p>PAll Academic staff are entitled to the library membership for borrowing books from  where they teach. Temporary academic staff are also eligible for library membership free of charge.<br><br>
					Non academics only on permanent cadre are eligible for library membership.<br><br>
					All Staff must apply for library membership by submitting a duly completed application form available either at the circulation desk or downloadable from the library website, along with the IABT ID or a copy of the letter of appointment.<br>

				</p>

				<h1>E Resources</h1>
				<p>IABT library enriched with subject oriented e-resources such as Emerald Database, IEEE Xplore and Science Direct Journals. IABT library subscribed to e-books covering subjects Information Technology, Accounts, Finance, Marketing and Hospitality Management and Engineering. IABT library subscribed to e-books of Pearson, McGraw Hill, John Wiley and Elsevier publishers related to subjects Information Technology, Engineering, Business and Education. All these resources are available through the library web o. All users of both campuses are allowed to log directly to the database by using the IABT web page.<br>
				</p>

				<h1>Plagiarism Detective Tool</h1>
				<p>IABT library is also using the plagiarism detective tool named Turnitin and allow students and teachers to upload papers to check for accurate writing.<br>
				</p>

				<h1>Refund of the Library Deposit</h1>
				<p>Post graduate Students who paid the security Deposit may claim the refund by handing over the duly filled application form available at the library. Application for refunds will be entertained at the end of a semester and that will be announced periodically during that period.<br><br>
				Accordingly, a student may request for a refund:
					<ul>
						<li>At the end of the course for which he/she is registered</li>
						<li>If he/she no longer wishes to continue with the borrowing facility</li>
					</ul>
				(Such applications should be forwarded at the periods mentioned above)<br><br>
				However, if a student leaves IABT for any reason, such student may claim the refund at the time of leaving.<br><br>
				It is to be noted that students should apply for the refund within a period of two years after graduation. If not he/she will lose the claim for refund after the said period.<br><br>
				</p>

				<h3>Download Refund Form</h3>
				<a href="refundform.php" class="refundlink">Library Deposit Refund Form</a>
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
    <?php
} else {
    // User is not signed in, display the login button
    ?>
    <html>
	<head>
		<title>IABT University Library</title>
		<link rel="icon" type="image/png" href="img/logo3.png" sizes="32x32">
		<link rel="stylesheet" type="text/css" href="Style/membership.css">
	</head>

	<body class="body">
		<header class="h">
			<img class="hb" src=""> 
			<a href="home.php"><img class="img1" src="img/logo3.jpeg" alt="logo"></a>
			<a href="login.php"><img class="img2" src="img/avatar.png" alt="avatar"></a>
			<a class="login" href="login.php">Login</a>
			<h1 class="header">IABT UNIVERSITY LIBRARY</h1>

			<!-- menu bar design -->
			<ul class="menubar">
				<li><a href="Home.php">Home</a></li>
                <li><a href="search.php">Search</a></li>
                <li><a href="facilities.php">Facilities</a></li>
                <li><a href="membership.php"  class="active">Membership</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="new arivals1.php">New Arrivals</a></li>
                <li><a href="myprofile.php">My Profile</a></li>
                <li><a href="Ask Librarian.html">Ask Librarian</a></li>
			</ul>
		</header>
		<!-- <hr class="hr1"> -->
		<main class="content">
			<div class="des">
				<h1>Membership</h1>
				<p>Students of IABT campus are allowed to use both libraries for reference while Academic staff is eligible to borrow books from any campus they teach. It is mandatory to have a library membership to borrow books.
					<ul>
						<li>All registered students are eligible for library membership without placing any security deposit.</li>
						<li>Members have access to core text books, reference books, general reading materials, CDs, DVDs and etc.</li>
					</ul>		
				Students who have library membership are allowed to borrow one book for a period of 14 days. Books on high demand will be issued for overnight use during the demanding period. Books issued for the weekend may also vary depending on the demand during that period.

				</p>
				<h6><a href="reg.php" class="reglink">Online Membership Form</a></h6>

				<h3>Post Graduate Students</h3>
				<p>Post graduate students are require to make a refundable Security deposit of Rs. 3000.00 or Rs. 5000.00 according to the package of their preference.<br><br>
				Post Graduate students are allowed to borrow one book for a period of 14 days. If a member requires the same book to be renewed for a further period of time he/she will be allowed to renew the same for another 14 days only.<br>
				</p>

				<h3>Academic and Non Academic Staff</h3>
				<p>PAll Academic staff are entitled to the library membership for borrowing books from  where they teach. Temporary academic staff are also eligible for library membership free of charge.<br><br>
					Non academics only on permanent cadre are eligible for library membership.<br><br>
					All Staff must apply for library membership by submitting a duly completed application form available either at the circulation desk or downloadable from the library website, along with the IABT ID or a copy of the letter of appointment.<br>

				</p>

				<h1>E Resources</h1>
				<p>IABT library enriched with subject oriented e-resources such as Emerald Database, IEEE Xplore and Science Direct Journals. IABT library subscribed to e-books covering subjects Information Technology, Accounts, Finance, Marketing and Hospitality Management and Engineering. IABT library subscribed to e-books of Pearson, McGraw Hill, John Wiley and Elsevier publishers related to subjects Information Technology, Engineering, Business and Education. All these resources are available through the library web o. All users of both campuses are allowed to log directly to the database by using the IABT web page.<br>
				</p>

				<h1>Plagiarism Detective Tool</h1>
				<p>IABT library is also using the plagiarism detective tool named Turnitin and allow students and teachers to upload papers to check for accurate writing.<br>
				</p>

				<h1>Refund of the Library Deposit</h1>
				<p>Post graduate Students who paid the security Deposit may claim the refund by handing over the duly filled application form available at the library. Application for refunds will be entertained at the end of a semester and that will be announced periodically during that period.<br><br>
				Accordingly, a student may request for a refund:
					<ul>
						<li>At the end of the course for which he/she is registered</li>
						<li>If he/she no longer wishes to continue with the borrowing facility</li>
					</ul>
				(Such applications should be forwarded at the periods mentioned above)<br><br>
				However, if a student leaves IABT for any reason, such student may claim the refund at the time of leaving.<br><br>
				It is to be noted that students should apply for the refund within a period of two years after graduation. If not he/she will lose the claim for refund after the said period.<br><br>
				</p>

				<h3>Download Refund Form</h3>
				<a href="refundform.php" class="refundlink">Library Deposit Refund Form</a>
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
    <?php
}
?>
