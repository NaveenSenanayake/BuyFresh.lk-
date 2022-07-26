<?php session_start();
if(!isset($_SESSION["txtuname"]))
{
	header("location:login.php");
}
?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Update Product</title>
<link rel="stylesheet" type="text/css" href="login.css" />
</head>

<body>
	<?php //Display information
	$con = mysqli_connect("localhost","root","","buyfresh");
					
				if(!$con)
				{
					die("DB Seaver Error");
				}
	
						$sql= "SELECT * FROM `product` WHERE `id`= ".$_GET["id"].";";
				    
							$result = mysqli_query($con,$sql);
							
							if(mysqli_num_rows($result)>0)
							{
								
								$row = mysqli_fetch_assoc($result);
								
							
								
	?> 
	
	
	<form action="" method="post" enctype="multipart/form-data">
    <br class="container">
    <h1>Edit Product</h1>

    <hr>
    <p>
    <label for="pName"><b>Product Name</b></label>
    <input type="text" placeholder="Enter Product Name" name="txtProductName" id="txtProductName" value="<?php echo $row["Name"];?>" required>

    <label for="Image"><b>File</b></br></br>
    </label>
    <input type="file" name="imagefol" id="imagefol" value="<?php echo $row["Path"];?>" >


    <label for="price" ></br>
      </br> 
      <b>Price</b></label>
    <input type="text" placeholder="Enter Price" name="txtPrice" id="txtPrice" value="<?php echo $row["Price"];?>" required>


    <label for="chkPublish"><b>Publish</b></label>
    <input type="checkbox" name="chkPublish" id="chkPublish" <?php if ($row["Post"]==1){echo "checked";}?>  />Publish this</p>
    <p><br />
	 
		<?php
								
			}
	 			mysqli_close($con); 
		?>
		
    </p>
    <div class="clearfix">
	<a href ="viweStore.php">
		<button type="submit" class="button" name="btnSubmit" id="btnSubmit">Update </button>
        <button type="button" class="button" style="background-color: firebrick">Cancel</button>
		</a>

    </div>
    
</form>


<?php //update
 	 if(isset($_POST["btnSubmit"])){
		 
				$itemid = $_GET["id"];
				$name =$_POST["txtProductName"];
				$image ="uploads/".basename($_FILES["imagefol"]["name"]);
				move_uploaded_file($_FILES["imagefol"]["tmp_name"],$image);
				$price =$_POST["txtPrice"];
				  
				
				    
				  if(isset($_POST["chkPublish"]))
					  {$status=1;}
				  else
					  {$status=0;}
				 
				  $con = mysqli_connect("localhost","root","","buyfresh");
					if(!$con)
					{
						die ("we are facing a technical issue");
					}
				  	

					$sql= "UPDATE `product` SET `Name`='".$name."',`Price`='".$price."',`Path`='".$image."',`Post`='".$status."' WHERE `id` = '".$_GET["id"]."'";
				    
				  if(mysqli_query($con,$sql))
					{
						echo "file Updated Sucessfully";
					  
					}
				  	else
				  	{
					  	echo "please select the file again !!!!";
					}
		 				header('Location:viweStore.php.');
	 			}
			?>		
					

</html>