
<?php
session_start();
global $name,$age,$gen,$height,$weight,$contact;
$name = $_SESSION['name'];
$age = $_SESSION['age'];
$gen = $_SESSION['gen'];
$height = $_SESSION['height'];
$weight = $_SESSION['weight'];
$contact = $_SESSION['contact'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="report.css">
  </head>
  <body>
    <div class="brdr" style = "border:0.5em; border-style:double; margin:0.25em 0.25em 0.25em 0.25em;"> 
      <h2><u><i><b>User's Diabetes Report</b></i></u></h2>
      <br>
      <div class="row">
        <div class="column">
          <h4 style = "margin-left: 0.5em;  font-family: Garamond, serif; font-weight: 500">Patient Particulars</h4>
          <hr>
          <p>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $name; ?></p>
          <p>Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $age; ?> years</p>
          <p>Height&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $height; ?> m</p>
          <p>Weight&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $weight; ?> Kg</p>
          <p>BMI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php $hs = $height * $height; $bmi = $weight/$hs; echo round($bmi,2); ?> Kg/m^2</p>
          <p>Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $gen; ?></p>
          <p>Contact No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $contact; ?></p>
        </div>
        <div class="column">
          <h4 style = "margin-left: 0.5em;  font-family: Garamond, serif; font-weight: 500">Body Vitals</h4>
          <hr>
          <p>Blood Pressure&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $_POST["sbp"]; echo "/"; echo $_POST["dbp"];?> mmHg</p>
          <p>Heart Rate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $_POST["hr"]; ?> bpm</p>
          <p>SPO2&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $_POST["spo2"]; ?> %</p>
          <div class = "abc">
            <span>Kg/m^2 : Kilogram per meter square</span><br>
            <span>mmHg &nbsp;&nbsp;: milimeters of Mercury</span><br>
            <span>bpm &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: beats per minute</span><br>
          </div>
        </div>
      </div>
      <h4 style = "margin-left: 0.5em;  font-family: Garamond, serif; font-weight: 500">Conclusions</h4>
      <hr>
      <div style = "font-family: 'Brush Script MT', cursive;">
        <ul>
          <b>
            <li>
            The normal range of BMI is between 18.5 Kg/m^2 - 24.9 Kg/m^2<br>
            <?php
            $hh = $height*$height;
            $bmi = $weight/$hh;
            if($bmi < 18.5)
            echo "<html><i>According to our prediction, you are <span style = \"color:red;\">under weight</span>.</i></html>";
            elseif($bmi < 24.9)
            echo "<html><i>According to our prediction, you are <span style = \"color:blue;\">healthy</span>.</i></html>";
            elseif($bmi < 29.9)
            echo "<html><i>According to our prediction, you are <span style = \"color:red;\">over weight</span>.</i></html>";
            else
            echo "<html><i>According to our prediction, you are <span style = \"color:red;\">obese</span>.</i></html>";
            ?>
            </li>

            <li>
            The normal range of blood pressure is between 90/60 mmHg to 140/90 mmHg<br>
            <?php
            if($_POST['sbp'] > 140 || $_POST['dbp'] > 90)
            echo "<html><i>According to our prediction, you may have <span style = \"color:red;\">high blood pressure</span>.</i></html>";
            elseif($_POST['sbp'] < 90 || $_POST['dbp'] < 60)
            echo "<html><i>According to our prediction, you may have <span style = \"color:red;\">low blood pressure</span>.</i></html>";
            else
            echo "<html><i>According to our prediction, you may have <span style = \"color:blue;\">normal blood prsssure</span>.</i></html>";
            ?>
            </li>

            <li>
            The normal range of heart rate is between 60 bpm to 100 bpm<br>
            <?php
            if($_POST['hr'] > 100)
            echo "<html><i>According to our prediction, you have <span style = \"color:red;\">high heart rate</span>.</i></html>";
            elseif($_POST['sbp'] < 60)
            echo "<html><i>According to our prediction, you have <span style = \"color:red;\">low heart rate</span>.</i></html>";
            else
            echo "<html><i>According to our prediction, you have <span style = \"color:blue;\">normal heart rate</span>.</i></html>";
            ?>
            </li>

            <li>
            The normal range of SPO2 is between 95% to 100%<br>
            <?php
            if($_POST['spo2'] < 95)
            echo "<html><i>According to our prediction, you may have <span style = \"color:red;\">low blood oxygen level</span>.</i></html>";
            else
            echo "<html><i>According to our prediction, you have <span style = \"color:blue;\">good blood oxygen level</span>.</i></html>";
            ?>
            </li>
            <li>
            According to our ML model's prediction, you are <span style = "color:red;">likely to have diabetes</span>.<br>
            <?php
            echo "<html><i>The above result has an accuracy of 75%.</i></html>";
            ?>
            </li>
          </b>
        </ul>
      </div>
    </div>
    <i><p style = "font-size: 14px;">Disclaimer: This report is not verified by medical experts; exercise caution and discretion when interpreting its contents.</p></i>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
