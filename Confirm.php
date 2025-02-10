<!DOCTYPE html>
<html>
<body>
<?php
if(!empty($_POST['id'])){
  $data=$_POST['id'];
} 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM regs";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
if($row["ID"]==$data)
{	$em=$row["Email"];$u=$row["Candidate"];$p=$row["password"];
}
}}

require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';
$mail = new PHPMailer\PHPMailer\PHPMailer;

//Enable SMTP debugging.
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "";                 
$mail->Password = "";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;                                   

$mail->From = "";
$mail->FromName = "Shishir Alva";

$mail->addAddress("$em", "RecepientName");

$mail->isHTML(true);
$file_to_attach = 'loginpage.html';
$mail->AddAttachment( $file_to_attach , 'loginpage.html' );
$file_to_attach = 'Change.php';
$mail->AddAttachment( $file_to_attach , 'Change.php' );

$mail->Body="Enter the name(entered during registration)<br>Password is ".$p."<br>Change your Password(If Necessary)";
$mail->AltBody = "";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}?>
</body>
</html>
