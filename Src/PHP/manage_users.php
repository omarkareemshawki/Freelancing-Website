<?php
// PHP code for database connection and functions
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

// Check if the form for removing a user is submitted
if(isset($_POST['removeUser'])) {
  $user_id = $_POST['user_id'];
  // SQL query to remove the user with the given user ID
  $sql = "DELETE FROM Users WHERE user_id = '$user_id'";
  if ($conn->query($sql) === TRUE) {
    echo "User removed successfully";
    // Refresh the page or redirect to reflect the changes
    // header("Location: your_page.php");
    // exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Check if the form for updating a user is submitted
if(isset($_POST['updateUser'])) {
  $user_id = $_POST['user_id'];
  $new_username = $_POST['new_username'];
  $new_email = $_POST['new_email'];
  // SQL query to update the user with the given user ID
  $sql = "UPDATE Users SET username = '$new_username', email = '$new_email' WHERE user_id = '$user_id'";
  if ($conn->query($sql) === TRUE) {
    // Send JSON response to indicate success
    echo json_encode(array("status" => "success"));
  } else {
    // Send JSON response to indicate failure
    echo json_encode(array("status" => "error", "message" => "Error: " . $sql . "<br>" . $conn->error));
  }
}

// Check if the form for adding a new user is submitted
if(isset($_POST['addUser'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];

  // SQL query to insert a new user into the Users table
  $sql = "INSERT INTO Users (username, email) VALUES ('$username', '$email')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Retrieve users from the database
$sql = "SELECT user_id, username, email FROM Users";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User Info - Freelancing Platform</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../includes/styles.css">
</head>
<body>
  <!-- Header -->
  <?php include 'C:\xampp\htdocs\freelancing\header.php';?>

  <!-- Main Content -->
  <div class="container mt-5">
    <h1>Update User Info</h1>
    <div class="row">
      <div class="col-md-4">
        <!-- Add User Form -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add New User</h5>
            <form method="post">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                <small id="usernameError" class="text-danger"></small>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                <small id="emailError" class="text-danger"></small>
              </div>
              <button type="submit" name="addUser" class="btn btn-primary">Add User</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <!-- Update User Form -->
        <div class="card mt-4">
          <div class="card-body">
            <h5 class="card-title">Update User</h5>
            <form id="updateUserForm" method="post">
              <div class="form-group">
                <label for="new_username">New Username</label>
                <input type="text" class="form-control" id="new_username" name="new_username" placeholder="Enter new username">
              </div>
              <div class="form-group">
                <label for="new_email">New Email</label>
                <input type="email" class="form-control" id="new_email" name="new_email" placeholder="Enter new email">
              </div>
              <input type="hidden" id="update_user_id" name="user_id">
              <button type="submit" name="updateUser" class="btn btn-primary">Update User</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <!-- User List -->
        <div class="card mt-4">
          <div class="card-body">
            <h5 class="card-title">User List</h5>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>User ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
  <?php
  // Retrieve users from the database
  $sql = "SELECT user_id, username, email FROM Users";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["user_id"] . "</td>";
      echo "<td>" . $row["username"] . "</td>";
      echo "<td id='email_" . $row["user_id"] . "'>" . $row["email"] . "</td>";
      echo "<td>
              <form method='post'>
                <input type='hidden' name='user_id' value='" . $row["user_id"] . "'>
                <button type='submit' name='removeUser' class='btn btn-danger btn-sm'>Remove</button>
              </form>
            </td>";
      echo "</tr>";
    }
  } else {
    echo "<tr><td colspan='4'>No users found</td></tr>";
  }
  ?>


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript for form validation -->
 <!-- JavaScript for form submission -->
<script>
  $(document).ready(function() {
    // Handle form submission
    $('#updateUserForm').submit(function(event) {
      event.preventDefault(); // Prevent form submission

      // Collect form data
      var formData = $(this).serialize();

      // Submit form using AJAX
      $.ajax({
        type: 'POST',
        url: '', // Leave this empty if the update functionality is in the same file
        data: formData,
        dataType: 'json', // Specify JSON data type
        success: function(response) {
          // Update user list if update is successful
          if (response.status === 'success') {
            var userId = $('#update_user_id').val();
            var newEmail = $('#new_email').val();
            $('#email_' + userId).text(newEmail); // Update email in user list
            // Optionally, you can close the modal here if needed
            $('#updateUserModal').modal('hide');
          } else {
            // Handle error if update fails
            alert('Failed to update user. Please try again.');
          }
        },
        error: function(xhr, status, error) {
          // Handle error
          console.error(xhr.responseText);
          alert('Failed to update user. Please try again.');
        }
      });
    });
  });
</script>


  <!-- Footer -->
  <?php include 'C:\xampp\htdocs\freelancing\footer.php';?>
</body>
</html>
