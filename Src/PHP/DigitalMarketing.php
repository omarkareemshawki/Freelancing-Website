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
  <title>Digital Marketing Services</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Add custom styles here */
  </style>
</head>
<body>
<?php include 'C:\xampp\htdocs\freelancing\header.php';?>

  <!-- Hero Section -->
  <section class="jumbotron text-center">
    <h1 class="display-4">Drive Your Business Forward with Digital Marketing</h1>
    <p class="lead">We offer a range of digital marketing services to help you reach your audience, increase engagement, and grow your business.</p>
    <a href="#services" class="btn btn-primary btn-lg">Learn More</a>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Our Services</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Search Engine Optimization (SEO)</h5>
              <p class="card-text">Improve your website's visibility on search engines and attract more organic traffic.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Social Media Marketing</h5>
              <p class="card-text">Engage with your audience on social media platforms and build brand awareness.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Email Marketing</h5>
              <p class="card-text">Send targeted email campaigns to nurture leads and drive conversions.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">Email Marketing</h5>
                <p class="card-text">Send targeted email campaigns to nurture leads and drive conversions.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">Conversion Rate Optimization (CRO)</h5>
                <p class="card-text">Optimize your website to increase the percentage of visitors who take desired actions, such as making a purchase or filling out a contact form.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">Pay-Per-Click (PPC) Advertising</h5>
                <p class="card-text">Drive targeted traffic to your website through paid advertising campaigns on search engines and social media platforms.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">Social Media Advertising</h5>
                <p class="card-text">Run targeted advertising campaigns on social media platforms to reach your ideal customers and drive conversions.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">Influencer Marketing</h5>
                <p class="card-text">Partner with influencers in your industry to promote your products or services to their followers.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">Analytics and Reporting</h5>
                <p class="card-text">Track and analyze the performance of your digital marketing campaigns to make data-driven decisions and optimize your strategy.</p>
              </div>
      </div>
    </div>
  </section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-4">Client Testimonials</h2>
      <div id="carouselTestimonials" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-4">
                <div class="card text-center">
                  <div class="card-body">
                    <p class="card-text">"I saw a significant increase in website traffic and leads after implementing their SEO strategies."</p>
                    <h5 class="card-title">John Doe</h5>
                    <p class="card-text"><small class="text-muted">CEO, ABC Company</small></p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card text-center">
                  <div class="card-body">
                    <p class="card-text">"Their social media marketing campaigns helped us engage with our target audience and build brand loyalty."</p>
                    <h5 class="card-title">Jane Smith</h5>
                    <p class="card-text"><small class="text-muted">Marketing Manager, XYZ Inc.</small></p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card text-center">
                  <div class="card-body">
                    <p class="card-text">"I was impressed by their email marketing strategies, which resulted in a significant increase in conversions."</p>
                    <h5 class="card-title">Michael Johnson</h5>
                    <p class="card-text"><small class="text-muted">E-commerce Manager, Acme Corp.</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-4">
                <div class="card text-center">
                  <div class="card-body">
                    <p class="card-text">"Their PPC advertising campaigns helped us reach new customers and increase sales."</p>
                    <h5 class="card-title">Emily Williams</h5>
                    <p class="card-text"><small class="text-muted">Digital Marketing Director, Global Solutions</small></p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card text-center">
                  <div class="card-body">
                    <p class="card-text">"I highly recommend their content marketing services. They helped us establish thought leadership in our industry."</p>
                    <h5 class="card-title">David Brown</h5>
                    <p class="card-text"><small class="text-muted">Founder, Innovative Solutions</small></p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card text-center">
                  <div class="card-body">
                    <p class="card-text">"Their analytics and reporting tools provided valuable insights that helped us refine our digital marketing strategy."</p>
                    <h5 class="card-title">Sarah Taylor</h5>
                    <p class="card-text"><small class="text-muted">Marketing Director, Bright Ideas</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselTestimonials" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselTestimonials" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Contact Us</h2>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form id="contactForm">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Smooth scrolling effect for navigation links
    $(document).ready(function() {
      $('a.nav-link').on('click', function(event) {
        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
            window.location.hash = hash;
          });
        }
      });
    });

    // Form validation
    $(document).ready(function() {
      $('#contactForm').submit(function(event) {
        var isValid = true;
        $('#contactForm input, #contactForm textarea').each(function() {
          if ($.trim($(this).val()) == '') {
            isValid = false;
            $(this).addClass('is-invalid');
          } else {
            $(this).removeClass('is-invalid');
          }
        });
        if (!isValid) {
          event.preventDefault();
        }
      });
    });

    // Animation effects
    $(document).ready(function() {
      $('.jumbotron').addClass('animated bounceInDown');
      $('.card').addClass('animated fadeIn');
    });
  </script>
  <?php include 'C:\xampp\htdocs\freelancing\footer.php';?>
  </body>
</html>
