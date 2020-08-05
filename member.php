<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
} else {  
?>  
<!doctype html>  
<html>
<title>GHMC login</title>

<head> 
<meta name="viewport" content="width=device-width, initial-scale=0">
<style>
* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #2e2e1f;
  overflow: auto;
}

.navbar a {
  float: right;
  padding: 18px;
  color: white;
  text-decoration: none;
  font-size: 18px;
  width: 20%; /*  links of equal widths */
  text-align: center;
}

.navbar a:hover {
  background-color: #000;
}

.navbar a.active {
  background-color: darkred;
}


header{
	background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRKdAXfCkLl67bSiQNWDmDaGPED3L9C2fyrCaLC1W9bSaqO8fV3');
}

.rightcolumn{
height: 300px;
  width: 80%;
}
.footer {
  position: none;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:#009933;
  color: white;
  text-align: center;
  padding: 10px;
  margin-top: 10px;
}


table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
  text-align: center;
}

tr:nth-child(even) {background-color: #f2f2f2;}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  text-align: center;
}
input[type=submit] {
  background-color: orange;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 50px;
  cursor: pointer;
  float: right;
  width: 100%;
  text size: 10px;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>
</head>
<body>
<header><br><br>
<center> <img src="https://www.ghmc.gov.in/images/ghmc_header.png" alt="ghmc logo"></center></header>
<center><h2>Geo Tracking of Waste and Triggering Alerts <br>& <br> Mapping Areas with High Waste Index</h2></center>


<div class="navbar"> 
  <a href="elogin.php">Logout</a> 
</div>
      
<font size='6'>Welcome, <?=$_SESSION['sess_user'];?>!</font><br><br>
<br><br>
<center><h2>Showing the Table which is having  garbage level above 80%</h2></center>

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
  
    $query1= "SELECT *  FROM areas where per > '80%'";
    $reskapra = mysqli_query($db,$query1);
    $kapra= mysqli_fetch_array($reskapra);



    if($result = mysqli_query($db, $query1)){
        if(mysqli_num_rows($result) > 0){
            echo "<table border='2' width='100%' text-align='center'>";
                echo "<tr>";
                    echo "<th>Zone</th>";
                    echo "<th>circle</th>";
                    echo "<th>Ward</th>";
                    echo "<th>percentage</th>";
                    echo"<th>Phone number</th>";
                    echo"<th>Message</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr><form action=update.php method=post>";
                    echo "<td  align='center'>" . $row['zone'] . "</td>";
                    echo "<td  align='center'>" . $row['circle'] . "</td>";
                    echo "<td  align='center'>" . $row['ward'] . "</td>";
                    echo "<td align='center'>".$row['per']."</td>";
                    echo "<td align='center'>".$row['Phoneno']."</td>";
                    echo "<td align='center'>".$row['per']." Bin is Full,Plz Clean the Garbage, thank you. Area:
                                     " .$row["ward"].",".$row["circle"].",".$row["zone"]." REG: GHMC Garbage Cleaning.</td>";

                    //echo "<td><input type=submit value='Update'>";
                echo "</form></tr>";
            }
            echo "</table>";
            // Free result set
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
    }
?>

<br><br><center>

<h3>SMS to Area Head<h3>
<div class="card" style="background-color:#009933">
<br>
<form action="member.php" method="post">

<b>Phone number</b>
<input type="text" name="phonenumber" placeholder="+91 000000000" ><br>

<b>Message</b>
<textarea rows="15" cols="50" name="message"></textarea><br><br>

<td><input type="submit" value="send" name="send"></input>

</from>
</div>
</center><br><br>



<?php
if(isset($_POST['send']))
{
    $mobileno=$_POST['phonenumber'];
    $msg=$_POST['message'];

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



 <div class="footer">
    <b><center><p>&copy; 2020 GHMC</p></center></b>
  <center><p><b>Designed and Developed by:<br> K.Satya Shiva Sai Ram, N. Vishal Kumar</b></p></center>
 </div>
  

</body>  
</html>  
<?php  
}  
?>  
