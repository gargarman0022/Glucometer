<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stress Relieving Activities</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=AR+One+Sans&family=Montserrat:wght@100&family=Pixelify+Sans&display=swap');
        body{
            font-family: 'AR One Sans', sans-serif;
        }
        body {
            /* font-family: Arial, sans-serif; */
            text-align: center;
        }
        .bdy{           
            padding: 20px;
            padding-top:0;
        }
        h1 {
            font-size: 3em;
        }
        .emoji-box {
            /* font-size:3rem; */
            /* user-select: none; */
            cursor: pointer;
            border:1em solid black;
            display: inline-block;
            width: 25em;
            margin: 10px;
            font-size: 1em;
            text-align: center;
            line-height: 100px;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 2em;
            margin-bottom: 2em;
        }
        .emoji{
            user-select: none;
        }
        img{
            margin-top:1em;
            /* height:5em; */
            width:90%;
            height:15em;
        }
        .txt{
            font-size: 1.5em;
            user-select: none;
            margin-bottom:-1em;
        }
        .button{
            width:6em;
            height:3em;
            margin-top:1em;
            border-radius: 12px;
            border-color: rgb(24, 251, 24);
            border-width: 0px;
            background-color: rgb(24, 251, 24);
        }
        #hours{
            margin-right:2em;
        }
        .hours{
            margin-right:2em;
            /* width:100%; */
            height:2em;
        }
        .minutes{
            height:2em;
        }
        #minutes{
            width:4em;
            height:2em;
        }
        #hours{
            width:4em;
            height:2em;
            margin-right: 2em;
        }
        .nav-link{
            margin-right: 2em;
        }
        nav{
            height:4em;
            font-size: 1.25em;
        }
        .logout{
            height:4em;
            width:4em;
            margin-top:0 !important;
        }
    </style>

    <!-- 😊<br> -->

    
