<?php

//call connection
require_once "conn.php";

// create query to check if username and password are match from database
$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);
// create variable to store users data from database
$list = array();
// storing users data into $userdata variable
while($row=mysqli_fetch_assoc($result)){
	$list[] = $row;
}


echo json_encode($list);
