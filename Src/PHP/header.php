<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="Styles.css">
    <!-- Add any additional CSS files or stylesheets here -->
    <style>
              /* Styles for the navigation menu */
              nav ul li a {
            color: green; /* Set the color of menu items to red */
            text-decoration: none; /* Remove underline */
        }
        
        /* Style for dropdown menu items */
        .dropdown-content a {
            color: green; /* Set the color of dropdown items to red */
        }
    </style>
</head>
<body>
    <!-- Navigation Menu -->
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="admin/dashboard.php">Dashboard</a></li>
        <li><a href="admin/manage_projects.php">Manage Projects</a></li>
        <li><a href="admin/manage_users.php">Manage Users</a></li>
        <li><a href="admin/manage_jobs.php">Manage jobs</a></li>
        <li><a href="admin/login.php">log in</a></li>
        <li><a href="admin/newjob.php">new job</a></li>
        <li><a href="admin/sighnup.php">sign up</a></li>
       
        <li class="dropdown">
          <a href="findjob.php" class="dropbtn">Find Job</a>
          <div class="dropdown-content">
            <a href="jobs/webdevelopment.php">Web Development</a>
            <a href="jobs/gd.php">Graphic Design</a>
            <a href="jobs/writing.php">Writing</a>
            <a href="jobs/DigitalMarketing.php">Digital Marketing</a>
            <a href="jobs/DataEntry.php">Data Entry</a>
            <a href="jobs/translation.php">Translation</a>
          </div>
        </li>
      </ul>
    </nav>
    <div class="logo">
      <img src="../images/freelance.png" alt="Freelancing Platform Logo">
    </div>
</body>
</html>
