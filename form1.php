<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password], input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.txt{
    margin-left:0.25em;
    /* font-size: Large; */
    font-weight: bold;
    /* margin-bottom: 2em; */
}
/* .txt_bg{
    margin-left:1.5em;
} */
.Blood{
    margin-left: 1.5em;
    height:2.5em;
    width:12em;
    margin-bottom: 1.5em;
    margin-right:1.5 em;  
}
</style>
</head>
<body>
<?php
session_start();
$_SESSION['phone'] = $_REQUEST['phone'];
?>

<form action="dietchoices.html">
  <div class="container">
    <h1>We are happy to have you with us , let's quickly setup your profile.</h1>
    <!-- <p>Please fill in the required information.</p> -->
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="age"><b>Age</b></label>
    <input type="number" placeholder="Enter Age" name="age" id="age" required>

    <!-- <label for="gen"><b>Gender</b></label>
    <br>
    <br>
    <input type="radio" name="gen" id="gen" required><b>Male</b>
    <input type="radio" name="gen" id="gen" required><b>Female</b>
    <br>
    <br> -->

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
    <!-- <label for="contact"><b>Contact</b></label>
    <input type="number" placeholder="Enter Contact" name="contact" id="contact" required> -->

    <label for="sbp"><b>Blood Pressure</b></label>
    <input type="number" placeholder="Enter Systolic Blood Pressure" name="sbp" id="sbp" required>
    <input type="number" placeholder="Enter Diastolic Blood Pressure" name="dbp" id="dbp" required>

    <label for="hr"><b>Heart Rate</b></label>
    <input type="number" placeholder="Enter Heart Rate" name="hr" id="hr" required>

    <label for="spo2"><b>SPO2</b></label>
    <input type="number" placeholder="Enter SPO2" name="spo2" id="spo2" required>

    <label for="bgl"><b>Blood Glucose Level</b></label>
    <input type="number" placeholder="Enter Blood Glucose Level" name="bgl" id="bgl" required>
    <hr>
    <button type="submit" class="registerbtn">Submit</button>
  </div>
</form>

</body>
</html>