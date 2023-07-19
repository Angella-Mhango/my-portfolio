<?php

//server details
$servername = "localhost";
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
      </div>
      <div class="tooltip">
        Hover for more info
        <span class="tooltip-text">'.$text.'</span>
      </div>
      ';
}
//close connection
mysqli_close($conn);
?>
 