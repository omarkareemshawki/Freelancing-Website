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

// Check if the signup form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect form data
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Hash the password for security
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // SQL query to insert a new user into the Users table
  $sql = "INSERT INTO Users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

  if ($conn->query($sql) === TRUE) {
    echo "<p style='color: white;'>New record created successfully</p>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    /* Your additional styles here */

    body{
        background-color: black;
        
    }
    .container {
      text-align: center;
      margin-top: 20px;
    }

    .container h1{
        color: #f2f2f2;
        font-size: 50px;
        margin-bottom: 50px;
    }

    .back-btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-bottom: 50px;
    }

    .back-btn:hover {
      background-color: #0056b3;
    }

    .signup-container {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .signup-container h2 {
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
    }

    .form-group input {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #000000;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }

    .login-link {
      margin-top: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
<?php include 'C:\Users\Windows\OneDrive\Desktop\freelancing\header.php';?>
  <div class="container">
    <h1>Welcome to our Freelancing Platform</h1>
    <!-- Back to Home Button -->
    <a href="../freelancing/home.html" class="back-btn"><i>&#8592;</i> Back to Home</a>
  </div>

  <div class="signup-container">
    <h2>Sign Up</h2>
    <form action="signup.php" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Sign Up</button>
    </form>
    <div class="login-link">
      Already have an account? <a href="../freelancing/login.php">Login</a>
    </div>
  </div>
  <?php include 'C:\Users\Windows\OneDrive\Desktop\freelancing\footer.php';?>
  <script src="../freelancing/javascript/scripts.js" ></script>

</body>
</html>
