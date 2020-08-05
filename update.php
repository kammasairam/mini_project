<?php
$con = mysqli_connect('localhost','id12623400_ghmc','Abcd@123');
mysqli_select_db($con,'id12623400_ghmc');

$sql = "UPDATE areas SET per='$_POST[per]' where id= '$_POST[id]'";

if(mysqli_query($con,$sql))

header("refresh:1;url=perupdate.php");
else
echo "Not Updated";
?>