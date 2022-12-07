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
    <title>Manage FAQ</title>
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
            <li class="menu-item"><a class="menu-item-link" href="manage-faq.php"><u>Manage FAQ</u></a></li>
            <li class="menu-item"><a class="menu-item-link" href="admin-logout.php">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>

				<div class="manage-products-contents">
					<div class="addbtn">
						<a class="filter-button updateitem-btn" href="addfaq.php">Add FAQ</a>
					</div>

          <table class="manage-products-table">

             <?php

    $con = mysqli_connect("localhost","root","","vivo");
    if(!$con)
    {
    die("Cannot connect to DB server");
    }
    $sql ="SELECT * FROM `faq`";

    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result)> 0)
    {
      echo   " <tr class='manage-products-tr'><td class='manage-products-td'>Question</td><td class='manage-products-td'>Answer</td><td class='manage-products-td'>Edit</td><td class='manage-products-td'>Delete</td></tr>  ";
    while($row = mysqli_fetch_assoc($result))
    {
    echo   " <tr class='manage-products-tr'><td class='manage-products-td'><div class=''>".$row["fq"]."</div></td>  ";
    echo   " <td class='manage-products-td'><div class=''>".$row["fa"]."</div></td>  ";
    echo "<td class='manage-products-td' width='172'><a href='updatefaq.php?id=".$row["fid"]."'><img src='resources/images/edit.png' alt='' width='32' height='34' /></a></td>  ";
    echo " <td class='manage-products-td' width='171'><a href='deletefaq.php?id=".$row["fid"]."'><img src='resources/images/delete.png' alt='' width='32' height='34' /></a></td> ";
      echo "</tr>";

    }
    }
    ?>
          </table>
</div>
  </body>
</html>
