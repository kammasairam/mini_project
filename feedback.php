
<html>
<title>GHMC GARBAGE TRACKING</title>

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
height: 600px;
  width: 50%;
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
div.d {
  line-height: 200%;
}

.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
  font-size: 18px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
   height: 115%;
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
  border-radius: 100px;
  cursor: pointer;
  float: center;
  width: 50%;
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
  <a   href="index.php">Home</a> 
  <a href="listareas.php">List of areas</a> 
  <a href="details.php">Details of bins</a> 
  <a href="elogin.php">Employee Login</a> 
  <a class="active" href="about.php">About Us</a> 
</div>


<center>
  <div class="rightcolumn"><div class="d">
    <div class="card"  style="background-color:#2e2e1f"><font color="white">
      <h1>Feedback Form</h1><font size="4">
      <div class="fakeimg" style="height:300px; background-color:	 #2e2e1f">
      

<form action="feedbackinsert.php" method="post">

Your name: <br>
<input type="text" name="name"><br>
<br>

Your email: <br>
<input type="text" name="email"><br>
<br>

Phone Number: <br>
<input type="text" name="phone"><br>
<br>

Your comments: <br>
<textarea name="comment" rows="8" cols="50"></textarea><br><br>

<input type="submit" value="send" name="send"></font></div>
    </div>
    </div>
    </div></center><br><br><br>


<br><Br>
  <div class="footer">
    <b><center><p>&copy; 2020 GHMC</p></center></b>
  <center><p><b>Designed and Developed by:<br> K.Satya Shiva Sai Ram, N. Vishal Kumar</b></p></center>
  </div>
  </div>
</div>



</body>
</html> 




