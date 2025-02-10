<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "users"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}


$request = $_POST['request']; // request

// Get username list
if($request == 1){
 $search = $_POST['search'];

 $query = "SELECT * FROM users WHERE username like'%".$search."%'";
 $result = mysqli_query($con,$query);

 while($row = mysqli_fetch_array($result) ){
  $response[] = array("value"=>$row['id'],"label"=>$row['username']);
 }

 // encoding array to json format
 echo json_encode($response);
 exit;
}

// Get details
if($request == 2){
 $userid = $_POST['userid'];
 $sql = "SELECT * FROM users WHERE id=".$userid;

 $result = mysqli_query($con,$sql);

 $users_arr = array();

 while( $row = mysqli_fetch_array($result) ){

  $userid = $row['id'];
  $fullname = $row['fname']." ".$row['lname'];
  $email = $row['email'];
  $phone = $row['phone'];
  $users_arr[] = array("id" => $userid, "name" => $fullname,"email" => $email,"phone"=>$phone);
 }

 // encoding array to json format
 echo json_encode($users_arr);
 exit;
}
