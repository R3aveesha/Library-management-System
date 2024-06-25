<?php

$servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "library";

    $conn = mysqli_connect($servername, $username, $password, $database_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

   if (isset($_POST['submit'])) {
    $library_id = $_POST['library_id'];
    $user_email = $_POST['user_email'];
    $message_librarian = $_POST['message_librarian'];

    
            $sql_query = "INSERT INTO ask_librarian (library_id, user_email, message_librarian) 
                        VALUES ('$library_id', '$user_email', '$message_librarian') ";

            if (mysqli_query($conn, $sql_query)) {
                echo "Your message submitted successfully!";
            } else {
                echo "Error: " . $sql_query . " " . mysqli_error($conn);
            }
        }
    

    mysqli_close($conn);
    
?>
