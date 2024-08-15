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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect form data
  $jobTitle = $_POST['jobTitle'];
  $jobDescription = $_POST['jobDescription'];
  $contactEmail = $_POST['contactEmail'];

  // SQL query to insert the suggestion into the Messages table
  $sql = "INSERT INTO Messages (sender_id, receiver_id, message) VALUES (NULL, NULL, '$jobTitle - $jobDescription - $contactEmail')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
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
  <title>Suggest a New Job</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Add custom styles here */
  </style>
</head>
<body>
  <!-- Navigation Bar -->
  <?php include 'C:\xampp\htdocs\freelancing\header.php';?>

  <!-- Form Section -->
  <section id="suggest-job" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Suggest a New Job</h2>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form id="suggestJobForm" onsubmit="return validateForm()">
            <div class="form-group">
              <label for="jobTitle">Job Title</label>
              <input type="text" class="form-control" id="jobTitle" required>
              <div class="invalid-feedback">Please enter the job title.</div>
            </div>
            <div class="form-group">
              <label for="jobDescription">Job Description</label>
              <textarea class="form-control" id="jobDescription" rows="5" required></textarea>
              <div class="invalid-feedback">Please enter the job description.</div>
            </div>
            <div class="form-group">
              <label for="contactEmail">Contact Email</label>
              <input type="email" class="form-control" id="contactEmail" required>
              <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function validateForm() {
      var form = document.getElementById('suggestJobForm');
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
        form.classList.add('was-validated');
        return false;
      }
      form.classList.add('was-validated');
      return true;
    }

  </script>
   <?php include 'C:\xampp\htdocs\freelancing\footer.php';?>
</body>
</html>
