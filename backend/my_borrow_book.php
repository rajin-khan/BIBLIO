<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="adminStock.css">
    <link href="https://fonts.cdnfonts.com/css/roseritta" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .background {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .background img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.5;
        }

        .menuBar {
            padding: 10px;
            cursor: pointer;
        }

        .menuImage {
            width: 30px;
            height: 30px;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #overlay {
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            z-index: 1;
        }

        form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        #username {
            width: 300px;
            height: 30px;
            border-radius: 15px;
            text-align: center;
            margin-bottom: 20px;
        }

        #enterButton {
            font-family: 'Roseritta', sans-serif;
            color: white;
            font-size: 150%;
            background-color: black;
            border: solid 1px white;
            border-radius: 25px;
            padding: 10px 30px;
            cursor: pointer;
        }

        .stockSpace {
            margin: 20px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            color: #333; /* Adjust text color */
            font-size: 18px; /* Adjust font size */
            font-weight: bold; /* Make text bold */
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    
    <div class="background">
        <img class="background" src="BIBLIO/frontend/webimages/pexels-orlovamaria-4916226.jpg" alt="Background of profile page">
        <div id="overlay" class="overlay"></div>
    </div>

    <div class="menuBar" onclick="openNav()">
        <img class="menuImage" src="/BIBLIO/frontend/webimages/menu black.png" alt="menu bar">
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <img class="sideMenu" src="/BIBLIO/frontend/webimages/menubar.png" alt="">
        <a href="/BIBLIO/frontend/adminRequest.html"><button class="requestsButton">REQUESTS</button></a>
        <a href="/BIBLIO/frontend/adminStock.html"><button class="stockButton">STOCK</button></a>
        <a href="/BIBLIO/frontend/landing.html"><button class="logoutButton">LOG OUT</button></a>
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
        <table border="1">
            <thead>
                <tr>
                    <th>Rent Id</th>
                    <th>Book Names</th>
                    <th>Total Price</th>
                    <th>Borrower Name</th>
                </tr>
            </thead>
            <tbody>
               


            <?php   //backend start
$conn = new mysqli("localhost","root" , "","lmsdatabase" ); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $conn->real_escape_string($_POST['username']);

$sql = "SELECT * FROM rentedbooks where user_name='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
echo "<td>" . $row["book_names"] . "</td>";
    echo "<td>" . $row["total_price"] . "</td>";
     echo "<td>" . $row["user_name"] . "</td>";
     
    }
} else {
    echo "<tr><td colspan='6'>Nothimg here</td></tr>";
}
$conn->close();
?>

</tbody>
        </table>
    </div>