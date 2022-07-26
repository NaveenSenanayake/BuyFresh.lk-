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
<title>Cart</title>

<link rel="stylesheet" type="text/css" href="Cart.css" />
	<link rel="stylesheet" type="text/css" href="login.css" />
</head>

<td><h1 align="center" style="color: #2C3A23; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">Cart</h1></td>
<br>
<br>
	
<table align="center" border="0">
  <tr>
        <th>Product Image</th>
        <th>Product Id</th>
        <th>Product Name</th>
        <th>Price</th>
		<th>Delete</th>
        
    </tr>
<?php
$con=mysqli_connect("localhost","root","","buyfresh");

if(!$con)
{
    die("cannot connect to the DB server");
}
$sql="SELECT * FROM `cart` WHERE `email`='".$_SESSION['txtuname']."'";


$results=mysqli_query($con,$sql);
if(mysqli_num_rows($results)>0)
{
	
    while($row=mysqli_fetch_assoc($results))
    {
        echo "
    <tr>
        <td>                        
            <img src= '".$row["path"]."' alt='Denim Jeans' style='width:100px; height: 100px'>
        </td>
        <td>                            
            <p>".$row["id"]."</p>
        </td>
        <td>                            
            <p>".$row["Name"]."</p>
        </td>
        <td>                            
            <p class='price'>Rs.".$row["Price"].".00</p>
        </td>
        <td>                                
            <p><a href='DelCart.php?id=".$row["id"]."'><button type='submit' name='btnDelete' id='btnDelete' onclick='DeleteStock()' >Delete</button></a></p>
        </td>
        
    </tr>
     ";
    }
}

?>



</table>

<br>
<br>
	<br>

<table width="200" border="0" align="center">
  <tbody>
    <tr>
      <td width="227" align="center"><a href="Store face Coustmer.php"><button type="submit" name="btnsubmit" id="subbtn">Back</button></a></td>
	    <td width="227" align="center"><a href="Store face Coustmer.php"><button type="submit" name="btnsubmit" id="subbtn">Continue Shoping</button></a></td>
    </tr>
  </tbody>
</table>
</a>
<body>
</body>
</html>