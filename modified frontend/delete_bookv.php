<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Books</title>
    <link rel="normalize" href="css/normalize.css">
    <link href="https://fonts.cdnfonts.com/css/roseritta" rel="stylesheet">

    <style>
        * {
            margin: 0px;
            margin-bottom: -5px;
        }
        
        body {
            position: relative;
        }
        
        .background {
            width: 100%;
            height: 100%;
            z-index: -99999;
        }
        
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            z-index: 99;
        }
        
        .menuBar {
            position: absolute;
            left: 7vw;
            top: 19vh;
        }
        
        .menuImage {
            height:15px;
            width: auto;
        }
        
        .sideMenu {
            position: absolute;
            height: 100vh;
        }
        
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 100;
            top: 0;
            left: 0;
            overflow-x: hidden;
            transition: 0.3s;
        }
        
        .sidenav .closebtn {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 20px;
            color: white;
            margin-left: 50px;
            z-index: 101;
        }
        
        button {
            position: absolute;
            border-radius: 25px;
            z-index: 101;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 9px;
        }
        
        .requestsButton {
            font-family: 'Roseritta', sans-serif;
            background-color: black;
            color: white;
            font-size:2rem;
            border: 1px solid white;
            left: 6.7vw;
            top: 50vh;
        }
        
        .stockButton {
            font-family: 'Roseritta', sans-serif;
            color: black;
            font-size:2rem;
            border: 1px solid black;
            left: 8.4vw;
            top: 63vh;
        }
        
        .logoutButton {
            font-family: 'Roseritta', sans-serif;
            background-color: black;
            color: white;
            font-size:2rem;
            border: 1px solid white;
            left: 7.3vw;
            top: 75vh;
        }
        
        #bookName {
            position:absolute;
            right: 30vw;
            left: 30vw;
            top: 40vh;
            width: auto;
            height: 55px;
            border-radius: 27.5px;
            text-align: center;
        }
        
        #ISBN {
            position:absolute;
            right: 30vw;
            left: 30vw;
            top: 58vh;
            width: auto;
            height: 55px;
            border-radius: 27.5px;
            text-align: center;
        }
        
        #deleteBook {
            position:absolute;
            font-family: 'Roseritta', sans-serif;
            color: white;
            font-size: 130%;
            background-color: red;
            border: solid 1px black;
            border-radius: 25px;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 10px;
            right: 40vw;
            left: 40vw;
            top: 75vh;
            width: auto;
            height: 55px;
            border-radius: 27.5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="background">
        <img class="background" src="/BIBLIO/frontend/webimages/updatebooks.png" alt="Background of request approval page">
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

    <form action="delete_book.php" method="post">
        <input type="text" id="bookName" name="book_name" placeholder="Enter Book Name" required>
        <input type="number" id="ISBN" name="book_isbn" placeholder="Enter ISBN Number" required>
        <input type="submit" id="deleteBook" value="DELETE BOOK">
    </form>
</body>
</html>
