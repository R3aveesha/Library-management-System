<?php 

session_start(); 

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "library";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}


if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $pass = validate($_POST['password']);

    if (empty($email)) {

        header("Location: loginpage.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: loginpage.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM register_details WHERE email='$email' AND create_password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['create_password'] === $pass) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];

                $_SESSION['uname'] = $row['full_name'];

                $_SESSION['id'] = $row['id'];

                header("Location: myprofile.php");

                exit();

            }else{

                header("Location: loginpage.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: loginpage.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: loginpage.php");

    exit();

}