<?php

//call connection
require_once "conn.php";

//retrieve data from ionic input form
$_POST = json_decode(file_get_contents('php://input'), true);

// create variables to save username & password that have been sent before
$email = escape($_POST['email']);
$password = escape(md5($_POST['password']));


if (empty($email) || empty($password)) {
           // header("HTTP/1.1 200 OK");
            echo json_encode(array('status' => 'false', 'message' => 'Por favor complete todos los campos'));
            return;
        }

// create query to check if username and password are match from database
$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($link, $query);
// create variable to store users data from database
$userdata = array();
// storing users data into $userdata variable
while($row=mysqli_fetch_assoc($result)){
	$userdata[] = $row;
}

$message = array();
if($result){
	if(mysqli_num_rows($result) !=0){
		$message = array('status' => 'true', 'message' => 'Successfully login!', 'userdata' => $userdata, 'token' => 'test' );
	} else {
		$message = array('status' => 'false', 'message' => 'Username or password not match!');
	}
	echo json_encode($message);
}