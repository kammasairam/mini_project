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
  float: left;
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

</style>
</head>
<body>
<header><br><br>
<center> <img src="https://www.ghmc.gov.in/images/ghmc_header.png" alt="ghmc logo"></center></header>
<center><h2>Geo Tracking of Waste and Triggering Alerts <br>& <br> Mapping Areas with High Waste Index</h2></center>


<div class="navbar"> 
<a href="adminhome.php"><b>Home</b></a>
<a class="active" href="perupdate.php"><b>Update percentage</b></a>
<a  href="insertval.php"><b>Insert values</b></a>
<a href="feedbackpublic.php"><b>Public Feedback</b></a>
  <a href="admin.php">Logout</a> 
</div>
      
<font size='6'>Welcome, <?=$_SESSION['sess_user'];?>!</font><br><br>



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

$sql= "select * from areas";


if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='2' width='100%' text-align='center'>";
            echo "<tr>";
                echo "<th>Zone</th>";
                echo "<th>circle</th>";
                echo "<th>Ward</th>";
                echo "<th>percentage</th>";
                echo"<th>Action</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr><form action=update.php method=post>";
                echo "<td  align='center'>" . $row['zone'] . "</td>";
                echo "<td  align='center'>" . $row['circle'] . "</td>";
                echo "<td  align='center'>" . $row['ward'] . "</td>";
                echo "<td align='center'><input type=text name=per value='".$row['per']."'></td>";
                echo "<input type=hidden name=id value='".$row['id']."'>";
                echo "<td><input type=submit value='Update'>";
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
 
// Close connection
mysqli_close($db);
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
