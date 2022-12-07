<?php
  session_start();
  $cid = $_GET["id"];
  $name=$_POST["editName"];
  $image = "resources/images/".basename($_FILES["EditImage"]["name"]);
  move_uploaded_file($_FILES["EditImage"]["tmp_name"],$image);
  $email=$_POST["editEmail"];
  $pass=$_POST["editPass"];
  $telno=$_POST["editTel"];
  $add=$_POST["editAdd"];


		   $con = mysqli_connect("localhost","root","","vivo");
			if(!$con)
			{
				die("Cannot upload the file, Please choose another file");
			}

			   $sql="UPDATE `customer` SET  `cname` = '".$name."', `cemail` = '".$email."', `cpass` = '".$pass."', `cpic` = '".$image."', `ctelno` = '".$telno."', `cadd` = '".$add."' WHERE `customer`.`cid` = ".$cid.";";

			   	if(  mysqli_query($con,$sql))
				{
						echo "File uploaded Successfully";
				}
				else
				{
					echo "Opps something is wrong, Please select the file again";
				}

		   header('Location:profile.php');

		   ?>
