<?php

session_start();

$con = mysqli_connect('localhost','root','','users');

mysqli_select_db($con,'users');

$Candidate = $_POST['Candidate'];
$gender = $_POST['gender'];
$age=$_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$applied=$_POST['applied'];
$college=$_POST['college'];
$address=$_POST['address'];
echo "<body style='background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);'>";
$n=6;
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
$r = ''; 

  for ($i = 0; $i < $n; $i++) { 
      $index = rand(0, strlen($characters) - 1); 
      $r .= $characters[$index]; 
  } 
//db connection
$conn=new mysqli("localhost","root","","users");
if($conn->connect_error){ echo "Connection ERror";
  die('Connection failed:'.$conn->connect_error);	
}else{
  
  $reg = " insert into regs(Candidate,Gender,Age,Email,Phone,Applied,College,Address,password) values ('$Candidate','$gender','$age','$email','$phone','$applied','$college','$address','$r')";
   mysqli_query($con,$reg);
   echo "<p><font color=red size='10pt' face='cursive'><br><b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Registration Successful!!!</b></font></p>";
}
 ?>