</head>
<body>
    <?php
        // $conn = mysqli_connect("localhost", "root", "", "appinfo");
        // if($conn === false){
        //     die("ERROR: Could not connect. "
        //     . mysqli_connect_error());
        // }
        // session_start();
        // $hours_1 = $_REQUEST['hours_1'];
        // $minutes_1 = $_REQUEST['minutes_1'];
        // $hours_2 = $_REQUEST['hours_2'];
        // $minutes_2 = $_REQUEST['minutes_2'];
        // $hours_3 = $_REQUEST['hours_3'];
        // $minutes_3 = $_REQUEST['minutes_3'];
        // $hours_4 = $_REQUEST['hours_4'];
        // $minutes_4 = $_REQUEST['minutes_4'];
        // $hours_5 = $_REQUEST['hours_5'];
        // $minutes_5 = $_REQUEST['minutes_5'];
        // $hours_6 = $_REQUEST['hours_6'];
        // $minutes_6 = $_REQUEST['minutes_6'];
        // $phone = $_SESSION['phone'];
        // $sql = "INSERT INTO phyactivities VALUES (
        //     'jogging','20-10-2023',(60*$hours_1) +$minutes_1,1,$phone)";
        // if(($hours_1>0 || $minutes_1>0) && mysqli_query($conn, $sql)){
        //     // echo "<h3>data stored in a database successfully."
        //     //     . " Please browse your localhost php my admin"
        //     //     . " to view the updated data</h3>";
        //     echo "";
        // } 
        // // else{
        // //     echo "ERROR: Hush! Sorry $sql. "
        // //         . mysqli_error($conn);
        // // }
        // $sql_2 = "INSERT INTO phyactivities VALUES (
        //     'exercise','20-10-2023',(60*$hours_2) +$minutes_2,1,$phone)";
        // if(($hours_2>0 || $minutes_2>0) && mysqli_query($conn, $sql_2)){
        //     echo "";
        // } 
        // $sql_3 = "INSERT INTO phyactivities VALUES (
        //     'Cycling','20-10-2023',(60*$hours_3) +$minutes_3,1,$phone)";
        // if(($hours_3>0 || $minutes_3>0) && mysqli_query($conn, $sql_3)){
        //     echo "";
        // }
        // $sql_4 = "INSERT INTO phyactivities VALUES (
        //     'playing','20-10-2023',(60*$hours_4) +$minutes_4,1,$phone)";
        // if(($hours_4>0 || $minutes_4>0) && mysqli_query($conn, $sql_4)){
        //     echo "";
        // } 
        // $sql_5 = "INSERT INTO phyactivities VALUES (
        //     'hiking','20-10-2023',(60*$hours_5) +$minutes_5,1,$phone)";
        // if(($hours_5>0 || $minutes_5>0) && mysqli_query($conn, $sql_5)){
        //     echo "";
        // } 
        // $sql_6 = "INSERT INTO phyactivities VALUES (
        //     'others','20-10-2023',(60*$hours_6) +$minutes_6,1,$phone)";
        // if(($hours_6>0 || $minutes_6>0) && mysqli_query($conn, $sql_6)){
        //     echo "";
        // }
        // mysqli_close($conn);
    ?>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#">Navbar</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Diet Choices</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="dietchoices.html">Diet Choices</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="waterintake.php">Water Intake</a>
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
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li> -->
            </ul>
            <span class = "navbar-brand" href = "#">
                Hello, Mohit
                <a href = "login_signup.html">
                    <img src = "images/logout.png" class="logout">
                </a>
            </span>
            <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          </div>
        </div>
    </nav>
    <br>
    <div class="bdy">
    <h2>Which stress relieving activities have you done today?</h2><br>
    <form action="emotions_ba1.php" method="post">
    <div class="emoji-box" id="happy" onclick="selectEmoji('happy')"><div class="emoji"><img src="images/chanting.jpg"></div> <div class="txt">Chanting</div>
    <label for="hours_1"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
        <select name="hours_1" id="hours">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
        </select>
        
        <label for="minutes_1"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
        <select name="minutes_1" id="minutes">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
            <option value="47">47</option>
            <option value="48">48</option>
            <option value="49">49</option>
            <option value="50">50</option>
            <option value="51">51</option>
            <option value="52">52</option>
            <option value="53">53</option>
            <option value="54">54</option>
            <option value="55">55</option>
            <option value="56">56</option>
            <option value="57">57</option>
            <option value="58">58</option>
            <option value="59">59</option>
            
        </select></div>
    <div class="emoji-box" id="sad" onclick="selectEmoji('sad')"><div class="emoji"><img src="images/yoga.jpg"></div> <div class="txt">Yoga</div>
    <label for="hours_2"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
        <select name="hours_2" id="hours">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
        </select>
        
        <label for="minutes_2"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
        <select name="minutes_2" id="minutes">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
            <option value="47">47</option>
            <option value="48">48</option>
            <option value="49">49</option>
            <option value="50">50</option>
            <option value="51">51</option>
            <option value="52">52</option>
            <option value="53">53</option>
            <option value="54">54</option>
            <option value="55">55</option>
            <option value="56">56</option>
            <option value="57">57</option>
            <option value="58">58</option>
            <option value="59">59</option>
            
        </select></div>
    <div class="emoji-box" id="angry" onclick="selectEmoji('angry')"><div class="emoji"><img src="images/meditation.jpg"></div> <div class="txt">Meditation</div>
    <label for="hours_3"><b>Hours:&nbsp;&nbsp;&nbsp;</b></label>
        <select name="hours_3" id="hours">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
        </select>
        
        <label for="minutes_3"><b>Minutes:&nbsp;&nbsp;&nbsp;</b></label>
        <select name="minutes_3" id="minutes">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
            <option value="47">47</option>
            <option value="48">48</option>
            <option value="49">49</option>
            <option value="50">50</option>
            <option value="51">51</option>
            <option value="52">52</option>
            <option value="53">53</option>
            <option value="54">54</option>
            <option value="55">55</option>
            <option value="56">56</option>
            <option value="57">57</option>
            <option value="58">58</option>
            <option value="59">59</option>
            
        </select></div>
        <br><input type = "submit" value="Submit" class="button">
    </form>
    </div>
    
    <!-- <p>You are feeling: <span id="selected-emoji">😊</span></p> -->

    <script>
        function selectEmoji(emoji) {
            /* document.getElementById('selected-emoji').textContent = document.getElementById(emoji).textContent; */
            if(emoji!='happy'){
                document.getElementById('happy').style.border = "";
            }
            if(emoji!='sad'){
                document.getElementById('sad').style.border = "";
            }
            if(emoji!='angry'){
                document.getElementById('angry').style.border = "";
            }
            document.getElementById(emoji).style.border = "2px solid red";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
