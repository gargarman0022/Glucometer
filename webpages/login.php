<?php
// session_abort();
if (isset($_GET['msg']))
{
  $msg=$_GET['msg'];
}
else
{
  $msg="Enter the registered email and password";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="../styling/login.css">
    <script src="../script/login.js"></script>
  </head>
  <body>
    <div class="alert alert-success" role="alert">
      <?php echo $msg ?>
    </div>
    <h1 id='init'><b>Go-Fit</b></h1>
    <div class="container">
      <div class="form">
        <div class="btn">
          <button class="loginBtn">LOG IN</button>
          <button class="signUpBtn">SIGN UP</button>
        </div>
        <form class="signUp" action="../backend/signup.php" method="POST" style="display:none">
          <div class="formGroup">
            <input type="text" placeholder="User Name" name="uname" autocomplete="off" required>
          </div>
          <div class="formGroup">
            <input type="email" placeholder="Email ID" name="email" required autocomplete="off">
          </div>
          <div class="formGroup">
            <input id='psw' type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" name="password" required autocomplete="off">
          </div>
          <div id="message">
            <p>Password must contain the following:</p>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
          </div>
          <div class="formGroup">
            <input type="password" placeholder="Confirm Password" name="confirm" required autocomplete="off">
          </div>
          <div class="checkBox">
            <input type="checkbox" name="checkbox" id="checkbox" required>
            <span class="text">I agree with term & conditions</span>
          </div>
          <div class="formGroup">
            <button type="submit" class="btn2">REGISTER</button>
          </div>
        </form>   
        <form class="login" action="../backend/login.php" method="POST" style="display:block">
          <div class="formGroup">
            <input type="email" placeholder="Email ID" name="email" required autocomplete="off">
          </div>
          <div class="formGroup">
            <input type="password" placeholder="Password" name="password" required autocomplete="off"> 
          </div>
          <div class="checkBox">
            <input type="checkbox" name="checkbox" id="checkbox">
            <span class="text">Keep me signed in on this device</span>
          </div>
          <div class="formGroup">
            <button type="submit" class="btn2">LOG IN</button>
          </div>
        </form>
      </div>
    </div>
    <script>
      var myInput = document.getElementById("psw");
      var letter = document.getElementById("letter");
      var capital = document.getElementById("capital");
      var number = document.getElementById("number");
      var length = document.getElementById("length");

      // When the user clicks on the password field, show the message box
      myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
      }

      // When the user clicks outside of the password field, hide the message box
      myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
      }

      // When the user starts to type something inside the password field
      myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) 
        {
          letter.classList.remove("invalid");
          letter.classList.add("valid");
        } 
        else 
        {
          letter.classList.remove("valid");
          letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)) 
        {
          capital.classList.remove("invalid");
          capital.classList.add("valid");
        } 
        else 
        {
          capital.classList.remove("valid");
          capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) 
        {
          number.classList.remove("invalid");
          number.classList.add("valid");
        } 
        else 
        {
          number.classList.remove("valid");
          number.classList.add("invalid");
        }

        // Validate length
        if(myInput.value.length >= 8) 
        {
          length.classList.remove("invalid");
          length.classList.add("valid");
        } 
        else 
        {
          length.classList.remove("valid");
          length.classList.add("invalid");
        }
      }
    </script>
  </body>
</html>
