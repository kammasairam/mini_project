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
div.d {
  line-height: 200%;
}

table {
  border-collapse: collapse;
  width: 100%;
  border: 3px solid black;
  text-align:center;
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
  <a href="index.php">Home</a> 
  <a href="listareas.php">List of areas</a> 
  <a class="active" href="details.php">Details of bins</a> 
  <a href="elogin.php">Employee Login</a> 
  <a  href="about.php">About Us</a> 
</div>
<br><br><br>

<table style="width:100%">
  <tr>
    <th>S.no</th>
    <th>Zone</th> 
    <th>circle</th>
    <th>ward</th>
    <th>Bin no</th>
    <th>Address</th>
  </tr>
  <tr><td>1</td><td>L. B. Nagar (East Zone)</td><td>Hayathnagar</td><td>aaa</td><td>1</td><td>abc nagar,Hayathnagar</td></tr>
    <tr><td>2</td><td>L. B. Nagar (East Zone)</td><td>Hayathnagar</td><td>aaa</td><td>2</td><td>abc nagar,Hayathnagar</td></tr>
    <tr><td>3</td><td>L. B. Nagar (East Zone)</td><td>Hayathnagar</td><td>aaa</td><td>3</td><td>fds nagar,Hayathnagar</td></tr>
    <tr><td>4</td><td>L. B. Nagar (East Zone)</td><td>Hayathnagar</td><td>bbb</td><td>4</td><td>fds nagar,Hayathnagar</td></tr>
    <tr><td>5</td><td>L. B. Nagar (East Zone)</td><td>Hayathnagar</td><td>bbb</td><td>5</td><td>rfv nagar,Hayathnagar</td></tr>
    <tr><td>6</td><td>L. B. Nagar (East Zone)</td><td>Hayathnagar</td><td>bbb</td><td>6</td><td>rfv nagar,Hayathnagar</td></tr>

    <tr><td>7</td><td>L. B. Nagar (East Zone)</td><td>Kapra</td><td>aaa</td><td>1</td><td>abc nagar,Hayathnagar</td></tr>
    <tr><td>8</td><td>L. B. Nagar (East Zone)</td><td>Kapra</td><td>aaa</td><td>2</td><td>abc nagar,Hayathnagar</td></tr>
    <tr><td>9</td><td>L. B. Nagar (East Zone)</td><td>Kapra</td><td>aaa</td><td>3</td><td>fds nagar,Hayathnagar</td></tr>
    <tr><td>10</td><td>L. B. Nagar (East Zone)</td><td>Kapra</td><td>bbb</td><td>4</td><td>fds nagar,Hayathnagar</td></tr>
    <tr><td>11</td><td>L. B. Nagar (East Zone)</td><td>Kapra</td><td>bbb</td><td>5</td><td>rfv nagar,Hayathnagar</td></tr>
    <tr><td>12</td><td>L. B. Nagar (East Zone)</td><td>Kapra</td><td>bbb</td><td>6</td><td>rfv nagar,Hayathnagar</td></tr>

    <tr><td>13</td><td>L. B. Nagar (East Zone)</td><td>Uppal</td><td>aaa</td><td>1</td><td>abc nagar,Hayathnagar</td></tr>
    <tr><td>14</td><td>L. B. Nagar (East Zone)</td><td>Uppal</td><td>aaa</td><td>2</td><td>abc nagar,Hayathnagar</td></tr>
    <tr><td>15</td><td>L. B. Nagar (East Zone)</td><td>Uppal</td><td>aaa</td><td>3</td><td>fds nagar,Hayathnagar</td></tr>
    <tr><td>16</td><td>L. B. Nagar (East Zone)</td><td>Uppal</td><td>bbb</td><td>4</td><td>fds nagar,Hayathnagar</td></tr>
    <tr><td>17</td><td>L. B. Nagar (East Zone)</td><td>Uppal</td><td>bbb</td><td>5</td><td>rfv nagar,Hayathnagar</td></tr>
    <tr><td>18</td><td>L. B. Nagar (East Zone)</td><td>Uppal</td><td>bbb</td><td>6</td><td>rfv nagar,Hayathnagar</td></tr>
    
    <tr><td>19</td><td>L. B. Nagar (East Zone)</td><td>LB Nagar</td><td>aaa</td><td>1</td><td>abc nagar,Hayathnagar</td></tr>
    <tr><td>20</td><td>L. B. Nagar (East Zone)</td><td>LB Nagar</td><td>aaa</td><td>2</td><td>abc nagar,Hayathnagar</td></tr>
    <tr><td>21</td><td>L. B. Nagar (East Zone)</td><td>LB Nagarr</td><td>aaa</td><td>3</td><td>fds nagar,Hayathnagar</td></tr>
    <tr><td>22</td><td>L. B. Nagar (East Zone)</td><td>LB Nagar</td><td>bbb</td><td>4</td><td>fds nagar,Hayathnagar</td></tr>
    <tr><td>23</td><td>L. B. Nagar (East Zone)</td><td>LB Nagar</td><td>bbb</td><td>5</td><td>rfv nagar,Hayathnagar</td></tr>
    <tr><td>24</td><td>L. B. Nagar (East Zone)</td><td>LB Nagar</td><td>bbb</td><td>6</td><td>rfv nagar,Hayathnagar</td></tr>
    
    <tr><td>25</td><td>L. B. Nagar (East Zone)</td><td>Saroornagar</td><td>aaa</td><td>1</td><td>abc nagar,Saroornagar</td></tr>
    <tr><td>26</td><td>L. B. Nagar (East Zone)</td><td>Saroornagarr</td><td>aaa</td><td>2</td><td>abc nagar,Saroornagar</td></tr>
    <tr><td>27</td><td>L. B. Nagar (East Zone)</td><td>Saroornagar</td><td>aaa</td><td>3</td><td>fds nagar,Saroornagar</td></tr>
    <tr><td>28</td><td>L. B. Nagar (East Zone)</td><td>Saroornagar</td><td>bbb</td><td>4</td><td>fds nagar,Saroornagar</td></tr>
    <tr><td>29</td><td>L. B. Nagar (East Zone)</td><td>Saroornagar</td><td>bbb</td><td>5</td><td>rfv nagar,Saroornagar</td></tr>
    <tr><td>30</td><td>L. B. Nagar (East Zone)</td><td>Saroornagar</td><td>bbb</td><td>6</td><td>rfv nagar,Saroornagar</td></tr>
  
  
</table>


  <div class="footer">
    <b><center><p>&copy; 2020 GHMC</p></center></b>
  <center><p><b>Designed and Developed by:<br> K.Satya Shiva Sai Ram, N. Vishal Kumar</b></p></center>
  </div>



</body>
</html> 
