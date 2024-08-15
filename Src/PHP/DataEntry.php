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
  <title>Freelancing Job Search</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">workwise</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

      </div>
    </div>
  </nav>
  <?php include 'C:\xampp\htdocs\freelancing\header.php';?>


  <div class="container mt-5">
    <h1 class="text-center mb-4">Freelancing Data Entry Job Search</h1>
    
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
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <br><br><br><br><br>
    
        <!-- Job Listings -->
        <div id="jobListings"></div>
    </div>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
        // Simulated data for job listings
        var jobListings = [
          { 
            title: 'Data Entry Specialist',
            company: 'XYZ Data Solutions',
            location: 'New York, NY',
            description: 'We are seeking a detail-oriented and organized individual to join our data entry team.',
            responsibilities: ['Enter data into databases or spreadsheets', 'Verify accuracy of data entered', 'Maintain confidentiality of sensitive information'],
            contact: '123-456-7890'
          },
          {
            title: 'Data Entry Clerk',
            company: 'ABC Enterprises',
            location: 'Los Angeles, CA',
            description: 'ABC Enterprises is looking for a data entry clerk to assist with inputting information into our system.',
            responsibilities: ['Input data from source documents into prescribed computer database, files, and forms', 'Compile, verify accuracy, and sort information according to priorities'],
            contact: '987-654-3210'
          },
          {
            title: 'Database Administrator',
            company: 'DataTech Solutions',
            location: 'Chicago, IL',
            description: 'DataTech Solutions is in need of a skilled database administrator to manage and maintain our databases.',
            responsibilities: ['Ensure data integrity and security', 'Optimize database performance', 'Troubleshoot database issues'],
            contact: '555-123-4567'
          }
        ];
  
        // Display job listings
        displayJobListings(jobListings);
  
        function displayJobListings(jobListings) {
          var listingsHtml = '';
          jobListings.forEach(function(job) {
            listingsHtml += `
              <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title">${job.title}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">${job.company} - ${job.location}</h6>
                  <p class="card-text">${job.description}</p>
                  <h6 class="font-weight-bold">Responsibilities:</h6>
                  <ul class="list-group list-group-flush">
                    ${job.responsibilities.map(responsibility => `<li class="list-group-item">${responsibility}</li>`).join('')}
                  </ul>
                  <p class="mt-3">Contact: ${job.contact}</p>
                </div>
              </div>
            `;
          });
          $('#jobListings').html(listingsHtml);
        }
      });
    </script>
       <?php include 'C:\xampp\htdocs\freelancing\footer.php';?>
</body>
</html>
