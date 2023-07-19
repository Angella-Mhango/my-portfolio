<!DOCTYPE html>
<html>
<head>
  <title>Skills</title>
  <style>
  .menu {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
  }
  
  .menu li {
    display: inline-block;
    margin-right: 10px;
  }
  
  .menu li a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: #333;
    font-weight: bold;
    border-bottom: 2px solid transparent;
    transition: border-bottom 0.3s ease-in-out;
  }
  
  .menu li a:hover {
    border-bottom: 2px solid #333;
  }
  
  .menu li a.active {
    border-bottom: 2px solid #333;
  }
    .skills-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      max-width: 100%;
      margin: 0 auto;
      padding: 20px;
    }

    .skill {
      width: 200px;
      margin: 20px;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
      text-align: center;
      transition: transform 0.3s ease-in-out;
      cursor: pointer;
    }

    .skill:hover {
      transform: scale(1.05);
    }

    .skill .name {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .skill .description {
      font-size: 14px;
      margin-bottom: 10px;
    }

    .skill .chart {
      width: 100%;
      height: 10px;
      background-color: #ddd;
      border-radius: 5px;
      overflow: hidden;
    }

    .skill .chart-fill {
      height: 100%;
      background-color: #4caf50;
      width: 0;
      transition: width 1s ease-in-out;
    }

    .tooltip {
      position: relative;
      display: inline-block;
      cursor: pointer;
    }

    .tooltip .tooltip-text {
      visibility: hidden;
      width: 200px;
      background-color: #333;
      color: #fff;
      text-align: center;
      border-radius: 5px;
      padding: 5px;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      transform: translateX(-50%);
      opacity: 0;
      transition: opacity 0.3s;
    }

    .tooltip:hover .tooltip-text {
      visibility: visible;
      opacity: 1;
    }

    body {
      background-image: url("star3.jpg");
      background-size: cover;
      background-position: center;
    }
    
    h1 {
      text-align: center;
      color: white;
    }
  </style>
  <script>
  function animateChart() {
  const charts = document.querySelectorAll('.chart');
  charts.forEach(chart => {
    const fill = chart.querySelector('.chart-fill');
    const proficiency = parseInt(chart.parentElement.getAttribute('data-proficiency'));

    let width = 0;
    const interval = setInterval(() => {
      if (width >= proficiency) {
        clearInterval(interval);
      } else {
        width++;
        fill.style.width = `${width}%`;
      }
    }, 10);
  });
}
</script>

</head>
<body onload="animateChart()">
  <h1>Skills</h1>
   <header>
  <nav>
    <ul class="menu">
      <li><a href="index.html">Home</a></li>
      <li><a href="projects.html">Projects</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="skills.html">Skills</a></li>
    </ul>
  </nav>
</header>

  <div class="skills-container">
    
    <?php

//server details
/$servername = "localhost";
$username = "root";
$password = "";

//connect server
$conn = mysqli_connect($servername, $username, $password) or die("connection failed");

//connect database
$db_conn = mysqli_select_db($conn, "project2") or die("failed to connect to server");

//Querying database
$query = "SELECT * FROM `skills`";
$rs = mysqli_query($conn, $query);

//retrive project details and display data
while ($skills = mysqli_fetch_assoc($rs)) {
    $id=$skills['id'];
    $name = $skills['name'];
    $description = $skills['description'];
    $proficiency = $skills['proficiency'];
    $text = $skills['text'];

    echo '
    <div class="skill" data-proficiency="'.$proficiency.'">
      <div class="name">'.$name.'</div>
      <div class="description">'.$description.'</div>
      <div class="chart">
        <div class="chart-fill"></div>
      </div><br.
      <div class="tooltip">
        Hover for more info
        <span class="tooltip-text">'.$text.'</span>
      </div><br><br>
      ';
}
//close connection
mysqli_close($conn);
?>
 
  </div>
</body>
</html>
