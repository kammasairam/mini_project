<html>
<title>GHMC GARBAGE TRACKING</title>

<head> 
<meta name="viewport" content="width=device-width, initial-scale=0">
<style>
* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 25%;
  background-color: #2e2e1f;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 18px;
  color: white;
  text-decoration: none;
  font-size: 18px;
  width: 100%; /*  links of equal widths */
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
.container{
	width: 500px;
	height: 450px;
	text-align: center;
	margin: 0 auto;
	background-color: #80ffaa;
	margin-top: 160px;
}
 
.container img{
	width: 150px;
	height: 150px;
	margin-top: -60px;
}
 
input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}
 
.form-input::before{
	content: ;
	font-family: "FontAwesome";
	padding-left: 07px;
	padding-top: 40px;
	position: absolute;
	font-size: 35px;
	color: #2980b9; 
}
 
.form-input:nth-child(2)::before{
	content: "";
}
 
.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #ff3399;
	color: #fff;
    font-weight: bold;
    font-size: 15px;
}


</style>
</head>
<body>

<header><br><br>
<center> <img src="https://www.ghmc.gov.in/images/ghmc_header.png" alt="ghmc logo"></center></header>
<center><h2>Geo Tracking of Waste and Triggering Alerts <br>& <br> Mapping Areas with High Waste Index</h2></center>



</div>


<center><h1><font color="red" size="6">Admin Portal</font></h1></center>


<div class="navbar">
  <a  class="active" href="index.php">Back to Main Page</a> 
</div>

<div class="container">
	<img src="https://i.ya-webdesign.com/images/log-png-images.png"/>
    <form action="" method="POST">
		<div class="form-input">
		<b>Username: </b><input type="text" name="user" placeholder="Enter username"/>	
		</div>
		<div class="form-input">
		<b>Password:</b> <input type="password" name="pass" placeholder="Password"/>
		</div><br><br>
		<input type="submit" value="Login" name="submit" class="btn-login"/><br><br><br>
        <center><h5><b>Hint- username:admin password:Abcd@123</b></h5></center>
        
		</form>
	</div><br><br><br><br><br>


<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con=mysqli_connect('localhost','id12623400_ghmc','Abcd@123','id12623400_ghmc') or die(mysql_error());  
   mysqli_select_db($con,'id12623400_ghmc') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: adminhome.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  

  <div class="footer">
    <b><center><p>&copy; 2020 GHMC</p></center></b>
  <center><p><b>Designed and Developed by:<br> K.Satya Shiva Sai Ram, N. Vishal Kumar</b></p></center>
  </div>




</body>
</html> 
