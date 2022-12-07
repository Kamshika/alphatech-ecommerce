<?php
  session_start();
  $itemid = $_GET["id"];


		   $con = mysqli_connect("localhost","root","","vivo");
			if(!$con)
			{
				die("Cannot upload the file, Please choose another file");
			}

			   $sql="DELETE FROM `customer` WHERE `customer`.`cid` = '".$_GET["id"]."'";

			  mysqli_query($con,$sql);

			 mysqli_close($con);


		   header('Location:manage-users.php');

		   ?>
