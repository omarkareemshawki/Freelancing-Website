<?php



// PHP code for database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "FreelancePlatform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Projects - Freelancing Platform</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../includes/styles.css">

</head>
<body>
  <!-- Header -->
  <?php include 'C:\xampp\htdocs\freelancing\header.php';?>

  <!-- Main Content -->
  <div class="container mt-5">
    <h1>Manage Projects</h1>
    <div class="row">
      <div class="col-md-6">
        <!-- Add project form -->
        <form id="addProjectForm">
          <div class="form-group">
            <label for="projectName">Project Name</label>
            <input type="text" class="form-control" id="projectName" placeholder="Enter project name">
            <small id="projectNameError" class="text-danger"></small>
          </div>
          <div class="form-group">
            <label for="projectDescription">Project Description</label>
            <textarea class="form-control" id="projectDescription" rows="3" placeholder="Enter project description"></textarea>
            <small id="projectDescriptionError" class="text-danger"></small>
          </div>
          <button type="submit" class="btn btn-primary">Add Project</button>
        </form>
      </div>
      <div class="col-md-6">
        <!-- List of projects -->
        <h2>Project List</h2>
        <ul class="list-group">
          <li class="list-group-item">Project 1</li>
          <li class="list-group-item">Project 2</li>
          <li class="list-group-item">Project 3</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="foot">
  <?php include 'C:\xampp\htdocs\freelancing\footer.php';?>
  </footer>

  <!-- Bootstrap JavaScript -->
  <script src="../javascript/scripts.js" ></script>

</body>
</html>
