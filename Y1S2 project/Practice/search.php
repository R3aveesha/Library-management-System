
    <html>
    <head>
        <title>IABT University Library</title>
        <link rel="icon" type="image/png" href="img/logo3.png" sizes="32x32">
        <link rel="stylesheet" type="text/css" href="Style/search.css">
        <script type="text/javascript" src="Js/slide.js"></script>
        <style>
            .body
            {
                background-image: url("img/l7.jpg");
            }

            <style>
        .body {
            background-image: url("img/l7.jpg");
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height:1000px;
            background-color: grey;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        p.no-results {
            text-align: center;
            font-weight: bold;
        }
    </style>
        </style>
    </head>

    <body class="body">
        <header class="h">
            <img class="hb" src=""> 
            <img class="img1" src="img/logo3.jpeg" alt="logo">
            <img class="img2" src="img/avatar.png" alt="avatar">
            <a class="login" href="login.html">Login</a>
            <a class="reg" href="Register.html" >Register</a>
            <h1 class="header">IABT UNIVERSITY LIBRARY</h1>

            <!-- menu bar design -->
            <ul class="menubar">
                <li><a href="Home.php" >Home</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="facilities.php">Facilities</a></li>
            <li><a href="membership.php">Membership</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="new arivals1.php">New Arrivals</a></li>
            <li><a href="myprofile.php">My Profile</a></li>
            <li><a href="Ask Librarian.html"  class="active">Ask Librarian</a></li>
        </ul>
        </header>
        <!-- <hr class="hr1"> -->
        <main class="content">
            <form action=" " method="POST" class="search">
                <fieldset class="sf">
                <legend>Search</legend>
                    <p class="searchtype">Type the name of resource : </p>
                    <input type="text" name="rname" placeholder="Type the name of resource" class="bar"><br><br>

                    Category : 
                    <select name="category">
                        <option value="none" selected>--Select Category--</option>
                        <option value="Books">Books</option>
                        <option value="Past Papers">Past Papers</option>
                        <option value="Magazines">Magazines</option>
                        <option value="Articles">Articles</option>
                        <option value="Research papers">Research papers</option>
                        <option value="Journals">Journals</option>
                    </select><br><br>
                    <button type="submit" value="Search" class="sb" name="search">Search</button>
                </fieldset>
            </form>
        <div class="container">
              <?php
        // Check if the form is submitted and perform search
        if (isset($_POST['search'])) {
            // Retrieve the selected category from the form data
            $category = $_POST['category'];
            $searchQuery = $_POST['rname'];

            // Create a database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "library";
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check the database connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Perform the search query with category filter
            $sql = "SELECT * FROM resources WHERE category = '$category' or name ='$searchQuery'";
            $result = $conn->query($sql);

            // Display the search results
            if ($result->num_rows > 0) {
                echo "<h2>Search Results</h2>";
                echo "<table>";
                echo "<tr><th>Resource Name</th><th>Category</th></tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['category'] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "<p>No results found.</p>";
            }

            // Close the database connection
            $conn->close();
        }
        ?>
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
