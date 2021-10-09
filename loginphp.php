<?php

$servername="localhost";
$username="root";
$password="";
$dbname="login";
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo("connection");
	$user=$_POST['username'];
	$pass = $_POST['password'];
	$query = "SELECT * FROM login WHERE username = '$user' and password = '$pass'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_num_rows($result);

	if ($user == admin){
		header("Location: adminpage.html");
	}elseif ($row == 1){
		header("Location: facultypage.html");
	}else{
		echo("failed");
		}
	

?>