<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="waterintake.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Water Intake</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=AR+One+Sans&family=Montserrat:wght@100&family=Pixelify+Sans&display=swap');
        body{
            font-family: 'AR One Sans', sans-serif;
        }
        .foorm{
          padding:20px;
          padding-top:0;
        }
        .foorm{
            margin-top:6em;
            justify-content: center;
            display: flex;
        }
        .frm{
            background-color: white;
            display:border-box;
            border:0.5em solid black;
            border-style:double;
            width:30em;
            padding-left:1em;
            padding-top:1em;
            padding-right:1em;
            padding-bottom:1em;
        }
        .box{
            padding-left: 0.5em;
            margin-top: 0.5em;
            height:2.25em;
            width:86%;
        }
        .submit{
            text-align: center;
            align-items: center;
            height:3em;
            width:7em;
            border-radius: 0.5em;
            margin-left:10em;
            background-color: #90EE90;
            border:none;
            color:white;
            margin-top: 0.5em;
        }
        .txt{
            margin-left:0.25em;
            font-size: large;
        }
        .btn{
            width:100%;
        }
        .dropdown-item{
            width:100%
        }
        span{
            font-size: large;
        }
        .btn{
            height:3em;
        }
        img{
            width:2.5em;
            height:2.5em;
            margin-right: 0.5em;
        }
        .nav-link{
            margin-right: 2em;
        }
        nav{
        font-size: 1.25em;
        height:4em;
        }
        .logout{
            height:4em;
            width:4em;
            margin-top:0 !important;
        }
    </style>
</head>
<body>
    <?php
        // session_start();
        // $conn = mysqli_connect("localhost", "root", "", "appinfo");
        // if($conn === false){
        //     die("ERROR: Could not connect. "
        //         . mysqli_connect_error());
        // }
        // $hours_1 = $_REQUEST['hours_1'];
        // $minutes_1 = $_REQUEST['minutes_1'];
        // $hours_2 = $_REQUEST['hours_2'];
        // $minutes_2 = $_REQUEST['minutes_2'];
        // $hours_3 = $_REQUEST['hours_3'];
        // $minutes_3 = $_REQUEST['minutes_3'];
        // $phone = $_SESSION['phone'];
        // $sql = "INSERT INTO menactivities VALUES (
        //     'chanting','20-10-2023',(60*$hours_1) +$minutes_1,1,$phone)";
        // if(($hours_1>0 || $minutes_1>0) && mysqli_query($conn, $sql)){
        //     echo "";
        // } 
        // // else{
        // //     echo "ERROR: Hush! Sorry $sql. "
        // //         . mysqli_error($conn);
        // // }
        // $sql_2 = "INSERT INTO menactivities VALUES (
        //     'yoga','20-10-2023',(60*$hours_2) +$minutes_2,1,$phone)";
        // if(($hours_2>0 || $minutes_2>0) && mysqli_query($conn, $sql_2)){
        //     echo "";
        // } 
        // $sql_3 = "INSERT INTO menactivities VALUES (
        //     'Meditation','20-10-2023',(60*$hours_3) +$minutes_3,1,$phone)";
        // if(($hours_3>0 || $minutes_3>0) && mysqli_query($conn, $sql_3)){
        //     echo "";
        // }
        // mysqli_close($conn);
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
                <a class="nav-link active" href="waterintake.php">Water Intake</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="physicalactivities.php">Physical Activities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="stressrelivingactivities.php">Stress Relieving Activities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="result.php">Result</a>
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
    <!-- <br> -->
    <div class="foorm">
        <form class = "frm" action="result.php">
            <label for="name" class = "txt"><span>Water Intake:</span>&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
            <img src="images/waterglass.jpg">
            <input type="number" name="name" placeholder = "Enter no. of glass of water you drink today" class="box"><br><br>
            <label for="name" class = "txt"><span>Sleep Hours:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
            <img src="images/moon.jpg">
            <input type="number" name="age" placeholder = "Enter number of hours you sleep today" class="box" min = "0" max="24"><br><br>
            <br><input type="submit" value="Submit" class="btn btn-success">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        </form>
    </div>
</body>
</html>