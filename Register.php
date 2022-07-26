<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register Buyfresh</title>
<link rel="stylesheet" type="text/css" href="login.css" />
</head>
<body>
<form method="post" action="Register.php">
<table width="677" height="537" border="0" align="center">
  <tbody>
    <tr>
      <td width="671" height="78"><table width="598" height="74" border="0" align="center">
  <tbody>
    <tr>
      <td width="292" align="center" ><img src="Images/Untitled-1.png" width="261" height="66" alt=""/></td>
      <td width="296">
<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="Store face.php">Store</a></li>
  <li><a href="Profile.php">Profile</a></li>
  <li><a href="cart.php">Cart</a></li>
</ul></td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
      <td height="126"><p align="center"><img src="Images/istockphoto-1305268276-612x612.jpg" width="202" height="200" alt=""/></p>
        <table width="439" height="392" border="0" align="center">
          <tbody>
          <tr>
            <td align="center" height="38" colspan="2" bgcolor="#FFFFFF"><h1 style="font-size: 25px">Create Profile</h1></td>
          </tr>
          <tr>
            <td width="228" height="66" align="center">Full Name</td>
            <td width="207"><input type="text" name="txtFullName" id="txtFullName" /></td>
          </tr>
          <tr>
            <td height="66" align="center">Email Address</td>
            <td><input type="text" name="txtEmail" id="txtEmail" /></td>
          </tr>
          <tr>
            <td height="44" align="center">Contact number</td>
           <td><input type="text" name="txtnum" id="txtnum" /></td>
          </tr>
          <tr>
            <td height="66" align="center">Password</td>
            <td><input type="password" name="txtPassword" id="txtPassword" class="datalist" /></td>
          </tr>
          <tr>
            <td height="42" align="center">Confirm Password</td>
            <td><input type="password" name="txtCPassword" id="txtCPassword" class="datalist" /></td>
          </tr>
        </tbody>
</table></td>
    </tr>
  </tbody>
</table>
	
	
	<button type="submit" class="button" name="btnSubmit" id="btnSubmit">Register </button>
	<button type="submit" class="button" name="btnSubmit" id="btnSubmit">Cancle </button>
	
</form>	

</body>
<?php
	if(isset($_POST["btnSubmit"]))  //check whether button is clicked or not
	{
		
		$fullname = $_POST["txtFullName"];  //get values
		$email = $_POST["txtEmail"];
		$contact = $_POST["txtnum"];
		$password = $_POST["txtPassword"];
		$utype="customer";
		$con = mysqli_connect("localhost","root","","buyfresh");
					
				if(!$con) // check db connection
				{
					die("Cannot connect our DB Seaver");
				}
		  $sql = "INSERT INTO `user` (`Fullname`, `Email`, `Cnumber`,`Password`,`utype`) VALUES ('$fullname', '$email', '$contact','$password','$utype');";

	
		if( mysqli_query($con,$sql))
		{
			
			header('Location:login.php');

		}
	
	}
	
?>	
</html>