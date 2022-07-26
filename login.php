<?php session_start() ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Buyfresh login</title>
<link rel="stylesheet" type="text/css" href="login.css" />
</head>

<body>
<form id="form1" name="form1" method="post">
 <table width="710" height="150" border="0" align="center">
  <tbody>
    <tr>
      <td width="704" height="60"><table width="652" height="52" border="0">
        <tbody>
          <tr>
             <td width="338" align="center" ><img src="Images/Untitled-1.png" width="261" height="66" alt=""/></td>
            <td width="296">
<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="Store face.php">Store</a></li>
  <li><a href="Profile.php">Profile</a></li>
  <li><a href="cart.php">Cart</a></li>
</ul></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="297" height="573" border="0" align="center">
        <tbody>
          <tr>
            <td width="275" height="236" align="center"><img src="Images/login-user-authorization-linear-concept-business-vector-22323639.jpg" width="285" height="244" alt=""/></td>
          </tr>
          <tr>
            <td height="254">
			<div class="container"> 
			<p>
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="txtuname" id="txtuname"  required>
        
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="txtpassword" id="txtpassword"  required>
      </p> 
				
			
			  <?php
				if(isset($_POST["btnsubmit"]))
				{
				$username = $_POST["txtuname"];
				$password = $_POST["txtpassword"]; //Read the values from textfields
				$valid = false;
					
				$con = mysqli_connect("localhost","root","","buyfresh");
					
				if(!$con) //check db connection
				{
					die("DB Seaver Error");
				}
						$sql = "SELECT * FROM `user` WHERE `Email` = '".$username."' and `Password` = '".$password."' and `utype`= 'customer'"; 
					
						$result = mysqli_query($con,$sql); // execute quary for customer
					
							
			   if (mysqli_num_rows($result) > 0)
				{
					$_SESSION["txtuname"] = $username;
					header('Location:AfterlogCoustmer.php');
				}
				else
				{
					$sql = "SELECT * FROM `user` WHERE `Email` = '".$username."' and `Password` = '".$password."' and `utype`= 'admin'"; 
					
					$result = mysqli_query($con,$sql); //execute quary for Admin
					if (mysqli_num_rows($result) > 0)
					{
						$_SESSION["txtuname"] = $username;
						header('Location:Afterlog.php');
					}
					else{
						echo "Please enter correct username and password";
					}
					
				}
				}
					
				
				    
				?>
				
            <button type="submit" name="btnsubmit" id="subbtn">Login</button>
      <p>
        <label>
          <input type="checkbox" checked="checked" name="cnkremember"> Remember me
        </label>
      </p>
			</div>
			</td>
          </tr>
          <tr>
            <td><p>
    <div class="container">
      <button type="button" onclick="" class="cancelbtn">Cancel</button>
    </p>
              </td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>

</form>
</body>
</html>