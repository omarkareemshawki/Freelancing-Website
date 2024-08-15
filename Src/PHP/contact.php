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
  <title>Contact Us - Freelancing Platform</title>
  <link rel="stylesheet" href="includes/styles.css">
</head>
<body>
  <!-- Header -->
  <?php include 'C:\xampp\htdocs\freelancing\header.php';?>

  <!-- Main Content -->
  <div class="container">
    <h1>Contact Us</h1>
    <p>Have questions or feedback? Reach out to us using the form below:</p>
    <form id="contactForm">
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name"><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email"><br>
      <label for="message">Message:</label><br>
      <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
      <input type="submit" value="Submit">
    </form>
  </div>

  <!-- Footer -->

  <script >
    // scripts.js

// Function to validate the contact form
function validateContactForm() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  var isValid = true;

  // Validate name
  if (!name.trim()) {
    alert("Please enter your name.");
    isValid = false;
  }

  // Validate email
  if (!email.trim()) {
    alert("Please enter your email.");
    isValid = false;
  }

  // Validate message
  if (!message.trim()) {
    alert("Please enter your message.");
    isValid = false;
  }

  return isValid;
}

// Event listener for form submission
document.getElementById("contactForm").addEventListener("submit", function(event) {
  if (!validateContactForm()) {
    event.preventDefault(); // Prevent form submission if validation fails
  }
});


  </script>
 <?php include 'C:\xampp\htdocs\freelancing\footer.php';?>
</body>
</html>
