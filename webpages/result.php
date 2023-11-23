<?php
    session_start();
    if(!isset($_SESSION['User']))  
    {
        header("Location: login.php?msg=Please login first!");
        session_destroy();
    }
    include('../backend/dbconnect.php');
    $email = $_SESSION['email'];
    $query = "SELECT SUM(Jogging) FROM data WHERE Email = '$email';";
    $j = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT SUM(Exercise) FROM data WHERE Email = '$email';";
    $e = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT SUM(Cycling) FROM data WHERE Email = '$email';";
    $c = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT SUM(Playing) FROM data WHERE Email = '$email';";
    $p = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT SUM(Hiking) FROM data WHERE Email= '$email';";
    $h = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT SUM(Other_Phy) FROM data WHERE Email = '$email';";
    $o = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT SUM(Chanting) FROM data WHERE Email = '$email';";
    $c = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT SUM(Yoga) FROM data WHERE Email = '$email';";
    $y = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT SUM(Meditation) FROM data WHERE Email = '$email';";
    $m = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT SUM(Water) FROM data WHERE Email = '$email';";
    $water = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT SUM(Sleep) FROM data WHERE Email = '$email';";
    $sleep = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT SUM(Calories) FROM data WHERE Email = '$email';";
    $cal = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT COUNT(*) FROM data WHERE Email = '$email';";
    $cnt = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $tot = $j + $e + $c + $p + $h + $o;
    $avg = $tot / $cnt;
    $j = $j / $cnt;
    $e = $e / $cnt;
    $c = $c / $cnt;
    $p = $p / $cnt;
    $h = $h / $cnt;
    $o = $o / $cnt;
    $c = $c / $cnt;
    $y = $y / $cnt;
    $m = $m / $cnt;
    $water = $water / $cnt;
    $sleep = $sleep / $cnt;
    $cal = $cal / $cnt;
    $currentDate = date("Y-m-d");
    $email = $_SESSION['email'];
    $query = "SELECT Jogging FROM data where Email = '$email' and Date = '$currentDate';"; 
    $j1 = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT Exercise FROM data where Email = '$email' and Date = '$currentDate';"; 
    $e1 = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT Cycling FROM data where Email = '$email' and Date = '$currentDate';"; 
    $c1 = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT Playing FROM data where Email = '$email' and Date = '$currentDate';"; 
    $p1 = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT Hiking FROM data where Email = '$email' and Date = '$currentDate';"; 
    $h1 = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT Other_Phy FROM data where Email = '$email' and Date = '$currentDate';"; 
    $o1 = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT Chanting FROM data where Email = '$email' and Date = '$currentDate';"; 
    $c1 = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT Yoga FROM data where Email = '$email' and Date = '$currentDate';"; 
    $y1 = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT Meditation FROM data where Email = '$email' and Date = '$currentDate';"; 
    $m1 = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT Water FROM data where Email = '$email' and Date = '$currentDate';"; 
    $water1 = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT Sleep FROM data where Email = '$email' and Date = '$currentDate';"; 
    $sleep1 = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $query = "SELECT Calories FROM data where Email = '$email' and Date = '$currentDate';"; 
    $cal1 = mysqli_fetch_array(mysqli_query($conn,$query))[0];
    $tot = $j1 + $e1 + $c1 + $p1 + $h1 + $o1;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../styling/result.css">
        <title>Result</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="dietchoices.php">Diet Choices</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="waterintake.php">Water Intake</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sleep.php">Sleep</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="physicalactivities.php">Physical Activities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="stressrelivingactivities.php">Stress Relieving Activities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="result.php">Result</a>
                        </li>
                    </ul>
                    <span class = "navbar-brand" href = "#">
                        Hello, <?php echo $_SESSION['User'] ?>
                        <a href = "../backend/logout.php">
                            <img src = "../images/logout.png" class="logout">
                        </a>
                    </span>
                </div>
            </div>
        </nav>
        <div class="bdy">
            <div class="row">
                <div class="card">
                    <img class="card-img-top" src="../images/jogging.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Jogging</h5>
                        <p class="txt">Average Jogging time : <?php echo  "<span><b>$j</b></span>";?><span>&nbsp;minutes</span></p>
                        <p class="txt">Today's Jogging time : <?php echo  "<span><b>$j1</b></span>";?><span>&nbsp;minutes</span></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../images/exercise.jpg" alt="Card image cap" width="20px">
                    <div class="card-body">
                        <h5 class="card-title">Exercise</h5>
                        <p class="txt">Average Exercise time : <?php echo  "<span><b>$e</b></span>";?><span>&nbsp;minutes</span></p>
                        <p class="txt txt1">Today's Exercise time : <?php echo  "<span><b>$e1</b></span>";?><span>&nbsp;minutes</span></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../images/Cycling.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cycling</h5>
                        <p class="txt">Average Cycling time : <?php echo  "<span><b>$c</b></span>";?><span>&nbsp;minutes</span></p>
                        <p class="txt txt1">Today's Cycling time : <?php echo  "<span><b>$c1</b></span>";?><span>&nbsp;minutes</span></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <img class="card-img-top" src="../images/playing.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Playing</h5>
                        <p class="txt">Average Playing time : <?php echo  "<span><b>$p</b></span>";?><span>&nbsp;minutes</span></p>
                        <p class="txt txt1">Today's Playing time : <?php echo  "<span><b>$p1</b></span>";?><span>&nbsp;minutes</span></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../images/hiking.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Hiking</h5>
                        <p class="txt">Average Hiking time : <?php echo  "<span><b>$h</b></span>";?><span>&nbsp;minutes</span></p>
                        <p class="txt txt1">Today's Hiking time : <?php echo  "<span><b>$h1</b></span>";?><span>&nbsp;minutes</span></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../images/others.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">All physical activities</h5>
                        <p class="txt">Average physical activities time : <?php echo  "<span><b>$avg</b></span>";?><span>&nbsp;minutes</span></p>
                        <p class="txt txt1">Today's physical activities time : <?php echo  "<span><b>$tot</b></span>";?><span>&nbsp;minutes</span></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <img class="card-img-top" src="../images/chanting.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Chanting</h5>
                        <p class="txt">Average Chanting time : <?php echo  "<span><b>$c</b></span>";?><span>&nbsp;minutes</span></p>
                        <p class="txt txt1">Today's Chanting time : <?php echo  "<span><b>$c1</b></span>";?><span>&nbsp;minutes</span></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../images/yoga.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Yoga</h5>
                        <p class="txt">Average Yoga time : <?php echo  "<span><b>$y</b></span>";?><span>&nbsp;minutes</span></p>
                        <p class="txt txt1">Today's Yoga time : <?php echo  "<span><b>$y1</b></span>";?><span>&nbsp;minutes</span></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../images/meditation.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Meditation</h5>
                        <p class="txt">Average Meditation time : <?php echo  "<span><b>$m</b></span>";?><span>&nbsp;minutes</span></p>
                        <p class="txt txt1">Today's Meditation time : <?php echo  "<span><b>$m1</b></span>";?><span>&nbsp;minutes</span></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <img class="card-img-top" src="../images/water.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Water</h5>
                        <p class="txt">Average glasses of water : <?php echo  "<span><b>$water</b></span>";?><span>&nbsp;glasses</span></p>
                        <p class="txt txt1">Today's glasss of water : <?php echo  "<span><b>$water1</b></span>";?><span>&nbsp;glasses</span></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../images/sleep.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Sleep</h5>
                        <p class="txt">Average sleep time : <?php echo  "<span><b>$sleep</b></span>";?><span>&nbsp;hours</span></p>
                        <p class="txt txt1">Today's sleep time : <?php echo  "<span><b>$sleep1</b></span>";?><span>&nbsp;hours</span></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../images/calories.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Calories</h5>
                        <p class="txt">Average calories consumed : <?php echo  "<span><b>$cal</b></span>";?><span>&nbsp;Kcal</span></p>
                        <p class="txt txt1">Today's calories consumed : <?php echo  "<span><b>$cal1</b></span>";?><span>&nbsp;Kcal</span></p>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
