<?php
  session_start();
  $itemid = $_GET["id"];


		   $con = mysqli_connect("localhost","root","","vivo");
			if(!$con)
			{
				die("Cannot upload the file, Please choose another file");
			}

			   $sql="DELETE FROM `faq` WHERE `faq`.`fid` = '".$_GET["id"]."'";

			  mysqli_query($con,$sql);

			 mysqli_close($con);


		   header('Location:manage-faq.php');

		   ?>
