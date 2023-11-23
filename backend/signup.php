<?php
include('dbconnect.php');
$user = $_POST['uname'];
$email = $_POST['email'];
$pass = base64_encode($_POST['password']);
$conf = base64_encode($_POST['confirm']);
$query1 = "SELECT * from login_info where User_name='$user';";
$query2 = "SELECT * from login_info where Email='$email';";
echo("HEllO");
if(mysqli_num_rows(mysqli_query($conn,$query1))!==0)
{
    $msg = "User Already Present!";
}
else if(mysqli_num_rows(mysqli_query($conn,$query2))!==0)
{
    $msg = "Email already registered!";
}
else if(strcmp($pass,$conf) !==0)
{
    $msg = "Password Mismatch!";
}
else 
{
    $query_f="INSERT INTO login_info(User_name,Email,Pass) VALUES ('".$user."','".$email."','".$pass."');";
    mysqli_query($conn,$query_f);
    $msg = "Registered Successfully!";
    mysqli_close($conn);
}
header('Location: ../webpages/login.php?msg='.$msg);
?>