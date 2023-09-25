<html>
<head>

<style>
*
{
scroll-behavior: smooth;
margin: auto;
}

body
{
background-color: rgb(191, 245, 191);
}

.menu_bar
{
top: 100%;
width: 75%;
height: 07%;
background:lightblue;
align-items: space-between;
}

button
{
align-items:right;
border: dotted 1px yellow;
top: 5px;
background:orange;

cursor: pointer;

}

button:hover
{
background:orange;
width:120px;
color: white;
border-radius:50px;
}

.content
{
position: relative;
top: 70%;
width: 75%;
height: 85%;
background-color: whitesmoke;
overflow: scroll;
}

hr
{
background-color: green;
border-radius: 30px;
height: 3px;
}

.footer
{
height: 15%;
color: green;
}

#hr1
{
border-radius: 30px;
background-color: green;
height: 3px;
}

fieldset
{
width: 100%;
background-color: cream;
}

input
{
text-align: center;
color: red;
}

textarea
{
color: blue;
}
.rfles
{

top:10%;

}

</style>

<title>report accidents</title>
<script type="text/javascript">
function message()
{
	alert("Report any road accident found in your area");
}
	</script>
</head>

<body onload="message()">

<center>
<br>
<h1><br><b><font color ="black">BUBAKA-MBALE ROAD POLICE STATION<br><font size ="05">ROAD ACCIDENTS REPORTING SYSTEM</font></font></h1>
<br>
<img src ="im17.jpg" width="20%" height="20%" style="border-radius:100%";>
<br>
<br>
<br>
<div class="menu_bar">
<a href="Home.php"><button>Home page</button></a>
<a href="Services.php"><button>About us</button></a>
<a href="display.php"><button>Reported accidents</button></a>
<a href="index.php"><button>Reporting Form</button></a>
</div>
<p><font color="black"><b>
<p>Fill the form without fear or favour.</p>
<p><b>THANKS FOR EASING POLICE WORK</b></p>
<br>
<div class="content">
<br>
<h1><font size ="04">GET STARTED</font></h1>
<hr width="100%" id="hr1"><br>

<form action="insert.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend>Accident information:</legend>
<table bordor="0" align="left">
<tr><td>Location:</td><td><input type="text" name="Area" placeholder="Enter location" autofocus required></td></tr>
<tr><td>Date:</td><td><input type="date" name="date"></td></tr>
<tr><td>Estimated Time:</td><td><input type="time" name="time"></td></tr>
<tr><td>Number of deaths:</td><td><input type="number" name="deaths" required></td></tr>
<tr><td>Number of injured:</td><td><input type="number" name="injured" required></td></tr>
<tr><td>Provide a brief description about the accident:</td><td><textarea name="description" placeholder="Enter your description here......." rows="2" cols="70" required></textarea></td></tr>
<tr><td>Please attach a photo/video of the incident:</td><td><input type="file" name="evidence" required></td></tr>
</table>
</fieldset><br><br>
<fieldset>
<legend>Reporter's information:</legend>
<table bordor="0" align="left">
<tr><td>Name:</td><td><input type="text" name="Name" placeholder="Enter your name" required></td></tr>
<tr><td>Sex:</td><td><select name="r_Sex" required><option>Male</option><option>Female</option><option>Other</option></select></td></tr>
<tr><td>NIN No:</td><td><input type="text" name="nin" placeholder="Enter your NIN No" required></td></tr>
<tr><td>Email address:</td><td><input type="text" name="r_email" placeholder="Enter your Email" required></td></tr>
<tr><td>Location:</td><td><input type="text" name="r_location" placeholder="Enter your Location" required></td></tr>
<tr><td>Contact:</td><td><input type="text" name="r_contact" placeholder="Enter your phone contact" required></td></tr>
<hr width="100%" id="hr1">
<tr><td>Witnessed by:</td><td><input type="text" name="w_name" placeholder="Witness" required></td></tr>
<tr><td>Sex:</td><td><select name="w_sex" required><option>Male</option><option>Female</option><option>Other</option></select></td></tr>
<tr><td>Phone contact:</td><td><input type="text" name="w_contact" placeholder="Enter your contact" required><br></td></tr>
</table>
</fieldset>
<br>
<div class="rfles">
<input type="reset" name="reset" value="Refresh Form"><br>
<br>
<input type="submit" name="submit" value="Submit">
</div>
<br>
<br>
</form>
</div>
<img src ="wr.JPG" height ="20%" width ="20%"><img src ="ABC.JPG" height ="20%" width ="20%"> <img src ="sa.jpg" height ="20%" width ="20%"> <img src ="im2.jpg" height ="20%" width ="20%"><br>
<br>
<div class="footer">
<p><p><footer style="color:blue"><center>2022<sup>c</sup>Budaka District|All Rights Reserved<br>prvacy policy|Terms of use|legal information</center></footer></p>
<hr color ="blue"></p><br>
</div>
</center>
</body>
</html>
