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
	<title>Update Products</title>
</head>
<body>
	<div class="header_login">
		<div class="header content">
			<div class="logo"><a class="logo-link" href="https://localhost/vivo/index.php">VIVO</a></div>
			<div class="menu">
				<ul class="menu-list">
					<li class="menu-item"><a class="menu-item-link" href=""></a></li>
					<li class="menu-item"><a class="menu-item-link" href="https://localhost/vivo/manage-products.php"><u>Manage Products</u></a></li>
					<li class="menu-item"><a class="menu-item-link" href="https://localhost/vivo/manage-users.php">Manage Users</a></li>
					<li class="menu-item"><a class="menu-item-link" href="https://localhost/vivo/manage-faq.php">Manage FAQ</a></li>
					<li class="menu-item"><a class="menu-item-link" href="https://localhost/vivo/admin-logout.php">Log Out</a></li>
				</ul>
			</div>
		</div>
	</div>
	<?php
	$con = mysqli_connect("localhost","root","","vivo");
	if(!$con)
	{
		die("Cannot connect to DB server");
	}
	$sql ="SELECT * FROM `product` WHERE `pid`=".$_GET["id"]."";

	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result)> 0)
	{
		$row = mysqli_fetch_assoc($result);

		?>
		<div class="updateitem-contents">
			<h2 class="center">Update Product</h2>

			<form action="update.php?id=<?php echo $_GET["id"];?>" method="post" enctype="multipart/form-data">

				<table class="updateitem-table" width="80%" border="0" align="center">
					<tr>
						<td class="updateitem-td right" width="50%">Title</td>
						<td class="updateitem-td" width="50%"><input type="text" class="p1" name="ptitle" id="ptitle" value="<?php echo $row["ptitle"];?>" /></td>
					</tr>
					<tr>
						<td class="updateitem-td right" width="50%">Price</td>
						<td class="updateitem-td" width="50%"><input type="text" class="p1" name="pprice" id="pprice" value="<?php echo $row["pprice"];?>" /></td>
					</tr>
					<tr>
						<td class="updateitem-td right" width="50%">Stock</td>
						<td class="updateitem-td" width="50%"><input type="text" class="p1" name="pstock" id="pstock" value="<?php echo $row["pstock"];?>" /></td>
					</tr>
					<tr>
						<td class="updateitem-td right" width="50%">Slug</td>
						<td class="updateitem-td" width="50%"><input type="text" class="p1" name="pslug" id="pslug" value="<?php echo $row["ptitle"];?>" /></td>
					</tr>
					<tr>
						<td class="updateitem-td right" width="50%">Image</td>
						<td class="updateitem-td" ><input type="file" class="p1" name="fileImage" id="fileImage" value="<?php echo $row["pimg"];?>" /></td>
					</tr>
					<tr>
						<td class="updateitem-td right" width="50%">Description</td>
						<td class="updateitem-td" width="50%"><input type="text" class="p1" name="descs" id="descs" value="<?php echo $row["pdesc"];?>" /></td>
					</tr>
					<tr>
						<td class="updateitem-td right" width="50%" height="43">Category</td>
						<td class="updateitem-td" >Shirt<input type="checkbox" name="chkShirt" id="chkShirt"  <?php if($row["pcat"]=="Shirt"){echo "checked";}?> />
							Pants<input type="checkbox" name="chkPant" id="chkPant" <?php if($row["pcat"]=="Pant"){echo "checked";}?> />
							Blouses<input type="checkbox" name="chkBlouse" id="chkBlouse" <?php if($row["pcat"]=="Blouse"){echo "checked";}?> />
							Skirts<input type="checkbox" name="chkSkirt" id="chkSkirt" <?php if($row["pcat"]=="Skirt"){echo "checked";}?> />
							Skirts<input type="checkbox" name="chkAccessories" id="chkAccessories" <?php if($row["pcat"]=="Accessories"){echo "checked";}?> />
						</td>
					</tr>
					<tr>
						<td class="updateitem-td center"  colspan="2"><blockquote>

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input name="btnSubmit" type="submit" class="filter-button updateitem-btn" id="btnSubmit" value="Update"   />
							<input name="btnReset" type="reset" class="filter-button updateitem-btn" id="btnReset" value="Cancel"   />

						</blockquote></td>
					</tr>
				</table>
				<?php
			}
			mysqli_close($con);
			?>
		</form>
	</div>
</body>
</html>
