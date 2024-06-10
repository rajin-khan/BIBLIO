<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lmsdatabase");

	$book_name=$_POST['book_name'];
    $book_isbn=$_POST['book_isbn'];
    $new_book_copies=$_POST['new_book_copies'];
    
   

    $book_isbn = mysqli_real_escape_string($connection, $book_isbn);
    $query ="update books set no_of_copies='$new_book_copies' where book_isbn= '$book_isbn'";

	$query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
	alert("total number of copies updated Successfully");
	window.location.href = "stockshow.php";
</script>