<?php

// Include confi.php
include_once('confireg.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	// Get data
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$apell = mysqli_real_escape_string($conn,$_POST['apell']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$time = mysqli_real_escape_string($conn,$_POST['time']);
	$tag = mysqli_real_escape_string($conn,$_POST['tag']);
	
	// Insert data into data base
	$sql = "INSERT INTO $tag (`name`, `apell`, `email`,`time`) VALUES ('$name', '$apell', '$email','$time');";
	if(mysqli_query($conn,$sql)){
		echo "Registrat";
	}else{
		echo "Error!";
	}
}else{
	echo "no";
}

@mysqli_close($conn);