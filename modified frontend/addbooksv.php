<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
    <link rel="normalize" href="css/normalize.css">
    <link rel="stylesheet" href="addBooks.css">
    <link href="https://fonts.cdnfonts.com/css/roseritta" rel="stylesheet">
</head>
<body>

    <div class="background">
        <img class="background" src="/BIBLIO/frontend/webimages/addbooks.png" alt="Background of profile page">
        <div id="overlay" class="overlay"></div>
    </div>
    
    <div class="menuBar" onclick="openNav()">
        <img class="menuImage" src="/BIBLIO/frontend/webimages/menu black.png" alt="menu bar">
    </div>
    
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <img class="sideMenu" src="/BIBLIO/frontend/webimages/menubar.png" alt="">
        <a href="/BIBLIO/frontend/adminRequest.html">
            <button class="requestsButton">REQUESTS</button>
        </a>
        <a href="/BIBLIO/frontend/adminStock.html">
            <button class="stockButton">STOCK</button>
        </a>
        <a href="/BIBLIO/frontend/landing.html">
            <button class="logoutButton">LOG OUT</button>
        </a>
    </div>
    
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "400px";
            document.getElementById("overlay").style.display = "block";
        }
          
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("overlay").style.display = "none";
        }
    </script>

    <form action="addbooks.php" method="POST">
        <input type="text" id="bookName" name="book_name" placeholder="Book Name" required>
        <input type="number" id="ISBN" name="book_isbn" placeholder="Enter ISBN Number" required>
        <input type="text" id="authorName" name="author_name" placeholder="Enter Author Name" required>
        <input type="number" id="authorID" name="author_id" placeholder="Enter New Author ID" required>
        <input type="number" id="catID" name="cat_id" placeholder="Enter Category ID" required>
        <input type="number" id="copies" name="no_of_copies" placeholder="Enter Number of Copies" required>
        <input type="number" id="cost" name="book_price" placeholder="Enter Rent Cost" required>
        <input type="submit" id="addButton" value="ADD BOOK">
    </form>
    
</body>
</html>
