<html lang="en">

<head>
  <?php include "imports.php"; ?>
  <title>Products</title>
  <style>
    .categories-menu-all {
      font-weight: bold;
      color: #1e88e5;
    }

    .footer {
      width: 100% !important;
      position: relative !important;
      margin-top: 67em !important;
    }
  </style>
</head>

<body>
  <?php session_start();

  if (!isset($_SESSION["cusername"])) {
    include "header-logged-out.php";
  } else {
    include "header-logged-in.php";
  }
  ?>

  <div class="product">
    <div class="product-contents">
      <div class="product-filter">
        <div class="filter-content">
          <form class="filter-form" action="products.php" method="post">
            <legend class="filter-heading">Filter</legend>
            <br><br>

            <label class="filter-type">Brand:</label><br>
            <input type="radio" name="categories" id="samsung" value="samsung">
            <label class="opt" for="samsung">Samsung</label><br>
            <input type="radio" name="categories" id="apple" value="apple">
            <label class="opt" for="apple">Apple</label><br>
            <input type="radio" name="categories" id="oneplus" value="oneplus">
            <label class="opt" for="oneplus">onePlus</label><br>
            <input type="radio" name="categories" id="vivo" value="vivo">
            <label class="opt" for="vivo">Vivo</label><br>
            <input type="radio" name="categories" id="huawei" value="huawei">
            <label class="opt" for="huawei">Huawei</label><br>
            <br><br>

            <label class="filter-type">Price:</label><br>
            <input type="text" class="filter-price" name="min-price" id="min-price" placeholder="Min"> <b class="filter-line"> - </b>
            <input type="text" class="filter-price" name="max-price" id="max-price" placeholder="Max"><br><br><br><br>

            <input name="btnLogin" class="filter-button" type="submit" value="Find My Match">
          </form>
        </div>
      </div>

      <?php
      $con = mysqli_connect("localhost", "root", "", "vivo");
      if (!$con) {
        die("Cannot connect to DB server");
      }
      $sql = "SELECT * FROM `product`";
      if (isset($_POST['btnLogin'])) {
        if (isset($_POST['categories'])) {
          $categories = $_POST['categories'];
        }
        $minPrice = $_POST['min-price'];
        $maxPrice = $_POST['max-price'];

        if (!empty($categories)) {
          $sql = "SELECT * FROM `product` WHERE `pcat` = '" . $categories . "'";
        } elseif (!empty($minPrice) && !empty($maxPrice)) {
          $sql = "SELECT * FROM `product` WHERE `pprice` BETWEEN '" . $minPrice . "' AND '" . $maxPrice . "'";
        } elseif (!empty($minPrice) && !empty($maxPrice) && !empty($categories)) {
          $sql = "SELECT * FROM `product` WHERE `pprice` BETWEEN '" . $minPrice . "' AND '" . $maxPrice . "' AND `pcat` = '" . $categories . "'";
        } else {
          $sql = "SELECT * FROM `product`";
        }
      }

      $result = mysqli_query($con, $sql);

      echo "<div class='product-grid'><table>";
      $games = 0;
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          // make a new row after 3 games
          if ($games % 5 == 0) {
            if ($games > 0) {
              // and only close it if it's not the first game
              echo '</tr>';
            }
            echo '<tr>';
          }
          $pid = $row['pid'];
          $title = $row['ptitle'];
          $price = $row['pprice'];
          $image = $row['pimg'];
      ?>
          <td>
            <a class="product-link" href="single.php?id=<?php echo $pid; ?>">
              <img class="product-image" src="<?php echo $image; ?>" />
              <p class="product-title"><?php echo $title; ?></p>
              <p class="product-price"><?php echo $price; ?></p>
            </a>
            <br />
          </td>
      <?php
          $games++; // increment the $games element so we know how many games we've already processed
        }
      }
      ?>
      </table>
    </div>
  </div>
  </div>
  <?php require "footer.php"; ?>
</body>

</html>