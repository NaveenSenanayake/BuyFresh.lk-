<?php session_start();
if(!isset($_SESSION["txtuname"]))
{
	header("location:login.php");
}
?>

<head>
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="login.css" />
</head>

<body>
	<p>
	  <?php
	$con = mysqli_connect("localhost","root","","buyfresh");
					if(!$con)
					{
						die ("we are facing a technical issue");
					}
				  	
	$sql ="SELECT * FROM `user` WHERE `Email` = '".$_SESSION["txtuname"]."'"; 
	
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		$row =mysqli_fetch_assoc($result);
	
		
	?>
</p>
<p>&nbsp;</p>
<table width="258" height="212" border="0" align="center">
  <tbody>
    <tr>
      <td width="211" align="center"><img src="Images/pngtree-cartoon-color-simple-male-avatar-png-image_1934459.jpg" width="216" height="211" alt=""/></td>
    </tr>
  </tbody>
</table>
<table height="233" align="center">
	<tr>
		<td colspan="2" bgcolor="#FFFFFF"><h1 align="center" style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; color: #3B5C28;">My Profile</h1></td>
  </tr>
	
	<tr>
	<td width="146">Full Name</td>
	<td width="227"><input type="text" name="txtFullName" id="txtFullName" value="<?php echo $row["Fullname"];?>" readonly></td>
	</tr>
	<tr>
	<td width="146">Email</td>
	<td width="227"><input type="text" name="txtEmail" id="txtEmail" value="<?php echo $row["Email"];?>" readonly></td>
	</tr>
	<tr>
	<td width="146">Contact Number</td>
	<td width="227"><input type="text" name="txtContact" id="txtContact" value="<?php echo $row["Cnumber"];?>" readonly></td>
	</tr>
	
</table>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<table width="200" border="0" align="center">
  <tbody>
    <tr>
      <td width="227" align="center"><a href="Home.php"><button type="submit" name="btnsubmit" id="subbtn">Back</button></a></td>
    </tr>
  </tbody>
</table>

	<?php
		}
	mysqli_close($con);
		 ?>
</body>
</html>