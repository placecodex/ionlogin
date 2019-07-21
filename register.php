<?php

//call connection
require_once "conn.php";

//retrieve data from ionic input form
$_POST = json_decode(file_get_contents('php://input'), true);

// create variables to save username & password that have been sent before
$username = escape($_POST['username']);
$password = escape(md5($_POST['password']));
$full_name = escape($_POST['fullname']);
$email = escape($_POST['email']);

// check if some input is empty
if (empty($username) || empty($password) || empty($email) || empty($full_name) ) {
            header("HTTP/1.1 200 OK");
             echo json_encode(array('status' => 'false', 'message' => 'Por favor complete todos los campos'));
            return;
        }

// we will provide that username and email are available

if(username_check($username) && email_check($email)){
	// create query to send user data
$query = "INSERT INTO users(username, password, full_name, email) VALUES ('$username', '$password', '$full_name', '$email')";
$result = mysqli_query($link, $query);
if($result){
		$message = array('status' => 'true', 'message' => 'Successfully registered!');
	} else {
		$message = array('status' => 'false', 'message' => 'Sorry, something gone wrong, call admin!');
	}
} else {
		$message = array('status' => 'false', 'message' => 'Your email or username is used by other user, try with different email or username!');
}

	echo json_encode($message);