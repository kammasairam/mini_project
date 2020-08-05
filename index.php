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


@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: %;
    text-align: left;
  }
}

body {
  margin: 0;
  font-family: Arial;
}



/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: right;
  width: 73%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
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
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}


header{
	background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRKdAXfCkLl67bSiQNWDmDaGPED3L9C2fyrCaLC1W9bSaqO8fV3');
}


.mySlides {display:none;}

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



.column {
  float: left;
  width: 50%;
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
  width: 100%;
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
  background-color: #00004d;
}


</style>
</head>
<body>
<div class="navbar" style="background-color:black" >
  <a  href="admin.php">Admin login</a> 
</div>
<header><br><br>
<center> <img src="https://www.ghmc.gov.in/images/ghmc_header.png" alt="ghmc logo"></center></header>
<center><h2>Geo Tracking of Waste and Triggering Alerts <br>& <br> Mapping Areas with High Waste Index</h2></center>


<div class="navbar">
  <a  class="active" href="index.php">Home</a> 
  <a href="listareas.php">List of areas</a> 
  <a href="details.php">Details of bins</a> 
  <a href="elogin.php">Employee Login</a> 
  <a href="about.php">About Us</a> 
</div>

<div>
  <br><br>

<marquee bgcolor="#00004d"><h3><font color="white">Welcome To Greater Hyderabad Municipal Corporation </font> || <font color="orange">Tracking of Garbage Online is now easy with this Application</font> || <font color="#e6e600">Keep City Clean.. Use Garbage Bins.</font></h3></marquee>

  
<div class="row">
  <div class="column"><center><br><br><br>
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRNP32KuFZGta6kEjEax3xC5_MyBSKDnr1lTQWkwaUS0v1czfDT" alt="ghmc logo" style="width:100%"></center>
  </div>
  <div class="column"><center>
    <div class= "w3-content w3-section" style="max-width:1000px">
    <img class="mySlides" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSzxioX63qhzkmHWiLQHcsikKSLdswQjMbBwsh-Tr0vMPHstOSa" style="width:75%">
    <img class="mySlides" src="https://maahyderabad.in/wp-content/uploads/2018/02/GHMC-2-597x398.jpg" style="width:75%">
    <img class="mySlides" src="https://s3.ap-southeast-1.amazonaws.com/cdn.deccanchronicle.com/sites/default/files/29GARBAGE%20COPY.jpg" style="width:75%">
    <img class="mySlides" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRnMO33vCFeToo-MvQ0aAAi3jVKMH2g_PEGk08swWPtktOoHz5z" style="width:75%">
    <img class="mySlides" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSQDpvuGnPKDrLlDy94kyyRECNIls5qAh8xLnCmfIAAw74693vc" style="width:75%">
    </div><br></center>
  </div>
  </div>
  </div>

<?php
  $con=mysqli_connect('localhost','id12623400_ghmc','Abcd@123','id12623400_ghmc') or die(mysql_error());  
   mysqli_select_db($con,'id12623400_ghmc') or die("cannot select DB");  
  
    $query1= "SELECT AVG(per) as Average FROM areas where circle = 'Kapra'";
    $reskapra = mysqli_query($con,$query1);
    $kapra= mysqli_fetch_array($reskapra);

    $query2= "SELECT AVG(per) as Average FROM areas where circle = 'Hayathnagar'";
    $resHayathnagar  = mysqli_query($con,$query2);
    $Hayathnagar = mysqli_fetch_array($resHayathnagar);

    $query3= "SELECT AVG(per) as Average FROM areas where circle = 'LB Nagar'";
    $resLBNagar = mysqli_query($con,$query3);
    $LBNagar= mysqli_fetch_array($resLBNagar);

    $query4= "SELECT AVG(per) as Average FROM areas where circle = 'Saroornagar'";
    $resSaroornagar = mysqli_query($con,$query4);
    $Saroornagar= mysqli_fetch_array($resSaroornagar);

    $query5= "SELECT AVG(per) as Average FROM areas where circle = 'Uppal'";
    $resUppal = mysqli_query($con,$query5);
    $Uppal= mysqli_fetch_array($resUppal);

    /////////////////////////////////////////////////////////////////

    $query1= "SELECT AVG(per) as Average FROM areas where circle = 'Malakpet'";
    $resMalakpet = mysqli_query($con,$query1);
    $Malakpet= mysqli_fetch_array($resMalakpet);

    $query2= "SELECT AVG(per) as Average FROM areas where circle = 'Santhoshnagar'";
    $resSanthoshnagar  = mysqli_query($con,$query2);
    $Santhoshnagar = mysqli_fetch_array($resSanthoshnagar);

    $query3= "SELECT AVG(per) as Average FROM areas where circle = 'Chandrayangutta'";
    $resChandrayangutta = mysqli_query($con,$query3);
    $Chandrayangutta= mysqli_fetch_array($resChandrayangutta);

    $query4= "SELECT AVG(per) as Average FROM areas where circle = 'Charminar'";
    $resCharminar = mysqli_query($con,$query4);
    $Charminar= mysqli_fetch_array($resCharminar);

    $query5= "SELECT AVG(per) as Average FROM areas where circle = 'Falakunuma'";
    $resFalakunuma = mysqli_query($con,$query5);
    $Falakunuma= mysqli_fetch_array($resFalakunuma);

    $query6= "SELECT AVG(per) as Average FROM areas where circle = 'Rajendra Nagar'";
    $resRajendraNagar = mysqli_query($con,$query6);
    $RajendraNagar= mysqli_fetch_array($resRajendraNagar);
    

