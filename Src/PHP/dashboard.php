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
  <title>Admin Dashboard - Freelancing Platform</title>
  <link rel="stylesheet" href="../includes/styles.css">
</head>
<body>
  <!-- Header -->
  <?php include 'C:\xampp\htdocs\freelancing\header.php';?>

  <!-- Main Content -->
  <div class="container">
    <h1>Admin Dashboard</h1>
    <p>Welcome to the Admin Dashboard of the Freelancing Platform. Here, you can manage various aspects of the platform to ensure smooth operation.</p>
    <h2>Recent Activities</h2>
    <ul>
      <li>Added new project categories</li>
      <li>Updated user permissions</li>
      <li>Resolved user-reported issues</li>
    </ul>
    <h2>Statistics</h2>
    <p>Total Users: 500</p>
    <p>Total Projects: 200</p>
    <p>Total Revenue: $10,000</p>
  </div>

  <!-- Footer -->
  <footer>
  <?php include 'C:\xampp\htdocs\freelancing\footer.php';?>
  </footer>

  <script src="../freelancing/javascript/scripts.js" ></script>
</body>
</html>
