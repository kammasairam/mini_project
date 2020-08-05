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

a:link, a:visited {
  background-color: #ff3399;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  width: 30%;
  }
  a:hover, a:active {
  background-color:#2e2e1f ;
}

</style>
</head>
<body>
<header><br><br>
<center> <img src="https://www.ghmc.gov.in/images/ghmc_header.png" alt="ghmc logo"></center></header>
<center><h2>Geo Tracking of Waste and Triggering Alerts <br>& <br> Mapping Areas with High Waste Index</h2></center>


<div class="navbar"> 
  <a href="admin.php">Logout</a> 
</div>
      
<font size='6'>Welcome, <?=$_SESSION['sess_user'];?>!</font><br><br>

<center>
<a href="adminhome.php"><b>Home</b></a><br><br>
<a href="perupdate.php"><b>Update percentage</b></a><br><br>
<a href="insertval.php"><b>Insert values</b></a><br><br>
<a href="feedbackpublic.php"><b>Public Feedback</b></a>
</center>









 <div class="footer">
    <b><center><p>&copy; 2020 GHMC</p></center></b>
  <center><p><b>Designed and Developed by:<br> K.Satya Shiva Sai Ram, N. Vishal Kumar</b></p></center>
 </div>
  

</body>  
</html>  
<?php  
}  
?>  
