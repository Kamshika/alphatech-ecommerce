<?php session_start();

if(!isset($_SESSION["ausername"]))
{
	header('Location:admin.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add FAQ</title>
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
					<li class="menu-item"><a class="menu-item-link" href="manage-products.php">Manage Products</a></li>
					<li class="menu-item"><a class="menu-item-link" href="manage-users.php">Manage Users</a></li>
					<li class="menu-item"><a class="menu-item-link" href="manage-faq.php"><u>Manage FAQ</u></a></li>
					<li class="menu-item"><a class="menu-item-link" href="admin-logout.php">Log Out</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="updateitem-contents">
		<h2 class="center">Add FAQ</h2>
<form action="addfaq.php" method="post" enctype="multipart/form-data">

        <table class="updateitem-table" width="80%"  border="0" align="center">
        <tr>
          <td class="updateitem-td right" width="50%">Question</td>
          <td class="updateitem-td" width="50%"><input class="p1" type="text" name="fq" id="fq" /></td>
        </tr>
        <tr>
          <td class="updateitem-td right" width="50%">Answer</td>
          <td class="updateitem-td" width="50%"><input class="p1" type="text" name="fa" id="fa" /></td>
        </tr>




        <tr>
          <td colspan="2"><br />
             <?php
  		   if(isset($_POST["btnSubmit"]))
  		   {
  			   $question=$_POST["fq"];
           $answer=$_POST["fa"];


  		   $con = mysqli_connect("localhost","root","","vivo");
  			if(!$con)
  			{
  				die("Cannot upload the file, Please choose another file");
  			}

  			   $sql="INSERT INTO `faq` (`fid`, `fq`, `fa`) VALUES (NULL, '".$question."', '".$answer."');";

  			   	if(  mysqli_query($con,$sql))
  				{
  						echo "File uploaded Successfully";
  				}
  				else
  				{
  					echo "Opps something is wrong, Please select the file again";
  				}

  		   }

  		   ?>

              </td>
          </tr>
        <tr>
          <td class="updateitem-td center" colspan="2"><blockquote>

               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input class="filter-button updateitem-btn" name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Add Now"   />
              <input class="filter-button updateitem-btn" name="btnReset" type="reset" class="button" id="btnReset" value="Cancel"   />

          </blockquote></td>
          </tr>
      </table>
      </form>
</div>
</body>
</html>
