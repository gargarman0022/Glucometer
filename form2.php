<?php
session_start();
$_SESSION['name'] = $_POST['name'];
  
$_SESSION['age']
        = $_POST['age'];
  
$_SESSION['gen']
        = $_POST['gen'];
$_SESSION['height']
        = $_POST['height'];
$_SESSION['weight']
        = $_POST['weight'];
$_SESSION['contact']
        = $_POST['contact'];
           
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
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
  padding: 16px 30px 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  text-align: left;
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
</style>
</head>
<body>

<form action="report.php" method="post">
  <div class="container">
    <h1>Body Vitals</h1>
    <p>Please fill in the required information.</p>
    <hr>

    <label for="sbp"><b>Blood Pressure (in mmHg)</b></label>
    <input type="number" placeholder="Enter Systolic Blood Pressure (in milimeters of mercury)" name="sbp" id="sbp" required>
    <input type="number" placeholder="Enter Diastolic Blood Pressure (in milimeters of mercury)" name="dbp" id="dbp" required>

    <label for="hr"><b>Heart Rate (in bpm)</b></label>
    <input type="number" placeholder="Enter Heart Rate (in beats per minute)" name="hr" id="hr" required>

    <label for="spo2"><b>SPO2</b></label>
    <input type="number" placeholder="Enter SPO2" name="spo2" id="spo2" required>

<!--     <label for="bgl"><b>Blood Glucose Level (in mg/dL)</b></label>
    <input type="number" placeholder="Enter Blood Glucose Level" name="bgl" id="bgl" required> -->
    <hr>
    <button type="submit" class="registerbtn">Submit</button>
  </div>
</form>

</body>
</html>