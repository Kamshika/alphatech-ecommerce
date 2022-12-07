<?php session_start();
?>
<html lang="en">

<head>
  <?php include "imports.php"; ?>
  <title>Double Flair Short Dress</title>
  <style>
    .filter-button {
      float: right !important;
      width: 21% !important;
    }

    .footer {
      position: relative;
      margin-top: 42em !important;
    }

    .single-btn {
      width: 100% !important;
    }
  </style>
</head>

<body>
  <?php

  if (!isset($_SESSION["cusername"])) {
    include "header-logged-out.php";
  } else {
    include "header-logged-in.php";
  }
  ?>
  <div class="single">
    <?php
    $con = mysqli_connect("localhost", "root", "", "vivo");
    if (!$con) {
      die("Cannot connect to DB server");
    }
    $sql = "SELECT * FROM `product` WHERE `pid`=" . $_GET["id"] . ";
    echo $sql;
    $result = mysqli_query($con, $sql);
    echo $result;

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);

    ?>
      <div class="single-contents">
        <div class="single-image-column">
          <div class="single-row center">
            <img class="single-image" src="<?php echo $row["pimg"]; ?>">
          </div>
        </div>
        <div class="single-details-column">
          <div class="single-row">
            <p class="single-heading"><?php echo $row["ptitle"]; ?></p>
            <hr>
            <p class="single-price"><?php echo $row["pprice"]; ?></p>
            <p class="single-description"><?php echo $row["pdesc"]; ?></b></p>
            <form>

              <br><br>
              <input class="filter-button single-btn" type="submit" value="&nbsp;&nbsp;&nbsp;Add To Cart&nbsp;&nbsp;&nbsp;">
            </form>
          </div>

        </div>
      </div>
    <?php
    }
    mysqli_close($con);
    ?>
  </div>
  <?php require "footer.php"; ?>
</body>

</html>