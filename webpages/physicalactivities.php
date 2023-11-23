<?php 
session_start();
if(!isset($_SESSION['User']))  
{
  header("Location: login.php?msg=Please login first!");
  session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Physical Activities</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../styling/physicalactivities.css">
        <style>
            .nav-link{
                margin-right:2em;
            }
        </style>    
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
                            <a class="nav-link active" href="physicalactivities.php">Physical Activities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="stressrelivingactivities.php">Stress Relieving Activities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="result.php">Result</a>
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
        <br>
        <div class="bdy">
            <h2>Which physical activities did you performed today?</h2><br>
            <form action="../backend/physical_activity.php" method="post">
                <div class="emoji-box" id="happy" onclick="selectEmoji('happy')">
                    <div class="emoji"><img src="../images/jogging.jpg"></div> 
                    <div class="txt">Jogging</div>
                    <label for="hours_1"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class = "hours" name="hours_1"></select>
                    <label for="minutes_1"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class="minutes" name="minutes_1"></select>
                </div>

                <div class="emoji-box" id="sad" onclick="selectEmoji('sad')">
                    <div class="emoji"><img src="../images/exercise.jpg"></div>
                    <div class="txt">Exercise</div>
                    <label for="hours_2"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class = "hours" name="hours_2"></select>
                    <label for="minutes_2"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class="minutes" name="minutes_2"></select>
                </div>

                <div class="emoji-box" id="angry" onclick="selectEmoji('angry')">
                    <div class="emoji"><img src="../images/Cycling.jpg"></div>
                    <div class="txt">Cycling</div>
                    <label for="hours_3"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class = "hours" name="hours_3"></select>
                    <label for="minutes_3"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class="minutes" name="minutes_3"></select>
                </div>

                <div class="emoji-box" id="cool" onclick="selectEmoji('cool')">
                    <div class="emoji"><img src="../images/playing.jpg"></div>
                    <div class="txt">Playing</div>
                    <label for="hours_4"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class = "hours" name="hours_4"></select>
                    <label for="minutes_4"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class="minutes" name="minutes_4"></select>
                </div>

                <div class="emoji-box" id="sleepy" onclick="selectEmoji('sleepy')">
                    <div class="emoji"><img src="../images/hiking.jpg"></div>
                    <div class="txt">Hiking</div>
                    <label for="hours_5"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class = "hours" name="hours_5"></select>
                    <label for="minutes_5"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class="minutes" name="minutes_5"></select>
                </div>

                <div class="emoji-box" id="others" onclick="selectEmoji('others')">
                    <div class="emoji"><img src="../images/others.jpeg"></div>
                    <div class="txt">Others</div>
                    <label for="hours_6"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class = "hours" name="hours_6"></select>
                    <label for="minutes_6"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class="minutes" name="minutes_6"></select>
                    <!-- <label for="name"><b>Activity Name:</b></label>
                    <input type="text" name="name" class="txt1"> -->
                </div>
                
                <br>
                <input type="submit" value="Submit" class="btn btn-success button">
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="../script/physical.js"></script>
        
    </body>
</html>
