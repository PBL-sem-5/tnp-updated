<?php
require ("functions.php");
// $id = $_REQUEST['id'];
$erpid = $_REQUEST["erpid"];
$firstname = $_REQUEST["firstname"];
$lastname = $_REQUEST["lastname"];
$password = $_REQUEST["password"];
$gender = $_REQUEST["gender"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$doj = date("Y-m-d");

$con = dbConnect();

$edit_sql= "UPDATE `student_info` SET `erpid`='$erpid',`firstname`='$firstname',`lastname`='$lastname',`password`='$password',`gender`='$gender',`email`='$email',`phone` = '$phone'  WHERE `student_info`.`erpid`='$erpid'";


// var_dump($edit_sql);

$edit_query = $con->query($edit_sql);

// echo $edit_query;

header("Location:atables.php");
?>



