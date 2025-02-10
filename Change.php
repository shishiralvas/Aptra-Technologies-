<!DOCTYPE html>
<html lang="en">
<head>
  <title>change password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
</style>
<?php
if(isset($_POST['uname']) && isset($_POST['lpassword'])){
$a=$_POST['uname'];
$b=$_POST['lpassword'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$f=0;
$sql = "SELECT * FROM regs";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
if($row["Candidate"]==$a && $row["password"]==$b)
{	$f=1;
echo "<h2 >Login Successful</h2>";break;
}

}}
if($f==0)
{echo 'INVALID USERNAME/PASSWORD ';
}}
?>
</head>

<body style="background-color:plum;color:black;font-family:cursive ">
<center><h2 style="color:darkblue">Change Password</h2></center><br>

<div class="container">

 <div class="row">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<div class="col-sm-4" style="text-align:center; font-size:18px;text-shadow: 0 0 3px #FF0000;letter-spacing:4px">
<label>User Name</label><br><br>
	<label> New Password</label><br><br>
	<label>Confirm Password</label><br><br>
    	</div>

	<div class="col-sm-5" style="padding: 5px">

			<input type="text" name="name" style="width:100%;height:30px" placeholder=""required><br><br>
			<input type="password" name="rpass" style="width:100%;height:30px" required><br><br>
			<input type="password" name="npass" style="width:100%;height:30px" required><br><br>			
		
<button type="submit" class="btn btn-warning" style="border:2px solid white;border-radius:8px;width:100%;color:darkblue;background:violet"><h5 style="font-size:30px">APPLY</h5></button>&nbsp;&nbsp;&nbsp;

   	 </div>

			
    	</div> </div>



</div></form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
if(isset($_POST['name']) && isset($_POST['rpass'])){
  $Candidate= $_POST["name"];
  $password = $_POST["rpass"];
	$npass = $_POST["npass"];

 $mysqli = new mysqli("localhost", "root", "", "users"); 
  
if($mysqli === false){ 
    die("ERROR: Could not connect". $mysqli->connect_error); 
} 
  
$sql = "UPDATE regs SET password='$npass' WHERE Candidate='$Candidate'"; 
if($mysqli->query($sql) === true){ 
    echo "<h4>Records was updated Successfully!!!</h4>"; 
} else{ 
    echo "ERROR: Could not able to execute $sql". $mysqli->error; 
} 
$mysqli->close(); }	}
?>

</body></html>
