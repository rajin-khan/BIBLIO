<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
    <link rel="normalize" href="css/normalize.css">
    <link rel="stylesheet" href="adminStock.css">
    <link href="https://fonts.cdnfonts.com/css/roseritta" rel="stylesheet">
    <style>
        table {
            width: 95%;
            margin: 20px auto;
            border-collapse: collapse;
            border: 2px solid #333;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tbody tr:hover {
            background-color: #f5f5f5;
        }
        .stockSpace {
            overflow-x: auto;
            margin-top: 20px;
        }
        .table-header th {
            padding: 15px;
            text-align: center;
        }
        .table-body td {
            text-align: center;
        }
        .table-body td.blue-text {
            color: blue;
        }
    </style>
</head>
<body>
    
    <div class="background">
        <img class="background" src="/BIBLIO/frontend/webimages/requestadmin.png" alt="Background of profile page">
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
        <table>
            <thead class="table-header">
                <tr>
                    <th>Request ID</th>
                    <th>Book Name</th>
                    <th>Book ISBN</th>
                    <th>Author Name</th>
                    <th>Sender Name</th>
                </tr>
            </thead>
            <tbody class="table-body">

               
            <?php   //backend start
$conn = new mysqli("localhost","root" , "","lmsdatabase" ); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM requestbook";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
 echo "<tr>";
 echo "<td class='blue-text'>" . $row["requesNumber"] . "</td>";
echo "<td class='blue-text'>" . $row["bookname"] . "</td>";
echo "<td class='blue-text'>" . $row["ISBN"] . "</td>";
    echo "<td class='blue-text'>" . $row["authorname"] . "</td>";
     echo "<td class='blue-text'>" . $row["sendername"] . "</td>";
   
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

