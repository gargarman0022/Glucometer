<?php
include('dbconnect.php');
$email = $_POST['email'];
$pass = base64_encode($_POST['password']);
$query1 = "SELECT * from login_info where Email='$email';";
echo "1";
if(mysqli_num_rows(mysqli_query($conn,$query1)) !== 0)
{
    echo "2";
    if(strcmp($pass,mysqli_fetch_array(mysqli_query($conn,$query1))[2]) == 0) 
    {
        echo "3";
        session_start();
        $msg = "Logged In Successfully";
        $_SESSION['User'] = mysqli_fetch_array(mysqli_query($conn,$query1))[0];
        $_SESSION['email'] = mysqli_fetch_array(mysqli_query($conn,$query1))[1];
        $_SESSION['Pass'] = mysqli_fetch_array(mysqli_query($conn,$query1))[2];
        $query1 = "SELECT * from details where Email='$email';";
        echo "4";
        if(mysqli_num_rows(mysqli_query($conn,$query1)) == 0)
        {
            echo "5";
            header('Location: ../webpages/basicinfo.php');
        }
        else
        {
            echo "5";
            $currentDate = date("Y-m-d");
            $email = $_SESSION['email'];
            $query = "SELECT * FROM data where Email = '$email' and Date = '$currentDate'"; 
            if(mysqli_num_rows(mysqli_query($conn,$query)) == 0)
            {
                echo "6";
                $query = "INSERT INTO `data` (`Email`, `Date`, `Jogging`, `Exercise`, `Cycling`, `Playing`, `Hiking`, `Other_Phy`, `Chanting`, `Yoga`, `Meditation`, `Water`, `Sleep`, `Calories`) VALUES ('$email', '$currentDate', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');"; 
                mysqli_query($conn,$query);
                echo "7";
            }
            header('Location: ../webpages/dietchoices.php');
        }
    }
    else
    {
        $msg = "Incorrect Password";
        header('Location: ../webpages/login.php?msg='.$msg);
    }
}
else
{
    $msg = "User not registered";
    header('Location: ../webpages/login.php?msg='.$msg);
}
?>