<?php session_start();

if (!isset($_SESSION["ausername"])) {
	header('Location:admin.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Add Product</title>
	<link rel="stylesheet" type="text/css" href="css/basicStyle.css" />
	<?php include "imports.php"; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="header_login">
		<div class="header content">
			<div class="logo"><a class="logo-link" href="index.php">VIVO</a></div>
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
	<div class="updateitem-contents">
		<h2 class="center">Add Product</h2>

		<form action="addproduct.php" method="post" enctype="multipart/form-data">

			<table class="updateitem-table" width="80%" border="0" align="center">
				<tr>
					<td class="updateitem-td right" width="50%">Title</td>
					<td class="updateitem-td" width="50%"><input class="p1" type="text" name="ptitle" id="ptitle" /></td>
				</tr>
				<tr>
					<td class="updateitem-td right" width="50%">Price</td>
					<td class="updateitem-td" width="50%"><input class="p1" type="text" name="pprice" id="pprice" /></td>
				</tr>
				<tr>
					<td class="updateitem-td right" width="50%">Image</td>
					<td class="updateitem-td " width="50%"><input class="p1" type="file" name="fileImage" id="fileImage" /></td>
				</tr>
				<tr>
					<td class="updateitem-td right" width="50%">Description</td>
					<td class="updateitem-td" width="50%"><input class="p1" type="text" name="descs" id="descs" /></td>
				</tr>
				<tr>
					<td class="updateitem-td right" width="50%" height="43">Category</td>
					<td class="updateitem-td">Shirt<input type="checkbox" name="chkShirt" id="chkShirt" />
						Pant<input type="checkbox" name="chkPant" id="chkPant" />
						Blouse<input type="checkbox" name="chkBlouse" id="chkBlouse" />
						Skirt<input type="checkbox" name="chkSkirt" id="chkSkirt" />
						Accessories<input type="checkbox" name="chkAccessories" id="chkAccessories" />
					</td>
				</tr>
				<tr>
					<td class="updateitem-td right" width="50%">Stock</td>
					<td class="updateitem-td" width="50%"><input class="p1" type="text" name="pstock" id="pstock" /></td>
				</tr>
				<tr>
					<td colspan="2"><br />
						<?php
						if (isset($_POST["btnSubmit"])) {
							$title = $_POST["ptitle"];
							$image = "resources/images/" . basename($_FILES["fileImage"]["name"]);
							move_uploaded_file($_FILES["fileImage"]["tmp_name"], $image);
							$description = $_POST["descs"];
							$price = $_POST["pprice"];
							$stock = $_POST["pstock"];

							if (isset($_POST["chkShirt"])) {
								$category = "Shirt";
							}
							if (isset($_POST["chkPant"])) {
								$category = "Pant";
							}
							if (isset($_POST["chkBlouse"])) {
								$category = "Blouse";
							}
							if (isset($_POST["chkSkirt"])) {
								$category = "Skirt";
							}
							if (isset($_POST["chkAccessories"])) {
								$category = "Accessories";
							}

							$con = mysqli_connect("localhost", "root", "", "vivo");
							if (!$con) {
								die("Cannot upload the file, Please choose another file");
							}

							$sql = "INSERT INTO `product` (`pid`, `ptitle`, `pdesc`, `pcat`, `pimg`, `pprice`, `pstock`, `pslug`) VALUES (NULL, '" . $title . "', '" . $description . "', '" . $category . "', '" . $image . "', '" . $price . "', '" . $stock . "', '');";

							if (mysqli_query($con, $sql)) {
								echo "File uploaded Successfully";
								header('Location:manage-products.php');
							} else {
								echo "Opps something is wrong, Please select the file again";
							}
						}

						?>

					</td>
				</tr>
				<tr>
					<td class="updateitem-td center" colspan="2">
						<blockquote>

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input class="filter-button updateitem-btn" name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Add Now" />
							<input class="filter-button updateitem-btn" name="btnReset" type="reset" class="button" id="btnReset" value="Cancel" />

						</blockquote>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>