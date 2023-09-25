<html> 
<head>
    <title>Insertion Successful!!!</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accident";

$con = mysqli_connect($servername, $username, $password, $dbname);


$name = $_POST['NAME'];
$sex = $_POST['SEX'];
$nin = $_POST['NIN'];
$email = $_POST['EMAIL'];
$contact = $_POST['CONTACT'];

$home_command = "insert into registration(NAME,SEX,NIN,EMAIL,CONTACT)values('$name','$sex','$nin','$email','$contact')";
mysqli_query($con, $home_command);

include("Home.php");

?>
<script type="text/javascript">
    alert ("You have been registered successfully!!!");
</script>

</body>
</html>