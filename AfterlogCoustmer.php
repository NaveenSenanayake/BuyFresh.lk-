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
<title>Buyfresh Online</title>
<link rel="stylesheet" type="text/css" href="Home.css" />
</head>

<body>
<table width="649" height="471" border="0" align="center">
  <tbody>
    <tr>
      <td width="643" height="71"><table width="638" height="60" border="0">
        <tbody>
          <tr>
             <td width="338" align="center"><img src="Images/Untitled-1.png" width="261" height="66" alt=""/></td>
            <td width="290">
<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="Store face Coustmer.php">Store</a></li>
  <li><a href="Profile.php">Profile</a></li>
  <li><a href="cart.php">Cart</a></li>
</ul>
			  </td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td height="391"><img src="Images/asian-market-flat-cartoon-concept-vector-illustration-arabic-bazaar-on-old-eastern-city-background-2G668BH.jpg" width="635" height="389" alt=""/></td>
    </tr>
    
  </tbody>
</table>
<table width="645" height="250" border="0" align="center" bgcolor="#2F2F2F">
  <tbody>
    <tr>
      <td height="191" align="center"><footer>
    <section id="contact" class="foot" style="color: #4CAF50;">
      <h1 style="text-align: center; color: #4CAF50;">Contact Us</h1>
        <p style="text-align: center; color: #4CAF50;" >Buy Fresh Supermarcket</p>
        <table width="390" class="info" a>
            <tr>
                <td width="178" height="23" align="center">Contact No:</td>
                <td width="200" align="center">+94778455138</td>
            </tr>
            <tr>
                <td align="center">Address :</td>
                <td align="center">Kurunegala</td>
            </tr>
            <tr>
                <td align="center">email Address:</td>
                <td align="center">Pipins365@gmail,com</td>
            </tr>
            <tr>
                <td align="center">Powerd By:</td>
                <td align="center">SLIIT</td>
            </tr>
        </table>
    </section>
</footer></td>
    </tr>
  </tbody>
</table>


</body>
</html>
