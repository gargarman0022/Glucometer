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
    <link rel="stylesheet" href="../styling/dietchoices.css">
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
              <a class="nav-link active" href="dietchoices.php">Diet Choices</a>
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
              <a class="nav-link" href="demo.php">Result</a>
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
      <h2>What kind of Diet you have taken today?</h2><br>
      <div class="emoji-box" id="Fruits" onclick="selectEmoji('Fruits')"><div class="emoji"><img src="../images/fruits.jpg"></div> <span class="txt">Fruits</span></div>
      <div class="emoji-box" id="Soft-drinks" onclick="selectEmoji('Soft-drinks')"><div class="emoji"><img src="../images/soft-drinks.jpg"></div> <span class="txt">Soft Drinks</span></div>
      <div class="emoji-box" id="Chips" onclick="selectEmoji('Chips')"><div class="emoji"><img src="../images/chips.jpg"></div> <span class="txt">Chips</span></div>
      <div class="emoji-box" id="Chappatis" onclick="selectEmoji('Chappatis')"><div class="emoji"><img src="../images/chappatis.jpeg"></div> <span class="txt">Chappatis</span></div>
      <div class="emoji-box" id="Cereals" onclick="selectEmoji('Cereals')"><div class="emoji"><img src="../images/cereals.jpg"></div> <span class="txt">Cereals</span></div>
      <div class="emoji-box" id="Rice" onclick="selectEmoji('Rice')"><div class="emoji"><img src="../images/Rice.jpg"></div> <span class="txt">Rice</span></div>
      <div class="emoji-box" id="Green-Vegetables" onclick="selectEmoji('Green-Vegetables')"><div class="emoji"><img src="../images/vegetables.jpg"></div> <span class="txt">Green Vegetables</span></div>
      <div class="emoji-box" id="Eggs" onclick="selectEmoji('Eggs')"><div class="emoji"><img src="../images/Eggs.jpeg"></div> <span class="txt">Eggs</span></div>
      <div class="emoji-box" id="Chicken" onclick="selectEmoji('Chicken')"><div class="emoji"><img src="../images/Chicken.jpeg"></div> <span class="txt">Chicken</span></div><br>
      <label for="calories"><h4>Number of Calories you consumed :</h4></label>
      <input type="number" name="calories" class="calories" value="0">

      <br><button class="button" onclick="location.href='result.php';">Submit</button>
    </div>

    <script>
      function selectEmoji(emoji) {
        if(document.getElementById(emoji).style.border=="2px solid red"){
            document.getElementById(emoji).style.border="";
        }
        else{
            document.getElementById(emoji).style.border = "2px solid red";
        }
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
