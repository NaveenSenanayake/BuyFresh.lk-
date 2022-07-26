<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DelCart</title>
</head>
<?php
//Delete
$con=mysqli_connect("localhost","root","","buyfresh");

if(!$con)
{
    die("cannot connect to the DB server");
}
$sql ="DELETE FROM `cart` WHERE id='".$_GET["id"]."'";
if (mysqli_query($con,$sql))
{
    header('Location:cart.php');
}else{
    header('Location:cart.php');

}

?>
<body>
</body>
</html>