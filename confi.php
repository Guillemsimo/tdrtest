<?php
$db_host = "localhost";
$db_username = "root"; 
$db_pass = ""; 
$db_name = "tdrtest";

$conn = mysqli_connect("$db_host", "$db_username", "$db_pass");
mysqli_select_db($conn,"$db_name");
