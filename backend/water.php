<?php
session_start();
include('dbconnect.php');
$w = $_POST['water'];
$s = $_POST['sleep'];
$currentDate = date("Y-m-d");
$email = $_SESSION['email'];
$query = "SELECT * FROM data where Email = '$email' and Date = '$currentDate'"; 
if(mysqli_num_rows(mysqli_query($conn,$query)) == 0)
{
    $query = "INSERT INTO `data` (`Email`, `Date`, `Jogging`, `Exercise`, `Cycling`, `Playing`, `Hiking`, `Other_Phy`, `Chanting`, `Yoga`, `Meditation`, `Water`, `Sleep`, `Calories`) VALUES ('$email', '$currentDate', '0', '0', '0', '0', '0', '0', '0', '0', '0', '$w', '$s', '0');"; 
    mysqli_query($conn,$query);
}
else
{
    $query = "UPDATE data SET Water = Water + $w, Sleep = Sleep + $s WHERE Email = '$email'";
    mysqli_query($conn,$query);
}
header('Location: ../webpages/result.php');
?>