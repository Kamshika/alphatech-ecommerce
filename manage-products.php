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
	<title>Manage Products</title>
</head>
<body>
	<div class="header_login">
		<div class="header content">
			<div class="logo"><a class="logo-link" href="index.php">alphaTech</a></div>
			<div class="menu">
				<ul class="menu-list">
					<li class="menu-item"><a class="menu-item-link" href=""></a></li>
					<li class="menu-item"><a class="menu-item-link" href="manage-products.php"><u>Manage Products</u></a></li>
					<li class="menu-item"><a class="menu-item-link" href="manage-users.php">Manage Users</a></li>
					<li class="menu-item"><a class="menu-item-link" href="manage-faq.php">Manage FAQ</a></li>
					<li class="menu-item"><a class="menu-item-link" href="admin-logout.php">Log Out</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="manage-products-contents">
		<div class="addbtn">
			<a class="filter-button updateitem-btn" href="addproduct.php">Add Product</a>
		</div>
		<table class="manage-products-table">
			<?php

			$con = mysqli_connect("localhost","root","","vivo");
			if(!$con)
			{
				die("Cannot connect to DB server");
			}
			$sql ="SELECT * FROM `product`";

			$result = mysqli_query($con,$sql);

			if(mysqli_num_rows($result)> 0)
			{
				echo   " <tr class='manage-products-tr'><td class='manage-products-td'>Image</td><td class='manage-products-td'>Title</td><td class='manage-products-td'>Price</td>
				<td class='manage-products-td'>Description</td><td class='manage-products-td'>Category</td><td class='manage-products-td'>Stock</td><td class='manage-products-td'>Edit</td><td class='manage-products-td'>Delete</td></tr>  ";
				while($row = mysqli_fetch_assoc($result))
				{
					echo   " <tr class='manage-products-tr'><td class='manage-products-td'> <div class='image'> <img src='".$row["pimg"]."' width='164' height='164' /> </div></td>  ";
					echo   " <td class='manage-products-td'><div class=''>".$row["ptitle"]."</div></td>  ";
					echo   " <td class='manage-products-td'><div class=''>".$row["pprice"]."</div></td>  ";
					echo   " <td class='manage-products-td'><div class=''>".$row["pdesc"]."</div></td>  ";
					echo   " <td class='manage-products-td'><div class=''>".$row["pcat"]."</div></td>  ";
					echo   " <td class='manage-products-td'><div class=''>".$row["pstock"]."</div></td>  ";
					echo "<td class='manage-products-td' width='172'><a href='updateitem.php?id=".$row["pid"]."'><img src='resources/images/edit.png' alt='' width='32' height='34' /></a></td>  ";
					echo " <td class='manage-products-td' width='171'><a href='deleteitem.php?id=".$row["pid"]."'><img src='resources/images/delete.png' alt='' width='32' height='34' /></a></td> ";
					echo "</tr>";

				}
			}
			?>
		</table>
	</div>
</body>
</html>
