<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "FreelancePlatform";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['removeUser'])) {
  $user_id = $_POST['user_id'];
  
  $sql = "DELETE FROM Users WHERE user_id = '$user_id'";
  if ($conn->query($sql) === TRUE) {
    echo "User removed successfully";
    
     header("Location: your_page.php");
     exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}


if(isset($_POST['updateUser'])) {
  $user_id = $_POST['user_id'];
  $new_username = $_POST['new_username'];
  $new_email = $_POST['new_email'];
  
  $sql = "UPDATE Users SET username = '$new_username', email = '$new_email' WHERE user_id = '$user_id'";
  if ($conn->query($sql) === TRUE) {
    
    echo json_encode(array("status" => "success"));
  } else {
    
    echo json_encode(array("status" => "error", "message" => "Error: " . $sql . "<br>" . $conn->error));
  }
}


if(isset($_POST['addUser'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];

 
  $sql = "INSERT INTO Users (username, email) VALUES ('$username', '$email')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}


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
  
  <?php include 'C:\xampp\htdocs\freelancing\header.php';?>

 
  <div class="container mt-5">
    <h1>Update User Info</h1>
    <div class="row">
      <div class="col-md-4">
       
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
 
  $sql = "SELECT user_id, username, email FROM Users";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  
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

 
<script>
  $(document).ready(function() {
   
    $('#updateUserForm').submit(function(event) {
      event.preventDefault(); 


      var formData = $(this).serialize();

    
      $.ajax({
        type: 'POST',
        url: '', 
        data: formData,
        dataType: 'json', 
        success: function(response) {
          
          if (response.status === 'success') {
            var userId = $('#update_user_id').val();
            var newEmail = $('#new_email').val();
            $('#email_' + userId).text(newEmail); 
            
            $('#updateUserModal').modal('hide');
          } else {
           
            alert('Failed to update user. Please try again.');
          }
        },
        error: function(xhr, status, error) {
          
          console.error(xhr.responseText);
          alert('Failed to update user. Please try again.');
        }
      });
    });
  });
</script>


 
  <?php include 'C:\xampp\htdocs\freelancing\footer.php';?>
</body>
</html>
