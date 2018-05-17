<?php 

$servername = "localhost";
$username = "admin_joy";
$password = "admin_joy574";
$dbname ="kalage";

$conn=new mysqli($servername,$username,$password,$dbname);
 
//check connection
if($conn->connect_error)
{
	die("Connection failed: ".$conn->connect_error);
}

$handle = $_POST['handle'];
$pass = $_POST['pass'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$query = "SELECT * FROM users WHERE `user_name`='$handle' OR `email`='$email'";
	$result=$conn->query($query);
	
	$query_rows = "SELECT * FROM users";
	$result_rows=$conn->query($query_rows);
	
	$newuserid = ($result_rows->num_rows)+1;
	
	
	if($result->num_rows==0){
   		 
		 
		 $insertUser = "INSERT into users VALUES('$newuserid','$handle','$f_name','$l_name','$phone','$email','$pass') ";
		$insertResult=$conn->query($insertUser);
		echo 'Registered ! Now Login!';
	}
	else{
		echo "Same User exist with handle or email id";
	}




?>