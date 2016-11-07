<?php

// Include confi.php
include_once('confi.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	// Get data
	$id = mysqli_real_escape_string($conn,$_POST['id']);
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pass = mysqli_real_escape_string($conn,$_POST['pass']);

	// Insert data into data base
	$sql = "INSERT INTO dbusers (`id`, `name`, `email`, `pass`) VALUES ('$id', '$name', '$email', '$pass');";
	$qur = mysqli_query($conn,$sql);
	if($qur){
		$json = array("status" => 1, "msg" => "Usuario added!");
	}else{
		$json = array("status" => 0, "msg" => "Error fucked up!");
	}
}else{
	$json = array("status" => 0, "msg" => "Request method not accepted");
}

@mysqli_close($conn);

/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);