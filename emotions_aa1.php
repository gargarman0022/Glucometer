<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How Are You Feeling Today?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            font-family: Arial, sans-serif;
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
          background-color:white;
            /* font-size:3rem; */
            /* user-select: none; */
            cursor: pointer;
            border:1em solid black;
            display: inline-block;
            width: 15em;
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
        .emoji-box:hover{
          border:2px solid black;
        }
        .emoji{
            font-size: 4em;
            user-select: none;
        }
        .txt{
            font-size: 2em;
            user-select: none;
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
                <a class="nav-link active" href="physicalactivities.php">Physical Activities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="stressrelivingactivities.php">Stress Relieving Activities</a>
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
    <h1>How were you feeling after the activity?</h1><br>
    <button class="emoji-box" id="happy" onclick="location.href='result.php';"><div class="emoji">😊</div> <span class="txt">Happy</span></button>
    <button class="emoji-box" id="sad" onclick="location.href='result.php';"><div class="emoji">😢</div> <span class="txt">Sad</span></button>
    <button class="emoji-box" id="angry" onclick="location.href='result.php';"><div class="emoji">😡</div> <span class="txt">Angry</span></button><br>
    <button class="emoji-box" id="cool" onclick="location.href='result.php';"><div class="emoji">😎</div> <span class="txt">Cool</span></button>
    <button class="emoji-box" id="sleepy" onclick="location.href='result.php';"><div class="emoji">😴</div> <span class="txt">Sleepy</span></button>

    <!-- <br><button class="button" onclick="location.href='result.php'">Submit</button> -->
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
            if(emoji!='cool'){
                document.getElementById('cool').style.border = "";
            }
            if(emoji!='sleepy'){
                document.getElementById('sleepy').style.border = "";
            }
            document.getElementById(emoji).style.border = "2px solid red";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>