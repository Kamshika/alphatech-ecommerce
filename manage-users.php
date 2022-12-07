<?php session_start();

if(!isset($_SESSION["ausername"]))
{
	header('Location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include "imports.php"; ?>
    <title>Manage Users</title>
  </head>
  <body>
    <div class="header_login">
      <div class="header content">
        <div class="logo"><a class="logo-link" href="index.php">VIVO</a></div>
        <div class="menu">
          <ul class="menu-list">
            <li class="menu-item"><a class="menu-item-link" href=""></a></li>
            <li class="menu-item"><a class="menu-item-link" href="manage-products.php">Manage Products</a></li>
            <li class="menu-item"><a class="menu-item-link" href="manage-users.php"><u>Manage Users</u></a></li>
						<li class="menu-item"><a class="menu-item-link" href="manage-faq.php">Manage FAQ</a></li>
						<li class="menu-item"><a class="menu-item-link" href="admin-logout.php">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>
	<div class="manage-products-contents">
		<table class="manage-products-table">

			 <?php

$con = mysqli_connect("localhost","root","","vivo");
if(!$con)
{
die("Cannot connect to DB server");
}
$sql ="SELECT * FROM `customer` WHERE cname LIKE '%'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)> 0)
{
echo   " <tr class='manage-products-tr'><td class='manage-products-td'>Name</td><td class='manage-products-td'>Email</td><td>Address</td><td class='manage-products-td'>Telephone</td><td class='manage-products-td'>Delete</td></tr>  ";
while($row = mysqli_fetch_assoc($result))
{

echo   " <td class='manage-products-td'class='manage-products-td'><div class=''>".$row["cname"]."</div></td>  ";
echo   " <td class='manage-products-td'><div class=''>".$row["cemail"]."</div></td>  ";
echo   " <td class='manage-products-td'><div class=''>".$row["cadd"]."</div></td>  ";
echo   " <td class='manage-products-td'><div class=''>".$row["ctelno"]."</div></td>  ";
echo " <td class='manage-products-td' width=''><a href='deletecustomer.php?id=".$row["cid"]."'><img src='resources/images/delete.png' alt='' width='' height='' /></a></td> ";
echo "</tr>";

}
}
?>
		</table>
	</div>
  </body>
</html>
