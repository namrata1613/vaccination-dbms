
<!DOCTYPE html>
<html>
<head>
<title>Post-Covid_management</title>
<style>
body{
background-image: url(https://video.cgtn.com/news/2021-05-09/China-provides-vaccines-to-over-100-countries-intl-organizations--107hwRi941W/video/a0b9b772bd05477e8d67e13829fd7e40/a0b9b772bd05477e8d67e13829fd7e40.jpg);
background-size: 97%;
background-attachment: fixed;
background-repeat: no-repeat;
border-color:midnightblue;
}
* {
margin: 0;
padding: 0;
}
.navbar {
display: flex;
align-items: center;
justify-content: center;
position: sticky;
top: 0;
cursor: pointer;
}
.background {
background: black;
background-blend-mode: darken;
background-size: cover;
}
.nav-list {
width: 70%;
display: flex;
align-items: center;
}
.logo {
display: flex;
justify-content: center;
align-items: center;
}
.logo img {
width: 180px;
border-radius: 50px;
}
.nav-list li {
list-style: none;
padding: 26px 30px;
}
.nav-list li a {
text-decoration: none;
color: white;
}
.nav-list li a:hover {
color: grey;
}
.rightnav {
width: 30%;
text-align: right;
}
#search {
padding: 5px;
font-size: 17px;
border: 2px solid grey;
border-radius: 9px;
}
.firstsection {

height: 2000px;
}
.secondsection {
height: 500px;
}
.container .box {
width:540px;
margin:50px;
display:table;
}
.container .box .box-row {
display:table-row;
}
.container .box .box-cell {
display:table-cell;
width:33%;
padding:10px;
}
.container .box .box-cell.box1 {
background:green;
color:white;
text-align:justify;
}
.container .box .box-cell.box2 {
background:lightgreen;
text-align:justify
}
.container .box .box-cell.box3 {
background:lime;
text-align:justify;
}
.firsthalf {
width: 100%;
display: flex;
flex-direction: column;
justify-content: center;
}
.secondhalf {
width: 30%;
}
.secondhalf img {
width: 70%;
border: 4px solid white;
border-radius: 150px;
display: block;
margin: auto;
}
.text-big {
font-family: 'Piazzolla', serif;
font-weight: bold;
font-size: 35px;
}
.text-small {
font-size: 18px;
}
.btn {
padding: 8px 20px;
margin: 7px 0;
border: 2px solid white;
border-radius: 8px;
background: none;
color: white;
cursor: pointer;
}
.btn-sm {
padding: 6px 10px;
vertical-align: middle;
}
.section {
height: 400px;
display: flex;
align-items: center;
justify-content: center;
max-width: 90%;
margin: auto;
}
.section-Left {
flex-direction: row-reverse;
}
.paras {
text-align: left;
padding: 0px 65px;
}
.thumbnail img {
width: 250px;
border: 2px solid black;
border-radius: 26px;
margin-top: 19px;
}
.center {
text-align: center;
}
.text-footer {
text-align: center;
padding: 30px 0;
font-family: 'Ubuntu', sans-serif;
display: flex;
justify-content: center;
color: white;
}
.card {
display: flex;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
max-width: 300px;
margin: auto;
text-align: center;
}
.car-list li {
list-style: none;
padding: 26px 30px;
}
.car-list li a {
text-decoration: none;
color: white;
}
.car-list li a:hover {
color: grey;
}
.title {
color: grey;
font-size: 18px;
}
sbtn {
border: none;
outline: 0;
display: flex;
padding: 8px;
color: white;
background-color: #000;
text-align: center;
cursor: pointer;
width: 100%;
font-size: 15px;
}
button {
border: none;
outline: 0;
display: inline-block;
padding: 8px;
color: white;
background-color: #000;
text-align: center;
cursor: pointer;
width: 100%;
font-size: 18px;
}
a {
text-decoration: none;
font-size: 22px;
color: black;
}
button:hover, a:hover {
opacity: 0.7;
}
#scroll-container {
border: 3px solid black;
border-radius: 5px;
height: 200px;
width: 300px;
overflow: hidden;
}
#scroll-text {
height: 100%;
text-align: center;
/* animation properties */
-moz-transform: translateY(100%);
-webkit-transform: translateY(100%);
transform: translateY(100%);
-moz-animation: my-animation 5s linear infinite;
-webkit-animation: my-animation 5s linear infinite;
animation: my-animation 5s linear infinite;
}
/* for Firefox */
@-moz-keyframes my-animation {
from { -moz-transform: translateY(100%); }
to { -moz-transform: translateY(-100%); }
}
/* for Chrome */
@-webkit-keyframes my-animation {
from { -webkit-transform: translateY(100%); }
to { -webkit-transform: translateY(-100%); }
}
@keyframes my-animation
{
from {
-moz-transform: translateY(100%);
-webkit-transform: translateY(100%);
transform: translateY(100%);
}
to {
-moz-transform: translateY(-100%);
-webkit-transform: translateY(-100%);
transform: translateY(-100%);
}
}

