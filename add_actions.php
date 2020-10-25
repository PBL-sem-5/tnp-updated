<?php
/** database connection **/
require ("functions.php");

// session_start();
//echo "Hello ".$_SESSION["user_name"];

// if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
// } else {
// 	header ("Location: index.php");
// }
$erpid = $_REQUEST["erpid"];
$firstname = $_REQUEST["firstname"];
$lastname = $_REQUEST["lastname"];
$password = $_REQUEST["password"];
$gender = $_REQUEST["gender"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$doj = date("Y-m-d");
//
// echo $u_name;
// echo $pwd;
// echo $name;
// echo $gender;
// echo $phone ;
// echo $salary;
// echo $doj;

 //var_dump($add_phn);

$con = dbConnect();
// print_r($con)

$add_sql = "INSERT INTO `student_info`(`id`,`erpid`, `firstname`, `lastname`, `password`, `gender`, `email`, `phone`, `date`) VALUES (NULL,'$erpid', '$firstname', '$lastname', '$password', '$gender', '$email','$phone' ,'$doj')";
//var_dump($read_sql);

$add_data = $con->query($add_sql);
// echo "<pre>";
var_dump($add_data);
header("Location:atables.php");

?>
