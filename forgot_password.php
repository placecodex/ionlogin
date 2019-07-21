<?php

//call connection
require_once "loader.php";

//retrieve data from ionic input form
//$_POST = json_decode(file_get_contents('php://input'), true);

    // create variables to save username & password that have been sent before
     // $email ='' ;

      $email = escape($_POST['email']);

         // if input email is empty, show error msn
        if (empty($email)) {
           // header("HTTP/1.1 200 OK");
            echo json_encode(array('status' => 'false', 'message' => 'Por favor introdusca su correo'));
            return;
        }

// create query to check if username and password are match from database
$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($link, $query);

// create variable to store users data from database
  //$userdata = array();
// storing users data into $userdata variable
 // while($row=mysqli_fetch_assoc($result)){
	//$userdata[] = $row;
  // }

$message = array();
if($result){
	if(mysqli_num_rows($result) !=0){

		$message = array('status' => 'true', 'message' => 'A recuperation mail was sended to you email!', 'userdata' => $userdata );


	} else {


		$message = array('status' => 'false', 'message' => 'The username no exist');



	}
	echo json_encode($message);
}