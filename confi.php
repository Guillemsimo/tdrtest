<?php
$db_host = "localhost";
// Place the username for the MySQL database here
$db_username = "root"; 
// Place the password for the MySQL database here
$db_pass = ""; 
// Place the name for the MySQL database here
$db_name = "tdrtest";

$conn = mysqli_connect("$db_host", "$db_username", "$db_pass");
mysqli_select_db($conn,"$db_name");