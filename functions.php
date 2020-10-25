<?php
function dbConnect() {
	//$servername = "localhost";
	//$username = "root";
	//$password = "";
	//$db = "project";
	//$con = mysqli_connect("$servername", "$username", "$password", "$db");
	$con = mysqli_connect("localhost", "root", "12345", "tnp");
	if($con->connect_error){
		echo "connection failed". mysqli_connect_error();
	} else {
		 //echo "connected";
		return $con;
	}

}
// $res = dbConnect();
// print_r($res);
?>
