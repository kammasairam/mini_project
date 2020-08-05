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
height: 300px;
  width: 100%;
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
  background-color:  #66ccff;
  width: 100%;
  padding: 20px;
  font-size: 18px;
}


.column {
  float: left;
  width: 100%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.collapsible {
  background-color: #2e2e1f;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 40%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color:  #66ccff;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
   width: 100%;
}



</style>
</head>
<body>

<header><br><br>
<center> <img src="https://www.ghmc.gov.in/images/ghmc_header.png" alt="ghmc logo"></center></header>
<center><h2>Geo Tracking of Waste and Triggering Alerts <br>& <br> Mapping Areas with High Waste Index</h2></center>


<div class="navbar">
  <a href="index.php">Home</a> 
  <a class="active" href="listareas.php">List of areas</a> 
  <a href="details.php">Details of bins</a> 
  <a href="elogin.php">Employee Login</a> 
  <a  href="about.php">About Us</a> 
</div>



<br><br><br>




<div class="card"  style="background-color:#009933">   
  <h2><font color="white">Areas list with phone numbers</font><i class='fas fa-bullhorn' style='font-size:24px;color:white'></i></h2>
      <div class="fakeimg" style="height:5\700px; background-color:	#ffff80">
      <button type="button" class="collapsible"><b>L. B. Nagar (East Zone)</b></button>
      <div class="content">
      <div class="fakeimg" style="height:5\700px; background-color:	 white">
      <ul style="list-style-type:disc;">
          <li><b><font color="darkred">Hayathnagar  -</font></b> 9876543212</li><br>
          <li><b><font color="darkred">Kapra -</font></b> 8989876543</li><br>
          <li><b><font color="darkred">Uppal -</font></b> 9098765436</li><br>
          <li><b><font color="darkred">LB Nagar -</font></b> 7896543980</li><br>
          <li><b><font color="darkred">Saroornagar -</font></b> 9876567898</li><br>
      </ul>  
      </div>
      </div><br><br>
      <button type="button" class="collapsible"> <b>Charminar (South Zone)</b></button>
      <div class="content">
      <div class="fakeimg" style="height:5\700px; background-color:	 white">
      <ul style="list-style-type:disc;">
          <li><b><font color="darkred">Malakpet -</font></b></li><br>
          <li><b><font color="darkred">Santhoshnagar -</font></b></li><br>
          <li><b><font color="darkred">Chandrayangutta -</font></b></li><br>
          <li><b><font color="darkred">Charminar -</font></b></li><br>
          <li><b><font color="darkred">Falakunuma -</font></b> </li><br>
          <li><b><font color="darkred">Rajendra Nagar  -</font></b></li><br>
      </ul>  
      </div></div><br><br>
      

      <button type="button" class="collapsible"> <b>Khairatabad (Central Zone)</b></button>
      <div class="content">
      <div class="fakeimg" style="height:5\700px; background-color:	 white">
      <ul style="list-style-type:disc;">
          <li><b><font color="darkred">Mehdipatnam -</font></b></li><br>
          <li><b><font color="darkred">Karwan  -</font></b></li><br>
          <li><b><font color="darkred">Goshamahal -</font></b></li><br>
          <li><b><font color="darkred">Khairatabad -</font></b></li><br>
          <li><b><font color="darkred">Jubilee Hills  -</font></b> </li><br>
      </ul>  
      </div></div><br><br>

      <button type="button" class="collapsible"> <b>secunderabad (northeast zone)</b></button>
      <div class="content">
      <div class="fakeimg" style="height:5\700px; background-color:	 white">
      <ul style="list-style-type:disc;">
          <li><b><font color="darkred">Amberpet  -</font></b></li><br>
          <li><b><font color="darkred">Musheerabad  -</font></b></li><br>
          <li><b><font color="darkred">Malkajgiri  -</font></b></li><br>
          <li><b><font color="darkred">Secunderabad Division -</font></b></li><br>
          <li><b><font color="darkred">Begumpet  -</font></b> </li><br>
      </ul>  
      </div></div><br><br>

      <button type="button" class="collapsible"> <b>Serilingampally (West Zone)</b></button>
      <div class="content">
      <div class="fakeimg" style="height:5\700px; background-color:	 white">
      <ul style="list-style-type:disc;">
          <li><b><font color="darkred">Yousufguda -</font></b></li><br>
          <li><b><font color="darkred">Serilingampally  -</font></b></li><br>
          <li><b><font color="darkred"> Chandanagar -</font></b></li><br>
          <li><b><font color="darkred">Ramachandra Puram / Patancheru -</font></b></li><br>
      </ul>  
      </div></div><br><br>

      <button type="button" class="collapsible"> <b>Kukatpally (North Zone)</b></button>
      <div class="content">
      <div class="fakeimg" style="height:5\700px; background-color:	 white">
      <ul style="list-style-type:disc;">
          <li><b><font color="darkred">Moosapet  -</font></b></li><br>
          <li><b><font color="darkred">Kukatpally -</font></b></li><br>
          <li><b><font color="darkred">Quthbullapur -</font></b></li><br>
          <li><b><font color="darkred">Gajula Ramaram -</font></b></li><br>
          <li><b><font color="darkred">Alwal -</font></b> </li><br>
      </ul>  
      </div>
      </div>
      </div></div>
  <br><br><br><br><br></center>



  <div class="footer">
    <b><center><p>&copy; 2020 GHMC</p></center></b>
  <center><p><b>Designed and Developed by:<br> K.Satya Shiva Sai Ram, N. Vishal Kumar</b></p></center>
  </div>
  

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</body>
</html> 
