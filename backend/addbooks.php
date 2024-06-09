<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $connection = mysqli_connect("localhost", "root", "", "lmsdatabase");


    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    
 $book_name= $_POST['book_name'];
 $book_isbn = $_POST['book_isbn'];
 $author_name = $_POST['author_name'];
 $author_id = $_POST['author_id'];
 $cat_id = $_POST['cat_id'];
 $no_of_copies = $_POST['no_of_copies'];
 $book_price = $_POST['book_price'];

    
 $query = "INSERT INTO books (book_name, book_isbn , author_name, author_id,cat_id ,no_of_copies,book_price ) VALUES ('$book_name', '$book_isbn', '$author_name', '$author_id', '$cat_id', '$no_of_copies','$book_price')";
 $query_run = mysqli_query($connection, $query);

    
    if ($query_run) {
        echo "<script type='text/javascript'>alert('Registration successful! You may now log in.');</script>";
        
    } else {
        echo "Error: " . mysqli_error($connection);
    }

   
    mysqli_close($connection);

   
}
?>
