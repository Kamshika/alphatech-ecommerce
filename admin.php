<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <?php include "imports.php"; ?>
  <title>Admin Login</title>
  <style>
    body {
      background-color: #1E88E5;
    }
  </style>
</head>

<body>
  <div class="header_login">
    <div class="header content">
      <div class="logo"><a class="logo-link" href="index.php">VIVO</a></div>
      <div class="menu">
        <ul class="menu-list">
          <li class="menu-item"><a class="menu-item-link" href=""></a></li>
          <li class="menu-item"><a class="menu-item-link" href="manage-products.php">Manage Products</a></li>
          <li class="menu-item"><a class="menu-item-link" href="manage-users.php">Manage Users</a></li>
          <li class="menu-item"><a class="menu-item-link" href="manage-faq.php">Manage FAQ</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="admin-log-in-box">
    <div class="admin-log-in-content">
      <p class="admin-log-in-heading">Admin Log In</p>
      <form name="login" class="admin-log-in-form" method="post" action="admin.php">
        <p class="admin-log-in-text">Email:</p>
        <input type="email" class="AdminEmailID" name="AdminEmailID" id="AdminEmailID" placeholder="Email"><br><br>
        <p class="admin-log-in-text">Password:</p>
        <input type="password" name="AdminPassword" class="AdminPassword" id="AdminPassword" placeholder="Password"><br><br><br>
        <?php
        if (isset($_POST["btnLogin"])) {
          $userName = $_POST["AdminEmailID"];
          $password = $_POST["AdminPassword"];
          $valid = false;

          $con = mysqli_connect("localhost", "root", "", "vivo");
          if (!$con) {
            die("Cannot connect to DB server");
          }

          $sql = "SELECT * FROM `admin` WHERE `aemail`='" . $userName . "' and `apass`='" . $password . "'";

          $result = mysqli_query($con, $sql);


          if (mysqli_num_rows($result) > 0) {
            $valid = true;
          } else {
            $valid = false;
          }

          if ($valid) {
            $_SESSION["ausername"] = $userName;
            header('Location:manage-products.php');
          } else {
            echo "Please enter the correct username and password";
          }
        }
        ?>
        <input class="filter-button" name="btnLogin" type="submit" value="Log In">
      </form>
    </div>
</body>

</html>