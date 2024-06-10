<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lmsdatabase");

	$book_name=$_POST['book_name'];
    $book_isbn=$_POST['book_isbn'];
    $new_book_name=$_POST['new_book_name'];
    
   

    $book_isbn = mysqli_real_escape_string($connection, $book_isbn);
    $query ="update books set book_name='$new_book_name' where book_isbn= '$book_isbn'";

	$query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
	alert("Book's name updated Successfully");
	window.location.href = "stockshow.php";
</script>