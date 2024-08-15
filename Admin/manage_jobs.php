<?php
 
    $connect = mysqli_connect("localhost", "root", "", "freeLanceplatform");
    if (!$connect) {
        die("Failed to connect to database: " . mysqli_connect_error());
    }


    


function addJob($conn, $client_id, $title, $description) {
    $stmt = $conn->prepare("INSERT INTO Jobs (client_id, title, description) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $client_id, $title, $description);
    $stmt->execute();
    echo "New job added successfully";
    $stmt->close();
}


function updateJob($conn, $job_id, $title, $description, $status) {
    $stmt = $conn->prepare("UPDATE Jobs SET title = ?, description = ?, status = ? WHERE job_id = ?");
    $stmt->bind_param("sssi", $title, $description, $status, $job_id);
    $stmt->execute();
    echo "Job updated successfully";
    $stmt->close();
}


function deleteJob($conn, $job_id) {
    $stmt = $conn->prepare("DELETE FROM Jobs WHERE job_id = ?");
    $stmt->bind_param("i", $job_id);
    $stmt->execute();
    echo "Job deleted successfully";
    $stmt->close();
}


if (isset($_POST['add'])) {
    addJob($conn, $_POST['client_id'], $_POST['title'], $_POST['description']);
}


if (isset($_POST['update'])) {
    updateJob($conn, $_POST['job_id'], $_POST['title'], $_POST['description'], $_POST['status']);
}


if (isset($_POST['delete'])) {
    deleteJob($conn, $_POST['job_id']);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Jobs</title>

</head>
<body>
<?php include 'C:\xampp\htdocs\freelancing\header.php';?>
    <h1>Manage Jobs</h1>

   
    <form method="post">
        <input type="text" name="client_id" placeholder="Client ID">
        <input type="text" name="title" placeholder="Job Title">
        <input type="text" name="description" placeholder="Job Description">
        <button type="submit" name="add">Add Job</button>
    </form>

    
    <form method="post">
        <input type="text" name="job_id" placeholder="Job ID">
        <input type="text" name="title" placeholder="New Title">
        <input type="text" name="description" placeholder="New Description">
        <select name="status">
            <option value="open">Open</option>
            <option value="closed">Closed</option>
            <option value="in progress">In Progress</option>
        </select>
        <button type="submit" name="update">Update Job</button>
    </form>

 
    <form method="post">
        <input type="text" name="job_id" placeholder="Job ID">
        <button type="submit" name="delete">Delete Job</button>
    </form>
    <?php include 'C:\xampp\htdocs\freelancing\footer.php';?>
</body>
</html>
