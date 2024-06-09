<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
    <link rel="normalize" href="css/normalize.css">
    <link rel="stylesheet" href="adminStock.css">
    <link href="https://fonts.cdnfonts.com/css/roseritta" rel="stylesheet">
</head>
<body>
    
    <div class="background">
        <img class="background" src="/BIBLIO/frontend/webimages/stockpage.png" alt="Background of profile page">
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

<div class="stockSpace">
        <table border="1" style="width: 100%; text-align: center; background-color: white;">
            <thead>
                <tr>
                    <th>Book ISBN</th>
                    <th>Book Name</th>
                    <th>Author Name</th>
                    <th>Author ID</th>
                    <th>Category ID</th>
                    <th>No. of Copies</th>
                    <th>Book Price</th>
                </tr>
            </thead>
            <tbody>








<?php   //backend start
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
    </div>

    <a href="updateBooksv.php">
        <button class="update morebutton">UPDATE BOOKS</button>
    </a>

    <a href="addBooksv.php">
        <button class="add morebutton">ADD BOOKS</button>
    </a>

</body>
</html>