#middlebox{
float:left;
width:50%;
height:2000px;
}
#rightbox{
float:right;
width:25%;
height:2000px;
}
h1{
color:darkblue;
text-align:center;
}


 table{
            border-collapse: collapse;
            width: 100%;
            color: #d96459;
            font-family: monospace;
            font-size: 15px;
            text-align: center;
            float : center;
            }
            th{
            background-color: #588c7e;
            color: white;
            }



</style>
</head>
<body >
<nav class="navbar background">
<ul class="nav-list">
<div class="logo">
<img src= "images/Logo-and-name.png">
</div>
<li><a href="#web">HOME</a></li>
<li><a href="#program">GOVERNMENT GUIDELINES</a></li>
<li><a href="#course">ABOUT US</a></li>
</ul>
<div class="rightNav">
<input type="text" name="search" id="search">
<button class="btn btn-sm">Search</button>
</div>
</nav>
<section class="firstsection">
<div class="box-main">
<div class="firstHalf">
<div id = "boxes">

            <div id = "leftbox">
                <h2>TEACHERS HAVING</h2>
				<h2>+ve TEST RESULT</h2>
                				<div id="scroll-container">
  <div id="scroll-text">

<table>
<tr>
<th>EMP. NAME</th>
</tr>

<?php 
$conn = mysqli_connect("localhost", "root", "//password", "//database_name");
 if ($conn-> connect_error)
 {
    die("Connection failed:". $conn-> connect_error);
 }
 $sql = "SELECT NAME FROM EMPLOYEE WHERE EpId = (select EpId from RegCheckup where Result = '+')";
 $result = $conn-> query($sql);
 
 if($result-> num_rows > 0)
 {
    while ($row = $result-> fetch_assoc())
	{
	   echo "<tr><td>". $row["Name"] ."</td></tr>";
	}
	echo "</table>";
 }
 else
 {
	 echo "0 result";  
  }
 $conn->close();
?>
</table>

  <div>
</div>
				
            </div>
        </div>
            </div> 

<div id = "middlebox">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 class="text-big" id="web">HOME</h1>
<div class="card">
<ul class = "car-list">
<li>
<img src="images/covid_Detected.png" alt="img" style="width:100%">
<h1>DETECTED</h1>
<p class="title">Enter details of employee who detected covid</p>
<p><button><a href="detection_form.html" >Enter Details</a></button></p>
<br><br>
</li>
<li>
<img src="images/regular.jfif" alt="img" style="width:100%">
<h1>REGULAR</h1>
<p class="title">Enter details of Regular Checkup</p>
<p><button><a href="regular_chkup.html" >Enter Details</a></button></p>
<br><br>
</li>
<li>
<img src="images/vaccine.png" alt="img" style="width:100%">
<h1>VACCINATIONS</h1>
<p class="title">Enter details of Vaccinations</p>
<p><button><a href="vaccination_form.html" >Enter Details</a></button></p>
<br><br>
</li>
<li>
<img src="images/view.jpg" alt="img" style="width:100%">
<h1>VIEW DETAILS</h1>
<!-- <p class="title">Enter details of Vaccinations</p> -->
<!-- <p><button>click here</button></p> -->
<p><button><a href="viewdet.html" >Click
here!</a></button></p>
</li>
</ul>
</div>
</div>
<div id = "rightbox">
<h2>TEACHERS RETURNING </h2>
<h2> FROM QUARANTINE:</h2>
<div id="scroll-container">
<div id="scroll-text">
<table>
<tr>
<th>RTPCR ID.</th>
<th>Emp. Id.</th>
<th>Leaving Date</th>
<th>Hospital</th>
<th>Quarantine days</th>
</tr>

