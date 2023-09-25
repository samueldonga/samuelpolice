<html>
<head>
<style>
body
{
background-color: rgb(191, 245, 191);	
}

/*table
{

border:solid 3px white;
font-family:monospace;
text-align:center;	
}*/
table
{
	
width:100%;
	
}

tr:nth-child(even)

{
	
	background-color:white;
}

tr:nth-child(odd)

{
	
	background-color:lightblue;
}

th
{
	background-color:lightblue;
	
}

button
{
border: dotted 1px yellow;
top: 5px;
position: relative;
background: white;
border-radius: 40px;
cursor: pointer;
}

button:hover
{
background:orange;
width:120px;
color: white;
border-radius:50px;
}

.menu_bar
{

top: 80%;
width: 70%;
height: 8%;
background-color: lightblue;
color: white;
justify-content: center;
align-items: space-between;
border-radius: 40px;
}

</style>
<title>reported accidents</title>
<script type="text/javascript">
function message()
{
	alert("Please View reported accidents to avoid repeatition of reports about the same accident");
}
	</script>
</head>
<body onload="message()">
<center>
<h1><br><b><font color ="black">BUBAKA-MBALE ROAD POLICE STATION<br><font size ="05">ROAD ACCIDENTS REPORTING SYSTEM</font></font></h1>
<img src ="im17.jpg" width="20%" height="20%" style="border-radius:100%";>
<br>
<br>
<div class="menu_bar">

<a href="Home.php"><button>Home page</button></a>
<a href="Services.php"><button>About us</button></a>
<a href="display.php"><button>Reported accidents</button></a>
<a href="index.php"><button>Reporting Form</button></a>
</div>

<center>
<p>Please our dear employee, kindly first view the already <br>reported accidents in the table below to avoid collision of the same reports</p> 
<p>This will eliminate double reporting or this should happen when you are adding more information <br>and elucidations on the incomplete reported cases</p>
</center>
<?php

include("connect.php");

$sql_command = "select * from accident_info";

$exec = mysqli_query($con,$sql_command);
echo("<h2><u>Reported Accidents</u></h2>");

echo("<table>");
echo("<tr>");
echo("<th>S/No</th>");
echo("<th>Area</th>");
echo("<th>Date</th>");
echo("<th>Time</th>");
echo("<th>Description</th>");
echo("<th>Evidence</th>");
echo("<th>Deaths</th>");
echo("<th>Injured</th>");

echo("</tr>");


while($row = mysqli_fetch_array($exec))

{
echo("<tr>");

echo("<td>".$row[0]."</td>");
echo("<td>".$row[1]."</td>");
echo("<td>".$row[2]."</td>");
echo("<td>".$row[3]."</td>");
echo("<td>".$row[4]."</td>");
echo("<td>".$row[5]."</td>");
echo("<td>".$row[6]."</td>");
echo("<td>".$row[7]."</td>");

echo("</tr>");
}

mysqli_free_result($exec);


echo("</table>");



$sql_command = "select * from reporters_info";

$exec = mysqli_query($con,$sql_command);

echo("<br>");
echo("<br>");

echo("<h3><u>REPORTERS</u></h3>");


echo("<table>");

echo("<tr>");
echo("<th>S/No</th>");
echo("<th>Name</th>");
echo("<th>Sex</th>");
echo("<th>NIN</th>");
echo("<th>Email</th>");
echo("<th>Location</th>");
echo("<th>Contact</th>");
echo("<th>Witnessed by</th>");
echo("<th>Sex</th>");
echo("<th>Contact</th>");

echo("</tr>");


while($row = mysqli_fetch_array($exec))

{
echo("<tr>");

echo("<td>".$row[0]."</td>");
echo("<td>".$row[1]."</td>");
echo("<td>".$row[2]."</td>");
echo("<td>".$row[3]."</td>");
echo("<td>".$row[4]."</td>");
echo("<td>".$row[5]."</td>");
echo("<td>".$row[6]."</td>");
echo("<td>".$row[7]."</td>");
echo("<td>".$row[8]."</td>");
echo("<td>".$row[9]."</td>");
echo("</tr>");
}

echo("</table>");

echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");
?>
<a href="index.php"><button>REPORT NOW</button></a>
<br>
<br>
<hr width="100%" id="hr1">
<p><p><footer style="color:blue"><center>2022<sup>c</sup>Budaka District|All Rights Reserved<br>prvacy policy|Terms of use|legal information</center></footer></p>
</div>
<hr>
</center>
</body>
</html>