<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Books</title>
    <style>
        body {
            background-color: skyblue; 
            background-image: url('/BIBLIO/frontend/webimages/borrowed.png'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #333; 
            font-family: Arial, sans-serif; 
        }
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: rgba(165, 42, 42, 0.8); 
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: rgba(139, 69, 19, 0.8); 
            color: white; 
        }
        td {
            font-size: 18px;
            background-color: rgba(165, 42, 42, 0.8); 
            color: white; 
        }
        h2 {
            text-align: center;
            color: green; 
            background-color: rgba(255, 255, 255, 0.8); 
            display: inline-block;
            padding: 10px;
            border-radius: 5px;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
        input[type="submit"], input[type="text"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px; 
        }
        input[type="submit"] {
            background-color: green; 
            color: white; 
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: darkgreen; 
        }
        input[type="text"] {
            margin-top: 20px;
            width: 50%;
            background-color: rgba(139, 69, 19, 0.8); 
            color: white; 
            text-align: center;
            padding: 15px; 
            font-size: 18px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            border: 2px solid rgba(165, 42, 42, 0.8); 
            transition: all 0.3s ease; 
        }
        input[type="text"]:focus {
            outline: none; 
            background-color: rgba(165, 42, 42, 0.9); 
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); 
            border: 2px solid rgba(139, 69, 19, 0.8); 
        }
    </style>
</head>
<body>
    <h2>Select Books For Borrowed</h2>
    <form action="rent_book.php" method="POST">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "lmsdatabase";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT book_name, book_price FROM books";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Select</th><th>Book Name</th><th>Price</th></tr>";
            
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td><input type='checkbox' name='books[]' value='" . $row["book_name"] . "' data-price='" . $row["book_price"] . "'></td>";
                    echo "<td>" . $row["book_name"] . "</td>";
                    echo "<td>$" . $row["book_price"] . "</td>";
                    echo "</tr>";
                } 
                echo "</table>";
            } else {
                echo "<p style='text-align: center;'>0 results</p>";
            }
            $conn->close();
        ?>
        <div>
            <input type="text" name="user_name" placeholder="Enter your user name" required>
        </div>
        <div>
            <input type="submit" value="Next">
        </div>
    </form>
</body>
</html>
