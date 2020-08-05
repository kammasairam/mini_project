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

$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$phoneno=$_POST['phone'];


$sql = "INSERT INTO `feedback`(`name`, `email`, `phone`,`comment`) VALUES ('$name','$email','$phoneno','$comment')";

if(mysqli_query($db,$sql))
{
    echo "Inserted";
}
else{
    echo "Not Insertd";
}

header("refresh:1;url=feedback.php");


if(isset($_POST['send']))
{
    $mobileno= $phoneno;
    echo $mobileno;
    $msg="thank you.for your feedback 
    if any problem we will solve it soon.";

// Authorisation details.
$username = "mlritmcafeteriaonline@gmail.com";
$hash = "9cb7cd5e7391623845c4d986050f42c5901c9f3e4d0ae6642568d97076a7744f";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "$mobileno"; // A single number or a comma-seperated list of numbers
	$message = "$msg";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
    echo "<b><center>message sent</center></b>";
    
}
?> 