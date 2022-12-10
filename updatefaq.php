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
    <title>Update FAQ</title>
  </head>
  <body>
    <div class="header_login">
			<div class="header content">
        <div class="logo"><a class="logo-link" href="index.php">alphaTech</a></div>
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
    <?php
    	$con = mysqli_connect("localhost","root","","vivo");
    		if(!$con)
    		{
    			die("Cannot connect to DB server");
    		}
    		$sql ="SELECT * FROM `faq` WHERE `fid`='".$_GET["id"]."'";

    		$result = mysqli_query($con,$sql);

    		if(mysqli_num_rows($result)> 0)
    	{
    			$row = mysqli_fetch_assoc($result);

    ?>
		<div class="updateitem-contents">
			<h2 class="center">Update FAQ</h2>

  <form action="updatingfaq.php?id=<?php echo $_GET["id"];?>" method="post" enctype="multipart/form-data">

          <table class="updateitem-table" width="80%" border="0" align="center">
          <tr>
            <td class="updateitem-td right" width="50%">Question</td>
            <td class="updateitem-td" width="50%"><input class="p1" type="text" name="fq" id="fq" value="<?php echo $row["fq"];?>" /></td>
          </tr>
          <tr>
            <td class="updateitem-td right" width="50%">Answer</td>
            <td class="updateitem-td" width="50%"><input class="p1" type="text" name="fa" id="fa" value="<?php echo $row["fa"];?>" /></td>
          </tr>





          <tr>
            <td class="updateitem-td center" colspan="2"><blockquote>

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
