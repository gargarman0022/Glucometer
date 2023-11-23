<?php

// Create the graph

session_start();
include('../backend/dbconnect.php');
$mail = $_SESSION['email'];
require_once('../jpgraph/src/jpgraph.php');
require_once('../jpgraph/src/jpgraph_bar.php');
$graph = new Graph(500,400);
$graph->SetMargin(40,20,30,40);
$graph->SetScale('textlin');
$graph->SetShadow();
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph1 = new Graph(500,400);
$graph1->SetMargin(40,20,30,40);
$graph1->SetScale('textlin');
$graph1->SetShadow();
$graph1->title->SetFont(FF_FONT1,FS_BOLD);
$curr_date = date("Y-m-d");
// echo $curr_date;
$datetime = new DateTime($curr_date);
$datetime -> sub(new DateInterval('P' . 7 . 'D'));
$newdate =  $datetime -> format('Y-m-d');
// echo $newdate;
$query = "SELECT * from data where Email='$mail' and Date > '$newdate';";
//SELECT * from data where Email='gargarman0025@gmail.com' and Date > 2023-10-29;
$res = mysqli_query($conn,$query);
$tot_phy = 0;
$tot_stress = 0;
$phydata = array();
$mendata = array();
$phyweek = array(0,0,0,0,0,0);
$menweek = array(0,0,0,0,0,0,0,0,0);
while($row = mysqli_fetch_assoc($res))
{
    $phy = $row['Jogging'] + $row['Exercise'] + $row['Cycling'] + $row['Playing'] + $row['Hiking'] + $row['Other_Phy'];
    $stress = $row['Chanting'] + $row['Yoga'] + $row['Meditation'];
    $phyweek[0] = $phyweek[0] + $row['Jogging'];
    $phyweek[1] = $phyweek[1] + $row['Exercise'];
    $phyweek[2] = $phyweek[2] + $row['Cycling'];
    $phyweek[3] = $phyweek[3] + $row['Playing'];
    $phyweek[4] = $phyweek[4] + $row['Hiking'];
    $phyweek[5] = $phyweek[5] + $row['Other_Phy'];

    $menweek[0] = $menweek[0] + $row['Chanting'];
    $menweek[1] = $menweek[1] + $row['Yoga'];
    $menweek[2] = $menweek[2] + $row['Meditation'];
    $menweek[3] = $menweek[3] + $row['listening_music'];
    $menweek[4] = $menweek[4] + $row['dancing'];
    $menweek[5] = $menweek[5] + $row['talking'];
    $menweek[6] = $menweek[6] + $row['writing'];
    $menweek[7] = $menweek[7] + $row['playing_instrument'];
    $menweek[8] = $menweek[8] + $row['other_str'];

    array_push($phydata,$phy);
    array_push($mendata,$stress);
    $tot_phy = $tot_phy + $phy;
    $tot_stress = $tot_stress + $stress;
}

$bplot1 = new BarPlot($phydata);
$bplot1->SetColor('red');

$bplot2 = new BarPlot($mendata);
$bplot2->SetColor('red');

$graph->Add($bplot1);

// Stroke the graph to the browser
$graph->Stroke(dirname(__FILE__).'\phygraph.png');

$graph1->Add($bplot2);
$graph1->Stroke(dirname(__FILE__).'\mengraph.png')
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Result</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=AR+One+Sans&family=Montserrat:wght@100&family=Pixelify+Sans&display=swap');
    body{
        font-family: 'AR One Sans', sans-serif;
    }
    nav{
        height:4em;
        font-size: 1.25em;
    }
    .nav-link{
        color:white;
        margin-right: 2em;
    }
    .navbar-brand{
        color:white;
        /* height:2em; */
    }
    .logout{
        height:4em;
        width:4em;
        margin-top:0 !important;
    }
    img{
      width:40em;
      height:40em;
      display:inline-block;
      /* margin-left:10em; */
    }
    .img1{
      margin-left:10em;
      margin-right:5em;
    }
    table {
      font-family: arial, sans-serif;
      /* display:inline-block; */
      border-collapse: collapse;
      justify-content:center;
      width: 80%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
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
                      <a class="nav-link" href="physicalactivities.php">Physical Activities</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="stressrelivingactivities.php">Stress Relieving Activities</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="result.php">Result</a>
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
  <img src="phygraph.png" alt="Graph image" class="img1">
  <img src="mengraph.png" alt="Graph image" class="img2">
  <table align="center">
    <tr>
      <th>S.No</th>
      <th>Physical Activity</th>
      <th>Time Spent in last 7 days</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Jogging</td>
      <td><?php echo $phyweek[0]?></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Exercise</td>
      <td><?php echo $phyweek[1]?></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Cycling</td>
      <td><?php echo $phyweek[2]?></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Playing</td>
      <td><?php echo $phyweek[3]?></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Hiking</td>
      <td><?php echo $phyweek[4]?></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Others</td>
      <td><?php echo $phyweek[5]?></td>
    </tr>
  </table>
  <table align="center" style="margin-top:2em;">
    <tr>
      <th>S.No</th>
      <th>Stress Relieving Activity</th>
      <th>Time Spent in last 7 days</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Chanting</td>
      <td><?php echo $menweek[0]?></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Yoga</td>
      <td><?php echo $menweek[1]?></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Meditation</td>
      <td><?php echo $menweek[2]?></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Listening Music</td>
      <td><?php echo $menweek[3]?></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Dancing</td>
      <td><?php echo $menweek[4]?></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Talking to love ones</td>
      <td><?php echo $menweek[5]?></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Writing</td>
      <td><?php echo $menweek[6]?></td>
    </tr>
    <tr>
      <td>8</td>
      <td>Playing an Instrument</td>
      <td><?php echo $menweek[7]?></td>
    </tr>
    <tr>
      <td>9</td>
      <td>Others</td>
      <td><?php echo $menweek[8]?></td>
    </tr>
  </table>
</body>
</html>

