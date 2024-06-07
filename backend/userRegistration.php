<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $connection = mysqli_connect("localhost", "root", "", "lmsdatabase");

    // Check if connection was successful
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['DOB'];
    $mobile = $_POST['mobile'];
    $id = $_POST['id'];
    $password = $_POST['password'];

    
    $query = "INSERT INTO users (name, email, DOB, mobile, id, password) VALUES ('$name', '$email', '$dob', '$mobile', '$id', '$password')";
    $query_run = mysqli_query($connection, $query);

    
    if ($query_run) {
        echo "<script type='text/javascript'>alert('Registration successful! You may now log in.');</script>";
        
    } else {
        echo "Error: " . mysqli_error($connection);
    }

   
    mysqli_close($connection);
}
?>
