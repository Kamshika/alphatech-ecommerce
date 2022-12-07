<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <?php include "imports.php"; ?>
  <title>Register</title>
  <style>
    body {
      background-color: #1E88E5;
    }
  </style>
</head>

<body>
  <?php
  include "header-logged-out.php";

  ?>
  <div class="register-in-box">
    <div class="register-in-content">
      <p class="register-in-heading">Register</p>
      <form method="post" action="register.php" class="register-in-form">
        <p class="register-in-text">Name:</p>
        <input type="text" class="RegName" name="RegName" id="RegName" placeholder="Name"><br><br>

        <p class="register-in-text">Email:</p>
        <input type="email" class="RegEmailID" name="RegEmailID" id="RegEmailID" placeholder="Email"><br><br>

        <p class="register-in-text">Password:</p>
        <input type="password" name="RegPassword" class="RegPassword" id="RegPassword" placeholder="Password"><br><br>

        <!-- <p class="register-in-text">Confirm Password:</p>
        <input type="password" name="RegCPassword" class="RegCPassword" id="RegCPassword" placeholder="Confirm Password"><br><br> -->

        <p class="register-in-text">Phone:</p>
        <input type="text" name="RegPhone" class="RegPhone" id="RegPhone" placeholder="Phone"><br><br>

        <p class="register-in-text">Address:</p>
        <input type="text" name="RegAddress" class="RegAddress" id="RegAddress" placeholder="Address"><br><br>

        <br>
        <?php
        if (isset($_POST["btnSubmit"])) {
          $name = $_POST["RegName"];
          $email = $_POST["RegEmailID"];
          $pass = $_POST["RegPassword"];
          $telno = $_POST["RegPhone"];
          $addr = $_POST["RegAddress"];

          $con = mysqli_connect("localhost", "root", "", "vivo");

          if (!$con) {
            die("Cannot upload the file, Please choose another file");
          }

          $sql = "INSERT INTO `customer` (`cid`, `cname`, `cemail`, `cpass`, `ctelno`, `cadd`, `cpic`) VALUES (NULL, '" . $name . "', '" . $email . "', '" . $pass . "', '" . $telno . "', '" . $addr . "', 'resources/images/dove.png');";

          if (mysqli_query($con, $sql)) {
            echo "File uploaded Successfully, Please Login";
            header('Location:login.php');
          } else {
            echo "Opps something is wrong, Please select the file again";
          }
        }

        ?>

        <input name="btnSubmit" class="filter-button" type="submit" value="Register">
      </form>
    </div>
  </div>
</body>

</html>