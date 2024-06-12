<?php
include 'root.php'; // Assuming 'root.php' contains your database connection details

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $job_title = $_POST['job_title'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    // Prepare the SQL query
    $sql = "INSERT INTO form (first_name, last_name, phone_number, email, job_title, country, message) 
            VALUES ('$first_name', '$last_name', '$phone_number', '$email', '$job_title', '$country', '$message')";

    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>