?>
<center>
<script type="text/javascript" language="javascript">
      var aax_size='728x90';
      var aax_pubname = 'ganni07-21';
      var aax_src='302';
    </script>
    <script type="text/javascript" language="javascript" src="http://c.amazon-adsystem.com/aax2/assoc.js"></script>
    
    </center>

<div class="row">
  <div class="leftcolumn">
  <div class="card"  style="background-color:#009933">
      <h2><font color="white">Over all Garbage levels (@Areas) </font><i class='fas fa-bullhorn' style='font-size:24px;color:white'></i></h2>
      <div class="fakeimg" style="height:5\700px; background-color:	#ff0066">
      <button type="button" class="collapsible"><b>L. B. Nagar (East Zone)</b></button>
      <div class="content">
      <div class="fakeimg" style="height:5\700px; background-color:	 white">
      <ul style="list-style-type:disc;">
          <li><b><font color="darkred">Hayathnagar  - </font></b><font color="black"> <?php echo $Hayathnagar ['Average']; ?>%  of Garbage has been Fulled</font></a></li><br>
          <li><b><font color="darkred">Kapra - </font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred">Uppal - </font></b><font color="black"><?php echo $Uppal['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred">LB Nagar - </font></b><font color="black"><?php echo $LBNagar['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred">Saroornagar - </font></b><font color="black"><?php echo $Saroornagar['Average']; ?>%  of Garbage has been Fulled</font> </li><br>
      </ul>  
      </div>
      </div><br><br>
      <button type="button" class="collapsible"> <b>Charminar (South Zone)</b></button>
      <div class="content">
      <div class="fakeimg" style="height:5\700px; background-color:	 white">
      <ul style="list-style-type:disc;">
          <li><b><font color="darkred">Malakpet - </font></b><font color="black"><?php echo $Malakpet['Average']; ?>%  of Garbage has been Fulled</font></a></li><br>
          <li><b><font color="darkred">Santhoshnagar - </font></b><font color="black"><?php echo $Santhoshnagar['Average']; ?>%  of Garbage has been Fulled</font></a></li><br>
          <li><b><font color="darkred">Chandrayangutta - </font></b><font color="black"><?php echo $Chandrayangutta['Average']; ?>%  of Garbage has been Fulled</font></a></li><br>
          <li><b><font color="darkred">Charminar - </font></b><font color="black"><?php echo $Charminar['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred">Falakunuma - </font></b><font color="black"><?php echo $Falakunuma['Average']; ?>%  of Garbage has been Fulled</font> </li><br>
          <li><b><font color="darkred">Rajendra Nagar  - </font></b><font color="black"><?php echo $RajendraNagar['Average']; ?>%  of Garbage has been Fulled</font></li><br>
      </ul>  
      </div></div><br><br>

      <button type="button" class="collapsible"> <b>Khairatabad (Central Zone)</b></button>
      <div class="content">
      <div class="fakeimg" style="height:5\700px; background-color:	 white">
      <ul style="list-style-type:disc;">
          <li><b><font color="darkred">Mehdipatnam -</font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred">Karwan  -</font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred">Goshamahal -</font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred">Khairatabad -</font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred">Jubilee Hills  -</font></b> <font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font></li><br>
      </ul>  
      </div></div><br><br>

      <button type="button" class="collapsible"> <b>secunderabad (northeast zone)</b></button>
      <div class="content">
      <div class="fakeimg" style="height:5\700px; background-color:	 white">
      <ul style="list-style-type:disc;">
          <li><b><font color="darkred">Amberpet  -</font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred">Musheerabad  -</font></b><font color="black"></font><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</li><br>
          <li><b><font color="darkred">Malkajgiri  -</font></b><font color="black"></font><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</li><br>
          <li><b><font color="darkred">Secunderabad Division -</font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred">Begumpet  -</font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font> </li><br>
      </ul>  
      </div></div><br><br>

      <button type="button" class="collapsible"> <b>Serilingampally (West Zone)</b></button>
      <div class="content">
      <div class="fakeimg" style="height:5\700px; background-color:	 white">
      <ul style="list-style-type:disc;">
          <li><b><font color="darkred">Yousufguda -</font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred">Serilingampally  -</font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred"> Chandanagar -</font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred">Ramachandra Puram / Patancheru -</font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font></li><br>
      </ul>  
      </div></div><br><br>

      <button type="button" class="collapsible"> <b>Kukatpally (North Zone)</b></button>
      <div class="content">
      <div class="fakeimg" style="height:5\700px; background-color:	 white">
      <ul style="list-style-type:disc;">
          <li><b><font color="darkred">Moosapet  -</font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred">Kukatpally -</font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred">Quthbullapur -</font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred">Gajula Ramaram -</font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font></li><br>
          <li><b><font color="darkred">Alwal -</font></b><font color="black"><?php echo $kapra['Average']; ?>%  of Garbage has been Fulled</font> </li><br>
      </ul>  
      </div>
      </div>
      </div>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card"  style="background-color:#2e2e1f"><font color="white">
      <h2>About the site</h2>
      <div class="fakeimg" style="height:300px; background-color:	 #2e2e1f">
      <p>We do have waste lying in cities which makes it hard for cleaning
staff to know which area requires attention and urgent garbage, waste pickup
of Identifying Waste across in the City. With Swachh Bharat App, it requires
people to take pictures and geo tag the images, due ...   <br><a href="about.php"><font color="yellow"> Read more</font></a>
      </p></font>
    </div>
    </div>
    <div class="card"  style="background-color:#2e2e1f"><font color="white">
      <h3>Quick links</h3></font>
      <div class="fakeimg " style="background-color:	 white"><a href="elogin.php"><font color="black">Find areas garbage levels</font></a></div><br>
      <div class="fakeimg" style="background-color:	 white"><a href="contactus.php"><font color="black">Contact us</font></a></div><br>
      <div class="fakeimg" style="background-color:	 white"><a href="feedback.php"><font color="black"> Feedback</font></a></div>
    </div>
    <div class="card"  style="background-color:#2e2e1f"><font color="white">
      <h3>Follow Us On</h3></font><center>
      <a href=""> <img src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-facebook-circle-512.png" alt="ghmc logo" style="width:20%"></a>
      <a href=""> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/599px-Instagram_icon.png" alt="ghmc logo" style="width:20%"></a>
      <a href="" > <img src="https://image.flaticon.com/icons/png/512/124/124021.png" alt="ghmc logo" style="width:20%"></a>
</center>
      
    </div><br><center>
    <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=ganni07-21&marketplace=amazon&region=IN&placement=B071Z8M4KX&asins=B071Z8M4KX&linkId=dc05a5a1ba5dc94a3b264abff6a21d32&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
   </iframe></center>
  </div>
  
  
  
  
  <center>
  
  
  <h3><b>Available in</b></h3>
   <img src="https://yntunzy.com/wp-content/uploads/2019/01/store-badges-for-app-01-1024x212.png" alt="store loho" style="width:30%">
   
   <br><Br>
   
   
   
   <iframe
                                                    src="https://www.appsgeyser.com/social_widget/social_widget.php?width=295&height=150&apkName=GHMCtracking_10319535&simpleVersion=no"
                                                    width="320" height="180" vspace="0" hspace="0" frameborder="no"
                                                    scrolling="no" seamless=""
                                                    allowtransparency="true"></iframe><br>
                                        
   
   </center>
   
   
</div>


<center>
<!-- Start of WebFreeCounter Code -->
<h3><b>Visitors Count: </b></h3>
<a href="" target="_blank"><img src="https://www.webfreecounter.com/hit.php?id=guevkxdnp&nd=6&style=72" border="0" alt="visitor counter"></a>
<!-- End of WebFreeCounter Code -->
</center>

  <div class="footer">
    <b><center><p>&copy; 2020 GHMC</p></center></b>
  <center><p><b>Designed and Developed by:<br> K.Satya Shiva Sai Ram, N. Vishal Kumar</b></p></center>
  </div>





<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<script>
    var myIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    </script>

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
