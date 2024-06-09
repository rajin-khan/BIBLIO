<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('BIBLIO/frontend/webimages/available.png') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 80%;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center; 
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: transparent; 
        }
        table, th, td {
            border: 1px solid #ccc; 
        }
        th, td {
            padding: 10px;
            text-align: left;
            background: transparent; 
        }
        th {
            background: transparent; 
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        function goToAddBooks() {
            window.location.href = 'addbooksv.php';
        }
    </script>
</head>
<body>
    <div class="container">
        <h1></h1>
        <table>
            <thead>
                <tr>
                    <th>Book ISBN</th>
                    <th>Book Name</th>
                    <th>Author Name</th>
                    <th>Author ID</th>
                    <th>Category ID</th>
                    <th>No of Copies</th>
                    <th>Book Rented Price</th>
                </tr>
            </thead>
            <tbody>
 <?php


$conn = new mysqli("localhost","root" , "","lmsdatabase" );

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
 echo "<tr>";
 echo "<td>" . $row["book_isbn"] . "</td>";
echo "<td>" . $row["book_name"] . "</td>";
    echo "<td>" . $row["author_name"] . "</td>";
     echo "<td>" . $row["author_id"] . "</td>";
     echo "<td>" . $row["cat_id"] . "</td>";
     echo "<td>" . $row["no_of_copies"] . "</td>";
     echo "<td>" . $row["book_price"] . "</td>";
     echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>Nothimg here</td></tr>";
}
$conn->close();
?>


</tbody>
 </table>
<button onclick="goToAddBooks()">Add New Books</button>
</div>
</body>
</html>