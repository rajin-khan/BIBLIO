<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
        }
        .header h1 {
            margin: 0;
        }
        .menu {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }
        .menu a {
            text-decoration: none;
            color: #333;
            background: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            color: #fff;
            transition: background 0.3s;
        }
        .menu a:hover {
            background: #0056b3;
        }
        .content {
            display: none;
        }
        .content.active {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Admin Dashboard</h1>
        </div>
        <div class="menu">
            <a href="add_book.php" id="add_booklink">Add Book</a>
            <a href="stockshow.php" id="stockCheckLink">Stock Check</a>
            <a href="#" id="option3Link">Option 3</a>
        </div>
        <div class="content" id="addBookContent">
            <h2>Add Book</h2>
            <form>
                <label for="bookTitle">Book Title:</label>
                <input type="text" id="bookTitle" name="bookTitle"><br><br>
                <label for="author">Author:</label>
                <input type="text" id="author" name="author"><br><br>
                <label for="isbn">ISBN:</label>
                <input type="text" id="isbn" name="isbn"><br><br>
                <button type="submit">Add Book</button>
            </form>
        </div>
        <div class="content" id="option3Content">
            <h2>Option 3</h2>
            <p>Content for option 3.</p>
        </div>
    </div>

    <script>
        document.getElementById('addBookLink').addEventListener('click', function() {
            showContent('addBookContent');
        });
        document.getElementById('option3Link').addEventListener('click', function() {
            showContent('option3Content');
        });

        function showContent(contentId) {
            var contents = document.querySelectorAll('.content');
            contents.forEach(function(content) {
                content.classList.remove('active');
            });
            document.getElementById(contentId).classList.add('active');
        }
    </script>
</body>
</html>
