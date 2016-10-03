<?php
	$dbconnect = mysqli_connect("localhost", "root", "", "chictutorial");
	if(mysqli_connect_errno()) {
		echo "Connection failed:".mysqli_connect_error();
		exit;
	}

?>