<!DOCTYPE html>
<html lang="en"><head>
 <title>Approval page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="height:100%;font-family:cursive">

<style>

   tr,td,th{
     border:3px solid black;
     padding:15px;
     width:200px;
     text-align:center;
     color:black;
   }
   th{
     color:black;
     border:3px solid black;
     background-color:white;
   }
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM regs";
$result = $conn->query($sql);

echo'
<div class="container-fluid" style="background:white;min-height:700px"><div class="row" style="">

<table class="table table-bordered"  style="text-align:center;border-bottom:2px ridge solid blue;
border-top:2px ridge solid blue;;border-left:2px ridge solid blue;;border-right:2px ridge solid blue
;background:lightblue"><tr><thead><th style="color:darkorange;border:3px solid black;;text-align:center;padding-top:20px">SL.NO.</th><th style="color:darkorange;border:3px solid black;
text-align:center;padding-top:20px">NAME</th><th style="color:darkorange;text-align:center;padding-top:20px;border:3px solid black;">EMAIL</th><th style="color:darkorange;border:3px solid black;
text-align:center;padding-top:20px">PHONE</th>
<th style="color:darkorange;border:3px solid black;;text-align:center;padding-top:20px">SELECTION STATUS</th>
<th style="color:darkorange;border:3px solid black;;text-align:center;padding-top:20px">REMARKS</th>';
$id=0;$t=1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $id+=1;
 
echo'
<tr><td style="border:3px solid black;font-size:18px;color:darkblue">'.$id.'</td><td style="font-size:18px;color:darkblue">'.$row["Candidate"].'</td>
<td style="border:3px solid black;font-size:18px;color:darkblue">'.$row["Email"].'</td><td style="border:3px solid black;font-size:18px;color:darkblue">'.$row["Phone"].'</td>
<td style=""><a href="#" style="color:black;text-decoration:none;" >
<form action="Confirm.php" method="POST"><button name="id" class="btn btn-success btn-sm" value='.$t.' style="width:80%;margin-left:0px;border:3px ridge white;border-radius:8px; background:purple; color:white;" >APPROVE</button></form></a><br><button class="btn btn-danger btn-sm" style="width:80%;margin-left:0px;border:3px ridge white;margin-top:2px;border-radius:8px;background:#FF1493;color:white;" >IGNORE</button></td>
<td style="border:3px solid black;font-size:18px;color:darkblue">'.$row["Remarks"].'</td>
</tr>';
$t+=1;
//

}}//whileif


 echo'</table><a href="regpage.html">

</div>';
 

 


$conn->close();
?>
<script> 
var buttons=document.getElementByTagName("button");
var c=buttons.length;
	
	function fun(e){alert(this.id);};
	

</script>
</body>
</html>
