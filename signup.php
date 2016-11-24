<?php

// Include confi.php
include_once('confi.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	// Get data
	$usu = mysqli_real_escape_string($conn,$_POST['usu']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pass = mysqli_real_escape_string($conn,$_POST['pass']);

	// Insert data into data base
	$sql = "INSERT INTO dbusers (`usu`, `email`, `pass`) VALUES ('$usu', '$email', '$pass');";
	$qur = mysqli_query($conn,$sql);
	if($qur){
		$json = array("status" => 1, "msg" => "Usuario added!");
	}else{
		$json = array("status" => 0, "msg" => "Error!");
	}
}else{
	$json = array("status" => 0, "msg" => "Request method not accepted");
}

@mysqli_close($conn);

/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);