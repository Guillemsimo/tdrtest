<?php

// Include confi.php
include_once('confireg.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	// Get data
	$usu = mysqli_real_escape_string($conn,$_POST['usu']);
	
	$create = "CREATE TABLE $usu ( 
name TEXT NOT NULL,
apell TEXT NOT NULL,
email VARCHAR(100),
time VARCHAR(100)
)";
	
if (mysqli_query($conn,$create)) {
    echo "Table $usu created successfully";
} else {
    echo "Error creating table";
}

@mysqli_close($conn);
}

/* Output header */