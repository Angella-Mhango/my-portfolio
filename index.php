<!DOCTYPE html>
<html>
<head>
  <title>portifolio</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
   .slideshow-container {
      position: relative;
      width: 100%;
      max-width: 800px;
      margin: 0 auto;
    }

    /* Slides */
    .mySlides {
      display: none;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 18px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* The dots */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }
    .sidebar {
      background-color: silver;
      width:60px;
      padding: 20px;
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      overflow-y: auto;
    }
    ol{
      list-style: none;
      font-family: serif;
      font-size: 16px;
    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    .sidebar li {
      margin-bottom: 10px;
    }

    .sidebar a {
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }

    .sidebar a:hover {
      color: blue;
    }
    input:hover {
      background-color: yellow;
    }
    .menu li a i {
    color: white; 
  }
   .search-form {
  position: fixed;
  top: 10px;
  right: 10px;
  display: flex;
  border-radius: 10px;
  overflow: hidden;
}

.search-input {
  padding: 10px;
  border: solid;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
}

.search-button {
  background-color: #333;
  color: #fff;
  padding: 10px;
  border: none;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}

    .content {
      margin-left: 300px;
      padding: 20px;
    }
    body{
     margin-left: 11%;
    }
     p {
    font-family: serif;
    font-size: 16px;
    font-style: ;
  }

  ul {
    font-family: serif;
    font-size: 16px;
  }
    footer {
      background-color: silver;
      padding: 10px;
      text-align: center;
    }
    .image-container {
      text-align: center;

    }
    h1{
       text-align: center;
    }
    .footer {
    display: flex;
    justify-content: space-between;
  }
  .column {
    flex: 1;
  }
  .footer-line {
  border: solid;
  border-top: 1px white;
  margin: 10px 0;
}
  </style>
<script>
    $(document).ready(function(){
      $('.slideshow').slick({ dots: true });
    });
    // Smooth scroll function
    function smoothScroll(event) {
      event.preventDefault();

      const target = event.target.getAttribute("href");

      // Scroll smoothly only when navigating to a different page
      if (window.location.pathname !== target) {
        window.location.href = target;
      }
    }

    // Attach smooth scroll event listener to navigation links
    const navigationLinks = document.querySelectorAll("nav a");
    navigationLinks.forEach(link => {
      link.addEventListener("click", smoothScroll);
    });
    // Get the current time
    var currentTime = new Date();
    var currentHour = currentTime.getHours();

    // Define the greeting based on the time of the day
    var greeting;
    if (currentHour < 12) {
      greeting = "Good morning";
    } else if (currentHour < 18) {
      greeting = "Good afternoon";
    } else {
      greeting = "Good evening";
    }

    // Display the greeting
    window.onload = function() {
      document.getElementById("greeting").innerHTML = greeting;
    };
  </script>
</head>
<body>
 <div class="sidebar">
  <nav>
    <ul class="menu">
      <li><a href="index.html"><i class="fas fa-home"></i><br>home</a></li>
      <li><a href="projects.html"><i class="fas fa-folder-open"></i>project</a></li>
      <li><a href="skills.html"><i class="fas fa-cogs"></i><br>skills</a></li>
      <li><a href="contact.html"><i class="fa fa-envelope"></i><br>contact us</a></li>
    </ul>
  </nav>

  <form class="search-form">
    <input type="text" placeholder="Search" class="search-input">
    <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
  </form>
</div>

<section>
    <h1>Angella Mhango</h1>
   <div class="image-container">
     <img src="me.jpg" style="height:250px; width:300px" alt="this is the picture">
  </div>
  <div class="main-container">


  <h1 id="greeting"></h1>

   <p>
    Angella Mhango is a student with a passion for creating innovative solutions, studying Information and comunication Technology at Mzuzu University, Angella has a deep understanding of software development principles and a proven track record of delivering high-quality projects.
  </p>

<p>
   Throughout her studies, Angella has worked on various complex software projects, ranging from enterprise-level applications to mobile app development. She specializes in full-stack web development, with expertise in JavaScript, Python, and database management. Angella's ability to analyze problems, design efficient solutions, and collaborate with cross-functional teams has consistently contributed to the successful completion of projects.
</p>
<p>
Apart from her professional pursuits, Angella enjoys outdoor activities such as hiking and photography. She is also an active member of the local developer community, regularly attending tech conferences and participating in hackathons.
</p>
<hr>
  <h2>skills</h2>
  <p>
    Proficient in Python, C, and Java, with knowledge of user interface design principles, version control systems like GitHub, and testing and debugging techniques, ensuring efficient and functional code development.
Skilled in software and application support, troubleshooting technical issues, and providing excellent customer service to ensure optimal user experiences.
Experienced in IT project management, coordinating tasks and resources, and delivering successful projects on time.
Possesses strong problem-solving abilities, documentation and reporting skills, continuous learning mindset, and effective communication and collaboration skills for seamless teamwork and adaptability in dynamic work environments.
  </p>
 
<ol>
  <h2>Experience</h2>
  <li>*Personal projects
      <p>designed a an accomodation website for my college</p>
</li>
  <li>*Mzuzu Enterprenuer Hub
    <p>attended a 6 weeks physical code camp where i engaged in programming with python, web designing, data management, graphics designing and video + photograph</p>
  </li>
  <li>*Dufuna
    <p>attended a 2 months online codecamp which involved in participating in online projects using stack, dufuna apps and github.</p>
  </li>
  
</ol>
</div>
</section>
  <h2>Web Development Projects</h2>

<fieldset>
  <legend><h3>College Online Accommodation Web</h3></legend>
  <center>
    <div class="web-slideshow-container">
      <div class="web-slide">
        <img src="web.jpg" style="height:300px; width:500px" alt="Slide 1">
      </div>
      <div class="web-slide">
        <img src="web2.jpg" style="height:300px; width:500px" alt="Slide 2">
      </div>
      <div class="web-slide">
        <img src="web3.jpg" style="height:300px; width:500px" alt="Slide 3">
      </div>

      <!-- Web slideshow navigation dots -->
      <div style="text-align:center">
        <span class="web-dot"></span>
        <span class="web-dot"></span>
        <span class="web-dot"></span>
      </div>
    </div>
    <a href="index.html">View Site</a>
  </center>
</fieldset>

<fieldset>
  <legend><h3>Portfolio</h3></legend>
  <center>
    <div class="portfolio-slideshow-container">
      <div class="portfolio-slide">
        <img src="port1.jpg" style="height:300px; width:500px" alt="Slide 1">
      </div>
      <div class="portfolio-slide">
        <img src="port2.jpg" style="height:300px; width:500px" alt="Slide 2">
      </div>
      <div class="portfolio-slide">
        <img src="port3.jpg" style="height:300px; width:500px" alt="Slide 3">
      </div>

      <!-- Portfolio slideshow navigation dots -->
      <div style="text-align:center">
        <span class="portfolio-dot"></span>
        <span class="portfolio-dot"></span>
        <span class="portfolio-dot"></span>
      </div>
    </div>
    <a href="index.html">View Site</a>
  </center>
</fieldset>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  // Web Slideshow
  var webSlideIndex = 0;
  showWebSlides();

  function showWebSlides() {
    var i;
    var webSlides = document.getElementsByClassName("web-slide");
    var webDots = document.getElementsByClassName("web-dot");

    for (i = 0; i < webSlides.length; i++) {
      webSlides[i].style.display = "none";
    }

    webSlideIndex++;

    if (webSlideIndex > webSlides.length) {
      webSlideIndex = 1;
    }

    for (i = 0; i < webDots.length; i++) {
      webDots[i].className = webDots[i].className.replace(" active", "");
    }

    webSlides[webSlideIndex - 1].style.display = "block";
    webDots[webSlideIndex - 1].className += " active";

    setTimeout(showWebSlides, 4000); // Change slide every 4 seconds
  }

  // Portfolio Slideshow
  var portfolioSlideIndex = 0;
  showPortfolioSlides();

  function showPortfolioSlides() {
    var i;
    var portfolioSlides = document.getElementsByClassName("portfolio-slide");
    var portfolioDots = document.getElementsByClassName("portfolio-dot");

    for (i = 0; i < portfolioSlides.length; i++) {
      portfolioSlides[i].style.display = "none";
    }

    portfolioSlideIndex++;

    if (portfolioSlideIndex > portfolioSlides.length) {
      portfolioSlideIndex = 1;
    }

    for (i = 0; i < portfolioDots.length; i++) {
      portfolioDots[i].className = portfolioDots[i].className.replace(" active", "");
    }

    portfolioSlides[portfolioSlideIndex - 1].style.display = "block";
    portfolioDots[portfolioSlideIndex - 1].className += " active";

    setTimeout(showPortfolioSlides, 4000);
  }
</script>
<h2>contact us</h2>
<p>For a better communication please send us your questions and enquries and we will get back to you using the email you provide below</p>

   <form action= "" method="post"name="myForm"
 onsubmit="return validateForm()">   
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>
  
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>
  
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" required></textarea><br>
  
    <button type="submit" name="submit">Submit</button>
  </form>
<?php
$servername="localhost";
$username="root";
$password= "";
$conn=mysqli_connect($servername,$username,$password) or die("failed to connect");

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

			//selecting a database
$selectdb=mysqli_select_db($conn,"project2");
$query = "INSERT INTO home(name,email,message)values('$name','$email','$message')";
$result = mysqli_query($conn,$query);
			echo"request submitted";
		}
        else{
			echo "request not submitted";
		}
	?>

</div>
   <footer class="footer">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<div class = "column">
  <h3>social media</h3>
<ol class="social-media-list">
  <li><a href="https://www.facebook.com/angella.angence"><i class="fab fa-facebook"></i></a></li>
  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ol>
 </div>
 <div class="column">
  <h3>support</h3>
 <ol class="support-list">
  <li><a href="#">FAQ</a></li>
  <li><a href="contact.html">Contact Us</a></li>
  <li><a href="ammhango@gmail.com">email us</a></li>
  </ol>
</div>

  </footer>
</body>
</html>
                      