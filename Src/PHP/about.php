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
  <title>About Us - Freelancing Platform</title>
  <link rel="stylesheet" href="includes/styles.css">
</head>
<body>
  <!-- Header -->
  <header>
    <!-- Navigation Menu -->
    <?php include 'C:\xampp\htdocs\freelancing\header.php';?>

    <div class="logo">
        <img src="images/freelance.png" alt="Freelancing Platform Logo">
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <h1>About Us</h1>
    <p>Welcome to the Freelancing Platform! We aim to connect talented freelancers with clients worldwide, facilitating collaboration and project success.</p>
    <p>Our platform provides a seamless experience for both freelancers and clients, offering a wide range of features including project management, communication tools, secure payment processing, and more.</p>
    <p>Whether you're a freelancer looking for exciting projects or a client in need of skilled professionals, we've got you covered. Join us today and take your freelancing journey to new heights!</p>
  </div>

  <!-- Footer -->
  <footer>
  <?php include 'C:\xampp\htdocs\freelancing\footer.php';?>
  </footer>

  <script src="../freelancing/javascript/scripts.js" ></script>

</body>
</html>
