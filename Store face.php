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
<title>Store Buyfresh</title>
<link rel="stylesheet" type="text/css" href="Store face.css"/>
</head>

<body>
<form id="form1" name="form1" >
  <table width="200" border="0" align="center">
    <tbody>
      <tr>
	    <td><div class="pic"> <a href= "viweStore.php"><img src="Images/img1.jpg.jpg" width="235" height="225"></a>
         <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif">Vegetable</p>
	    </div></td>
        <td><div class="pic"> <a href= "viweStoreL.php"><img src="Images/img2.jpg" width="235" height="225"></a>
         <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif">liquor</p>
	    </div></td>
      </tr>
      <tr>
        <td><div class="pic"> <a href= "viweStoreM.php"><img src="Images/img3.jpg" width="235" height="225"></a>
         <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif">Meet</p>
	    </div></td>
        <td><div class="pic"> <a href= "viweStoreB.php"><img src="Images/img4.jpg" width="235" height="225"></a>
         <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif" >Bakery</p>
	    </div></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>
