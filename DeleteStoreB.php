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
<title>Delete Product</title>
<link rel="stylesheet" type="text/css" href="login.css" />
</head>

<body>
	<?php
	$con = mysqli_connect("localhost","root","","buyfresh");
					
				if(!$con)
				{
					die("DB Seaver Error");
				}
	
						$sql= "SELECT * FROM `productb` WHERE `id`= ".$_GET["id"].";";
				    
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
    <input type="text" placeholder="Enter Product Name" name="txtProductName" id="txtProductName" value="<?php echo $row["Name"];?>" >

    <label for="Image"><b>File</b></br></br>
    </label>
    <input type="file" name="imagefol" id="imagefol" value="<?php echo $row["Path"];?>" >


    <label for="price" ></br>
      </br> 
      <b>Price</b></label>
    <input type="text" placeholder="Enter Price" name="txtPrice" id="txtPrice" value="<?php echo $row["Price"];?>" >


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
		<button type="submit" class="button" name="btnSubmit" id="btnSubmit">Delete </button>
        <button type="button" class="button" style="background-color: firebrick">Cancel</button>
		</a>

    </div>
    
</form>
<?php 
 	 if(isset($_POST["btnSubmit"])){
		 			$con = mysqli_connect("localhost","root","","buyfresh");
		 
		 
					if(!$con)
					{
						die ("we are facing a technical issue");
					}
				  	

					$sql= "DELETE FROM `productb` WHERE `id` = '".$_GET["id"]."'";
				    
				  if(mysqli_query($con,$sql))
					{
						echo "file Deleted";
					  	header('Location:viweStoreB.php.');

					  
					}
				  	else
				  	{
					  	echo "please select the file again !!!!";
					}
	 			}
			?>		
					

</html>