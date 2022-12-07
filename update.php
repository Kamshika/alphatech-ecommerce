<?php
  session_start();
  $pid = $_GET["id"];
  $title=$_POST["ptitle"];
  $image = "resources/images/".basename($_FILES["fileImage"]["name"]);
  move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);
  $description=$_POST["descs"];
  $price=$_POST["pprice"];
  $stock=$_POST["pstock"];
  $slug=$_POST["pslug"];

		 if(isset($_POST["chkShirt"]))
		 {			 $category = "Shirt";		 }
		 if(isset($_POST["chkPant"]))
		 {			 $category = "Pant";		 }
		  if(isset($_POST["chkBlouse"]))
		 {			 $category = "Blouse";	}
     if(isset($_POST["chkSkirt"]))
     {			 $category = "Skirt";	}
     if(isset($_POST["chkAccessories"]))
    {			 $category = "Accessories";	}


		   $con = mysqli_connect("localhost","root","","vivo");
			if(!$con)
			{
				die("Cannot upload the file, Please choose another file");
			}

			   $sql="UPDATE `product` SET  `ptitle` = '".$title."', `pdesc` = '".$description."', `pcat` = '".$category."', `pimg` = '".$image."', `pprice` = '".$price."', `pstock` = '".$stock."', `pslug` = '".$slug."' WHERE `product`.`pid` = ".$pid.";";

			   	if(  mysqli_query($con,$sql))
				{
						echo "File uploaded Successfully";
				}
				else
				{
					echo "Opps something is wrong, Please select the file again";
				}

		   header('Location:manage-products.php');

		   ?>
