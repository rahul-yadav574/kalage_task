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


$user = $_POST['user'];
$pass = $_POST['pass'];

$query = "SELECT * FROM users WHERE `user_name`='$user' AND `password`='$pass'";
	$result=$conn->query($query);
	
	$jsonresponse=new stdClass();
	if($result->num_rows>0){
   		 $row=$result->fetch_array();
    		$jsonresponse->status=TRUE;
    		$jsonresponse->f_name=$row['first_name'];
    		$jsonresponse->email=$row['email'];
    		$jsonresponse->phone=$row['phone'];
            $jsonresponse->l_name=$row['last_name'];
           
			echo json_encode($jsonresponse);
	}
	else{
		echo "User not found . Please sign up first";
	}


?>
