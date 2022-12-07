<?php session_start();

if(!isset($_SESSION["cusername"]))
{
	header('Location:login.php');
}
?>
<html lang="en">
<head>
    <?php include "imports.php"; ?>
    <title>My Profile</title>
    <style>
    .footer {
      position: relative;
      margin-top: 59em !important;
}
    </style>
</head>
<body>
	<?php

  if(!isset($_SESSION["cusername"]))
  {
  	  include "header-logged-out.php";
  }else {
      include "header-logged-in.php";
  }
  ?>
  <div class="profile">
    <div class="profile-contents">
      <div class="profile-about">
        <div class="profile-about-contents">
					<?php
						$con = mysqli_connect("localhost","root","","vivo");
							if(!$con)
							{
								die("Cannot connect to DB server");
							}
							$sql ="SELECT * FROM `customer` WHERE `cemail`='".$_SESSION["cusername"]."'";

							$result = mysqli_query($con,$sql);

							if(mysqli_num_rows($result)> 0)
						{
								$row = mysqli_fetch_assoc($result);

					?>
          <img class="profile-picture" src="<?php echo $row["cpic"];?>">
          <p class="profile-about-heading">Name:</p>
          <p class="profile-about-content"><?php echo $row["cname"];?></p>
          <p class="profile-about-heading">Phone:</p>
          <p class="profile-about-content"><?php echo $row["ctelno"];?></p>
          <p class="profile-about-heading">Address:</p>
          <p class="profile-about-content"><?php echo $row["cadd"];?></p>
          <p class="profile-about-heading">Email:</p>
          <p class="profile-about-content"><?php echo $row["cemail"];?></p>
					<p class="profile-about-content center"><a href="editdetails.php?id=<?php echo $row["cid"]; ?>"><b>Edit Details</b></a></p>
					<?php
			  }
			  mysqli_close($con);
			  ?>
        </div>
      </div>
      <div class="profile-details">
        <div class="profile-details-contents">
          <a id="Cart"></a>
          <div class="profile-details-row">
            <p class="profile-details-heading">Shopping cart</p>
            <table class="shopping-cart-table">
              <tr class="shopping-cart-row">
                <th class="shopping-cart-heading">Product</th>
                <th class="shopping-cart-heading">Price</th>
                <th class="shopping-cart-heading">Quantity</th>
                <th class="shopping-cart-heading">Sub Total</th>
                <th class="shopping-cart-heading">Edit</th>
              </tr>
              <tr class="shopping-cart-row">
                <td class="shopping-cart-item">Double Flair Short Dress</td>
                <td class="shopping-cart-item center">LKR 2190</td>
                <td class="shopping-cart-item center">1</td>
                <td class="shopping-cart-item center">LKR 2190</td>
                <td class="shopping-cart-item center"><img class="delete-item" src="resources/images/delete.png"></td>
              </tr>
              <tr class="shopping-cart-row">
                <td class="shopping-cart-item">Double Flair Short Dress</td>
                <td class="shopping-cart-item center">LKR 2190</td>
                <td class="shopping-cart-item center">1</td>
                <td class="shopping-cart-item center">LKR 2190</td>
                <td class="shopping-cart-item center"><img class="delete-item" src="resources/images/delete.png"></td>
              </tr>
              <tr class="shopping-cart-row">
                <td class="shopping-cart-item">Double Flair Short Dress</td>
                <td class="shopping-cart-item center">LKR 2190</td>
                <td class="shopping-cart-item center">1</td>
                <td class="shopping-cart-item center">LKR 2190</td>
                <td class="shopping-cart-item center"><img class="delete-item" src="resources/images/delete.png"></td>
              </tr>
            </table>
            <br>
            <input class="proceed-button" value="Proceed To Checkout" type="submit">
          </div>
          <a id="Orders"></a>
          <div class="profile-details-row">
            <p class="profile-details-heading">Orders</p>
            <table class="orders-table">
              <tr class="orders-row">
                <th class="orders-heading">Order ID</th>
                <th class="orders-heading">Total</th>
                <th class="orders-heading">Payment</th>
                <th class="orders-heading">Delivery Address</th>
                <th class="orders-heading">Status</th>
              </tr>
              <tr class="orders-row">
                <td class="orders-item center">789</td>
                <td class="orders-item center">LKR 2190</td>
                <td class="orders-item center">Done</td>
                <td class="orders-item center">No 123, SLIIT A, Kolpetty</td>
                <td class="orders-item center">Processing</td>
              </tr>
              <tr class="orders-row">
                <td class="orders-item center">456</td>
                <td class="orders-item center">LKR 590</td>
                <td class="orders-item center">Done</td>
                <td class="orders-item center">No 123, SLIIT A, Kolpetty</td>
                <td class="orders-item center">Dispatched</td>
              </tr>
              <tr class="orders-row">
                <td class="orders-item center">123</td>
                <td class="orders-item center">LKR 3190</td>
                <td class="orders-item center">Done</td>
                <td class="orders-item center">No 123, SLIIT A, Kolpetty</td>
                <td class="orders-item center">Delivered</td>
              </tr>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php require "footer.php"; ?>
</body>
</html>
