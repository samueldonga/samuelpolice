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

top: 80%;
width: 100%;
height: 8%;
background-color: lightblue;
color: white;
justify-content: center;
align-items: space-between;
border-radius: 40px;
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

hr
{
background-color: blue;
border-radius: 30px;
height: 3px;
}

.footer
{
color: black;
}

#hr1
{
background-color: green;
}

fieldset
{
width: 40%;
background-color: lightblue;
}

input
{
text-align: center;
color: red;
}

textarea
{
color: red;
}


</style>

<title>Home page</title>
<script type="text/javascript">
function message()
{
	alert("WELCOME TO BUBAKA-MBALE ROAD POLICE ACCIDENTS REPORTING SYSTEM");
}
	</script>
</head>

<body onload="message()">
<br>
<center>
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
</center>
<br>
<br>
<center>
<font color ="black">
<p><font size="05" color ="black"><b>BUBAKA-MBALE ROAD POLICE:</b></font><br>Brings to you here a marvelous Road accidents reporting system to save our lives<p/>
<p>This system is so helpfull while giving information about accidents that have happened in various locations</p>
</font>
</center>
<br>

<br>
<center>
<div class="content">
<h1><b><font color ="black">Free Registration!!</font></b></h1>
<hr width="50%" id="hr1"><br>
<form action="homeinsert.php" method="post">
<fieldset align="center">
<legend>Personals' infomation:</legend>
<br>
<img src ="profile.jpg" width="55" height="50"><br>
<br>
<p><font color="blue"><u>Sign Up</u></font></p>
<table bordor="2">
<tr><td>Name:</td><td><input type="text" name="NAME" placeholder="Enter your name" required></td></tr>
<tr><td>Sex:</td><td><select name="SEX" required><option>male</option><option>female</option><option></select></td></tr>
<tr><td>NIN No:</td><td><input type="text" name="NIN" placeholder="Enter your NIN No" required></td></tr>
<tr><td>Email address:</td><td><input type="text" name="EMAIL" placeholder="Enter your Email" required></td></tr>
<tr><td>Contact:</td><td><input type="text" name="CONTACT" placeholder="Enter your phone contact" required></td></tr>
</table>
<hr width="100%" id="hr1">
<br>

<div class="rfles">
<input type="reset" name="reset" value="Refresh">
<input type="submit" name="submit" value="Submit">
</fieldset>
</div>
<br>
</form>
</div>
<br>
<input type ="checkbox"><font color="black">I agree that i have read the terms and conditions <br>And i will solemnly work hard to save ugandan lives</font>
<br>
<br>
<p><font color="black">Already have an Account</font></p>
<a href="login.html"><button>GET STARTED</button></a>
<br>
<br>
<marquee direction ="right"><img src ="wr.JPG" height ="25%" width ="25%"> <img src ="ABC.JPG" height ="25%" width ="25%"><img src ="im6.jpg" height ="25%" width ="25%"> <img src ="im11.jpg" height ="25%" width ="25%"><img src ="im13.jpg" height ="25%" width ="25%"></marquee><br>
<br>
</center>
<br>
<center>
<div class="footer">
<p><footer style="color:blue"><center>2022<sup>c</sup>Budaka District|All Rights Reserved<br>prvacy policy|Terms of use|legal information</center></footer></p>
<hr color ="blue">
</div>
<br>
<br>
</center>
</body>
</html>