<?php 
$conn = mysqli_connect("localhost", "root", "//password", "//database_name");
 if ($conn-> connect_error)
 {
    die("Connection failed:". $conn-> connect_error);
 }
 $sql = "SELECT *from Diagnosed";
 $result = $conn-> query($sql);
 
 if($result-> num_rows > 0)
 {
    while ($row = $result-> fetch_assoc())
	{
	   echo "<tr><td>". $row["RTPCRId"] ."</td><td>". $row["EpId"] ."</td><td>". $row["LeavingDate"] ."</td><td>". $row["Hospital"] ."</td><td>". $row["quarantine_days"] ."</td></tr>";
	
	}
	echo "</table>";
 }
 else
 {
	 echo "0 result";  
  }
 $conn->close();
?>
</table>
<div>
</div>
</div>
</div>
<br><br>
<h2>STUDENTS HAVING </h2>
<h2>UPCOMING 2nd DOSE:</h2>
<div id="scroll-container">
<div id="scroll-text">

<table>
<tr>
<th>Student Id.</th>
<th>Name</th>
<th>2nd Dose</th>
</tr>

<?php 
$conn = mysqli_connect("localhost", "root", "//password", "//database_name");
 if ($conn-> connect_error)
 {
    die("Connection failed:". $conn-> connect_error);
 }
 $sql = "SELECT *from upcoming_dose";
 $result = $conn-> query($sql);
 
 if($result-> num_rows > 0)
 {
    while ($row = $result-> fetch_assoc())
	{
	   echo "<tr><td>". $row["SId"] ."</td><td>". $row["Sname"] ."</td><td>". $row["Second_Dose_dates"] ."</td></tr>";
	
	}
	echo "</table>";
 }
 else
 {
	 echo "0 result";  
  }
 $conn->close();
?>
</table>

<div>
</div>
</div>
</div>
<!-- <div class="thumbnail"> -->
<!-- <img src= "img.png" alt="laptop image"> -->
<!-- </div> -->
</div>
</div>
</section>
<section >
<div class="box-main">
<div class="firstHalf">
<br><br><br>
<h1 class="text-big" id="program">
Governament Guidelines:
</h1>
<p class="text-small">
<center>
    <br>
    The generic preventive measures include simple public health measures that are to be followed to reduce<br>
    the risk of COVID-19. These measures need to be observed by all (teachers, employees and students) in 
    these places at all times.
    These include: <br>
    i. Physical distancing of at least 6 feet to be followed as far as feasible. <br>
    ii. Use of face covers/masks to be made mandatory.<br>
    iii. Frequent hand washing with soap (for at least 40-60 seconds) even when hands are not visibly dirty.<br>
    v. Self-monitoring of health by all and reporting any illness at the earliest.<br>

</center>
</p>
</div>
</div>
</section>
<section class="section">
<div class="paras">
<h1 class="text-big" id="course">ABOUT US</h1>
<br><br><br>
<p class="sectionSubTag text-small">
This Project has been made by:
<br><br>
NAMRATA DAS(2020400006)
<br><br>
SWAMINI DUMBRE(2020400009)
<br><br>
JANHVI KATKAR(2020400018)
</p>
</div>
</section>
</body>
</html>