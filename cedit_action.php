<?php
require ("functions.php");
$id = $_REQUEST['id'];
echo $id;
$name = $_REQUEST["name"];
$date = $_REQUEST["date"];
$instructor = $_REQUEST["instructor"];


$con = dbConnect();

$edit_sql= "UPDATE `event_info` SET `name`='$name',`date`='$date',`instructor`='$instructor'  WHERE `event_info`.`id`='$id'";


// var_dump($edit_sql);

$edit_query = $con->query($edit_sql);

// echo $edit_query;

//header("Location:ctables.php");
?>



