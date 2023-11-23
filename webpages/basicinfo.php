<?php 
session_start();
if(!isset($_SESSION['User']))  
{
  header("Location: login.php?msg=Please login first!");
  session_destroy();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styling/basicinfo.css">
  </head>
  <body>
    <form action = "../backend/setup.php" method="POST">
      <div class="container">
        <h1> Hi <?php echo $_SESSION['User'] ?>! <br> We are happy to have you with us , let's quickly setup your profile.</h1>
        <hr>

        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="<?php echo $_SESSION['User']?>" name="name" id="name" required>

        <label for="age"><b>Age</b></label>
        <input type="number" placeholder="Enter Age" name="age" id="age" required>

        <label for="height"><b>Height (in m)</b></label>
        <input type="number" placeholder="Enter height" name="height" id="height" required>

        <label for="weight"><b>Weight (in Kg)</b></label>
        <input type="number" placeholder="Enter weight" name="weight" id="weight" required>

        <label for="Blood" class = "txt txt_bg">Blood Group:</label>
        <select class = "Blood" name = "Blood">
          <option value="JLC">Select</option>
          <option value="A-">A-</option>
          <option value="A+">A+</option>
          <option value="B-">B-</option>
          <option value="B+">B+</option>
          <option value="AB-">AB-</option>
          <option value="AB+">AB+</option>
          <option value="O-">O-</option>
          <option value="O+">O+</option>
        </select>
        <label for="Gender" style="margin-left: 4em;" class = "txt">Gender:</label>
        <select class = "Blood" name = "Gender">
          <option value="JLC">Select</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
        <br><br>
        <hr>
        <button type="submit" class="registerbtn">Submit</button>
      </div>
    </form>
  </body>
</html>