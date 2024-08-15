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
  <title>Freelancing Platform</title>
  <link rel="stylesheet" href="includes/styles.css">
  
  <style>
    /* Additional Styles */
    .container {
      text-align: center;
    }

    .btn-container {
      margin-top: 20px;
    }

    .btn-container button {
      margin: 0 10px;
    }

    /* Dropdown Styles */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

  </style>
</head>
<body>
  <!-- Header -->
  <?php include 'C:\xampp\htdocs\freelancing\header.php';?>

  <!-- Main Content -->
  <div class="container">
    <h1>Welcome to our Freelancing Platform</h1>
    <p>Connect with freelancers or post your project today!</p>



    <h1 >Freelancing Job Search</h1>
    
    <!-- Job Search Form -->
    <form id="jobSearchForm">
      <div class="form-group">
        <label for="keyword">Keyword:</label>
        <input type="text" class="form-control" id="keyword" placeholder="e.g., Web Developer, Graphic Designer">
      </div>
      <div class="form-group">
        <label for="location">Location:</label>
        <input type="text" class="form-control" id="location" placeholder="e.g., New York, London">
      </div>
      <button type="submit" style="background-color: cadetblue; border: none; padding: 15px; font-size: 20px; font-weight: 600;">Search</button>

    </form>
    
    <br> <br>

    
    <video controls autoplay loop>
      <source src="videos/1.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    
    <!-- Button Container -->
    <div class="btn-container">
      <a href="../freelancing/login.php" class="btn-login">Login</a>
      <a href="../freelancing/signup.php" class="btn-signup">Sign Up</a>
    </div>
  </div>
    
  <!-- Footer -->
  <?php include 'C:\xampp\htdocs\freelancing\footer.php';?>

</body>
</html>
