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
    <title>How Are You Feeling Today?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../styling/emotions.css">
    <script src="../script/emotions.js"></script>
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
      <h1>How were you feeling before the activity?</h1><br>
      <button class="emoji-box" id="happy" onclick="location.href='emotions_aa.php';"><div class="emoji">😊</div> <span class="txt">Happy</span></button>
      <button class="emoji-box" id="sad" onclick="location.href='emotions_aa.php';"><div class="emoji">😢</div> <span class="txt">Sad</span></button>
      <button class="emoji-box" id="angry" onclick="location.href='emotions_aa.php';"><div class="emoji">😡</div> <span class="txt">Angry</span></button>
      <button class="emoji-box" id="cool" onclick="location.href='emotions_aa.php';"><div class="emoji">😎</div> <span class="txt">Cool</span></button>
      <button class="emoji-box" id="sleepy" onclick="location.href='emotions_aa.php';"><div class="emoji">😴</div> <span class="txt">Sleepy</span></button>
      <button class="emoji-box" id="Sick" onclick="location.href='emotions_aa.php';"><div class="emoji">🤒</div> <span class="txt">Sick</span></button>
      <button class="emoji-box" id="Disappointed" onclick="location.href='emotions_aa.php';"><div class="emoji">😞</div> <span class="txt">Disappointed</span></button>
      <button class="emoji-box" id="Relieved" onclick="location.href='emotions_aa.php';"><div class="emoji">😌</div> <span class="txt">Relieved</span></button>
      <button class="emoji-box" id="Surprised" onclick="location.href='emotions_aa.php';"><div class="emoji">🫥</div> <span class="txt">Surprised</span></button>
      <button class="emoji-box" id="Nervous" onclick="location.href='emotions_aa.php';"><div class="emoji">😬</div> <span class="txt">Nervous</span></button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>