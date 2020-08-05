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



input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 50px;
  resize: vertical;
}



input[type=submit] {
  background-color: #4CAF50;
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

.container {
  border-radius: 50px;
  background-color: orange;
  padding: 20px;
}


table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  text-align: left;
  padding: 8px;
  text-align: center;
}

tr:nth-child(even) {background-color: #f2f2f2;}

</style>
</head>
<body>
<header><br><br>
<center> <img src="https://www.ghmc.gov.in/images/ghmc_header.png" alt="ghmc logo"></center></header>
<center><h2>Geo Tracking of Waste and Triggering Alerts <br>& <br> Mapping Areas with High Waste Index</h2></center>


<div class="navbar"> 
  <a href="adminhome.php"><b>Home</b></a>
<a href="perupdate.php"><b>Update percentage</b></a>
<a class="active" href="insertval.php"><b>Insert values</b></a>
<a href="feedbackpublic.php"><b>Public Feedback</b></a>
<a href="admin.php">Logout</a> 
</div>
      
<font size='6'>Welcome, <?=$_SESSION['sess_user'];?>!</font><br><br>




<center>
<form action="insert.php" method="post">
<table border='2' text-align='center'>

 <tr><th>Id </th><td><input type=text name=id ></td></tr><br>
 <tr><th>Zone </th><td><input type=text name=zone></td></tr><br>
 <tr><th>Circle </th><td><input type=text name=circle ></td></tr><br>
 <tr><th>Ward </th><td><input type=text name=ward></td></tr><br>
 <tr><th>Percentage </th><td><input type=text name=per></td></tr><br>
 <tr><th></th><td><input type=submit value='Insert'></td></tr>
 </table>
 </form></center>



 <div class="footer">
    <b><center><p>&copy; 2020 GHMC</p></center></b>
  <center><p><b>Designed and Developed by:<br> K.Satya Shiva Sai Ram, N. Vishal Kumar</b></p></center>
 </div>
  

</body>  
</html>  
<?php  
}  
?>  
