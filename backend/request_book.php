<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $connection = mysqli_connect("localhost", "root", "", "lmsdatabase");


    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    
 $bookname= $_POST['bookName'];
 $ISBN = $_POST['ISBN'];
 $authorName = $_POST['authorName'];
 $Sender_name=$_POST['Sender_name'];
 

    
 $query = "INSERT INTO requestbook (bookname, ISBN , authorname,sendername) VALUES ('$bookname', '$ISBN', '$authorName','$Sender_name')";
 $query_run = mysqli_query($connection, $query);

    
    if ($query_run) {
        echo "<script type='text/javascript'>alert('request submitted');</script>";
        
    } else {
        echo "Error: " . mysqli_error($connection);
    }

   
    mysqli_close($connection);

}
?> 