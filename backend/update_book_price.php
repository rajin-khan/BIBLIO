<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lmsdatabase");

	$book_name=$_POST['book_name'];
    $book_isbn=$_POST['book_isbn'];
    $new_rent_price=$_POST['new_rent_price'];
    
   

    $book_isbn = mysqli_real_escape_string($connection, $book_isbn);
    $query ="update books set book_price='$new_rent_price' where book_isbn= '$book_isbn'";

	$query_run = mysqli_query($connection,$query);
    //echo $book_name;
?>

<script type="text/javascript">
	alert(" Book new rent price updated Successfully");
	window.location.href = "stockshow.php";
</script>