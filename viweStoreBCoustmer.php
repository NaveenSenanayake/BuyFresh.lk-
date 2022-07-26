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
<title>viewStorel</title>
<link rel="stylesheet" type="text/css" href="login.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<table width="650" height="256" border="0" align="center">
  <tr>
    <td width="349" align="center"><img src="Images/Untitled-1.png" width="261" height="66" alt=""/></td>
    <td width="291"><div>
<ul>
  <li><a href="Afterlog.php">Home</a></li>
  <li><a href="Store face Coustmer.php">Store</a></li>
  <li><a href="Profile.php">Profile</a></li>
  <li><a href="cart.php">Cart</a></li>
</ul>
</div></td>

  </tr>
	
  <tr>
	  
    <td height="198" colspan="2" align="center" >
		<p>&nbsp;</p>
		<table width="259" height="223" border="0">
      <tbody>
        <tr>
          <td align="center"><img src="Images/cartoon-bakery-elements-in-circle-shape-vector-22511705.jpg" width="216" height="211" alt=""/></td>
        </tr>
      </tbody>
    </table>
      <table width="262" height="42" border="0">
        <tbody>
          <tr>
            <td><h1 align="center" style="color: #2C3A23; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">
Bakery</h1></td>
          </tr>
        </tbody>
      </table>
	  <table width="518" height="56" align="center">
      <tr>
        <td width="521">
            <table width="512">
				<?php
				
				$con = mysqli_connect("localhost","root","","buyfresh");
					
				if(!$con)
				{
					die("DB Seaver Error");
				}
				 
				$sql= "SELECT * FROM `productb`" ;
				
				$result = (mysqli_query($con,$sql));
				
				if(mysqli_num_rows($result)>0)
				{
					while($row = mysqli_fetch_assoc($result))
					{	
						
				echo "
					
              <tr>
				<td width='195'><div class='imgcontainer'><img src='".$row["Path"]."' width='195' height='150'></div></td>
				<td width='159' align='center'> ".$row["Name"]."</td>
				<td width='159' align='center'> ".$row["Price"]."</td>
                <td style='font-size:24px'>
                <p><a href='viweStoreBCoustmer?id=".$row['id']."'><button type='submit' name='btnsubmit'  ><i class='fa fa-cart-arrow-down' aria-hidden='true'></i>Add to Cart</button></a></p></td>
             
              </tr> " ;
					}
				}
				?>
					<?php
			
                $sql="SELECT * FROM `productb` WHERE `id`='".$_GET['id']."'";
		

                $results=mysqli_query($con,$sql);
                    if(mysqli_num_rows($results)>0) {
                $row = mysqli_fetch_assoc($results);
                        $sql = "INSERT INTO `cart` (`id`, `Name`,`Price`,`email`,`path`) VALUES (NULL,'".$row["Name"]."', '".$row["Price"]."','".$_SESSION["txtuname"]."','".$row["Path"]."');";
                        if(mysqli_query($con, $sql))
                        {
                            
                            header('Location: cart.php');

                        }else{
                            echo "<script>alert('Password Might Be Wrong! Please Check Again!');</script>";
                        }

					}
				

    ?>
			
            </table>
          </div>
          <div class="container" style="background-color:#f1f1f1"></div></td>
      </tr>
    </table>
		
	</td>
  </tr>
</table>
</body>
</html>