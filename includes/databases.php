<?php
	$user = "root";
	$password = "";
	$database = "login_info";
	$con = mysqli_connect("localhost", $user, $password) or die("Unable to connect");
	mysqli_select_db($con, $database);
