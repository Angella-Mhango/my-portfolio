<!DOCTYPE html>
<html>
<head>
  <title>Projects</title>
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

    .project {
      display: flex;
      margin-bottom: 20px;
      cursor: pointer;
    }

    .project .screenshot {
      flex: 1;
      margin-right: 20px;
    }

    .project .details {
      flex: 2;
    }

    .project .title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .project .description {
      margin-bottom: 10px;
    }

    .project .link {
      display: inline-block;
      margin-right: 10px;
    }

    .filter {
      margin-bottom: 10px;
    }

    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9999;
      padding: 20px;
    }

    .modal-content {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
    }

    .progress-bar {
      width: 100%;
      height: 20px;
      background-color: #ddd;
      border-radius: 10px;
      overflow: hidden;
    }

    .progress-bar-fill {
      height: 100%;
      background-color: #4caf50;
      width: 0;
      transition: width 1s ease-in-out;
    }

    body {
      background-color: silver;
    }
  </style>
  <script>
   function filterProjects() {
  const categoryFilter = document.querySelector('#category-filter-2').value.toLowerCase();

  const searchQuery = document.querySelector('#search-input').value.toLowerCase();

  const projects = document.querySelectorAll('.project');

  projects.forEach(project => {
    const category = project.getAttribute('data-category').toLowerCase();
    const title = project.querySelector('.title').textContent.toLowerCase();
    const description = project.querySelector('.description').textContent.toLowerCase();

    const isCategoryMatch = categoryFilter === 'all' || category === categoryFilter;

    const isSearchMatch =
      searchQuery === '' ||
      title.includes(searchQuery) ||
      description.includes(searchQuery);

    if (isCategoryMatch && isSearchMatch) {
      project.style.display = 'flex';
    } else {
      project.style.display = 'none';
    }
  });
}


    function openModal(projectId) {
      const modal = document.querySelector('#modal');
      const modalContent = document.querySelector('#modal-content');
      const projectDetails = document.querySelector(`#${projectId}`);

      modalContent.innerHTML = projectDetails.innerHTML;
      modal.style.display = 'block';
    }

    function closeModal() {
      const modal = document.querySelector('#modal');
      modal.style.display = 'none';
    }

    function updateProgressBar(projectId) {
      const progressBar = document.querySelector(`#${projectId} .progress-bar-fill`);
      const progress = parseInt(progressBar.getAttribute('data-progress'));

      let width = 0;
      const interval = setInterval(() => {
        if (width >= progress) {
          clearInterval(interval);
        } else {
          width++;
          progressBar.style.width = `${width}%`;
        }
      }, 10);
    }
  </script>

</head>
<body>
  <header>
  <nav>
    <ul class="menu">
      <li><a href="index.html">Home</a></li>
      <li><a href="projects.html">Projects</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="skills.html">Skills</a></li>
      <li><label for="search-input">Search:</label>
    <input type="text" id="search-input" oninput="filterProjects()"></li>
    <li><div class="filter"><label for="category-filter">Category:</label>
    <select id="category-filter" onchange="filterProjects()">
      <option value="all">All</option>
      <option value="accomodation">accomodation</option>
      <option value="portifolio">portifolio</option>
    </select></div></li>
    </ul>
  </nav>
</header>

  <h1>Projects</h1>

  <br>
  <br>

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
$query = "SELECT * FROM `projects`";
$rs = mysqli_query($conn, $query);

//retrive project details and display data
while ($project = mysqli_fetch_assoc($rs)) {
    $id=$project['id'];
    $img = $project['imgsrc'];
    $description = $project['description'];
    $progress = $project['progress'];
    $title = $project['title'];
    $link = $project['links'];

    echo '
<div class="project" data-category="web" onclick="openModal('.$id.')">
    <div class="screenshot">
      <img src="'.$img.'" alt="Project 1 Screenshot" width="300">
    </div>
    <div class="details" id="project1">
      <h2 class="title">'.$title.'</h2>
      <p class="description">'.$description.'.</p>
      <br>
      <caption>progress</caption>
      <div class="progress-bar">
        <div class="progress-bar-fill" data-progress="'.$progress.'"></div>
      </div>
      <a class="link" href="'.$link.'">View Site</a>
    </div>
  </div>
  <br>
  <br>';
}
//close connection
mysqli_close($conn);
?>


  <script>
    // Initialize progress bars
    updateProgressBar('1');
    updateProgressBar('2');
  </script>
 
</body>
</html>
