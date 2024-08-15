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
  <title>Find Job</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body>
<?php include 'C:\xampp\htdocs\freelancing\header.php';?>

  <!-- Main Content -->
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Find Job</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <!-- Main Content -->
  <div class="container mt-5">
    <h1 class="text-center mb-4">Find Job</h1>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-laptop-code"></i> Web Development</h5>
            <p class="card-text">Find job opportunities related to web development.</p>
            <a href="../freelancing/jobs/webdevelopment.html" class="btn btn-primary">Explore</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-palette"></i> Graphic Design</h5>
            <p class="card-text">Find job opportunities related to graphic design.</p>
            <a href="../freelancing/jobs/gd.html" class="btn btn-primary">Explore</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-pen"></i> Writing</h5>
            <p class="card-text">Find job opportunities related to writing.</p>
            <a href="../freelancing/jobs/writing.html" class="btn btn-primary">Explore</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-chart-line"></i> Digital Marketing</h5>
            <p class="card-text">Find job opportunities related to digital marketing.</p>
            <a href="../freelancing/jobs/DigitalMarketing.html" class="btn btn-primary">Explore</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-file-alt"></i> Data Entry</h5>
            <p class="card-text">Find job opportunities related to data entry.</p>
            <a href="../freelancing/jobs/DataEntry.html" class="btn btn-primary">Explore</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-language"></i> Translation</h5>
            <p class="card-text">Find job opportunities related to translation.</p>
            <a href="../freelancing/jobs/translation.html" class="btn btn-primary">Explore</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-headset"></i> Customer Support</h5>
            <p class="card-text">Find job opportunities related to customer support.</p>
            <a href="../freelancing/jobs/customersupport.html" class="btn btn-primary">Explore</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-chart-line"></i> SEO</h5>
            <p class="card-text">Find job opportunities related to SEO.</p>
            <a href="../freelancing/jobs/customersupport.html" class="btn btn-primary">Explore</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-file-audio"></i> Transcription</h5>
            <p class="card-text">Find job opportunities related to transcription.</p>
            <a href="../freelancing/jobs/transcription.html" class="btn btn-primary">Explore</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col text-center">
        <a href="../freelancing/newjob.html" class="btn btn-primary btn-lg">Suggest a New Job</a>
      </div>
    </div>
  </div>
  <br> <br> <br> <br> <br>

  <!-- Font Awesome Icons -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
  <?php include 'C:\xampp\htdocs\freelancing\footer.php';?>
  
</body>
</html>

