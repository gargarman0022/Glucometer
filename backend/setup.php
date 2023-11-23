<?php
session_start();
include('dbconnect.php');
$name = $_POST['name'];
$age = $_POST['age'];
$ht = $_POST['height'];
$wt = $_POST['weight'];
$bg = $_POST['Blood'];
$gen = $_POST['Gender'];
$email = $_SESSION['email'];
$query="INSERT INTO details(Email,Name,Age,Height,Weight,Blood_Group,Gender) VALUES ('".$email."','".$name."',".$age.",".$ht.",".$wt.",'".$bg."','".$gen."');";
mysqli_query($conn,$query);
mysqli_close($conn);
header('Location: ../webpages/dietchoices.php');
?>