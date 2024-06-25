<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve form data
    $record_id=$_POST['record_id'];
    $library_id = $_POST['library_id'];
    $user_email = $_POST['user_email'];
    $message_librarian = $_POST['message_librarian'];

    // Perform your CRUD operations here (e.g., save to a database)

    // Example: Save to a MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "library";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
     
 if (isset($_POST['update'])){

    $library_id = $_POST['library_id'];
    $user_email = $_POST['user_email'];
    $message_librarian  = $_POST['message_librarian']; 

}

     // Prepare and execute the SQL statement to insert the data
    $sql = "UPDATE ask_librarian SET library_id='$library_id', user_email='$user_email', message_librarian='$message_librarian' WHERE record_id='$record_id'";

    if (mysqli_query($conn, $sql)) {
        echo "New details entry inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
}
?>
