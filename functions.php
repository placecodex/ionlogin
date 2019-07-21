<?php

// function to filter weird string, LOL :'D
function escape($data){
	global $link;
	return mysqli_real_escape_string($link, $data);
}

// function to check username availability
function username_check($username){
	global $link;
	$query = "SELECT * FROM users WHERE username='$username'";
	$result = mysqli_query($link, $query);
	if(mysqli_num_rows($result) == 0 ) return true;
	else return false;
}

// function to check email availability
function email_check($email){
	global $link;
	$query = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($link, $query);
	if(mysqli_num_rows($result) == 0 ) return true;
	else return false;
}