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
  <title>Translation Services</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Add custom styles here */
  </style>
</head>
<body>
  <!-- Navigation Bar -->
  <?php include 'C:\xampp\htdocs\freelancing\header.php';?>

  <!-- Hero Section -->
  <section class="jumbotron text-center">
    <h1 class="display-4">Translation Services</h1>
    <p class="lead">Translate various types of content including books, documents, and more. Our professional translators ensure accuracy and quality.</p>
    <a href="#services" class="btn btn-primary btn-lg">Learn More</a>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Types of Translation</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Book Translation</h5>
              <p class="card-text">Translate fiction and non-fiction books into various languages to reach a wider audience.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Document Translation</h5>
              <p class="card-text">Translate legal documents, business reports, and academic papers accurately and professionally.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Website Translation</h5>
              <p class="card-text">Localize your website content to target international audiences and expand your reach.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Customers' Opinions Section -->
<section id="opinions" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">Customers' Opinions</h2>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card mb-4">
            <div class="card-body">
              <p class="card-text">"The quality of translation provided by this service exceeded my expectations. It was precise, culturally sensitive, and helped me reach a wider audience."</p>
              <footer class="blockquote-footer">Emily Johnson</footer>
            </div>
          </div>
        </div>
        <div class="col-md-6 mx-auto">
          <div class="card mb-4">
            <div class="card-body">
              <p class="card-text">"I've been using this translation service for my business documents, and I couldn't be happier. Their professionalism and attention to detail are commendable."</p>
              <footer class="blockquote-footer">Michael Brown</footer>
            </div>
          </div>
        </div>
        <div class="col-md-6 mx-auto">
          <div class="card mb-4">
            <div class="card-body">
              <p class="card-text">"The translated content provided by this service was delivered promptly and accurately. It has greatly helped in our international communication efforts."</p>
              <footer class="blockquote-footer">Sarah Wilson</footer>
            </div>
          </div>
        </div>
        div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card mb-4">
          <div class="card-body">
            <p class="card-text">"I've had a great experience with this translation service. The translators are highly skilled, and the turnaround time for projects is impressive."</p>
            <footer class="blockquote-footer">Alexandra Lee</footer>
          </div>
        </div>
      </div>
      <div class="col-md-6 mx-auto">
        <div class="card mb-4">
          <div class="card-body">
            <p class="card-text">"The translation team provided exceptional service. They were responsive to our needs and delivered accurate translations on time. I highly recommend them."</p>
            <footer class="blockquote-footer">David Rodriguez</footer>
          </div>
        </div>
      </div>
      <div class="col-md-6 mx-auto">
        <div class="card mb-4">
          <div class="card-body">
            <p class="card-text">"I'm impressed with the quality of translations provided by this service. They pay attention to detail and ensure that the message is conveyed accurately."</p>
            <footer class="blockquote-footer">Sophia Nguyen</footer>
          </div>
        </div>
      </div>
      <div class="col-md-6 mx-auto">
        <div class="card mb-4">
          <div class="card-body">
            <p class="card-text">"The translation service offered here is top-notch. They've helped us expand our business into new markets with their high-quality translations."</p>
            <footer class="blockquote-footer">Christopher Taylor</footer>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
  </section>
  


      <!-- Jobs Section -->
<section id="jobs" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Jobs for Translators</h2>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Company XYZ is Hiring Translators!</h5>
              <p class="card-text">Company XYZ is looking for experienced translators to join our team. Apply now to work on exciting translation projects.</p>
              <a href="#" class="btn btn-primary">Apply Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mx-auto">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Language Solutions Inc. Needs Freelance Translators</h5>
              <p class="card-text">Language Solutions Inc. is seeking freelance translators for various language pairs. Join our network of translators and work on flexible projects.</p>
              <a href="#" class="btn btn-primary">Apply Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mx-auto">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Global Translation Services is Hiring Remote Translators</h5>
              <p class="card-text">Global Translation Services is expanding its team of remote translators. If you have experience in translation, apply now to join our dynamic team.</p>
              <a href="#" class="btn btn-primary">Apply Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mx-auto">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Acme Translation Agency Seeks Bilingual Translators</h5>
              <p class="card-text">Acme Translation Agency is looking for bilingual translators to work on a range of projects. If you have proficiency in multiple languages, apply now!</p>
              <a href="#" class="btn btn-primary">Apply Now</a>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
              <div class="card mb-4">
                <div class="card-body">
                  <h5 class="card-title">TransLang Solutions Seeks Native Language Translators</h5>
                  <p class="card-text">TransLang Solutions is in need of native language translators for various language pairs. Join our team and help bridge language gaps!</p>
                  <a href="#" class="btn btn-primary">Apply Now</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 mx-auto">
              <div class="card mb-4">
                <div class="card-body">
                  <h5 class="card-title">Multilingual Experts Wanted at LinguaGlobal</h5>
                  <p class="card-text">LinguaGlobal is hiring multilingual experts to handle translation projects in diverse industries. Apply now and be part of our global team!</p>
                  <a href="#" class="btn btn-primary">Apply Now</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
  
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Translation Services</p>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    <?php include 'C:\xampp\htdocs\freelancing\footer.php';?>
  </script>
</body>
</html>
