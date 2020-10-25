<?php
/** database connection **/
require ("functions.php");

// session_start();
//echo "Hello ".$_SESSION["user_name"];

// if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
// } else {
// 	header ("Location: index.php");
// }

$name = $_REQUEST["name"];
$date = $_REQUEST["date"];
$instructor = $_REQUEST["instructor"];

//$doj = date("Y-m-d");
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

$add_sql = "INSERT INTO `event_info`(`id`,`name`, `date`, `instructor`) VALUES (NULL,'$name', '$date', '$instructor')";
//var_dump($read_sql);

$add_data = $con->query($add_sql);
// echo "<pre>";
var_dump($add_data);
header("Location:ctables.php");

?>
