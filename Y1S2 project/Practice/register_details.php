<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "library";

$conn = mysqli_connect($servername, $username, $password, $database_name);

// Check the connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['save'])) {
    $full_name = $_POST['full_name'];
    $nic = $_POST['nic'];
    $contact_no = $_POST['contact_no'];
    $email = $_POST['email'];
    $uni_id = $_POST['uni_id'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $create_password = $_POST['create_password'];
    $confirm_password = $_POST['confirm_password'];
    $status = $_POST['status'];

    // Check if the email already exists in the table
    $stmt = $conn->prepare("SELECT email FROM register_details WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Email already exists";
    } else {
        // Check if the UNI ID already exists in the table
        $stmt = $conn->prepare("SELECT uni_id FROM register_details WHERE uni_id = ?");
        $stmt->bind_param("s", $uni_id);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo "UNI ID already exists";
        } else {
            // Validate password length
            if (strlen($create_password) < 8) {
                echo "Password should be at least 8 characters long";
            }
            // Validate password for at least 2 numbers
            elseif (preg_match_all("/[0-9]/", $create_password) < 2) {
                echo "Password should contain at least 2 numbers";
            }
            // Check if the password and confirm password match
            elseif ($create_password !== $confirm_password) {
                echo "Password and Confirm Password do not match";
            } else {
                $sql_query = "INSERT INTO register_details (full_name, nic, contact_no, email, uni_id, gender, birthday, create_password, confirm_password, status) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql_query);
                $stmt->bind_param("ssssssssss", $full_name, $nic, $contact_no, $email, $uni_id, $gender, $birthday, $create_password, $confirm_password, $status);

                if ($stmt->execute()) {
                    echo "New details entry inserted successfully!";
                } else {
                    echo "Error: " . $sql_query . " " . $stmt->error;
                }
            }
        }
    }

    $stmt->close();
    mysqli_close($conn);
}
?>
