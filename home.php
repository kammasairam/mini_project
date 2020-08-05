<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:index.php");  
} else {  
?> 
<!doctype html>  
<html>  
<head>  
<title>Welcome</title>  

<meta name="viewport" content="width=device-width, initial-scale=0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
  
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 30px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
}

div.container4 {
    height: 10em;
    position: relative }
div.container4 p {
    margin: 0;
    background: ;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }
    
</style>
</head>
<body>
    
<center>
<div class=container4>
<div class="sidebar">
    <p>
  <a href="getdata.php"><i class="fa fa-file"></i> Get Data</a>
  <a href="scanqr.php"><i class="fa fa-qrcode"></i> Scan QR Code </a>
  <a href="index.php"><i class="fa fa-sign-out"></i>Logout sai</a>
 
  </p>
</div>
</div>
</center>
     
</body>
</html> 
<?php  
}  
?>  
