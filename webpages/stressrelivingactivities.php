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
        <title>Stress Relieving Activities</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../styling/stress.css">
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
                            <a class="nav-link active" href="stressrelivingactivities.php">Stress Relieving Activities</a>
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
            <h2>Which stress relieving activities did you performed today?</h2><br>
            <form action="../backend/stress.php" method="post">
                <div class="emoji-box" id="happy" onclick="selectEmoji('happy')">
                    <div class="emoji"><img src="../images/chanting.jpg"></div>
                    <div class="txt">Chanting</div>
                    <label for="hours_1"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class = "hours" name="hours_1"></select>
                    <label for="minutes_1"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class="minutes" name="minutes_1"></select>
                    <!-- <input type = "number" name = "hours_1" id = "hours" min = "0" max = "23" value = "0"> -->
                    <!-- <input type = "number" name = "minutes_1" id = "minutes" min = "0" max = "59" value = "0"> -->
                    <!-- <label for="time1">Time:</label>
                    <input type="time" name="time1" class="time1"> -->
                </div>

                <div class="emoji-box" id="sad" onclick="selectEmoji('sad')">
                    <div class="emoji"><img src="../images/yoga.jpg"></div>
                    <div class="txt">Yoga</div>
                    <label for="hours_2"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class = "hours" name="hours_2"></select>
                    <label for="minutes_2"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class="minutes" name="minutes_2"></select>
                </div>

                <div class="emoji-box" id="angry" onclick="selectEmoji('angry')">
                    <div class="emoji"><img src="../images/meditation.jpg"></div>
                    <div class="txt">Meditation</div>
                    <label for="hours_3"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class = "hours" name="hours_3"></select>
                    <label for="minutes_3"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class="minutes" name="minutes_3"></select>
                </div>
                <div class="emoji-box" id="cool" onclick="selectEmoji('cool')">
                    <div class="emoji"><img src="../images/Music.jpg"></div>
                    <div class="txt">Listening Music</div>
                    <label for="hours_4"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class = "hours" name="hours_4"></select>
                    <label for="minutes_4"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class="minutes" name="minutes_4"></select>
                </div>
                <div class="emoji-box" id="sleepy" onclick="selectEmoji('sleepy')">
                    <div class="emoji"><img src="../images/Dance.jpg"></div>
                    <div class="txt">Dancing</div>
                    <label for="hours_5"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class = "hours" name="hours_5"></select>
                    <label for="minutes_5"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class="minutes" name="minutes_5"></select>
                </div>
                <div class="emoji-box" id="sick" onclick="selectEmoji('sick')">
                    <div class="emoji"><img src="../images/talking.jpg"></div>
                    <div class="txt">Talking to love ones</div>
                    <label for="hours_6"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class = "hours" name="hours_6"></select>
                    <label for="minutes_6"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class="minutes" name="minutes_6"></select>
                </div>
                <div class="emoji-box" id="Disappointed" onclick="selectEmoji('Disappointed')">
                    <div class="emoji"><img src="../images/writing.jpg"></div>
                    <div class="txt">Writing</div>
                    <label for="hours_7"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class = "hours" name="hours_7"></select>
                    <label for="minutes_7"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class="minutes" name="minutes_7"></select>
                </div>
                <div class="emoji-box" id="Relieved" onclick="selectEmoji('Relieved')">
                    <div class="emoji"><img src="../images/playingin.jpg"></div>
                    <div class="txt">Playing an Instrument</div>
                    <label for="hours_8"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class = "hours" name="hours_8"></select>
                    <label for="minutes_8"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class="minutes" name="minutes_8"></select>
                </div>
                <div class="emoji-box" id="Surprised" onclick="selectEmoji('Surprised')">
                    <div class="emoji"><img src="../images/others_stress.jpg"></div>
                    <div class="txt">Others</div>
                    <label for="hours_9"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class = "hours" name="hours_9"></select>
                    <label for="minutes_9"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
                    <select class="minutes" name="minutes_9"></select>
                </div>
                <br>
                <input type = "submit" value="Submit" class="button">
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="../script/stress.js"></script>
    </body>
</html>
