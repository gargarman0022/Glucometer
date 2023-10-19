<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="basicinfo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION['phone']=$_REQUEST['phone'];
    ?>
    <form class = "frm" action="dietchoices.html">
        <h3>We are happy to have you with us , let's quickly setup your profile.</h3><br>
        <label for="name" class = "txt">Name:&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="name" placeholder = "Enter your name" class="box"><br><br>
        <label for="name" class = "txt">Date of Birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="age" placeholder = "Enter your DOB(DD-MM-YYYY)" class="box"><br><br>
        <label for="age" class = "txt">Height:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="height" placeholder = "Enter your Height(in m)" class="box"><br><br>
        <label for="height" class = "txt">Weight:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="number" name="name" placeholder = "Enter your Weight(in Kg)"class="box"> <br><br>
        <!-- <label>Blood Group:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br> -->
        
        <div class="dropdown">
            <!-- <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Please Select Your Blood Group
            </a>
          
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" value = "">A+</a></li>
              <li><a class="dropdown-item" href="#">A-</a></li>
              <li><a class="dropdown-item" href="#">B+</a></li>
              <li><a class="dropdown-item" href="#">B+</a></li>
              <li><a class="dropdown-item" href="#">B-</a></li>
              <li><a class="dropdown-item" href="#">O+</a></li>
              <li><a class="dropdown-item" href="#">O-</a></li>
              <li><a class="dropdown-item" href="#">AB+</a></li>
              <li><a class="dropdown-item" href="#">AB-</a></li>
            </ul> -->
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
                <option value="not">Choose not to disclose</option>
            </select>
            <label for="name" class = "txt">Systolic Blood Pressure:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="name" placeholder = "Enter your name" class="box"><br><br>
            <label for="name" class = "txt">Diastolic Blood Pressure:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="number" name="age" placeholder = "Enter your Age" class="box"><br><br>
            <label for="age" class = "txt">SPO2:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="height" placeholder = "Enter your Height(in m)" class="box"><br><br>
            <label for="height" class = "txt">Heart Rate:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="number" name="name" placeholder = "Enter your Weight(in Kg)"class="box"> <br><br>
            <label for="blood group" class = "txt">Blood Glucose Level:</label>
            <input type="text" name="blood group" placeholder = "Enter your Blood group" class="box"><br><br>
            <label for="Diabetes" class = "txt txt_db">Are you Diabetic:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes">
                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="No">
                <label class="form-check-label" for="inlineCheckbox2">No</label>
            </div>
              <!-- <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
              </div>  -->
              <!-- <br><br> -->
        </div><br>
        <!-- <label for="country">Country: </label> -->
        <!-- <select name="country" id="country">
            <option>Select an option</option>
            <option value="nepal">Nepal</option>
            <option value="usa">USA</option>
            <option value="australia">Australia</option>
        </select><br><br>
        <label for="message">Message:</label><br>
        <textarea name="message" id="message" cols="30" rows="4"></textarea><br><br>
        <input type="checkbox" name="newsletter" id="newsletter">
        <label for="newsletter">Subscribe?</label><br><br> -->
        <input type="submit" value="Submit" class = "submit">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </form>
</body>
</html>