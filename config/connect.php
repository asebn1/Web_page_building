<?php

	$servername = "localhost";
	$dbname = "bob";
	$username = "test";
	$password = "12341";

	$conn = mysqli_connect($servername, $username, $password);
	mysqli_select_db($conn, $dbname);
	$result = mysqli_query($conn, "SELECT * FROM data");
	if($conn){
	// 성공 
	}else{
	print "disconnect : 실패<br>";
	}
?>