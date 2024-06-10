<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lmsdatabase");

    $book_isbn=$_POST['book_isbn'];
    
    //$book_name=$_POST['book_name'];

    $book_isbn = mysqli_real_escape_string($connection, $book_isbn);
    $query ="delete from books where book_isbn= '$book_isbn'";

	$query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
	alert("Book Deleted Successfully");
	//window.location.href = "manage_book.php";
</script>