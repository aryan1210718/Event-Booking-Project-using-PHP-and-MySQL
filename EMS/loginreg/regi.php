<?php
session_start();

include "partials/db_conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Hash the password

    $insert_sql = "INSERT INTO `user_login` (`full_name`, `username`, `email`, `password`) VALUES ('$fullname','$username','$email','$password')";

    $result = mysqli_query($conn, $insert_sql);

    if ($result) {
        $_SESSION['success_message'] = true;
        header("Location: login(user).php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webleb</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body style="display:flex; align-items:center; justify-content:center;">
<div class="login-page">
  <div class="form">
    <form class="login-form" method="post" action="">
      <h2>Register</h2>
      <input type="text" name="fullname" placeholder="Full Name *" required/>
      <input type="text" name="username" placeholder="Username *" required/>
      <input type="email" name="email" placeholder="Email *" required/>
      <input type="password"name="password" placeholder="Password *" required/>
      <button type="submit">Create</button>
      <p class="message">Already registered? <a href="login(user).php">Sign In</a></p>    
    </form>
  </div>
</div>
</body>
</html>
