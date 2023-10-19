<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://fonts.googleapis.com/css2?family=AR+One+Sans&family=Pixelify+Sans&display=swap" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=AR+One+Sans&family=Montserrat:wght@100&family=Pixelify+Sans&display=swap');
        body{
            font-family: 'AR One Sans', sans-serif;
        }
        .bdy{
            padding:20px;
            padding-top:0;
        }
        .txt{
            /* font-family: 'Montserrat', sans-serif; */
            /* font-family: 'Pixelify Sans', cursive; */
            font-size: 1em;
        }
        .card{
            display:inline-block;
            width:30%;
            margin-right:1em;
            margin-left:1em;
            /* margin-bottom:2em; */
        }
        .card-img-top{
            width:100%;
            height:20em;
        }
        .row{
            padding:1em;
            /* margin-left:3em; */
            justify-content:center;
        }
        .nav-link{
            margin-right: 2em;
        }
        nav{
            height:4em;
            font-size: 1.25em;
        }
        .logout{
            height:4em;
            width:4em;
            margin-top:0 !important;
        }
        /* .txt1{
            display:inline-block;
        } */
    </style>
    <title>Result</title>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "appinfo");
        session_start();
        $phone = $_SESSION['phone'];
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $total_time = 0;
        $sql = "SELECT COUNT(DISTINCT phone) FROM phyactivities where grpid = 1";
        $grpmem = $conn->query($sql);
        $grpmem = $grpmem->fetch_array();
        $grpmem = intval($grpmem[0]);
        $sql = "SELECT SUM(tim) FROM phyactivities where grpid=1 and activity='jogging' and dat='20-10-2023'";
        $jogtim = $conn->query($sql);
        $jogtim = $jogtim->fetch_array();
        $jogtim = intval($jogtim[0]);
        $total_time = $total_time + $jogtim;
        $jogtim = ($jogtim/$grpmem);
        $sql = "SELECT SUM(tim) FROM phyactivities where grpid=1 and activity='exercise' and dat='20-10-2023'";
        $extim = $conn->query($sql);
        $extim = $extim->fetch_array();
        $extim = intval($extim[0]);
        $total_time = $total_time + $extim;
        $extim = ($extim/$grpmem);
        $sql = "SELECT SUM(tim) FROM phyactivities where grpid=1 and activity='cycling' and dat='20-10-2023'";
        $cytim = $conn->query($sql);
        $cytim = $cytim->fetch_array();
        $cytim = intval($cytim[0]);
        $total_time = $total_time + $cytim;
        $cytim = ($cytim/$grpmem);
        $sql = "SELECT SUM(tim) FROM phyactivities where grpid=1 and activity='playing' and dat='20-10-2023'";
        $pltim = $conn->query($sql);
        $pltim = $pltim->fetch_array();
        $pltim = intval($pltim[0]);
        $total_time = $total_time + $pltim;
        $pltim = ($pltim/$grpmem);
        $sql = "SELECT SUM(tim) FROM phyactivities where grpid=1 and activity='hiking' and dat='20-10-2023'";
        $hiktim = $conn->query($sql);
        $hiktim = $hiktim->fetch_array();
        $hiktim = intval($hiktim[0]);
        $total_time = $total_time + $hiktim;
        $hiktim = ($hiktim/$grpmem);
        $sql = "SELECT SUM(tim) FROM phyactivities where grpid=1 and activity='others' and dat='20-10-2023'";
        $ottim = $conn->query($sql);
        $ottim = $ottim->fetch_array();
        $ottim = intval($ottim[0]);
        $total_time = $total_time + $ottim;
        $ottim = ($ottim/$grpmem);
        $total_time = ($total_time/$grpmem);
        $total_time1 = 0;
        $sql = "SELECT SUM(tim) FROM menactivities where grpid=1 and activity='chanting' and dat='20-10-2023'";
        $chtim = $conn->query($sql);
        $chtim = $chtim->fetch_array();
        $chtim = intval($chtim[0]);
        $total_time1 = $total_time1 + $chtim;
        $chtim = ($chtim/$grpmem);
        $sql = "SELECT SUM(tim) FROM menactivities where grpid=1 and activity='yoga' and dat='20-10-2023'";
        $yotim = $conn->query($sql);
        $yotim = $yotim->fetch_array();
        $yotim = intval($yotim[0]);
        $total_time1 = $total_time1 + $yotim;
        $yotim = ($yotim/$grpmem);
        $sql = "SELECT SUM(tim) FROM menactivities where grpid=1 and activity='meditation' and dat='20-10-2023'";
        $metim = $conn->query($sql);
        $metim = $metim->fetch_array();
        $metim = intval($metim[0]);
        $total_time1 = $total_time1 + $metim;
        $metim = ($metim/$grpmem);
        $total_time1 = ($total_time1/$grpmem);
        $total_time2 = 0;
        $sql = "SELECT SUM(tim) FROM phyactivities where phone=$phone and activity='jogging' and dat='20-10-2023'";
        $jogtim1 = $conn->query($sql);
        $jogtim1 = $jogtim1->fetch_array();
        $jogtim1 = intval($jogtim1[0]);
        $total_time2 = $total_time2 + $jogtim1;
        $jogtim1 = ($jogtim1/$grpmem);
        $sql = "SELECT SUM(tim) FROM phyactivities where phone=$phone and activity='exercise' and dat='20-10-2023'";
        $extim1 = $conn->query($sql);
        $extim1 = $extim1->fetch_array();
        $extim1 = intval($extim1[0]);
        $total_time2 = $total_time2 + $extim1;
        $extim1 = ($extim1/$grpmem);
        $sql = "SELECT SUM(tim) FROM phyactivities where phone=$phone and activity='cycling' and dat='20-10-2023'";
        $cytim1 = $conn->query($sql);
        $cytim1 = $cytim1->fetch_array();
        $cytim1 = intval($cytim1[0]);
        $total_time2 = $total_time2 + $cytim1;
        $cytim = ($cytim/$grpmem);
        $sql = "SELECT SUM(tim) FROM phyactivities where phone=$phone and activity='playing' and dat='20-10-2023'";
        $pltim1 = $conn->query($sql);
        $pltim1 = $pltim1->fetch_array();
        $pltim1 = intval($pltim1[0]);
        $total_time2 = $total_time2 + $pltim1;
        $pltim = ($pltim1/$grpmem);
        $sql = "SELECT SUM(tim) FROM phyactivities where phone=$phone and activity='hiking' and dat='20-10-2023'";
        $hiktim1 = $conn->query($sql);
        $hiktim1 = $hiktim1->fetch_array();
        $hiktim1 = intval($hiktim1[0]);
        $total_time2 = $total_time2 + $hiktim1;
        $hiktim1 = ($hiktim1/$grpmem);
        $sql = "SELECT SUM(tim) FROM phyactivities where phone=$phone and activity='others' and dat='20-10-2023'";
        $ottim1 = $conn->query($sql);
        $ottim1 = $ottim1->fetch_array();
        $ottim1 = intval($ottim1[0]);
        $total_time2 = $total_time2 + $ottim1;
        $ottim1 = ($ottim1/$grpmem);
        $total_time2 = ($total_time2/$grpmem);
        $total_time3 = 0;
        $sql = "SELECT SUM(tim) FROM menactivities where phone=$phone and activity='chanting' and dat='20-10-2023'";
        $chtim1 = $conn->query($sql);
        $chtim1 = $chtim1->fetch_array();
        $chtim1 = intval($chtim1[0]);
        $total_time3 = $total_time3 + $chtim1;
        $chtim1 = ($chtim1/$grpmem);
        $sql = "SELECT SUM(tim) FROM menactivities where phone=$phone and activity='yoga' and dat='20-10-2023'";
        $yotim1 = $conn->query($sql);
        $yotim1 = $yotim1->fetch_array();
        $yotim1 = intval($yotim1[0]);
        $total_time3 = $total_time3 + $yotim1;
        $yotim1 = ($yotim1/$grpmem);
        $sql = "SELECT SUM(tim) FROM menactivities where phone=$phone and activity='meditation' and dat='20-10-2023'";
        $metim1 = $conn->query($sql);
        $metim1 = $metim1->fetch_array();
        $metim1 = intval($metim1[0]);
        $total_time3 = $total_time3 + $metim1;
        $metim1 = ($metim1/$grpmem);
        $total_time3 = ($total_time3/$grpmem);
    ?>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#">Navbar</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Diet Choices</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="dietchoices.html">Diet Choices</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="waterintake.php">Water Intake</a>
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
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li> -->
            </ul>
            <span class = "navbar-brand" href = "#">
                Hello, Mohit
                <a href = "login_signup.html">
                    <img src = "images/logout.png" class="logout">
                </a>
            </span>
            <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          </div>
        </div>
    </nav>
    <!-- <div class="box"> -->
    <div class="bdy">
    <div class="row">
        <div class="card">
            <img class="card-img-top" src="images/jogging.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Jogging</h5>
                <p class="txt">Average time of group:<?php echo  "<span>$jogtim</span>";?><span>&nbsp;minutes</span></p>
                <p class="txt">Your Jogging time:<?php echo  "<span>$jogtim1</span>";?><span>&nbsp;minutes</span></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="images/Exercise.jpg" alt="Card image cap" width="20px">
            <div class="card-body">
                <h5 class="card-title">Exercise</h5>
                <p class="txt">Average Exercise time of group:<?php echo  "<span>$extim</span>";?><span>&nbsp;minutes</span></p>
                <p class="txt txt1">Your Exercise time:<?php echo  "<span>$extim1</span>";?><span>&nbsp;minutes</span></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="images/cycling.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Cycling</h5>
                <p class="txt">Average Cycling time of group:<?php echo  "<span>$cytim</span>";?><span>&nbsp;minutes</span></p>
                <p class="txt txt1">Your Cycling time:<?php echo  "<span>$cytim1</span>";?><span>&nbsp;minutes</span></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <img class="card-img-top" src="images/playing.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Playing</h5>
                <p class="txt">Average Playing time of group:<?php echo  "<span>$pltim</span>";?><span>&nbsp;minutes</span></p>
                <p class="txt txt1">Your Playing time:<?php echo  "<span>$pltim1</span>";?><span>&nbsp;minutes</span></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="images/hiking.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Hiking</h5>
                <p class="txt">Average Hiking time of group:<?php echo  "<span>$hiktim</span>";?><span>&nbsp;minutes</span></p>
                <p class="txt txt1">Your Hiking time:<?php echo  "<span>$hiktim1</span>";?><span>&nbsp;minutes</span></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="images/others.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">All physical activities</h5>
                <p class="txt">Average physical activities time of group:<?php echo  "<span>$total_time</span>";?><span>&nbsp;minutes</span></p>
                <p class="txt txt1">Your physical activities time:<?php echo  "<span>$total_time2</span>";?><span>&nbsp;minutes</span></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <img class="card-img-top" src="images/chanting.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Chanting</h5>
                <p class="txt">Average Chanting time of group:<?php echo  "<span>$chtim</span>";?><span>&nbsp;minutes</span></p>
                <p class="txt txt1">Your Chanting time:<?php echo  "<span>$chtim1</span>";?><span>&nbsp;minutes</span></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="images/yoga.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Yoga</h5>
                <p class="txt">Average Yoga time of group:<?php echo  "<span>$yotim</span>";?><span>&nbsp;minutes</span></p>
                <p class="txt txt1">Your Yoga time:<?php echo  "<span>$yotim1</span>";?><span>&nbsp;minutes</span></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="images/meditation.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Meditation</h5>
                <p class="txt">Average Meditation time of group:<?php echo  "<span>$metim</span>";?><span>&nbsp;minutes</span></p>
                <p class="txt txt1">Your Meditation time:<?php echo  "<span>$metim1</span>";?><span>&nbsp;minutes</span></p>
            </div>
        </div>
    </div>
    </div>        
    <!-- </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>