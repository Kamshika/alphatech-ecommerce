<?php session_start();

if(!isset($_SESSION["cusername"]))
{
	header('Location:login.php');
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
		<?php 

	  if(!isset($_SESSION["cusername"]))
	  {
	  	  include "header-logged-out.php";
	  }else {
	      include "header-logged-in.php";
	  }
	  ?>
    <?php
    	$con = mysqli_connect("localhost","root","","vivo");
    		if(!$con)
    		{
    			die("Cannot connect to DB server");
    		}
    		$sql ="SELECT * FROM `customer` WHERE `cid`=".$_GET["id"]."";

    		$result = mysqli_query($con,$sql);

    		if(mysqli_num_rows($result)> 0)
    	{
    			$row = mysqli_fetch_assoc($result);

    ?>
    <table width="" height="" border="0" align="center">
      <tr>
        <td height="" colspan="2"><form action="editingdetails.php?id=<?php echo $_GET["id"];?>" method="post" enctype="multipart/form-data">
          <table width="" border="0" align="center">
          <tr>
            <td width="146">Name</td>
            <td width="227"><input type="text" name="editName" id="editName" value="<?php echo $row["cname"];?>" /></td>
          </tr>
          <tr>
            <td width="">Email</td>
            <td width=""><input type="email" name="editEmail" id="editEmail" value="<?php echo $row["cemail"];?>" /></td>
          </tr>
          <tr>
            <td width="">Password</td>
            <td width=""><input type="password" name="editPass" id="editPass" value="<?php echo $row["cpass"];?>" /></td>
          </tr>
          <tr>
            <td width="">Address</td>
            <td width=""><input type="text" name="editAdd" id="editAdd" value="<?php echo $row["cadd"];?>" /></td>
          </tr>
          <tr>
            <td width="">Telephone Number</td>
            <td width=""><input type="text" name="editTel" id="editTel" value="<?php echo $row["ctelno"];?>" /></td>
          </tr>
          <tr>
            <td>Image</td>
            <td><input type="file" name="EditImage" id="EditImage" value="<?php echo $row["cpic"];?>" /></td>
          </tr>




          <tr>
            <td colspan="2"><blockquote>

                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Update"   />
                <input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel"   />

            </blockquote></td>
            </tr>
        </table>
        <?php
    	}
    	mysqli_close($con);
    	?>
        </form>
        </td>
      </tr>
    </table>
      </body>
    </html>
