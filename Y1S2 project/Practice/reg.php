<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
</head>
<body>
  <h1>Registration Form</h1>
  <form action="registration.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Register">
  </form>
</body>
</html>
<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
  // Retrieve the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Perform any necessary validation or processing
  // ...

  // Save the registration data to a database or perform any other actions
  // ...

  // Display a success message or redirect to a thank-you page
  echo "Registration successful!";
} else {
  echo "Invalid form submission.";
}
?>
