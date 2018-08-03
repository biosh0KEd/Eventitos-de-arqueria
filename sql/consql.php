<?php

	$server = "localhost";
	$user = "root";
	$pass = "";
	$bd = "eta";

	$con = new mysqli($server,$user,$pass,$bd) or die ("Error conexion server");
	mysqli_query($con, "SET NAMES 'utf8'") or die ("Error conexion BD");

?>