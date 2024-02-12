<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "trail_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
if($conn){
	$q="INSERT INTO trail (name,email,para,data) values('alex','2215028@gmail','hello guys i am all','30/02/2005')"
}
?>