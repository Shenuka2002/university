<?php
@include 'config.php';
session_start();
if(isset($_SESSION['admin_name'])){
header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="container">

      <div class="content">
      <h3>hi, <span>Admin</span></h3>
      <h1>Welcome<span></span></h1>
      <p>This is an admin Page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>

    </div>
  </div>
    </body>
    </html>