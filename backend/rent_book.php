<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lmsdatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

$user_name = $_POST['user_name'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['books']) && !empty($_POST['books'])) {
        $selected_books = $_POST['books'];
        
        $total_price = 0;
        foreach ($selected_books as $book) {
            $sql = "SELECT book_price FROM books WHERE book_name='$book'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $total_price += $row["book_price"];
            }
        }

        $book_names = implode(",", $selected_books);
        $sql = "INSERT INTO rentedbooks (book_names, total_price,user_name) VALUES ('$book_names', '$total_price','$user_name')";
        if ($conn->query($sql) === TRUE) {
            echo "<div style='text-align: center; margin-top: 50px;'>";
            echo "<div style='display: inline-block; padding: 20px; border: 2px solid #ddd; border-radius: 10px; background-color: #f9f9f9;'>";
            echo "<h2 style='font-size: 36px; color: #4CAF50;'>Books rented successfully!</h2>";
            echo "<p style='font-size: 24px; color: #333;'><strong>Rented Books:</strong> " . implode(", ", $selected_books) . "</p>";
            echo "<p style='font-size: 24px; color: #333;'><strong>Total Price:</strong> $" . $total_price . "</p>";
            echo "</div>";
            echo "</div>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "No books selected.";
    }
}


$conn->close();
?>

