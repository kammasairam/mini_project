<?php 
// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "id12623400_ghmc"; 
$dbPassword = "Abcd@123"; 
$dbName     = "id12623400_ghmc"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}

$zone=$_POST['zone'];
$circle=$_POST['circle'];
$ward=$_POST['ward'];
$per=$_POST['per'];
$id=$_POST['id'];


$sql = "INSERT INTO `areas`(`zone`, `circle`, `ward`, `per`, `id`) VALUES ('$zone','$circle','$ward','$per','$id')";

if(mysqli_query($db,$sql))
{
    echo "Inserted";
}
else{
    echo "Not Insertd";
}

header("refresh:1;url=insertval.php");

?>