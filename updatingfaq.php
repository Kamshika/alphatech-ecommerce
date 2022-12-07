<?php
  session_start();
  $fid = $_GET["id"];
  $question=$_POST["fq"];
  $answer=$_POST["fa"];



		   $con = mysqli_connect("localhost","root","","vivo");
			if(!$con)
			{
				die("Cannot upload the file, Please choose another file");
			}

			   $sql="UPDATE `faq` SET  `fq` = '".$question."', `fa` = '".$answer."' WHERE `faq`.`fid` = ".$fid.";";

			   	if(  mysqli_query($con,$sql))
				{
						echo "File uploaded Successfully";
				}
				else
				{
					echo "Opps something is wrong, Please select the file again";
				}

		   header('Location:manage-faq.php');

		   ?>
